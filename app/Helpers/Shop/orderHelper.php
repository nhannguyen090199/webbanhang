<?php


namespace App\Helpers\Shop;


class orderHelper
{
    public static $status =[
        'Đã hủy', 'Chờ duyệt', 'Đã duyệt', 'Đang giao','Đã nhận'
    ];

    public static function htmlStatus($status){

        if($status==0){
            $btn='btn-dark';
        }
        else if($status==1){
            $btn='btn-warning';
        }
        else if($status==2){
            $btn='btn-success';
        }
        else if($status==3){
            $btn='btn-info';
        }
        else if($status==4){
            $btn='btn-danger';
        }

        $html='<div class="btn '. $btn.'">'.self::$status[$status].'</div>';

        echo $html;
    }
}
