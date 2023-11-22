<?php

namespace App\Http\Controllers;

use App\Models\Timeline;

use App\Models\User_projects;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    public function timeline(){
        
        $projects = User_projects::where('user_email', Auth::user()->email)->get();

        $keyword=request('project');

        if($keyword==''){
            return view('user.timeline')->with('events',[] )->with('projects',$projects )->with('keyword',$keyword );
        }
        
        $events = Timeline::where('user_email', Auth::user()->email)->where('project_name', $keyword)->get();

        return view('user.timeline')->with('events',$events )->with('projects',$projects )->with('keyword',$keyword );
    }

    public function notification(){
        $message='this is you notifications';
        return view('user.notif', compact('message'));
    }

    public function info(){
        $message='this is you project informations';
        return view('user.info', compact('message'));
    }

    public function messages(){
        $message='this is you messages';
        return view('user.messages', compact('message'));
    }

    public function bills(){
        $message='this is you billing history';
        return view('user.bills', compact('message'));
    }

    public function request_project(){
    error_log('noice');
        User_projects::create([
            'user_email' => Auth::user()->email,
            'project_name'=> request('project_name'),
            'admins_email'=>json_encode([]),
            'devs_email'=>json_encode([])
        ]);
        return Redirect::to("/home/timeline?project=" . request('project_name'));
    }
}
