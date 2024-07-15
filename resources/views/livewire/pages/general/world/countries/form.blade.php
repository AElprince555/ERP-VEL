@props(['id' => null])
<div>
    <h2 class="text-lg border-b-2 mb-4">{{($id)? __("Update $form->name"):__('Create New Country') }}</h2>
    <form wire:submit.prevent="create">
        <div class="flex justify-between">
            <div class="w-2/5">
                <div>
                    <x-input-label for="name">
                        {{ __('Name') }}<span style="color: red;">*</span>
                    </x-input-label>
                    <x-text-input
                        wire:model="form.name"
                        id="name"
                        name="name"
                        type="text"
                        class="mt-1 block w-full"
                        required
                        autofocus
                    />
                        <x-input-error
                            class="mt-2"
                            :messages="$errors->get('form.name')"
                        />
                </div>
                <div>
                    <x-input-label for="code">
                        {{ __('Code') }}<span style="color: red;">*</span>
                    </x-input-label>
                    <x-text-input
                        wire:model="form.code"
                        id="code"
                        name="code"
                        type="text"
                        class="mt-1 block w-full"
                        required
                        autofocus
                    />
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.code')"
                    />
                </div>
            </div>
            <div class="w-2/5">
                <div>
                    <x-input-label for="iso_code">
                        {{ __('ISO-CODE') }}
                    </x-input-label>
                    <x-text-input
                        wire:model="form.iso_code"
                        id="iso_code"
                        name="iso_code"
                        type="text"
                        class="mt-1 block w-full"
                        autofocus
                    />
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.iso_code')"
                    />
                </div>
                <div>
                    <x-input-label for="short">
                        {{ __('Short') }}<span style="color: red;">*</span>
                    </x-input-label>
                    <x-text-input
                        wire:model="form.short"
                        id="short"
                        name="short"
                        type="text"
                        class="mt-1 block w-full"
                        required
                        autofocus
                    />
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('form.short')"
                    />
                </div>
            </div>
        </div>
        <div class="flex justify-start mt-5 border-t-2 py-2 space-x-2">
            <x-primary-button
                wire:click="{{($id)?'update':'create'}}"
                type="button"
            >
                {{($id) ? 'Update' : 'Create'}}
            </x-primary-button>
            <x-secondary-button
                type="button"
                @country_created.window="$dispatch('close' , $event.detail.modal)"
                x-on:click="$dispatch('close','create-country')"
                wire:click="clear"
            >
                {{ __('Cancel') }}
            </x-secondary-button>
        </div>
    </form>
</div>
