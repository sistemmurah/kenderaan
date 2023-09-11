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
                    field: 'JL',
                    width: 50,
                },
                {
                    field: 'WS',
                    width: 100,
                },
                {
                    field: 'KP',
                    width: 50,
                },
                {
                    field: 'ES',
                    width: 50,
                },
                {
                    field: 'KE',
                    width: 20,
                },
				{
                    field: 'TK',
                    width: 20,
                },
				{
                    field: 'Keputusan',
                    width: 20,
                },
				{
                    field: 'Status Aktif',
                    width: 20,
                },
				{
                    field: 'Tarikh Kuatkuasa',
                    width: 20,
                },
				{
                    field: 'Tarikh Tamat',
                    width: 20,
                },
				{
                    field: '#',
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




