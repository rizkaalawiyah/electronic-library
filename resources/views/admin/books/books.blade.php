@extends('admin.layouts.app')
@section('title') Books List @endsection
@section('content')
    @if(session('status'))     
      <div class="alert alert-danger">         
        {{session('status')}}     
      </div> 
    @endif
 <div style="overflow-x: auto;"> 
 <table class="table table-bordered">       
  	<thead>         
  		<tr>           
  			<th><b>Title</b></th>           
  			<th><b>Author</b></th>           
  			<th><b>Cover</b></th>
        <th><b>Year</b></th>
        <th><b>Publisher</b></th>
        <th><b>Description</b></th>
        <th><b>Book File</b></th>           
  			<th><b>Action</b></th>         
  		</tr>       
  	</thead>       
    <tbody>         
      @foreach($books as $book)           
      <tr>             
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
         <td>               
           <img src="{{route('img',['cover_img'=>$book->cover_img])}}" width="128px"/>  <br><br> 
         </td> 
        <td>{{$book->year}}</td>  
        <td>{{$book->publisher}}</td>
        <td>{{$book->desc}}</td>
        <td>-</td>

         <td>     
          <a class="btn btn-info text-white btn-sm" href="/admin/books/{{$book->id}}/edit">Edit</a>
          <form onsubmit="return confirm('Delete this book permanently?')" class="d-inline" action="{{route('book.destroy', ['id' => $book->id ])}}" method="POST"> 
           {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">  
            <input type="submit" value="Delete" class="btn btn-danger btn-sm"> 
          </form> 
         </td>     
       
           
      </tr>         
      @endforeach        
    </tbody>  
   
  </table>
</div>

       <button class="btn btn-outline-light mt-5" type="submit" style="background-color: #dd4b39; border-radius: 20px; width: 150px; height: 40px; font-family: 'Times New Roman', Times, serif;">
            <a href="{{url('admin/books/create')}}" style="color: white;"><b>Add Book</b></a>          
      </button>

@endsection