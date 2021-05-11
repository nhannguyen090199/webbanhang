<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public $modelCart,$modelUser, $modelProduct;
    public function __construct()
    {
        $this->modelCart= new Cart();
        $this->modelProduct = new Product();
        $this->modelUser = new User();
    }
    public function index(Request $request){
        $user_id = Auth::user()->id;
        $items = $this->modelCart::where('user_id', $user_id)->get();

        if($request->ajax()){
            if($request->action == 'change_qty_cart'){
                $cart = $this->modelCart::find($request->cart_id);
                $price = $cart->product->price;
                $update= $cart->update(['quality'=> $request->quality, 'total_price'=> $price * $request->quality ]);
                if($update){
                    $items = $this->modelCart::where('user_id', $user_id)->get();
                    return $this->ajaxRespond('1', '', view('shop.pages.cart.table', compact('items'))->render());
                }
            }
            return $this->ajaxRespond('1', '', view('shop.pages.cart.table', compact('items'))->render());

        }

        return view('shop.pages.cart.index', compact('items'));
    }
    public function addCart(Request $request){
        $user_id = Auth::user()->id;
        $find_cart = $this->modelCart::where('product_id', $request->product_id)
            ->where('user_id', $user_id);


        if($find_cart->count()){
            $qty = $find_cart->first()->quality + $request->quality;
            $udate_cart = $find_cart->update(['quality'=> $qty, 'total_price'=>$qty*$request->price ]);
            if($udate_cart){
                return $this->ajaxRespond(1,'Thêm vào giỏ hàng thành công!',
                    view('shop.layouts.header_middle')->render());
            }
        }
        else {
            $cart = [
                'product_id'=>$request->product_id,
                'quality' =>$request->quality,
                'user_id' => $user_id,
                'total_price'=> $request->quality * $request->price

            ];
//           array_push($request->all(), ['user_id'=> $user_id ]);
           $create_cart = $this->modelCart::create($cart);
           if($create_cart){
               return $this->ajaxRespond(1,'Thêm vào giỏ hàng thành công!',
                   view('shop.layouts.header_middle')->render() );
           }
        }

    }
    public function delete(Request $request){
        if($request->ajax()){
            $delete= $this->modelCart::find($request->cart_id)->delete();
            if($delete){
                return $this->ajaxRespond(1, 'Xóa thành công!', view('shop.layouts.header_middle')->render());
            }
        }
    }
}
