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
                    targets: 3,
                    width: 30,
                },
                {
                    width: '25px',
                    targets: 5,
                    width: 20,

                },
            ],
            columns: [
                {
                    field: 'Bil',
                    width: 20,
                },
                {
                    field: 'Nama Sekolah',
                    width: 20,
                },
                {
                    field: 'Tahap',
                    width: 20,
                },
                {
                    field: 'Tahun Mula',
                    width: 100,
                },
                {
                    field: 'Tahun Akhir',
                    width: 20,
                },
                {
                    field: 'Bidang',
                    width: 100,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 20,
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




