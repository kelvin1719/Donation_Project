<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class HomeComponent extends Component
{
    #[Title('Home')]
    public function render()
    {
        return view('livewire.pages.home-component');
    }
}
