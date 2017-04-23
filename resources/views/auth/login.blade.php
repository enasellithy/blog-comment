@extends('layouts.app')
@section('title')
{{trans('arabic.Login')}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{trans('arabic.Login')}}
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">
                                {{trans('arabic.E-Mail Address')}}
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">
                                {{trans('arabic.Password')}}
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                        {{trans('arabic.Remember Me')}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('arabic.Login')}}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{trans('arabic.Forgot Your Password')}}
                                </a>
                            </div>
                        </div>

                    </form>
                    <div class="text-center">
                    <a href="auth/facebook" class="fa fa-facebook fa-2x fa-auth-f"></a>
                    <a href="auth/github" class="fa fa-github fa-2x fa-auth-g"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style type="text/css">
.fa {
    width: 40px;
    padding: 10px;
}
.fa-auth-f {
    color: #4267b2;
}
.fa-auth-g {

}
</style>
@endsection