<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::orderBy('date', 'desc')
        ->get();

        return view('dasboard.index', $workshops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Workshop::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'date' => $request->date,
            'technical_requirement' => $request->technical_requirement,
            'image' => $request->image,
            'platform_web' => $request->platform_web,

        ]);

        return redirect()->route('dashboard.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $workshop  = Workshop::findOrFail($id);
        return view('dashboard.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $datosWorkshop = request()->except(['_token', '_method']);
        Workshop::where('id', '=', $id)->update($datosWorkshop);

        $workshop  = Workshop::findOrFail($id);
        return redirect()->route('dashboard.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Workshop::destroy($id);
        return redirect('dashboard');
    }
}
