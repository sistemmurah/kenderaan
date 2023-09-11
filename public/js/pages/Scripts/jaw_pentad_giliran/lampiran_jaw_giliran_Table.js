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
            ],
            columns: [
                {
                    field: 'Bil',
                    width: 10,
                },
                {
                    field: 'Jenis Lampiran',
                    width: 30,
                },
                {
                    field: 'Muatnaik Fail',
                    width: 50,
                },
                {
                    field: 'Nama Fail',
                    width: 50,
                },
                
				{
                    field: 'Tindakan',
                    width: 10,
                },
				
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




