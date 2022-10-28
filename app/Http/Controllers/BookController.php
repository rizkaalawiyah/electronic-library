<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class BookController extends Controller
{

	public function getShowBook(Request $request){
     $buku=Book::all();
        return view ('books/index',['buku'=>$buku]);
    }

    public function getNewBook(){
       $cats = Category::all();
        return view('books/upload_book')->with(['cat'=>$cats]);
    }

    public function getImage($cover_img){
        $file = Storage::disk('cover')->get($cover_img);
        return response($file,200)->header('Content-Type','jpeg/jpg/png');
    }

    public function getBook($book_file){
        $file = Storage::disk('book')->get($book_file);
        return response($file,200)->header('Content-Type','*/*');
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

        return redirect('/index');

    }

    public function getDetailBook($id){
     	$books = Book::findOrFail($id);
        return view ('books/detail',['books'=>$books]);
    }

    public function DeleteBook($id){
        $books=DB::table('books')->where('id',$id)->delete();
    	return redirect()->back()->withErrors('Successfully deleted!');
    }


    public function getShowCategories(){
        $categories = Category::all();
        return view ('books/categories',['categories'=>$categories]);
    }

    public function getShowBooks($id){
        $categories = \App\Category::findOrFail($id);
        $buku = $categories->book()->paginate(10);
        $jumlah_data = count($buku);
        return view('books.show_book_cat', compact('buku', 'jumlah_data'), ['categories' => $categories]);
      }
}
