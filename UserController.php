<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;   

class UserController extends Controller
{
    //login
    public function login()
    {
    	return view('login');
    }

    //login post
    public function login_post(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email|min:10',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

    		return redirect('/home');
    }else{

        return redirect('/login');
    }


}

//logout
public function logout()
{
    Auth::logout();
    return redirect('/login');
}






public function rigester(){

    return view('rigester');
}


 public function user_store(Request $request)
    {

    $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|min:10',
            'password' => 'required|min:6',
            'con_password' => 'required|min:6'
        ]);

 if ($request->password==$request->con_password) {

     $user= new User;
     $user->name = $request->name;
     $user->password= bcrypt($request->password);
     $user->email = $request->email;
     $user->save();

    Auth::login($user);

     return redirect('/home');
     }
     else{
         return redirect('/login')->with('The password id not confirmed');
     }
    
    }
}
