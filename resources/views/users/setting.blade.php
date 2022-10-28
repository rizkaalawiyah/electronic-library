@extends('layout/template')

@section('title') Setting | E - Library @endsection


@section('body')

  <div class="header mt-5" style="background-color: #FAC0A5;">
   <br>
  <br>
  <br>
  </div>

  <div class="container mt-5" style="  font-family: 'Times New Roman', Times, serif;">
    <div class="tittle mt-4">
      <h1>Account Settings</h1>
    </div>
    <div class="line" style="background-color: grey; height: 2px;">
      <br>
    </div>
    <div class="row content mt-4">
      <div class="col">
      <h3>Name   : {{Auth::user()->name}}</h3><br>
      <h3>E-Mail :{{Auth::user()->email}}</h3><br>
      <h3>Gender :{{Auth::user()->gender}}</h3><br>
      <h3>Bio    : {{Auth::user()->bio}}</h3><br>
      <br>


      </div>
      <div class="col">
              <img src="{{route('pic',['pic'=>Auth::user()->pic])}}" width="25%" class="rounded-circle img-thumbnail" />
      
      </div>
      <button class="btn btn-outline-light mt-5" type="button" style="background-color: #ff4000; border-radius: 20px; width: 100px; height: 40px; font-family: 'Times New Roman', Times, serif;">
              <b><a href="{{url('user/edit')}}" style="color: white;">Edit Profile</a></b>          
      </button>

           
      
    </div>
    
  </div>

@endsection