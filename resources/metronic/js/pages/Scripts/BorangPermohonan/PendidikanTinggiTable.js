"use strict";

var _path = $('#IdPathServer').val();
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable2');
        // begin first table
        table.DataTable({
            responsive: true,
            columnDefs: [
                {
                    'targets': 7,
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
                    field: 'Institusi',
                    width: 150,
                },
                {
                    field: 'Tahun',
                    width: 20,
                },
                {
                    field: 'Tahap',
                    width: 50,
                },
                {
                    field: 'Bidang',
                    width: 150,
                },
                {
                    field: 'PNGK / Keputusan',
                    width: 20,
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




