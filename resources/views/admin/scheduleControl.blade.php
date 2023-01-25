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
                        active                            ">
                            <i class="nav-icon fas fa-calendar-day"></i>
                            <p>
                                Schedules
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/route')}}" class="nav-link      ">
                            <i class="nav-icon fas fa-route"></i>
                            <p>
                                Routes
                            </p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/operator')}}" class="nav-link      ">
                            <i class="nav-icon fas fa-bus"></i>
                            <p>
                                Operator 
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link      ">
                            <i class="nav-icon fas fa-file-pdf"></i>
                            <p>
                                Report
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
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            All Dynamic Schedules</h3>
                        <div class='float-right'>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#add">
                                Add New One-Time Schedule &#128645;
                            
                        </div>
                    </div>

                    <div class="card-body">

                        <table id="example1" style="align-items: stretch;"
                            class="table table-hover w-100 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Operator</th>
                                    <th>Route</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Price</th>
                                    <th>Max Seat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{$schedule->schedule_id}}</td>
                                    <td>{{$schedule->operator_name}}</td>
                                    <td>{{$schedule->origin}} to {{$schedule->destination}}</td>
                                    <td>{{$schedule->departure_time}}</td>
                                    <td>{{$schedule->arrival_time}}</td>
                                    <td>{{$schedule->price}}$</td>
                                    <td>{{$schedule->max_seat}}</td>
                                    

                                    <td>
                                        <form method="get" action="{{url('admin/dashboard/deleteSchedule/'.$schedule->schedule_id)}}">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit{{$schedule->schedule_id}}">
                                                Edit
                                            </button> 

                                            <input type="hidden" class="form-control" name="del_train"
                                                value="104" required id="">
                                            <button type="submit"
                                                onclick="return confirm('Are you sure about this?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit{{$schedule->schedule_id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing  Schedule &#128642;</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form action="{{url('admin/dashboard/updateSchedule/'.$schedule->schedule_id)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" class="form-control" name="id"
                                                        value="104" required id="">


                                                    <p>Route : 
                                                        <select name="new_route_id" class="form-control" required>
                                                            <option value="" selected disabled hidden>Select Route</option>
                                                            @foreach($routes as $route)
                                                            <option value="{{$route->bus_route_id}}">{{$route->origin}} to {{$route->destination}}, {{$route->operator_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </p>
                                                    <p>
                                                        Max Seat : <input class="form-control"
                                                            type="number" min="0" value="{{$schedule->max_seat}}"
                                                            name="new_max_seat" required id="">
                                                    </p>
                                                    <p>
                                                        Departure Time : <input class="form-control" type="time"
                                                        value="{{$schedule->departure_time}}" name="new_dtime"
                                                        required id="">
                                                    </p>
                                                    <p>
                                                        Arrival Time :
                                                        <input class="form-control" type="time"
                                                            value="{{$schedule->arrival_time}}" name="new_atime"
                                                            required id="">

                                                    </p>
                                                    <p>
                                                        Price : <input class="form-control" type="number"
                                                            value="{{$schedule->price}}" name="new_price"
                                                            required id="">
                                                    </p>
                                                    <p class="float-right"><input type="submit" name="edit"
                                                            class="btn btn-success" value="Edit Schedule"></p>
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
            <h4 class="modal-title">Add New Schedule &#128649;
            </h4>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/admin/dashboard/addSchedule" method="post">
            @csrf
                <!-- <div class="row">
                    <div class="col-sm-6">
                        Origin : <select class="form-control" name="train_id" required id="">
                            <option value="">Select Origin</option>
                            <option value='1'>Kano Rails</option><option value='2'>British Railways</option><option value='3'>Wester Railways</option><option value='7'>Lagos Rails</option><option value='8'>Marble Railways</option><option value='9'>Renfee R</option><option value='10'>Venice Express</option><option value='11'>Orient Express</option><option value='12'>Phantom Express</option><option value='13'>Marshland Express</option>                            </select>

                    </div>
                    <div class="col-sm-6">
                        Destination : <select class="form-control" name="route_id" required id="">
                            <option value="">Select Destination</option>
                            <option value='3'>St Bawle to San Ghammea</option><option value='4'>Hurstcracombe to Treeblooms</option><option value='5'>Cape Onbac to Ringkya</option><option value='6'>Treeblooms to Bridghamgascon</option><option value='7'>Fort Hammits to Aux Cursbur</option><option value='8'>Addersfield to Glenarm</option><option value='9'>Peterbrugh to Ffestiniog</option><option value='10'>Dawsbury to Blencathra</option><option value='11'>Rutherglen to Tylwaerdreath</option><option value='12'>Cirencester to Bournemouth</option><option value='13'>Laencaster to Fournemouth</option><option value='14'>Urmkirkey to Longdale</option><option value='15'>Vlinginia to Onaginia</option><option value='16'>Onaginia to Epleburgh</option><option value='17'>Epleburgh to Kapwood</option><option value='18'>Vlinginia to Oroville</option><option value='19'>Vlinginia to Inaschester</option><option value='20'>Pnhom Penh to Siem Reap</option>                            </select>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-sm-6">
                        Price : <input class="form-control" type="number" min="1" name="price" required
                            id="">
                    </div>
                    <div class="col-sm-6">

                        Maximun seat : <input class="form-control" type="number" name="max_seat" min="1" required
                            id="">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-sm-12">

                        Route :
                        <select name="route_id" class="form-control" required>
                                <option value="" selected disabled hidden>Select Route</option>
                                @foreach($routes as $route)
                                    <option value="{{$route->bus_route_id}}">{{$route->origin}} to {{$route->destination}}, {{$route->operator_name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        Departure time : <input class="form-control" type="time" name="departure_time"
                            required id="">
                    </div>
                    <div class="col-sm-6">

                        Arrival time : <input class="form-control" type="time" name="arrival_time" required id="">
                    </div>
                </div>
                <hr>
                <input type="submit" name="submit" class="btn btn-success" value="Add Schedule"></p>
            </form>

            <script>
            function check(val) {
                val = new Date(val);
                var age = (Date.now() - val) / 31557600000;
                var formDate = document.getElementById('date');
                if (age > 0) {
                    alert("Past/Current Date not allowed");
                    formDate.value = "";
                    return false;
                }
            }
            </script>

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