<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Carbon\Carbon;
//use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth', ['only' => 'create']);
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    public function index()
    {
        $articles = Article::latest('published_at')
            ->published()//Ищи в моделе этот класс
            ->get();
//        $articles = Article::order_by('published_at', 'desc')->get();
        return view('articles.articles', compact('articles'));

    }

    public function show(Article $article)
    {

//      $article = Article::findOrFail($id);
       return view('articles.article', compact('article'));

    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('articles.create', compact('tags'));

    }


    /**
     * @param Requests\CreateArticleRequest $
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {

        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tag_list'));

        flash()->overlay('Статья удачно добавлена!!', 'Удачной работы!');


        return redirect('articles');

    }

    public function edit(Article $article)
    {

        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());
        $article->tags()->sync($request->input('tag_list'));
        return redirect('articles');
    }
    
    

}
