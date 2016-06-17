<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;

class ArticlesController extends Controller
{
    public function articles()
    {
        $articles = Article::latest('published_at')
            ->published()//Ищи в моделе этот класс
            ->get();
//        $articles = Article::order_by('published_at', 'desc')->get();
        return view('articles.articles', compact('articles'));

    }

    public function article($id)
    {

      $article = Article::findOrFail($id);
       return view('articles.article', compact('article'));

    }

    public function create()
    {

        return view('articles.create');

    }


    public function store()
    {
        $input = Request::all();
//        $input['published_at'] = Carbon::now();
        Article::create($input);
        return redirect('articles');

    }

}
