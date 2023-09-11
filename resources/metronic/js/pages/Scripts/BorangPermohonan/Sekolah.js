"use strict";

var PendSekTambah = function () {
    var _dataTableInit = function () {
        var t;


        var x = $('#RESULTSET').val();
        if (x == "2") {
            toastr.success("", "<font color='#800000'>Rekod telah disimpan</font>");
        }

        $("#KOD_SUBJEK_FK").chosen();

        var paparanSkrin = $('#paparanSkrin').val();

        if (paparanSkrin == " disabled ") {
            document.getElementById('TAHAP_FK').disabled = 'disabled';
            document.getElementById('NAMA_SEKOLAH').disabled = 'disabled';
            document.getElementById('kt_datepicker_7').disabled = 'disabled';
            document.getElementById('kt_datepicker_8').disabled = 'disabled';
            document.getElementById('BIDANG_FK').disabled = 'disabled';

            var totalLesen = $('#ListSubjekNum').val();

            for (var i = 0; i < totalLesen; i++) {                
                document.getElementById("ListSubjek[" + i + "].GRED_FK").disabled = 'disabled';
            } 
            $('#KOD_SUBJEK_FK').prop('disabled', true).trigger("chosen:updated");
           
            document.getElementById('GRED_FK').disabled = 'disabled';
            
            


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
    PendSekTambah.init();
});

function subjekLain() {
    var _value = $('#TAHAP_FK').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'TAHAP_FK': _value
    });
    var allsubjek = "";

    return allsubjek;
}

function padamsubjek(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _subjekpk = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/PendidikanSubjekSimpan';
    var _screen = 'PendidikanSekolah';
    var _data = JSON.stringify({
        'SUBJEK_FK': _subjekpk, 'RESULTSET': _kod, 'ToScreen': _screen
    });

    $.ajax({
        type: "POST",
        url: event,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _res = res.RESULTSET;
            if (_res == "2") {
                var _textNya = "Parameter Save";
                toastr.success("", "<font color='#800000'>Record Deleted</font>");
                window.location.reload();
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
}



function saveItem(id) {
    var _path = $('#IdPathServer').val();

    var _kodsubjekfk = $('#KOD_SUBJEK_FK').val();
    var _gredfk = $('#GRED_FK').val();
    var _sekolahfk = $('#SEKOLAH_PK').val();
    var _kod = 'KEMASKINI';

    var event = _path + '/BorangPermohonan/PendidikanSubjekSimpan';
    var _screen = 'PendidikanSekolah';
    var _data = JSON.stringify({
        'KOD_SUBJEK_FK': _kodsubjekfk, 'RESULTSET': _kod, 'GRED_FK': _gredfk, 'SEKOLAH_PK': _sekolahfk
    });

    $.ajax({
        type: "POST",
        url: event,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _res = res.RESULTSET;
            if (_res == "2") {
                var _textNya = "Parameter Save";
                toastr.success("", "<font color='#800000'>Record Simpan</font>");
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
}

function padamsekolah(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _sekolahpk = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/PendidikanSekolahSimpan';
    var _screen = 'PendidikanSekolah';
    var _data = JSON.stringify({
        'SEKOLAH_PK': _sekolahpk, 'RESULTSET': _kod, 'ToScreen': _screen
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






