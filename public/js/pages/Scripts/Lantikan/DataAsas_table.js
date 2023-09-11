"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable2');

        // begin first table
        table.DataTable({
            responsive: true,
            columns: [
                {
                    field: 'Bil',
                    type: 'number',
                    width: 10,
                },
                {
                    field: 'Kategori Lesen',
                    width: 200,
                },
                {
                    field: 'No. Lesen',
                    width: 50,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Tamat Lesen',
                    width: 100,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 100,
                },
                {
                    field: 'Tindakan',
                    width: 50,
                }
            ],


        });
    };

    return {

        //main function to initiate the module
        init: function () {
            initTable1();
        },

    };

}();

jQuery(document).ready(function () {
    KTDatatablesBasicHeaders.init();
});
