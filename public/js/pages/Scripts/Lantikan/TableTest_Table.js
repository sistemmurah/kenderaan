"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {

        var table = $('#IdTable_CarianAduan');
        // begin first table
        table.DataTable({
            responsive: true,
            // DOM Layout settings
            dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            language: {
                'lengthMenu': 'Display _MENU_',
            },
            columnDefs: [
                {
                    targets: 6,
                    width: '85px',
                    render: function (data, type, full, meta) {
                        var status = {
                            7: { 'title': 'NEW', 'class': ' label-light-warning' },
                            8: { 'title': 'SUBMIT', 'class': ' label-light-danger' },
                            9: { 'title': 'CANCELED', 'class': ' label-light-primary' },
                            10: { 'title': 'CLOSE', 'class': ' label-light-success' },
                            11: { 'title': 'IN-PROGRESS', 'class': ' label-light-info' },
                            18: { 'title': 'ASSIGNING', 'class': ' label-light-warning' },
                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                    },
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