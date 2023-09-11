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
                    width: 200,
                },
                {
                    field: '4',
                    title: 'Tarikh Ditawarkan',
                    width: 40,
                },
                {
                    field: '5',
                    title: 'Gaji Permulaan',
                    width: 40,
                },
                {
                    field: '6',
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
