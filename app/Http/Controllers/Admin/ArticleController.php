<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Http\Traits\Uploads;
use App\Http\Traits\Delete;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    use Uploads, Delete;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'required|image|max:3048',
            'text' => 'required',
            'link' => 'nullable|link'
        ]);

        $image = '';
        if($request->has('image')){
            $image = $this->uploadImage($request->image, Article::class, $request->crop);
        }

        $data = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'image' => $image,
            'text' => $request->text,
            'link' => $request->link,
            'user_id' => auth()->user()->id
        ];

        $article = Article::create($data);
        $article->tags->attach($request->tags);

        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return redirect()->route('article.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate(request(), [
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'required|image|max:3048',
            'text' => 'required',
            'link' => 'nullable|link'
        ]);

        if($request->has('image')){
            $image = $this->uploadImage($request->image, Article::class, $request->crop);
        }else {
            $image = $article->image;
        }

        $data = [];
        $data[] = $request->all();
        $data['image'] = $image;
        dd($data);
        $article->update($data);
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $img = $this->deleteFile($article->image);
        if($img){
            $article->delete();
        }

        return redirect()->route('article.index');
    }
}
