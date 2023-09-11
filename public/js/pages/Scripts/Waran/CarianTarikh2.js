"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {




        var table3 = $('#kt_datatable');

        table3.DataTable({
            responsive: true,  
            columnDefs: [
                {
                    'targets': 4,
                    type: 'date-euro'
                }
            ],
            order: [0, 'desc'],
            columns: [
            {
                field: 'Bil',
                type: 'number',
                width: 10,  
            },
            {
                field: 'Sesi',
                width: 200,
            },
            {
                field: 'Tarikh Mula',
                width: 150,
            },
            {
                field: 'Tarikh Tamat',
                width: 100,
            },
            {
                field: 'Kategori',
                width: 100,
            },  
			{
                field: 'Status',
                width: 100,
            },  
            {
                field: 'Tindakan',
                width: 40,
            }
],
        });
    }; // close initTable1

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
