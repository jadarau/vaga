<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JanelasController extends Controller
{
    //
    public function janela($titulo){        
        
        return view('janela')->width('titulo',$titulo);     
    }
}
