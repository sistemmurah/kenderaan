"use strict";
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
					field: 'Bil.',
					width: 30,
					textAlign: 'center',
				},
				{
					field: 'Maklumat Pengalaman',
					width: 50,
				},
				{
					field: 'Maklumat Organisasi',
					width: 50,
				},
				{
					field: 'Gaji Terakhir',
					width: 50,
				},
				{
					field: 'Tempoh Khidmat (Tahun)',
					width: 50,
					textAlign: 'center',
				},
				{
					field: 'Tarikh Kemaskini',
					width: 50,
					textAlign: 'center',
				},
				{
					field: 'Lampiran',
					width: 50,
				},
				{
					field: 'Tindakan',
					width: 100,
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
