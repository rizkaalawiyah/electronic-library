@extends('admin.layouts.app')
@section('title') Dashboard @endsection
@section('content')
	 <div class="col-md-8"> 
 	 	@if(session('status'))     
 	 		<div class="alert alert-success">         
 	 			{{session('status')}}     
 	 		</div> 
 	 	@endif
 	 	
                        <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                            <div class="form-group @if($errors->has('cat_name')) has-error @endif">
                                @if($errors->has('cat_name')) <span class="help-block">{{$errors->first('cat_name')}}</span> @endif
                                <input type="text" name="cat_name" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group @if($errors->has('cat_img')) has-error @endif">
                                @if($errors->has('cat_img')) <span class="help-block">{{$errors->first('cat_img')}}</span> @endif
                                <input type="file" name="cat_img" class="form-control"placeholder="Category Image">
                            </div>
 
                            <div class="form-group mt-5">
                                      <button class="btn btn-outline-light mt-2" type="submit" style="background-color: #ff4000; border-radius: 20px; width: 100px; height: 40px; font-family: 'Times New Roman', Times, serif;"> Upload        
                                      </button>
                            </div>
                            {{csrf_field()}}
                        </form>   
  </div>
@endsection