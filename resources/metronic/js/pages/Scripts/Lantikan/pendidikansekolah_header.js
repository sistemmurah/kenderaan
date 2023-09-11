"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable');

        // begin first table
        table.DataTable({
            responsive: true,
            columnDefs: [
                {
                    'targets': 6,
                    type: 'date-euro'
                },
            ],
            order: [0, 'desc'],
            columns: [
                {
                    field: 'Bil',
                    width: 10,
                    textAlign: 'center',
                },
                {
                    field: 'Nama Sekolah',
                    width: 100,
                },
                {
                    field: 'Tahap',
                    width: 50,
                },
                {
                    field: 'Tahun Mula',
                    width: 50,
                },
                {
                    field: 'Tahun Akhir',
                    width: 50,
                    textAlign: 'center',
                },
                {
                    field: 'Bidang',
                    width: 50,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Kemaskini Maklumat',
                    width: 50,
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
