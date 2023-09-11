"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable');

        // begin first table
        table.DataTable({
            responsive: true,    
            columnDefs: [
                {
                    targets: 12,
                    width: 30,
                },
            ],
            columns: [
                {
                    field: 'Bil.',
                    width: 20,
                },
                {
                    field: 'Institusi',               
                    width: 10,              
                },
                {
                    field: 'Tahun',
                    width: 50,
                },
                {
                    field: 'Tahap',
                    width: 50,
                },
                {
                    field: 'Bidang',
                    width: 50,
                },
                {
                    field: 'Pengkhususan',
                    width: 100,
                },
                {
                    field: 'Major Pengkhususan',
                    width: 100,
                },
                {
                    field: 'Minor Pengkhususan',
                    width: 100,
                },
                {
                    field: 'PNGK/CGPA',
                    width: 100,
                },
                {
                    field: 'Keputusan',
                    width: 100,
                }, 
                {
                    field: 'Lampiran Sijil',
                    width: 100,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 100,
                },
                {
                    field: 'Tindakan',
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
