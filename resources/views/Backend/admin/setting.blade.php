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
                    <h6 class="page-title-heading mr-0 mr-r-5">Settings</h6>
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
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">New Password </label>
                                        <div class="col-md-6">
                                            <input class="form-control" id="l0" placeholder="Type New Password" type="password" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l10">Retype New Password</label>
                                        <div class="col-md-6">
                                            <input class="form-control" disabled="" id="l10" placeholder="Retype New Password" type="password" />
                                        </div>
                                    </div>
    
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary" type="button">Change Password</button>
                                                <button class="btn btn-outline-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
            
