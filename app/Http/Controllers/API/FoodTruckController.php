<?php

namespace App\Http\Controllers\API;

use App\FoodTruck;

use App\Http\Controllers\Controller;

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
    public function update(Request $request, FoodTruck $foodTruck)
    {
        $foodTruck->update(
            $request->only([
                'email','phone_number','name'
            ])
        );
        return response()->json($foodTruck);
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
