(function ($) {
 var cart = function () {
     var token= { name:'_token', value: $('meta[name="csrf-token"]').attr('content')};
     var url_base = $('meta[name="url_base"]').attr('content');
     this.run = function () {
         add_cart();
         change_quality();
         delete_cart();
         checkout_order();
     }

     var add_cart = function () {
         $('.add_cart').unbind('click').bind('click', function () {
             event.preventDefault();
             var url = $(this).attr('url_checklogin');
             var arr = $(this).parent().serializeArray();
             $.ajax({
                 url: url+'/checklogin',
                 method: "GET",
             }).done(function (data) {
                 if(data['code']){
                     _cb();
                 }
                 else{
                     Swal.fire({
                         title: 'Bạn chưa đăng nhập',
                         text: "Bạn cần đăng nhập để thêm vào giỏ hàng",
                         icon: 'question',
                         showCancelButton: true,
                         confirmButtonColor: '#3085d6',
                         cancelButtonColor: '#d33',
                         confirmButtonText: 'Oke lun'
                     }).then((result) => {
                         if (result.isConfirmed) {
                         window.location.href = url+'/login';
                     }
                     })
                 }
             });

             _cb = function () {
                 arr.push(token);
                 $.ajax({
                     url: url+'/add-cart',
                     method: "POST",
                     data: arr
                 }).done(function (data) {
                     if(data.code){
                         $('.header-middle').html(data.data);
                         Swal.fire({
                             position: 'top-end',
                             icon: 'success',
                             title: data.message,
                             showConfirmButton: false,
                             timer: 2000
                         })
                     }
                 });
             }
         });
     }
     var change_quality = function () {
         $('.cart_info').on('change','.cart_quantity_input',function () {
            var cart_id = $(this).attr('cart_id');
            var quality = $(this).val();
            var action = $(this).attr('action');
            var url = $(this).attr('url');
            $.ajax({
                url: url+'/cart',
                method: 'GET',
                data:{cart_id: cart_id, quality: quality, action: action}
            }).done(function (data) {
                    if(data.code){
                        $('.cart_info').html(data.data);
                    }
            })

         })
     }
     var delete_cart = function () {
         $(document).ready(function () {
             $('body').on('click','.cart_quantity_delete', function (e) {
                 e.preventDefault();
                 Swal.fire({
                     title: 'Bạn có chắc chắn muốn xóa?',
                     text: "",
                     icon: 'question',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Xóa'
                 }).then((result) => {
                     if (result.isConfirmed) {
                         var id = $(this).data('id');
                         var token = $(this).closest('form').serializeArray();
                         var url = $(this).attr('href');
                         token.push({name:'cart_id', value: id});

                         $.ajax({
                             type: 'delete',
                             url: url,
                             data : token

                         }).done(function(data){
                             if(data.code){
                                 $('.header-middle').html(data.data);
                                 $.ajax({
                                     type: 'get',
                                     url: url_base+'/cart'
                                 }).done(function (data) {
                                     if(data.code){
                                         $('.cart_info').html(data.data);
                                     }
                                 })
                             }
                         })
                     }
                  })
             })
         })
         
     }
     var checkout_order = function () {
         $('body').on('submit', '#form_infor_order', function () {
             event.preventDefault();
             var qty_cart = $('#qty_cart').val();
             if(qty_cart>0){
                 var form_arr = $(this).serializeArray();
                 $('#confirm-address').html($('input[name=address]').val());
                 $('#confirm-name').html($('input[name=name]').val());
                 $('#confirm-mobie').html($('input[name=phone]').val());
                 $('#confirm-note').html($('textarea[name=note]').val());
                $('#confirm_cart').modal('show');
             }
             else {
                 Swal.fire({
                     title: 'Giỏ hàng trống',
                     text: "Trong giỏ hàng phải có ít nhất 1 sản phẩm",
                     icon: 'warning',
                     showCancelButton: false,
                     cancelButtonColor: '#3085d6',
                     cancelButtonText: 'OK'
                 });
             }
         });

         $('body').unbind('click').on('click', '.btn-confirm-order',function (event) {
             event.preventDefault();
             var form_arr = $('#form_infor_order').serializeArray();
             form_arr.push(token);
             $.ajax({
                 url: url_base + '/submit-order',
                 type: 'post',
                 data: form_arr
             }).done(function (data) {
                 if(data.code){
                     $('#confirm_cart').modal('hide');
                     Swal.fire({
                         title: data.message,
                         text: "Xem lại đơn hàng bằng cách vào mục Đơn Hàng ",
                         icon: 'success',
                         showCancelButton: false,
                         cancelButtonColor: '#3085d6',
                         confirmButtonText: 'Xem danh sách đơn'
                     }).then((result) => {
                         if(result.isConfirmed){
                         ///
                         }
                     })
                 }
             });

         });



     }
 }
    $(document).ready(function () {

        var c = new cart();
        c.run();
    })


})(jQuery)
