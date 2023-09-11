"use strict";
// delete function
function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _PENDIDIKANTINGGI_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/PendidikanTinggiDeleteAjax';
    var _data = JSON.stringify({
        'PENDIDIKANTINGGI_PK': _PENDIDIKANTINGGI_PK, 'KOD_PROCESS': _kod
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
        document.getElementById("PNGK_LAIN").disabled = true;
        document.getElementById("PNGKCGPA").disabled = false;        
    } else {
        x.style.display = "none";
        y.style.display = "block";
        $('#PNGKCGPA').val('');
        document.getElementById("PNGK_LAIN").disabled = false;
        document.getElementById("PNGKCGPA").disabled = true;       
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
                $('#BIDANG_FK').chosen('destroy');
                $('#BIDANG_FK').chosen();  
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
                $('#INSTITUT_NAMA').chosen('destroy');
                $('#INSTITUT_NAMA').chosen();  

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
        




        $("#INSTITUT_NAMA").chosen();     
        $("#JENIS_INSTITUSI").chosen();     
        $("#TAHAP_FK").chosen();     
        $("#BIDANG_FK").chosen();     

        $("#Pengkhususan").chosen();  

        var paparanSkrin = $('#paparanSkrin').val();

        var gredCheck = $('#GRED').val();

        if (gredCheck == "PNGK/CGPA") {
            document.getElementById("PNGK_LAIN").disabled = true;
        }



        if (paparanSkrin == " disabled ") {
            document.getElementById('kt_datepicker_1').disabled = 'disabled';
           
            $('#JENIS_INSTITUSI').prop('disabled', true).trigger("chosen:updated");
            $('#INSTITUT_NAMA').prop('disabled', true).trigger("chosen:updated");
            $('#TAHAP_FK').prop('disabled', true).trigger("chosen:updated");
            document.getElementById('KELAYAKAN_LAIN').disabled = 'disabled';
            
            $('#BIDANG_FK').prop('disabled', true).trigger("chosen:updated");

            document.getElementById('kt_datepicker_3').disabled = 'disabled';
            document.getElementById('GRED1').disabled = 'disabled';
            document.getElementById('GRED2').disabled = 'disabled';
            document.getElementById('kt_datepicker_2').disabled = 'disabled';
            document.getElementById('kt_datepicker_7').disabled = 'disabled';

            document.getElementById('DESKRIPSI').disabled = 'disabled';
           
            $('#Pengkhususan').prop('disabled', true).trigger("chosen:updated");

            document.getElementById('NAMA_SIJIL').disabled = 'disabled';
            document.getElementById('MINOR').disabled = 'disabled';
            document.getElementById('MAJOR').disabled = 'disabled';
            document.getElementById('PNGKCGPA').disabled = 'disabled';
            document.getElementById('PNGK_LAIN').disabled = 'disabled';




            var totalLesen = $('#ListSubjekNum').val();

            for (var i = 0; i < totalLesen; i++) {
                document.getElementById("ListSubjek[" + i + "].GRED_FK").disabled = 'disabled';
            }
            $('#KOD_SUBJEK_FK').prop('disabled', true).trigger("chosen:updated");

            document.getElementById('GRED_FK').disabled = 'disabled';




        }
       
        verify();
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


function verify() {
    var x = $('#JENIS_LAMPIRAN_FK').val();
    if (x.length > 0) {      
        document.getElementById("btnMuatNaik").disabled = false;
    }
    else {
        document.getElementById("btnMuatNaik").disabled = true;
    }

    if (x.length == 0) {
        swal.fire({
            text: "Sila pilih jenis lampiran",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "OK",
            customClass: {
                confirmButton: "btn font-weight-bold btn-light-primary"
            }
        }).then(function () {
            KTUtil.scrollTop();
        });

        return false;
    }
}


