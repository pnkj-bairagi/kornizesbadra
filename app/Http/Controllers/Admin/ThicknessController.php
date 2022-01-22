<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use App\Models\Thickness;

class ThicknessController extends Controller
{
    public function index(){
        $data = Thickness::all();
        return view('Backend.admin.thickness.index',compact('data')); 
    }
    public function create(Request $request){
        $data=array();
        return view('Backend.admin.thickness.add',compact('data')); 
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        Thickness::create($data);
        return redirect()->back()->with('success','Frame Thickness Added !');
    }
    public function edit($id){
        $data = Thickness::find($id);
        return view('Backend.admin.thickness.add',compact('data')); 
    }
    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        Thickness::where('id',$id)->update($data);
        return redirect()->back()->with('success','Frame Thickness Update !');
    }
    //For delete data
    public function show(Request $request,$id){
        $data = Thickness::find($id);
        $data->delete();
        return redirect()->back()->with('success','Frame Thickness Deleted !'); 
    }
}
