"use strict";

var PendSekTambah = function () {
    var _dataTableInit = function () {
        var t;

        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _namasekolah = $('#IdModalItemNamaSekolah').val();
            var _tahap2 = $('#IdModalItemTahap').val();
            var _tahunmula = $('#kt_datepicker_thn_mula').val();
            var _tahunakhir = $('#kt_datepicker_thn_akhir').val();
            var _bidang2 = $('#IdModalItemBidang2').val();
            var _subjek = $('#IdModalItemSubjek').val();
            var _gredsubjekbm = $('#IdModalItemGred1').val();  
            var _gredsubjekbi = $('#IdModalItemGred2').val(); 
            var _gredsubjekmate = $('#IdModalItemGred3').val(); 
            var _gredsubjek = $('#IdModalItemGred').val(); 
            var _subjekbm = $('#SUBJEK1').val(); 
            var _subjekbi = $('#SUBJEK2').val(); 
            var _subjekmate = $('#SUBJEK3').val(); 
            var _sekolahpk = $('#SEKOLAH_PK').val(); 

            //var _gredbm = $('#IdModalItemGredSubjekBM').val(); 
            //var _gredbi = $('#IdModalItemGredSubjekBI').val(); 
            //var _gredmate = $('#IdModalItemGredSubjekMT').val(); 


            if (_namasekolah.length == 0 || _tahap2.length == 0 || _tahunmula.length == 0 || _tahunakhir.length == 0 || _bidang2.length == 0 
                || _gredsubjekbm.length == 0 || _gredsubjekbi.length == 0 || _gredsubjekmate.length == 0) {
                toastr.warning("Messagenya disini", "PLEASE FILL-IN ALL FIELD.");
                _ok = false;
            }
            alert(_namasekolah + " " + _tahap2 + " " + _tahunmula + " " + _tahunakhir + " " + _bidang2 + " " + _sekolahpk + " " + _subjek + " " + _gredsubjek);
            if (_ok == true ) {
                var _askText = "Are you sure to SAVE this record ?";
                
                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/BorangPermohonan/MtdPenSekSaveAjax';
                    var _data = JSON.stringify({
                        'NAMA_SEKOLAH': _namasekolah, 'TAHAP_FK': _tahap2, 'TAHUN_MULA': _tahunmula, 'TAHUN_AKHIR': _tahunakhir, 'BIDANG_FK': _bidang2,
                        'BM': _gredsubjekbm, 'BI': _gredsubjekbi, 'MATE': _gredsubjekmate, 'BM_ID': _subjekbm, 'BI_ID': _subjekbi, 'MATE_ID': _subjekmate,
                        'KOD_SUBJEK_FK': _subjek, 'SUBJEK': _gredsubjek, 'SEKOLAH_PK':_sekolahpk                     

                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            alert(res.RESULTSET);
                            if (res.RESULTSET == "2") {
                                toastr.success("Messagenya disini", "Berjaya Simpan.");
                                window.location.href = _path + '/BorangPermohonan/PendidikanSekolahEdit/' + res.SEKOLAH_PK;
                                alert(res.SEKOLAH_PK);
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                                $('#btnShowModal').show();
                            }
                            else if (res.RESULTSET == "3") {
                                toastr.warning("Messagenya disini", "Rekod Telah Wujud.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            }

                            else {
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

