<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ProductsController extends Controller
{
    public function __construct() {
        $this->middleware('webAdmin');
    }

    public function index()
    {
        //
        $user = auth()->user()->role;
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }

        $products = Product::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.instock')->with('products', $products);
    }

    public function create()
    {
        //
        $user = auth()->user()->role;
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }


        return view('admin.upload');
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
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }
        
        $this->validate($request, [
            'product' => 'required|string',
            'productBrand' => 'required|string',
            'productPrice' => 'required|numeric',
            'category' => 'required|string',
            'subCategory' => 'required|string',
            'sex' => 'required',
            'productHeight' => 'required|string',
            'productWidth' => 'required|string',
            'productDepth' => 'required|string',
            'productWeight' => 'required|numeric',
            'measurement' => 'required',
            'frontPicture' => 'required|image|max:100',
            'picture2' => 'required|image|max:100',
            'picture3' => 'required|image|max:100',
            'productDiscount' => 'nullable|numeric',
            'productKeywords' => 'required|string',
            'productHistory' => 'required|string',
            'productDescription' => 'required|string',

        ]);
            $weight = $request->productWeight + $request->measurement;

            $product = new Product();

            $product->product = $request->product;
            $product->brand = $request->productBrand;
            $product->price = $request->productPrice;
            $product->category = $request->category;
            $product->subCategory = $request->subCategory;
            $product->sex = $request->input('sex');
            $product->height = $request->productHeight;
            $product->width = $request->productWidth;
            $product->depth = $request->productDepth;
            $product->weight = $weight;
            $product->frontPicture = $request->file('frontPicture')->store('products');
            $product->picture2 = $request->file('picture2')->store('products');
            $product->picture3 = $request->file('picture3')->store('products');
            $product->discount = $request->productDiscount;
            $product->keywords = $request->productKeywords;
            $product->story = $request->productHistory;
            $product->description = $request->productDescription;
            $author = auth()->user()->firstName." ".auth()->user()->lastName;
            $product->author = $author;

            $product->save();

        

        return back()->with('success', 'Product successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $user = auth()->user()->role;
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }

        return true;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $user = auth()->user()->role;
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }

        return true;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $user = auth()->user()->role;
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }

        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $user = auth()->user()->role;
        if (($user == 'contributor')){
            return view ('admin.dashboard');
        }

        return true;
    }
}
