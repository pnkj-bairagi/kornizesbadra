<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use App\Models\Color;
use App\Models\Material;
use App\Models\Thickness;
use App\Models\Style;

class ProductsController extends Controller
{
    public function index(){
        $data = array();
        return view('Backend.admin.products.index',compact('data')); 
    }
    public function create(Request $request){
        $data=array();
        $material = Material::all();
        $colors = Color::all();
        $thickness = Thickness::all();
        $style = Style::all();
        return view('Backend.admin.products.add',compact('data', "material", "colors", "thickness", "style")); 
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        Color::create($data);
        return redirect()->back()->with('success','Color Type Added !');
    }
    public function edit($id){
        $data = Color::find($id);
        return view('Backend.admin.color.add',compact('data')); 
    }
    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        Color::where('id',$id)->update($data);
        return redirect()->back()->with('success','Color Type Update !');
    }
    //For delete data
    public function show(Request $request,$id){
        $data = Color::find($id);
        $data->delete();
        return redirect()->back()->with('success','Color Type Deleted !'); 
    }
}
