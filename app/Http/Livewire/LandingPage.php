<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;



class LandingPage extends Component
{
    public $workshops;
    public $individuals;
    public $groups;

    public $name;
    public $lastname;
    public $date_born;
    public $sex;
    public $email;
    public $phone;
    public $city;
    public $how_did_we_meet
;

    protected $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'date_born' => 'required',
        'sex' => 'required',
        'email' => 'required|email:filter|unique:students,email',
        'phone' => 'required',
        'city' => 'required',
        'how_did_we_meet' => 'required',
    ];

    protected $messages = [
        'name.required'=> 'Campo requerido.',
        'lastname.required'=> 'Campo requerido.',
        'date_born.required'=> 'Campo requerido.',
        'sex.required'=> 'Debes seleccionar una opción.',
        'email.required'=> 'Campo requerido.',
        'email.unique'=> 'El correo ya se encuentra registrado.',
        'phone.required'=> 'Campo requerido.',
        'city.required'=> 'Campo requerido.',
        'how_did_we_meet.required'=> 'Debes seleccionar una opción.',
    ];



    public function inscription()
    {
        $this->validate();

        Student::create([
            'name' => $this->name,
            'lastname
' => $this->lastname
,
            'date_born' => $this->date_born,
            'sex' => $this->sex,
            'email' => $this->email,
            'phone' => $this->phone,
            'city' => $this->city,
            'how_did_we_meet
' => $this->how_did_we_meet
,
            ]);

            $this->reset([
                'name',
                'lastname
',
                'date_born',
                'sex',
                'email',
                'phone',
                'city',
                'how_did_we_meet
'
                ]);


            }
    public function render()
    {
        return view('livewire.landing-page');
    }

}
