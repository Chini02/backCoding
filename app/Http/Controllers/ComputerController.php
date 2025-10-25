<?php

namespace App\Http\Controllers;

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
        return view('computers.index',['computers'=>self::getData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $computers = self::getData();
        $index = array_search($id, array_column($computers,'id'));

        if ($index === false) {
            abort(404);
        }

        return view('computers.show',['computers'=>$computers[$index]]);
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
