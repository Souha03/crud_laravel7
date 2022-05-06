<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //medecin
    public function index()
    {
            $users = Users::latest()->paginate(100);
            return view('users.index',compact('users'))->with('i',(request()->input('page',1)-1)*100);
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /*********create******* */
    //medecin 
    public function create()
    {    
        
        return view('users.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /********store***** */
    //medecin 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            //  $this->attributes['password'] = bcrypt($request),
            // 'role' => 'required',
            
        ]);
  
        Users::create($request->all());
        
    
        
        return redirect()->route('users.index')->with('success','User created successfully.');
    }

    
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    /******show**** */
    //medecin
    public function show(Users $user)
    {
        return view('users.show',compact('user')); 
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    /*****edit******* */

    //medecin 
    public function edit(Users $users)
    {
      
        return view('users.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    /*******update***** */

    //medecin 
    public function update(Request $request, Users $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
           'password' => 'required',

        ]);
  
        $user->update($request->all());
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    /*****destroy***** */
    //medecin 
    public function destroy(Users $user)
    
        {
            $user->delete();
      
            return redirect()->route('users.index')
                            ->with('success','Users deleted successfully');

                         
        }


    }