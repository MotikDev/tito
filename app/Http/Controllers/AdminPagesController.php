<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Product;
use Illuminate\Http\Request;



class AdminPagesController extends Controller
{
    public function __construct(){
        $this->middleware('webAdmin');
    }

    
    public function tito()
    {
        //
        return view('admin.dashboard');
    }

    public function tNotificationO()
    {
        //
        $userId = auth()->user()->id;
        $user = Admin::find($userId);

        foreach ($user->notifications as $notification) {
            if ($notification->type == 'App\Notifications\CartItemAdded') {
                $userEmail = $notification->data[0]['email'];

                $firstName = User::where('email', $userEmail)->value('firstName');
                $lastName = User::where('email', $userEmail)->value('lastName');

                $customerName[] = $firstName." ".$lastName;
            }
            else {
                $customerName[] = null;
            }
        }

        return view('admin.notificationso')->with('user', $user)->with('customerName', $customerName);//->with(dd($user->notifications[0]->data[0]['id']));
    }
    public function tNotificationC()
    {
        //
        $userId = auth()->user()->id;
        $user = Admin::find($userId);

        foreach ($user->notifications as $notification) {
            if ($notification->type == 'App\Notifications\Comments') {
                $productId = $notification->data[0]['productID'];

                $product[] = Product::where('id', $productId)->value('product');
            }
            else {
                $product[] = null;
            }
        }


        return view('admin.notificationsc')->with('user', $user)->with('product', $product);
    }

    public function tNotificationR()
    {
        //
        $userId = auth()->user()->id;
        $user = Admin::find($userId);

        foreach ($user->notifications as $notification) {
            if ($notification->type == 'App\Notifications\Reviews') {
                $productId = $notification->data[0]['productID'];

                $product[] = Product::where('id', $productId)->value('product');
            }
            else {
                $product[] = null;
            }
        }


        return view('admin.notificationsr')->with('user', $user)->with('product', $product);
    }

    public function tNotificationS()
    {
        //
        $userId = auth()->user()->id;
        $user = Admin::find($userId);


        return view('admin.notificationss')->with('user', $user);
    }


    public function roles()
    {
        //
        return view('admin.roles');
    }

    
    public function profile()
    {
        //
        return view('admin.profile');
    }



}
