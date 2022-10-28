@extends('layout/template')

@section('title')
    Upload Book | E-Library
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


            <div class="col-md-4 col-sm-offset-2">
                <h3 class="text-center mb-4"><b>Upload Book</b></h3>

                  <div class="panel panel-danger">
                    <div class="panel-body">
                        <form method="post" action="{{route('upload_book')}}" enctype="multipart/form-data">
                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                @if($errors->has('title')) <span class="help-block">{{$errors->first('title')}}</span> @endif
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group @if($errors->has('author')) has-error @endif">
                                @if($errors->has('author')) <span class="help-block">{{$errors->first('author')}}</span> @endif
                                <input type="text" name="author" class="form-control" placeholder="Author">
                            </div>
                            <div class="form-group @if($errors->has('year')) has-error @endif">
                                @if($errors->has('year')) <span class="help-block">{{$errors->first('year')}}</span> @endif
                                <input type="text" name="year" class="form-control" placeholder="Year">
                            </div>
                            <div class="form-group @if($errors->has('publisher')) has-error @endif">
                                @if($errors->has('publisher')) <span class="help-block">{{$errors->first('publisher')}}</span> @endif
                                <input type="text" name="publisher" class="form-control" placeholder="Publisher">
                            </div>
                            <div class="form-group @if($errors->has('desc')) has-error @endif">
                                @if($errors->has('desc')) <span class="help-block">{{$errors->first('desc')}}</span> @endif
                                <input type="text" name="desc" class="form-control" placeholder="Description">
                            </div>
                            <div class="form-group @if($errors->has('category')) has-error @endif">
                                @if($errors->has('category')) <span class="help-block">{{$errors->first('category')}}</span> @endif
                                <select name="category" class="form-control">
                                    <option value="">--Select Category--</option>
                                     @foreach($cat as $cats)
                                         <option value="{{$cats->id}}">{{$cats->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group @if($errors->has('cover_img')) has-error @endif">
                                @if($errors->has('cover_img')) <span class="help-block">{{$errors->first('cover_img')}}</span> @endif
                                <input type="file" name="cover_img" class="form-control"placeholder="Cover Image">
                            </div>
                            <div class="form-group @if($errors->has('book_file')) has-error @endif">
                                @if($errors->has('book_file')) <span class="help-block">{{$errors->first('book_file')}}</span> @endif
                                <input type="file" name="book_file" class="form-control" placeholder="Book File">
                            </div>
                            <div class="form-group mt-5">
                                      <button class="btn btn-outline-light mt-2" type="submit" style="background-color: #ff4000; border-radius: 20px; width: 100px; height: 40px; font-family: 'Times New Roman', Times, serif;"> Upload        
                                      </button>
                            </div>
                            {{csrf_field()}}
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection