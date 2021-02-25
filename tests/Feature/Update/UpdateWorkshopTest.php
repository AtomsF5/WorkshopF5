<?php

namespace Tests\Feature\Update;

use App\Models\Workshop;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateWorkshopTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_see_an_update_form()
    {
        //que el usuario administrador sea el que cree el formulario
        $user = User::factory()->create(['is_admin'=>true]);
        
        //crear un workshop en la DB
        $workshop = Workshop::factory()->create();

        //hacer una llamada por get a una ruta edit /workshop/id/        
        //comprobar esta respusta
        $response = $this->get('/workshop/1');        

        //que de un status 200 y que pueda ver la vista del formulario
        $response->assertStatus(200)->assertViewIs('workshopEdit');

        //que pueda ver los campos del workshop que  tengo creado en la DB

        //***que pueda ver un botón


    }
}
