@extends('layout/template')

@section('title') Edit | E - Library @endsection


@section('body')

  <div class="header mt-5" style="background-color: #FAC0A5; margin-top: -30px;">
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
      <div class="panel panel-danger">
       <div class="panel-body ">
        <div style="width: 350px;">
              <form method="post" action="{{route('user.update', $user)}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}
                  <label>Name  :</label>
                  <input type="text" name="name"  value="{{ $user->name }}" class="form-control mb-2" /> <br>
                  <label>E-Mail :</label>
                  <input type="email" name="email" disabled value="{{ $user->email }}" class="form-control mb-2" /><br> 
                  <label>Gender :</label>                 
                  <input type="text" name="gender" disabled value="{{ $user->gender }}" class="form-control mb-4" /><br>    
                  <label>Bio  :</label>
                  <input type="text" name="bio"  value="{{ $user->bio }}" class="form-control mb-2" /> <br>
                    <label for="pic">Avatar image</label><br>     
                      Current avatar: <br>     
                      @if($user->pic)       
                        <img src="{{route('pic',['pic'=>$user->pic])}}" width="120px" /><br>     
                      @else        
                        No avatar     
                      @endif     <br>     
                      <input id="pic" name="pic" type="file" class="form-control">     
                      <small class="text-muted">Input file here</small>  
                  <button class="btn btn-outline-light mt-5" type="submit" style="background-color: #ff4000; border-radius: 20px; width: 100px; height: 40px; font-family: 'Times New Roman', Times, serif;">
                  <b>Updates</b>          
                  </button>
              </form>
            </div>


          </div>
        </div>

      </div>
           
      
    </div>
    
  </div>

@endsection