"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable');

        // begin first table
        table.DataTable({
            responsive: true,   
            columnDefs: [
                {
                    'targets': 3,
                    type: 'date-euro'
                },
                {
                    'targets': 5,
                    type: 'date-euro'
                }
            ],
            order: [0, 'desc'],
            columns: [
                {
                    field: 'Bil',               
                    width: 10,              
                },
                {
                    field: 'Kategori Lesen',
                    width: 100,
                },
                {
                    field: 'No. Lesen',
                    width: 100,
                },
                {
                    field: 'Tarikh Tamat Lesen',
                    width: 100,
                },
                {
                    field: 'Lampiran',
                    width: 100,
                },
                {
                    field: 'Tarikh Kemaskini Maklumat',
                    width: 100,
                },              
                {
                    field: 'Tindakan',
                    width: 100,
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
