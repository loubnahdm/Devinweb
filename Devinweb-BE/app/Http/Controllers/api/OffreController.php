<?php


namespace App\Http\Controllers\api;

use App\Offre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class OffreController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Offre::all();
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
        $article = Offre::create($request->all());

        return response()->json($article, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre,$id)
    {
        $offre = Offre::find($id);
        return response()->json([
            'success' => true,
            'data' => $offre
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Offre $offre)
    {
        $offre = Offre::find($id);
        $offre->update($request->all());

        return response()->json($offre, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre,$id)
    {
        $offre = Offre::find($id);
        $offre->delete();

        return response()->json([
            'success' => 'true',
            'projet'  => $offre,
            'msg'     =>'the data has been removed'
            
        ],204);
    }
    
}
