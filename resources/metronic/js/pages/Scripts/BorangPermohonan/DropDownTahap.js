"use strict";

$('#IdModalItemTahap').change(function (e) {
    var _value = $('#IdModalItemTahap').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'TahapList': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/BorangPermohonan/MtdGetTahapListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";

            if (res != null) {
                $('#IdModalItemSubjek').html(_html);
                $('#IdModalItemSubjek').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#IdModalItemSubjek').append(_html);
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

});