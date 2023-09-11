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
                    field: 'Tarikh',
                    width: 50,
                },
                {
                    field: 'Tarikh Mula',
                    width: 50,
                },
                {
                    field: 'Tarikh Tamat',
                    width: 50,
                },
                {
                    field: 'Jumlah Jam',
                    width: 20,
                },
                {
                    field: 'Keterangan Tugas',
                    width: 50,
                },
                
            
                {
                    field: 'Tindakan',
                    target: 0,
                    width: 30,
                }
            ],
        });

        $('#kt_datatable_tuntutanLantikanLPU_search_status').on('change', function () {
            datatableTuntutan.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_tuntutanLantikanLPU_search_status').selectpicker();
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




