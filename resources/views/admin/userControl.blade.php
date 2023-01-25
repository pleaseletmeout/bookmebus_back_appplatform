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
        <a href="{{url('/admin/dashboard')}}" class="brand-link">

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
                        active                            ">
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
                                Operators 
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/admin/dashboard/location')}}" class="nav-link      ">
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
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;" >
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
                            Registered Users</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">

                            <table style="width: 100%;" id="example1" style="align-items: stretch;"
                                class="table table-hover table-bordered">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_num}}</td>
                                        <td>{{$user->address}}</td>


                                        <td>
                                                                                            <a href="#">
                                                <button
                                                    onclick="return confirm('You are about denying this user access to  his/her account.')"
                                                    type="submit" class="btn btn-danger">
                                                    Disable Account
                                                </button></a>
                                                                                        </td>
                                    </tr>
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
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        Train : <select class="form-control" name="train_id" required id="">
                            <option value="">Select Train</option>
                            <option value='1'>Kano Rails</option><option value='2'>British Railways</option><option value='3'>Wester Railways</option><option value='7'>Lagos Rails</option><option value='8'>Marble Railways</option><option value='9'>Renfee R</option><option value='10'>Venice Express</option><option value='11'>Orient Express</option><option value='12'>Phantom Express</option><option value='13'>Marshland Express</option>                            </select>

                    </div>
                    <div class="col-sm-6">
                        Route : <select class="form-control" name="route_id" required id="">
                            <option value="">Select Route</option>
                            <option value='3'>St Bawle to San Ghammea</option><option value='4'>Hurstcracombe to Treeblooms</option><option value='5'>Cape Onbac to Ringkya</option><option value='6'>Treeblooms to Bridghamgascon</option><option value='7'>Fort Hammits to Aux Cursbur</option><option value='8'>Addersfield to Glenarm</option><option value='9'>Peterbrugh to Ffestiniog</option><option value='10'>Dawsbury to Blencathra</option><option value='11'>Rutherglen to Tylwaerdreath</option><option value='12'>Cirencester to Bournemouth</option><option value='13'>Laencaster to Fournemouth</option><option value='14'>Urmkirkey to Longdale</option><option value='15'>Vlinginia to Onaginia</option><option value='16'>Onaginia to Epleburgh</option><option value='17'>Epleburgh to Kapwood</option><option value='18'>Vlinginia to Oroville</option><option value='19'>Vlinginia to Inaschester</option><option value='20'>Pnhom Penh to Siem Reap</option>                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        First Class Charge : <input class="form-control" type="number" name="first_fee" required
                            id="">
                    </div>
                    <div class="col-sm-6">

                        Second Class Charge : <input class="form-control" type="number" name="second_fee" required
                            id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        Date : <input class="form-control" onchange="check(this.value)" type="date" name="date"
                            required id="date">
                    </div>
                    <div class="col-sm-6">

                        Time : <input class="form-control" type="time" name="time" required id="">
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


<div class="modal fade" id="add2">
<div class="modal-dialog modal-lg">
    <div class="modal-content" align="center">
        <div class="modal-header">
            <h4 class="modal-title">Add Range Schedule &#128649;
            </h4>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        Train : <select class="form-control" name="train_id" required id="">
                            <option value="">Select Train</option>
                            <option value='1'>Kano Rails</option><option value='2'>British Railways</option><option value='3'>Wester Railways</option><option value='7'>Lagos Rails</option><option value='8'>Marble Railways</option><option value='9'>Renfee R</option><option value='10'>Venice Express</option><option value='11'>Orient Express</option><option value='12'>Phantom Express</option><option value='13'>Marshland Express</option>                            </select>

                    </div>
                    <div class="col-sm-6">
                        Route : <select class="form-control" name="route_id" required id="">
                            <option value="">Select Route</option>
                            <option value='3'>St Bawle to San Ghammea</option><option value='4'>Hurstcracombe to Treeblooms</option><option value='5'>Cape Onbac to Ringkya</option><option value='6'>Treeblooms to Bridghamgascon</option><option value='7'>Fort Hammits to Aux Cursbur</option><option value='8'>Addersfield to Glenarm</option><option value='9'>Peterbrugh to Ffestiniog</option><option value='10'>Dawsbury to Blencathra</option><option value='11'>Rutherglen to Tylwaerdreath</option><option value='12'>Cirencester to Bournemouth</option><option value='13'>Laencaster to Fournemouth</option><option value='14'>Urmkirkey to Longdale</option><option value='15'>Vlinginia to Onaginia</option><option value='16'>Onaginia to Epleburgh</option><option value='17'>Epleburgh to Kapwood</option><option value='18'>Vlinginia to Oroville</option><option value='19'>Vlinginia to Inaschester</option><option value='20'>Pnhom Penh to Siem Reap</option>                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        First Class Charge : <input class="form-control" type="number" name="first_fee" required>
                    </div>
                    <div class="col-sm-6">

                        Second Class Charge : <input class="form-control" type="number" name="second_fee" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        From Date : <input class="form-control" onchange="check(this.value)" type="date"
                            name="from_date" required>
                    </div>
                    <div class="col-sm-6">
                        End Date : <input class="form-control" onchange="check(this.value)" type="date"
                            name="to_date" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> Every :
                        <select class="form-control" name="every">
                            <option value="Day">Day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                    <div class="col-sm-6">

                        Time : <input class="form-control" type="time" name="time" required id="">
                    </div>
                </div>
                <hr>
                <input type="submit" name="submit2" class="btn btn-success" value="Add Schedule"></p>
            </form>

            <script>
            function check(val) {
                val = new Date(val);
                var age = (Date.now() - val) / 31557600000;
                var formDate = document.getElementById('date');
                if (age > 0) {
                    alert("You are using a past/current date!");
                    val.value = "";
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