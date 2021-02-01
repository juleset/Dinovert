<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with(['category','tags'])->get();
        //dd($articles);
        return view('admin.tabarticles',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create($request->except(['_token','tag_id']));
        $article ->tags()->attach($request->input('tag_id'));
        return redirect()->route('admin.tabarticles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::findOrFail($id);
        //dd($properties);
        return view('articles.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        return view('articles.edit', ['articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if(Article::findOrFail($id)->update($request->all())){
            return redirect()->route('admin.tabarticles');
        }else{
            return abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        // detach clean le contenu des tables en plus
        $article->tags()->detach();
        if($article->delete()){
            return redirect()->route('admin.tabarticles');
        }else{
            return abort(404);
        }
    }
}
