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
                }
            ],

            order: [0, 'desc'],
            columns: [
                {
                    field: 'Bil',               
                    width: 10              
                },
                {
                    field: 'Peranan',
                    width: 100
                },
                {
                    field: 'Jumlah Pengguna',
                    width: 100
                },
                {
                    field: 'Status',
                    width: 100
                },
                {
                    field: 'Tindakan',
                    width: 100                    
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
