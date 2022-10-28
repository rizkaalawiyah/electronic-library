@extends('layout/template')

@section('title') Detail Book | E - Library @endsection


@section('body')

  <div class="header mt-5 mb-5" style="background-color: #FAC0A5; margin-top: -30px;">
   <br>
  <br>
  <br>
  </div>

  <div class="container mt-5" style="  font-family: 'Times New Roman', Times, serif;">
    <div class="tittle mt-4">
      <h1><b>{{ $books->title }}</b></h1> 
    </div>
    <div class="line" style="background-color: grey; height: 2px;">
      <br>
    </div>

    <div class="container mt-5">
        <div class="row">
           
<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">

                    
                        <div class="thumbnail">
                            <img src="{{route('img',['cover_img'=>$books->cover_img])}}" class="rounded mx-auto d-block" width="100px" alt="...">
                        </div>
                     

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <span class="glyphicon glyphicon-pencil">
                            </span>   {{ $books-> author }}
                    </h4>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <span class="glyphicon glyphicon-time">
                            </span>  {{$books->year}}
                    </h4>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                      <span class="glyphicon glyphicon-home">
                            </span>  {{$books->publisher}}
                    </h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                      <span class="glyphicon glyphicon-home">
                            </span>  {{$books->created_by}}
                    </h4>
                </div>
            </div>
 


    </div>
</div>


          <div class="col-md-9 col-sm">
              <div class="panel panel-danger">
                    <div class="panel-body" style="color: black;">
                      <h3>Description:</h3><br>
                      <p>{{$books->desc}}</p>


                             <div class="form-group mt-5">
                              
                                      <iframe src="http://docs.google.com/gview?url={{route('books',['book_file'=>$books->book_file])}}&embedded=true" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                                      <button class="btn btn-outline-light mt-2" type="submit" style="background-color: #ff4000; border-radius: 20px; width: 750px; height: 40px; font-family: 'Times New Roman', Times, serif;"> <a href="{{route('books',['book_file'=>$books->book_file])}}" style="color: white;">Read</a>        
                                      </button>
                            </div>
                    </div>
                  </div>
          </div>



            




        </div>

    </div>
  </div>

@endsection