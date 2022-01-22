<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use App\Models\Style;

class StyleController extends Controller
{
    public function index(){
        $data = Style::all();
        return view('Backend.admin.style.index',compact('data')); 
    }
    public function create(Request $request){
        $data=array();
        return view('Backend.admin.style.add',compact('data')); 
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        Style::create($data);
        return redirect()->back()->with('success','Frame Style Added !');
    }
    public function edit($id){
        $data = Style::find($id);
        return view('Backend.admin.style.add',compact('data')); 
    }
    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        Style::where('id',$id)->update($data);
        return redirect()->back()->with('success','Frame Style Update !');
    }
    //For delete data
    public function show(Request $request,$id){
        $data = Style::find($id);
        $data->delete();
        return redirect()->back()->with('success','Frame Style Deleted !'); 
    }
}
