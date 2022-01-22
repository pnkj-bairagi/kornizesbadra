<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;
use Hash;

class LoginController extends Controller
{
    
    public function login(){
        if(Auth::check()){
            return redirect('admin/dashboard');
        }
        
        return view('Backend.login'); 
    }
    
    public function loginSubmit(Request $request)
	{
	    $inputs = $request->input();
	    $messages = array(
            'email.required'  => 'Please enter email',
            'password.required'  => 'Please enter password',
        );
        $rules = array(
            'email' => 'required|string|email',
            'password' => 'required|string',
        );

        $validator = Validator::make($request->all(), $rules,$messages);

        if($validator->fails()) {
            return redirect( route('login'))->withErrors($validator)->withInput();
        }else{
            $email = $request->email;
            $password = $request->password;
            $remember = 1;

            if(Auth::attempt(['email' => $email, 'password' => $password],$remember)) 
            {
                return redirect()->route('dashboard');
            }else{  
                return redirect('admin/login')->withInput()->with(['error' => 'Email or Password is wrong !','inputs' => $inputs]);  
            }
        }
	}
}
