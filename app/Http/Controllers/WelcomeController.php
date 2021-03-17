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
        // dd($workshops);
        return view('welcome', compact('workshops'));
    }


    public function individualCategory()
    {  
        $individuals= Workshop::where('category', '=', 'Individual')
                ->orderBy('date', 'DESC')
                ->get();
                // dd($individuals);
        return view('welcome', compact('workshops'));

    }

    public function groupCategory()
    {  
        $groups= Workshop::where('category', '=', 'Grupal')
                ->orderBy('date', 'DESC')
                ->get();
        return view('welcome', compact('workshops'));

    }


}
