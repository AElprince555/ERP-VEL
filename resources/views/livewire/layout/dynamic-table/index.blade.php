<div x-data="{ showColumnToggle: false }">
    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text" wire:model.blur="search" placeholder="Search..." class="px-4 py-2 border rounded">
    </div>

    <!-- Toggle Button for Columns -->
    <div class="mb-4">
        <x-primary-button @click="showColumnToggle = !showColumnToggle" class="px-4 py-2 bg-blue-500 text-white rounded">Toggle Columns</x-primary-button>
        <div x-show="showColumnToggle" class="flex flex-wrap mt-2 justify-around">
            @foreach($headers as $header)
                @if(!in_array($header, $hiddenHeaders))
                    <label class="mr-4">
                        <input type="checkbox" value="{{ $header }}" wire:click="toggleColumn('{{ $header }}')" @checked(in_array($header, $toggleHeaders))>
                        <span>{{ $header }}</span>
                    </label>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Table with Loading Spinner -->
    <div class="flex justify-center relative">
        <div class="w-4/5 min-w-4/5 max-w-4/5 overflow-x-auto bg-white shadow-md rounded-lg">
            <!-- Loading Spinner -->
            <div wire:loading.flex class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center z-10">
                <div class="spinner-border animate-spin inline-block w-8 h-8 border-4 rounded-full text-blue-500" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                <tr>
                    @foreach($headers as $header)
                        @if(!in_array($header, $hiddenHeaders) && in_array($header, $toggleHeaders))
                            <th wire:click="sortBy('{{ $header }}')" class="py-2 px-4 bg-gray-100 text-gray-600 border-b cursor-pointer">
                                {{ $header }}
                                @if (isset($sortColumns[$header]))
                                    @if ($sortDirections[$header] === 'asc')
                                        &uarr;
                                @else
                                    &darr;
                                @endif
                                @endif
                            </th>
                        @endif
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr class="hover:bg-gray-100">
                        @foreach($headers as $header)
                            @if(!in_array($header, $hiddenHeaders) && in_array($header, $toggleHeaders))
                                <td class="border px-4 py-2 text-gray-700">{{ $row[$header] }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination Controls -->
    <div class="mt-4">
        {{ $rows->links() }}
    </div>
</div>
