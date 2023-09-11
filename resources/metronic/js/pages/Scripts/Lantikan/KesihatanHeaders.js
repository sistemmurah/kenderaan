"use strict";
var KTDatatablesBasicHeaders = function () {

    var initTable1 = function () {
        var x = $('#OKU').val();
        var y = $('#NO_DAFTAR_OKU').val();

        if (x == 2699) {
            document.getElementById("paparCatatan").style.display = "block";

        }
        else {
            document.getElementById("paparCatatan").style.display = "none";
        }
        if (x != 67) {
            document.getElementById("okuLabel").style.display = "block";
        }
        else {
            document.getElementById("okuLabel").style.display = "none";
        }





        var table = $('#kt_datatable1');

        // begin first table
        table.DataTable({
            responsive: true,
            columnDefs: [
                {
                    'targets': 3,
                    type: 'date-euro'
                }
            ],

            order: [0, 'desc'],
            columns: [
                {
                    field: 'Bil.',
                    width: 30,
                    textAlign: 'center',
                },
                {
                    field: 'Nama Penyakit Kronik',
                    width: 50,
                },
                {
                    field: 'Catatan',
                    width: 50,
                },
                {
                    field: 'Tarikh Kemaskini',
                    width: 50,
                },                
                {
                    field: 'Tindakan',
                    width: 50,
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

function paparCatatan(id) {
    var x = $('#OKU').val();

   
    if (x == "2699") {
        document.getElementById("paparCatatan").style.display = "block";
        $('#PNGK_LAIN').val('');
    } else {
        document.getElementById("paparCatatan").style.display = "none";
        $('#paparCatatan').val('');
    }
    if (x == "67") {
        document.getElementById("okuLabel").style.display = "none";
    }
    else {
        document.getElementById("okuLabel").style.display = "block";
    }


}
