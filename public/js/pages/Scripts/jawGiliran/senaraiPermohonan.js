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
                    field: 'Dicadangkan',
                    width: 150,
                },
                {
                    field: 'Keutamaan',
                    width: 20,
                },
                {
                    field: 'Jenis Lantikan',
                    width: 20,
                },
                {
                    field: 'Kategori Jawatan',
                    width: 20,
                },
                {
                    field: 'Nama Bidang',
                    width: 20,
                },
                {
                    field: 'No.Pekerja',
                    width: 20,
                },
                {
                    field: 'Nama',
                    width: 20,
                },
                {
                    field: 'Jawatan Semasa',
                    width: 20,
                },
                {
                    field: 'Kaedah Permohonan',
                    width: 20,
                },
                {
                    field: 'Tkh.Mohon',
                    width: 20,
                },
                {
                    field: 'Tkh.Hantar',
                    width: 20,
                },
                {
                    field: 'Status Permohonan',
                    width: 20,
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




