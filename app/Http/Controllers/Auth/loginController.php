<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

class loginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show_login_form()
    {
        return view('admin.adminLog');
    }

    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = Admin::where('email',$request->email)->first();

        // dd(auth()->attempt($credentials));
        if (auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
        ])) {
            // $admin = Auth::user();

            return redirect("/");

        }else{

            session()->flash('message', 'Wrongly Input email or password.');
            return redirect()->back();
        }

    }

    public function logout()
    {

        \Auth::logout();

        return redirect()->route('home');
        

    }
}
