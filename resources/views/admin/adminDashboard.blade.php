@extends('layouts.admin.master')

@section('content')
     <!-- Navbar -->
     <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="#">Online Ticket Reservation System</a>

            </li>
        </ul>


        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">

            <span class="brand-text font-weight-light">{{now()->format('Y-m-d')}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/assets/')}}/images/trainlg.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/" class="d-block">{{strtoupper(Auth::user()->name)}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard')}}" class="nav-link  active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home
                            </p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/users')}}" class="nav-link 
                                                    ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/schedule')}}" class="nav-link 
                                                    ">
                            <i class="nav-icon fas fa-calendar-day"></i>
                            <p>
                                Schedules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/route')}}" class="nav-link">
                            <i class="nav-icon fas fa-route"></i>
                            <p>
                                Routes
                            </p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/operator')}}" class="nav-link">
                            <i class="nav-icon fas fa-bus"></i>
                            <p>
                                Operators
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/location')}}" class="nav-link">
                            <i class="nav-icon fas fa-file-pdf"></i>
                            <p>
                                Location
                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/payment')}}" class="nav-link      ">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>
                                Payments
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link      ">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Feedbacks
                            </p>
                        </a>
                    </li>

                    


                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> Administrator Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
<h5 class="mt-4 mb-2">Hi, System Administrator</h5>
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-danger">
            <span class="info-box-icon"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Passengers</span>
                <span class="info-box-number">8</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                                </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fa fa-train"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Trains</span>
                <span class="info-box-number">10</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                                </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-secondary">
            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Schedules</span>
                <span
                    class="info-box-number">25</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                                </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fa fa-dollar-sign"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Payments</span>
                <span class="info-box-number"> $ 33312</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>

            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <!-- /.col-md-6 -->
</div>

<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-primary">
            <span class="info-box-icon"><i class="fa fa-route"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Routes</span>
                <span class="info-box-number">18</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>

            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
            <span class="info-box-icon"><i class="fa fa-comment-dots"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Feedbacks Received</span>
                <span class="info-box-number">5</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>

            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- /.col -->
</div>
<!-- /.row -->

</div>            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection