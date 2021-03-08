<?php

namespace App\Http\Livewire;

use App\Models\Workshop;
use Livewire\Component;

class WorkshopForm extends Component
{
    public function render()
    {
        $workshops = Workshop::all();
        return view('livewire.workshop-form', compact ('workshops'));
    }
    public function index()
    {
        $workshops = Workshop::all();
        return view('livewire.workshop-form', compact ('workshops'));
    }
}
