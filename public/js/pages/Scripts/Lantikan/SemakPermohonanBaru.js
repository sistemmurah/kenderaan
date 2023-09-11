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
                    field: 'MyKad Pemohon',
                    width: 50,
                },
                {
                    field: 'Nama Pemohon',
                    width: 100,
                },
                {
                    field: 'Nama Jawatan',
                    width: 50,
                },
                {
                    field: 'Tarikh Iklan',
                    width: 50,
                },
                {
                    field: 'IPSB',
                    width: 20,
                },
				                {
                    field: 'Emel',
                    width: 20,
                },
				{
                    field: 'No Telefon',
                    width: 20,
                },
				{
                    field: 'Kelayakan',
                    width: 20,
                },
				{
                    field: 'Status',
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




