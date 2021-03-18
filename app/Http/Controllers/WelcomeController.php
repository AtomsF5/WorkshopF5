<?php

namespace App\Http\Controllers;

use App\Models\Workshop;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::orderBy('date', 'DESC')->get();
<<<<<<< HEAD
        //dd($workshops);
=======
        //$individuals= Workshop::where('category', '=', 'Individual')->orderBy('date', 'DESC')->get();
        //$groups= Workshop::where('category', '=', 'Grupal')->orderBy('date', 'DESC')->get();
        //dd($groups);
>>>>>>> 3164ce07f7bd1aa9cfd171fb8999925c9fa5bbea
        return view('welcome', compact('workshops'));
    }

}
