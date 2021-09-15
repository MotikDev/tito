<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class UserPagesUpdateController extends Controller
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
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request, Page $page)
    {
        //
        $pages = Page::find(19);
        $pages->content = $request->input('catDescription');
        $pages->save();

        return back()->with('success', 'You have successfully updated your page.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
        if ($request->hasFile('sliderPic1')){
            $pages = Page::find(1);
            $path = $request->file('sliderPic1')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }

        if ($request->hasFile('sliderPic2')) {
            $pages = Page::find(2);
            $path = $request->file('sliderPic2')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }

        if ($request->hasFile('sliderPic3')) {
            $pages = Page::find(3);
            $path = $request->file('sliderPic3')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }

        if ($request->hasFile('sliderPic4')) {
            $pages = Page::find(4);
            $path = $request->file('sliderPic4')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }

        if ($request->hasFile('sliderPic5')) {
            $pages = Page::find(5);
            $path = $request->file('sliderPic5')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }


        if ($request->has('sliderContent1')) {
            $pages = Page::find(6);
            $pages->content = $request->input('sliderContent1');
            $pages->save();
    
        }
        if ($request->has('sliderContent2')) {
            $pages = Page::find(7);
            $pages->content = $request->input('sliderContent2');
            $pages->save();
        }
        if ($request->has('sliderContentBtn')) {
            $pages = Page::find(8);
            $pages->content = $request->input('sliderContentBtn');
            $pages->save();
    
        }
        if ($request->has('firstSection1')) {
            $pages = Page::find(9);
            $pages->content = $request->input('firstSection1');
            $pages->save();
    
        }
        if ($request->has('firstSection2')) {
            $pages = Page::find(10);
            $pages->content = $request->input('firstSection2');
            $pages->save();
    
        }






        if ($request->hasFile('firstBg')) {
            $pages = Page::find(11);
            $path = $request->file('firstBg')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }

        if ($request->has('secondHeading')) {
            $pages = Page::find(12);
            $pages->content = $request->input('secondHeading');
            $pages->save();
    
        }

        if ($request->has('secondSection1')) {
            $pages = Page::find(13);
            $pages->content = $request->input('secondSection1');
            $pages->save();
    
        }

        if ($request->has('secondSection2')) {
            $pages = Page::find(14);
            $pages->content = $request->input('secondSection2');
            $pages->save();
        }

        if ($request->has('secondSection3')) {
            $pages = Page::find(15);
            $pages->content = $request->input('secondSection3');
            $pages->save();
        }

        if ($request->hasFile('secondBg')) {
            $pages = Page::find(17);
            $path = $request->file('secondBg')->store('pagesImages');
            $pages->content = $path;
            $pages->save();
        }

        if ($request->has('thirdSection')) {
            $pages = Page::find(18);
            $pages->content = $request->input('thirdSection');
            $pages->save();    
        }

        return back()->with('success', 'You have successfully updated your page.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
