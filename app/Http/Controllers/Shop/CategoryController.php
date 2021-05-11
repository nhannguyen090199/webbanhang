<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class CategoryController extends Controller
{
    public $route= 'shop.pages.category';
    public $baseModel;

    public function __construct(){
        $this->baseModel =  new Product();
    }

    public function index($id, Request $request){
        $category = Category::find($id);
        $items= $this->baseModel::where('category_id',$id)->paginate(6);
        return view('shop.pages.category', compact('items', 'category'));
    }
}
