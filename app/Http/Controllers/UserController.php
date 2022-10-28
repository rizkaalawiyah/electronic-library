<?php


namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class UserController extends Controller
{
    public function getShowBook(){
	 	$buku = Auth::user()->book()->paginate(10);
	    $jumlah_data = count($buku);
	    return view('users.profile', compact('buku', 'jumlah_data'));
	}
	
	public function show(){
        return view('users/setting');
    }

    public function edit(User $user){   
        $user = Auth::user();
        return view('users/edit', compact('user'));
    }

    public function update(User $user, Request $request){ 

    $user = Auth::user();
    $user->name = Request('name');
    $user->bio = Request('bio');

    $cover = $request->file('pic');
    $cover_ext = $request->file('pic')->getClientOriginalExtension();
    $random_name = str_random(8);
    $cover_name = 'pic-' .$random_name.'.'.$cover_ext;
    $user->pic=$cover_name;    
    $user->save();
    Storage::disk('pic')->put($cover_name, file($cover));
    return redirect('user/setting');
    }

    public function getImage($pic){
        $file = Storage::disk('pic')->get($pic);
        return response($file,200)->header('Content-Type','jpeg/jpg/png');
    }


}
