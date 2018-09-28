<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\U_Account;

class UAccountController extends Controller
{
    //
    public function index(){
        $see = U_Account::all();
        return view('Form.index-view',compact('see'));
    }
    public function create()
    {
        return view('Form.create-view');
    }
    public function save(Request $request)
    {
        /*
        $s = new U_Account;
        $s->name = $request->text;
        $s->email = $request->email;
        $s->pasword = $request->pasword;
        $s->save();
        */
        // return redirect();
        
        // Another Method for Add data in database
        $create = U_Account::Create([
           'name' =>  $request->text,
           'dob' =>  $request->dob,
           'email' =>  $request->email,
           'pasword' =>  $request->pasword
        // For this use mass assingment in Model     
            
            
        ]);
        if($create){
             return redirect('/u_account/create')->with('message','Account Successfully Created');
        }   ; 
    }
    
    public function edit($id){
        $edit = U_Account::find($id);
        return view('Form.edit-view',compact('edit'));
    }
    
    public function update(Request $request , $id )
    {
        $sel = U_Account::find($id);
        $sel->name = $request->text;
        $sel->email = $request->email;
        $updated = $sel->save();
        
        if($updated){
             return redirect('/u_account')->with('message','Account Successfully Updated');
        }    

    }
    
    public function delete( $id )
    {
        $del = U_Account::find($id);
        
        $deleted = $del->delete();
        
        if($deleted){
             return redirect('/u_account')->with('message','Account Successfully Deleted');
        }    

    }
    
    
}
