<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;





class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
        
    }

   

    // public function create(){
    //     return view('create');
    // }

    // public function store(Request $request){
    //     Users::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'phone'=>$request->phone,
    //         'created_at'=> now(),
    //     ]);
    //     return redirect()->route('user.index')->with('success','Médecin has been added');
    // }

    // public function update(Request $request, Users $user){
    //     $User->update([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'phone'=>$request->phone,
    //         'created_at'=> now(),
    //     ]);
    //     return redirect()->route('user.index')->with('success','Médecin has been updated');
    // }

    // public function edit(Users $user){
        
    //     return view('edit')->with('User', $user);
    // }


    // public function destory( Users $user){
    //     $user->delete();
    //     return redirect()->route('user.index')->with('success','Médecin has been Delete');
    // }
    






    
}
