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
                    'targets': 3,
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
                    field: 'Nama Kemahiran',
                    width: 150,
                },
                {
                    field: 'Tahap Kemahiran / Pengetahuan',
                    width: 150,
                },
                {
                    field: 'Tahun Pengalaman',
                    width: 150,
                },
                {
                    field: 'Tarikh Kemaskini Maklumat',
                    width: 100,
                },
                {
                    field: 'Tindakan',
                    width: 20,
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




