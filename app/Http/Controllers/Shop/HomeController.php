<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    protected $route = 'shop.';
    protected $baseModel;

    public function __construct()
    {
        $this->baseModel = new Product();
    }

    public function index(Request $request){

        $items= $this->baseModel::where('is_sale','!=', 0)->paginate(6);
        return view('shop.pages.home', compact('items'));
    }
}
