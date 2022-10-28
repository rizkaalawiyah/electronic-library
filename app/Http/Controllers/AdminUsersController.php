<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminUsersController extends Controller
{
    public function index(Request $request){
        $users = \App\User::paginate(10); 
        $filterKeyword = $request->get('keyword'); 
        $status = $request->get('status'); 
        if($status){     
            $users = \App\User::where('status', $status)->paginate(10); 
        } else {     
            $users = \App\User::paginate(10); 
        }
        
        if($filterKeyword){     
            if($status){         
                $users = \App\User::where('email', 'LIKE', "%$filterKeyword%")->where('status', $status)->paginate(10);
            } else {         
                $users = \App\User::where('email', 'LIKE', "%$filterKeyword%")->paginate(10);    
            } 
        } 

        return view('admin.users.users', ['users' => $users]);
    }

    public function destroy($id){
        $user = \App\User::findOrFail($id); 
        $user->delete(); 

        return redirect()->back()->with('status', 'User successfully delete');
    }

    public function create(){
        return view("admin.users.create");    
    }

    public function store(Request $request) {     
        $new_user = new \App\User;     
        $new_user -> name = $request->get('name');     
        $new_user -> bio = $request->get('bio');           
        $new_user -> gender = $request->get('gender');     
        $new_user -> email = $request->get('email');     
        $new_user -> password = \Hash::make($request->get('password')); 
    
        $cover = $request->file('pic');
        $cover_ext = $request->file('pic')->getClientOriginalExtension();
        $random_name = str_random(8);
        $cover_name = 'pic-' .$random_name.'.'.$cover_ext;

        $new_user->pic=$cover_name;

         
        $new_user->save();     
        Storage::disk('pic')->put($cover_name, file($cover));
        return redirect('admin/users')->with('status', 'User successfully created'); 
    } 

     public function edit($id){
        $user = \App\User::findOrFail($id); 
        return view('admin.users.edit', ['user' => $user]);
    }


    public function update(Request $request, $id){
        $user = \App\User::findOrFail($id);
        $user->name = $request->get('name');          
        $user->bio = $request->get('bio'); 
        $user->gender = $request->get('gender'); 
 



        
        if($request->file('pic')){     
            if($user -> pic && file_exists(storage_path('app/public/' . $user -> pic))){         
                 \Storage::delete('public/'.$user -> pic);    
                 }    
                  $file = $request -> file('pic') -> store('pics', 'public');     
                  $user->pic = $file; 
              }

     
        $user->save(); 
        
        return redirect()->route('admin.index')->with('status', 'User successfully updated');
    }
    public function getImage($pic){
        $file = Storage::disk('pic')->get($pic);
        return response($file,200)->header('Content-Type','jpeg/jpg/png');
    }

    public function show($id){
        $user = \App\User::findOrFail($id); 
        return view('admin.detail', ['user' => $user]);
    }


}
