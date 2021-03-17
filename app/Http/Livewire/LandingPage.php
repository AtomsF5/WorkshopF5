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
        'name' => 'required',
        'last_name' => 'required',
        'date_born' => 'required',
        'gender' => 'required',
        'email' => 'required|email:filter|unique:students,email',
        'phone' => 'required',
        'city' => 'required',
        'how_did_you_get_to_know_us' => 'required',
    ];

    protected $messages = [
        'name.required'=> 'Campo requerido.',
        'last_name.required'=> 'Campo requerido.',
        'date_born.required'=> 'Campo requerido.',
        'gender.required'=> 'Debes seleccionar una opción.',
        'email.required'=> 'Campo requerido.',
        'email.unique'=> 'El correo ya se encuentra registrado.',
        'phone.required'=> 'Campo requerido.',
        'city.required'=> 'Campo requerido.',
        'how_did_you_get_to_know_us.required'=> 'Debes seleccionar una opción.',
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
