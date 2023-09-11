"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable');
        // begin first table
        table.DataTable({
            responsive: true,
            columns: [
                {
                    field: 'Bil',
                    width: 10,
                },
                {
                    field: 'MyKad',
                    width: 200,
                },
                {
                    field: 'Nama Pemohon',
                    width: 300,
                },
                {
                    field: 'Tarikh Menjawab',
                    width: 100,

                },
                {
                    field: 'Bil Jawab',
                    width: 100,
                },
                {
                    field: 'Jalinan',
                    width: 100,
                },
                {
                    field: 'Wawasan',
                    width: 100,
                },
                {
                    field: 'Keperihatinan',
                    width: 100,
                },
                {
                    field: 'Efisyen',
                    width: 100,
                },
                {
                    field: 'Kestabilan Emosi',
                    width: 100,
                },
                {
                    field: 'Tidak Kongruen',
                    width: 100,
                },
                {
                    field: 'Keputusan',
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
