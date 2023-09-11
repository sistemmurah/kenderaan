"use strict";
var KTDatatablesBasicHeaders = function () {

	var initTable1 = function () {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			columnDefs: [
				{
					targets: 1,
					width: 50,
				},
				{
					targets: 3,
					width: 90,
				},
				{
					targets: 4,
					width: 90,
				},
				{
					targets: 5,
					title: 'Tindakan',
					width: 10,
					
				},
				//{
				//	width: '75px',
				//	targets: 5,
				//	width: 20,
				//	render: function (data, type, full, meta) {
				//		var status = {
				//			1: { 'title': 'Pending', 'class': 'label-light-primary' },
				//			2: { 'title': 'Delivered', 'class': ' label-light-danger' },
				//			3: { 'title': 'Canceled', 'class': ' label-light-primary' },
				//			4: { 'title': 'HANTAR', 'class': ' label-light-success' },
				//			5: { 'title': 'Info', 'class': ' label-light-info' },
				//			6: { 'title': 'Danger', 'class': ' label-light-danger' },
				//			7: { 'title': 'DRAF', 'class': ' label-light-warning' },
				//		};
				//		if (typeof status[data] === 'undefined') {
				//			return data;
				//		}
				//		return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
				//	},
				//},
				//{
				//	width: '75px',
				//	targets: 6,
				//	render: function (data, type, full, meta) {
				//		var status = {
				//			1: { 'title': 'Online', 'state': 'danger' },
				//			2: { 'title': 'Retail', 'state': 'primary' },
				//			3: { 'title': 'Direct', 'state': 'success' },
				//		};
				//		if (typeof status[data] === 'undefined') {
				//			return data;
				//		}
				//		return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
				//			'<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
				//	},
				//},
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
