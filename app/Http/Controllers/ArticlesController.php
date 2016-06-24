<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
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

        return view('articles.create');

    }


    /**
     * @param Requests\CreateArticleRequest $
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {
//        $article = new Article($request->all());
        Auth::user()->articles()->create($request->all());
        $request->session()->flash('status', 'Task was successful!');

        return redirect('articles');

    }

    public function edit(Article $article)
    {
//        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
//        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
    
    

}
