<?php

namespace App\Livewire\Pages\General\World\Countries;

use App\Livewire\Forms\CountryForm;
use App\Models\General\World\Country;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Form extends Component
{
    public CountryForm $form;
    public function create(): void
    {
        $this->validate();
        Country::create($this->form->all());
        $this->clear();
        $this->dispatch('country_created',['modal'=>'create-country']);
    }
    public function clear(): void{
        $this->form->reset();
    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.pages.general.world.countries.form');
    }
}
