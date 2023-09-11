"use strict";
var JadualGaji = function () {
    var _dataTableInit = function () {
        var t;

        $("#IdTableList").DataTable({
            responsive: !0,
            dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            //buttons: ["print", "excelHtml5", "pdfHtml5"],
            buttons: [],
            pageLength: 10,
            "paging": false,
            "info": false
            //"ordering": false,

        }),
            $("#IdTableList2").DataTable({
                responsive: !0,
                dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
                //buttons: ["print", "excelHtml5", "pdfHtml5"],
                buttons: [],
                pageLength: 10,
                "paging": false,
                "info": false
                //"ordering": false,

            }),
            $("#export_print").on("click", function (e) { e.preventDefault(), t.button(0).trigger() }),
            $("#export_excel").on("click", function (e) { e.preventDefault(), t.button(2).trigger() }),
            $("#export_pdf").on("click", function (e) { e.preventDefault(), t.button(4).trigger() })

        $('#btnSubmit').click(function (e) {
            var _ok = true;
            var _jawatanpk = $('#JAWATAN_PK').val();
            var _perincianpk = $('#PERINCIAN_PK').val();
            var _kodJawatanUtm = $('#IdItemKodUTM').val();
            var _kodjawatanjpa = $('#IdGetKodJPA').val();
            var _tanggamin = $('#idTanggaMinGaji').val();
            var _tanggamax = $('#idTanggaMaxGaji').val();
            var _gajimin = $('#idGajiMin').val();
            var _gajimax = $('#idGajiMax').val();
            var _peringkat = $('#IdPeringkat').val();
            var _kadarNaikGaji = $('#idKadarNaikGaji').val();
            var _kampus = $('#IdItemKampus').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            _kodProcess = '';

            if (_peringkat.length == 0 || _tanggamin.length == 0 || _tanggamax.length == 0 || _gajimin == 0.00 || _gajimax == 0.00 ||
                _kadarNaikGaji.length == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT GAJI.");
                _ok = false;
            }
            if (_ok) {
                alert(_kodProcess + " " + _jawatanpk + " " + _perincianpk + " " + _kodjawatanjpa + " " + _tanggamin + " " + _tanggamax + " " + _gajimin + " " + _gajimax + " " + _peringkat
                    + " " + _kodJawatanUtm + " " + _kampus);

                var _askText = "Adakah anda pasti SIMPAN rekod ini ?";
                if (_kodProcess == "HAPUS") {
                    _askText = "Adakah anda pasti HAPUS rekod ini ?";
                } else if (_kodProcess == "KEMASKINI") {
                    _askText = "Adakah anda pasti KEMASKINI rekod ini ?";
                }
                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/PreServices/MtdGajiSaveAjax';
                    var _data = JSON.stringify({
                        'KOD_JAWATAN_JPA': _kodjawatanjpa, 'KODPROCESS': _kodProcess, 'TanggaMin': _tanggamin, 'TanggaMax': _tanggamax, 'GajiMin': _gajimin,
                        'GajiMax': _gajimax, 'PERINCIAN_PK': _perincianpk, 'PERINGKAT': _peringkat, 'KADAR_NAIK_GAJI': _kadarNaikGaji
                    });

                    if (_kodjawatanjpa != null) {
                        $.ajax({
                            type: "POST",
                            url: event,
                            dataType: "json",
                            contentType: "application/json; charset=utf-8",
                            data: _data,
                            success: function (res) {
                                if (res.RESULTSET == "2") {
                                    if (_kodProcess == "KEMASKINI") {
                                        toastr.success("Maklumat telah dikemaskini", "Berjaya Kemasini.");

                                        window.location.href = _path + '/Waran/TambahJawatan/' + _jawatanpk + '~' + _perincianpk;
                                    } else if (_kodProcess == "HAPUS") {
                                        toastr.success("Maklumat telah dihapus", "Berjaya Hapus.");
                                        window.location.reload("Refresh");
                                    } else {
                                        toastr.success("Maklumat telah disimpan", "Berjaya Simpan.");

                                        if (_jawatanpk > 0 && _perincianpk > 0) {
                                            window.location.href = _path + '/Waran/TambahJawatan/' + _jawatanpk + '~' + _perincianpk;
                                        } else {
                                            window.location.href = _path + '/PreServices/JadualGaji/' + _jawatanpk + '~' + _perincianpk + '~' + _kodjawatanjpa + '~' + _kodJawatanUtm + '~' + _kampus;
                                        }
                                    }
                                    //saveUnsave();

                                } else if (res.RESULTSET == "-1") {
                                    toastr.warning("Peringkat Gaji Telah Wujud.", "ALERT!");
                                } else {
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
            }
        });

        $('#btnSubmitElaun').click(function (e) {
            var _ok = true;
            var _jawatanpk = 0;
            var _perincianpk = 0;
            var _elaunPk = $('#ELAUN_TETAP_PK').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();

            var _kodUtm = $('#IdItemKodUTM').val();
            var _kodJpa = _kodUtm.substring(0, 4);
            var _kampus = $('#IdItemKampus').val();
            var _kodElaun = $('#idKod').val();
            var _descElaun = $('#idDeskripsi').val();
            var _amaunElaun = $('#idAmaun').val();
            var _tkhMula = $('#idTkhMula').val();
            var _tkhTamat = $('#idTkhTamat').val();

            if (_kodElaun.length == 0 || _amaunElaun.length == 0 || _tkhMula.length == 0 || _tkhTamat.length == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT ELAUN.");
                _ok = false;
            }
            if (_ok) {
                //alert(_kodUtm + " " + _kampus + " " + _kodElaun + " " + _descElaun + " " + _amaunElaun + " " + _tkhMula
                //    + " " + _tkhTamat + " " + _elaunPk);

                var _askText = "Adakah anda pasti SIMPAN rekod ini ?";

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/PreServices/MtdElaunSaveAjax';
                    var _data = JSON.stringify({
                        'KODPROCESS': _kodProcess, 'ELAUN_TETAP_PK': _elaunPk, 'KOD_JAWATAN': _kodUtm, 'FLAG': _kampus, 'KOD': _kodElaun, 'AMAUN': _amaunElaun,
                        'TKH_MULA': _tkhMula, 'TKH_TAMAT': _tkhTamat
                    });

                    if (_kodUtm != null) {
                        $.ajax({
                            type: "POST",
                            url: event,
                            dataType: "json",
                            contentType: "application/json; charset=utf-8",
                            data: _data,
                            success: function (res) {
                                if (res.RESULTSET == "2") {
                                    toastr.success("Maklumat telah disimpan", "Berjaya Simpan.");
                                    window.location.href = _path + '/PreServices/JadualGaji/' + _jawatanpk + '~' + _perincianpk
                                        + '~' + _kodJpa + '~' + _kodUtm + '~' + _kampus;

                                } else if (res.RESULTSET == "-1") {
                                    toastr.warning("Maklumat elaun telah wujud", "Rekod Telah Wujud.");
                                } else {
                                    toastr.warning("Maklumat tidak berjaya disimpan", "Tidak Berjaya Simpan.");
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

            }

        });

        $('#btnModalSubmit').click(function (e) {
            var _ok = true;
            var _jawatanpk = $('#JAWATAN_PK').val();
            var _perincianpk = $('#PERINCIAN_PK').val();
            var _kodJawatanUtm = $('#IdItemKodUTM').val();
            var _kodjawatanjpa = $('#IdGetKodJPA').val();
            var _tanggamin = $('#idModalTanggaMinGaji').val();
            var _tanggamax = $('#idModalTanggaMaxGaji').val();
            var _gajimin = $('#idModalGajiMin').val();
            var _gajimax = $('#idModalGajiMax').val();
            var _peringkat = $('#IdModalItemPeringkat').val();
            var _tkhMula = $('#IdModalItemTkhMula').val();
            var _tkhTamat = $('#IdModalItemTarikhTamat').val();
            var _kadarNaikGaji = $('#idModalKadarNaikGaji').val();
            var _kampus = $('#IdItemKampus').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();

            if (_kodJawatanUtm.length == 0 || _kodjawatanjpa.length == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT GAJI.");
                _ok = false;
            }
            if (_ok) {
                //alert(_kodUtm + " " + _kampusModal + " " + _kodElaunModal + " " + _descElaun + " " + _amaunElaunModal + " " + _tkhMulaModal
                //    + " " + _tkhTamatModal + " " + _elaunPk);

                var _askText = "";
                if (_kodProcess == "HAPUS") {
                    _askText = "Adakah anda pasti HAPUS rekod ini ?";
                } else if (_kodProcess == "KEMASKINI") {
                    _askText = "Adakah anda pasti KEMASKINI rekod ini ?";
                }

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/PreServices/MtdGajiSaveAjax';
                    var _data = JSON.stringify({
                        'KOD_JAWATAN_JPA': _kodjawatanjpa, 'KODPROCESS': _kodProcess, 'TanggaMin': _tanggamin, 'TanggaMax': _tanggamax, 'GajiMin': _gajimin,
                        'GajiMax': _gajimax, 'PERINCIAN_PK': _perincianpk, 'PERINGKAT': _peringkat, 'TKH_MULA': _tkhMula, 'TKH_TAMAT': _tkhTamat, 'KADAR_NAIK_GAJI': _kadarNaikGaji
                    });

                    if (_kodjawatanjpa != null) {
                        $.ajax({
                            type: "POST",
                            url: event,
                            dataType: "json",
                            contentType: "application/json; charset=utf-8",
                            data: _data,
                            success: function (res) {
                                if (res.RESULTSET == "2") {
                                    if (_kodProcess == "KEMASKINI") {
                                        toastr.success("Maklumat telah dikemaskini", "Berjaya Kemasini.");
                                    } else if (_kodProcess == "HAPUS") {
                                        toastr.success("Maklumat telah dihapus", "Berjaya Hapus.");
                                    }
                                    window.location.href = _path + '/PreServices/JadualGaji/' + _jawatanpk + '~' + _perincianpk
                                        + '~' + _kodjawatanjpa + '~' + _kodJawatanUtm + '~' + _kampus;

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

            }

        });

        $('#btnModalSubmitElaun').click(function (e) {
            var _ok = true;
            var _jawatanpk = 0;
            var _perincianpk = 0;
            var _elaunPk = $('#ELAUN_TETAP_PK').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();

            var _kodUtm = $('#IdItemKodUTM').val();
            var _kodJpa = _kodUtm.substring(0, 4);
            var _kampusModal = $('#IdModalItemKampus').val();
            var _kodElaunModal = $('#IdModalItemKod').val();

            var _descElaun = $('#idDeskripsi').val();
            var _amaunElaunModal = $('#IdModalItemAmaun').val();
            var _tkhMulaModal = $('#IdModalItemTkhMula').val();
            var _tkhTamatModal = $('#IdModalItemTarikhTamat').val();

            if (_kodElaunModal.length == 0 || _amaunElaunModal.length == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT ELAUN.");
                _ok = false;
            }
            if (_ok) {
                //alert(_kodUtm + " " + _kampusModal + " " + _kodElaunModal + " " + _descElaun + " " + _amaunElaunModal + " " + _tkhMulaModal
                //    + " " + _tkhTamatModal + " " + _elaunPk);

                var _askText = "";
                if (_kodProcess == "HAPUS") {
                    _askText = "Adakah anda pasti HAPUS rekod ini ?";
                } else if (_kodProcess == "KEMASKINI") {
                    _askText = "Adakah anda pasti KEMASKINI rekod ini ?";
                }

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/PreServices/MtdElaunSaveAjax';
                    var _data = JSON.stringify({
                        'KODPROCESS': _kodProcess, 'ELAUN_TETAP_PK': _elaunPk, 'KOD_JAWATAN': _kodUtm, 'FLAG': _kampusModal, 'KOD': _kodElaunModal, 'AMAUN': _amaunElaunModal,
                        'TKH_MULA': _tkhMulaModal, 'TKH_TAMAT': _tkhTamatModal
                    });

                    if (_kodUtm != null) {
                        $.ajax({
                            type: "POST",
                            url: event,
                            dataType: "json",
                            contentType: "application/json; charset=utf-8",
                            data: _data,
                            success: function (res) {
                                if (res.RESULTSET == "2") {
                                    if (_kodProcess == "KEMASKINI") {
                                        toastr.success("Maklumat telah dikemaskini", "Berjaya Kemasini.");
                                    } else if (_kodProcess == "HAPUS") {
                                        toastr.success("Maklumat telah dihapus", "Berjaya Hapus.");
                                    } 
                                    window.location.href = _path + '/PreServices/JadualGaji/' + _jawatanpk + '~' + _perincianpk
                                        + '~' + _kodJpa + '~' + _kodUtm + '~' + _kampus;

                                } else if (res.RESULTSET == "-1") {
                                    toastr.warning("Maklumat elaun telah wujud", "Rekod Telah Wujud.");
                                } else {
                                    toastr.warning("Maklumat tidak berjaya disimpan", "Tidak Berjaya Simpan.");
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

            }

        });

        $('#IdButangSearch').click(function (e) {
            var _ok = true;
            var _kodUtm = $('#IdItemKodUTM').val();
            var _kodJpa = _kodUtm.substring(0, 4);
            var _kampus = $('#IdItemKampus').val();
            var _sistSaraan = $('#IdItemSistSaraan').val();

            var fokus = 0;

            //alert(_sistSaraan);

            if (_kodUtm.length == 0 || _kampus.length == 0) {

                if (_kodUtm.length == 0) {
                    document.getElementById("IdItemKodUTM").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdItemKodUTM").focus(); fokus = 1; }
                } else { document.getElementById("IdItemKodUTM").style.borderColor = ""; }

                if (_kampus.length == 0) {
                    document.getElementById("IdItemKampus").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdItemKampus").focus(); fokus = 1; }
                } else { document.getElementById("IdItemKampus").style.borderColor = ""; }

                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT KOD JAWATAN DAN KAMPUS.");
                _ok = false;
            }
            if (_ok) {

                var _path = $('#IdPathServer').val();
                var event = _path + '/PreServices/MtdGajiSearchAjax';
                var _data = JSON.stringify({
                    'KOD_JAWATAN': _kodUtm, 'KOD_JAWATAN_JPA': _kodJpa, 'FLAG': _kampus, 'SISTEM_SARAAN': _sistSaraan
                });

                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: 'html',
                    //dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {

                        // id dari _LayoutDemoNoAside.cshtml
                        $('#kt_body').html(res);
                    },
                    error:
                        function (res) {
                            alert("Error: " + res);
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
    JadualGaji.init();
});

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _kod = _text[1];
    var _peringkat = _text[2];
    var _kodjawatanjpa = $('#IdGetKodJPA').val();
    var _path = $('#IdPathServer').val();
    //var _gajiTable = document.getElementById("_gajiTable~~" + _text[2]);
    //var row = Number(_text[2]) + 1;

    //var _tfoot = document.getElementById("_tfoot~~" + row);
    //_tfoot.style.display = "";

    //document.getElementById("rowNo_" + row).innerHTML = _text[2];
    //_gajiTable.style.display = "none";

    var event = _path + '/PreServices/MtdCapaiGajiByKodJpaAjax';
    var _data = JSON.stringify({
        'KOD_JAWATAN_JPA': _kodjawatanjpa, 'KODPROCESS': _kod, 'PERINGKAT': _peringkat
    });

    if (_kodjawatanjpa != null) {
        $.ajax({
            type: "POST",
            url: event,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: _data,
            success: function (res) {
                var _res = res.RESULTSET;
                if (_res == "2") {
                    var _textNya = "Simpan";
                    if (_kod == "HAPUS") {
                        _textNya = "Hapus Gaji";
                    } else if (_kod == "KEMASKINI") {
                        _textNya = "Kemaskini Gaji";
                    }
                    $('#IdModalItemButangAction').html(_textNya);
                    $('#IdGetKodJPA').val(_kodjawatanjpa);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#idModalTanggaMinGaji').val(res.TanggaMin);
                    $('#idModalTanggaMaxGaji').val(res.TanggaMax);
                    $('#idModalGajiMin').val(res.GajiMin);
                    $('#idModalGajiMax').val(res.GajiMax);
                    $('#IdModalItemPeringkat').val(res.PERINGKAT);
                    $('#idModalKadarNaikGaji').val(res.KADAR_NAIK_GAJI);

                    $("#IdModalItemTkhMulaGaji").datepicker({ todayHighlight: false, format: 'dd M yyyy' }).datepicker("setDate", res.PAPAR_TKH_MULA);
                    $("#IdModalItemTarikhTamatGaji").datepicker({ todayHighlight: false, format: 'dd M yyyy' }).datepicker("setDate", res.PAPAR_TKH_TAMAT);

                    $('#m_modal_kodItem2').modal({
                        keyboard: true
                    }, 'show');
                } else {
                    toastr.warning("", "<font color='#800000'>TIADA REKOD UNTUK DIKEMASKINI</font>");
                }
            },
            error: function (xhr, _httpStatusMessage, customErrorMessage) {
                if (xhr.status === 410 || xhr.status === 500) {
                    alert(customErrorMessage);
                } else {
                    toastr.warning("", "<font color='#800000'>Error Code</font>");
                }
            }
        });
    } else {
        var _tarikhTamat = "31 Dec 9999";
        var _textNya = "Parameter Save";
        if (_kod == "SIMPAN") {
            _textNya = "Simpan Gaji";
        }
        $('#IdModalItemButangAction').html(_textNya);
        $('#IdPaparCode').html(" (" + _kod + ") ");
        $('#idModalTanggaMinGaji').val('');
        $('#idModalTanggaMaxGaji').val('');
        $('#idModalGajiMin').val('');
        $('#idModalGajiMax').val('');
        $('#IdModalItemPeringkat').val('');

        $("#IdModalItemTkhMulaGaji").datepicker({ todayHighlight: true, format: 'dd M yyyy' }).datepicker("setDate", new Date());
        $('#IdModalItemTkhMulaGaji').val('');

        $('#IdModalItemTarikhTamatGaji').val(_tarikhTamat);
        if ($('#IdModalItemTarikhTamatGaji').val(_tarikhTamat) != null) {
            $(document).ready(function () {
                $('#IdModalItemTarikhTamatGaji').datepicker({
                    orientation: "bottom left",
                    //startDate: "31/12/9999",
                    format: "dd M yyyy"
                })
            });
        }
    }
}

function fnCallModalItemElaun(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _elaunPk = _text[0];
    var _kod = _text[1];

    //alert(_elaunPk + " " + _kod);
    var _path = $('#IdPathServer').val();
    var event = _path + '/PreServices/MtdCapaiElaunByPkAjax';
    var _data = JSON.stringify({
        'ELAUN_TETAP_PK': _elaunPk, 'KODPROCESS': _kod
    });

    if (_elaunPk > 0) {
        $.ajax({
            type: "POST",
            url: event,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: _data,
            success: function (res) {
                var _res = res.RESULTSET;
                if (_res == "2") {
                    var _textNya = "Simpan";
                    if (_kod == "HAPUS") {
                        _textNya = "Hapus";
                    } else if (_kod == "KEMASKINI") {
                        _textNya = "Kemaskini";
                    }
                    $('#IdModalItemButangActionElaun').html(_textNya);
                    $('#ELAUN_TETAP_PK').val(res.ELAUN_TETAP_PK);
                    $('#IdModalItemKod').val(res.KOD);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemAmaun').val(res.AMAUN);
                    $('#IdModalItemKampus').val(res.FLAG);

                    $("#IdModalItemTkhMula").datepicker({ todayHighlight: false, format: 'dd M yyyy' }).datepicker("setDate", res.PAPAR_TKH_MULA);
                    $("#IdModalItemTarikhTamat").datepicker({ todayHighlight: false, format: 'dd M yyyy' }).datepicker("setDate", res.PAPAR_TKH_TAMAT);

                    $('#m_modal_kodItem').modal({
                        keyboard: true
                    }, 'show');

                } else {
                    toastr.warning("", "<font color='#800000'>TIADA REKOD UNTUK DIKEMASKINI</font>");
                }
            },
            error: function (xhr, _httpStatusMessage, customErrorMessage) {
                if (xhr.status === 410 || xhr.status === 500) {
                    alert(customErrorMessage);
                } else {
                    toastr.warning("", "<font color='#800000'>Error Code</font>");
                }
            }
        });

    } else {
        var _tarikhTamat = "31 Dec 9999";

        $('#IdModalItemTkhMula').val('');
        if ($('#IdModalItemTkhMula').val('') != null) {
            $(document).ready(function () {
                $('#IdModalItemTkhMula').datepicker({
                    orientation: "bottom left",
                    todayHighlight: true,
                    format: 'dd/mm/yyyy'
                })
            });
        }

        $('#IdModalItemTarikhTamat').val(_tarikhTamat);
        if ($('#IdModalItemTarikhTamat').val(_tarikhTamat) != null) {
            $(document).ready(function () {
                $('#IdModalItemTarikhTamat').datepicker({
                    orientation: "bottom left",
                    format: "dd M yyyy"
                })
            });
        }

        $('#m_modal_kodItem').modal({
            keyboard: true
        }, 'show');
    }
}

function dateFormat(d) {
    console.log(d);
    return ((d.getDate() + "").padStart(2, "0")
        + "/" + (d.getMonth() + 1) + "").padStart(2, "0")
        + "/" + d.getFullYear();
}




