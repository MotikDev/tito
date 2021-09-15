<?php

namespace App\Http\Controllers;

use App\User;
use App\Page;
use App\Product;
use App\Comment;
use App\Review;
use App\Order;
use App\Admin;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CartItemAdded;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->only('ulogin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tito()
    {
        //
        if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {

            $home = Page::all();
            //change the extension of $home to .webp
            foreach ($home as $key => $value) {

                $string = $value->content;
                $find = "pagesImages";
                if (strpos($string, $find) > -1) {
                    $fileLink = public_path('storage/'.$value->content);
                    $originalImg = imagecreatefromstring(file_get_contents($fileLink));

                    //NOTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                    //NOTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                    //NOTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                    //I BELIEVE "pagesImages/" WAS ALREADY PART OF THE "$value->content" BECAUSE WE USED IT FOR THE CONDITION CHECKED, SO IT NEEDS TO BE REMOVED
                    imagejpeg($originalImg, public_path("storage/pagesImages/".pathinfo($value->content, PATHINFO_FILENAME).".webp"));
                    imagedestroy($originalImg);

                    //get only filename
                    $fileName = pathinfo($value->content, PATHINFO_FILENAME);
                    $value->content = "pagesImages/".$fileName.".webp";
                }
            }

            $newProduct1 = Product::where('category', 'bags')->orderBy('created_at', 'desc')->get();
            foreach ($newProduct1 as $key => $value) {
                $fileLink = public_path('storage/'.$value->frontPicture);
                $originalImg = imagecreatefromstring(file_get_contents($fileLink));
                                    
                imagejpeg($originalImg, public_path("storage/products/".pathinfo($value->frontPicture, PATHINFO_FILENAME).".webp"));
                imagedestroy($originalImg);

                //get only filename
                $fileName = pathinfo($value->frontPicture, PATHINFO_FILENAME);
                $value->frontPicture = "products/".$fileName.".webp";
            }

            $newProduct2 = Product::where('category', 'shoes')->orderBy('created_at', 'desc')->get();
            foreach ($newProduct2 as $key => $value) {
                $fileLink = public_path('storage/'.$value->frontPicture);
                $originalImg = imagecreatefromstring(file_get_contents($fileLink));
                                    
                imagejpeg($originalImg, public_path("storage/products/".pathinfo($value->frontPicture, PATHINFO_FILENAME).".webp"));
                imagedestroy($originalImg);

                //get only filename
                $fileName = pathinfo($value->frontPicture, PATHINFO_FILENAME);
                $value->frontPicture = "products/".$fileName.".webp";
            }

            $newProduct3 = Product::where('category', 'underwears')->orderBy('created_at', 'desc')->get();
            foreach ($newProduct3 as $key => $value) {
                $fileLink = public_path('storage/'.$value->frontPicture);
                $originalImg = imagecreatefromstring(file_get_contents($fileLink));
                                    
                imagejpeg($originalImg, public_path("storage/products/".pathinfo($value->frontPicture, PATHINFO_FILENAME).".webp"));
                imagedestroy($originalImg);

                //get only filename
                $fileName = pathinfo($value->frontPicture, PATHINFO_FILENAME);
                $value->frontPicture = "products/".$fileName.".webp";
            }

            $newProduct4 = Product::where('category', 'jewelries')->orderBy('created_at', 'desc')->get();
            foreach ($newProduct4 as $key => $value) {
                $fileLink = public_path('storage/'.$value->frontPicture);
                $originalImg = imagecreatefromstring(file_get_contents($fileLink));
                                    
                imagejpeg($originalImg, public_path("storage/products/".pathinfo($value->frontPicture, PATHINFO_FILENAME).".webp"));
                imagedestroy($originalImg);

                //get only filename
                $fileName = pathinfo($value->frontPicture, PATHINFO_FILENAME);
                $value->frontPicture = "products/".$fileName.".webp";
            }

            $newProduct5 = Product::where('category', 'clothings')->orderBy('created_at', 'desc')->get();
            foreach ($newProduct5 as $key => $value) {
                $fileLink = public_path('storage/'.$value->frontPicture);
                $originalImg = imagecreatefromstring(file_get_contents($fileLink));
                                    
                imagejpeg($originalImg, public_path("storage/products/".pathinfo($value->frontPicture, PATHINFO_FILENAME).".webp"));
                imagedestroy($originalImg);

                //get only filename
                $fileName = pathinfo($value->frontPicture, PATHINFO_FILENAME);
                $value->frontPicture = "products/".$fileName.".webp";
            }
            //Combination of all the new products
            $newProducts = [$newProduct1, $newProduct2, $newProduct3, $newProduct4, $newProduct5];
    

            $featuredProducts = Product::inRandomOrder()->take(15)->get();
            foreach ($featuredProducts as $key => $value) {
                //get only filename
                $fileName = pathinfo($value->frontPicture, PATHINFO_FILENAME);
                $value->frontPicture = $fileName.".webp";
            }
            // dd($featuredProducts);

    
            return view('pages.home')->with('home', $home)->with('nProduct', $newProducts)->with('fProduct', $featuredProducts);
            // return view('pages/home')->with(dd("webp working"));
        }

        //WITHOUT WEBP AVAILABLE IN THE USER BROWSER
        $home = Page::all();
        $newProduct1 = Product::where('category', 'bags')->orderBy('created_at', 'desc')->get();
        $newProduct2 = Product::where('category', 'shoes')->orderBy('created_at', 'desc')->get();
        $newProduct3 = Product::where('category', 'underwears')->orderBy('created_at', 'desc')->get();
        $newProduct4 = Product::where('category', 'jewelries')->orderBy('created_at', 'desc')->get();
        $newProduct5 = Product::where('category', 'clothings')->orderBy('created_at', 'desc')->get();
        $newProducts = [$newProduct1, $newProduct2, $newProduct3, $newProduct4, $newProduct5];

        $featuredProducts = Product::inRandomOrder()->take(15)->get();

        return view('pages.home')->with('home', $home)->with('nProduct', $newProducts)->with('fProduct', $featuredProducts);
        // return view('pages.home')->with(dd($newProducts));
    }

    public function pCheckOut(Request $request)
    {
        $home = Page::all();
        $cartItems = $request->session()->get('checkOutItems');
        $cartItemsJava = $request->session()->all();
        // $cartItemsJava = json_encode($cartItemsJava);

        if (auth()->user() && $request->session()->get('checkOutItems.product')) {
            $productO = $request->session()->get('checkOutItems.product');
            $qtyO = $request->session()->get('checkOutItems.qty');
            $subTotalO = $request->session()->get('checkOutItems.subTotal');
            $totalO = $request->session()->get('checkOutItems.total');

            for ($i=0; $i < count($productO); $i++) { 
                # code...
                $order [] = "$productO[$i] $qtyO[$i] ₦$subTotalO[$i], ";
            }
            $order [] = " Total amount is ₦$totalO[0]";
            $order = implode($order);

            // return dd($order);
            # code...
            $orderDetails = new Order();
            $orderDetails->phoneNumber = auth()->user()->phone;
            $orderDetails->email = auth()->user()->email;
            $orderDetails->orderItems = $order;
            $orderDetails->save();

            $orderEmail = auth()->user()->email;
            $orderId = Order::where('email', $orderEmail)->latest()->first();
            // return dd($orderId->id);

            //USE THIS FOR NOTIFYING ADMIN OF ORDER GENERATED
            $users = Admin::where('role', 'admin')->orWhere('role', 'editor')->orWhere('role', 'author')->get();
            Notification::send($users, new CartItemAdded($orderDetails));
            return view('pages.productCheckout')->with('home', $home)->with('cartItems', $cartItems)->with('orderId', $orderId);//->with(dd($cartItemsJava));

        }

        return view('pages.productCheckout')->with('home', $home)->with('cartItems', $cartItems);//->with(dd($cartItemsJava));
    }

    public function preCheckOut (Request $request)
    {
        //
        // $products = implode($request->get('products'));
        $products = $request->get('products');
        $products = $products[0];
        $products = explode(",", $products);
        $qty = $request->get('qty');
        $qty = $qty[0];
        $qty = explode(",", $qty);
        $subT = $request->get('subTotal');
        $subT = $subT[0];
        $subT = explode(",", $subT);
        $tot = $request->get('totalP');

        if ($request->session()->get('checkOutItems'))
        {
            $request->session()->forget('checkOutItems');
        }

        for ($i=0; $i < count($qty); $i++) { 
            if ($i == 0) {
                $request->session()->put('checkOutItems', ['product' => [$products[$i]], 'qty' => [$qty[$i]], 'subTotal' => [$subT[$i]], 'total' => [$tot]]);
            }
            else {
                $request->session()->push('checkOutItems.product', $products[$i]);
                $request->session()->push('checkOutItems.qty', $qty[$i]);
                $request->session()->push('checkOutItems.subTotal', $subT[$i]);
            }
            
        }

        return response()->json("Thank You");
    }

    public function pCart(Request $request)
    {
        $home = Page::all();

        if ($request->session()->has('cartItems.id')) {
            //
            $cartItems = $request->session()->get('cartItems.id');
            $qty = $request->session()->get('cartItems.qty');
    // return view('pages.cart')->with(dd($cartItems));
    
            $items = null;
            for ($i=0;$i<count($cartItems);$i++){
                if (isset($cartItems[$i])) {
                $items[] = Product::where('id', $cartItems[$i])->get();
                }
                else {
                    $cartItems[$i] = null;
                }
            }
            return view('pages.cart')->with('home', $home)->with('items', $items)->with('cartItems', $cartItems);//->with(dd($tems));
        }
        else {
            $items = false;
            return view('pages.cart')->with('home', $home)->with('items', $items);
        }

    }

    public function pDetails($id)
    {
        //
        $thisProduct = Product::find($id);
        $home = Page::all();
        $comments = Comment::where('productID', $thisProduct->id)->get();
        $reviews = Review::where('productID', $thisProduct->id)->get();

        return view('pages.productDetails')->with('home', $home)->with('thisP', $thisProduct)->with('comments', $comments)->with('reviews', $reviews);
    }

    public function pCategory($cat)
    {
        $grp = Product::where('subCategory', $cat)->paginate(15);
        $home = Page::all();

        return view('pages.productCategory')->with('home', $home)->with('subcat', $grp);
    }



    public function sort(Request $request)
    {
        $mini = $request->get('mini');
        $maxi = $request->get('maxi');
        $categ = $request->get('category');
        $brand = $request->get('brand');
        $sex = $request->get('sex');

        $query['mini'] = $mini;
        $query['maxi'] = $maxi;
        $query['categ'] = $categ;
        $query['brand'] = $brand;
        $query['sex'] = $sex;

        foreach ($query as $key => $value) {
            if (isset($value) && $key == 'mini') {
                $mini = $query['mini'];
                $final[] = ['price', '>=', $mini];
            }
            if (isset($value) && $key == 'maxi') {
                $maxi = $query['maxi'];
                $final[] = ['price', '<=', $maxi];                
            }
            if (isset($value) && $key == 'categ') {
                $categ = $query['categ'];
                $final[] = ['category', $categ];
            }
            if (isset($value) && $key == 'brand') {
                $brand = $query['brand'];
                $final[] = ['brand', $brand];
            }
            if (isset($value) && $key == 'sex') {
                $sex = $query['sex'];
                $final[] = ['sex', $sex];
            }
        }

        if (isset($final)) {
            $results = Product::where($final)->get();
        }

        return response()->json($results);
    }



    public function search(Request $request)
    {
        $home = Page::all();
        $searchQ = $request->searchBox;
        $products = Product::where('product', 'LIKE', '%'.$searchQ.'%')->orWhere('category', 'LIKE', '%'.$searchQ.'%')->paginate(15);

        return view('pages.search')->with('searchQ', $searchQ)->with('products', $products)->with('home', $home);
    }

    public function sidebar($item)
    {
        $home = Page::all();
        $searchQ = $item;
        $products = Product::where('product', 'LIKE', '%'.$searchQ.'%')->orWhere('category', 'LIKE', '%'.$searchQ.'%')->paginate(15);

        return view('pages.search')->with('searchQ', $searchQ)->with('products', $products)->with('home', $home);
    }

    public function ulogin()
    {
        $home = Page::all();

        return view('pages.logIn')->with('home', $home);
    }

}
