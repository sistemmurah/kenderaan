"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {

        var table2 = $('#kt_datatable3');

        // begin first table
        table2.DataTable({
            responsive: true,
            columnDefs: [
                {
                    'targets': 3,
                    type: 'date-euro'
                }           
            ],
            columns: [
                {
                    field: 'Bil',
                    type: 'number',
                    width: 10,                    
                },
                {
                    field: 'Nama Persatuan',
                    width: 200,
                },
                {
                    field: 'Jawatan Disandang',
                    width: 150,
                },
                {
                    field: 'Peringkat Penglibatan',
                    width: 100,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 100,
                },
                {
                    field: 'Lampiran',
                    width: 100,
                },
                {
                field: 'Tindakan',
                width: 100,
                }
            ],
        });

        var table3 = $('#kt_datatable4');

        table3.DataTable({
            responsive: true,  
            columnDefs: [
                {
                    'targets': 4,
                    type: 'date-euro'
                }
            ],
            order: [0, 'desc'],
            columns: [
            {
                field: 'Bil',
                type: 'number',
                width: 10,  
            },
            {
                field: 'Nama Aktiviti Sukan',
                width: 200,
            },
            {
                field: 'Peringkat Penglibatan',
                width: 150,
            },
            {
                field: 'Tarikh Kemaskini',
                width: 100,
            },
            {
                field: 'Lampiran',
                width: 100,
            },  
            {
                field: 'Tindakan',
                width: 40,
            }
],
        });
    }; // close initTable1

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
