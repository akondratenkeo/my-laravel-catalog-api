@extends('admin.layouts.home')

@section('title', 'Login')

@section('content')
    <h1>BE+</h1>
    <h3>Welcome to BE+</h3>
    <p class="sub-content">Login in. To see it in action.</p>
    <div class="col-xs-12">
        {!! Form::open(['url' => '/admin/login', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'login-form']) !!}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']) !!}
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) !!}
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>{!! Form::checkbox('remember', 1, null) !!} Remember Me</label>
                </div>
            </div>
            <div class="form-group last-group-fix">
                {!! Form::button('Login', ['type' => 'submit', 'class' => 'btn btn-primary form-control']) !!}
                <a class="btn btn-link forgot-link" href="{{ url('/admin/password/reset') }}">Forgot Your Password?</a>
            </div>
            <div class="form-group">
                <p class="after-form-content">Do not have an account?</p>
                <a class="btn btn-sm btn-default register-link" href="{{ url('/admin/register') }}">Create an account</a>
                <p class="copy-write">© 2016, Wellbeua</p>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
