<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Models\Bus_route;

class routeController extends Controller
{
    //

    public function show_route(Request $request){
        $route_db = DB::select('select * from bus_routes inner join operators on bus_routes.operator_id = operators.operator_id');
        $operator_db = DB::select('select * from operators');
        $location_db = DB::select('select * from locations');

        return view('admin.routeControl')->with(['routes' => $route_db, 'operators' => $operator_db, 'locations' => $location_db]);
    }

    public function add_route(Request $request){
        $post = new Bus_route();

        try{
            Bus_route::create([
                'origin' => trim($request->input('origin')),
                'destination' => trim($request->input('destination')),
                'operator_id' => $request->input('operator_id')
            ]);

            session()->flash('status', 'Route has been added!!');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('status', 'Your route addition is getting problem');

        }
        

        return redirect('admin/dashboard/route');
    }

    public function update_route(Request $request, $id)
    {
        
        $route = Bus_route::find($id);
        $route->origin = $request->input('update_origin');
        $route->destination = $request->input('update_destination');
        $route->operator_id = $request->input('new_operator_id');
        $route->update();

        return redirect('admin/dashboard/route')->with('status', 'Route has been updated!!!');
    }

    public function delete_route($id)
    {
        $route = Bus_route::find($id);
        $route->delete();

        return redirect('admin/dashboard/route')->with('status', 'Route has been deleted!!!');
    }
}
