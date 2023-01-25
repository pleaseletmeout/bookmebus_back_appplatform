<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // include for AUTH



use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;

class dashboardController extends Controller
{
    //
    public function show_dashboard(){
        return view('admin.adminDashboard');
    }

    public function show_payment(){
        $ticket_db = $ticket_db = DB::select("select * from tickets inner join schedules on tickets.schedule_id =
        schedules.schedule_id inner join bus_routes on schedules.bus_route_id =
        bus_routes.bus_route_id inner join operators on bus_routes.operator_id =
        operators.operator_id inner join users on tickets.id = users.id");
        return view('admin.paymentControl')->with(['tickets' =>$ticket_db]);
    }

    

    public function show_schedule(){
        return view('admin.scheduleControl');
    }
}
