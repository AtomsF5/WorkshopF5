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
        //dd($workshops);
        return view('welcome', compact('workshops'));
    }

}
