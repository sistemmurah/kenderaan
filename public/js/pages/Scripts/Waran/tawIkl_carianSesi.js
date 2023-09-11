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
                    field: 'Sesi',
                    width: 50,
                },
                {
                    field: 'Tarikh Buka',
                    width: 100,
                },
                {
                    field: 'Tarikh Tamat',
                    width: 50,
                },
                {
                    field: 'Aktif',
                    width: 50,
                },
                {
                    field: 'Tarikh Mesyuarat',
                    width: 20,
                },
				{
                    field: 'Bil Surat',
                    width: 20,
                },
				{
                    field: 'Tarikh Mesyuarat Gantian',
                    width: 20,
                },
				{
                    field: 'Bil Surat Gantian',
                    width: 20,
                },
				{
                    field: 'Tindakan',
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




