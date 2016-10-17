@extends('admin.layouts.home')

@section('content')
    <h1>BE+</h1>
    <h3>Register to BE+</h3>
    <p>Create account to see it in action.</p>
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
                {!! Form::text('password', null, ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']) !!}
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                {!! Form::text('password_confirmation', null, ['id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                @if ($errors->has('password_confirmation'))
                    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                {!! Form::button('Register', ['type' => 'submit', 'class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
