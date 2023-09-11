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
                    field: 'No Rujukan',
                    width: 50,
                },
                {
                    field: 'Tarikh Permohonan',
                    width: 100,
                },
                {
                    field: 'Nama Staf',
                    width: 50,
                },
                {
                    field: 'Fakulti/Jabatan',
                    width: 50,
                },
                {
                    field: 'Jenis Permohonan',
                    width: 20,
                },
				{
                    field: 'Negara',
                    width: 20,
                },
				{
                    field: 'Status',
                    width: 20,
                }, 
				{
                    field: 'Tindakan',
                    width: 20,
                },
				{
                    field: 'No Pekerja',
                    width: 20,
                },
				{
                    field: 'Tarikh Mula Perjalanan',
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




