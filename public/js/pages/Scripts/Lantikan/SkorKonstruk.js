"use strict";
var SkorKonstruk = function () {
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
            var _skorkonstrukPk = $('#IdModalItemHiddenSkorKonstrukPk').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _ipsbKonstrukFk = $('#IdModalItemKodKonstruk').val();
            var _skorMula = $('#IdModalItemSkorMulaKonstruk').val();
            var _skorAkhir = $('#IdModalItemSkorAkhirKonstruk').val();
            var _tahap = $('#IdModalItemTahapKonstruk').val();
            var _susunan = $('#IdModalItemSusunanKonstruk').val();
            var _statusAktif = $('#IdModalItemStatusAktifKonstruk').val();
            var _tarikhKuatkuasa = $('#IdModalItemTarikhKuatKuasa').val();
            var _tarikhTamat = $('#IdModalItemTarikhTamat').val();

            var x = new Date(_tarikhKuatkuasa);
            var y = new Date(_tarikhTamat);

            if (_skorkonstrukPk.length == 0 || _kodProcess.length == 0 || _ipsbKonstrukFk.length == 0 || _skorMula.length == 0
                || _skorAkhir == 0 || _tahap == 0 || _susunan == 0 || _statusAktif == 0 || _tarikhKuatkuasa == 0 || _tarikhTamat == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT SKOR KONSTRUK.");
                _ok = false;
            }
            if (_ok) {
                if (+x < +y) {
                    if (!/[^a-zA-Z]/.test(_susunan)) {
                        var _askText = "Adakah anda pasti SIMPAN rekod ini ?";
                        if (_kodProcess == "KEMASKINI") {
                            _askText = "Adakah anda pasti KEMASKINI rekod ini ?";
                        }
                        if (confirm(_askText)) {
                            var _path = $('#IdPathServer').val();
                            var event = _path + '/PreServices/MtdSkorKonstrukSaveAjax';
                            var _data = JSON.stringify({
                                'IPSB_KONSTRUK_SKOR_PK': _skorkonstrukPk, 'KODPROCESS': _kodProcess, 'IPSB_KONSTRUK_FK': _ipsbKonstrukFk, 'SKOR_MULA': _skorMula, 'SKOR_AKHIR': _skorAkhir,
                                'TAHAP_FK': _tahap, 'SUSUNAN': _susunan, 'STATUS_AKTIF': _statusAktif, 'TKH_KUATKUASA': _tarikhKuatkuasa, 'TKH_TAMAT': _tarikhTamat
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
                                        toastr.warning("Rekod Skor Konstruk Telah Wujud dan Masih Dalam Tempoh Sah", "ALERT!");
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
                        toastr.warning("Medan Susunan Mesti Dalam Abjad. ", "ALERT!");
                    }
                } else {
                    toastr.warning("Tarikh Tamat Mesti Melebihi Dari Tarikh Kuatkuasa", "ALERT!");
                }
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
    SkorKonstruk.init();
});

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _pknya = _text[0];
    var _kod = _text[1];

    //alert(_pknya + "\n" + _kod);

    var _path = $('#IdPathServer').val();
    var event = _path + '/PreServices/MtdCapaiSkorKonstrukByPkAjax';
    var _data = JSON.stringify({
        'IPSB_KONSTRUK_SKOR_PK': _pknya, 'KODPROCESS': _kod
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
                    $('#IdModalItemHiddenSkorKonstrukPk').val(res.IPSB_KONSTRUK_SKOR_PK);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemKodKonstruk').val(res.IPSB_KONSTRUK_FK);
                    $('#IdModalItemSkorMulaKonstruk').val(res.SKOR_MULA);
                    $('#IdModalItemSkorAkhirKonstruk').val(res.SKOR_AKHIR);
                    $('#IdModalItemTahapKonstruk').val(res.TAHAP_FK);
                    $('#IdModalItemSusunanKonstruk').val(res.SUSUNAN);
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
            _textNya = "Simpan Skor Konstruk";
        }
        $('#IdButangAction').html(_textNya);
        $('#IdPaparCode').html(" (" + _kod + ") ");
        $('#IdModalItemHiddenSkorKonstrukPk').val(_pknya);
        $('#IdModalItemHiddenKodProcess').val(_kod);
        $('#IdModalItemSkorMulaKonstruk').val('');
        $('#IdModalItemSkorAkhirKonstruk').val('');
        $('#IdModalItemTahapKonstruk').val('');

        $("#IdModalItemTarikhKuatKuasa").datepicker({ todayHighlight: true, format: 'dd M yyyy' }).datepicker("setDate", new Date());
        $('#IdModalItemTarikhKuatKuasa').val('');

        $('#IdModalItemTarikhTamat').val(_tarikhTamat);
        if ($('#IdModalItemTarikhTamat').val(_tarikhTamat) != null) {
            $(document).ready(function () {
                $('#IdModalItemTarikhTamat').datepicker({
                    orientation: "bottom left",
                    //startDate: "31/12/9999",
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