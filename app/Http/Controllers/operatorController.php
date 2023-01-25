<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Models\Operator;

class operatorController extends Controller
{
    
    

    public function show_operator(Request $request){
        $operator_db = DB::select('select * from operators');

        return view('admin.operatorControl', ['operators' => $operator_db]);
    }

    public function add_operator(Request $request){
        $post = new Operator();

        try{
            Operator::create([
                'operator_name' => trim($request->input('name')),
                'operator_phone_num' => trim($request->input('phone')),
            ]);

            session()->flash('status', 'Operator has been added!!');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('status', 'Your operator addition is getting problem');

        }

        return redirect('admin/dashboard/operator');
    }

    public function update_operator(Request $request, $id)
    {
        $operator = Operator::find($id);
        $operator->operator_name = $request->input('update_name');
        $operator->operator_phone_num = $request->input('update_phone');

        $operator->update();

        return redirect('admin/dashboard/operator')->with('status', 'Operator has been updated!!!');
    }

    public function delete_operator($id)
    {
        $operator = Operator::find($id);
        $operator->delete();

        return redirect('admin/dashboard/operator')->with('status', 'Operator has been deleted!!!');
    }
    
}
