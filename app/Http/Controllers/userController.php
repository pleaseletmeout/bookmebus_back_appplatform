<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class userController extends Controller
{
    //
    public function show_user()
    {
        $user_db = DB::select('select * from users');
        return view('admin.userControl')->with(['users' => $user_db]);
    }
}
