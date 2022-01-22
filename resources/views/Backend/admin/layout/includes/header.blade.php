<!-- HEADER & TOP NAVIGATION -->
<nav class="navbar">
    <div class="container-fluid px-0 align-items-stretch">
        <!-- Logo Area -->
        <div class="navbar-header">
            <a href="{{route('dashboard')}}" class="navbar-brand">
                <img class="logo-expand" alt="" src="{{asset('assets/backend')}}/img/logo.png" />
                <img class="logo-collapse" alt="" src="{{asset('assets/backend')}}/img/logo-collapse.png" />
            </a>
        </div>
        <!-- /.navbar-header -->
        <!-- Left Menu & Sidebar Toggle -->
        <ul class="nav navbar-nav">
            <li class="sidebar-toggle dropdown">
                <a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon md-24">menu</i></a>
            </li>
        </ul>
        <!-- /.navbar-left -->
        <!-- Search Form -->
        <form class="navbar-search d-none d-sm-block" role="search">
            <i class="material-icons list-icon">search</i> <input type="search" class="search-query" placeholder="Search here..." />
            <a href="javascript:void(0);" class="remove-focus"><i class="material-icons md-24">close</i></a>
        </form>
        <!-- /.navbar-search -->
        <div class="spacer"></div>
        <!-- Right Menu -->
        <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons list-icon">notifications_none</i> <span class="button-pulse bg-danger"></span></a>
                <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                    <div class="card">
                        <header class="card-header d-flex justify-content-between mb-0">
                            <a href="javascript:void(0);"><i class="material-icons color-primary" aria-hidden="true">notifications_none</i></a> <span class="heading-font-family flex-1 text-center fw-400">Notifications</span>
                            <a href="javascript:void(0);"><i class="material-icons color-content">settings</i> </a>
                        </header>
                        <ul class="card-body list-unstyled dropdown-list-group">
                            <li>
                                <a href="#" class="media">
                                    <span class="d-flex"><i class="material-icons list-icon">check</i> </span>
                                    <span class="media-body"><span class="heading-font-family media-heading">Invitation accepted</span> <span class="media-content">Your have been Invited ...</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="media">
                                    <span class="d-flex thumb-xs user--online">
                                        <!--<img src="{{asset('assets/backend')}}/demo/users/user3.jpg" class="rounded-circle" alt="" /> -->
                                    </span>
                                    <span class="media-body"><span class="heading-font-family media-heading">Steve Smith</span> <span class="media-content">I slowly updated projects</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="media">
                                    <span class="d-flex"><i class="material-icons list-icon">event_available</i> </span>
                                    <span class="media-body"><span class="-heading-font-family media-heading">To Do</span> <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-list-group -->
                        <footer class="card-footer text-center"><a href="javascript:void(0);" class="headings-font-family text-uppercase fs-13">See all activity</a></footer>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.dropdown-menu -->
            </li>
            <!-- /.dropdown -->
            <li>
                <a href="javascript:void(0);" class="right-sidebar-toggle"><i class="material-icons list-icon">border_all</i></a>
            </li>
        </ul>
        <!-- /.navbar-right -->
        <!-- User Image with Dropdown -->
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user ripple" data-toggle="dropdown">
                    <span class="avatar thumb-xs2"><img src="{{asset('assets/backend')}}/demo/users/user1.jpg" class="rounded-circle" alt="" /> <i class="material-icons list-icon">expand_more</i></span>
                </a>
                <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                    <div class="card">
                        <header class="card-header d-flex mb-0">
                            <a href="{{route('profile')}}" class="col-md-4 text-center"><i class="list-icon feather feather-feather"></i> </a>
                            <a href="{{route('setting')}}" class="col-md-4 text-center"><i class="list-icon feather feather-settings"></i> </a>
                            <a href="{{route('adminlogout')}}" class="col-md-4 text-center"><i class="list-icon feather feather-power"></i></a>
                        </header>
                        <ul class="list-unstyled card-body">
                            <li>
                                <a href="{{route('profile')}}">
                                    <span><span class="align-middle">Profile </span></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('setting')}}">
                                    <span><span class="align-middle">Settings</span></span>
                                </a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="screenunlock.html">-->
                            <!--        <span><span class="align-middle">Screen Lock</span></span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{route('adminlogout')}}">
                                    <span><span class="align-middle">Logout</span></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.dropdown-card-profile -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-nav -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- /.navbar -->