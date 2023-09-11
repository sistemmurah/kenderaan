//MODUL WARAN

//Get Sub Skim - Gred Jawatan JPA dan Gred Jawatan UTM

$('#IdModalItemSkim').change(function (e) {
    var _value = $('#IdModalItemSkim').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'KOD_KLASIFIKASI': _value
    });

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetSubSkimListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemGredJpa').html(_html);
                $('#IdModalItemGredJpa').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#IdModalItemGredJpa').append(_html);
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
        url: _path + "/PreServices/MtdGetSubSkimUtmListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemGredUtm').html(_html);
                $('#IdModalItemGredUtm').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                    $('#IdModalItemGredUtm').append(_html);
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

//Get Sub Kod Jawatan UTM - Nama Jawatan JPA, Nama Jawatan UTM, dan Gred

$('#IdModalItemGredUtm').change(function (e) {
    var _value = $('#IdModalItemGredUtm').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'KOD_JAWATAN': _value
    });

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetSubKodJawatanListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            var _html2 = "";
            var _html3 = "";
            var _html4 = "";
            var _html5 = "";
            var _html6 = "";
            var _html7 = "";
            if (res != null) {
                $('#IdModalItemNamaJwtnJpa').html(_html);
                $('#IdModalItemNamaJwtnUtm').html(_html2);
                $('#IdModalItemGred').html(_html3);
                $('#IdModalItemProgramJpa').html(_html4);
                $('#IdModalItemBilIsiWaran').html(_html5);
                $('#IdModalItemJumlahWaran').html(_html6);
                $('#IdModalItemBilKosongWaran').html(_html7);

                $.each(res, function (u) {
                    _html = res[u].Key;
                    document.getElementById("IdModalItemNamaJwtnJpa").value = _html;

                    _html2 = res[u].ViewField;
                    document.getElementById("IdModalItemNamaJwtnUtm").value = _html2;

                    _html3 = res[u].Value;
                    document.getElementById("IdModalItemGred").value = _html3;

                    _html4 = res[u].Text;
                    document.getElementById("IdModalItemProgramJpa").value = _html4

                    _html5 = res[u].Value2;
                    document.getElementById("IdModalItemBilIsiWaran").value = _html5;

                    _html6 = res[u].Value3;
                    document.getElementById("IdModalItemJumlahWaran").value = _html6;

                    _html7 = parseInt(res[u].Value3) - parseInt(res[u].Value2);
                    document.getElementById("IdModalItemBilKosongWaran").value = _html7;
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

//Waran: Get Display Skim JPA

$('#IdModalItemSkimJpa').change(function (e) {
    var _value = $('#IdModalItemSkimJpa').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'SKIM_JPA_PK': _value
    });

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetKodSkimJpaAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemSkimJpaDsply').html(_html);

                $.each(res, function (u) {
                    _html = res[u].Key;
                    document.getElementById("IdModalItemSkimJpaDsply").value = _html;
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

//Waran: Get Display Skim

$('#IdModalItemSkim').change(function (e) {
    var _value = $('#IdModalItemSkim').val();
    document.getElementById("IdModalItemSkimDsply").value = _value;
});

//Waran: Get Singkatan Jawatan

$('#IdModalItemSgktnJwtn').change(function (e) {
    var _value = $('#IdModalItemSgktnJwtn').val();
    document.getElementById("IdModalItemSgktnJwtnDsply").value = _value;
});

//Waran: Get Kod from OD_STATUS

$('#IdModalItemOdKod').change(function (e) {
    var _value = $('#IdModalItemOdKod').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'OD_STATUS': _value
    });

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetKodAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemOdKodDsply').html(_html);

                $.each(res, function (u) {
                    _html = res[u].Key;
                    document.getElementById("IdModalItemOdKodDsply").value = _html;
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

//Waran: Get Tahun

$('#IdModalItemTahunWaran').change(function (e) {
    var _value = $('#IdModalItemTahunWaran').val();
    document.getElementById("IdModalItemTahunWaranDsply").value = _value;
});

//Get Sub Tahun - Sesi

$('#IdModalItemTahun').change(function (e) {
    var _value = $('#IdModalItemTahun').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'TAHUN': _value
    });

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetSubTahunSesiListAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemSesi').html(_html);
                $('#IdModalItemSesi').append('<option value="">Sila Pilih</option>');
                $.each(res, function (u) {
                    _html = '<option value="' + res[u].SESI + '">SESI ' + res[u].SESI + '</option>';
                    $('#IdModalItemSesi').append(_html);
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


//MODUL LANTIKAN - ADMIN

//Get NO_SOALAN Last from IPSB_KONSTRUK_FK

$('#IdModalItemKodKonstruk').change(function (e) {
    var _value = $('#IdModalItemKodKonstruk').val();
    var _value2 = $('#IdModalItemHiddenKodProcess').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
        'IPSB_KONSTRUK_FK': _value
    });

    //alert(_value2);

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetNoSoalanLastAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemNoSoalanKonstruk').html(_html);

                $.each(res, function (u) {
                    if (_value2 == "SIMPAN") {
                        _html = parseInt(res[u].Key) + 1;
                        document.getElementById("IdModalItemNoSoalanKonstruk").value = _html;
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

//MODUL SELENGGARA - KOD_JAWATAN

//Get KUMPULAN_KATEGORI from Status AKADEMIK

$('#IdModalItemStatusAkademik').change(function (e) {
    var _value = $('#IdModalItemStatusAkademik').val();
    var _path = $('#IdPathServer').val();
    var _data = JSON.stringify({
    });

    alert(_value);

    $.ajax({
        type: "POST",
        url: _path + "/PreServices/MtdGetKumpKategoriAjax",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _html = "";
            if (res != null) {
                $('#IdModalItemKumpKategori').html(_html);
                if (_value == "Y") {
                    $('#IdModalItemKumpKategori').append('<option value="">Sila Pilih</option>');
                    $.each(res, function (u) {
                        _html = '<option value="' + res[u].Key + '">' + res[u].Key + '-' + res[u].ViewField + '</option>';
                        $('#IdModalItemKumpKategori').append(_html);
                    });
                } else {
                    $('#IdModalItemKumpKategori').append('<option value="">Sila Pilih</>');
                    $('#IdModalItemKumpKategori').append(_html);
                }

            } else {
                toastr.warning("", "<font color='#800000'> Category Code  Not Found.</font>");
            }
        }, error: function (xhr, httpStatusMessage, customErrorMessage) {
            if (xhr.status === 410 || xhr.status === 500) {
                alert(customErrorMessage);
            } else {
                toastr.warning("", "<font color='#800000'>Error Code " + httpStatusMessage + "</font>");
            }
        }
    });
});



