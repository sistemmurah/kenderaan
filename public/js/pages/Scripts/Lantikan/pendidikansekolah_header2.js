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
            columnDefs: [
                {
                    targets: 3,
                    width: 30,
                },
                {
                    targets: 8,
                    title: 'Tindakan',
                    width: 40,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return '\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Kemaskini">\
								<i class="flaticon-edit text-dark"></i>\
							</a>\
                        	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Kemaskini">\
								<i class="flaticon-delete text-dark"></i>\
							</a>\
						';
                    },
                },
            ],
            columns: [
                {
                    field: 'Bil',
                    type: 'number',
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: 'Nama Sekolah',
                    width: 100,
                    textAlign: 'left',
                },
                {
                    field: 'Tahap',
                    type: 'number',
                    width: 90,
                    textAlign: 'center',
                },
                {
                    field: 'Tahun Mula',
                    width: 80,
                },
                {
                    field: 'Tahun Akhir',
                    width: 60,
                },
                {
                    field: 'Bidang',
                    width: 60,
                },
                {
                    field: 'Lampiran Sijil',
                    width: 60,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 60,
                },
                {
                    field: 'Tindakan',
                    width: 60,
                },
            ],
        });





        $('#kt_datatable_search_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Tahun');
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

