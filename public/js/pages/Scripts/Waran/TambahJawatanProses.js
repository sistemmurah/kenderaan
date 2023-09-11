"use strict";

var TambahJawatan = function () {
    var _dataTableInit = function () {
        var t;

        //Button Simpan Jawatan dalam table HR_IKJ_JAWATAN
        $('#IdBtnItemSaveItemJawatan').click(function (e) {
            var _ok = true;
            var _tkhmulaiklan = $('#kt_datepicker_4_3').val();
            var _tkhtutupiklan = $('#kt_datepicker_5').val();
            var _tkhtutupproses = $('#kt_datepicker_6').val();
            var _sesi = $('#IdModalItemSesi').val();
            var _tahun = $('#IdModalItemTahun').val();
            var _kategorimod = $('#IdModalItemKategoriMod').val();
            var _statusaktif = $('#IdModalItemStatusAktif').val();
            var _jawatanpk = 0; _jawatanpk = $('#JAWATAN_PK').val();
            var _jawatanfk = 0; _jawatanfk = $('#JAWATAN_FK').val();
            var fokus = 0;

            if (_tkhmulaiklan.length == 0 || _tkhtutupiklan.length == 0 || _tkhtutupproses.length == 0 || _sesi.length == 0
                || _tahun.length == 0 || _kategorimod.length == 0 || _statusaktif.length == 0) {

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

                if (_tkhtutupproses.length == 0) {
                    document.getElementById("kt_datepicker_6").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("kt_datepicker_6").focus(); fokus = 1; }
                } else { document.getElementById("kt_datepicker_6").style.borderColor = ""; }

                if (_statusaktif.length == 0) {
                    document.getElementById("IdModalItemStatusAktif").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemStatusAktif").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemStatusAktif").style.borderColor = ""; }

                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT.");
                _ok = false;
            }

            if (_ok) {
                var _askText = "Adakah anda pasti SIMPAN maklumat ini ?";

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdDaftarJawatanSaveTarikhAjax';
                    var _data = JSON.stringify({
                        'TKH_MULA_IKLAN': _tkhmulaiklan, 'TKH_TUTUP_IKLAN': _tkhtutupiklan, 'TKH_LUPUT_IKLAN': _tkhtutupproses,
                        'SESI': _sesi, 'KATEGORI_FK': _kategorimod, 'STATUS_AKTIF': _statusaktif, 'Tahun': _tahun,
                        'JAWATAN_PK': _jawatanpk, 'JAWATAN_FK': _jawatanfk
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

        //Button Kemaskini Perincian Jawatan dalam table HR_IKJ_PERINCIAN
        $('#IdBtnItemSaveItemPerincian').click(function (e) {
            var _ok = true;
            var _perincianpk = 0; _perincianpk = $('#PERINCIAN_PK').val();
            var _jawatanpk = 0; _jawatanpk = $('#JAWATAN_PK').val();

            var _kampus = $('#IdModalItemMainCampus').val();
            var _kodptj = $('#IdModalItemSubCampus').val();
            var _pengkhususan = $('#IdModalItemKhusus').val();
            var _bidangkhusus = $('#IdModalItemSubKhusus').val();
            var _fungsi = $('#IdModalItemFungsi').val();
            var _jnsiklan = $('#IdModalItemIklan').val();
            var _nosirijawatan = $('#IdModalItemNoSiriJawatan').val();
            var _statusiklan = $('#IdModalItemStatusIklan').val();
            var _tarafjwtn = $('#IdModalItemTarafJwtn').val();
            var _kategorijwtn = $('#IdModalItemKategoriJwtn').val();
            var _kumpkhidmat = $('#IdModalItemSubNamaJawatan').val();
            var _skim = $('#IdModalItemSkim').val();
            var _kodjwtn = $('#IdModalItemSubSkim').val();
            var _namajawatan = $('#IdModalItemSubKodJawatan').val();
            var _desckelayakan = $('#kt_summernote_1').summernote('code');
            var _deskripsi = $('#kt_summernote_2').summernote('code');
            var _gajimin = $('#IdModalItemGajiPokok').val();
            var _gajimax = $('#IdModalItemGaji').val();
            var _kategorifk = 0; _kategorifk = $('#KATEGORI_FK').val();

            if (_kampus.length == 0 && _kodptj.length == 0 && _kodjwtn.length == 0 && _bidangkhusus.length == 0 && _fungsi.length == 0
                && _jnsiklan.length == 0 && _tarafjwtn.length == 0 && _kategorijwtn.length == 0 && _kumpkhidmat.length == 0 && _namajawatan.length == 0
                && _desckelayakan.length == 0 && _deskripsi.length == 0 && _gajimin.length == 0 && _gajimax.length == 0 && _nosirijawatan.length == 0 && _statusiklan.length == 0
                && _skim.length == 0 && _pengkhususan.length == 0) {

                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT.");
                _ok = false;
            }

            if (_ok) {
                var _askText = "Adakah anda pasti KEMASKINI maklumat ini ?";

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdDaftarJawatanUpdatePerincianAjax';
                    var _data = JSON.stringify({
                        'KAMPUS_FK': _kampus, 'KOD_PTJ': _kodptj, 'KOD_JAWATAN': _kodjwtn, 'BIDANG_PENGKHUSUSAN_FK': _bidangkhusus, 'PENGKHUSUSAN': _pengkhususan,
                        'JENIS_IKLAN_FK': _jnsiklan, 'FUNGSI_FK': _fungsi, 'KLASIFIKASI': _skim, 'TARAF_JAWATAN_FK': _tarafjwtn, 'KATEGORI_JAWATAN_FK': _kategorijwtn,
                        'KUMPULAN_PERKHIDMATAN_FK': _kumpkhidmat, 'Nama_Jawatan': _namajawatan, 'DES_KELAYAKAN': _desckelayakan, 'DES_TUGAS': _deskripsi, 'GAJI_MINIMUM': _gajimin, 'GAJI_MAKSIMUM': _gajimax,
                        'KATEGORI_FK': _kategorifk, 'NO_SIRI_JAWATAN': _nosirijawatan, 'STATUS_IKLAN_FK': _statusiklan, 'JAWATAN_FK': _jawatanpk, 'PERINCIAN_PK': _perincianpk
                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            if (res.RESULTSET == "2") {
                                toastr.success("Info semua diisi", "Berjaya Kemaskini.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            } else {
                                toastr.warning("Info belum diisi", "Tidak Berjaya Kemaskini.");
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

        //Button Simpan/Hapus Jawatan dalam table HR_IKJ_PERINCIAN
        $('#IdBtnItemSaveItem').click(function (e) {
            var _ok = true;
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _jawatanpk = 0; _jawatanpk = $('#JAWATAN_PK').val();
            var _perincianpk = 0; _perincianpk = $('#PERINCIAN_PK').val();
            var _jawatanfk = 0; _jawatanfk = $('#JAWATAN_FK').val();

            var _tkhmulaiklan = $('#kt_datepicker_4_3').val();
            var _tkhtutupiklan = $('#kt_datepicker_5').val();
            var _tkhtutupproses = $('#kt_datepicker_6').val();
            var _sesi = $('#IdModalItemSesi').val();
            var _tahun = $('#kt_datepicker_4_4').val();
            var _kategorimod = $('#IdModalItemKategoriMod').val();
            var _statusaktif = $('#IdModalItemStatusAktif').val();

            var _kampus = $('#IdModalItemMainCampus').val();
            var _kodptj = $('#IdModalItemSubCampus').val();
            var _pengkhususan = $('#IdModalItemKhusus').val();
            var _bidangkhusus = $('#IdModalItemSubKhusus').val();
            var _fungsi = $('#IdModalItemFungsi').val();
            var _jnsiklan = $('#IdModalItemIklan').val();
            var _nosirijawatan = $('#IdModalItemNoSiriJawatan').val();
            var _statusiklan = $('#IdModalItemStatusIklan').val();
            var _tarafjwtn = $('#IdModalItemTarafJwtn').val();
            var _kategorijwtn = $('#IdModalItemKategoriJwtn').val();
            var _kumpkhidmat = $('#IdModalItemSubNamaJawatan').val();
            var _skim = $('#IdModalItemSkim').val();
            var _kodjwtn = $('#IdModalItemSubSkim').val();
            var _namajawatan = $('#IdModalItemSubKodJawatan').val();
            var _desckelayakan = $('#kt_summernote_1').summernote('code');
            var _deskripsi = $('#kt_summernote_2').summernote('code');
            var _gajimin = $('#IdModalItemGajiPokok').val();
            var _gajimax = $('#IdModalItemGaji').val();
            var _kategorifk = 0; _kategorifk = $('#KATEGORI_FK').val();

            var fokus = 0;

            _desckelayakan = _desckelayakan.trim();
            _deskripsi = _deskripsi.trim();

            //alert(_desckelayakan.l);
            //alert('x' + _desckelayakan + '1');

            if (_kampus.length == 0 ||
                _kodptj.length == 0 ||
                _kodjwtn.length == 0 ||
                _bidangkhusus.length == 0 ||
                _fungsi.length == 0 ||
                _jnsiklan.length == 0 ||
                _tarafjwtn.length == 0 ||
                _kategorijwtn.length == 0 ||
                _kumpkhidmat.length == 0 ||
                _namajawatan.length == 0 ||
                _desckelayakan.length == 0 ||
                _deskripsi.length == 0 ||
                _gajimin.length == 0 ||
                _gajimax.length == 0 ||
                _nosirijawatan.length == 0 ||
                _statusiklan.length == 0 ||
                _skim.length == 0 ||
                _pengkhususan.length == 0 ||

                _tkhmulaiklan.length == 0 ||
                _tkhtutupiklan.length == 0 ||
                _tkhtutupproses.length == 0 ||
                _sesi.length == 0 ||
                _tahun.length == 0 ||
                _kategorimod.length == 0 ||
                _statusaktif.length == 0) {

                if (_nosirijawatan.length == 0) {
                    document.getElementById("IdModalItemNoSiriJawatan").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemNoSiriJawatan").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemNoSiriJawatan").style.borderColor = ""; }

                if (_statusiklan.length == 0) {
                    document.getElementById("IdModalItemStatusIklan").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemStatusIklan").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemStatusIklan").style.borderColor = ""; }

                if (_tarafjwtn.length == 0) {
                    document.getElementById("IdModalItemTarafJwtn").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemTarafJwtn").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemTarafJwtn").style.borderColor = ""; }

                if (_kategorijwtn.length == 0) {
                    document.getElementById("IdModalItemKategoriJwtn").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemKategoriJwtn").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemKategoriJwtn").style.borderColor = ""; }

                if (_fungsi.length == 0) {
                    document.getElementById("IdModalItemFungsi").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemFungsi").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemFungsi").style.borderColor = ""; }

                if (_skim.length == 0) {
                    document.getElementById("IdModalItemSkim").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSkim").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSkim").style.borderColor = ""; }

                if (_kodjwtn.length == 0) {
                    document.getElementById("IdModalItemSubSkim").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSubSkim").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSubSkim").style.borderColor = ""; }

                if (_namajawatan.length == 0) {
                    document.getElementById("IdModalItemSubKodJawatan").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSubKodJawatan").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSubKodJawatan").style.borderColor = ""; }

                if (_kumpkhidmat.length == 0) {
                    document.getElementById("IdModalItemSubNamaJawatan").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSubNamaJawatan").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSubNamaJawatan").style.borderColor = ""; }

                if (_jnsiklan.length == 0) {
                    document.getElementById("IdModalItemIklan").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemIklan").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemIklan").style.borderColor = ""; }

                if (_kampus.length == 0) {
                    document.getElementById("IdModalItemMainCampus").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemMainCampus").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemMainCampus").style.borderColor = ""; }

                if (_kodptj.length == 0) {
                    document.getElementById("IdModalItemSubCampus").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSubCampus").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSubCampus").style.borderColor = ""; }

                if (_pengkhususan.length == 0) {
                    document.getElementById("IdModalItemKhusus").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemKhusus").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemKhusus").style.borderColor = ""; }

                if (_bidangkhusus.length == 0) {
                    document.getElementById("IdModalItemSubKhusus").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemSubKhusus").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemSubKhusus").style.borderColor = ""; }

                if (_gajimax.length == 0) {
                    document.getElementById("IdModalItemGaji").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemGaji").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemGaji").style.borderColor = ""; }

                if (_gajimin.length == 0) {
                    document.getElementById("IdModalItemGajiPokok").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdModalItemGajiPokok").focus(); fokus = 1; }
                } else { document.getElementById("IdModalItemGajiPokok").style.borderColor = ""; }

                if (_desckelayakan.length == 0) {
                    document.getElementById("kt_summernote_1").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("kt_summernote_1").focus(); fokus = 1; }
                } else { document.getElementById("kt_summernote_1").style.borderColor = ""; }

                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT.");
                _ok = false;
            }

            if (_ok) {
                var _askText = "Adakah anda pasti SIMPAN maklumat ini ?";

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdDaftarTambahJawatanTarikhAjax';
                    var _data = JSON.stringify({
                        'KAMPUS_FK': _kampus, 'KOD_PTJ': _kodptj, 'KOD_JAWATAN': _kodjwtn, 'BIDANG_PENGKHUSUSAN_FK': _bidangkhusus, 'PENGKHUSUSAN': _pengkhususan,
                        'JENIS_IKLAN_FK': _jnsiklan, 'FUNGSI_FK': _fungsi, 'KLASIFIKASI': _skim, 'TARAF_JAWATAN_FK': _tarafjwtn, 'KATEGORI_JAWATAN_FK': _kategorijwtn,
                        'KUMPULAN_PERKHIDMATAN_FK': _kumpkhidmat, 'Nama_Jawatan': _namajawatan, 'DES_KELAYAKAN': _desckelayakan, 'DES_TUGAS': _deskripsi, 'GAJI_MINIMUM': _gajimin, 'GAJI_MAKSIMUM': _gajimax,
                        'KATEGORI_FK': _kategorifk, 'NO_SIRI_JAWATAN': _nosirijawatan, 'STATUS_IKLAN_FK': _statusiklan, 'JAWATAN_PK': _jawatanpk, 'JAWATAN_FK': _jawatanfk, 'PERINCIAN_PK': _perincianpk,

                        'TKH_MULA_IKLAN': _tkhmulaiklan, 'TKH_TUTUP_IKLAN': _tkhtutupiklan, 'TKH_LUPUT_IKLAN': _tkhtutupproses,
                        'SESI': _sesi, 'Tahun': _tahun, 'KATEGORI_FK': _kategorimod, 'STATUS_AKTIF': _statusaktif, 'KODPROCESS': _kodProcess
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
                            }
                            else if (res.RESULTSET == "3") {
                                toastr.error("Maklumat Waran Tidak Wujud", "Tidak Berjaya Simpan.");
                            }
                            else {
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

        //Button Hapus Jawatan/Perincian - JAWATAN_PK/FK dalam table HR_IKJ_JAWATAN/HR_IKJ_PERINCIAN
        $('#IdBtnItemDeleteTarikh').click(function (e) {
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _jawatanpk = 0; _jawatanpk = $('#JAWATAN_PK').val();
            var _perincianpk = 0; _perincianpk = $('#PERINCIAN_PK').val();

            var _askText = "Adakah anda pasti SIMPAN maklumat ini ?";
            if (_kodProcess == "HAPUS") {
                _askText = "Adakah anda pasti HAPUS maklumat ini ?";
            }

            if (confirm(_askText)) {
                var _path = $('#IdPathServer').val();
                var event = _path + '/Waran/MtdDaftarJawatanDeleteAjax';
                var _data = JSON.stringify({
                    'JAWATAN_PK': _jawatanpk, 'KODPROCESS': _kodProcess, 'PERINCIAN_PK': _perincianpk
                });
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            if (_kodProcess == "HAPUS") {
                                toastr.success("Info berjaya dihapus", "Berjaya Hapus.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            }
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
        });

        $('#IdBtnItemSaveItemDelete').click(function (e) {
            var _kodProcess = $('#IdModalItemHiddenKodProcess').val();
            var _jawatanpk = 0; _jawatanpk = $('#JAWATAN_PK').val();
            var _perincianpk = 0; _perincianpk = $('#PERINCIAN_PK').val();

            var _askText = "Adakah anda pasti SIMPAN maklumat ini ?";
            if (_kodProcess == "HAPUS") {
                _askText = "Adakah anda pasti HAPUS maklumat ini ?";
            }

            if (confirm(_askText)) {
                var _path = $('#IdPathServer').val();
                var event = _path + '/Waran/MtdDaftarJawatanDeletePerincianAjax';
                var _data = JSON.stringify({
                    'JAWATAN_PK': _jawatanpk, 'PERINCIAN_PK': _perincianpk, 'KODPROCESS': _kodProcess
                });
                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            if (_kodProcess == "HAPUS") {
                                toastr.success("Info berjaya dihapus", "Berjaya Hapus.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            }
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
        });

        //Button Pengesahan Jawatan
        $('#IdBtnItemLulusItem').click(function (e) {
            var _ok = true;
            var _cmd = $('#IdBtnItemLulusItem').attr('data-cmd');
            $('#IdBtnItemLulusItem').attr('data-cmd', "APPROVE");
            var _statusmohon = $('#IdModalItemLulusJawatan').val();
            var _catatan = $('#kt_autosize_2').val();
            var _jawatanpk = $('#JAWATAN_PK').val();
            var _perincianpk = $('#PERINCIAN_PK').val();

            if (_statusmohon.length == 0 && _catatan.length == 0) {
                toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT KELULUSAN.");
                _ok = false;
            }

            if (_ok) {
                //alert(_statusmohon + " " + _catatan + " " + _jawatanpk + " " + _perincianpk + " " + _cmd)
                var _askText = "Are you sure to APPROVED this record ?";
                if (_statusmohon == "848") {
                    _askText = "Are you sure to CANCELED this record ?";
                }

                if (confirm(_askText)) {
                    var _path = $('#IdPathServer').val();
                    var event = _path + '/Waran/MtdJawatanApprovePerincianAjax';
                    var _data = JSON.stringify({
                        'STATUS_SAH': _statusmohon, 'CATATAN': _catatan, 'JAWATAN_PK': _jawatanpk, 'PERINCIAN_PK': _perincianpk, 'KODPROCESS': _cmd
                    });
                    $.ajax({
                        type: "POST",
                        url: event,
                        dataType: "json",
                        contentType: "application/json; charset=utf-8",
                        data: _data,
                        success: function (res) {
                            if (res.RESULTSET == "2") {
                                toastr.success("Jawatan disahkan", "Pengesahan Berjaya Dikemaskini.");
                                $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            } else {
                                toastr.warning("Jawatan tidak disahkan", "Kelulusan Jawatan Tidak Berjaya.");
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
    TambahJawatan.init();
});

function fnCallModalItemTarikh(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _pknya = _text[0];
    var _kod = _text[1];

    //alert(_pknya + "\n" + _kod + "\n" + _perincian);

    var _path = $('#IdPathServer').val();
    var event = _path + '/Waran/MtdCapaiJawatanTarikhRekodByPkAjax';
    var _data = JSON.stringify({
        'JAWATAN_PK': _pknya, 'KODPROCESS': _kod
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
                        _textNya = "Rekod Hapus";
                    }

                    $('#IdButangAction').html(_textNya);
                    $('#IdPaparCode').html(" (" + _kod + ") ");
                    $('#JAWATAN_PK').val(res.JAWATAN_PK);
                    $('#PERINCIAN_PK').val(res.PERINCIAN_PK);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemSesi').val(res.SESI);
                    $('#IdModalItemTahun').val(res.Tahun);
                    $('#IdModalItemKategoriMod').val(res.KATEGORI_FK);
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

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _pknya = _text[0];
    var _kod_pknya = _text[1];
    var _kod = _text[2];

    //alert(_pknya + "\n" + _kod_pknya + "\n" + _kod);

    var _path = $('#IdPathServer').val();
    var event = _path + '/Waran/MtdCapaiJawatanRekodByPkAjax';
    var _data = JSON.stringify({
        'JAWATAN_PK': _pknya, 'PERINCIAN_PK': _kod_pknya, 'KODPROCESS': _kod
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
                        _textNya = "Rekod Hapus";
                    }

                    $('#IdButangAction').html(_textNya);
                    $('#IdPaparCode').html(" (" + _kod + ") ");
                    $('#JAWATAN_PK').val(res.JAWATAN_PK);
                    $('#PERINCIAN_PK').val(res.PERINCIAN_PK);
                    $('#IdModalItemHiddenKodProcess').val(_kod);
                    $('#IdModalItemSesi').val(res.SESI);
                    $('#IdModalItemTahun').val(res.Tahun);
                    $('#IdModalItemKategoriMod').val(res.KATEGORI_FK);
                    $('#IdModalItemTarafJwtn').val(res.TARAF_JAWATAN_FK);
                    $('#IdModalItemKodJwtn').val(res.KOD_JAWATAN);
                    $('#IdModalItemNamaJwtn').val(res.Nama_Jawatan);
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

function saveUnsave() {
    var _jawatanpk = $('#JAWATAN_PK').val();
    var _perincianpk = $('#PERINCIAN_PK').val();

    var _nosirijawatan = $('#IdModalItemNoSiriJawatan').val();
    var _statusiklan = $('#IdModalItemStatusIklan').val();
    var _tarafjwtn = $('#IdModalItemTarafJwtn').val();
    var _kategorijwtn = $('#IdModalItemKategoriJwtn').val();
    var _fungsi = $('#IdModalItemFungsi').val();
    var _skim = $('#IdModalItemSkim').val();
    var _kodjwtn = $('#IdModalItemSubSkim').val();
    var _namajawatan = $('#IdModalItemSubKodJawatan').val();
    var _kumpkhidmat = $('#IdModalItemSubNamaJawatan').val();
    var _jenisiklan = $('#IdModalItemIklan').val();
    var _kampus = $('#IdModalItemMainCampus').val();
    var _fakulti = $('#IdModalItemSubCampus').val();
    var _pengkhususan = $('#IdModalItemKhusus').val();
    var _bidangkhusus = $('#IdModalItemSubKhusus').val();
    var _gajiminimum = $('#IdModalItemGajiPokok').val();
    var _gajimaximum = $('#IdModalItemGaji').val();
    var _kelayakan = $('#kt_summernote_1').summernote('code');
    var _deskripsi = $('#kt_summernote_2').summernote('code');

    var _kodjawatanjpa = $('#IdGetKodJPA').val();
    var fokus = 0;

    _kelayakan = _kelayakan.trim();
    _deskripsi = _deskripsi.trim();

    if (_fungsi.length == 0 ||
        _skim.length == 0 ||
        _kodjwtn.length == 0 ||
        _namajawatan.length == 0 ||
        _pengkhususan.length == 0 ||
        _bidangkhusus.length == 0 ||
        _kumpkhidmat.length == 0) {

        if (_fungsi.length == 0) {
            document.getElementById("IdModalItemFungsi").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemFungsi").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemFungsi").style.borderColor = ""; }

        if (_skim.length == 0) {
            document.getElementById("IdModalItemSkim").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemSkim").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemSkim").style.borderColor = ""; }

        if (_kodjwtn.length == 0) {
            document.getElementById("IdModalItemSubSkim").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemSubSkim").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemSubSkim").style.borderColor = ""; }

        if (_namajawatan.length == 0) {
            document.getElementById("IdModalItemSubKodJawatan").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemSubKodJawatan").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemSubKodJawatan").style.borderColor = ""; }

        if (_kumpkhidmat.length == 0) {
            document.getElementById("IdModalItemSubNamaJawatan").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemSubNamaJawatan").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemSubNamaJawatan").style.borderColor = ""; }

        if (_pengkhususan.length == 0) {
            document.getElementById("IdModalItemKhusus").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemKhusus").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemKhusus").style.borderColor = ""; }

        if (_bidangkhusus.length == 0) {
            document.getElementById("IdModalItemSubKhusus").style.borderColor = "red";
            if (fokus == 0) { document.getElementById("IdModalItemSubKhusus").focus(); fokus = 1; }
        } else { document.getElementById("IdModalItemSubKhusus").style.borderColor = ""; }

        toastr.warning("Info belum diisi", "SILA ISI SEMUA MAKLUMAT JAWATAN.");
        _ok = false;
    }

    var _path = $('#IdPathServer').val();
    var event = _path + '/PreServices/JadualGaji';
    var _data = JSON.stringify({
        'KOD_JAWATAN_JPA': _kodjawatanjpa, 'JAWATAN_PK': _jawatanpk, 'PERINCIAN_PK': _perincianpk, 'NO_SIRI_JAWATAN': _nosirijawatan, 'STATUS_IKLAN_FK': _statusiklan,
        'TARAF_JAWATAN_FK': _tarafjwtn, 'KATEGORI_JAWATAN_FK': _kategorijwtn, 'FUNGSI_FK': _fungsi, 'KLASIFIKASI': _skim, 'KOD_JAWATAN': _kodjwtn, 'Nama_Jawatan': _namajawatan,
        'KUMPULAN_PERKHIDMATAN_FK': _kumpkhidmat, 'JENIS_IKLAN_FK': _jenisiklan, 'KAMPUS_FK': _kampus, 'KOD_PTJ': _fakulti, 'PENGKHUSUSAN': _pengkhususan,
        'BIDANG_PENGKHUSUSAN_FK': _bidangkhusus, 'GAJI_MINIMUM': _gajiminimum, 'GAJI_MAKSIMUM': _gajimaximum, 'DES_KELAYAKAN': _kelayakan, 'DES_TUGAS': _deskripsi
    });

    var new_perincianpk = _perincianpk;
    var new_kodptj = _fakulti.substring(0, 1);

    if (_jawatanpk > 0) {
        $.ajax({
            type: "POST",
            url: event,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: _data,
            success: function (res) {
                var _res = res.RESULTSET;
                if (_res == "2") {
                    new_perincianpk = res.PERINCIAN_PK;
                    toastr.success("Info semua diisi", "Berjaya Simpan.");
                    //$('#IdBtnKodItemRefreshScreen').click().delay(8500);
                    //sessionStorage.setItem("IdGetKodJPA", _kodjawatanjpa);
                } else {
                    toastr.warning("Info belum diisi", "Tidak Berjaya Simpan.");
                }
                window.location.href = _path + '/PreServices/JadualGaji/' + _jawatanpk + '~' + new_perincianpk + '~' + _kodjawatanjpa + '~' + _kodjwtn + '~' + new_kodptj;
                //window.location.href = _path + '/PreServices/JadualGaji';
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
