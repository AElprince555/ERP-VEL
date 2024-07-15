<?php

namespace App\Livewire\Pages\General\World\Countries;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class Create extends Component
{
    public $application;
    #[NoReturn]
    public function mount(): void
    {
        $this->application = \App\Models\Application::firstWhere('name','countries');
    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.pages.general.world.countries.create');
    }
}
