<?php

namespace App\Livewire\Pages\General\World\Countries;

use App\Livewire\Forms\CountryForm;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Update extends Component
{
    public CountryForm $form;
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.pages.general.world.countries.update');
    }
}
