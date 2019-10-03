<?php

// namespace App\Http\Controllers;


namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Candidature; 
class CandidatureController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Candidature::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidature = Candidature::create($request->all());

        return response()->json($candidature, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidature = Candidature::find($id);
        return response()->json([
            'success' => true,
            'data' => $candidature
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidature $candidature,$id)
    {
        $candidature = Candidature::find($id);
        $candidature->update($request->all());

        return response()->json($candidature, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidature $candidature,$id)
    {
        $candidature = Candidature::find($id);
        $candidature->delete();

        return response()->json([
            'success' => 'true',
            'projet'  => $candidature,
            'msg'     =>'the data has been removed'
            
        ],204);
    }
}
