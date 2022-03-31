<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;
use Nette\Utils\Validators;
use Validator;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all regions
        $region = Regions::all();

        return response()->json([
            "message"=>"liste de toutes les regions",
            "data"=>$region
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
        // create a new region
       $valider = Validator::make($request->all(),[
            'nom_region'=>'required|string|max:50',
            'code_ansd'=>'required|string|max:2',
            'code_iso'=>'required|string|max:5',
            'superficie'=>'required|string|max:7'
       ]);

       if ($valider->fails()){
        return response()-> json($valider->errors());
        }

        $data = Regions::create([
            'nom_region'=>$request->nom_region,
            'code_ansd'=>$request->code_ansd,
            'code_iso'=>$request->code_iso,
            'superficie'=>$request->superficie
        ]);

        return response()->json([
            'message'=>'ajout reussi',
            'data'=>$data
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show a region
        $show = Regions::find($id);
        return response()->json([
            'data'=>$show
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function edit(Regions $regions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regions $regions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regions $regions)
    {
        //
    }
}
