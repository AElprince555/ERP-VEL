<?php

namespace App\Livewire\Layout\DynamicTable;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $model;
    public $headers;
    public $hiddenHeaders = [];
    public $toggleHeaders = [];
    public $sortColumns = [];
    public $sortDirections = [];
    public $search = '';

    public function mount($model, $hiddenHeaders = [])
    {
        $this->model = $model;
        $this->hiddenHeaders = $hiddenHeaders;

        $this->headers = Schema::getColumnListing((new $this->model)->getTable());
        $this->toggleHeaders = array_diff($this->headers, $this->hiddenHeaders);
    }

    public function toggleColumn($header)
    {
        if (($key = array_search($header, $this->toggleHeaders)) !== false) {
            unset($this->toggleHeaders[$key]);
        } else {
            $this->toggleHeaders[] = $header;
        }
    }

    public function sortBy($header)
    {
        if (isset($this->sortColumns[$header])) {
            $this->sortDirections[$header] = $this->sortDirections[$header] === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumns[$header] = $header;
            $this->sortDirections[$header] = 'asc';
        }

        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $modelClass = $this->model;

        $query = $modelClass::query();

        if ($this->search) {
            $query->where(function (Builder $query) {
                foreach ($this->headers as $header) {
                    $query->orWhere($header, 'like', '%' . $this->search . '%');
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

        return view('livewire.layout.dynamic-table.index', ['rows' => $rows]);
    }
}
