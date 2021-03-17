<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
use App\Models\Workshop;

class StudentController extends Controller
{
    public function ($id)
    {
        $StudentEmail = auth()->id();
        $user = Student::find($userId);
        $userEvents = $user->events()->find($id);
       
        if($userEvents == null) {
            $user->events()->attach($id);
            $event = Workshop::find($id);
            return view('suscribeResponse', ['message' => 'Ole tu!!! Inscrito!!!']);
        }

        return view('suscribeResponse', [
            'message' => 'Ups!! Algo salio mal pringao, ya estas inscrito!!!']);
    }
}
