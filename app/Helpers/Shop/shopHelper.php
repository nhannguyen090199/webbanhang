<?php


namespace App\Helpers\Shop;


class shopHelper
{

    public static function product($item=[]){

      $html='';
      $html.=  '<div class="product-image-wrapper">';
      $html.=   '<div class="single-products">';
      $html.= '<div class="productinfo text-center">';
      $html.=                   '<a href="'. url(''.route('shop.product', $item->id)).'"><img src="'.  url(''.$item["image"])  .'" alt="" /></a>';
      $html.=                 '<p class="price" >'.number_format($item['price']).' VND</p>';

      if($item['is_sale']) {
          $html .= '<div class="promotion">';
          $html .= '<p class="listed-price" >'.number_format($item['price_old']).' VND</p>';
          $html .= '</div>';
      }

      $html.=                     '<h4><a href="'. url(''.route('shop.product', $item->id)).'">'.$item['title'].'</a></h4>';
       $html.= '<form class="form_add_cart">
									    
                                        <input type="hidden" value="'.$item->price.'" name="price" />
                                        <input type="hidden"  value="'.$item->id.'" name="product_id"/>
                                        <input type="hidden" max="50" min="1" value="1" name="quality" />
                                        <button type="button" class="btn btn-default add-to-cart add_cart"
                                                url_checklogin="'.url('/') .'" >
                                            <i class="fa fa-shopping-cart"></i>
        Thêm vào giỏ hàng
        </button>
                                    </form>';
//      $html.=                  '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>';
      $html.=             '</div>';

      if($item['is_sale']) {
          $html .= '<img src="' . url('assets/shop/images/home/sale.png') . '" class="new" alt="" />';
      }
      $html.=         '</div>';
      $html.=         '<div class="choose">';
      $html.=             '<ul class="nav nav-pills nav-justified">';
      $html.=                 '<li><a href="#"><i class="fa fa-plus-square"></i>Thêm yêu thích</a></li>';
      $html.=                '<li><a href="#"><i class="fa fa-plus-square"></i>Thêm so sánh</a></li>';
      $html.=             '</ul>';
      $html.=        '</div>';
      $html.=    '</div>';

      echo $html;
    }
}
;
