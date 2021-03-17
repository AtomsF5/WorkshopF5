<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WorkshopForm extends Component
{
    public $workshops;

    public function render()
    {
        return view('livewire.workshop-form');
    }
}
