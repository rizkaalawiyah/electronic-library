<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class AdminBooksController extends Controller
{
    public function index(Request $request){
    	$books=Book::all();
        return view ('admin/books/books',['books'=>$books]);
    }

    public function edit($id){
    	$books = \App\Book::findOrFail($id); 
        return view ('admin/books/edit',['books'=>$books]);
    }
    
    public function update($id){ 
	    $books = \App\Book::findOrFail($id);     
	    $books->title = Request('title');
	    $books->year = Request('year');
	    $books->publisher = Request('publisher');
	    $books->desc = Request('desc');
	    $books->Author = Request('author');

	    $books->save();
	    return redirect('admin/books');
    }

    public function destroy($id){
        $books = \App\Book::findOrFail($id); 
        $books->delete(); 

        return redirect('admin/books')->with('status', 'Book successfully delete');
    }

    public function getNewBook(){
       $cats = Category::all();
       return view('admin/books/create')->with(['cat'=>$cats]);
    }

    public function postNewBook(Request $request){
        $this->validate($request,[
           'title'=>'required',
            'author'=>'required',
            'year'=>'required',
            'publisher'=>'required',
            'desc'=>'required',
            'category',
            'cover_img'=>'required|mimes:jpg,jpeg,png',
            'book_file.*'=>'required|mimes:pdf, doc, docx, epub'

        ]);

        $cover = $request->file('cover_img');
        $cover_ext = $request->file('cover_img')->getClientOriginalExtension();
        $random_name = str_random(8);
        $cover_name = 'cover-img-' .$random_name.'.'.$cover_ext;

        $book = $request->file('book_file');
        $random_book = str_random(9);
        $book_ext = $request->file('book_file')->getClientOriginalExtension();
        $book_name = 'file-' .$random_book.'.'.$book_ext;

        $books = new Book();
        $books->title=$request['title'];
        $books->author=$request['author'];
        $books->cat_id=$request['category'];
        $books->year=$request['year'];
        $books->publisher=$request['publisher'];
        $books->desc=$request['desc'];

        $books->cover_img=$cover_name;
        $books->book_file=$book_name;
        $books->created_by = \Auth::user()->id;
        $books->save();

        Storage::disk('cover')->put($cover_name, file($cover));
        Storage::disk('book')->put($book_name, file($book));

        return redirect('admin/books');

    }
    

}
