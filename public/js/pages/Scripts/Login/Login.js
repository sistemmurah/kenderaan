"use strict";

var PendaftaranWaran = function () {
    var _dataTableInit = function () {
        var t;

        $("#NOKP").inputmask({ mask: "999999-99-9999", placeholder: "" })
        $("#KATANAMA").inputmask({ mask: "999999-99-9999", placeholder: "" })
        


        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _username = $('#username').val();
            var _password = $('#password').val();            
            
            if (_username.length == 0 && _password.length == 0) {
                toastr.warning("Mesejnya disini", "Sila pastikan semua lengkap.");
                _ok = false;
            }
            
            if (_ok) {
                var _askText = "Are you sure to SAVE this record ?";
                var _path = $('#IdPathServer').val();
                var event = _path + '/Login/Process_LoginAjax';
                var _data = JSON.stringify({
                    'USERNAME': _username, 'PASSWORD': _password
                });
                
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            toastr.success("-", "Berjaya Login.");
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            window.location.href = _path + '/Senarai/Permohonan';
                        }
                        else if (res.RESULTSET == "3") {
                            toastr.success("-", "Berjaya Login.");
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            window.location.href = _path + '/BorangPermohonan/Lantikan';
                        }
                        else if (res.RESULTSET == "4") {
                            toastr.warning("Kata Laluan tidak sah, cuba lagi.");
                            
                            $('#status').html("Kata Laluan tidak sah, cuba lagi");
                        }
                        else if (res.RESULTSET == "5") {
                            toastr.warning("Rekod tidak wujud");
                            $('#status').html("Rekod tidak wujud, sila daftar");
                        }
                        else {
                            toastr.warning("Sila Semak Semula", "Tidak Berjaya Login.");
                            $('#status').click().delay(8500);
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

        $('#kt_login_forgot_submit').click(function (e) {
            
            var _ok = true;
            var _email = $('#EMAILS').val();

            if (_email.length == 0 ) {
                toastr.warning("Mesejnya disini", "Sila pastikan semua lengkap.");
                _ok = false;
            }

            if (_ok == true) {
                var _askText = "Are you sure to SAVE this record ?";
                var _path = $('#IdPathServer').val();
                var event = _path + '/Login/ForgotPassword';
                var _data = JSON.stringify({
                    'EMAIL': _email
                });
                alert("x");
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        var _res = res.RESULTSET_CODE;
                        if (_res == "1") {
                            Swal.fire(
                                "Reset!",
                                _res.RESULTSET_TEXT,
                                "success"
                            );
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

function papar() {
    var _username = $('#ddlRby').val();
    if (_username == "ic") {        
        $("#mykadbox").show();
        $("#emailbox").hide();
    }
    if (_username == "email") {
        $("#mykadbox").hide();
        $("#emailbox").show();
    }
}
