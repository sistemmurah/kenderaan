"use strict";
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
            ],
            columns: [
                {
                    field: 'Bil',
                    type: 'number',
                    width: 10,
                    textAlign: 'center',
                },
                {
                    field: 'Institusi',
                    width: 250,
                },
                {                    
                    field: 'Tahun',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Tahap',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Bidang',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Pengkhususan',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Major Pengkhususan',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Minor Pengkhususan',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'CGPA',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Keputusan',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Lampiran Sijil',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Tindakan',
                    width: 100,
                    textAlign: 'center',
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
