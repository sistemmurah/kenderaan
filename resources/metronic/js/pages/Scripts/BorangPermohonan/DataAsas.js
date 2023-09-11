"use strict";

var _path = $('#IdPathServer').val();
var PendaftaranWaran = function () {


    var _dataTableInit = function () {
        var t;
        $('#IdBtnItemSaveItem').click(function (e) {
            // saveUnsave();
            var _ok = true;
            var _MAKLUMAT_PERIBADI_PK = $('#MAKLUMAT_PERIBADI_PK').val();
            var _txtMyid = $('#txtMyid').val();
            var _txtNama = $('#txtNama').val(); 
            var _txtNotentera = $('#txtNotentera').val();
            var _txtEmail = $('#txtEmail').val();
            var _txtNosuratberanak = $('#txtNosuratberanak').val();
            var _kt_datepicker_5 = $('#kt_datepicker_5').val(); // tarikh lahir 
           // var day = _kt_datepicker_5.substring(0, 2);
           // var month = _kt_datepicker_5.substring(3, 5);
           // var year = _kt_datepicker_5.substring(6, 10);
            //_kt_datepicker_5 = month + "/" + day + "/" + year;

            var _IdDDKumpAgama = $('#IdDDKumpAgama').val();
            var _IdDDKumpBangsa = $('#IdDDKumpBangsa').val();
            var _IdDDKumpWarganegara = $('#IdDDKumpWarganegara').val();
            var _IdDDKumpWarnaKad = $('#IdDDKumpWarnaKad').val();
            var _IdDDKumpKahwin = $('#IdDDKumpKahwin').val();
            var _IdDDKumpJantina = $('#IdDDKumpJantina').val();
            var _txtNoSocso = $('#txtNoSocso').val();
            var _txtNoKWSP = $('#txtNoKWSP').val();
            var _radioKontrak = $('#radioKontrak').val();
            var fokus = 0;
            const rbs = document.querySelectorAll('input[name="radioKontrak"]');
            let _adakontrak;
            for (const rb of rbs) {
                if (rb.checked) {
                    _adakontrak = rb.value;
                    break;
                }
            }

            var _txtNoLHDN = $('#txtNoLHDN').val();
            var _txtAlamatMenyuratFk = 0; _txtAlamatMenyuratFk = $('#txtAlamatMenyuratFk').val();
            var _txtAlamatMenyurat1 = $('#txtAlamatMenyurat1').val();
            var _txtAlamatMenyurat2 = $('#txtAlamatMenyurat2').val();
            var _txtPoskodMenyurat = $('#txtPoskodMenyurat').val();
            var _IdDDBandarMenyurat = $('#IdDDBandarMenyurat').val();
            var _IdDDNegeriMenyurat = $('#IdDDNegeriMenyurat').val();
            var _IdDDNegaraMenyurat = $('#IdDDNegaraMenyurat').val();
            var _txtAlamatTetapFk = 0; _txtAlamatTetapFk = $('#txtAlamatTetapFk').val();
            var _txtAlamatTetap1 = $('#txtAlamatTetap1').val();
            var _txtAlamatTetap2 = $('#txtAlamatTetap2').val();
            var _txtPoskodTetap = $('#txtPoskodTetap').val();
            var _IdDDBandarTetap = $('#IdDDBandarTetap').val();
            var _IdDDNegeriTetap = $('#IdDDNegeriTetap').val();
            var _IdDDNegaraTetap = $('#IdDDNegaraTetap').val();
            var _notelperibadimenyurat = $('#notelperibadimenyurat').val();
            var _notelperibaditetap = $('#notelperibaditetap').val();
            var _notellainmenyurat = $('#notellainmenyurat').val();
            var _notellaintetap = $('#notellaintetap').val();
            var _emailutama = $('#emailutama').val();
            var _emailkedua = $('#emailkedua').val();

            if (_txtMyid.length == 0 ||
                _txtNama.length == 0 ||
                _kt_datepicker_5.length == 0 ||
                _IdDDKumpAgama.length == 0 ||
                _IdDDKumpBangsa.length == 0 ||
                _IdDDKumpWarganegara.length == 0 ||
                _IdDDKumpWarnaKad.length == 0 ||
                _IdDDKumpKahwin.length == 0 ||
                _IdDDKumpJantina.length == 0 ||
                _txtAlamatMenyurat1.length == 0 ||
                _txtAlamatMenyurat2.length == 0 ||
                _txtPoskodMenyurat.length == 0 ||
                _IdDDBandarMenyurat.length == 0 ||
                _IdDDNegeriMenyurat.length == 0 ||
                _IdDDNegaraMenyurat.length == 0 ||
                _txtAlamatTetap1.length == 0 ||
                _txtAlamatTetap2.length == 0 ||
                _txtPoskodTetap.length == 0 ||
                _IdDDBandarTetap.length == 0 ||

                _IdDDNegeriTetap.length == 0 ||
                _IdDDNegaraTetap.length == 0 ||
                _notelperibaditetap.length == 0 ||
                _notelperibadimenyurat.length == 0) {

                if (_txtNama.length == 0) {
                    document.getElementById("txtNama").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtNama").focus(); fokus = 1; }
                }                
                if (_kt_datepicker_5 == "01/01/0001") {
                    document.getElementById("kt_datepicker_5").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("kt_datepicker_5").focus(); fokus = 1; }
                }
                if (_IdDDKumpAgama.length == 0) {
                    document.getElementById("IdDDKumpAgama").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpAgama").focus(); fokus = 1; }
                }
                if (_IdDDKumpBangsa.length == 0) {
                    document.getElementById("IdDDKumpBangsa").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpBangsa").focus(); fokus = 1; }
                }
                if (_IdDDKumpWarganegara.length == 0) {
                    document.getElementById("IdDDKumpWarganegara").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpWarganegara").focus(); fokus = 1; }
                }
                if (_IdDDKumpWarnaKad.length == 0) {
                    document.getElementById("IdDDKumpWarnaKad").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpWarnaKad").focus(); fokus = 1; }
                }
                if (_IdDDKumpKahwin.length == 0) {
                    document.getElementById("IdDDKumpKahwin").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpKahwin").focus(); fokus = 1; }
                }
                if (_IdDDKumpJantina.length == 0) {
                    document.getElementById("IdDDKumpJantina").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDKumpJantina").focus(); fokus = 1; }
                }
                if (_adakontrak == null) {
                    document.getElementById("RadioButtonA").style.color = "red";
                    document.getElementById("RadioButtonB").style.color = "red";

                }
                if (_txtAlamatMenyurat1.length == 0) {
                    document.getElementById("txtAlamatMenyurat1").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtAlamatMenyurat1").focus(); fokus = 1; }
                }
                if (_txtAlamatMenyurat2.length == 0) {
                    document.getElementById("txtAlamatMenyurat2").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtAlamatMenyurat2").focus(); fokus = 1; }
                }
                if (_txtPoskodMenyurat.length == 0) {
                    document.getElementById("txtPoskodMenyurat").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtPoskodMenyurat").focus(); fokus = 1; }
                }

                if (_IdDDBandarMenyurat.length == 0) {
                    document.getElementById("IdDDBandarMenyurat").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDBandarMenyurat").focus(); fokus = 1; }
                }

                if (_IdDDNegeriMenyurat.length == 0) {
                    document.getElementById("IdDDNegeriMenyurat").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDNegeriMenyurat").focus(); fokus = 1; }
                }

                if (_IdDDNegaraMenyurat.length == 0) {
                    document.getElementById("IdDDNegaraMenyurat").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDNegaraMenyurat").focus(); fokus = 1; }
                }

                if (_txtAlamatTetap1.length == 0) {
                    document.getElementById("txtAlamatTetap1").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtAlamatTetap1").focus(); fokus = 1; }
                }

                if (_txtAlamatTetap2.length == 0) {
                    document.getElementById("txtAlamatTetap2").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtAlamatTetap2").focus(); fokus = 1; }
                }

                if (_txtPoskodTetap.length == 0) {
                    document.getElementById("txtPoskodTetap").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("txtPoskodTetap").focus(); fokus = 1; }
                }

                if (_IdDDBandarTetap.length == 0) {
                    document.getElementById("IdDDBandarTetap").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDBandarTetap").focus(); fokus = 1; }
                }

                if (_IdDDNegeriTetap.length == 0) {
                    document.getElementById("IdDDNegeriTetap").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDNegeriTetap").focus(); fokus = 1; }
                }
                if (_IdDDNegaraTetap.length == 0) {
                    document.getElementById("IdDDNegaraTetap").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("IdDDNegaraTetap").focus(); fokus = 1; }
                }

                if (_notelperibaditetap.length == 0) {
                    document.getElementById("notelperibaditetap").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("notelperibaditetap").focus(); fokus = 1; }

                }
                if (_notelperibadimenyurat.length == 0) {
                    document.getElementById("notelperibadimenyurat").style.borderColor = "red";
                    if (fokus == 0) { document.getElementById("notelperibadimenyurat").focus; fokus = 1; }
                }
                toastr.warning("Mesejnya disini", "Sila pastikan semua lengkap. ");
                _ok = false;
            }






            if (_ok == true) {
                var _askText = "Are you sure to SAVE this record ?";
                var _path = $('#IdPathServer').val();
                var event = _path + '/BorangPermohonan/Process_DataAsasSaveAjax';

                var _data = JSON.stringify({
                    'MAKLUMAT_PERIBADI_PK': _MAKLUMAT_PERIBADI_PK,
                    'NO_KP_BARU': _txtMyid,
                    'NAMA': _txtNama,
                    'NO_POLIS': _txtNotentera,
                    'EMAIL_KEDUA': _emailkedua,
                    'NO_SURAT_BERANAK': _txtNosuratberanak,
                    'TKH_LAHIR': _kt_datepicker_5,
                    'AGAMA': _IdDDKumpAgama,
                    'BANGSA_FK': _IdDDKumpBangsa,
                    'KOD_WARGANEGARA': _IdDDKumpWarganegara,
                    'WARNA_KP': _IdDDKumpWarnaKad,
                    'STATUS_KAHWIN': _IdDDKumpKahwin,
                    'JANTINA': _IdDDKumpJantina,
                    'NO_SOCSO': _txtNoSocso,
                    'NO_KWSP': _txtNoKWSP,
                    'ADAKONTRAK': _adakontrak,
                    'NO_LHDN': _txtNoLHDN,
                    'ALAMAT_MENYURAT_FK': _txtAlamatMenyuratFk,
                    'ALAMAT_TETAP_FK': _txtAlamatTetapFk,

                    'ALAMATTETAP1': _txtAlamatTetap1,
                    'ALAMATTETAP2': _txtAlamatTetap2,
                    'BANDARTETAP_FK': _IdDDBandarTetap,
                    'KODNEGARATETAP_FK': _IdDDNegaraTetap,
                    'POSKODTETAP': _txtPoskodTetap,
                    'NEGERITETAP_FK': _IdDDNegeriTetap,
                    'NO_TELEFONTETAP': _notellaintetap,
                    'NO_TEL_BIMBITTETAP': _notelperibaditetap,

                    'ALAMATSURAT1': _txtAlamatMenyurat1,
                    'ALAMATSURAT2': _txtAlamatMenyurat2,
                    'BANDARSURAT_FK': _IdDDBandarMenyurat,
                    'KODNEGARASURAT_FK': _IdDDNegaraMenyurat,
                    'POSKODSURAT': _txtPoskodMenyurat,
                    'NEGERISURAT_FK': _IdDDNegeriMenyurat,
                    'NO_TELEFONSURAT': _notellainmenyurat,
                    'NO_TEL_BIMBITSURAT': _notelperibadimenyurat
                });

                $.ajax({
                    type: "POST",
                    url: event,
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            Swal.fire(
                                "Berjaya!",
                                "Rekod telah disimpan",
                                "success"
                            );

                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            setTimeout(function () {
                                window.location.href = _path + '/BorangPermohonan/Keluarga';
                            }, 2000);
                        } else {                            
                            Swal.fire(
                                "Ralat!",
                                "Gagal Simpan. Sila Semak Semula",
                                "error"
                            );
                        }
                    },
                    error: function (xhr, _httpStatusMessage, customErrorMessage) {
                        if (xhr.status === 410 || xhr.status === 500) {
                            alert(customErrorMessage);
                        } else {
                            toastr.warning("", "<font color='#800000'>xx" + customErrorMessage + "</font>");
                        }
                    }
                });
            }
        });

        $(".btnAdd").click(function () {
            var td1 = '<td>@Html.DropDownListFor(modelItem => modelItem.KATEGORI_KELAS, new SelectList(Model.ListDDKumpLesen, "Key", "ViewField"), "-- Please Select --", new { @class = "form-control col-lg-12", id = "kategori_kelas" })</td>';
            var td2 = '<td><input type="text" id="no_lesen_memandu" class="form-control"></td>';
            var td3 = '<td><input type="text" class="form-control" placeholder="Sila masukkan tarikh : 01/01/2015" id="kt_datepicker_1" />                                    </td>';
            $("tbody").append('<tr><td></td>' + td1 + td2 + td3 + '</tr>');
        });
        function getAllData() {
            var data = [];
            $('tbody tr').each(function () {
                var _katkelas = $(this).find('#kategori_kelas').val();
                var _nolesenmemandu = $(this).find('#no_lesen_memandu').val();
                var _tkhtamatlesen = $(this).find('#tkh_tamat_lesen').val();
                var day = _tkhtamatlesen.substring(0, 2);
                var month = _tkhtamatlesen.substring(3, 5);
                var year = _tkhtamatlesen.substring(6, 10);
                _tkhtamatlesen = month + "/" + day + "/" + year;
                var _pemohonfk = $(this).find('#pemohonfk').val();
                var alldata = {
                    'KATEGORI_KELAS': _katkelas,
                    'NO_LESEN_MEMANDU': _nolesenmemandu,
                    'TKH_TAMAT': _tkhtamatlesen,
                    'PEMOHON_FK': _pemohonfk
                }
                data.push(alldata);
            });
            console.log(data);
            return data;
        }

        $('#btnSubmit').click(function () {
            var _kat_kelas = $('#kategori_kelas').val();
            var _nolesen = $('#no_lesen_memandu').val();
            var _tkhtmtlesen = $('#kt_datepicker_1').val();
            //var day = _tkhtmtlesen.substring(0, 2);
            //var month = _tkhtmtlesen.substring(3, 5);
            //var year = _tkhtmtlesen.substring(6, 10);
            //_tkhtmtlesen = month + "/" + day + "/" + year;
            var _pemohonfk = $('#pemohonfk').val();
            var status = false;
            var event = _path + '/BorangPermohonan/Process_ButiranLesenSaveAjax';
            var _data = JSON.stringify({
                'KATEGORI_KELAS': _kat_kelas, 'NO_LESEN_MEMANDU': _nolesen, 'TKH_TAMAT': _tkhtmtlesen, 'PEMOHON_FK': _pemohonfk
            });
            saveUnsave();
            if (_kat_kelas.length > 0 && _nolesen.length > 0 && _tkhtmtlesen.length > 3) {
                status = true;
            }
            if (status == true) {
                $.ajax({
                    type: 'POST',
                    url: event,
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    data: _data,
                    success: function (res) {
                        if (res.RESULTSET == "2") {
                            Swal.fire(
                                "Berjaya!",
                                "Rekod anda telah disimpan",
                                "success"
                            );                     
                            $('#IdBtnKodItemRefreshScreen').click().delay(8500);
                            location.reload();
                            $('#kategori_kelas').val('');
                            $('#no_lesen_memandu').val('');
                            $('#kt_datepicker_1').val('');


                        } else {
                            Swal.fire(
                                "Ralat!",
                                "Gagal Simpan. Sila Semak Semula",
                                "error"
                            );
                        }
                    },
                    error: function (xhr, _httpStatusMessage, customErrorMessage) {
                        if (xhr.status === 410 || xhr.status === 500) {
                            alert(customErrorMessage);
                        } else {                            
                            Swal.fire(
                                "Ralat!",
                                "Gagal Simpan. Sila Semak Semula",
                                "error"
                            );
                        }
                    }
                });
            }
            if (status == false) {
                Swal.fire(
                    "Ralat!",
                    "Gagal Simpan. Sila Semak Semula",
                    "error"
                );
            }
        });

        var x = $('#INSTITUT_NAMA').val();


        $('#IdDDNegaraTetap').change(function (e)                                                                                                                                                           {
            var _value = $('#IdDDNegaraTetap').val();

            if (_value == "MYS") {
                $('#IdDDNegeriTetap').prop('disabled', false).trigger("chosen:updated");
                $('#IdDDBandarTetap').prop('disabled', false).trigger("chosen:updated");                    
            }
            else {
                $('#IdDDNegeriTetap').prop('disabled', true).trigger("chosen:updated");    
                $('#IdDDBandarTetap').prop('disabled', true).trigger("chosen:updated");                    
                document.getElementById('IdDDNegeriTetap').value = "";
                document.getElementById("IdDDBandarTetap").value = "";
            }
        });

        $('#IdDDNegaraMenyurat').change(function (e) {
            var _value = $('#IdDDNegaraMenyurat').val();
            if (_value == "MYS") {
                $('#IdDDNegeriMenyurat').prop('disabled', false).trigger("chosen:updated");
                $('#IdDDBandarMenyurat').prop('disabled', false).trigger("chosen:updated");

            }
            else {
                $('#IdDDNegeriMenyurat').prop('disabled', true).trigger("chosen:updated");    
                $('#IdDDBandarMenyurat').prop('disabled', true).trigger("chosen:updated");    
                document.getElementById('IdDDNegeriMenyurat').value = "";
                document.getElementById("IdDDBandarMenyurat").value = "";
            }
        });

        // Script untuk filter
        $('#IdDDNegeriMenyurat').change(function (e) {
            var _value = $('#IdDDNegeriMenyurat').val();
            var _path = $('#IdPathServer').val();
            var _data = JSON.stringify({
                'NEGERI_FK': _value
            });
            $.ajax({
                type: "POST",
                url: _path + "/BorangPermohonan/MtdGetSubKategoriNegeriAjax",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: _data,
                success: function (res) {
                    var _html = "";
                    if (res != null) {
                        // $('#IdDDBandarMenyurat').chosen('destroy');  
                        $('#IdDDBandarMenyurat').html(_html);
                        $('#IdDDBandarMenyurat').append('<option value="">Sila Pilih</option>');
                        $.each(res, function (u) {
                            _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                            $('#IdDDBandarMenyurat').append(_html);
                        });
                        $('#IdDDBandarMenyurat').chosen('destroy'); 
                        $('#IdDDBandarMenyurat').chosen();  

                    } else {
                        toastr.warning("", "<font color='#800000'> Category Code  Not Found.</font>");
                    }
                },
                error: function (xhr, httpStatusMessage, customErrorMessage) {
                    if (xhr.status === 410 || xhr.status === 500) {
                        alert(customErrorMessage);
                    } else {
                        toastr.warning("", "<font color='#800000'>Error Code " + httpStatusMessage + "</font>");
                    }
                }
            });
        });

        $('#IdDDNegeriTetap').change(function (e) {
            var _value = $('#IdDDNegeriTetap').val();
            var _path = $('#IdPathServer').val();
            var _data = JSON.stringify({
                'NEGERI_FK': _value
            });
            $.ajax({
                type: "POST",
                url: _path + "/BorangPermohonan/MtdGetSubKategoriNegeriAjax",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: _data,
                success: function (res) {
                    var _html = "";
                    if (res != null) {
                        $('#IdDDBandarTetap').html(_html);
                        $('#IdDDBandarTetap').append('<option value="">Sila Pilih</option>');
                        $.each(res, function (u) {
                            _html = '<option value="' + res[u].Key + '">' + res[u].ViewField + '</option>';
                            $('#IdDDBandarTetap').append(_html);
                        });
                        $('#IdDDBandarTetap').chosen('destroy');
                        $('#IdDDBandarTetap').chosen();  
                    } else {
                        toastr.warning("", "<font color='#800000'> Category Code  Not Found.</font>");
                    }
                },
                error: function (xhr, httpStatusMessage, customErrorMessage) {
                    if (xhr.status === 410 || xhr.status === 500) {
                        alert(customErrorMessage);
                    } else {
                        toastr.warning("", "<font color='#800000'>Error Code " + httpStatusMessage + "</font>");
                    }
                }
            });
        });

        $("#IdDDKumpWarganegara").chosen();     

        $("#IdDDNegaraMenyurat").chosen();
        $("#IdDDNegeriMenyurat").chosen();      
        $("#IdDDBandarMenyurat").chosen();

        $("#IdDDNegaraTetap").chosen();
        $("#IdDDNegeriTetap").chosen();          
        $("#IdDDBandarTetap").chosen();

        

        if (document.getElementById("myCheck").checked == true) {

            $('#IdDDNegaraTetap').prop('disabled', true).trigger("chosen:updated");        
            $('#IdDDBandarTetap').prop('disabled', true).trigger("chosen:updated");
            $('#IdDDNegeriTetap').prop('disabled', true).trigger("chosen:updated");

           
            document.getElementById('txtAlamatTetap1').disabled = 'disabled';
            document.getElementById('txtAlamatTetap2').disabled = 'disabled';
            document.getElementById('txtPoskodTetap').disabled = 'disabled';
            document.getElementById('IdDDBandarTetap').disabled = 'disabled';
           
            document.getElementById('IdDDNegeriTetap').disabled = 'disabled';
            document.getElementById('IdDDNegaraTetap').disabled = 'disabled';






        }
        
        var paparanSkrin = $('#paparanSkrin').val();

        if (paparanSkrin == " disabled ") {


            document.getElementById('txtNama').disabled = 'disabled';
            document.getElementById('txtNotentera').disabled = 'disabled';
            document.getElementById('emailkedua').disabled = 'disabled';
            document.getElementById('txtNosuratberanak').disabled = 'disabled';
            document.getElementById('kt_datepicker_5').disabled = 'disabled';
            $('#IdDDKumpWarganegara').prop('disabled', true).trigger("chosen:updated");


            document.getElementById('IdDDKumpAgama').disabled = 'disabled';
            document.getElementById('IdDDKumpBangsa').disabled = 'disabled';
            document.getElementById('IdDDKumpWarganegara').disabled = 'disabled';
            document.getElementById('IdDDKumpWarnaKad').disabled = 'disabled';
            document.getElementById('IdDDKumpKahwin').disabled = 'disabled';
            document.getElementById('IdDDKumpJantina').disabled = 'disabled';
            document.getElementById('txtNoSocso').disabled = 'disabled';
            document.getElementById('txtNoKWSP').disabled = 'disabled';
            // document.getElementById('radioKontrak').disabled = 'disabled';
            
            document.getElementById('ADAKONTRAK1').disabled = 'disabled';
            document.getElementById('ADAKONTRAK2').disabled = 'disabled';
            document.getElementById('txtNoLHDN').disabled = 'disabled';

            document.getElementById('txtAlamatMenyurat1').disabled = 'disabled';
            document.getElementById('txtAlamatMenyurat2').disabled = 'disabled';
            document.getElementById('txtPoskodMenyurat').disabled = 'disabled';            
            $('#IdDDBandarMenyurat').prop('disabled', true).trigger("chosen:updated");
            $('#IdDDNegeriMenyurat').prop('disabled', true).trigger("chosen:updated");
            $('#IdDDNegaraMenyurat').prop('disabled', true).trigger("chosen:updated");
            
            document.getElementById('txtAlamatTetap1').disabled = 'disabled';
            document.getElementById('txtAlamatTetap2').disabled = 'disabled';
            document.getElementById('txtPoskodTetap').disabled = 'disabled';
            $('#IdDDNegaraTetap').prop('disabled', true).trigger("chosen:updated");
            $('#IdDDBandarTetap').prop('disabled', true).trigger("chosen:updated");
            $('#IdDDNegeriTetap').prop('disabled', true).trigger("chosen:updated");

            document.getElementById('notelperibadimenyurat').disabled = 'disabled';
            document.getElementById('notelperibaditetap').disabled = 'disabled';
            document.getElementById('notellainmenyurat').disabled = 'disabled';
            document.getElementById('notellaintetap').disabled = 'disabled';
            document.getElementById('emailutama').disabled = 'disabled';
            document.getElementById('emailkedua').disabled = 'disabled';                     

            document.getElementById('myCheck').disabled = 'disabled';         

            document.getElementById('kategori_kelas').disabled = 'disabled';     
            document.getElementById('no_lesen_memandu').disabled = 'disabled';     
            document.getElementById('kt_datepicker_1').disabled = 'disabled';     
                                 
            var totalLesen = $('#totalLesen').val();
            
            for (var i = 1; i <= totalLesen; i++) {
                document.getElementById("lesen" + i).style.display = "none";                
            } 
            document.getElementById('btnSubmit').disabled = 'disabled';         
        }
        


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

function salinAlamatFunc() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true) {

        var _txtAlamatMenyurat1 = $('#txtAlamatMenyurat1').val();
        var _txtAlamatMenyurat2 = $('#txtAlamatMenyurat2').val();
        var _txtPoskodMenyurat = $('#txtPoskodMenyurat').val();
        var _IdDDBandarMenyurat = $('#IdDDBandarMenyurat').val();
        
        var _IdDDNegeriMenyurat = $('#IdDDNegeriMenyurat').val();
        var _IdDDNegaraMenyurat = $('#IdDDNegaraMenyurat').val();

        document.getElementById('txtAlamatTetap1').value = _txtAlamatMenyurat1;
        document.getElementById('txtAlamatTetap2').value = _txtAlamatMenyurat2;
        document.getElementById('txtPoskodTetap').value = _txtPoskodMenyurat;      
        document.getElementById('IdDDBandarTetap').value = _IdDDBandarMenyurat;

        $('#IdDDNegeriTetap').prop('disabled', true).trigger("chosen:updated");
        $("#IdDDNegeriTetap").val(_IdDDNegeriMenyurat).trigger("chosen:updated");
       


        $('#IdDDNegaraTetap').prop('disabled', true).trigger("chosen:updated");
        $("#IdDDNegaraTetap").val(_IdDDNegaraMenyurat).trigger("chosen:updated");

        document.getElementById('txtAlamatTetap1').disabled = 'disabled';
        document.getElementById('txtAlamatTetap2').disabled = 'disabled';
        document.getElementById('txtPoskodTetap').disabled = 'disabled';

        $('#IdDDBandarTetap').prop('disabled', true).trigger("chosen:updated");
        $("#IdDDBandarTetap").val(_IdDDBandarMenyurat).trigger("chosen:updated");

        document.getElementById('IdDDNegeriTetap').disabled = 'disabled';
       

    } else {
        document.getElementById('txtAlamatTetap1').value = '';
        document.getElementById('txtAlamatTetap2').value = '';
        document.getElementById('txtPoskodTetap').value = '';
        document.getElementById('IdDDBandarTetap').value = '';
        document.getElementById('IdDDNegeriTetap').value = '';
        document.getElementById('IdDDNegaraTetap').value = '';
        document.getElementById('txtAlamatTetap1').disabled = '';
        document.getElementById('txtAlamatTetap2').disabled = '';
        document.getElementById('txtPoskodTetap').disabled = '';
        document.getElementById('IdDDBandarTetap').disabled = '';
        document.getElementById('IdDDNegeriTetap').disabled = '';
      
        $('#IdDDNegaraTetap').prop('disabled', false).trigger("chosen:updated");
        $('#IdDDBandarTetap').prop('disabled', false).trigger("chosen:updated");
        $('#IdDDNegeriTetap').prop('disabled', false).trigger("chosen:updated");





      
    }
}

function btnShowModalXX() {

    $('#m_modal_SahXX').modal({
        keyboard: true,
        backdrop: "static"
    });
}

function saveUnsave() {
    var _MAKLUMAT_PERIBADI_PK = $('#MAKLUMAT_PERIBADI_PK').val();
    var _txtMyid = $('#txtMyid').val();
    var _txtNama = $('#txtNama').val();
    var _txtNotentera = $('#txtNotentera').val();
    var _emailkedua = $('#emailkedua').val();
    var _txtNosuratberanak = $('#txtNosuratberanak').val();
    var _kt_datepicker_5 = $('#kt_datepicker_5').val(); 
    var _IdDDKumpAgama = $('#IdDDKumpAgama').val();

    var _IdDDKumpBangsa = $('#IdDDKumpBangsa').val();
    var _IdDDKumpWarganegara = $('#IdDDKumpWarganegara').val();
    var _IdDDKumpWarnaKad = $('#IdDDKumpWarnaKad').val();
    var _IdDDKumpKahwin = $('#IdDDKumpKahwin').val();
    var _IdDDKumpJantina = $('#IdDDKumpJantina').val();
    var _txtNoSocso = $('#txtNoSocso').val();
    var _txtNoKWSP = $('#txtNoKWSP').val();   

    const rbs = document.querySelectorAll('input[name="ADAKONTRAK"]');
    let _adakontrak;
    for (const rb of rbs) {
        if (rb.checked) {
            _adakontrak = rb.value;
            break;
        }
    }

    var _txtNoLHDN = $('#txtNoLHDN').val();
    var _txtAlamatMenyuratFk = 0; _txtAlamatMenyuratFk = $('#txtAlamatMenyuratFk').val();
    var _txtAlamatMenyurat1 = $('#txtAlamatMenyurat1').val();
    var _txtAlamatMenyurat2 = $('#txtAlamatMenyurat2').val();
    var _txtPoskodMenyurat = $('#txtPoskodMenyurat').val();
    var _IdDDBandarMenyurat = $('#IdDDBandarMenyurat').val();
    var _IdDDNegeriMenyurat = $('#IdDDNegeriMenyurat').val();
    var _IdDDNegaraMenyurat = $('#IdDDNegaraMenyurat').val();

    var _txtAlamatTetapFk = 0; _txtAlamatTetapFk = $('#txtAlamatTetapFk').val();
    var _txtAlamatTetap1 = $('#txtAlamatTetap1').val();
    var _txtAlamatTetap2 = $('#txtAlamatTetap2').val();
    var _txtPoskodTetap = $('#txtPoskodTetap').val();
    var _IdDDBandarTetap = $('#IdDDBandarTetap').val();
    var _IdDDNegeriTetap = $('#IdDDNegeriTetap').val();
    var _IdDDNegaraTetap = $('#IdDDNegaraTetap').val();

    var _notelperibadimenyurat = $('#notelperibadimenyurat').val();
    var _notelperibaditetap = $('#notelperibaditetap').val();
    var _notellainmenyurat = $('#notellainmenyurat').val();
    var _notellaintetap = $('#notellaintetap').val();
    var _emailutama = $('#emailutama').val();

    


    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/Process_SaveUnSave';

    var _data = JSON.stringify({
        'MAKLUMAT_PERIBADI_PK': _MAKLUMAT_PERIBADI_PK,
        'NO_KP_BARU': _txtMyid,
        'NAMA': _txtNama,
        'NO_POLIS': _txtNotentera,
        'EMAIL_KEDUA': _emailkedua,
        'NO_SURAT_BERANAK': _txtNosuratberanak,
        'TKH_LAHIR': _kt_datepicker_5,
        'AGAMA': _IdDDKumpAgama,
        'BANGSA_FK': _IdDDKumpBangsa,
        'KOD_WARGANEGARA': _IdDDKumpWarganegara,
        'WARNA_KP': _IdDDKumpWarnaKad,
        'STATUS_KAHWIN': _IdDDKumpKahwin,
        'JANTINA': _IdDDKumpJantina,
        'NO_SOCSO': _txtNoSocso,
        'NO_KWSP': _txtNoKWSP,
        'ADAKONTRAK': _adakontrak,
        'NO_LHDN': _txtNoLHDN,
        'ALAMAT_MENYURAT_FK': _txtAlamatMenyuratFk,
        
        'ALAMAT_TETAP.ALAMAT_PK': _txtAlamatTetapFk,
        'ALAMAT_TETAP.ALAMAT1': _txtAlamatTetap1,
        'ALAMAT_TETAP.ALAMAT2': _txtAlamatTetap2,
        'ALAMAT_TETAP.BANDAR_FK': _IdDDBandarTetap,
        'ALAMAT_TETAP.KODNEGARA_FK': _IdDDNegaraTetap,
        'ALAMAT_TETAP.POSKOD': _txtPoskodTetap,
        'ALAMAT_TETAP.NEGERI_FK': _IdDDNegeriTetap,
        'ALAMAT_TETAP.NO_TELEFON': _notellaintetap,
        'ALAMAT_TETAP.NO_TEL_BIMBIT': _notelperibaditetap,

        'ALAMAT_MENYURAT.ALAMAT_PK': _txtAlamatMenyuratFk,
        'ALAMAT_MENYURAT.ALAMAT1': _txtAlamatMenyurat1,
        'ALAMAT_MENYURAT.ALAMAT2': _txtAlamatMenyurat2,
        'ALAMAT_MENYURAT.BANDAR_FK': _IdDDBandarMenyurat,
        'ALAMAT_MENYURAT.KODNEGARA_FK': _IdDDNegaraMenyurat,
        'ALAMAT_MENYURAT.POSKOD': _txtPoskodMenyurat,
        'ALAMAT_MENYURAT.NEGERI_FK': _IdDDNegeriMenyurat,
        'ALAMAT_MENYURAT.NO_TELEFON': _notellainmenyurat,
        'ALAMAT_MENYURAT.NO_TEL_BIMBIT': _notelperibadimenyurat
    });


    $.ajax({
        type: "POST",
        url: event,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: _data,
        success: function (res) {
            var _res = res.RESULTSET;

            if (_res == "2") {              
                     
                    
                    
                
            } else {
                toastr.warning("", "<font color='#800000'>TIADA REKOD UNTUK DIKEMASKINI</font>");
            }
        },
        error: function (xhr, httpStatusMessage, customErrorMessage) {
            if (xhr.status === 410 || xhr.status === 500) {
                alert(customErrorMessage);
            } else {
                toastr.warning("", "<font color='#800000'>DError Code</font>");
            }
        }
    });

























}

function fnCallModalItem(id) {
    var _dataid = $(id).attr("data-id");
    var _text = _dataid.split("~~");
    var _LESEN_MEMANDU_PK = _text[0];
    var _kod = _text[1];
    var _path = $('#IdPathServer').val();
    var event = _path + '/BorangPermohonan/Process_ButiranLesenSaveAjax';
    var _data = JSON.stringify({
        'LESEN_MEMANDU_PK': _LESEN_MEMANDU_PK, 'KOD_PROCESS': _kod
    });
    saveUnsave();

    Swal.fire({
        title: "Rekod Padam?",
        text: "Anda Pasti",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Tidak",
        confirmButtonText: "Ya, saya pasti!"
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: event,
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: _data,
                success: function (res) {
                    var _res = res.RESULTSET;
                    if (_res == "2") {
                        location.reload();
                    } else {
                        toastr.warning("Messagenya disini", "Tidak Berjaya Delete.");
                    }
                },
                error: function (xhr, httpStatusMessage, customErrorMessage) {
                    if (xhr.status === 410 || xhr.status === 500) {
                        alert(customErrorMessage);
                    } else {
                        toastr.warning("", "<font color='#800000'>Error Code 2</font>");
                    }
                }
            });
            Swal.fire(
                "Rekod telah dipadam!",
                "",
                "success"
            )
        }
    });


}

function fnLoad(id) {

    saveUnsave();
    setTimeout(function () {
        window.location.href = _path + '/BorangPermohonan/DataAsasLesenEdit/' + id;
    }, 1000);  
    //window.location.href = _path + '/BorangPermohonan/DataAsasLesenEdit/' + id;
}


function kiraUmur() {


    var _kt_datepicker_5 = $('#kt_datepicker_5').val(); // tarikh lahir 
    var umur = "";
    if (_kt_datepicker_5.length > 0) {
        var days = _kt_datepicker_5.substring(0, 2) * 1;
        var months = _kt_datepicker_5.substring(3, 5) * 1;
        var years = _kt_datepicker_5.substring(6, 10) * 1;


        var d = new Date();
        var dayN = d.getDay() * 1;
        var monthN = d.getMonth() + 1;
        var yearN = d.getFullYear() * 1;
        

        if (months <= monthN) {
            umur = (yearN - years) + " tahun " + (monthN - months) + " bulan";
        }
        else {
            umur = (yearN - years - 1) + " tahun " + (12 - months + monthN) + " bulan";
        }

       

    }
    $('#umur').val(umur);


}



