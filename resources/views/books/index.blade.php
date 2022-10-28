@extends('layout/template')

@section('title') Home | E - Library @endsection

@section('body')
  <div class="header mt-5 mb-5" style="background-color: #FAC0A5;">
   <br>
  <br>
  <br>
  </div> 
    <div class="container mt-5">
        <div class="row">
    @include('include/admin_side_bar')
            <div class="col-md-9">
                 @foreach($buku as $books)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{route('img',['cover_img'=>$books->cover_img])}}" class="rounded mx-auto d-block" width="100px" alt="...">
                            <div class="caption">
                            <h3>{{$books->title}}</h3>

                            <p>Author : {{$books->author}}</p>
                            <p><a href="/book/{{$books->id}}/detail" class="btn btn-block" style="background-color: #ff4000; color: white;" role="button">Detail</a> </p>
                            </div>
                        </div>
                    </div>

                    @endforeach

            </div>
        </div>
    </div>
   

@endsection