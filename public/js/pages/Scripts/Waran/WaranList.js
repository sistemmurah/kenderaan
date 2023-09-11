"use strict";

var PendaftaranWaran = function () {
    var _dataTableInit = function () {
        var t;
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _kodwaran = $('#IdModalItemKodWaran').val();
            var _kumpkhidmat = $('#IdDDKumpulanKhidmat').val();
            var _tahun = $('#kt_datepicker_4_4').val();
            var _namajwtnjpa = $('#IdModalItemNamaJwtnJPA').val();
            var _namajwtnutm = $('#IdModalItemNamaJwtnUTM').val();
            var _gredjwtnjpa = $('#IdModalItemGredJwtnJPA').val();
            var _programjpa = $('#IdModalItemProgramJPA').val();
            var _skim = $('#IdModalItemSkim').val();
            var _gredjwtn = $('#IdModalItemGredJwtn').val();
            var _skimjpa = $('#IdModalItemSkimJPA').val();
            var _kuotaJPA = $('#IdModalItemKuotaJPA').val();
            var _statuswaran = $('#IdModalItemStatusWaran').val();
            var _tkhlulusjpa = $('#kt_datepicker_5').val();
            var _bilisi = $('#IdModalItemBilIsi').val();
            var _bilkosong = $('#IdModalItemBilKosong').val();
            var _jumlah = $('#IdModalItemJumlah').val();
            var _singkatanjwtn = $('#IdModalItemSingkatanJwtn').val();
            var _kodptj = $('#IdModalItemKodPTJ').val();
            var _odkod = $('#IdModalItemODKod').val();
            //var _tkhluluswaran = $('#kt_datepicker_4_3').val();
            var _tkhluluslpu = $('#kt_datepicker_6').val();
            //var _catatan = $('#kt_summernote_1').summernote('code');
            var fokus = 0;

            if (_kodwaran.length == 0 ||
                _kumpkhidmat.length == 0 ||
                _skim.length == 0 ||
                _gredjwtnjpa.length == 0 ||
                _programjpa.length == 0 ||
                _gredjwtn.length == 0 ||
                _skimjpa.length == 0 ||
                _namajwtnjpa.length == 0 ||
                _namajwtnutm.length == 0 ||
                _singkatanjwtn.length == 0 ||
                _kodptj.length == 0 ||
                _statuswaran.length == 0 ||
                _odkod.length == 0 ||
                _tahun.length == 0 ||
                _bilisi.length == 0 ||
                _bilkosong.length == 0 ||
                _jumlah.length == 0 ||
                _kuotaJPA.length == 0 ||
                _tkhlulusjpa.length == 0 ||
                _tkhluluslpu.length == 0) {

                if (_kodwaran.length == 0) {
                    document.getElementById("IdModalItemKodWaran").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemKodWaran").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemKodWaran").style.borderColor = ""; }

                if (_kumpkhidmat.length == 0) {
                    document.getElementById("IdDDKumpulanKhidmat").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpulanKhidmat").focus(); fokus = 1; }
                } else { document.getElementById("IdDDKumpulanKhidmat").style.borderColor = ""; }

                if (_tahun == 0) {
                    document.getElementById("kt_datepicker_4_4").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("kt_datepicker_4_4").focus(); fokus = 1; }
                } else { document.getElementById("kt_datepicker_4_4").style.borderColor = ""; }

                if (_namajwtnjpa.length == 0) {
                    document.getElementById("IdModalItemNamaJwtnJPA").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemNamaJwtnJPA").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemNamaJwtnJPA").style.borderColor = ""; }

                if (_namajwtnutm.length == 0) {
                    document.getElementById("IdModalItemNamaJwtnUTM").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemNamaJwtnUTM").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemNamaJwtnUTM").style.borderColor = ""; }

                if (_gredjwtnjpa.length == 0) {
                    document.getElementById("IdModalItemGredJwtnJPA").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemGredJwtnJPA").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemGredJwtnJPA").style.borderColor = ""; }

                if (_skim.length == 0) {
                    document.getElementById("IdModalItemSkim").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSkim").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSkim").style.borderColor = ""; }

                if (_skimjpa.length == 0) {
                    document.getElementById("IdModalItemSkimJPA").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSkimJPA").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSkimJPA").style.borderColor = ""; }

                if (_kuotaJPA.length == 0) {
                    document.getElementById("IdModalItemKuotaJPA").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemKuotaJPA").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemKuotaJPA").style.borderColor = ""; }

                if (_statuswaran.length == 0) {
                    document.getElementById("IdModalItemStatusWaran").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemStatusWaran").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemStatusWaran").style.borderColor = ""; }

                if (_tkhlulusjpa == 0) {
                    document.getElementById("kt_datepicker_5").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("kt_datepicker_5").focus(); fokus = 1; }
                } else { document.getElementById("kt_datepicker_5").style.borderColor = ""; }

                if (_gredjwtn.length == 0) {
                    document.getElementById("IdModalItemGredJwtn").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemGredJwtn").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemGredJwtn").style.borderColor = ""; }

                if (_bilisi.length == 0) {
                    document.getElementById("IdModalItemBilIsi").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemBilIsi").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemBilIsi").style.borderColor = ""; }

                if (_bilkosong.length == 0) {
                    document.getElementById("IdModalItemBilKosong").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemBilKosong").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemBilKosong").style.borderColor = ""; }

                if (_jumlah.length == 0) {
                    document.getElementById("IdModalItemJumlah").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemJumlah").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemJumlah").style.borderColor = ""; }

                if (_singkatanjwtn.length == 0) {
                    document.getElementById("IdModalItemSingkatanJwtn").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSingkatanJwtn").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSingkatanJwtn").style.borderColor = ""; }

                if (_kodptj.length == 0) {
                    document.getElementById("IdModalItemKodPTJ").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemKodPTJ").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemKodPTJ").style.borderColor = ""; }

                if (_odkod.length == 0) {
                    document.getElementById("IdModalItemODKod").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemODKod").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemODKod").style.borderColor = ""; }

                if (_tkhluluslpu == 0) {
                    document.getElementById("kt_datepicker_6").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("kt_datepicker_6").focus(); fokus = 1; }
                } else { document.getElementById("kt_datepicker_6").style.borderColor = ""; }

                if (_programjpa == 0) {
                    document.getElementById("IdModalItemProgramJPA").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemProgramJPA").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemProgramJPA").style.borderColor = ""; }

                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT WARAN.");
                _ok = false;
            }

            if (_ok) {
                //alert(_tahun)
                var _askText = "Adakah anda pasti SIMPAN maklumat ini ?";

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdDaftarWaranSaveAjax';
                    var _data = JSON.stringify({
                        'No_Waran': _kodwaran, 'SKIM': _skim, 'Gred_Jawatan': _gredjwtn, 'KumpulanKhidmat': _kumpkhidmat,
                        'SKIM_JPA': _skimjpa, 'Nama_Jawatan': _namajwtnutm, 'SGKTN_JWTN': _singkatanjwtn, 'KOD_PTJ': _kodptj, 
                        'StatusWaran': _statuswaran, 'OD_Kod': _odkod, 'Tahun': _tahun, 'BIL_ISI': _bilisi, 'BIL_KOSONG': _bilkosong,
                        'Jumlah': _jumlah, 'KUOTA_JPA': _kuotaJPA, 'TKH_LULUSJPA': _tkhlulusjpa, 'TKH_LULUSLPU': _tkhluluslpu,
                        'GRED_JPA': _gredjwtnjpa, 'NAMA_JWTN_JPA': _namajwtnjpa
                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            if (res.RESULTSET == "2") {
                                toastr.success("Info semua diisi", "Berjaya Simpan.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            } else {
                                toastr.warning("Info belum diisi", "Tidak Berjaya Simpan.");
                            }
                        },
                        error: function (xhr, _httpStatusMessage, customErrorMessage) {
                            if (xhr.status === 410) {
                                alert("Error 410:" + customErrorMessage);
                            }
                            else if (xhr.status === 500) {
                                alert("Error 500:" + customErrorMessage);
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
    PendaftaranWaran.init();
});

