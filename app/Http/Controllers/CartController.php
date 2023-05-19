<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
{
    $total = 0;
$productsInCart = [];
$productsInSession = $request->session()->get("products");
if ($productsInSession) {
$productsInCart = Product::findMany(array_keys($productsInSession));
$total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
}


$guarded["total"] = $total;
$guarded["products"] = $productsInCart;
return view('front.cart.cart')->with("guarded", $guarded);
}
     public function add(Request $request, $id){
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);
        return redirect()->route('front.cart.cart');
        
}
     public function delete(Request $request){
        $request->session()->forget('products');
        return back();
}
        public function checkout(){
        $guarded['orders']=Order::All();
        return view('front.checkout')->with("guarded",$guarded);
        }
        public function checkoutUpdate(Request $request){
            $request->validate([
                "firstName" => "required|max:255",
        "lastName" => "required",
        "email"=>"required",
        "address"=>"required",
        "country"=>"required",
        
     
            ]);
            $order=Order::All();
            $order->setFirstName($request->input('firstName'));
            $order->setLastName($request->input('lastName'));
            $order->setEmail($request->input('email'));
            $order->setStreetAddress($request->input('address'));
            $order->setCountry($request->input('country'));
           
          
            $order->save();
    
            return redirect()->route('front.checkout.update');}


    



            public function purchase(Request $request) {
                $productsInSession = $request->session()->get("products");
                if ($productsInSession) {
              
                $order = new Order();
                $order->setTotal(0);
                $order->save();
                $total = 0;
                $productsInCart = Product::findMany(array_keys($productsInSession));
                foreach ($productsInCart as $product) {
                $quantity = $productsInSession[$product->getId()];
                $item = new OrderDetail();
                $item->setQty($quantity);
             
                $item->setProductId($product->getId());
                $item->setOrderId($order->getId());
                $item->save();
                $total = $total + ($product->getPrice() * $quantity);
                }
                $order->setTotal($total);
                $order->save();
               
                $request->session()->forget('products');
                
                $guarded["order"] = $order;
                return view('front.cart.purchase')->with("guarded", $guarded);
                } else {
                return redirect()->route('front.cart.cart');
                }
                }
                

}
