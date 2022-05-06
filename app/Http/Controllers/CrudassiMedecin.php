<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Users;
use Illuminate\Http\Request;

class CrudassiMedecin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistantes = Users::latest()->paginate(100);
        return view('medecincrud.assistantecrud.index',compact('assistantes'))->with('i',(request()->input('page',1)-1)*100);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medecincrud.assistantecrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            
            
        ]);
  
        Users::create($request->all());
   
        return redirect()->route('assistantecrud.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param   \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function show(Users $assistante)
    {
        return view('medecincrud.assistantecrud.show',compact('assistante')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $assistante)
    {
        return view('medecincrud.assistantecrud.edit',compact('assistante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $assistante)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
  
        $assistante->update($request->all());
  
        return redirect()->route('assistantecrud.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users $assistantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $assistante)
    {
        $assistante->delete();
      
            return redirect()->route('assistantecrud.index')
                            ->with('success','Users deleted successfully');
    }
}








