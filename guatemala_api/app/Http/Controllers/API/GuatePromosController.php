<?php

namespace App\Http\Controllers\API;

use App\GuatePromos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\GuatePromosResource;

class GuatePromosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = GuatePromos::all();
        return response([ 'promos' => GuatePromosResource::collection($promos), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $promo = GuatePromos::create($data);
        return response([ 'promo' => new GuatePromosResource($promo), 'message' => 'Created successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GuatePromos  $guatePromos
     * @return \Illuminate\Http\Response
     */
    public function show(GuatePromos $promo)
    {
        return response($promo, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GuatePromos  $guatePromos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuatePromos $guatePromos)
    {
        $guatePromos->update($request->all());
        return response([ 'promo' => new GuatePromosResource($guatePromos), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GuatePromos  $guatePromos
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuatePromos $guatePromos)
    {
        $guatePromos->delete();
        return response(['message' => 'Deleted']);
    }
}
