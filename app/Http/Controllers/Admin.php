<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;


use App\Models\Dev_tasks;

use App\Models\User_projects;

use App\Models\Projects;

use App\Models\Timeline;


use App\Models\User;

use App\Models\Developers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{


    public function New_admin(){
        
        $email=request('new_admin_mail');



        $user = User::where('email', $email)->first();

        if ($user && $user->role === 'root') {

            $message = 'DEJA ADMIN!';

        } elseif ($user) {
            $user->role = 'root';
            $user->save();
            $message = 'Admin added!';

        } else {

            $message = 'Email does not exist!';

        }



    //    return view('admin.home',compact('message'));
    return Redirect::to('/admin/admin_cont_panel')->with('message', $message);


    }

    public function New_dev(){
        
        $email=request('dev_email');
        
        $position=request('position');
        
        $status=request('status');
        
        
        $user = User::where('email', $email)->first();
        
        if($user->role!='dev'){
            
            Developers::create([
                'name' => $user->name,
                'position'=>$position,
                'status'=>$status,
                'email'=>$user->email,
                'phone'=>$user->phone,
                'adress'=>$user->address
            ]);
            
            $user->role='dev';
            $user->save();
            $message = 'New dev added!';
            
            
        }
        elseif($user->role=='dev'){
            
            $message = 'DEJA dev mayjoud!';
        }
        else{
            $message = 'Email does not exist!';
            
        }
        
        $dev_table=Developers::get();
        
        $dev_tasks=DB::table('dev_tasks')->join('developers','dev_tasks.email','developers.email')->select('dev_tasks.*','developers.name')->get();

        return Redirect::to('/admin/dev_cont_panel');
    }


    public function Send_task(){

        Dev_tasks::create([
            'email' => request('dev_email'),
            'topic'=>request('topic'),
            'task'=>request('message'),
            'done'=>'still',
            'sender'=>Auth::user()->email,
            'project_name'=>request('project_name'),
            'client_name'=>request('client_name')
        ]);


        $message = 'Task sennnnnnnntttttttttttt!';

        

        return Redirect::to('/admin/dev_cont_panel');



    }


    public function upload(Request $request)
    {
        if ($request->hasFile('pdfFile')) {
            $file = $request->file('pdfFile');
            $filename = $file->getClientOriginalName();
         
    
            if (Storage::exists('/public/pdfs/'.$filename)) {
                $counter = 1;
    
                while (Storage::exists('/public/pdfs/'.$counter . '_' . $filename)) {
                    $counter++;

                }
                $filename = $counter . '_' . $filename;
            }

        // error_log( getcwd());

        // $filename = "/assets/pdfviewer/web/viewer.blade.js";
        // $fileContents = file_get_contents(public_path($filename));

    
            $file->storeAs('public/pdfs', $filename);
    
            $doc = '/storage/pdfs/' . $filename;
            $message = 'PDF sent!';
    
            return view('admin.home', compact('doc', 'message'));
        }
    }
    


    public function Send_timeline(){

        Timeline::create([
            'user_email' => request('user_email'),
            'project_name'=> request('project_name'),
            'topic'=>request('topic'),
            'description'=>request('description'),
            'start_date'=>request('start_date'),
            'sender_email'=>Auth::user()->email,
            'duration'=>request('duration'),
            'done'=>'still',
        ]);


        $message = 'Timeline event adedddddddddddddddd!';

        return Redirect::to('/admin/client_cont_panel');




    }

    public function devpanel() {

        $message = 'dev controlle panel!';

        $user_table=User::where('role','user')->get();;

        $dev_table=Developers::get();

        $project_table = DB::table('user_projects')->select('project_name','user_email')->get();
       
        $dev_tasks=DB::table('dev_tasks')->join('developers','dev_tasks.email','developers.email')->select('dev_tasks.*','developers.name')->get();

        return view('admin.developers.dev_cont_panel',compact('message','dev_table','dev_tasks','user_table','project_table'));
    
    }


    public function clientpanel() {

        $message='client controle panel';

        $clients=User::where('role','user')->get();

        $project_table=DB::table('user_projects')->join('users','user_projects.user_email','users.email')->select('user_projects.*','users.name')->get();


        return view('admin.client.client_cont_panel',compact('message','clients','project_table'));
    }


    public function adminpanel() {
        $message = session('message');
        if(!$message){
        $message='Admin Controlle Panel';
        }
        
        $admins=User::where('role','root')->get();


        return view('admin.admin.admin_cont_panel',compact('message','admins'));
    }

    public function addproject() {
       
        Projects::create([
            'name' => request('project_name'),
            'description'=> request('description'),
            'image'=>request('image'),
            'tags' =>json_encode(explode(',', strval(request('tags')))),
            'price'=>request('price')
        ]);

        $message='Project added';
        
        return Redirect::to('/admin/admin_cont_panel')->with('message', $message);

        
    }

 

}



