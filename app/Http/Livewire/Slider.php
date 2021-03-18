<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Slider extends Component
{
    public $individuals;
    public $groups;

    public function render()
    {
        return view('livewire.slider');
    }
}
