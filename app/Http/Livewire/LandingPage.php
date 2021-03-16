<?php

namespace App\Http\Livewire;

use Livewire\Component;



class LandingPage extends Component
{
    public $workshops;

    public $name;
    public $last_name;
    public $date_born;
    public $gender;
    public $email;
    public $phone;
    public $city;
    public $how_did_you_get_to_know_us;


    public function render()
    {
        return view('livewire.landing-page');
    }

    public function inscription()
    {
        \Log::debug($this->how_did_you_get_to_know_us);

    }
}
