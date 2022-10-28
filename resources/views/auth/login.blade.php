@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
                <div class="panel-body">
                    @if ($errors->has('email'))
                        <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                   @endif
                   @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail" autofocus>


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 explore">
                                <button type="submit" class="btn btn-lg explorebtn">
                                    Sign In
                                </button>
                            </div>
                        </div>
                         <div class="col-md-5 explore" style="color: white;">
                                Does not have an account? 
                                <a href="{{ route('register') }}">Sign Up</a> here!
                        </div>
                    </form>

            </div>

    </div>
</div>
@endsection
