<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public $route = 'shop.pages.search';
    public $baseModel;
    public function __construct()
    {
        $this->baseModel = new Product();
    }

    public function search(Request $request){
        $items = $this->baseModel::where('title', 'like', '%'.$request->keyword.'%')->paginate(6);

        return view($this->route, compact('items'));
    }
}
