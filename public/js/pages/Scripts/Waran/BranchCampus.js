$('#IdModalItemMainCampus').change(function (e) {
    var _value = $('#IdModalItemMainCampus').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'CAWANGAN': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriCampusListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemSubCampus').html(_html);
                $('#IdModalItemSubCampus').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].Key + " - " + res[u].ViewField + '</option>';
                    $('#IdModalItemSubCampus').append(_html);
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

//Get Sub Skim - Kod Jawatan

$('#IdModalItemSkim').change(function (e) {
    var _value = $('#IdModalItemSkim').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'KOD_KLASIFIKASI': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriSkimListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemSubSkim').html(_html);
                $('#IdModalItemSubSkim').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#IdModalItemSubSkim').append(_html);
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

    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriFungsiListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemFungsi').html(_html);
                $('#IdModalItemFungsi').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + ' - ' + res[u].Value + '</option>';
                    $('#IdModalItemFungsi').append(_html);
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

//Get Sub Kod Jawatan - Nama Jawatan

$('#IdModalItemSubSkim').change(function (e) {
    var _value = $('#IdModalItemSubSkim').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'KOD_JAWATAN': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriKodJawatanListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemSubKodJawatan').html(_html);
                //$('#IdModalItemSubKodJawatan').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    //_html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    //$('#IdModalItemSubKodJawatan').append(_html);

                    _html = res[u].Key;
                    document.getElementById("IdModalItemSubKodJawatan").value = _html;

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

//Get Sub Kod Jawatan - Nama Jawatan

$('#IdModalItemSubSkim').change(function (e) {
    var _value = $('#IdModalItemSubSkim').val();
    var _value2 = $('#IdModalItemSubSkim').val();
    var _value3 = $('#IdModalItemSubSkim').val();
    var _value4 = $('#IdModalItemSubSkim').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'KOD_JAWATAN': _value, 'KUMPULAN': _value2, 'GajiMin': _value3, 'GajiMax': _value4
    });
    //alert(_value + " " +  _value2 + " " + _value3 + " " + _value4 )
    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriKodJawatanListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            var _html2 = "";
            if (res != null) {
                $('#IdModalItemSubKodJawatan').html(_html);
                $('#IdGetKodJawatan').html(_html2);
                //$('#IdModalItemSubKodJawatan').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#IdModalItemSubKodJawatan').append(_html);

                    _html2 = '<option value="' + res[u].Key + '">' + res[u].Key + '</option>';
                    $('#IdGetKodJawatan').append(_html2);

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

    //Get Sub Nama Kumpulan - Nama Jawatan

    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriNamaJawatanListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            var _html2 = "";
            if (res != null) {
                $('#IdModalItemSubNamaJawatan').html(_html);
                $('#IdGetKodJPA').html(_html2);
                //$('#IdModalItemSubKodJawatan').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">KUMPULAN ' + res[u].ViewField + '</option>';
                    $('#IdModalItemSubNamaJawatan').append(_html);

                    //html = res[u].Key;
                    //document.getElementById("IdModalItemSubNamaJawatan").value = _html;

                    _html2 = res[u].Value;
                    document.getElementById("IdGetKodJPA").value = _html2;
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

    //Get Sub Skim Gaji

    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriGajiListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            var _html2 = "";
            var _html3 = "";
            if (res != null) {
                $('#IdModalItemGaji').html(_html);
                $('#IdModalItemGajiPokok').html(_html2);
                $('#IdModalItemGajiPokokValue').html(_html3);
                //$('#IdModalItemSubKodJawatan').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].ViewField + '">Min : RM ' + res[u].Key + ' - Mak : RM ' + res[u].ViewField + '</option>';
                    $('#IdModalItemGaji').append(_html);

                    _html2 = '<option value="' + res[u].Key + '">RM ' + res[u].Key + ' </option>';
                    $('#IdModalItemGajiPokok').append(_html2);
                    
                    _html3 = res[u].Key;
                    document.getElementById("IdModalItemGajiPokokValue").value = _html3;

                    //alert(_html3.length);
                    if (_html3.length == 1) {
                        document.getElementById("idTambahGaji").disabled = false;
                    } else {
                        document.getElementById("idTambahGaji").disabled = true;
                    }
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

//Get Sub Khusus - Khusus

$('#IdModalItemKhusus').change(function (e) {
    var _value = $('#IdModalItemKhusus').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'PENGKHUSUSAN_JAWATAN_PK': _value
    });
    $.ajax({
        type: "POST",
        url: _path + "/Waran/MtdGetSubKategoriKhususListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemSubKhusus').html(_html);
                $('#IdModalItemSubKhusus').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#IdModalItemSubKhusus').append(_html);
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

//Get Sub Deskripsi Elaun - Amaun

$('#idKod').change(function (e) {
    var _value = $('#idKod').val();
    var _value2 = $('#IdItemKampus').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'KOD': _value, 'FLAG': _value2
    });

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetSubElaunAmaunListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            var _html2 = "";
            if (res != null) {
                $('#idAmaun').html(_html);
                $('#idDeskripsi').html(_html2);

                //$('#idAmaun').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    //_html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    //$('#idAmaun').append(_html);

                    _html = res[u].Key;
                    document.getElementById("idAmaun").value = _html;

                    _html2 = res[u].Value;
                    document.getElementById("idDeskripsi").value = _html2;
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