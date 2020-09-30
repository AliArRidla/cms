<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function getAll()
    {
        $article = Cache::rememberForever('article', function () {
            return Article::all();
        });
        return view('article', compact('article'));
    }

    public function getById(Article $article)
    //tapi ini juga bisa parameter nya $id dengan select table articles where id = $id
    {
        $article = Article::findOrFail($article->id);
        return view('articleDetail', compact('article'));
    }
}
