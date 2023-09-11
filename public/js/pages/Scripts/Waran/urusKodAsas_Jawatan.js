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
                    field: 'Bil.',
                    width: 10,
                },
                {
                    field: 'Kod Jawatan',
                    width: 50,
                },
                {
                    field: 'Kod JPA',
                    width: 100,
                },
                {
                    field: 'Gred Jawatan',
                    width: 50,
                },
                {
                    field: 'Deskripsi Jawatan',
                    width: 50,
                },
                {
                    field: 'Kumpulan',
                    width: 20,
                },
				{
                    field: 'Deskripsi Skim',
                    width: 20,
                },
				{
                    field: 'Deskripsi JPA',
                    width: 20,
                },
				{
                    field: 'Deskripsi Kumpulan',
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




