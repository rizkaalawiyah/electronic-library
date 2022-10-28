@extends('admin.layouts.app')
@section('title') Users List @endsection
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
  			<th><b>Name</b></th>           
  			<th><b>Bio</b></th>           
  			<th><b>Email</b></th>
        <th><b>gender</b></th>             
  			<th><b>Avatar</b></th>           
  			<th><b>Action</b></th>         
  		</tr>       
  	</thead>       
    <tbody>         
      @foreach($users as $user)           
      <tr>             
        <td>{{$user->name}}</td>            
        <td>{{$user->bio}}</td>             
        <td>{{$user->email}}</td>
        <td>{{$user->gender}}</td>               
        <td>               
           <img src="{{route('pic',['pic'=>$user->pic])}}" width="128px"/><br><br> 
         </td> 
         <td>     
          <a class="btn btn-info text-white btn-sm" href="/admin/users/{{$user->id}}/edit">Edit</a>
          <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline" action="{{ route('user.destroy', $user->id) }}" method="POST"> 
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
            <a href="{{url('admin/users/create')}}" style="color: white;"><b>Add User</b></a>          
      </button>

@endsection