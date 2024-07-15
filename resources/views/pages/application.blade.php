<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a
                href="{{route($application->module->short)}}"
                class=" hover:underline
            "
            >{{__(strtoupper($application->module->name))}}</a>
            / <a
                href="{{route($application->subModule->short)}}"
                class=" hover:underline
            "
            >{{__(strtoupper($application->subModule->name))}}</a>
            /
            {{ __(strtoupper($application->name)) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div class="min-h-screen flex-col items-start justify-center mt-6">
                        <div class="p-5">
                           @if($application->controller)
                                @livewire($application->controller, ['application' => $application])
                            @else
                               @livewire(\App\Livewire\Layout\DynamicTable\Index::class ,
                               ['model'=>$application->model , 'hiddenHeaders'=>['id','created_at','updated_at']])
                           @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
