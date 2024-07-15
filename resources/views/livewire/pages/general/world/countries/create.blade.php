<div>
    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-country')"
    >
        {{__(strtoupper('add country'))}}
    </x-primary-button>
    <x-modal
        name="create-country"
        :show="$errors->isNotEmpty()"
        focusable
    >
        <div class="p-6">
            <livewire:pages.general.world.countries.form />
        </div>

    </x-modal>
</div>
