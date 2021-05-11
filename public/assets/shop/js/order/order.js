(function ($) {
    var order = function () {
        var token= { name:'_token', value: $('meta[name="csrf-token"]').attr('content')};
        var url_base = $('meta[name="url_base"]').attr('content');
        this.run = function () {
            deleteOrder();
        }

        var deleteOrder = function () {
            $('body').unbind('click').on('click','.delete_order', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn xóa?',
                    text: "",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xóa'
                }).then((result)=>{
                    if(result.isConfirmed){
                        var url=$(this).attr('href');
                        var order_id = $(this).data('id');

                        $.ajax({
                            url: url,
                            type: 'post',
                            data: { order_id : order_id, _token : token.value}
                        }).done(function (data) {
                            if(data.code){
                                Swal.fire({
                                    title: data.message,
                                    text: " ",
                                    icon: 'success',
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    timer: 2000
                                });

                                $.ajax({
                                    url : url_base +'/order',
                                    type : 'get'
                                }).done(function (get) {
                                    if(get.code){
                                        $('#table_order').html(get.data);
                                    }
                                });


                            }
                        });

                }
                });


            });




        }


    }

    $(document).ready(function () {
        var o = new order();
        o.run();
    })


})(jQuery)
