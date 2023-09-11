"use strict";
var Keputusan = function () {
    var _dataTableInit = function () {
        var t;
        $("#IdTableList").DataTable({
            responsive: !0,
            //dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            //buttons: ["print", "excelHtml5", "pdfHtml5"],
            buttons: [],
            pageLength: 10,
            "paging": true,
            "info": true
            //"ordering": false,

        }),
            $("#export_print").on("click", function (e) { e.preventDefault(), t.button(0).trigger() }),
            $("#export_excel").on("click", function (e) { e.preventDefault(), t.button(2).trigger() }),
            $("#export_pdf").on("click", function (e) { e.preventDefault(), t.button(4).trigger() })

        $('#IdBtnModalItemSaveKodItem').click(function (e) {
            var _ok = true;
            var _resultPk = $('#IdModalItemHiddenResultPk').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _jlIpsb = $('#IdModalItemJalinan').val();
            var _wsIpsb = $('#IdModalItemWawasan').val();
            var _kpIpsb = $('#IdModalItemKeprihatinan').val();
            var _esIpsb = $('#IdModalItemEfisyen').val();
            var _keIpsb = $('#IdModalItemKestabilanEmosi').val();
            var _tkIpsb = $('#IdModalItemTidakKongruen').val();
            var _allIpsb = $('#IdModalItemKeseluruhan').val();
            var _statusAktif = $('#IdModalItemStatusAktifKonstruk').val();
            var _tkhKuasa = $('#IdModalItemTarikhKuatKuasa').val();
            var _tkhTamat = $('#IdModalItemTarikhTamat').val();

            var x = new Date(_tkhKuasa);
            var y = new Date(_tkhTamat);

            if (_jlIpsb.length == 0 || _wsIpsb.length == 0 || _kpIpsb.length == 0 || _esIpsb.length == 0 || _keIpsb.length == 0 || _tkIpsb.length == 0
                || _allIpsb.length == 0 || _statusAktif.length == 0 || _tkhKuasa.length == 0 || _tkhTamat.length == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT KEPUTUSAN KONSTRUK.");
                _ok = false;
            }
            if (_ok) {
                if (+x < +y) {
                    var _askText = "Adakah anda pasti SIMPAN rekod ini ?";
                    if (_kodProcess == "KEMASKINI") {
                        _askText = "Adakah anda pasti KEMASKINI rekod ini ?";
                    }
                    if (confirm(_askText)) {
                        var _path = $('#IdPathServer').val();
                        var event = _path + '/PreServices/MtdResultKonstrukSaveAjax';
                        var _data = JSON.stringify({
                            'IPSB_RESULT_PK': _resultPk, 'KODPROCESS': _kodProcess, 'JL_RESULT_FK': _jlIpsb, 'WS_RESULT_FK': _wsIpsb,
                            'KP_RESULT_FK': _kpIpsb, 'ES_RESULT_FK': _esIpsb, 'KE_RESULT_FK': _keIpsb, 'TK_RESULT_FK': _tkIpsb,
                            'ALL_RESULT_FK': _allIpsb, 'STATUS_AKTIF': _statusAktif, 'TKH_KUATKUASA': _tkhKuasa, 'TKH_TAMAT': _tkhTamat
                        });

                        $.ajax({
                            type: "POST",
                            url: event,
                            dataType: "json",
                            contentType: "application/json; charset=utf-8",
                            data: _data,
                            success: function (res) {
                                if (res.RESULTSET == "2") {
                                    if (_kodProcess == "SIMPAN") {
                                        toastr.success("Maklumat telah disimpan", "Berjaya Simpan.");
                                    } else if (_kodProcess == "KEMASKINI") {
                                        toastr.success("Maklumat telah dikemaskini", "Berjaya Kemasini.");
                                    }
                                    $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                                } else if (res.RESULTSET == "-1") {
                                    toastr.warning("Rekod Keputusan Konstruk Telah Wujud dan Masih Dalam Tempoh Sah", "ALERT!");
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
                } else {
                    toastr.warning("Tarikh Tamat Mesti Melebihi Dari Tarikh Kuatkuasa", "ALERT!");
                }
            }

        });

        $('#close').click(function (e){
            $('.modal').hide();
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
    Keputusan.init();
});

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _pknya = _text[0];
    var _kod = _text[1];

    //alert(_pknya + "\n" + _kod);
    var _path = $('#IdPathServer').val();
    var event = _path + '/PreServices/MtdCapaiKeputusanKonstrukByPkAjax';
    var _data = JSON.stringify({
        'IPSB_RESULT_PK': _pknya, 'KODPROCESS': _kod
    });
    if (_pknya > 0) {
        $.ajax({
            type: "POST",
            url: event,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: _data,
            success: function (res) {
                var _res = res.RESULTSET;
                if (_res == "2") {
                    var _textNya = "Parameter Save";
                    if (_kod == "HAPUS") {
                        _textNya = "Rekod HAPUS";
                    } else if (_kod == "KEMASKINI") {
                        _textNya = "Rekod KEMASKINI ";
                    }
                    $('#IdButangAction').html(_textNya);
                    $('#IdPaparCode').html(" (" + _kod + ") ");
                    $('#IdModalItemHiddenResultPk').val(res.IPSB_RESULT_PK);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemJalinan').val(res.JL_RESULT_FK);
                    $('#IdModalItemWawasan').val(res.WS_RESULT_FK);
                    $('#IdModalItemKeprihatinan').val(res.KP_RESULT_FK);
                    $('#IdModalItemEfisyen').val(res.ES_RESULT_FK);
                    $('#IdModalItemKestabilanEmosi').val(res.KE_RESULT_FK);
                    $('#IdModalItemTidakKongruen').val(res.TK_RESULT_FK);
                    $('#IdModalItemKeseluruhan').val(res.ALL_RESULT_FK);
                    $('#IdModalItemStatusAktifKonstruk').val(res.STATUS_AKTIF);
                    $("#IdModalItemTarikhKuatKuasa").datepicker({ todayHighlight: false, format: 'dd M yyyy' }).datepicker("setDate", res.PAPAR_TKH_KUATKUASA);
                    $('#IdModalItemTarikhTamat').val(res.PAPAR_TKH_TAMAT);
                    if ($('#IdModalItemTarikhTamat').val(res.PAPAR_TKH_TAMAT) != null) {
                        $(document).ready(function () {
                            $('#IdModalItemTarikhTamat').datepicker({
                                orientation: "bottom left",
                                todayHighlight: false,
                                format: 'dd M yyyy'
                            })
                        });
                    }
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
        var _textNya = "Parameter Save";
        if (_kod == "SIMPAN") {
            _textNya = "Simpan Keputusan";
        }
        $('#IdButangAction').html(_textNya);
        $('#IdPaparCode').html(" (" + _kod + ") ");
        $('#IdModalItemHiddenResultPk').val(_pknya);
        $('#IdModalItemHiddenKodProcess').val(_kod);
        $('#IdModalItemJalinan').val('');
        $('#IdModalItemWawasan').val('');
        $('#IdModalItemKeprihatinan').val('');
        $('#IdModalItemEfisyen').val('');
        $('#IdModalItemKestabilanEmosi').val('');
        $('#IdModalItemTidakKongruen').val('');
        $('#IdModalItemKeseluruhan').val('');
        $('#IdModalItemStatusAktifKonstruk').val('');

        $("#IdModalItemTarikhKuatKuasa").datepicker({ todayHighlight: true, format: 'dd M yyyy' }).datepicker("setDate", new Date());
        $('#IdModalItemTarikhKuatKuasa').val('');

        $('#IdModalItemTarikhTamat').val(_tarikhTamat);
        if ($('#IdModalItemTarikhTamat').val(_tarikhTamat) != null) {
            $(document).ready(function () {
                $('#IdModalItemTarikhTamat').datepicker({
                    orientation: "bottom left",
                    todayHighlight: false,
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