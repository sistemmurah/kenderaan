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
                    field: 'Kod Konstruk',
                    width: 50,
                },
                {
                    field: 'Nama Konstruk',
                    width: 100,
                },
                {
                    field: 'Susunan',
                    width: 50,
                },
                {
                    field: 'Tarikh Kuatkuasa',
                    width: 50,
                },
                {
                    field: 'Tarikh Tamat',
                    width: 20,
                },
				                {
                    field: 'Kemaskini',
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




