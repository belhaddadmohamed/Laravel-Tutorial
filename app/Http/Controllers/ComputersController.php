<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    // Array of static data
    private static function getData(){
        return [
            ['id' => 1, 'name' => 'HP', 'origin' => 'USA'],
            ['id' => 2, 'name' => 'DELL', 'origin' => 'China'],
            ['id' => 3, 'name' => 'TOSHIBA', 'origin' => 'HonKong'],
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();

        return view('computers.index', ['computers' => $computers]);     // Template: computers/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create_computer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->name = $request->input('name');
        $computer->origin = $request->input('origin');
        $computer->price = $request->input('price');

        $computer->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer_id)
    {
        $index = Computer::find($computer_id);

        if($index === false){
            abort(404);
        }

        return view('computers.show_computer', ['computer' => $index]);
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
