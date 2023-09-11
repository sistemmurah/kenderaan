"use strict";
// delete function
function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var SEJLUAR_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/PengalamanSimpan';
    var _data = JSON.stringify({
        'SEJLUAR_PK': SEJLUAR_PK, 'STATUS': _kod
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

    $.ajax({
        type: "POST",
        url: event,
        dataType: "html",
        contentType: "application/json; charset=utf-8",
        data: _data
    });
}
function filterNegeri() {
    var _value = $('#KODNEGARA_FK').val();
    var _path = $('#IdPathServer').val();
    var _jenis = "filterNegeri";

    var allsubjek = "";
    var _data = JSON.stringify({
        'JENIS': _jenis, 'VALUE': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/BorangPermohonan/MtdDropDownList",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#NEGERI_FK').html(_html);
                $('#NEGERI_FK').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#NEGERI_FK').append(_html);
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



var PendSekTambah = function () {
    var _dataTableInit = function () {
        var t;
        var _path = $('#IdPathServer').val();

        var x = $('#RESULTSET').val();
        if (x == "2") {
            Swal.fire(
                "Simpan!",
                "Rekod telah disimpan",
                "success"
            );
        }

        $("#KODNEGARA_FK").chosen();
        $("#NEGERI_FK").chosen();




        // Script untuk filter
        $('#KODNEGARA_FK').change(function (e) {
            var _value = $('#KODNEGARA_FK').val();
            if (_value == "MYS") {
                document.getElementById("NEGERI_FK").disabled = false;
            }
            else {
                document.getElementById("NEGERI_FK").disabled = true;
                $('#NEGERI_FK').val('');
            }
        });



        var paparanSkrin = $('#paparanSkrin').val();
        if (paparanSkrin == " disabled ") {
            document.getElementById('NAMA_JAWATAN').disabled = 'disabled';
            document.getElementById('GAJI_AKHIR').disabled = 'disabled';
            document.getElementById('STATUS_MAJIKAN').disabled = 'disabled';

            document.getElementById('NAMA_MAJIKAN').disabled = 'disabled';
            document.getElementById('ALAMAT1').disabled = 'disabled';
            document.getElementById('ALAMAT2').disabled = 'disabled';
            document.getElementById('MyContentPlaceHolder_txtPoskod').disabled = 'disabled';
            $('#KODNEGARA_FK').prop('disabled', true).trigger("chosen:updated");
            $('#NEGERI_FK').prop('disabled', true).trigger("chosen:updated");

            document.getElementById('kt_datepicker_1').disabled = 'disabled';
            document.getElementById('kt_datepicker_2').disabled = 'disabled';
            document.getElementById('TARAF_PEKERJAAN').disabled = 'disabled';
            document.getElementById('NAMA_PENYELIA').disabled = 'disabled';
            document.getElementById('JAWATAN_PENYELIA').disabled = 'disabled';
            document.getElementById('TEL_NO_PENYELIA').disabled = 'disabled';
            document.getElementById('SEBAB_BERHENTI').disabled = 'disabled';




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



function checkPengalaman() {
    var checkBox = document.getElementById("checkPengalaman");
    var PERMOHONAN_FK = $('#PERMOHONAN_FK').val();
    var _path = $('#IdPathServer').val();



    var _kod = "";
    if (checkBox.checked == true) { _kod = "Y"; }
    if (checkBox.checked == false) { _kod = "T"; }


    var event = _path + '/BorangPermohonan/PengalamanStatus';
    var _data = JSON.stringify({
        'PERMOHONAN_FK': PERMOHONAN_FK, 'RESULTSET': _kod
    });


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
            }
            else if (result.dismiss === "cancel") {
                Swal.fire(
                    "Batal",
                    "Rekod anda tidak dihapus",
                    "error"
                )
                document.getElementById("checkPengalaman").checked = false;
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
