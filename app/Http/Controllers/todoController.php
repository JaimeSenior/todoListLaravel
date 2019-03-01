<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoController extends Controller
{
    
public function postCreate(Request $request){

    todo::create([ 
       'title' => $request->title,
       'description' => $request->description,
       'date' => $request->date,
       'isComplete' => $request->isComplete
    ]);

}

}
