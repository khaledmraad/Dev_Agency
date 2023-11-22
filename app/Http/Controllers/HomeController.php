<?php

namespace App\Http\Controllers;

use App\Models\Dev_tasks;

use App\Models\Projects;


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    $user = Auth::user();

    if ($user->role === 'root') {
        
      
        // return view('admin.home')->with('message',$message);
        return Redirect::to('/admin/dev_cont_panel');
        
    } 
    elseif($user->role === 'dev'){

        return Redirect::to('/dev');

    }
    else {

        $message = 'Welcome to the dashboard!';
        
    }
    $projects=Projects::get();
    
    return view('user.home', compact('message','projects'));
}
}
