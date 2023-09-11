"use strict";

var DaftarAkaun = function () {
    var _dataTableInit = function () {
        var t;
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _email = $('#IdModalEmail').val();
            var _katalaluan1 = $('#IdModalKatalLaluan1').val();
            var _katalaluan2 = $('#IdModalKatalLaluan2').val();
            var _pembayangkatalaluan = $('#IdModalPembayangKataLaluan').val();
            var _nama = $('#IdModalNama').val();
            var _nokp = $('#IdModalNoKp').val();
            var _pemohonpk = 0;
            var _pemohonfk = 0; _pemohonfk = $('#PEMOHON_FK').val();

            if (_email.length == 0 || _katalaluan1.length == 0 || _katalaluan2.length == 0 || _pembayangkatalaluan.length == 0 || _nama.length == 0 || _nokp.length == 0) {
                if (_nokp.length == 0) {
                    document.getElementById("IdModalNoKp").style.borderColor = "red";
                    if (fokus == 0) {
                        document.getElementById("IdModalNoKp").focus();
                        // $('[data-toggle="tooltip"]').tooltip(); 
                        $('[data-toggle="tooltip"]').tooltip()
                        document.getElementById("IdModalNoKp").tooltip('show');

                      
                        fokus = 1;
                    }
                }
                if (_email.length == 0) {
                    document.getElementById("IdModalEmail").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalEmail").focus(); fokus = 1; }
                }
                if (_katalaluan1.length == 0) {
                    document.getElementById("IdModalKatalLaluan1").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalKatalLaluan1").focus(); fokus = 1; }
                }
                if (_katalaluan2.length == 0) {
                    document.getElementById("IdModalKatalLaluan2").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalKatalLaluan2").focus(); fokus = 1; }
                }
                if (_pembayangkatalaluan.length == 0) {
                    document.getElementById("IdModalPembayangKataLaluan").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalPembayangKataLaluan").focus(); fokus = 1; }
                }
                if (_nama.length == 0) {
                    document.getElementById("IdModalNama").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalNama").focus(); fokus = 1; }
                }
                toastr.warning("Mesejnya disini", "Sila pastikan semua lengkap. ");
                _ok = false;



            }


            if (_ok == true) {
                var _askText = "Are you sure to SAVE this record ?";


                var _path = $('#IdPathServer').val();
                var event = _path + '/Home/MtdDaftarAkaunSaveAjax';
                var _data = JSON.stringify({
                    'EMAIL': _email, 'KATALALUAN1': _katalaluan1, 'KATALALUAN2': _katalaluan2, 'PEMBAYANG': _pembayangkatalaluan, 'NAMA': _nama, 'NO_KP': _nokp, 'PEMOHON_PK': _pemohonpk
                });
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            toastr.success("Mesejya disini", "Berjaya Simpan.");
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            
                            setTimeout(function () {

                                window.location.href = _path + '/Login';

                            }, 8000);
                        }
                        else if (res.RESULTSET == "3") {
                            toastr.warning("Rekod No Kp sudah wujud", "Sila set semula katalaluan jika terlupa.");
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            
                        }
                        else {
                            toastr.warning("Mesejnya disini", "Tidak Berjaya Simpan.");
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

                $('#tt').on({
                    "click": function () {
                        $(this).tooltip({ items: "#tt", content: "Displaying on click" });
                        $(this).tooltip("open");
                    },
                    "mouseout": function () {
                        $(this).tooltip("disable");
                    }
                });

            }


        }
        ); //Tutup Sini
    }

    return {
        // public functions
        init: function () {
            _dataTableInit();
        }
    };

}();

jQuery(document).ready(function () {
    DaftarAkaun.init();
});

function compareKp() {

    var _ok = true;
    var _email = $('#IdModalEmail').val();
    var _katalaluan1 = $('#IdModalKatalLaluan1').val();
    var _katalaluan2 = $('#IdModalKatalLaluan2').val();
    var _pembayangkatalaluan = $('#IdModalPembayangKataLaluan').val();
    var _nama = $('#IdModalNama').val();
    var _nokp = $('#IdModalNoKp').val();
    var _pemohonpk = 0;
    var _pemohonfk = 0; _pemohonfk = $('#PEMOHON_FK').val();


    if (_email.length == 0 && _katalaluan1.length == 0 && _katalaluan2.length == 0 && _pembayangkatalaluan.length == 0 && _nama.length == 0 && _nokp.length == 0) {
        toastr.warning("Mesejnya disini", "Sila pastikan semua lengkap.");
        _ok = false;
    }

    if (_ok) {
        var _askText = "Are you sure to SAVE this record ?";


        var _path = $('#IdPathServer').val();
        var event = _path + '/Home/MtdSemakNoKpAjax';
        var _data = JSON.stringify({
            'EMAIL': _email, 'KATALALUAN1': _katalaluan1, 'KATALALUAN2': _katalaluan2, 'PEMBAYANG': _pembayangkatalaluan, 'NAMA': _nama, 'NO_KP': _nokp, 'PEMOHON_PK': _pemohonpk
        });
        $.ajax({
            type: "POST",
            url: event,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: _data,
            success: function (res) {
                if (res.RESULTSET == "3") {
                    toastr.warning("Sila set semula kata laluan jika terlupa.", "Rekod No Kp sudah wujud");
                    $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                   
                }
                else if (res.RESULTSET == "4") {
                    toastr.warning("Sila masukan email yang lain.", "Rekod Email sudah wujud");
                    $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                    
                }
                else if (res.RESULTSET == "0") {
                    
                }
                else {
                    toastr.warning("Messagenya disini", "Tidak Berjaya Simpan.");
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



}

