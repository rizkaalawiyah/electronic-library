@extends('layout.masters')

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
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.auth.loginAdmin') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus placeholder="E-Mail">

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
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
