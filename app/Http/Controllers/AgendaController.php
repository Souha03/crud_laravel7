<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;



class AgendaController extends Controller

{
    public function index (){
       
        return view('agenda.index');
    }

    public function ajouter(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'date' => 'required',
            'heure' => 'required'
        ]);
         $agenda=Agenda::create([
             'nom' => $request->nom,
             'prenom' => $request->prenom,
             'tel' => $request->tel,
             'date' => $request->date,
             'heure' => $request->heure,
         ]);
         return response()->json($agenda);
       
       return $request->all();
  }
  


  public function show_data($id){
   
    $agenda = Agenda::find($id);
      return view ('agenda.show_detail')->with('agenda', $agenda);
  }




  public function fetch(){   
    $events= array();
    $event = Agenda::all();
    foreach($event as $value){
        $color = null;
        if($value-> nom == 'eya'){
            $color = '#55DECE';
            
        }
        $events[]=[
            'id'=>$value->id,
            'date' => $value->date. " ".$value->heure, 
            'title' => $value->nom." ".$value->prenom,
            'color' => $color,
            
        ];
    }
      return response()->json($events);
  }
}