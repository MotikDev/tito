<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('webAdmin');
    }


     public function index()
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        $roles = Admin::orderBy('created_at', 'desc')->simplePaginate(5);


        return view('admin.roles')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }



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
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }



        $this->validate($request, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'password' => 'required|string|min:6',
            'house' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'role' => 'required|string',
            'picture' => 'image|nullable|max:100',
            ]);


            if($request->hasFile('picture')){
                //get filename with the extension
                $fileNameAndExt = $request->file('picture')->getClientOriginalName();
    
                //get only filename
                $fileName = pathinfo($fileNameAndExt, PATHINFO_FILENAME);
    
                //get only extension
                $fileExt = $request->file('picture')->getClientOriginalExtension();
    
                //filename to store/save
                $picture = $fileName.'_'.time().'.'.$fileExt;
    
                //upload image
                $path = $request->file('picture')->storeAs('adminImages', $picture);
            }
            else
            {
                $picture = 'noImage.jpg';
            }


            
            $newRole = new Admin();

            $newRole->firstName = $request->input('firstName');
            $newRole->lastName = $request->input('lastName');
            $newRole->email = $request->input('email');
            $newRole->phone = $request->input('phone');
            $newRole->password = Hash::make($request->input('password'));
            $newRole->address1 = $request->input('house');
            $newRole->address2 = $request->input('street');
            $newRole->city = $request->input('city');
            $newRole->state = $request->input('state');
            $newRole->role = $request->input('role');
            $newRole->picture = $picture;

            $newRole->save();

            return back()->with('success','You have successfully added a new '.$request->role);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $user = auth()->user()->role;
        if (!($user == 'admin')){
            return view ('admin.dashboard');
        }

        
    }
}
