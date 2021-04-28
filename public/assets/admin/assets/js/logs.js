(function ($, app) {

    var ContestCls = function () {
        // Class variables
        var vars = {};

        // Class elements
        var ele = {};

        this.run = function () {
            this.init();
            this.bindEvents();
        };

        this.init = function () {
            vars.id = 0;
        };

        this.bindEvents = function () {
            KTBootstrapSelect.init();
            KTBootstrapDaterangepicker.init();
            exportExcel();
        };

        this.resize = function () {

        };

        var KTBootstrapSelect = function () {

            // Private functions
            var demos = function () {
                // minimum setup
                $('.kt-selectpicker').selectpicker();
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();
        // Class definition

        var KTBootstrapDaterangepicker = function () {

            // Private functions
            var demos = function () {

                // minimum setup
                $('#kt_daterangepicker_1, #kt_daterangepicker_1_modal').daterangepicker({
                    buttonClasses: ' btn',
                    applyClass: 'btn-primary',
                    cancelClass: 'btn-secondary',
                    locale: {
                        format: 'YYYY/MM/DD'
                    }
                });
            }

            return {
                // public functions
                init: function() {
                    demos();
                    //validationDemos();
                }
            };
        }();

        var exportExcel = function () {
            $('.btn-export-logs').click(function (e) {
                var queryString = $(this).attr('data-query');
                if (queryString.length) {
                    queryString = '&' + queryString;
                }

                $.app.ajax(this, 'admin/contest/logs?action=export' + queryString, {}, function (res) {
                    if (res.code) {
                        $.app.alert.loading(res.message);
                        var checkFile = setInterval(function () {
                            $.app.ajax(null, 'admin/contest/logs?action=export&check=1&filename=' + res.data, {}, function (res2) {
                                if (res2.code) {
                                    $.app.alert.download(res2.message, $.app.vars.url + res.data);
                                    clearInterval(checkFile);
                                }
                            }, 'GET', '.alert-save');
                        }, 1000);
                    }
                }, 'GET', '.alert-save');



            });
        };
    };


    $(document).ready(function () {
        var contestObj = new ContestCls();
        contestObj.run();

    });
}(jQuery, $.app));
