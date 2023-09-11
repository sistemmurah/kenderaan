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

                },
            ],
            columns: [
                {
                    field: 'Bil',
                    width: 10,
                },
                {
                    field: 'Kod Waran',
                    width: 160,
                },
                {
                    field: 'Skim JPA',
                    width: 30,
                },
                {
                    field: 'Skim',
                    width: 50,
                },
                {
                    field: 'Singkatan Jawatan',
                    width: 40,
                },
                {
                    field: 'Gred Jawatan',
                    width: 20,
                },
                {
                    field: 'OD Kod',
                    width: 20,
                },
                {
                    field: 'Tahun',
                    width: 20,
                },
                {
                    field: 'Tindakan',
                    //width: 90,
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