<?php

namespace App\Http\Controllers\Api;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::with([
            'measure',
            'product_presentation',
            'carbohydrates',
            'fats',
            'proteins',
            'comments',
            'gallery',
            'pdfs'
        ])->get();

        return response()->success($foods);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $food = Food::with([
            'measure',
            'product_presentation',
            'carbohydrates',
            'fats',
            'proteins',
            'comments',
            'gallery',
            'pdfs'
        ]);
        if($request->id) $food->where('id',$request->id);
        if($request->nut) $food->where('id_nut',$request->nut);
        //if($request->fav) $food->where('favorites.id_nut',$request->nut);

        return response()->success($food->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
