<?php

namespace App\Http\Livewire;

use App\Models\Student;
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

    protected $rules = [
        'name' => 'required|max:50',
        'last_name' => 'required|max:50',
        'date_born' => 'required',
        'gender' => 'required',
        'email' => 'required|email:filter|unique:students,email',
        'phone' => 'required',
        'how_did_you_get_to_know_us' => 'required',
    ];



    public function inscription()
    {
        $this->validate();

        Student::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'date_born' => $this->date_born,
            'gender' => $this->gender,
            'email' => $this->email,
            'phone' => $this->phone,
            'city' => $this->city,
            'how_did_you_get_to_know_us' => $this->how_did_you_get_to_know_us,
            ]);

            $this->reset([
                'name',
                'last_name',
                'date_born',
                'gender',
                'email',
                'phone',
                'city',
                'how_did_you_get_to_know_us'
                ]);


            }
    public function render()
    {
        return view('livewire.landing-page');
    }

}
