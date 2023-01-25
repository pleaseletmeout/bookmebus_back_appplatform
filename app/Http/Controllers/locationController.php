<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Models\Location;

class locationController extends Controller
{
    //
    public function show_location()
    {
        $location_db = DB::select('select * from locations');

        return view('admin.locationControl')->with(['locations' => $location_db]);
    }
    
    public function add_location(Request $request){
        $post = new Location();

        try{
            Location::create([
                'location_name' => trim($request->input('name')),
                
            ]);

            session()->flash('status', 'Location has been added!!');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('status', 'Your location addition is getting problem');

        }

        return redirect('admin/dashboard/location');
    }

    public function update_location(Request $request, $id){
        $location = Location::find($id);
        $location->location_name = $request->input('update_name');

        $location->update();

        return redirect('admin/dashboard/location')->with('status', 'Location has been updated!!!');
    }

    public function delete_location($id)
    {
        $location = Location::find($id);
        $location->delete();

        return redirect('admin/dashboard/location')->with('status', 'Location has been deleted!!!');
    }
}
