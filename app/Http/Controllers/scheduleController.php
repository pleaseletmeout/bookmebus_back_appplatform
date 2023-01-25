<?php

namespace App\Http\Controllers;




use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Models\Schedule;

class scheduleController extends Controller
{
    public function addSchedule(Request $request){

        $post = new Schedule();
       
        try{
            Schedule::create([
                'departure_time' => $request->input('departure_time'),
                'arrival_time' => $request->input('arrival_time'),
                'price' => $request->input('price'),
                'max_seat' => $request->input('max_seat'),
                'bus_route_id' => $request->input('route_id'),
            ]);

            session()->flash('status', 'Schedule has been added!!');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('status', 'Your schedule addition is getting problem');

        }

        return redirect('admin/dashboard/schedule');
        // return redirect('/');
    }

    public function schedulePage(){

        // $routeTable = DB::table('routes')->get(['id']);
        // return view('scheduleControl', compact('routeTable'));
        // return view('scheduleControl', ['routes' => DB::all()]);

        $route_db = DB::select('select * from bus_routes inner join operators on bus_routes.operator_id = operators.operator_id');
        $schedule_db = DB::select('SELECT * FROM schedules inner join bus_routes on schedules.bus_route_id = bus_routes.bus_route_id inner join operators on bus_routes.operator_id = operators.operator_id;');
        return view('admin.scheduleControl')->with(['routes' => $route_db,'schedules' => $schedule_db]);

    }

    public function update_schedule(Request $request, $id)
    {
        
        $schedule = Schedule::find($id);
        $schedule->bus_route_id = $request->input('new_route_id');
        $schedule->departure_time = $request->input('new_dtime');
        $schedule->arrival_time = $request->input('new_atime');
        $schedule->price = $request->input('new_price');
        $schedule->max_seat = $request->input('new_max_seat');
        $schedule->update();

        return redirect('admin/dashboard/schedule')->with('status', 'Schedule has been updated!!!');
    }

    public function delete_schedule($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();

        return redirect('admin/dashboard/schedule')->with('status', 'Schedule has been deleted!!!');
    }

}

