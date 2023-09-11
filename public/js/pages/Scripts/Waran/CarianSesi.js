"use strict";
// Class definition

var KTDatatableHtmlTableDemo = function () {
	// Private functions

	// demo initializer
	var demo = function () {

		var datatable = $('#kt_datatable').KTDatatable({
			data: {
				saveState: { cookie: false },
				autoColumns: false,
			},
			responsive: true,
			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},
			columns: [
				{
					field: 'Bil',
					type: 'number',
					width: 30,
				},
				{
					field: 'Aktif',
					type: 'number',
					width: 30,
				},
				{
					field: 'Bil Surat',
					type: 'number',
					width: 40,
				},
				{
					field: 'Tarikh Buka',
					width: 90,
					textAlign: 'center',
				},
				{
					field: 'Tarikh Tamat',
					width: 90,
					textAlign: 'center',
				},
				{
					field: 'Tarikh Mesyuarat Gantian',
					width: 110,
					textAlign: 'center',
				},
				{
					field: 'Bil Surat Gantian',
					width: 90,
					textAlign: 'center',
				},
				//{
				//	field: 'OrderDate',
				//	type: 'date',
				//	format: 'YYYY-MM-DD',
				//}, 
				{
					field: 'Status',
					title: 'Status Waran',
					width: 80,
					autoHide: false,
					// callback function support for column rendering
					template: function (row) {
						var status = {
							SUBMITTED: {
								'title': 'Submitted',
								'class': ' label-light-warning'
							},
							2: {
								'title': 'Approved',
								'class': ' label-light-danger'
							},
							3: {
								'title': 'Canceled',
								'class': ' label-light-primary'
							},
							4: {
								'title': 'Success',
								'class': ' label-light-success'
							},
							5: {
								'title': 'Info',
								'class': ' label-light-info'
							},
							6: {
								'title': 'Danger',
								'class': ' label-light-danger'
							},
							7: {
								'title': 'Warning',
								'class': ' label-light-warning'
							}
						};
						return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
					},
				}, {
					field: 'Type',
					title: 'Type',
					autoHide: false,
					// callback function support for column rendering
					template: function (row) {
						var status = {
							1: {
								'title': 'Online',
								'state': 'danger'
							},
							2: {
								'title': 'Retail',
								'state': 'primary'
							},
							3: {
								'title': 'Direct',
								'state': 'success'
							},
						};
						return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
					},
				},
				{
					field: 'Sesi',
					width: 40,
				},
				{
					field: 'Skim',
					width: 40,
					textAlign: 'center',
				},
				{
					field: 'Nama Jawatan',
					width: 120,
				},
				{
					field: 'Fakulti',
					width: 120,
				},
				{
					field: 'Taraf Jawatan',
					width: 60,
				},
				{
					field: 'Kampus',
					width: 100,
				},
				{
					field: 'Kekosongan',
					width: 85,
					textAlign: 'center',
				},
			],
		});



		$('#kt_datatable_search_status').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'Sesi');
		});

		$('#kt_datatable_search_type').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'OD Kod');
		});

		$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

	};

	return {
		// Public functions
		init: function () {
			// init dmeo
			demo();
		},
	};
}();

jQuery(document).ready(function () {
	KTDatatableHtmlTableDemo.init();
});
