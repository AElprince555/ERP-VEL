<?php

namespace App\Livewire\Layout\Nav;

use App\Livewire\Actions\Logout;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Index extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render(): Factory|Application|View|\Illuminate\View\View
    {
        return view('livewire.layout.nav.index');
    }
}
