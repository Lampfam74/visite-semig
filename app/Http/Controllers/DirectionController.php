<?php

namespace App\Http\Controllers;

use App\Models\Directions;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directions=Directions::all();
        return view('direction.index',[
            'directions'=>$directions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('direction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'libelle'=>'required',
            'telephone'=>'required',
            'email'=>'required',
        ]);
        Directions::create([
            'libelle'=>$request['libelle'],
            'tel'=>$request['telephone'],
            'email'=>$request['email'],
        ]);
        return back()->with('msg','add succefuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
