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
                    field: 'Dicadangkan',
                    width: 30,
                },
                {
                    field: 'Keutamaan',
                    width: 50,
                },
                {
                    field: 'Jenis Lantikan',
                    width: 50,
                },
                {
                    field: 'Kategori Jawatan<',
                    width: 30,
                },
                {
                    field: 'Nama Bidang',
                    width: 50,
                },
                {
                    field: 'No Pekerja',
                    width: 50,
                },
                
                {
                    field: 'Nama',
                    width: 30,
                },
                {
                    field: 'Jawatan Semasa',
                    width: 50,
                },
                {
                    field: 'Kaedah Permohonan',
                    width: 50,
                },
                
                {
                    field: 'Tkh.Mohon',
                    width: 30,
                },
                {
                    field: 'Tkh.Hantar',
                    width: 50,
                },
                {
                    field: 'Status Permohonan',
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




