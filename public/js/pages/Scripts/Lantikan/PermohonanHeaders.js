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
                    width: 20,
                },                
                {
                    field: 'Sesi',
                    width: 40,
                },  
                {
                    field: 'Gred',
                    width: 20,
                },
                {
                    field: 'Jawatan',
                    width: 200,
                },
                {
                    field: 'Kampus',
                    width: 100,
                },
                {
                    field: 'Status',
                    width: 20,
                },
                {
                    field: 'Tarikh Mohon',
                    width: 70,
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




