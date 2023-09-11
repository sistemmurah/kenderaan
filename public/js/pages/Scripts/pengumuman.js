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
            order: [0, 'asc'],
            columns: [
                {
                    field: 'No.',
                    width: 10,
                    textAlign: 'center',
                },
                {
                    field: 'PTJ',
                    width: 50,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Mohon',
                    width: 150,
                    textAlign: 'center',
                },
                {
                    field: 'Tajuk Notis',
                    width: 150,
                },
                {
                    field: 'Deskripsi Notis',
                    width: 100,
                },
                {
                    field: 'Tarikh Mula',
                    width: 100,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Tamat',
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




