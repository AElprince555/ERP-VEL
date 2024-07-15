<?php

namespace App\Livewire\Pages\General\World;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Countries extends Component
{
    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.pages.general.world.countries');
    }
}
