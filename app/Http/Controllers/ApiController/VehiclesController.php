<?php

namespace App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;

use App\vehicles;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($column,$columndata)
    {
        //
        $data = vehicles::where($column,'=',$columndata)->get();

// return response()->json($data);
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
     * @param  \App\vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function show(vehicles $vehicles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicles $vehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehicles $vehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicles $vehicles)
    {
        //
    }
}
