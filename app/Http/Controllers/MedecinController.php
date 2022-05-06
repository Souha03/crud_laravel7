<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecin;

class MedecinController extends Controller
{
    public function index(){
        return view('medecin.index');
    }
}
