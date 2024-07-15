<div x-data="{ showColumnToggle: false }">
    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="search" placeholder="Search..." class="px-4 py-2 border rounded">
    </div>

    <!-- Toggle Button for Columns -->
    <div class="mb-6">
        <x-primary-button @click="showColumnToggle = !showColumnToggle" class="px-4 py-2 bg-blue-500 text-white rounded">Toggle Columns</x-primary-button>
        <div x-show="showColumnToggle" class="flex flex-wrap mt-2 justify-around">
            @foreach($headers as $header)
                @if(!in_array($header, $hiddenHeaders))
                    <label class="mr-4">
                        <input type="checkbox" value="{{ $header }}" wire:click="toggleColumn('{{ $header }}')" @checked(in_array($header, $toggleHeaders))>
                        <span>{{ str_ends_with($header, '_id') ? rtrim($header, '_id') : $header }}</span>
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
                    <x-icons.spinner/>
                </div>
            </div>

            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                <tr>
                    @foreach($headers as $header)
                        @if(!in_array($header, $hiddenHeaders) && in_array($header, $toggleHeaders))
                            <th wire:click="sortBy('{{ $header }}')" class="py-2 px-4 bg-gray-100 text-gray-600 border-b cursor-pointer">
                                {{ str_ends_with($header, '_id') ? rtrim($header, '_id') : $header }}
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
                    <th class="py-2 px-4 bg-gray-100 text-gray-600 border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr class="hover:bg-gray-100">
                        @foreach($headers as $header)
                            @if(!in_array($header, $hiddenHeaders) && in_array($header, $toggleHeaders))
                                <td class="border px-4 py-2 text-gray-700">
                                    @if (str_ends_with($header, '_id') && isset($relatedData[$row->id][$header]))
                                        <a href="{{ $relatedData[$row->id][$header]['url'] }}" class="text-blue-500 hover:underline">{{ $relatedData[$row->id][$header]['name'] }}</a>
                                    @else
                                        {{ $row[$header] }}
                                    @endif
                                </td>
                            @endif
                        @endforeach
                        <td class="border px-4 py-2 text-gray-700">
                            <x-menu.index>
                                <x-menu.button id="alpine-menu-button">
                                    <x-icons.ellipsis-vertical class="h-6 w-6 text-gray-600 hover:text-gray-800" />
                                </x-menu.button>
                                <x-menu.items>
                                    <x-menu.item wire:click="updateRecord({{ $row->id }})">
                                        Update
                                    </x-menu.item>
                                    <x-menu.item wire:click="deleteRecord({{ $row->id }})" class="text-red-500">
                                        Delete
                                    </x-menu.item>
                                </x-menu.items>
                            </x-menu.index>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination Controls -->
    <div class="mt-6">
        {{ $rows->links() }}
    </div>
</div>
