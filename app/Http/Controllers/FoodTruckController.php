<?php

namespace App\Http\Controllers;

use App\FoodTruck;
use Illuminate\Http\Request;

class FoodTruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = FoodTruck::all();
        return view('foodTrucks.index',compact('trucks'));
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
     * @param  \App\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $truck = FoodTruck::where('slug',$slug)->first();
        return view('foodTrucks.show',compact('truck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodTruck $foodTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodTruck $foodTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodTruck $foodTruck)
    {
        //
    }
}
