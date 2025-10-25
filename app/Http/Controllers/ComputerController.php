<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{


    private static function getData() {
        return [
            ['id'=>1,'origin'=>'USA','name'=>'Dell'],
            ['id'=>2,'origin'=>'KOREA','name'=>'LG'],
            ['id'=>3,'origin'=>'Chaina','name'=>'Tahsiom'],
            ['id'=>4,'origin'=>'USA','name'=>'HP'],
            ['id'=>5,'origin'=>'France','name'=>'Lenovo']
        ];
    }
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
        $computer = new Computer();
        $computer->name = $request->input('name');
        $computer->origin = $request->input('origin');
        $computer->price = $request->input('price');
        $computer->date_release = $request->input('date_release');

        $computer->save();
        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $index = Computer::find($id);

        if ($index === false) {
            abort(404);
        }

        return view('computers.show',['computers'=>$index]);
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
