<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class OrderController extends Controller
{
    public $orderModel, $orderDetailModel;
    public function __construct()
    {
        $this->orderDetailModel = new OrderDetail();
        $this->orderModel = new Order();
    }
    public function index(Request $request){
        $items= $this->orderModel::where('user_id', Auth::user()->id)
            ->where('is_delete',null)->where('status','!=',0)->get();
        if($request->ajax()){
            return $this->ajaxRespond(1,'', view('shop.pages.order.table', compact('items'))->render());
        }
        return view('shop.pages.order.index', compact('items'));
    }

    public function submit(Request $request){
        $user=Auth::user();

        $request->validate([
            'address' =>'required',
            'name' =>'required',
            'phone'=>'required'
        ]);
        $fillable_user = Auth::user()->toArray();
        foreach($fillable_user as $key=>$value){
            if($key == 'address' && !$value){
                $user->update(['address'=>$request->address]);
            }
            if($key == 'mobile' && !$value){
                $user->update(['mobile'=>$request->phone]);
            }
        }
        $grand_total= Cart::where('user_id', $user->id)->sum('total_price');
        $order=[
            'user_id'=>$user->id,
            'user_address'=>$request->address,
            'user_name'=>$request->name,
            'user_email'=>$user->email,
            'user_mobile'=>$request->phone,
            'grand_total'=>$grand_total,
            'user_note'=>$request->note
        ];
        $add_order = $this->orderModel::create($order);
        if($add_order->count()){

            foreach(Cart::where('user_id', $user->id)->get() as $k=>$cart){
                $count=$k;
                $order_detail = [
                    'order_id'=> $add_order->id,
                    'product_id'=>$cart->product_id,
                    'product_qty'=>$cart->quality,
                    'product_total'=>$cart->total_price,
                    'product_price'=>$cart->product->price
                ];
                $add_order_detail = $this->orderDetailModel::create($order_detail);
            }
            $count_cart = Cart::where('user_id', $user->id)->count();
            if($count+1 == $count_cart){
                return $this->ajaxRespond(1,'Đã xác nhận đơn hàng thành công!', []);
            }


        }
        else{
            return $this->ajaxRespond(0,'Lỗi khi tải', []);

        }
    }

    public function delete(Request $request){
        $user = Auth::user();
        $order = $this->orderModel::find($request->order_id);
        if($order->status==4){
            $update= $order->update(['is_delete' => 1]);
            if($update){
                return $this->ajaxRespond(1,'Hủy & Xóa thành công!', []);
            }
        }
        else {
            $update= $order->update(['status' => 0]);
            if($update){
                return $this->ajaxRespond(1,'Hủy & Xóa thành công!', []);
            }
        }

    }
}
