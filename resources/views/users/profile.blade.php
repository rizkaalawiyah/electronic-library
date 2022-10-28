@extends('layout/template')

@section('title') Profile | E - Library @endsection


@section('body')
	      <!-- Header -->
    <div class="jumbotron jumbotron-fluid mt-5">
      <div class="container text-center mt-5">
        <img src="{{route('pic',['pic'=>Auth::user()->pic])}}" width="10%" class="rounded-circle img-thumbnail">
      <h2 class="display-4 ">{{Auth::user()->name}}</h2>
      <p class="lead">{{Auth::user()->bio}}</p>
      </div>
    </div>

    <div class="container">
      <div class="justify-content-end">
      <button class="btn btn-outline-light mt-5 mb-5" type="submit" style="background-color: #ff4000; border-radius: 20px; width: 60px; height: 40px; font-family: 'Times New Roman', Times, serif;">
       <b><a href="{{route('upload_book')}}" style="color: white;"><span class="glyphicon glyphicon-plus"></span></a></b> 
      
      </button>
    </div>
  <div class="row">
            <div class="col-md-9">
                @foreach($buku as $books)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{route('img',['cover_img'=>$books->cover_img])}}" class="img-rounded" width="100px" alt="...">
                            <div class="caption">
                            <h3>{{$books->title}}</h3>
                            <p>Author : {{$books->author}}</p>

                            <p><a href="/book/{{$books->id}}/detail" class="btn btn-block" style="background-color: #ff4000; color: white;" role="button">Detail</a>
                            <a href="/book/{{$books->id}}/delete" class="btn btn-block" style="background-color: #ff4000; color: white;" role="button">Delete</a>  </p>
                            </div>
                        </div>
                    </div>

                  @endforeach 
            </div>
        </div>

</div>
  

@endsection