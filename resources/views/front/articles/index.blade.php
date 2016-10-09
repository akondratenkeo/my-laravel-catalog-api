@extends('front.app')

@section('content')
    <h1>Articles</h1>
    <hr />


    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
                <!--a href="{{ action('ArticlesController@show', $article->id) }}">{{ $article->title }}</a-->
            </h2>
            <div class="body">
                <p>{{ $article->body }}</p>
                <span style="font-size: 9px;"><strong>Created:</strong> {{ $article->created_at }}</span>
            </div>
        </article>
    @endforeach
@stop