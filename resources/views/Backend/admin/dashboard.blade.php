@extends('Backend.admin.layout.app')

@section('main-content')
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="container-fluid">
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Dashboard</h6>
                </div>
            </div>
            <!-- /.page-title -->
        </div>
        <!-- /.container-fluid -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="container-fluid">
            <div class="widget-list row">
                <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                    <div class="widget-bg bg-primary text-inverse">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body w-50">
                                    <p class="text-muted mr-b-5 fw-600">Orders</p>
                                    <span class="counter-title d-block"><span class="counter">487</span></span>
                                    <!-- /.counter-title -->
                                    <a href="#" class="btn btn-link btn-underlined btn-xs fs-11 btn-yellow text-white">View Orders</a>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center">
                                    <div class="mr-t-20">
                                        <span
                                            data-toggle="sparklines"
                                            data-height="40"
                                            data-width="100"
                                            data-type="bar"
                                            data-bar-spacing="3"
                                            data-bar-width="3"
                                            data-zero-axis="false"
                                            data-bar-color="rgba(144,186,236,1)"
                                            data-color-map="

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

          "
                                            data-chart-range-min="0"
                                        >
                                            <!-- 4,7,8,5,3,6,8 -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                    <div class="widget-bg text-inverse" style="background: #85d1f1;">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body w-50">
                                    <p class="text-muted mr-b-5 fw-600">Products</p>
                                    <span class="counter-title d-block"><span class="counter">2584</span></span>
                                    <!-- /.counter-title -->
                                    <a href="#" class="btn btn-link btn-underlined btn-xs btn-white fs-11">View Products</a>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center">
                                    <div class="mr-t-20">
                                        <span
                                            data-toggle="sparklines"
                                            data-height="40"
                                            data-width="100"
                                            data-type="bar"
                                            data-bar-spacing="3"
                                            data-bar-width="3"
                                            data-zero-axis="false"
                                            data-bar-color="rgba(144,186,236,1)"
                                            data-color-map="

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

          "
                                            data-chart-range-min="0"
                                        >
                                            <!-- 4,7,8,5,3,6,8 -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                    <div class="widget-bg text-inverse" style="background: #b0d0d3;">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body w-50">
                                    <p class="text-muted mr-b-5 fw-600">Users</p>
                                    <span class="counter-title d-block"><span class="counter">698</span></span>
                                    <!-- /.counter-title -->
                                    <a href="#" class="btn btn-link btn-underlined btn-xs btn-white fs-11">View Users</a>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center">
                                    <div class="mr-t-20">
                                        <span
                                            data-toggle="sparklines"
                                            data-height="40"
                                            data-width="100"
                                            data-type="bar"
                                            data-bar-spacing="3"
                                            data-bar-width="3"
                                            data-zero-axis="false"
                                            data-bar-color="rgba(144,186,236,1)"
                                            data-color-map="

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

          "
                                            data-chart-range-min="0"
                                        >
                                            <!-- 4,7,8,5,3,6,8 -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>

                <div class="widget-holder widget-sm col-lg-3 col-md-6 widget-full-height">
                    <div class="widget-bg text-inverse" style="background: #f7af9d;">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body w-50">
                                    <p class="text-muted mr-b-5 fw-600">Reviews</p>
                                    <span class="counter-title d-block"><span class="counter">850</span></span>
                                    <!-- /.counter-title -->
                                    <a href="#" class="btn btn-link btn-underlined btn-xs btn-white fs-11">View Reviews</a>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center">
                                    <div class="mr-t-20">
                                        <span
                                            data-toggle="sparklines"
                                            data-height="40"
                                            data-width="100"
                                            data-type="bar"
                                            data-bar-spacing="3"
                                            data-bar-width="3"
                                            data-zero-axis="false"
                                            data-bar-color="rgba(144,186,236,1)"
                                            data-color-map="

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

            rgba(255,255,255,0.4);

            rgba(255,255,255,1.0);

          "
                                            data-chart-range-min="0"
                                        >
                                            <!-- 4,7,8,5,3,6,8 -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>

                <div class="widget-holder col-md-6">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <h5 class="box-title">Recent Orders</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#456521</td>
                                        <td>12/02/2021</td>
                                        <td>John Mathue</td>
                                        <td>$120 USD</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#548785</td>
                                        <td>10/02/2021</td>
                                        <td>Akram Mathue</td>
                                        <td>$150 USD</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#968574</td>
                                        <td>18/02/2021</td>
                                        <td>Pop Mathue</td>
                                        <td>$090 USD</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#365896</td>
                                        <td>12/02/2021</td>
                                        <td>Same Mathue</td>
                                        <td>$678 USD</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#587458</td>
                                        <td>15/02/2021</td>
                                        <td>Michel Sam</td>
                                        <td>$546 USD</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>

                <div class="widget-holder col-md-6">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <h5 class="box-title">Recent Users</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#523543</td>
                                        <td>Mathue Kumera</td>
                                        <td>Sam@gmail.com</td>
                                        <td>USA</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#866525</td>
                                        <td>Same Disouja</td>
                                        <td>Sam@gmail.com</td>
                                        <td>Greece</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#457887</td>
                                        <td>Josep Piona</td>
                                        <td>Josep@gmail.com</td>
                                        <td>France</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#545455</td>
                                        <td>Ramo Farnadic</td>
                                        <td>Ramo@gmail.com</td>
                                        <td>Italy</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                    <tr>
                                        <td>#125243</td>
                                        <td>Sina Mahiya</td>
                                        <td>Sina@gmail.com</td>
                                        <td>London</td>
                                        <td><center><a href="#" class="color-content"><i class="material-icons">visibility</i> </a></center> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
            </div>
            <!-- /.widget-list -->
        </div>
        <!-- /.container-fluid -->
    </main>
    <!-- /.main-wrappper -->
    <!-- CHAT PANEL -->
    <div class="chat-panel" hidden>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <a href="javascript:void(0);"><i class="feather feather-message-square text-success"></i></a> <span class="user-name heading-font-family fw-400">John Doe</span>
                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="widget-chat-activity flex-1">
                    <div class="messages scrollbar-enabled suppress-x">
                        <div class="message media reply">
                            <figure class="thumb-xs2 user--online">
                                <a href="#">
                                    <!--<img src="{{asset('assets/backend')}}/demo/users/user3.jpg" class="rounded-circle" alt="" />-->
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Epic Cheeseburgers come in all kind of styles.</p>
                            </div>
                            <!-- /.message-body -->
                        </div>
                        <!-- /.message -->
                        <div class="message media">
                            <figure class="thumb-xs2 user--online">
                                <a href="#">
                                    <img src="{{asset('assets/backend')}}/demo/users/user1.jpg" class="rounded-circle" alt="" />
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers make your knees weak.</p>
                            </div>
                            <!-- /.message-body -->
                        </div>
                        <!-- /.message -->
                        <div class="message media reply">
                            <figure class="thumb-xs2 user--offline">
                                <a href="#">
                                    <!--<img src="{{asset('assets/backend')}}/demo/users/user5.jpg" class="rounded-circle" alt="" />-->
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers will never let you down.</p>
                                <p>They'll also never run around or desert you.</p>
                            </div>
                            <!-- /.message-body -->
                        </div>
                        <!-- /.message -->
                        <div class="message media">
                            <figure class="thumb-xs2 user--online">
                                <a href="#">
                                    <img src="{{asset('assets/backend')}}/demo/users/user1.jpg" class="rounded-circle" alt="" />
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>A great cheeseburger is a gastronomical event.</p>
                            </div>
                            <!-- /.message-body -->
                        </div>
                        <!-- /.message -->
                        <div class="message media reply">
                            <figure class="thumb-xs2 user--busy">
                                <a href="#">
                                    <!--<img src="{{asset('assets/backend')}}/demo/users/user6.jpg" class="rounded-circle" alt="" />-->
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                            </div>
                            <!-- /.message-body -->
                        </div>
                        <!-- /.message -->
                        <div class="message media">
                            <figure class="thumb-xs2 user--online">
                                <a href="#">
                                    <img src="{{asset('assets/backend')}}/demo/users/user1.jpg" class="rounded-circle" alt="" />
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>If you are a vegan, we are sorry for you loss.</p>
                            </div>
                            <!-- /.message-body -->
                        </div>
                        <!-- /.message -->
                    </div>
                    <!-- /.messages -->
                </div>
                <!-- /.widget-chat-acitvity -->
            </div>
            <!-- /.card-body -->
            <form action="javascript:void(0)" class="card-footer" method="post">
                <div class="d-flex justify-content-end">
                    <i class="feather feather-plus-circle list-icon my-1 mr-3"></i>
                    <textarea class="border-0 flex-1" rows="1" style="resize: none;" placeholder="Type your message here"></textarea>
                    <button class="btn btn-sm btn-circle bg-transparent" type="submit"><i class="feather feather-arrow-right list-icon fs-26 text-success"></i></button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.chat-panel -->
@endsection
            
