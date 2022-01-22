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
                        <h6 class="page-title-heading mr-0 mr-r-5">Reviews</h6>
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
                                                <th>Name</th>
                                                <th>Email ID</th>
                                                <th>Mobile No.</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Jhon Dheere </td>
                                                <td>Jhon@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>

                                            </tr>
                                            <tr>
                                                <td>#458965</td>
                                                <td>Same Silon </td>
                                                <td>sam@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Merry Dheere </td>
                                                <td>Merry@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Jhon Dheere </td>
                                                <td>Jhon@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>

                                            </tr>
                                            <tr>
                                                <td>#458965</td>
                                                <td>Same Silon </td>
                                                <td>sam@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Merry Dheere </td>
                                                <td>Merry@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Jhon Dheere </td>
                                                <td>Jhon@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>

                                            </tr>
                                            <tr>
                                                <td>#458965</td>
                                                <td>Same Silon </td>
                                                <td>sam@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Merry Dheere </td>
                                                <td>Merry@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Jhon Dheere </td>
                                                <td>Jhon@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>

                                            </tr>
                                            <tr>
                                                <td>#458965</td>
                                                <td>Same Silon </td>
                                                <td>sam@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Merry Dheere </td>
                                                <td>Merry@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Jhon Dheere </td>
                                                <td>Jhon@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>

                                            </tr>
                                            <tr>
                                                <td>#458965</td>
                                                <td>Same Silon </td>
                                                <td>sam@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                            <tr>
                                                <td>#435467</td>
                                                <td>Merry Dheere </td>
                                                <td>Merry@gmail.com</td>
                                                <td>969858965</td>
                                                <td>12/01/2021</td>
                                                <td><a href="#" class="color-content"><i class="material-icons">visibility</i></a> </td>
                                            </tr>
                                        </tfoot>
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
@endsection
            
