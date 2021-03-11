<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WorkshopForm extends Component
{
    public $form;

    protected $rules = [

        'nombre' => 'required|nombre:filter',
        'apellido' => 'required|apellido:filter',
        'fecha_de_nacimiento' => 'required|fecha_de_nacimiento:filter',
        'genero' => 'required|genero:filter',
        'email' => 'required|email:filter|unique:inscription,email',
        'telefono' => 'required|telefono:filter',
        'ciudad' => 'required|ciudad:filter',
        'como_nos_has_conocido' => 'required|como_nos_has_conocido',

    ];

    public function inscription()
    {
        $this->validate();

        $inscription = Inscription::create([
            'form' => $this->form,
        ]);

        $this->reset('form');
    }

    public function render()
    {
        return view('livewire.workshop-form');
    }
}
