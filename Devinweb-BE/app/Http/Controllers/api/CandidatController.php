<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Candidat;

class CandidatController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Candidat::all();
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
        $candidat = Candidat::create($request->all());

        return response()->json($candidat, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidat = Candidat::find($id);
        return response()->json([
            'success' => true,
            'data' => $candidat
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat,$id)
    {
        $candidat = Candidat::find($id);
        $candidat->update($request->all());

        return response()->json($candidat, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat,$id)
    {
        $candidat = Candidat::find($id);
        $candidat->delete();

        return response()->json([
            'success' => 'true',
            'projet'  => $candidat,
            'msg'     =>'the data has been removed'
            
        ],204);
    }
}
