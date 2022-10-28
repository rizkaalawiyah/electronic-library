@extends('admin.layouts.app')
@section('title') Dashboard @endsection
@section('content')
	 <div class="col-md-8"> 
 	 	@if(session('status'))     
 	 		<div class="alert alert-success">         
 	 			{{session('status')}}     
 	 		</div> 
 	 	@endif
 	 	
    	<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST"> 
	       {{ csrf_field() }} 
      	<label for="name">Name</label>      
      	<input class="form-control" placeholder="Full Name" type="text" name="name" id="name"/><br> 

	    <label for="bio">Bio</label>       
	    <input class="form-control" placeholder="email" type="text" name="bio" id="bio"/><br>

	    <label for="gender">Gender</label>    
	     <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
         <div class="col-md-13">
          @if ($errors->has('name'))
           <span class="help-block">
                  <strong>{{ $errors->first('gender') }}</strong>
            </span>
           @endif
           <select name="gender" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
                                
             </select>
             </div>
          </div>
  
      	<label for="pic"> Profile Photo</label><br>       
      	<input id="pic" name="pic" type="file" class="form-control"> 
 
      	<hr class="my-3"> 
      	<label for="email">Email</label>       
      	<input class="form-control" placeholder="user@mail.com" type="text" name="email" id="email"/><br>  
      	<label for="password">Password</label>       
      	<input class="form-control" placeholder="password" type="password" name="password" id="password"/><br>  
      	<label for="password_confirmation">Password Confirmation</label>       
      	<input class="form-control" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation"/><br> 

      	<button class="btn btn-outline-light mt-5" type="submit" style="background-color: #dd4b39; border-radius: 20px; width: 150px; height: 40px; font-family: 'Times New Roman', Times, serif;">
            <a href="" style="color: white;"><b>Save</b></a>          
      </button>     
      </form>   
  </div>
@endsection