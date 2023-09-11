"use strict";

var _path = $('#IdPathServer').val();
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable');
        // begin first table
        table.DataTable({
            responsive: true,
            columnDefs: [
                {
                    'targets': 2,
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
                    field: 'Nama',
                    width: 20,
                },
                {
                    field: 'No Kad Pengenalan/ Sijil Beranak<',
                    width: 20,
                },
                {
                    field: 'Tarikh Lahir',
                    width: 20,
                },
                {
                    field: 'Hubungan',
                    width: 50,
                },
                {
                    field: 'Alamat Surat Menyurat',
                    width: 100,
                },
            
                {
                    field: 'Tindakan',
                    target: 0,
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




