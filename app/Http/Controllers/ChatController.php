<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    
    public function chat(/*$titulo*/){

        // $titulo = $request->titulo;
        
        return view('chat');
        // return view('chat')->with('titulo',$titulo);
        
    }

}
