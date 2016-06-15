<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function articles()
    {
        $articles = Article::all();
        return view('articles.articles', compact('articles'));

    }

    public function article($id)
    {

      $article = Article::findOrFail($id);
       return view('articles.article', compact('article'));

    }
}
