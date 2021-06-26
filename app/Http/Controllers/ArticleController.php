<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use App\Models\Nav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(4);
        return view("backoffice.article.all", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("article-create", article::class);
        return view('backoffice.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", article::class);
        $request->validate([
            'h2'=>'required',
            'p'=>'required',
        ]);

        $article = new article();

        $article->h2 = $request->h2;
        $article->p = $request->p;
        $article->user_id = Auth::user()->id;
        $article->confirm = "0";

        if ($request->file("img") !== null) {
            $article->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $article->created_at = now();
        
        $article->save();

        return redirect()->route('article.index', compact('article'))->with("message", "L'article a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $nav=Nav::all();
        $images = Image::all(); 
        return view('partial.read', compact('article', 'nav', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $this->authorize("article-edit", $article);
        return view("backoffice.article.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->authorize("update", $article);
        $request->validate([
            "h2"=>'required',
            "p"=>'required',
        ]);

        $article->h2 = $request->h2;
        $article->p = $request->p;
        if($request->file('img')!= null){
            Storage::disk('public')->delete("img/" . $article->img);

            $filename = $request->file('img')->getClientOriginalName();
            $article->img = $filename;

            $request->file('img')->storePubliclyAs('img/', $filename , 'public');
        }
        
        $article->updated_at = now();
        $article->save();

        return redirect()->route("article.index")->with("successMessage", "Votre article à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);
        Storage::disk("public")->delete("img/" .$article->img);
        $article->delete();

        return redirect()->back();
    }

    public function confirm()
    {
        $articles=Article::all();
        $this->authorize('article-confirm', $articles);
        return view("backoffice.article.confirm", compact("articles"));
    }
    public function confirmed($id)
    {
        $article = Article::find($id);

        $article->confirm = "1";

        $article->updated_at = now();
        $article->save();

        return redirect()->back();
    }
}
