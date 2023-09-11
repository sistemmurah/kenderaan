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
                    field: 'Peringkat',
                    width: 50,
                },
                {
                    field: 'Tangga Min',
                    width: 100,
                },
                {
                    field: 'Tangga Max',
                    width: 50,
                },
                {
                    field: 'Gaji Min',
                    width: 50,
                },
                {
                    field: 'Gaji Max',
                    width: 20,
                },
				                {
                    field: 'Kadar Naik Gaji',
                    width: 20,
                },
				                {
                    field: 'Tarikh Mula',
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
    
	  var table2 = $('#kt_datatable2');
        // begin first table
        table2.DataTable({
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
                    field: 'Keterangan Elaun',
                    width: 50,
                },
                {
                    field: 'Jumlah',
                    width: 100,
                },
                {
                    field: 'Tarikh Mula',
                    width: 50,
                },
                {
                    field: 'Tarikh Tamat',
                    width: 50,
                },
                {
                    field: 'Jenis Bayaran',
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




