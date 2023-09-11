"use strict";

var KelulusanWaran = function () {
    var _dataTableInit = function () {
        var t;
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _kodwaran = $('#IdModalItemKodWaran').val();
            var _kumpkhidmat = $('#IdDDKumpulanKhidmat').val();
            var _skim = $('#IdModalItemSkim').val();
            var _gredjwtn = $('#IdModalItemGredJwtn').val();
            var _skimjpa = $('#IdModalItemSkimJPA').val();
            var _namajwtn = $('#IdModalItemNamaJwtn').val();
            var _singkatanjwtn = $('#IdModalItemSingkatanJwtn').val();
            var _kodptj = $('#IdModalItemKodPTJ').val();
            var _statuswaran = $('#IdModalItemStatusWaran').val();
            var _odkod = $('#IdModalItemODKod').val();
            var _tahun = $('#kt_datepicker_4_4').val();
            var _bilisi = $('#IdModalItemBilIsi').val();
            var _bilkosong = $('#IdModalItemBilKosong').val();
            var _jumlah = $('#IdModalItemJumlah').val();
            var _kuotaJPA = $('#IdModalItemKuotaJPA').val();
            //var _catatan = $('#kt_summernote_1').val();
            //var _catatan = $('#kt_summernote_1').summernote('code');
            var _tkhlulusjpa = $('#kt_datepicker_5').val();
            var _tkhluluslpu = $('#kt_datepicker_6').val();
            var _tkhlulus = $('#kt_datepicker_4_3').val();
            var _waranpk = $('#IdModalItemHiddenWaranPk').val();

            if (_kodProcess.length == 0 && _kodwaran.length == 0 && _kumpkhidmat.length == 0 && _skim.length == 0 && _gredjwtn.length == 0 &&
                _skimjpa.length == 0 && _namajwtn.length == 0 && _singkatanjwtn.length == 0 && _kodptj.length == 0 &&
                _statuswaran.length == 0 && _odkod.length == 0 && _tahun.length == 0 && _bilisi.length == 0 &&
                _bilkosong.length == 0 && _jumlah.length == 0 && _kuotaJPA.length == 0 && _tkhlulusjpa.length == 0 &&
                _tkhluluslpu.length == 0) {
                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT WARAN.");
                _ok = false;
            }

            if (_ok) {
                var _askText = "Adakah anda pasti KEMASKINI maklumat ini ?";
                if (_kodProcess == "HAPUS") {
                    _askText = "Adakah anda pasti HAPUS maklumat ini ?";
                }
                //alert(_catatan)

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdDaftarWaranSaveAjax';
                    var _data = JSON.stringify({
                        'No_Waran': _kodwaran, 'SKIM': _skim, 'Gred_Jawatan': _gredjwtn, 'KumpulanKhidmat': _kumpkhidmat,
                        'SKIM_JPA': _skimjpa, 'Nama_Jawatan': _namajwtn, 'SGKTN_JWTN': _singkatanjwtn, 'KOD_PTJ': _kodptj,
                        'StatusWaran': _statuswaran, 'OD_Kod': _odkod, 'Tahun': _tahun, 'BIL_ISI': _bilisi, 'BIL_KOSONG': _bilkosong,
                        'Jumlah': _jumlah, 'KUOTA_JPA': _kuotaJPA, 'TKH_LULUSJPA': _tkhlulusjpa, 'TKH_LULUSLPU': _tkhluluslpu,
                        'TKH_LULUS': _tkhlulus, 'WARAN_PK': _waranpk, 'KODPROCESS': _kodProcess
                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            if (res.RESULTSET == "2") {
                                toastr.success("Messagenya disini", "Berjaya Kemaskini.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            } else {
                                toastr.warning("Messagenya disini", "Tidak Berjaya Kemaskini.");
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
        });


        $('#IdBtnItemLulusItem').click(function (e) {
            var _ok = true;
            var _cmd = $('#IdBtnItemLulusItem').attr('data-cmd');
            $('#IdBtnItemLulusItem').attr('data-cmd', "APPROVE");
            var _statusmohon = $('#IdModalItemLulusWaran').val();
            var _catatan = $('#kt_autosize_2').val();
            var _waranpk = $('#IdModalItemHiddenWaranPk').val();

            if (_statusmohon.length == 0 && _catatan.length == 0) {
                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT KELULUSAN.");
                _ok = false;
            }

            if (_ok) {
                //alert(_statusmohon + " " + _catatan + " " + _waranpk + " " + _cmd)
                var _askText = "Are you sure to APPROVED this record ?";
                if (_statusmohon == "848") {
                    _askText = "Are you sure to CANCELED this record ?";
                }

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdDaftarWaranSaveAjax';
                    var _data = JSON.stringify({
                        'Status': _statusmohon, 'CATATAN': _catatan, 'WARAN_PK': _waranpk, 'KODPROCESS': _cmd
                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            if (res.RESULTSET == "2") {
                                toastr.success("Messagenya disini", "Pengesahan Berjaya Dikemaskini.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            } else {
                                toastr.warning("Messagenya disini", "Kelulusan Waran Tidak Berjaya.");
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
    KelulusanWaran.init();
});

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _pknya = _text[0];
    var _kod = _text[1];

    //alert(_pknya + "\n" + _kod);

    var _path = $('#IdPathServer').val();
    var event = _path + '/Waran/MtdCapaiWaranRekodByPkAjax';
    var _data = JSON.stringify({
        'WARAN_PK': _pknya, 'KODPROCESS': _kod
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
                    } else if (_kod == "RESTORE") {
                        _textNya = "RESTORE Record ";
                    }
                    $('#IdButangAction').html(_textNya);
                    $('#IdPaparCode').html(" (" + _kod + ") ");
                    $('#IdModalItemHiddenWaranPk').val(res.WARAN_PK);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemKodWaran').val(res.No_Waran);
                    $('#IdModalItemTahun').val(res.Tahun);
                    $('#IdModalItemNamaJwtn').val(res.Nama_Jawatan);
                    $('#IdModalItemGredJwtn').val(res.Gred_Jawatan);
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
    }
}
