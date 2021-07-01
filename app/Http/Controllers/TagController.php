<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Link;
use App\Models\Nav;
use App\Models\Tag;
use App\Models\Titre;
use App\Models\User;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $users = User::paginate();
        $images = Image::all(); 
        $titres = Titre::all();
        $link = Link::first();
        $nav = Nav::all();
        $footer = Footer::first(); 
        $adresse = Adresse::first();
        $articles = Article::paginate(3);
        $categories = Category::all();
        $tags = Tag::all();
        $comments = Comment::all();
        return view('partial.tag',compact('users','nav','footer', 'link', 'titres', 'adresse', 'images', 'articles', 'comments','tags', 'categories', 'tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
