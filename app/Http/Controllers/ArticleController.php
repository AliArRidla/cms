<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $article = Cache::rememberForever('article', function () {
            return Article::all();
        });
        // $article = DB::table('articles')->get();
        // $article = Cache::remember("Semua Article", 10 * 60, function () {
        //     return Article::all();
        // });
        return view('article', compact('article'));
        // return view('article');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    //tapi ini juga bisa parameter nya $id dengan select table articles where id = $id
    {
        $article = Article::findOrFail($article->id);
        // dd($article);
        // return view('article', ['article => $article']);
        return view('articleDetail', compact('article'));
        // return $article;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
