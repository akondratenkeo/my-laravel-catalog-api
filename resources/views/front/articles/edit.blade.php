@extends('front.app')

@section('content')

    <h1>Update Article</h1>
    <hr />

    {!! Form::model($article, ['action' => ['ArticlesController@update', $article->id], 'method' => 'PATCH']) !!}

        @include('front.articles._form', [
            'submitButton' => 'Edit Article'
        ])

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop