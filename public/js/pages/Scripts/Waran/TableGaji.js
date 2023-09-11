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
                    width: 10,
                },
                {
                    field: 'Nama Pemohon',
                    width: 50,
                },
                {
                    field: 'Nama Jawatan',
                    width: 100,
                },
                {
                    field: 'Tarikh Ditawarkan',
                    width: 50,
                },
                {
                    field: 'Gaji Permulaan',
                    width: 50,
                },
                {
                    field: 'Status Staf',
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




