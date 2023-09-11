"use strict";

var KeluargaTambah = function () {
    var _dataTableInit = function () {
        var t;
        $("#NoKpBaru").inputmask({ mask: "999999 99 9999", placeholder: "" })
        $("#IdModalNoTelWaris").inputmask({ mask: "999 9999 99999", placeholder: "" })


        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _nama = $('#IdModalItemNama').val();
            var _nokpbaru = $('#NoKpBaru').val();
            var _tkhlahir = $('#kt_datepicker_5').val();
            // var day = _tkhlahir.substring(0, 2);
            // var month = _tkhlahir.substring(3, 5);
            // var year = _tkhlahir.substring(6, 10);
            // _tkhlahir = month + "/" + day + "/" + year;

            var _pertaliankeluarga = $('#IdModalPertalianKeluarga').val();
            var _notelwaris = $('#IdModalNoTelWaris').val();
            var _maklumatperibadipk = 0; _maklumatperibadipk = $('#MAKLUMAT_PERIBADI_PK').val();
            var _pemohonkeluargafk = 0; _pemohonkeluargafk = $('#PEMOHON_KELUARGA_FK').val();


            if (_nama.length == 0 && _nokpbaru.length == 0 && _tkhlahir.length == 0 && _pertaliankeluarga.length == 0 && _notelwaris.length == 0) {
                toastr.warning("Messagenya disini", "PLEASE FILL-IN ALL FIELD.");
                _ok = false;
            }

            if (_ok) {
                var _path = $('#IdPathServer').val();
                var event = _path + '/BorangPermohonan/MtdDaftarKeluargaSaveAjax';
                var _data = JSON.stringify({
                    'NAMA': _nama, 'NO_KP_BARU': _nokpbaru, 'TKH_LAHIR': _tkhlahir, 'PERTALIAN_FK': _pertaliankeluarga, 'NO_TEL_WARIS': _notelwaris, 'MAKLUMAT_PERIBADI_PK': _maklumatperibadipk, 'PEMOHON_KELUARGA_FK': _pemohonkeluargafk
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
                            setTimeout(function () {
                                window.location.href = _path + '/BorangPermohonan/KeluargaEdit/' + res.MAKLUMAT_PERIBADI_PK;
                            }, 2500);                            
                        }
                        else {                           
                            Swal.fire(
                                "Ralat!",
                                "Gagal Simpan. Sila Semak Semula",
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
            document.getElementById('IdModalItemNama').disabled = 'disabled';
            document.getElementById('NoKpBaru').disabled = 'disabled';
            document.getElementById('IdModalPertalianKeluarga').disabled = 'disabled';
            document.getElementById('kt_datepicker_5').disabled = 'disabled';
            document.getElementById('IdModalNoTelWaris').disabled = 'disabled';

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
    var _maklumatperibadipk = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/Process_ButiranDeleteKeluargaAjax';
    var _data = JSON.stringify({
        'MAKLUMAT_PERIBADI_PK': _maklumatperibadipk
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

