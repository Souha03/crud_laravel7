<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Users;

class CrudassiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Users::latest()->paginate(100);
        return view('users.crudassistante.index',compact('patients'))->with('i',(request()->input('page',1)-1)*100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.crudassistante.create');
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
             hash::check($request->input('password')),
            'role' => 'required',
            
           
        ]);
  
        Users::create($request->all());
   
        return redirect()->route('crudassistante.index')->with('success','User created successfully.');
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Users $patient)
    {
        return view('users.crudassistante.show',compact('patient')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $patient)
    {
        return view('users.crudassistante.edit',compact('patient'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Users  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $patient)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
  
        $patient->update($request->all());
  
        return redirect()->route('crudassistante.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Users  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $patient)
    {
        $patient->delete();
      
            return redirect()->route('crudassistante.index')
                            ->with('success','Users deleted successfully');
    }
}
