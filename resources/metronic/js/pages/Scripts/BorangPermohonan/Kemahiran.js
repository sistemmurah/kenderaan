"use strict";
// delete function
function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var KEMAHIRAN_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/KemahiranSimpan';
    var _data = JSON.stringify({
        'KEMAHIRAN_PK': KEMAHIRAN_PK, 'RESULTSET': _kod
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


function paparGred(id) {
    var x = document.getElementById("pngk");
    var y = document.getElementById("keputusan");
    if (id == "pngk") {
        y.style.display = "none";
        x.style.display = "block";
        $('#PNGK_LAIN').val('');
    } else {
        x.style.display = "none";
        y.style.display = "block";
        $('#PNGKCGPA').val('');
    }
}
function institusicheck() {
    var x = $('#INSTITUT_NAMA').val();
    if (x == 1) {
        document.getElementById("DESKRIPSI").disabled = false;
    }
    else {
        document.getElementById("DESKRIPSI").disabled = true;
    }

}
function loadPage(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _PENDIDIKANTINGGI_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/PendidikanTinggiPapar';
    var _data = JSON.stringify({
        'PENDIDIKANTINGGI_PK': _PENDIDIKANTINGGI_PK, 'KOD_PROCESS': _kod
    });
    alert(_kod);
    $.ajax({
        type: "POST",
        url: event,
        dataType: "html",
        contentType: "application/json; charset=utf-8",
        data: _data
    });
}
function filterPengkhususan() {
    var _value = $('#Pengkhususan').val();
    var _path = $('#IdPathServer').val();

    var allsubjek = "";
    var _data = JSON.stringify({
        'PENGKHUSUSAN_JAWATAN_FK': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/BorangPermohonan/MtdGetSubPengkhususanBidangAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#BIDANG_FK').html(_html);
                $('#BIDANG_FK').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#BIDANG_FK').append(_html);
                });
            } else {
                toastr.warning("", "<font color='#800000'> Category Code  Not Found.</font>");
            }
        },
        error: function (xhr, httpStatusMessage, customErrorMessage) {
            if (xhr.status === 410 || xhr.status === 500) {
                alert(customErrorMessage);
            } else {
                toastr.warning("", "<font color='#800000'>Error Code " + httpStatusMessage + "</font>");
            }
        }
    });

}
function jenisinstitusi() {
    var _value = $('#JENIS_INSTITUSI').val();
    var _path = $('#IdPathServer').val();
    var val = "";
    var allsubjek = "";
    var _data = JSON.stringify({
        'JENIS_INSTITUSI': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/BorangPermohonan/MtdGetSubInstitusiNamaAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#INSTITUT_NAMA').html(_html);
                $('#INSTITUT_NAMA').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#INSTITUT_NAMA').append(_html);
                });
            } else {
                toastr.warning("", "<font color='#800000'> Category Code  Not Found.</font>");
            }
        },
        error: function (xhr, httpStatusMessage, customErrorMessage) {
            if (xhr.status === 410 || xhr.status === 500) {
                alert(customErrorMessage);
            } else {
                toastr.warning("", "<font color='#800000'>Error Code " + httpStatusMessage + "</font>");
            }
        }


    });

    if (_value == "448") {
        document.getElementById("INSTITUT_NAMA").disabled = true;
        document.getElementById("DESKRIPSI").disabled = false;
    }
    else {
        document.getElementById("INSTITUT_NAMA").disabled = false;
        document.getElementById("DESKRIPSI").disabled = true;
    }

}



function checkKemahiran() {
    var checkBox = document.getElementById("checkKemahiran");
    var PERMOHONAN_FK = $('#PERMOHONAN_FK').val();
    var _path = $('#IdPathServer').val();
    var _kod = "";
    if (checkBox.checked == true) { _kod = "Y"; }
    if (checkBox.checked == false) { _kod = "T"; }
    var event = _path + '/BorangPermohonan/KemahiranStatus';
    var _data = JSON.stringify({
        'PERMOHONAN_FK': PERMOHONAN_FK, 'RESULTSET': _kod
    });
    var run = "NO";
    if (_kod == "Y") {
        Swal.fire({
            title: "Tiada Kemahiran?",
            text: "Senarai Kemahiran akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Tidak",
            confirmButtonText: "Ya, teruskan!",
            reverseButtons: true
        }).then(function (result) {
            if (result.value == true) {
                Swal.fire(
                    "Padam!",
                    "Rekod anda telah dihapus",
                    "success"
                )
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
                        }
                    },
                    error: function (xhr, httpStatusMessage, customErrorMessage) {
                        if (xhr.status === 410 || xhr.status === 500) {
                            alert(customErrorMessage);
                        } else {
                            toastr.warning("", "<font color='#800000'>Error Code</font>");
                        }
                    }
                });
                // result.dismiss can be "cancel", "overlay",
                // "close", and "timer"
            }
            else if (result.dismiss === "cancel") {
                Swal.fire(
                    "Batal",
                    "Rekod anda tidak dihapus",
                    "error"
                )
                document.getElementById("checkKemahiran").checked = false;
            }
        });
    }
    if (_kod == "T") {
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

                }
            },
            error: function (xhr, httpStatusMessage, customErrorMessage) {
                if (xhr.status === 410 || xhr.status === 500) {
                    alert(customErrorMessage);
                } else {
                    toastr.warning("", "<font color='#800000'>Error Code</font>");
                }
            }
        });
    }
}

var PendSekTambah = function () {
    var _dataTableInit = function () {
        var t;

        var x = $('#RESULTSET').val();
       
        if (x == "2") {
            Swal.fire(
                "Berjaya!",
                "Rekod telah disimpan",
                "success"
            );
        }

        var paparanSkrin = $('#paparanSkrin').val();
        if (paparanSkrin == " disabled ") {
            document.getElementById('DESKRIPSI').disabled = 'disabled';
            document.getElementById('LEVEL_KEMAHIRAN').disabled = 'disabled';
            document.getElementById('TAHUN_PENGALAMAN').disabled = 'disabled';
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



