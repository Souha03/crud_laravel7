<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Users;
use Illuminate\Http\Request;

class CrudAssistante extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::latest()->paginate(100);
        return response()->json(Users::all(), 200);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(['message' => 'created'], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
    //     $request->validate([
    //         'firstname' => 'required',
    //         'lastname' => 'required',
    //         'birth' => 'required',
    //         'phone' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
            
            
    //     ]);
  
    $user=Users::create($request->all());
    return response($user ,201);
    }

    /**
     * Display the specified resource.
     *
     * @param   \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function show(Users $user,$id)
    {
        $users = Users::find($id);
        if(is_null($users)) {
            return response()->json(['message' => 'users Not Found'], 404);
        }
        return response()->json($users::find($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users,$id)
    {
        $users = Users::find($id);

        return response()->json(['message' => 'edited'], 201); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $user,$id)
    {
        // $request->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'birth' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        $user = Users::find($id);
        $user->update($request->all());
        return response($user, 200);
  
        // return redirect()->route('assistante.index')
        //                 ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user,$id)
    
    {
        $user = Users::find($id);
        $user->delete();
  
        // return redirect()->route('users.index')
        //                 ->with('success','Users deleted successfully');
        return response()->json(null, 204);


                     
    }
}








