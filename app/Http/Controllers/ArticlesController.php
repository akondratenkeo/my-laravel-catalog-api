<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('front.articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        //dd($article->published_at->addDays(8)->format('Y-m-d')); // ->diffForHumans()

        return view('front.articles.show', compact('article'));
    }

    public function create()
    {
        return view('front.articles.create');
    }


    public function store(ArticleRequest $request) // Request
    {
        /*$this->validate($request, [
            'title' => 'required|min:5',
            'body' => 'required',
            'published_at' => 'required|date'
        ]);*/

        /*$input = $request->all();
        $input['user_id'] = \Auth::user()->id;

        //Article::create($input);
        $article = new Article($input);
        $article->save();*/

        $input = $request->all();
        $article = new Article($input);

        \Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('front.articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }
}
