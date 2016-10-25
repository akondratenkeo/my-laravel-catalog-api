@extends('admin.layouts.home')

@section('title', 'Registration')

@section('content')
    <h1>BE+</h1>
    <h3>Register to BE+</h3>
    <p class="sub-content">Create account to see it in action.</p>
    <div class="col-xs-12">
        {!! Form::open(['url' => '/admin/register', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'register-form']) !!}
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                {!! Form::text('username', old('username'), ['id' => 'username', 'class' => 'form-control', 'placeholder' => 'Username']) !!}
                @if ($errors->has('username'))
                    <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span>
                @endif
            </div>
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
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                @if ($errors->has('password_confirmation'))
                    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                {!! Form::button('Register', ['type' => 'submit', 'class' => 'btn btn-primary form-control']) !!}
            </div>
            <div class="form-group">
                <p class="after-register-form-content">Already have an account?</p>
                <a class="btn btn-sm btn-default register-link" href="{{ url('/admin/login') }}">Login</a>
                <p class="copy-write">© 2016, Wellbeua</p>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
