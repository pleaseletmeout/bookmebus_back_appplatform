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
        <a href="admin.php" class="brand-link">

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
                        <a href="{{url('/admin/dashboard')}}" class="nav-link ">
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
                        <a href="{{url('/admin/dashboard/location')}}" class="nav-link active">
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
                        @if(session('status'))
                        <div>
                            <h6 class="m-0 text-red"> {{session('status')}}</h6>
                        </div>
                        @endif
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        
<div class="content">
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            All Location</h3>
                        <div class='float-right'>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#add">
                                Add New Location &#128645;
                            </button></div>
                    </div>

                    <div class="card-body">

                        <table id="example1" style="align-items: stretch;"
                            class="table table-hover w-100 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Operator Name</th>
                                    
                                    
                                    <th style="width: 30%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($locations as $location)
                                <tr>
                                    <td>{{$location->location_id}}</td>
                                    <td>{{$location->location_name}}</td>
                                    
                                    <td>
                                        <form method="GET" action="{{url('/admin/dashboard/deleteLocation/'.$location->location_id)}}">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit{{$location->location_id}}">
                                                Edit
                                            </button> -

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="1" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id ="edit{{$location->location_id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing Location</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('admin/dashboard/updateLocation/'.$location->location_id)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" class="form-control" name="id"
                                                         required >
                                                    <p>Location Name : <input type="text" class="form-control"
                                                            name="update_name" value="{{$location->location_name}}"
                                                            required minlength="3" ></p>
                                                                                            
                                                    <p>

                                                        <input class="btn btn-info" type="submit" value="Edit Location"
                                                            name='edit'>
                                                    </p>
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    @endforeach
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>

<div class="modal fade" id="add">
<div class="modal-dialog modal-lg">
    <div class="modal-content" align="center">
        <div class="modal-header">
            <h4 class="modal-title">Add New Location &#128646;
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/admin/dashboard/saveLocation" method="post">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Location Name</th>
                        <td><input type="text" class="form-control" name="name" required minlength="3" id=""></td>
                    </tr>
                    
                    
                    <tr>
                        <td colspan="2">

                            <input class="btn btn-info" type="submit" value="Add Location" name='submit'>
                        </td>
                    </tr>
                </table>
            </form>



        </div>

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection