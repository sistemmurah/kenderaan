"use strict";

var Kesihatan = function () {
    var _dataTableInit = function () {
        var t;
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _berat = $('#IdModalItemBerat').val();
            var _bmi = $('#IdModalItemBmi').val();
            var _tinggi = $('#IdModalItemTinggi').val();
            var _jenisdarah = $('#IdModalItemJenisDarah').val();
            var _kecacatan = $('#IdModalItemKecacatan').val();
            var _nodaftaroku = $('#IdModalItemNoDaftarOku').val();
            var _catatan = $('#CATATAN').val();
            var _maklumatperibadipk = 0; _maklumatperibadipk = $('#MAKLUMAT_PERIBADI_PK').val();
          


            if ( _tinggi.length == 0 && _berat.length == 0 && _bmi.length == 0 && _jenisdarah.length == 0 && _kecacatan.length == 0 || _nodaftaroku.length == 0) {
                toastr.warning("Messagenya disini", "PLEASE FILL-IN ALL FIELD.");
                _ok = false;
            }

            if (_ok == true) {
                
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/BorangPermohonan/MtdKesihatanSaveAjax';
                    var _data = JSON.stringify({
                        'TINGGI': _tinggi, 'BERAT': _nama, 'BMI': _bmi, 'JENIS_DARAH': _jenisdarah, 'OKU': _kecacatan, 'NO_DAFTAR_OKU': _nodaftaroku, 'CATATAN': _catatan
                    });

                    Swal.fire({
                        title: "Rekod Padam?",
                        text: "Anda Pasti",
                        icon: "warning",
                        showCancelButton: true,
                        cancelButtonText: "Tidak",
                        confirmButtonText: "Ya, saya pasti!"
                    }).then(function (result) {
                        if (result.value) {
                            $.ajax({
                                type: "POST",
                                url: event,
                                dataType: "json",
                                contentType: "application/json; charset=utf-8",
                                data: _data,
                                success: function (res) {
                                    var _res = res.RESULTSET;
                                    if (_res == "2") {
                                        location.reload();
                                    } else {
                                        toastr.warning("Messagenya disini", "Tidak Berjaya Delete.");
                                    }
                                },
                                error: function (xhr, httpStatusMessage, customErrorMessage) {
                                    if (xhr.status === 410 || xhr.status === 500) {
                                        alert(customErrorMessage);
                                    } else {
                                        toastr.warning("", "<font color='#800000'>Error Code 2</font>");
                                    }
                                }
                            });
                            Swal.fire(
                                "Rekod telah dipadam!",
                                "",
                                "success"
                            )
                        }
                    });

                

            }
        });


        var paparanSkrin = $('#paparanSkrin').val();
        if (paparanSkrin == " disabled ") {
            document.getElementById('BERAT').disabled = 'disabled';
            document.getElementById('TINGGI').disabled = 'disabled';
            document.getElementById('BMI').disabled = 'disabled';
            document.getElementById('JENIS_DARAH').disabled = 'disabled';
            document.getElementById('OKU').disabled = 'disabled';
        }

        var paparanSkrin2 = $('#paparanSkrin2').val();
        if (paparanSkrin2 == " disabled ") {
            document.getElementById('jenis_sakit').disabled = 'disabled';
            document.getElementById('CATATAN').disabled = 'disabled';
        }
    }

    return {
        // public functions
        init: function () {
            _dataTableInit();
        }
    };

}();

jQuery(document).ready(function () {
    Kesihatan.init();
});


function calculateBmi() {
    var weight = document.getElementById("BERAT").value
    var height = document.getElementById("TINGGI").value
    var bmi = document.getElementById("BMI")
    if (weight > 0 && height > 0) {
        var finalBmi = weight / (height / 100 * height / 100)
        bmi.value = finalBmi.toFixed(2)
    }
            
}


function fnCallModalItem(id) {


    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _KESIHATAN_MOHON_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/Process_ButiranSakitKronikAjax';
    var _data = JSON.stringify({
        'KESIHATAN_MOHON_PK': _KESIHATAN_MOHON_PK
    });

    Swal.fire({
        title: "Rekod Padam?",
        text: "Anda Pasti",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Tidak",
        confirmButtonText: "Ya, saya pasti!"
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: event,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: _data,
                success: function (res) {
                    var _res = res.RESULTSET;
                    if (_res == "2") {
                        location.reload();
                    } else {
                        toastr.warning("Messagenya disini", "Tidak Berjaya Delete.");
                    }
                },
                error: function (xhr, httpStatusMessage, customErrorMessage) {
                    if (xhr.status === 410 || xhr.status === 500) {
                        alert(customErrorMessage);
                    } else {
                        toastr.warning("", "<font color='#800000'>Error Code 2</font>");
                    }
                }
            });
            Swal.fire(
                "Rekod telah dipadam!",
                "",
                "success"
            )
        }
    });




}
