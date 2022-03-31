<?php

namespace App\Http\Controllers;

use App\Models\Villes;
use Illuminate\Http\Request;
use Validator;

class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all villes
        $villes = Villes::all();
        return response()->json([
            'message'=>'La liste de toutes les villes',
            'data'=>$villes
        ],200);
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
        //create a new ville
        $valider = Validator::make($request->all(),[
            'regions_id'=>'required|integer',
            'nom_ville'=>'required|string|max:255'
        ]);

        if ($valider->fails()){
            return response()-> json($valider->errors());
        }

        $data = Villes::create([
            'regions_id'=>$request->regions_id,
            'nom_ville'=>$request->nom_ville
        ]);

        return response()->json([
            'message'=>'ajout reussi',
            'data'=>$data
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $show = Villes::find($id);
        return response()->json([
            'data'=>$show
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit(Villes $villes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villes $villes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villes $villes)
    {
        //
    }
}
