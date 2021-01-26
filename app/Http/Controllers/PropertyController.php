<?php

namespace App\Http\Controllers;


use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::with('types','images')
            ->join('images','property_id', '=', 'properties.id')
            ->latest('properties.created_at')
            ->limit(3)
            ->get()
            ->reverse();
//        dd($properties);
        return view('welcome',compact('properties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = Property::findOrFail($id);
        dd($properties);
        return view('properties.show', compact('properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $properties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $properties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $properties)
    {
        //
    }
}
