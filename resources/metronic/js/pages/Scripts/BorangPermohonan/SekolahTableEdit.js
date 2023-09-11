"use strict";

var _path = $('#IdPathServer').val();
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var table = $('#kt_datatable3');
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
                    width: 20,
                },
                {
                    field: 'Nama Fail',
                    width: 20,
                },
                {
                    field: 'Jenis Fail',
                    width: 20,
                },
                {
                    field: 'Tarikh Kemaskini Maklumat',
                    width: 100,
                },               
                {
                    field: 'Tindakan',
                    width: 20,
                }
            ],
        });
        
        var table2 = $('#SUBJEKNAMA');
        table2.DataTable({
            responsive: true,
            columnDefs: [
                {
                    targets: 3,
                    width: 30,
                },
                {
                    width: '25px',
                    targets: 2,
                    width: 20,

                },
            ],
            columns: [
                {
                    field: 'Mata Pelajaran',
                    width: 20,
                },
                {
                    field: 'Keputusan',
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




