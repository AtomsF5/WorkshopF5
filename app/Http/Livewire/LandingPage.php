<?php

namespace App\Http\Livewire;

use Livewire\Component;


class LandingPage extends Component
{
    public $workshops;



    public function render()
    {
        return view('livewire.landing-page');
    }

    public function inscription()
    {
        \Log::debug('1111');

    }
}
