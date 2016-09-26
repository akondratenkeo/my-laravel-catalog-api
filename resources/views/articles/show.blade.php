@extends('app');

@section('content')

    <h1>Article</h1>
    <hr />

    <article>
        <h1>{{ $article->title }}</h1>
        <div class="body">
            <p>{{ $article->body }}</p>
            <span style="font-size: 9px;"><strong>Created:</strong> {{ $article->created_at }}</span>
        </div>
    </article>

@stop