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
                    'targets': 5,
                    type: 'date-euro'
                }
            ],

            order: [0, 'desc'],
            columns: [
                {
                    field: 'Bil.',
                    width: 5,
                },
                {
                    field: 'Nama Jawatan',
                    width: 200,
                },
                {
                    field: 'Maklumat Organisasi',
                    width: 250,
                },
                {
                    field: 'Gaji Terakhir',
                    width: 40,
                },
                {
                    field: 'Tempoh Khidmat (Tahun)',
                    width: 250,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 150,
                },
                {
                    field: 'Lampiran',
                    width: 20,
                },
                {
                    field: 'Tindakan',
                    width: 30,
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




