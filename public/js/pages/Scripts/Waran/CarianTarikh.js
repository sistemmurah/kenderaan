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
                    width: 20,
                },
                {
                    field: 'Sesi',
                    width: 60,
                    textAlign: 'center',
                },
                {
                    field: 'Kod Jawatan',
                    width: 90,
                    textAlign: 'center',
                },
                {
                    field: 'Nama Jawatan',
                    width: 180,
                },
                {
                    field: 'Kampus',
                    width: 95,
                    textAlign: 'center',
                },
                {
                    field: 'Kod PTJ',
                    width: 60,
                    textAlign: 'center',
                },
                {
                    field: 'Taraf Jawatan',
                    width: 110,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Mula',
                    width: 150,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Tamat',
                    width: 150,
                    textAlign: 'center',
                },
                {
                    field: 'Tarikh Luput',
                    width: 130,
                    textAlign: 'center',
                },
                {
                    field: 'Kategori',
                    width: 130,
                    textAlign: 'center',
                },
                {
                    field: 'Status',
                    title: 'Status Waran',
                    textAlign: 'center',
                    width: 90,
                    autoHide: false,
                    // callback function support for column rendering
                    
                },
                //}, {
                //	field: 'Type',
                //	title: 'Type',
                //	autoHide: false,
                //	// callback function support for column rendering
                //	template: function (row) {
                //		var status = {
                //			1: {
                //				'title': 'Online',
                //				'state': 'danger'
                //			},
                //			2: {
                //				'title': 'Retail',
                //				'state': 'primary'
                //			},
                //			3: {
                //				'title': 'Direct',
                //				'state': 'success'
                //			},
                //		};
                //		return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
                //	},
                //},
            ],
        });

        $('#kt_datatable_search_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Sesi');
        });

        //$('#kt_datatable_search_type').on('change', function () {
        //    datatable.search($(this).val().toLowerCase(), 'Tahun');
        //});

        $('#kt_datatable_search_type').each(function () {

            var year = (new Date()).getFullYear();
            var current = year;
            year -= 3;

            $('#kt_datatable_search_type').append('<option value="">Sila Pilih</option>');

            for (var i = 0; i < 5; i++) {
                if ((year + i) == current) {
                    $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
                }
                else {
                    $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
                }
            }
        });

        $('#kt_datatable_search_type').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Skim');
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
