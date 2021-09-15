<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategory extends Controller
{
    //

    public function cartitems(Request $request){
        $id = $request->get('id');
        $qty = $request->get('qty');

        if ($request->session()->get('cartItems')){
            $elements = $request->session()->get('cartItems.id');

            for($i = 0; $i < count($elements); $i++){
                if($elements[$i] == $id){
                    return response()->json("Item already added to cart.");
                }
            }
        }
        if ($request->session()->get('cartItems')) {
            $request->session()->push('cartItems.id', $id);
            $request->session()->push('cartItems.qty', $qty);

            $remainingItem = $request->session()->get("cartItems.id");
            // $user->notify(new CartItemAdded($cartItem));
            $totalItems = count($remainingItem);
        }
        else {
            $request->session()->put('cartItems', ['id' => [$id], 'qty' => [$qty]]);
            
            // $user->notify(new CartItemAdded($cartItem));
            $totalItems = 1;
        }


        return response()->json($totalItems);
    }


    public function removeItem(Request $request){
        $id = $request->get('id');
        $request->session()->pull("cartItems.id.$id");

        if ($request->session()->get("cartItems.id")) {
            $remainingItem = $request->session()->get("cartItems.id");

            $request->session()->forget('cartItems');
            $i = -1;
            foreach ($remainingItem as $key => $value) {
                $request->session()->push('cartItems.id', $value);
            }            
            $totalItems = count($remainingItem);
        }
        else {
            $totalItems = 0;
        }
        

        return response()->json($totalItems);
    }


    public function clearCart(Request $request){
        // $request->session()->forget('cartItems');
        $request->session()->forget('cartItems');

        return response()->json("Cart cleared");
    }



    public function subCategory(Request $request) {
        // $url = $request->fullUrl();
        // return response()->json([$url]);
        $query = $request->query('category');


        if ($query == "bags") {
            # code...
            $subs[] = 'Handbags';
            $subs[] = 'Purses';
            $subs[] = 'Clutches';
            $subs[] = 'Backpacks';
            $subs[] = 'Knapsacks';
            $subs[] = 'Traveling Bags';
            $subs[] = 'Laptop Bags';
            $subs[] = 'Laptop Porces';
            $subs[] = 'School Bags';
            $subs[] = 'Lunch Box';

            return response()->json($subs);
        }
        elseif ($query == "shoes") {
            $subs[] = 'Corporate Shoes';
            $subs[] = 'Casual Shoes';
            $subs[] = 'Social Shoes';

            return response()->json($subs);
        }
        elseif ($query == "clothings") {
            $subs[] = 'Corporate Clothings';
            $subs[] = 'Casual Clothings';
            $subs[] = 'African prints and fabrics';

            return response()->json($subs);
        }
        elseif ($query == "underwears") {
            $subs[] = 'Bras';
            $subs[] = 'Bikinis';
            $subs[] = 'Panties';
            $subs[] = 'Lingeries';
            $subs[] = 'Swin suits';

            return response()->json($subs);
        }
        elseif ($query == "jewelries") {
            $subs[] = 'Earrings';
            $subs[] = 'Necklace';
            $subs[] = 'Bracelets';
            $subs[] = 'Rings';
            $subs[] = 'Waist chains';
            $subs[] = 'Leg chains';

            return response()->json($subs);
        }

        else {
            $subs[] = 'No category seleceted';
            return response()->json($subs);
        }
    }






    
}
