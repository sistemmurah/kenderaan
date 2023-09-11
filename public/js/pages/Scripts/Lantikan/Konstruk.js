"use strict";
var Konstruk = function () {
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
            "paging": false,
            "info": false,
            //"ordering": false,

        }),
            $("#export_print").on("click", function (e) { e.preventDefault(), t.button(0).trigger() }),
            $("#export_excel").on("click", function (e) { e.preventDefault(), t.button(2).trigger() }),
            $("#export_pdf").on("click", function (e) { e.preventDefault(), t.button(4).trigger() })

        $('#IdBtnModalItemSaveKodItem').click(function (e) {
            var _ok = true;
            var _konstrukPk = $('#IdModalItemHiddenKonstrukPk').val();
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _kod = $('#IdModalItemKod').val();
            var _namaKonstruk = $('#IdModalItemNamaKonstruk').val();
            var _sortKonstruk = $('#IdModalItemSortKonstruk').val();
            var _namaKonstrukEng = $('#IdModalItemNamaKonstrukEng').val();
            var _tarikhKuatkuasa = $('#IdModalItemTarikhKuatKuasa').val();
            var _tarikhTamat = $('#IdModalItemTarikhTamat').val();

            var x = new Date(_tarikhKuatkuasa);
            var y = new Date(_tarikhTamat);

            //alert(+x + " " + +y);

            if (_kodProcess.length == 0 || _kod.length == 0 || _namaKonstruk.length == 0 || _sortKonstruk.length == 0
                || _namaKonstrukEng == 0 || _tarikhKuatkuasa == 0 || _tarikhTamat == 0) {
                toastr.warning("Maklumat belum di isi", "SILA ISI MAKLUMAT KONSTRUK.");
                _ok = false;
            }
            if (_ok) {
                if (+x < +y) {
                    if (!/[^a-zA-Z]/.test(_sortKonstruk) && (!/[^a-zA-Z]/.test(_kod))) {
                        var _askText = "Adakah anda pasti SIMPAN rekod ini ?";
                        if (_kodProcess == "KEMASKINI") {
                            _askText = "Adakah anda pasti KEMASKINI rekod ini ?";
                        }
                        if (confirm(_askText)) {
                            var _path = $('#IdPathServer').val();
                            var event = _path + '/PreServices/MtdKonstrukSaveAjax';
                            var _data = JSON.stringify({
                                'IPSB_KONSTRUK_PK': _konstrukPk, 'KODPROCESS': _kodProcess, 'KOD': _kod, 'NAMA_KONSTRUK': _namaKonstruk, 'NAMA_KONSTRUK_ENG': _namaKonstrukEng,
                                'SORT_KONSTRUK': _sortKonstruk, 'TKH_KUATKUASA': _tarikhKuatkuasa, 'TKH_TAMAT': _tarikhTamat
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
                                        toastr.warning("Rekod Konstruk Telah Wujud dan Masih Dalam Tempoh Sah", "ALERT!");
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
                        toastr.warning("Medan Kod dan Susunan Konstruk Mesti Dalam Abjad. ", "ALERT!");
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
    Konstruk.init();
});

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _pknya = _text[0];
    var _kod = _text[1];

    //alert(_pknya + "\n" + _kod);

    var _path = $('#IdPathServer').val();
    var event = _path + '/PreServices/MtdCapaiKonstrukByPkAjax';
    var _data = JSON.stringify({
        'IPSB_KONSTRUK_PK': _pknya, 'KODPROCESS': _kod
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
                    $('#IdModalItemHiddenKonstrukPk').val(res.IPSB_KONSTRUK_PK);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemKod').val(res.KOD);
                    $('#IdModalItemNamaKonstruk').val(res.NAMA_KONSTRUK);
                    $('#IdModalItemSortKonstruk').val(res.SORT_KONSTRUK);
                    $('#IdModalItemNamaKonstrukEng').val(res.NAMA_KONSTRUK_ENG);
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
            _textNya = "Simpan Konstruk";
        }
        $('#IdButangAction').html(_textNya);
        $('#IdPaparCode').html(" (" + _kod + ") ");
        $('#IdModalItemHiddenKonstrukPk').val(_pknya);
        $('#IdModalItemHiddenKodProcess').val(_kod);
        $('#IdModalItemKod').val('');
        $('#IdModalItemNamaKonstruk').val('');
        $('#IdModalItemSortKonstruk').val('');
        $('#IdModalItemNamaKonstrukEng').val('');

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

