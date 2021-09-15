<?php

namespace App\Http\Controllers;

use App\Review;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Reviews;



class ReviewsController extends Controller
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
        $review = new Review();
        $review->rating = $request->get('userRating');
        $review->body = $request->input('addReview');
        $review->productID = $productId;
        $review->userName = $username;

        $review->save();

        $users = Admin::where('role', 'admin')->orWhere('role', 'editor')->orWhere('role', 'author')->orWhere('role', 'contributor')->get();
        Notification::send($users, new Reviews($review));
        return back()->with("success", "Comment successfully added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
