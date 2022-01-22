<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index(){
        $data = Material::all();
        return view('Backend.admin.material.index',compact('data')); 
    }
    public function create(Request $request){
        $data=array();
        return view('Backend.admin.material.add',compact('data')); 
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        Material::create($data);
        return redirect()->back()->with('success','Material Type Added !');
    }
    public function edit($id){
        $data = Material::find($id);
        return view('Backend.admin.material.add',compact('data')); 
    }
    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        Material::where('id',$id)->update($data);
        return redirect()->back()->with('success','Material Type Update !');
    }
    //For delete data
    public function show(Request $request,$id){
        $data = Material::find($id);
        $data->delete();
        return redirect()->back()->with('success','Material Type Deleted !'); 
    }
}
