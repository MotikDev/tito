<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Comments;



class CommentsController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $productId)
    {
        //
        $username = auth()->user()->firstName." ".auth()->user()->lastName;
        $comment = new Comment();
        $comment->body = $request->input('addMessage');
        $comment->productID = $productId;
        $comment->userName = $username;

        $comment->save();

        $users = Admin::where('role', 'admin')->orWhere('role', 'editor')->orWhere('role', 'author')->orWhere('role', 'contributor')->get();
        Notification::send($users, new Comments($comment));
        return back()->with("success", "Comment successfully added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
