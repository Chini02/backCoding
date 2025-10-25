<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{


    // private static function getData() {
    //     return [
    //         ['id'=>1,'origin'=>'USA','name'=>'Dell'],
    //         ['id'=>2,'origin'=>'KOREA','name'=>'LG'],
    //         ['id'=>3,'origin'=>'Chaina','name'=>'Tahsiom'],
    //         ['id'=>4,'origin'=>'USA','name'=>'HP'],
    //         ['id'=>5,'origin'=>'France','name'=>'Lenovo']
    //     ];
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('computers.index',['computers'=>Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'price' => ['required','integer'],
            'date_release' => ['required','date'],
        ]);


        $computer = new Computer();

        $computer->name = strip_tags($request->input('name'));
        $computer->origin = strip_tags($request->input('origin'));
        $computer->price = strip_tags($request->input('price'));
        $computer->date_release = strip_tags($request->input('date_release'));

        // Save to database
        $computer->save();

        return redirect()->route('computers.index')->with('success', 'Computer updated successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        return view('computers.show',['computers'=>Computer::findorfail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the computer by ID (or show 404 if not found)
        $computer = Computer::findOrFail($id);

        return view('computers.edite',['computer'=>$computer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'price' => ['required','integer'],
            'date_release' => ['required','date'],
        ]);

        // Find the computer by ID (or show 404 if not found)
        $computer = Computer::findOrFail($id);

        $computer->name = strip_tags($request->input('name'));
        $computer->origin = strip_tags($request->input('origin'));
        $computer->price = strip_tags($request->input('price'));
        $computer->date_release = strip_tags($request->input('date_release'));

        // Save to database
        $computer->save();

        return redirect()->route('computers.index')->with('success', 'Computer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $computer = Computer::findOrFail($id);

        $computer->delete();

        return redirect()->route('computers.index')->with('success', 'Computer Deleted successfully!');
    }
}
