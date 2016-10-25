@extends('admin.layouts.home')

@section('title', 'Reset Password')

@section('content')

    <div class="col-xs-12">
        <div class="panel panel-default email-panel">
            <div class="panel-heading">
                <h3>Reset Password</h3>
                <p>Enter your email and new password with confirmation.</p>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => '/admin/password/reset', 'method' => 'post', 'id' => 'reset-form']) !!}
                    {{ Form::hidden('token', $token) }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::text('email', ($email or old('email')), ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'E-Mail Address']) !!}
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
                        {!! Form::button('Reset Password', ['type' => 'submit', 'class' => 'btn btn-primary form-control']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <p class="copy-write">© 2016, Wellbeua</p>
    </div>

@endsection
