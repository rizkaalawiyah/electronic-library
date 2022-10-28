@extends('admin.layouts.app')
@section('title') Edit Book | edit @endsection
@section('content')
     <div class="col-md-8"> 
    @if(session('status'))     
      <div class="alert alert-success">{{session('status')}}</div>   
    @endif  
 
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('book.update', ['id'=>$books->id])}}" method="POST"> 
         {{ csrf_field() }} 
    <input type="hidden" value="PUT" name="_method"> 
    <label for="title">Title</label>     
    <input value="{{$books->title}}" class="form-control" placeholder="Title" type="text" name="title" id="title"/><br>
    <label for="author">Author</label><br>
    <input type="text" name="author" class="form-control" value="{{$books->author}}"><br>     
    <label for="year">Year</label><br>
    <input type="text" name="year" class="form-control" value="{{$books->year}}"><br>   
    <label for="publisher">Publisher</label><br>
    <input type="text" name="publisher" class="form-control" value="{{$books->publisher}}"><br>   
    <label for="desc">Description</label><br>
    <input type="text" name="desc" class="form-control" value="{{$books->desc}}"><br>
    <label for="uploader">Uploader</label><br>
    <input type="text" name="uploader" disabled="" class="form-control" value="{{$books->name}}"><br>      
          
    <input class="btn btn-primary" type="submit" value="Save"/>
  </form> 
</div>
@endsection