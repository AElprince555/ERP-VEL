<?php

namespace App\Livewire\Layout\DynamicTable;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $model;
    public array $headers;
    public array $hiddenHeaders = [];
    public array $toggleHeaders = [];
    public array $sortColumns = [];
    public array $sortDirections = [];
    public string $search = '';

    public function mount(string $model, array $hiddenHeaders = []): void
    {
        $this->model = $model;
        $this->hiddenHeaders = $hiddenHeaders;

        $this->headers = Schema::getColumnListing((new $this->model)->getTable());
        $this->toggleHeaders = array_diff($this->headers, $this->hiddenHeaders);
    }

    public function toggleColumn(string $header): void
    {
        if (($key = array_search($header, $this->toggleHeaders)) !== false) {
            unset($this->toggleHeaders[$key]);
        } else {
            $this->toggleHeaders[] = $header;
        }
    }

    public function sortBy(string $header): void
    {
        if (isset($this->sortColumns[$header])) {
            $this->sortDirections[$header] = $this->sortDirections[$header] === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumns[$header] = $header;
            $this->sortDirections[$header] = 'asc';
        }

        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updateRecord(int $id): void
    {
        // Add logic to update the record
        session()->flash('message', 'Update functionality not implemented yet.');
    }

    public function deleteRecord(int $id): void
    {
        $modelClass = $this->model;
        $record = $modelClass::findOrFail($id);
        $record->delete();
        session()->flash('message', 'Record deleted successfully.');

        $this->resetPage();
    }

    public function render(): Factory|Application|View|\Illuminate\View\View
    {
        $modelClass = $this->model;
        $query = $modelClass::query();

        if ($this->search) {
            $query->where(function (Builder $query) {
                foreach ($this->headers as $header) {
                    if (str_ends_with($header, '_id')) {
                        $relation = rtrim($header, '_id');
                        $relationTable = (new $this->model)->$relation()->getRelated()->getTable();
                        $query->orWhereHas($relation, function (Builder $query) use ($relationTable) {
                            $query->where("$relationTable.name", 'like', '%' . $this->search . '%');
                        });
                    } else {
                        $query->orWhere($header, 'like', '%' . $this->search . '%');
                    }
                }
            });
        }

        if (empty($this->sortColumns)) {
            $query->orderBy('id', 'asc');
        } else {
            foreach ($this->sortColumns as $column) {
                $query->orderBy($column, $this->sortDirections[$column]);
            }
        }

        $rows = $query->paginate(10);

        $relatedData = [];
        foreach ($rows as $row) {
            foreach ($this->headers as $header) {
                if (str_ends_with($header, '_id')) {
                    $relationName = rtrim($header, '_id');
                    if ($row->$relationName) {
                        $relatedData[$row->id][$header] = [
                            'name' => $row->$relationName->name,
                            'url' => route($row->$relationName->application()->short, $row->$relationName->id),
                        ];
                    }
                }
            }
        }

        return view('livewire.layout.dynamic-table.index', [
            'rows' => $rows,
            'relatedData' => $relatedData,
            'headers' => $this->headers,
            'toggleHeaders' => $this->toggleHeaders,
        ]);
    }
}
