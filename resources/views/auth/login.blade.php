@extends('layouts/app')

@section('content')
  <div class="login-box" id="app">
    <div class="login-logo">
      <a href="{{ url('/') }}"><b>Quick</b>Count</a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="First name">
          <span class="glyphicon glyphicon-envelope form-control-feedback">
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </span>
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Last name">
          <span class="glyphicon glyphicon-lock form-control-feedback">
            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
        </div>

      </form>

      <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
      <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

    </div>
  </div>
@endsection
