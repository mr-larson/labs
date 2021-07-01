<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(4);
        return view("backoffice.comment.all", compact("comments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("comment-create", Comment::class);
        return view('backoffice.comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'p'=>'required',
        ]);

        $comment = new comment();

        $comment->p = $request->p;
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $request->article_id;
        
        $comment->created_at = now();
        
        $comment->save();

        return redirect()->back()->with("message", "Le commentaire a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $this->authorize("comment-edit", $comment);
        return view("backoffice.comment.edit", compact("comment"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'p'=>'required',
        ]);

        $comment->p = $request->p;
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $request->article_id;
        
        $comment->updated_at = now();
        
        $comment->save();

        return redirect()->back()->with("message", "Le commentaire a bien été crée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();
        return redirect()->back();
    }
    public function confirm()
    {
        $comments=Comment::all();
        $this->authorize('comment-confirm', $comments);
        return view("backoffice.comment.confirm", compact("comments"));
    }
    public function confirmed($id)
    {
        $comment = Comment::find($id);

        $comment->confirm = "1";

        $comment->updated_at = now();
        $comment->save();

        return redirect()->back();
    }
}
