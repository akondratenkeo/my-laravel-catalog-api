@extends('admin.layouts.home')

@section('title', 'Reset Password')

@section('content')

    <div class="col-xs-12">
        <div class="panel panel-default email-panel">
            <div class="panel-heading">
                <h3>Reset Password</h3>
                <p>Enter your email address and your password will be reset and emailed to you.</p>
            </div>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['url' => '/admin/password/email', 'method' => 'post', 'id' => 'email-form']) !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'E-Mail Address']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::button('Send Password Reset Link', ['type' => 'submit', 'class' => 'btn btn-primary form-control']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <p class="copy-write">© 2016, Wellbeua</p>
    </div>

@endsection
