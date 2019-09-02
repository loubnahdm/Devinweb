<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{    
     
    public function index()
    { return Comments::all();
       
    } 


    public function create()
    {
        
    }


    public function store(){

    //     request()->validate([
    //         'content'=>['required'],
    //     ]);
    //     Comments::create([
    //         'name'=>'loulou',
    //         'url'=>'url',
    //         'body'=>request('content'),
    //     ]);
    //    return 'votre message est ajoute';

       $comment = Comments::create($request->all());

       return response()->json($comment, 201);

    }
}
