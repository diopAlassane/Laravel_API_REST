<?php

namespace App\Http\Controllers;

use App\Models\Departements;
use Illuminate\Http\Request;
use Validator;

class DepartementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all departements
        $dept = Departements::all();

        return response()->json([
            'message'=>'La liste de tout les departements',
            'data'=>$dept
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
        //create a new departement
        $valider = Validator::make($request->all(),[
            'regions_id'=>'required',
            'code_ansd_dep'=>'required',
            'nom_departement'=>'required'
        ]);

        if ($valider->fails()){
            return response()-> json($valider->errors());
            }

        $data = Departements::create([
            'regions_id'=>$request->regions_id,
            'code_ansd_dep'=>$request->code_ansd_dep,
            'nom_departement'=>$request->nom_departement
        ]);

        return response()->json([
            'message'=>'ajout reussi',
            'data'=>$data
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function show(Departements $departements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function edit(Departements $departements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departements $departements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departements $departements)
    {
        //
    }
}
