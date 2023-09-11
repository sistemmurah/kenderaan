"use strict";

var PendSekTambah = function () {
    var _dataTableInit = function () {
        var t;
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _namasekolah = $('#IdModalItemNamaSekolah').val();
            var _tahap2 = $('#IdModalItemTahap').val();
            var _tahunmula = $('#IdModalItemTahunMula').val();
            var _tahunakhir = $('#IdModalItemTahunAkhir').val();
            var _bidang2 = $('#IdModalItemBidang2').val();
            var _subjek = $('#IdModalItemSubjek').val();
            var _subjekspmbm = $('#IdModalItemSubjekSPMBM').val();
            var _subjekspmbi = $('#IdModalItemSubjekSPMBI').val();
            var _subjekspmmate = $('#IdModalItemSubjekSPMMate').val();
            var _subjekspmlain = $('#IdModalItemSubjekSPMLain').val();
            var _subjekpmrbm = $('#IdModalItemSubjekPMRBM').val();
            var _subjekpmrbi = $('#IdModalItemSubjekPMRBI').val();
            var _subjekpmrmate = $('#IdModalItemSubjekPMRMate').val();
            var _subjekpmrlain = $('#IdModalItemSubjekPMRLain').val();


            if (_namasekolah.length == 0 && _tahap2.length == 0 && _tahunmula.length == 0 && _tahunakhir.length == 0 && _bidang2.length == 0 && _subjek.length == 0 && _subjekspm.length == 0
                && _subjekspmbm.length == 0 && _subjekspmbi.length == 0 && _subjekspmmate.length == 0 && _subjekspmlain.length == 0
                && _subjekpmrbm.length == 0 && _subjekpmrbi.length == 0 && _subjekpmrmate.length == 0 && _subjekpmrlain.length == 0) {
                toastr.warning("Messagenya disini", "PLEASE FILL-IN ALL FIELD.");
                _ok = false;
            }

            if (_ok) {
                var _askText = "Are you sure to SAVE this record ?";
                alert(_namasekolah + " " + _tahap2 + " " + _tahunmula + " " + _tahunakhir + " " + _bidang2)
                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/BorangPermohonan/MtdPenSekSaveAjax';
                    var _data = JSON.stringify({
                        'NAMA_SEKOLAH': _namasekolah, 'TAHAP2': _tahap2, 'TAHUN_MULA': _tahunmula, 'TAHUN_AKHIR': _tahunakhir, 'BIDANG2': _bidang2, 'SUBJEK': _subjek, 'NAMA_PARAMETER': _subjekspm
                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            if (res.RESULTSET == "2") {
                                toastr.success("Messagenya disini", "Berjaya Simpan.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
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
    PendSekTambah.init();
});

