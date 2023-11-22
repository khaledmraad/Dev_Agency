<?php

namespace App\Http\Controllers;

use App\Models\Dev_tasks;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DeveloperController extends Controller
{
    public function index()
        {
            $message = 'Ahla bi '.Auth::user()->name.' Dev_tasksRRRRR!';

            $tasks = Dev_tasks::where('email', Auth::user()->email)->get();

            return view('developer.home')->with('message',$message)->with('tasks',$tasks );
        }
    
    public function taskdone(Request $request)
        {  
            $id = $request->input('id');
        
        
            $task = Dev_tasks::find($id);

            $task->done='done';
            
            $task->save();

    
        }

        public function taskstill(Request $request)
        {  

            $id = $request->input('id');
        
        
            $task = Dev_tasks::find($id);

            $task->done='still';
            
            $task->save();

    
        }



        public function taskremove(Request $request)
        {  


            $id = $request->input('id');
        
        
            $task = Dev_tasks::find($id);

            $task->done='removed';
            
            $task->save();

    
        }
}





