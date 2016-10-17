@extends('admin.layouts.home')

@section('content')
    <h1>BE+</h1>
    <h3>Welcome to BE+</h3>
    <p>Login in. To see it in action.</p>
    <div class="col-xs-12">
        {!! Form::open(['url' => '/admin/login', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'login-form']) !!}
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
            <div class="form-group">
                <div class="checkbox">
                    <label>{!! Form::checkbox('remember', 1, null) !!} Remember Me</label>
                </div>
            </div>
            <div class="form-group">
                {!! Form::button('Login', ['type' => 'submit', 'class' => 'btn btn-primary form-control']) !!}
                <a class="btn btn-link" href="{{ url('/admin/password/reset') }}">Forgot Your Password?</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
