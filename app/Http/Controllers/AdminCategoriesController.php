<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoriesController extends Controller
{
    public function index(Request $request){
    	$categories=Category::all();
        return view ('admin/categories/categories',['categories'=>$categories]);
    }

    public function destroy($id){
        $categories = \App\Category::findOrFail($id); 
        $categories->delete(); 

        return redirect('admin/categories')->with('status', 'category successfully delete');
    }

    public function getImage($cat_img){
        $file = Storage::disk('cat')->get($cat_img);
        return response($file,200)->header('Content-Type','jpeg/jpg/png');
    }

    public function create(){
        return view("admin.categories.create");    
    }

    public function store(Request $request) {     
        $cat = new \App\Category;     
        $cat -> cat_name = $request->get('cat_name');     

        $cover = $request->file('cat_img');
        $cover_ext = $request->file('cat_img')->getClientOriginalExtension();
        $random_name = str_random(8);
        $cover_name = 'pic-cat-' .$random_name.'.'.$cover_ext;

        $cat->cat_img=$cover_name;

         
        $cat->save();     
        Storage::disk('cat')->put($cover_name, file($cover));
        return redirect('admin/categories')->with('status', 'User successfully created'); 
    }

}
