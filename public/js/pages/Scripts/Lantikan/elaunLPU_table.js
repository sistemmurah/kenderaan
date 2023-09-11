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
                    'targets': 2,
                    type: 'date-euro'
                }
            ],
            order: [0, 'desc'],
            columns: [
                {
                    field: 'Bil',
                    width: 10,
                },
                {
                    field: 'Fakulti/Jabatan',
                    width: 20,
                },
                {
                    field: 'Nama',
                    width: 100,
                },
                {
                    field: 'No Kad Pengenalan',
                    width: 20,
                },
                {
                    field: 'Gred Jawatan',
                    width: 50,
                },
                {
                    field: 'Status',
                    title: 'Status',
                    width: 90,
                    sortable: true,
                    autoHide: false,
                    textAlign: 'center',
                    template: function (row) {
                        var status = {
                            Draft: {
                                'title': 'Draft',
                                'class': 'w-100 label label-xl label-light-info',
                            },
                            Dihantar: {
                                'title': 'Dihantar',
                                'class': 'w-100 label label-xl label-light-success',
                            },
                            Diluluskan: {
                                'title': 'Diluluskan',
                                'class': 'w-100 label label-xl label-light-primary',
                            },
                            Dikembalikan: {
                                'title': 'Dikembalikan',
                                'class': 'w-100 label label-xl label-light-danger',
                            },
                        };
                        return '<span class="label label-lg font-weight-bold label-inline ' +
                            status[row.Status].class + '">' + status[row
                                .Status]
                            .title +
                            '</span>';
                    }
                },
            
                {
                    field: 'Tindakan',
                    target: 0,
                    width: 50,
                }
            ],
        });

        $('#kt_datatable_tuntutanLantikanLPU_search_status').on('change', function () {
            datatableTuntutan.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_tuntutanLantikanLPU_search_status').selectpicker();
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




