<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class HomeController extends Controller
{
    //

    public function index(){

    	$users= User::all();

    	return view ('home', compact('users'));
    }

    public function delete($id){

    	$user= User::findOrFail($id);
    	$user->delete();

    	return back()->with('success');;

    }

    public function update($id)
    {
    	$user = User::findOrFail($id);
    	$update = true;

    	return view('rigester', compact('user', 'update'));
    }

    //edit user info
    public function user_edit(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required|min:10',
    		'name'  => 'required',
    		'password' => 'required|min:4'
    	]);

    	$user =User::findOrFail($request->user_id);
    	$user->name =$request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->update();

    	return back()->with('successMsg' ,'Updated Successfully');
    }
}
