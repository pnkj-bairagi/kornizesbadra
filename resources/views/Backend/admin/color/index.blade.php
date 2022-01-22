@extends('Backend.admin.layout.app')

@push('page-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
@endpush

@section('main-content')
  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="container-fluid">
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Color
                         <a type="button" href="{{route('color.create')}}"  class="btn btn-primary pull-right">Add Color</a>
                        </h6>
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
                                <!-- /.widget-heading -->
                                <div class="widget-body clearfix">
                                    <table class="table table-striped" data-toggle="datatables" data-plugin-options='{"searching": false}'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Color</th>
                                                <th>Added</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if($data)
                                            @foreach($data as $key=>$dt)
                                            <tr>
                                                <td>#{{$dt->id}}</td>
                                                <td>{{$dt->title}}</td>
                                                <td><input class="form-control" disabled type="color" value="@if($dt->color_code){{$dt->color_code}}@endif"></td>
                                                <td>{{date('d/m/Y',strtotime($dt->created_at))}}</td>
                                                <td>
                                                    <a href="{{route('color.edit',$dt->id)}}" class="color-content"><i class="material-icons">edit</i></a>
                                                    <a href="{{route('color.show',$dt->id)}}" class="color-content"><i class="material-icons">delete</i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
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
        </main>
    <!-- /.main-wrapper -->
@endsection
            
