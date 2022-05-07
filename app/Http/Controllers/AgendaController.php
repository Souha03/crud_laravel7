<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;



class AgendaController extends Controller

{
    public function index (){
       
        // return view('agenda.index');
        return response()->json(Agenda::all(), 200);
            
    
    }

    public function ajouter(Request $request){
     
        return response()->json(['message' => 'ajouter'], 201); 

    //     $request->validate([
    //         'nom' => 'required',
    //         'prenom' => 'required',
    //         'tel' => 'required',
    //         'date' => 'required',
    //         'heure' => 'required'
    //     ]);
    //      $agenda=Agenda::create([
    //          'nom' => $request->nom,
    //          'prenom' => $request->prenom,
    //          'tel' => $request->tel,
    //          'date' => $request->date,
    //          'heure' => $request->heure,
    //      ]);
    //      return response()->json($agenda);
       
    //    return $request->all();
  }
  


  public function show(Agenda $user,$id)
    {
        $users = Agenda::find($id);
        if(is_null($users)) {
            return response()->json(['message' => 'agendas Not Found'], 404);
        }
        return response()->json($users::find($id), 200);
        
    }




//   public function fetch(){   
//     $events= array();
//     $event = Agenda::all();
//     foreach($event as $value){
//         $color = null;
//         if($value-> nom == 'eya'){
//             $color = '#55DECE';
            
//         }
//         $events[]=[
//             'id'=>$value->id,
//             'date' => $value->date. " ".$value->heure, 
//             'title' => $value->nom." ".$value->prenom,
//             'color' => $color,
            
//         ];
//     }
//       return response()->json($events);
//   }

public function fetch(Request $request){
    $bodyContent = $request->getContent();
}

public function update(Request $request, Agenda $user,$id)

    {
        $user = Agenda::find($id);

        // $request->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'birth' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',

        // ]);
  
        $user->update($request->all());
        // return redirect()->route('users.index')
        //                 ->with('success','User updated successfully');
        return response($user, 200);

    }

    public function edit(Agenda $users,$id)
    {
        $users = Agenda::find($id);

        return response()->json(['message' => 'edited'], 201);      }

        public function destroy(Agenda $user,$id)
    
        {
            $user = Agenda::find($id);
            $user->delete();
      
            // return redirect()->route('users.index')
            //                 ->with('success','Users deleted successfully');
            return response()->json(null, 204);


                         
        }
}