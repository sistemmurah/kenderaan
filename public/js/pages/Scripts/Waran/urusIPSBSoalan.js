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
                    field: 'Konstruk',
                    width: 50,
                },
                {
                    field: 'No. Soalan',
                    width: 100,
                },
                {
                    field: 'Soalan',
                    width: 50,
                },
                {
                    field: 'Status Aktif',
                    width: 50,
                },
                {
                    field: 'Kategori',
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




