@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
                <div class="panel-body">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('bio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bio') }}</strong>
                        </span>
                    @endif

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                               <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" autofocus>


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <div class="col-md-6">
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

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}">


                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="bio" type="bio" class="form-control" name="bio" placeholder="Bio" value="{{ old('bio') }}">


                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 explore">
                                <button type="submit" class="btn btn-lg explorebtn">
                                    Register
                                </button>
                            </div>
                        </div>

                         <div class="col-md-5 explore" style="color: white;">
                                Already have an account? 
                                <a href="{{ route('login') }}">Sign In</a> here!
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
