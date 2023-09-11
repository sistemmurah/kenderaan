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
					field: 'Jenis Kemahiran',
					width: 50,
				},
				{
					field: 'Nama Kemahiran',
					width: 50,
				},
				{
					field: 'Tahap Kemahiran /Pengetahuan',
					width: 50,
				},
				{
					field: 'Tahun Pengalaman',
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
