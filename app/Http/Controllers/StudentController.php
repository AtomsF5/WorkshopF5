<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
use App\Models\Workshop;

class StudentController extends Controller
{
    public function enroll(Request $request, $workshopId)
    {
                //1- Crear un student nuevo 
        //2- $Request de las cosas que se pasan por el formulario.       
        $student=Student::create([
        'name'=> $request->name,
        'lastname'=> $request->lastname,
        'date_born'=> $request->date_born,
        'sex'=> $request->sex,
        'email'=> $request->email,
        'phone'=> $request->phone,
        'city'=> $request->city,
        'how_did_we_meet'=> $request->how_did_we_meet,]);        
        
        //3- attachean al $student al workshop.
        $student->save();
        
        // $workshop=Workshop::find($workshopId);
        // dd($workshop);

        return redirect('/');
    }
}
