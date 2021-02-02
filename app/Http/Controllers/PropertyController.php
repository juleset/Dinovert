<?php

namespace App\Http\Controllers;


use App\Models\Property;
use App\Models\Type;
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
        $properties = Property::with('type','images')
            ->join('images','property_id', '=', 'properties.id')
            ->latest('properties.created_at')
            ->limit(3)
            ->get()
            ->reverse();
//        dd($properties);
        return view('welcome',compact('properties'));

    }

    public function index2()
    {
        $properties = Property::with('type','images')
            ->get();
//        dd($properties);
        return view('admin.tabproperties',compact('properties'));
    }

    public function index3()
    {
        $properties = Property::with('type','images')
            ->get();
        //dd($properties);
        return view('properties.index',compact('properties'));
    }

    public function detail($id)
    {
        $properties = Property::with('images')->findOrFail($id);


        //$properties->images()->attach('tag_id');
        dd($properties);
        return view('properties.detail',compact('properties'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('properties.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Property::create($request->except('_token'));
        return redirect()->route('admin.tabproperties');
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
        //dd($properties);
        return view('properties.show', compact('properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::findOrFail($id);
        return view('properties.edit', ['property' => $properties]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if(Property::findOrFail($id)->update($request->all())){
            return redirect()->route('admin.tabproperties');
        }else{
            return abort(404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if(Property::findOrFail($id)->delete()){
            return redirect()->route('admin.tabproperties');
        }else{
            return abort(404);
        }
    }
}
