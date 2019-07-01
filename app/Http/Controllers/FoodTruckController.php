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
    public function create($slug)
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
        $foodTruck = FoodTruck::where('slug',$slug)->with(['menus'])->first();
        return view('foodTrucks.show',compact('foodTruck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $foodTruck = FoodTruck::where('slug',$slug)->first();
        return view('foodTrucks.edit',compact('foodTruck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodTruck $foodTruck, $slug)
    {
        $foodTruck = FoodTruck::where('slug',$slug)->first();
        $foodTruck->update(
            $request->only(['name','email'])
        );
        return redirect()->back();
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
