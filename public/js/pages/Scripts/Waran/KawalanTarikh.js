// Class definition

var KTBootstrapDatepicker = function () {

    var arrows;
    if (KTUtil.isRTL()) {
        arrows = {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>'
        }
    } else {
        arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    }

    var demos = function () {
        $('#kt_datepicker_4_3').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            format: "dd/mm/yyyy"
        });

        $('#kt_datepicker_5').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            format: "dd/mm/yyyy"
        });

        $('#kt_datepicker_6').timepicker({
            dateFormat: '',
            timeFormat: 'hh:mm tt'
        });
    }

    var min = new Date().getFullYear();
    max = min + 3;
    select = document.getElementById('IdModalItemTahun');

    for (var i = min; i <= max; i++) {
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    }

    //Button Simpan Jawatan dalam table HR_IKJ_JAWATAN
    $('#IdBtnItemSaveItemJawatan').click(function (e) {
        var _ok = true;
        var _sesi = $('#IdModalItemSesi').val();
        var _tahun = $('#IdModalItemTahun').val();
        var _tkhmulaiklan = $('#kt_datepicker_4_3').val();
        var _tkhtutupiklan = $('#kt_datepicker_5').val();
        var _kategorimod = $('#IdModalItemKategoriMod').val();
        var _tkhtutupproses = $('#kt_datepicker_6').val();
        var _statusaktif = "Y";
        var _jawatanpk = 0; _jawatanpk = $('#JAWATAN_PK').val();
        var _jawatanfk = 0; _jawatanfk = $('#JAWATAN_FK').val();
        var fokus = 0;

        //alert(_statusaktif);

        if (_sesi.length == 0 || _tahun.length == 0 || _kategorimod.length == 0 || _tkhmulaiklan.length == 0 ||
            _tkhtutupiklan.length == 0) {

            if (_sesi.length == 0) {
                document.getElementById("IdModalItemSesi").style.borderColor = "red";
                if (fokus == 0) { document.getElementById("IdModalItemSesi").focus(); fokus = 1; }
            } else { document.getElementById("IdModalItemSesi").style.borderColor = ""; }

            if (_tahun.length == 0) {
                document.getElementById("IdModalItemTahun").style.borderColor = "red";
                if (fokus == 0) { document.getElementById("IdModalItemTahun").focus(); fokus = 1; }
            } else { document.getElementById("IdModalItemTahun").style.borderColor = ""; }

            if (_kategorimod.length == 0) {
                document.getElementById("IdModalItemKategoriMod").style.borderColor = "red";
                if (fokus == 0) { document.getElementById("IdModalItemKategoriMod").focus(); fokus = 1; }
            } else { document.getElementById("IdModalItemKategoriMod").style.borderColor = ""; }

            if (_tkhmulaiklan.length == 0) {
                document.getElementById("kt_datepicker_4_3").style.borderColor = "red";
                if (fokus == 0) { document.getElementById("kt_datepicker_4_3").focus(); fokus = 1; }
            } else { document.getElementById("kt_datepicker_4_3").style.borderColor = ""; }

            if (_tkhtutupiklan.length == 0) {
                document.getElementById("kt_datepicker_5").style.borderColor = "red";
                if (fokus == 0) { document.getElementById("kt_datepicker_5").focus(); fokus = 1; }
            } else { document.getElementById("kt_datepicker_5").style.borderColor = ""; }

            //if (_tkhtutupproses.length == 0) {
            //    document.getElementById("kt_datepicker_6").style.borderColor = "red";
            //    if (fokus == 0) { document.getElementById("kt_datepicker_6").focus(); fokus = 1; }
            //} else { document.getElementById("kt_datepicker_6").style.borderColor = ""; }

            //if (_statusaktif.length == 0) {
            //    document.getElementById("IdModalItemStatusAktif").style.borderColor = "red";
            //    if (fokus == 0) { document.getElementById("IdModalItemStatusAktif").focus(); fokus = 1; }
            //} else { document.getElementById("IdModalItemStatusAktif").style.borderColor = ""; }

            toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT.");
            _ok = false;
        }

        if (_ok) {
            var _askText = "Adakah anda pasti SIMPAN maklumat ini ?";

            if (confirm(_askText)) {
                var _path = $('#IdPathServer').val();
                var event = _path + '/Waran/MtdDaftarJawatanSaveTarikhAjax';
                var _data = JSON.stringify({
                    'SESI': _sesi, 'KATEGORI_FK': _kategorimod, 'Tahun': _tahun, 'TKH_MULA_IKLAN': _tkhmulaiklan, 'TKH_TUTUP_IKLAN': _tkhtutupiklan,
                    'JAWATAN_PK': _jawatanpk, 'JAWATAN_FK': _jawatanfk, 'STATUS_AKTIF': _statusaktif
                });
                //'TKH_LUPUT_IKLAN': _tkhtutupproses
                //'STATUS_AKTIF': _statusaktif
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
                        if (xhr.status === 410 || xhr.status === 500) {
                            alert("Error:" + customErrorMessage);
                        } else {
                            toastr.warning("", "<font color='#800000'>Error:" + customErrorMessage + "</font>");
                        }
                    }
                });
            }
        }
    });

    return {
        // public functions
        init: function () {
            demos();
        }
    };

}();

jQuery(document).ready(function () {
    KTBootstrapDatepicker.init();
});