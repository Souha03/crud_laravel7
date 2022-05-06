<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistanteController extends Controller
{
    public function index(){
        return view('assistantes.index');
        
    }

   
}
