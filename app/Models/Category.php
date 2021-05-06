<?php

namespace App\Models;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='shop_category';
    protected $fillable = [
        'title',
        'image',
        'introtext',
        'fulltext',
        'status',
    ];
    public static function selectCategory(){
        return self::pluck('title','id')->all();
    }

    public function product(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
