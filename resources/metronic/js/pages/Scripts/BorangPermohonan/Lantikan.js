"use strict";


function fnCallModalMohon(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _perincian_fk = _text[1];
    var _sesi = _text[2];
    var _tahun = _text[3];
    var _kriteria = _text[4];
    var _run = false;

    // alert(_perincian_fk + "\n" + _sesi + "\n" + _tahun);
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/Process_PemohonMohonAjax';
    var _data = JSON.stringify({
        'PERINCIAN_FK': _perincian_fk, 'SESI': _sesi, 'TAHUN': _tahun
    });






   
    if (_text[4] == "4") {
        Swal.fire({
            title: "Jawatan Ini memerlukan lesen memandu?",
            text: "Anda Pasti",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Tidak",
            confirmButtonText: "Ya, saya pasti!"
        }).then(function (result) {
            if (result.value) {                
                if (_perincian_fk > 0) {
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            // alert(res.RESULTSET);
                            var _res = res.RESULTSET;
                            if (_res == "2") {                                
                                Swal.fire(
                                    "Berjaya!",
                                    "Permohonan sudah ditambah",
                                    "success"
                                );
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                                setTimeout(function () { window.location.href = _path + '/Senarai/Permohonan'; }, 2500);
                            }
                            else if (_res == "3") {
                                Swal.fire(
                                    "Ralat!",
                                    "Permohonan sudah wujud. Sila kemaskini",
                                    "error"
                                );
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                                setTimeout(function () { window.location.href = _path + '/Senarai/Permohonan'; }, 2500);
                            }
                            else {
                                Swal.fire(
                                    "Ralat!",
                                    "Tiada Rekod untuk dikemaskini",
                                    "error"
                                );
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
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
        });
    }
    else {
        if (_perincian_fk > 0) {
            $.ajax({
                type: "POST",
                url: event,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: _data,
                success: function (res) {
                    // alert(res.RESULTSET);
                    var _res = res.RESULTSET;
                    if (_res == "2") {
                        Swal.fire(
                            "Berjaya!",
                            "Permohonan sudah ditambah",
                            "success"
                        );
                        $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                        setTimeout(function () { window.location.href = _path + '/Senarai/Permohonan'; }, 2500);
                    }
                    else if (_res == "3") {
                        Swal.fire(
                            "Ralat!",
                            "Permohonan sudah wujud. Sila kemaskini",
                            "error"
                        );
                        $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                        setTimeout(function () { window.location.href = _path + '/Senarai/Permohonan'; }, 2500);
                    }
                    else {
                        Swal.fire(
                            "Ralat!",
                            "Tiada Rekod untuk dikemaskini",
                            "error"
                        );
                        $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                    }
                },
                error: function (xhr, httpStatusMessage, customErrorMessage) {
                    if (xhr.status === 410 || xhr.status === 500) {
                        alert(customErrorMessage);
                    } else {
                        Swal.fire(
                            "Ralat!",
                            "",
                            "error"
                        );
                    }
                }
            });
        }


    }


}




