@extends('admin.layouts.app')
@section('title') Pengguna | edit @endsection
@section('content')
	 <div class="col-md-8"> 
    @if(session('status'))     
      <div class="alert alert-success">{{session('status')}}</div>   
    @endif  
 
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.update', ['id'=>$user->id])}}" method="POST"> 
         {{ csrf_field() }} 
    <input type="hidden" value="PUT" name="_method"> 
    <label for="name">Name</label>     
    <input value="{{$user->name}}" class="form-control" placeholder="Full Name" type="text" name="name" id="name"/><br>     
    
    <label for="bio">Bio</label><br>
    <input type="text" name="bio" class="form-control" value="{{$user->bio}}"><br>     
    <label for="gender">Gender</label>     
    <textarea disabled name="gender" id="gender" class="form-control">{{$user->gender}}</textarea><br> 
 
    <label for="pic"> Profile Photo</label><br>     
    Current Profile Photo: <br>     
    @if($user->pic)       
      <img src="{{asset('storage/'.$user->pic)}}" width="120px" /><br>     
    @else        
      No avatar     
    @endif     <br>     
    <input id="pic" name="pic" type="file" class="form-control">     
    <small class="text-muted">Kosongkan jika tidak ingin mengubah avatar</small>        
    <hr class="my-3">        
    <label for="email">Email</label>      
    <input value="{{$user->email}}" disabled class="form-control" placeholder="user@mail.com" type="text" name="email"id="email"/><br>        
    <input class="btn btn-primary" type="submit" value="Save"/>
  </form> 
</div>
@endsection