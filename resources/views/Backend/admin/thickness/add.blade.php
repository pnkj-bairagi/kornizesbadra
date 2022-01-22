@extends('Backend.admin.layout.app')

@push('page-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
@endpush

@section('main-content')
   <main class="main-wrapper clearfix" style="min-height: 231px;">
            <!-- Page Title Area -->
            <div class="container-fluid">
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Frame Thickness</h6>
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
                                    <form action="@if($data){{route('thickness.update',['thickness'=>$data->id])}}@else{{route('thickness.store')}}@endif" method="post" id="thickness-Form">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Title</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="title" placeholder="Enter Material Title" name="title" type="text" value="@if($data){{$data->title}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l15">Description</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="description" rows="3">@if($data){{$data->description}}@endif</textarea>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                        <div class="form-actions">
                                            <div class="form-group row">
                                                <div class="col-md-9 ml-md-auto btn-list">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                    <a class="btn btn-outline-default" type="button" href="{{route('thickness.index')}}">Cancel</a>
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
            
