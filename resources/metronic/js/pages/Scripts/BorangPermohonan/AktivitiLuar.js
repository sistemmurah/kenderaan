"use strict";


function kegiatanaktiviti(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _subjekpk = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/AktivitiLuarBadanPaparAjax';
    var _data = JSON.stringify({
        'KEGIATANAKTIVITI_PK': _subjekpk, 'RESULTSET': _kod
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
function kegiatanaktivitiOri(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _subjekpk = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/AktivitiLuarBadanPaparAjax';
    var _data = JSON.stringify({
        'KEGIATANAKTIVITI_PK': _subjekpk, 'RESULTSET': _kod
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
                Swal.fire(
                    "Berjaya!",
                    "Rekod berjaya dihapus",
                    "success"
                );
            } else {               
                Swal.fire(
                    "Gagal!",
                    "Rekod tidak berjaya dihapus",
                    "error"
                );
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





function test(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _subjekpk = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/AktivitiLuarBadanEdit';
    $.ajax({
        type: 'POST',
        url: event,
        data: { 'KEGIATANAKTIVITI_PK': _subjekpk },
        success: function (data) {
            //here data is means the out put from the php file it is not $('#StudentID').val()
            // $('#curriculum').html(data);
        }
    });





}





var KeluargaTambah = function () {
    var _dataTableInit = function () {
        var t;
        var x = $('#RESULTSET').val();
        if (x == "2") {
            toastr.success("", "<font color='#800000'>Rekod telah disimpan</font>");
        }
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _deskripsi = $('#DESKRIPSI').val();
            var _pringkatfk = $('#PRINGKAT_FK').val();
            var _jawatanfk = $('#JAWATAN_FK').val();
            var _kegiatanaktivitipk = $('#KEGIATANAKTIVITI_PK').val();
            var _kod = "KEMASKINI";
            if (_ok) {
                var _path = $('#IdPathServer').val();
                var event = _path + '/BorangPermohonan/AktivitLuarBadanSimpan';
                var _data = JSON.stringify({
                    'DESKRIPSI': _deskripsi, 'PRINGKAT_FK': _pringkatfk, 'JAWATAN_FK': _jawatanfk, 'KEGIATANAKTIVITI_PK': _kegiatanaktivitipk, 'RESULTSET': _kod
                });
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            Swal.fire(
                                "Berjaya!",
                                "Rekod telah disimpan",
                                "success"
                            );
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                        } else {
                            Swal.fire(
                                "Gagal!",
                                "Rekod tidak berjaya disimpan",
                                "error"
                            );                            
                        }
                    },
                    error: function (xhr, _httpStatusMessage, customErrorMessage) {
                        if (xhr.status === 410 || xhr.status === 500) {
                            alert(customErrorMessage);
                        } else {
                            toastr.warning("", "<font color='#800000'>" + customErrorMessage + "</font>");
                        }
                    }
                });
            }
        });

        $('#IdBtnItemKegiatanSukan').click(function (e) {
            var _ok = true;
            var _deskripsi = $('#DESKRIPSI').val();
            var _peringkatfk = $('#PERINGKAT_FK').val();
            var _kegiatansukanpk = $('#KEGIATANSUKAN_PK').val();
            var _kod = "KEMASKINI";

            if (_ok) {
                var _path = $('#IdPathServer').val();
                var event = _path + '/BorangPermohonan/AktivitLuarSukanSimpan';
                var _data = JSON.stringify({
                    'DESKRIPSI': _deskripsi, 'PERINGKAT_FK': _peringkatfk, 'KEGIATANSUKAN_PK': _kegiatansukanpk, 'RESULTSET': _kod
                });
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            Swal.fire(
                                "Berjaya!",
                                "Rekod telah disimpan",
                                "success"
                            );
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                        } else {
                            Swal.fire(
                                "Gagal!",
                                "Rekod tidak berjaya disimpan",
                                "error"
                            );
                        }
                    },
                    error: function (xhr, _httpStatusMessage, customErrorMessage) {
                        if (xhr.status === 410 || xhr.status === 500) {
                            alert(customErrorMessage);
                        } else {
                            toastr.warning("", "<font color='#800000'>" + customErrorMessage + "</font>");
                        }
                    }
                });
            }
        });
        var paparanSkrin = $('#paparanSkrin').val();
        if (paparanSkrin == " disabled ") {
            document.getElementById('DESKRIPSI').disabled = 'disabled';
            document.getElementById('PERINGKAT_FK').disabled = 'disabled';
        }
        var paparanSkrin = $('#paparanSkrin2').val();
        if (paparanSkrin == " disabled ") {
            document.getElementById('DESKRIPSI').disabled = 'disabled';
            document.getElementById('PRINGKAT_FK').disabled = 'disabled';
            document.getElementById('JAWATAN_FK').disabled = 'disabled';

            



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
    KeluargaTambah.init();
});



function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var KEGIATANAKTIVITI_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/AktivitLuarBadanSimpan';
    var _data = JSON.stringify({
        'KEGIATANAKTIVITI_PK': KEGIATANAKTIVITI_PK, 'RESULTSET': _kod
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

function padamSukan(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var KEGIATANSUKAN_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/AktivitLuarSukanSimpan';
    var _data = JSON.stringify({
        'KEGIATANSUKAN_PK': KEGIATANSUKAN_PK, 'RESULTSET': _kod
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

function verify(id) {
    // var _path = $('#IdPathServer').val();
    var checktoPass = true;
    var check1 = 0;
    var check2 = 0;
    var _sukan = $('#sukanDESKRIPSI').val();
    var _sukanlibat = $('#sukanPERINGKAT_FK').val();
    if (_sukanlibat.length > 0) {
        check1 = 1;
    }
    if (_sukan.length > 1) {
        check1 += 1;
    }
    if (check1 == 1) {
        if (_sukan.length == 0) {
            document.getElementById("sukanDESKRIPSI").style.borderColor = "red";
            document.getElementById("sukanDESKRIPSI").focus();
        }
        if (_sukanlibat.length == 0) {
            document.getElementById("sukanPERINGKAT_FK").style.borderColor = "red";
            document.getElementById("sukanPERINGKAT_FK").focus();
        }
        checktoPass = false;
    }

    var aktivitiDESKRIPSI = $('#aktivitiDESKRIPSI').val();
    var aktivitiPRINGKAT_FK = $('#aktivitiPRINGKAT_FK').val();
    var aktivitiJAWATAN_FK = $('#aktivitiJAWATAN_FK').val();

    if (aktivitiDESKRIPSI.length > 0) {
        check2 = 1;
    }
    if (aktivitiPRINGKAT_FK.length > 0) {
        check2 += 1;
    }
    if (aktivitiJAWATAN_FK.length > 0) {
        check2 += 1;
    }
    if (check2 == 1 || check2 == 2) {
        if (aktivitiDESKRIPSI.length == 0) {
            document.getElementById("aktivitiDESKRIPSI").style.borderColor = "red";
            document.getElementById("aktivitiDESKRIPSI").focus();
        }
        if (aktivitiPRINGKAT_FK.length == 0) {
            document.getElementById("aktivitiPRINGKAT_FK").style.borderColor = "red";
            document.getElementById("aktivitiPRINGKAT_FK").focus();
        } if (aktivitiJAWATAN_FK.length == 0) {
            document.getElementById("aktivitiJAWATAN_FK").style.borderColor = "red";
            document.getElementById("aktivitiJAWATAN_FK").focus();
        }
        checktoPass = false;
    }
    if (_sukan.length == 0 && _sukanlibat.length == 0 && aktivitiDESKRIPSI.length == 0 && aktivitiPRINGKAT_FK.length == 0 && aktivitiJAWATAN_FK.length == 0) {
        checktoPass = false;
    }
    if (checktoPass == false) {
        swal.fire({
            text: "Rekod anda tidak lengkap",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "OK",
            customClass: {
                confirmButton: "btn font-weight-bold btn-light-primary"
            }
        }).then(function () {
            KTUtil.scrollTop();
        });
    }
    return checktoPass;
}

