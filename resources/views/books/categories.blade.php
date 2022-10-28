@extends('layout/template')

@section('title')
    Categories Book | E-Library
@endsection

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
            @foreach($categories as $category)
                <div class="col-sm-6 col-md-3 mb-2">
                    <div class="categories" style="position: relative; text-align: center; color: white; font-size: 2em; font-weight: bold;">
                      <a href="categories/{{$category->id}}/show"><img src="{{route('cat',['cat_img' => $category->cat_img])}}" style="width: 180px; height: 120px; border-radius: 5px;" /><div class="centered" style="  position: absolute; top: 50%; left: 50%;transform: translate(-50%, -50%); color: white;">{{$category->cat_name}}</div></a>
                      
                    </div>
                </div>
                    @endforeach

        </div>
    </div>
  </div>




@endsection