<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="shop_order";
    protected $fillable =[
        'grand_total',
        'user_id',
        'user_name',
        'user_email',
        'user_mobile',
        'user_address',
        'user_note',
        'status',
        'is_delete'
    ];
    public static $status =[
        'Đã hủy', 'Chờ duyệt', 'Đã duyệt', 'Đang giao','Đã nhận'
    ];

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
    public function user(){
        return $this->belongsTo( User::class, 'user_id');
    }
}
