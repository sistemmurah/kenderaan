"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable');

        // begin first table
        table.DataTable({
            responsive: true,
            columns: [
                {
                    field: '1',
                    title: 'Bil',
                    width: 10,
                },
                {
                    field: '2',
                    title: 'Nama Pemohon',
                    width: 40,
                },
                {
                    field: '3',
                    title: 'Nama Jawatan',
                    width: 250,
                },
                {
                    field: '4',
                    title: 'Tarikh Temuduga',
                    width: 40,
                },
                {
                    field: '5',
                    title: 'Masa Temuduga',
                    width: 40,
                },
                {
                    field: '6',
                    title: 'Tempat Temuduga',
                    width: 40,
                },
                {
                    field: '7',
                    title: 'Surat Tawaran',
                    width: 40,
                },
                {
                    field: '8',
                    title: 'Emel',
                    width: 40,
                },
                {
                    field: '9',
                    title: 'Status',
                    width: 40,
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
