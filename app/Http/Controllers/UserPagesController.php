<?php

namespace App\Http\Controllers;

use App\Admin;
use App\UserPage;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPagesController extends Controller
{

    public function __construct(Request $request) {
        $this->middleware('webAdmin');

    }


    public function tCategory()
    {
        //

        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        return view('admin.productcategorypage');
    }

    public function tDetails()
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        return view('admin.productdetailspage');
    }

    public function tCart()
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        return view('admin.cartpage');
    }

    public function tCheckout()
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        return view('admin.checkoutpage');
    }

    public function tHome()
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        $pages = Page::all();

        return view('admin.homepage')->with('pages', $pages);
    }



}
