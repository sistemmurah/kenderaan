"use strict";

var PendaftaranWaran = function () {
    var _dataTableInit = function () {
        var t;

        var RESULTSET = $('#RESULTSET').val();
        if (RESULTSET == "2") {
            Swal.fire(
                "Berjaya!",
                "Rekod telah disimpan",
                "success"
            );
        }

        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _kat_kelas = $('#IdDDKategoriLesen').val();
            var _nolesen = $('#NoLesen').val();
            var _tkhtmtlesen = $('#kt_datepicker_1').val();
            var _LESEN_MEMANDU_PK = 0; _LESEN_MEMANDU_PK = $('#LESEN_MEMANDU_PK').val();
            //var day = _tkhtmtlesen.substring(0, 2);
            //var month = _tkhtmtlesen.substring(3, 5);
            //var year = _tkhtmtlesen.substring(6, 10);
            //_tkhtmtlesen = month + "/" + day + "/" + year;
            alert(_tkhtmtlesen);
            if (_kat_kelas.length == 0 && _nolesen.length == 0 && _tkhtmtlesen.length == 0) {
                toastr.warning("Mesejnya disini", "Sila pastikan semua lengkap.");
                _ok = false;
            }

            if (_ok) {
                var _askText = "Are you sure to SAVE this record ?";
                var _path = $('#IdPathServer').val();
                var event = _path + '/BorangPermohonan/Process_ButiranLesenSaveAjax';
                var _data = JSON.stringify({
                    'KATEGORI_KELAS': _kat_kelas, 'NO_LESEN_MEMANDU': _nolesen, 'TKH_TAMAT': _tkhtmtlesen, 'LESEN_MEMANDU_PK': _LESEN_MEMANDU_PK
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
                                "Rekod anda telah ditambah",
                                "success"
                            );
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            setTimeout(function () {
                                window.location.href = _path + '/BorangPermohonan/DataAsasLesenEdit/' + res.LESEN_MEMANDU_PK;
                            }, 2500);
                        }
                        else {
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
    }

    return {
        // public functions
        init: function () {
            _dataTableInit();
        }
    };

}();

jQuery(document).ready(function () {
    PendaftaranWaran.init();
});

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");

    var _LESEN_MEMANDU_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/Process_ButiranLesenSaveAjax';
    var _data = JSON.stringify({
        'LESEN_MEMANDU_PK': _LESEN_MEMANDU_PK, 'KOD_PROCESS': _kod
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


$(document).ready(function () {
    $(document).on('change', 'input[type="checkbox"]', function (e) {

        var _kat_kelas = $('#IdDDKategoriLesen').val(); 

        // txtAlamatMenyurat1
        // txtAlamatMenyurat2
        // txtPoskodMenyurat
        // IdDDBandarMenyurat
        // IdDDNegeriMenyurat
        // IdDDKumpNegaraMenyurat

    });

});

function checkLesen() {
    var checkBox = document.getElementById("checkLesen");
    var PERMOHONAN_FK = $('#PERMOHONAN_FK').val();
    var _path = $('#IdPathServer').val();
    var _kod = "";
    if (checkBox.checked == true) { _kod = "Y"; }
    if (checkBox.checked == false) { _kod = "T"; }
    var event = _path + '/BorangPermohonan/LesenStatus';
    var _data = JSON.stringify({
        'PERMOHONAN_FK': PERMOHONAN_FK, 'RESULTSET': _kod
    });
    var run = "NO";
    if (_kod == "Y") {
        Swal.fire({
            title: "Tiada Lesen?",
            text: "Senarai Lesen akan dihapus!",
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
                document.getElementById("checkLesen").checked = false;
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

