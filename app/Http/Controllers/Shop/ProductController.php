<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public $route='shop.product';
    public $baseModel;

    public function __construct()
    {
        $this->baseModel = new Product();
    }

    public function index($id, Request $request){

        $items= Product::find($id);
        return view('shop.pages.product', compact('items'));
    }
}
