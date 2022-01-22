@extends('Backend.admin.layout.app')
@section('main-content')
   <main class="main-wrapper clearfix" style="min-height: 231px;">
            <!-- Page Title Area -->
            <div class="container-fluid">
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Products</h6>
                    </div>
                </div>
                <!-- /.page-title -->
            </div>
            <!-- /.container-fluid -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="container-fluid">
                <div class="widget-list">
                    <div class="row">
                        <div class="col-md-12 widget-holder">
                            <div class="widget-bg">
                                <div class="widget-body clearfix">
                                    @include('Backend.admin.layout.includes.message')
                                    <form action="@if($data){{route('products.update',['product'=>$data->id])}}@else{{route('products.store')}}@endif" method="post" id="Product-Form">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Product Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="product_name" placeholder="Enter Product Name" name="title" type="text" value="@if($data){{$data->product_name}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Material</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="material_id" placeholder="Please select material" name="material_id" >
                                                    <option value="">Select Material</option>
                                                    @foreach($material as $k => $v)
                                                    <option value="{{$v->id}}" >{{$v->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Colors</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="color_id" placeholder="Please select colors" name="color_id" >
                                                    <option value="">Select Color</option>
                                                    @foreach($colors as $k => $v)
                                                    <option value="{{$v->id}}" >{{$v->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Thickness</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="thickness_id" placeholder="Please select thickness" name="thickness_id" >
                                                    <option value="">Select thickness</option>
                                                    @foreach($thickness as $k => $v)
                                                    <option value="{{$v->id}}" >{{$v->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Style</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="style_id" placeholder="Please select style" name="style_id" >
                                                    <option value="">Select style</option>
                                                    @foreach($style as $k => $v)
                                                    <option value="{{$v->id}}" >{{$v->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Description</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="description" placeholder="Enter Material Title" name="title" type="text" value="@if($data){{$data->title}}@endif">
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                        <div class="form-actions">
                                            <div class="form-group row">
                                                <div class="col-md-9 ml-md-auto btn-list">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                    <a class="btn btn-outline-default" type="button" href="{{route('products.index')}}">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                </form>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.widget-bg -->
                        </div>
                        <!-- /.widget-holder -->                     
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.widget-list -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </main>
    <!-- /.main-wrapper -->
@endsection
            
