@extends('admin.layouts.app')
@section('title') Categories List @endsection
@section('content')
    @if(session('status'))     
      <div class="alert alert-danger">         
        {{session('status')}}     
      </div> 
    @endif
 <table class="table table-bordered">       
  	<thead>         
  		<tr>           
  			<th><b>Category Name</b></th>           
  			<th><b>Image</b></th>                    
  			<th><b>Action</b></th>         
  		</tr>       
  	</thead>       
    <tbody>         
      @foreach($categories as $category)           
      <tr>             
        <td>{{$category->cat_name}}</td>
         <td>               
           <img src="{{route('cat',['cat_img' => $category->cat_img])}}" width="128px"/>  <br><br> 
         </td> 
         <td>     
          <a class="btn btn-info text-white btn-sm" href="/admin/books/{{$category->id}}/edit">Edit</a>
          <form onsubmit="return confirm('Delete this category permanently?')" class="d-inline" action="{{route('categories.destroy', ['id' => $category->id ])}}" method="POST"> 
           {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">  
            <input type="submit" value="Delete" class="btn btn-danger btn-sm"> 
          </form> 
         </td>     
       
           
      </tr>         
      @endforeach        
    </tbody>  
   
  </table>

       <button class="btn btn-outline-light mt-5" type="submit" style="background-color: #dd4b39; border-radius: 20px; width: 150px; height: 40px; font-family: 'Times New Roman', Times, serif;">
            <a href="{{url('admin/categories/create')}}" style="color: white;"><b>Add Category</b></a>          
      </button>

@endsection