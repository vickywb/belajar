<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->get('search');

        if($search) {

        $articles = Article::where('title', 'LIKE', '%' .$search. '%')->paginate(10);
          
        }else {

        $articles = Article::orderBy('id')->paginate(10);

        }

        $users = User::all();
        return view('admin.post.index', [
            'users' => $users,
            'articles' => $articles
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.post.create', [
            'users' => $users
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request, Article $article)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->slug = Str::slug($request->title, '-');
        $article->exceprt = $request->exceprt;
        $article->description = $request->description;

        if($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('local')->putFileAs('public/article', $request->file('image'), $imageName);
            $article->image = $imageName;
        }
        $article->save();
        
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $users = User::all();
        $article = Article::findOrFail($id);
        return view('admin.post.edit', [
            'article' => $article,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, $id)
    {   
        $post =  Article::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->slug, '-');
        $post->exceprt = $request->exceprt;
        $post->description = $request->description;
        if($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('local')->putFileAs('public/article', $request->file('image'), $imageName);
            $post->image = $imageName;
        }
        $post->save();

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();


        return redirect()->route('admin.post.index');


    }
}
