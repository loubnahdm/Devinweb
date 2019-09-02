<?php

namespace App\Http\Controllers\api;

use App\Proj;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Proj::all();
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
        $article = Proj::create($request->all());

        return response()->json($article, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function show(Proj $proj,$id)
    {
        $proj = Proj::find($id);
        return response()->json([
            'success' => true,
            'data' => $proj
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function edit(Proj $proj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proj $proj,$id)
    {
        $proj = Proj::find($id);
        $proj->update($request->all());

        return response()->json($proj, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proj $proj,$id)
    {
        $proj = Proj::find($id);
        $proj->delete();

        return response()->json([
            'success' => 'true',
            'projet'  => $proj,
            'msg'     =>'the data has been removed'
            
        ],204);
    }
}
