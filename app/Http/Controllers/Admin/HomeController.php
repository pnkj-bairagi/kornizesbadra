<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('Backend.admin.dashboard'); 
    }
    
    public function adminProfile(){
        return view('Backend.admin.profile'); 
    }
    
    public function adminSetting(){
        return view('Backend.admin.setting'); 
    }
    public function reviews(){
        return view('Backend.admin.review.index'); 
    }
    public function users(){
        $users = User::all();
        return view('Backend.admin.user.index',compact('users')); 
    }
    public function destroy_user($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('success','User Deleted !'); 
    }
}
