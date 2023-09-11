{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

     <!--begin::Card-->
     <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fa fa-user text-dark"></i> Maklumat Asas</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Nama Staf</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NAMA"
                                   value="" required="required" placeholder="Nama Staf"
                                   disabled="disabled"/>
                        </div>
                        <div class="col-lg-6">
                            <label>No. K/P/Passport/Polis/Tentera</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NO_KP"
                                   value=""
                                   required="required" placeholder="No. K/P/Passport/Polis/Tentera" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                                <label>Jantina</label>
                                <span style="color: red">*</span>
                                <select name="ctl00$MyContentPlaceHolder$ddlJantina"
                                    id="MyContentPlaceHolder_ddlJantina" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Lelaki">Lelaki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Agama</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlAgama"
                                    id="MyContentPlaceHolder_ddlAgama" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristian">Kristian</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>                        
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Warganegara</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlWarganegara"
                                    id="MyContentPlaceHolder_ddlWarganegara" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Islam">Malaysia</option>
                                <option value="Kristian">Singapura</option>
                                <option value="Hindu">Indonesia</option>
                                <option value="Budha">Thailand</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Negara</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlNegara"
                                    id="MyContentPlaceHolder_ddlNegara" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Islam">Malaysia</option>
                                <option value="Kristian">Singapura</option>
                                <option value="Hindu">Indonesia</option>
                                <option value="Budha">Thailand</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Status Perkahwinan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlStatusKahwin"
                                    id="MyContentPlaceHolder_ddlStatusKahwin" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Islam">Bujang</option>
                                <option value="Kristian">Berkahwin</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>No Pekerja</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="No Pekerja" value=""
                                   required="required" placeholder="9599" disabled="disabled"/>
                        </div>
                    </div>
                </div>

            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>

 <!--begin::Card-->
 <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Maklumat ROC</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Kuatkuasa </label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_1"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                            
                        </div>
                        <div class="col-lg-6">
                            <label>No Rujukan</label>                            
                            <input name="ctl00$MyContentPlaceHolder$txtNoRujukan" type="text"
                                   id="MyContentPlaceHolder_txtNoRujukan"
                                   class="form-control rounded-corner" placeholder="No Rujukan"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Kategori Pelantikan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlKategoriPelantikan"
                                    id="MyContentPlaceHolder_ddlKategoriPelantikan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="0101">0101 - Pelantikan Baru (Lapor Diri)</option>
                                <option value="0102">0102 - Perkhidmatan Kontrak</option>
                                <option value="0103">0103 - Kenaikan Pangkat Secara Lantikan(KPSL)</option>
                                <option value="0104">0104 - Pelantikan Penyelidik RMC</option>
                                <option value="0105">0105 - Pelawat/Tamu luar</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Jenis Pelantikan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisPelantikan"
                                    id="MyContentPlaceHolder_ddlJenisPelantika" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="010101">010101 - Lantikan Pertama di UTM(Baru-Tetap)</option>
                                <option value="010103">010103 - Lantikan Pertama di UTM(Pelantikan Kontrak)</option>
                                <option value="010104">010104 - Lantikan Jawatan Baru(Ubah Skim Perkhidmatan)</option>
                                <option value="010106">010106 - Lantikan ke Jawatan Tetap(Kakitangan Kontrak)</option>
                                <option value="010107">010107 - Lantikan ke Jawatan Tetap(Kakitangan Sementara)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Status</label>
                            <input name="ctl00$MyContentPlaceHolder$txtStatus" type="text"
                                   id="MyContentPlaceHolder_txtStatus"
                                   class="form-control rounded-corner" placeholder="Status"/>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: page content-->

        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-building text-dark"></i> Maklumat Perjawatan</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Taraf Jawatan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlTarafPerjawatan"
                                    id="MyContentPlaceHolder_ddlTarafPerjawatan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Sementara">Sementara</option>
                                <option value="Tetap">Tetap</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Jenis Bajet</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisBajet"
                                    id="MyContentPlaceHolder_ddlJenisBajet" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="A">A - Kumpulan Wang Amanah</option>
                                <option value="D">D - Kumpulan Wang Pembangunan</option>
                                <option value="Q">Q - Kumpulan Wang (RU)</option>
                                <option value="R">R - Kumpulan Wang Penyelidikan</option>
                                <option value="U">U - Kumpulan Wang Mengurus</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label> Jawatan</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtJawatan" type="text"
                                   id="MyContentPlaceHolder_txtJawatan" class="form-control"
                                   placeholder="Jawatan"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakultiJabatan"
                                    id="MyContentPlaceHolder_ddlFakultiJabatan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="K07">UTMDigital</option>
                                <option value="K01">Jabatan Pendaftar</option>
                                <option value="K02">Bendahari</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Bahagian</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtBahagian" type="text"
                                   id="MyContentPlaceHolder_txtBahagian" class="form-control"
                                   placeholder="Bahagian"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Unit</label>
                            <input name="ctl00$MyContentPlaceHolder$txtUnit" type="text"
                                   id="MyContentPlaceHolder_txtUnit" class="form-control"
                                   placeholder="Unit"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Pusat Kos</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakultiJabatan"
                                    id="MyContentPlaceHolder_ddlFakultiJabatan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="K07">U.J510700.0300.00000 - Sekolah Komputeran (One Off - Umum)</option>
                                <option value="K01">U.J510700.0100.00000 - Sekolah Komputeran (Sedia ada - Umum)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>No Surat Rujukan</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtNoSuratRujukan" type="text"
                                   id="MyContentPlaceHolder_txtNoSuratRujukan" class="form-control"
                                   placeholder="Bahagian"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Surat Rujukan</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_TarikhSuratRujukan"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                        <label>Tarikh Mula Kontrak</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_TarikhMulaKontrak"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                        <label>Tarikh Lantikan Terkini</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_TarikhLantikanTerkini"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Tamat Kontrak</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_TarikhTamatKontrak"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                        </div>
                    </div>

                    <div class="row form-group">
                    <div class="col-lg-12">
                    </div>
                    </div>

                    <div class="row form-group">
                            <div class="col-lg-12">
                                <div style="text-align: center;">                    
                                    <button type="button" id="IdButangSave" class="btn btn-light-success" style="text-align: center"><span class="far fa-edit"></span>  Kemaskini</button>
                                    <button type="button" id="IdButangBatal" class="btn btn-light-danger" style="text-align: center"><span class="far fa-trash-alt"></span>  Batal</button>
                                </div>
                            </div>                       
                    </div>
                </div>
            </div>

            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>

 <!--begin::Card-->
 <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-building text-dark"></i> Emolumen</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Skim</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="Skim" value=""
                                   required="required" placeholder="Skim" disabled="disabled"/>

                        </div>
                        <div class="col-lg-6">
                            <label>Gred Gaji</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKodPTJRA" type="text"
                                   id="MyContentPlaceHolder_txtGredGaji" class="form-control"
                                   placeholder="Gred Gaji"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label> No Akaun Gaji</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtNoAkaunGaji" type="text"
                                   id="MyContentPlaceHolder_txtNoAkaunGaji" class="form-control"
                                   placeholder="No Akaun Gaji"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Cara Bayaran Gaji</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakultiJabatan"
                                    id="MyContentPlaceHolder_ddlCaraBayarGaji" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="K07">Kredit ke bank</option>
                                <option value="K01">Cek</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Bulan Pergerakan Gaji</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlBulanPergerakanGaji"
                                    id="MyContentPlaceHolder_ddlBulanPergerakanGaji" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Januari">Januari</option>
                                <option value="April">April</option>
                                <option value="Julai">Julai</option>
                                <option value="Oktober">Oktober</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Bank</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlBank"
                                    id="MyContentPlaceHolder_ddlBank" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="CIMB">CIMB</option>
                                <option value="Maybank">Maybank</option>
                                <option value="BankRakyat">Bank Rakyat</option>
                                <option value="HongLeong">Hong Leong</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Sodo</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlSodo"
                                    id="MyContentPlaceHolder_ddlSodo" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="B11000">B11000 - Lantikan Tetap</option>
                                <option value="B29000">B29000 - Lantikan Kontrak </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Gaji Bulanan (RM)</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtKodKlasifikasi" type="text"
                                   id="MyContentPlaceHolder_txtKodKlasifikasi" class="form-control"
                                   placeholder="Kod Klasifikasi"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Mata Gaji</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlMataGaji"
                                    id="MyContentPlaceHolder_ddlMataGaji" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="B11000">P6 - Gaji Minimum RM3550 Gaji Maksimum RM5000 KGT RM130</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br />

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Maklumat Emolumen Baru</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Emolumen Baru</label>
                            <input name="ctl00$MyContentPlaceHolder$txtEmolumenBaru" type="text"
                                   id="MyContentPlaceHolder_txtEmolumenBaru"
                                   class="form-control rounded-corner" placeholder="Emolumen Baru"
                                   required="required"/>
                        </div>
                    </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                    <thead class="colored">
                        <tr>
                                        <th width="3%" style="text-align:left;">Bil</th>
                                        <th width="20%" style="text-align:left;">Item</th>
                                        <th width="10%" style="text-align:left;">Kod Gaji</th>
                                        <th width="10%" style="text-align:left;">RM</th>
                        </tr>
                    </thead>
                        <tbody>
                                             <tr>                                  
                                                <td>1</td>
                                                <td>Gaji Pokok </a></td>
                                                <td>001</td>
                                                <td>5955</td>
                                            </tr>
                                            <tr>                                  
                                                <td>2</td>
                                                <td>Imbuhan Tetap Perumahan</a></td>
                                                <td>003</td>
                                                <td>700</td>
                                            </tr>
                                            <tr>                                  
                                                <td>3</td>
                                                <td>Imbuhan Tetap Keraian</a></td>
                                                <td>004</td>
                                                <td>600</td>
                                            </tr>
                                            <tr>                                  
                                                <td>4</td>
                                                <td>Bantuan Sara Hidup (Cola)</a></td>
                                                <td>005</td>
                                                <td>300</td>
                                            </tr>                         
                        </tbody>
                </table>
            </div>
                    <div class="row form-group">                        
                        <div class="col-lg-6">
                            <label>Jumlah(RM) </label>                            
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtJumlah2" type="text"
                                   id="MyContentPlaceHolder_txtJumlah2"
                                   class="form-control rounded-corner" placeholder="2733.50"
                                   required="required"/>
                        </div>   
                        <div class="col-lg-6">
                            <label>Dibayar mulai</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_DibayarMulai"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    

<!--begin::Card-->
<div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Maklumat Pelarasan Emolumen
</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Emolumen Disember 2019</label>
                            <input name="ctl00$MyContentPlaceHolder$txtEmolumenBaru" type="text"
                                   id="MyContentPlaceHolder_txtEmolumenBaru"
                                   class="form-control rounded-corner" placeholder="Pro rate dari 20/11/2019 hingga 20/11/2019 - DS51A"
                                   required="required"/>
                        </div>
                    </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                    <thead class="colored">
                        <tr>
                                        <th width="3%" style="text-align:left;">Bil</th>
                                        <th width="20%" style="text-align:left;">Item</th>
                                        <th width="10%" style="text-align:left;">Kod Gaji</th>
                                        <th width="10%" style="text-align:left;">RM</th>
                        </tr>
                    </thead>
                        <tbody>                                               
                                            <tr>                                  
                                                <td>1</td>
                                                <td>Tunggakan Gaji Pokok 2019</a></td>
                                                <td>001-19</td>
                                                <td>2146.83</td>
                                            </tr>
                                            <tr>                                  
                                                <td>2</td>
                                                <td>Tunggakan Imbuhan Tetap Perumahan 2019</a></td>
                                                <td>003-19</td>
                                                <td>256.67</td>
                                            </tr>
                                            <tr>                                  
                                                <td>3</td>
                                                <td>Tunggakan Imbuhan Tetap Keraian 2019</a></td>
                                                <td>004-19</td>
                                                <td>220</td>
                                            </tr>
                                            <tr>                                  
                                                <td>4</td>
                                                <td>Tunggakan Bantuan Sara Hidup (Cola) 2019</a></td>
                                                <td>005-19</td>
                                                <td>110</td>
                                            </tr>                          
                        </tbody>
                </table>
            </div>
                    <div class="row form-group">                        
                        <div class="col-lg-6">
                            <label>Jumlah(RM) </label>                            
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtJumlah2" type="text"
                                   id="MyContentPlaceHolder_txtJumlah2"
                                   class="form-control rounded-corner" placeholder="2733.50"
                                   required="required"/>
                        </div>   
                        <div class="col-lg-6">
                            <label>Tarikh Bayar</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_DibayarMulai"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Hasil Akhir</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Emolumen Disember 2019</label>
                            <input name="ctl00$MyContentPlaceHolder$txtEmolumenBaru" type="text"
                                   id="MyContentPlaceHolder_txtEmolumenBaru"
                                   class="form-control rounded-corner" placeholder="Emolumen Baru"
                                   required="required"/>
                        </div>
                    </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                    <thead class="colored">
                        <tr>
                                        <th width="3%" style="text-align:left;">Bil</th>
                                        <th width="20%" style="text-align:left;">Item</th>
                                        <th width="10%" style="text-align:left;">Kod Gaji</th>
                                        <th width="10%" style="text-align:left;">RM</th>
                        </tr>
                    </thead>
                        <tbody>
                                             <tr>                                  
                                                <td>1</td>
                                                <td>Gaji Pokok </a></td>
                                                <td>001</td>
                                                <td>5955</td>
                                            </tr>
                                            <tr>                                  
                                                <td>2</td>
                                                <td>Imbuhan Tetap Perumahan</a></td>
                                                <td>003</td>
                                                <td>700</td>
                                            </tr>
                                            <tr>                                  
                                                <td>3</td>
                                                <td>Imbuhan Tetap Keraian</a></td>
                                                <td>004</td>
                                                <td>600</td>
                                            </tr>
                                            <tr>                                  
                                                <td>4</td>
                                                <td>Bantuan Sara Hidup (Cola)</a></td>
                                                <td>005</td>
                                                <td>300</td>
                                            </tr>     
                                            <tr>                                  
                                                <td>5</td>
                                                <td>Tunggakan Gaji Pokok 2019</a></td>
                                                <td>001-19</td>
                                                <td>2146.83</td>
                                            </tr>
                                            <tr>                                  
                                                <td>6</td>
                                                <td>Tunggakan Imbuhan Tetap Perumahan 2019</a></td>
                                                <td>003-19</td>
                                                <td>256.67</td>
                                            </tr>
                                            <tr>                                  
                                                <td>7</td>
                                                <td>Tunggakan Imbuhan Tetap Keraian 2019</a></td>
                                                <td>004-19</td>
                                                <td>220</td>
                                            </tr>
                                            <tr>                                  
                                                <td>8</td>
                                                <td>Tunggakan Bantuan Sara Hidup (Cola) 2019</a></td>
                                                <td>005-19</td>
                                                <td>110</td>
                                            </tr>                          
                        </tbody>
                </table>
            </div>
                    <div class="row form-group">                        
                        <div class="col-lg-6">
                            <label>Jumlah(RM) </label>                            
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtJumlah2" type="text"
                                   id="MyContentPlaceHolder_txtJumlah2"
                                   class="form-control rounded-corner" placeholder="2733.50"
                                   required="required"/>
                        </div>   
                        <div class="col-lg-6">
                            <label>Tarikh Bayar</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_DibayarMulai"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Statutory</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-4">
                        <input type="radio" id="KWSP" name="KWSP" value="KWSP"><label> KWSP</label>
                        </div>
                        <div class="col-lg-4">
                            <input name="ctl00$MyContentPlaceHolder$txtEmolumenBaru" type="text"
                                   id="MyContentPlaceHolder_txtEmolumenBaru"
                                   class="form-control rounded-corner" placeholder="No Fail"
                                   required="required"/>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>

                    <div class="row form-group">                    
                    <div class="col-lg-4">
                        <input type="radio" id="Cukai" name="Cukai" value="Cukai"><label> No Cukai Pendapatan (Jika Ada)</label>
                        </div>
                        <div class="col-lg-4">                        
                            <input name="ctl00$MyContentPlaceHolder$txtEmolumenBaru" type="text"
                                   id="MyContentPlaceHolder_txtEmolumenBaru"
                                   class="form-control rounded-corner" placeholder="No Fail"
                                   required="required"/>
                        </div>
                        <div class="col-lg-4">
                        </div>                    
                    </div>
          
                    <div class="row form-group">                        
                         <div class="col-lg-4">
                        <input type="radio" id="Perkeso" name="Perkeso" value="Perkeso"><label> Perkeso</label>
                        </div>
                        <div class="col-lg-4">                        
                            <input name="ctl00$MyContentPlaceHolder$txtEmolumenBaru" type="text"
                                   id="MyContentPlaceHolder_txtEmolumenBaru"
                                   class="form-control rounded-corner" placeholder="No Fail"
                                   required="required"/>
                        </div>
                        <div class="col-lg-1">
                        <p style="text-align:center;"><input type="radio" id="Ilat" name="Ilat" value="Ilat"><label> Ilat Kekal</label></p>
                        </div>
                        <div class="col-lg-2">
                        <input type="radio" id="Kekal" name="Kekal" value="Kekal" style="text-align:center;"><label> Tanpa Kekal </label>
                        </div>                      
                    </div>
                    
                    <div class="row form-group">
                    </div>

                    <div class="row form-group">
                            <div class="col-lg-12">
                                <div style="text-align: center;">                    
                                    <button type="button" id="IdButangSave" class="btn btn-light-success" style="text-align: center"><span class="far fa-edit"></span>  Kemaskini</button>
                                    <button type="button" id="IdButangBatal" class="btn btn-light-danger" style="text-align: center"><span class="far fa-trash-alt"></span>  Batal</button>
                                </div>
                            </div>                       
                    </div>

                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Penyediaan PSM - Penentuan Pegawai Pengesah</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                    <div class="col-lg-6">
                            <label>Peranan Pengesahan</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlPeranan"
                                    id="MyContentPlaceHolder_ddlPeranan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="azura">Penolong Pendaftar Perkhidmatan ROC</option>
                            </select>
                        </div>
                    <div class="col-lg-6">
                            <label>Senarai Pegawai</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlPegawai"
                                    id="MyContentPlaceHolder_ddlPegawai" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="azura">Azura binti Ali</option>
                                <option value="isa">Isa bin Abu </option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">                    
                        <div class="col-lg-6">
                            <label>Pengesah</label>
                            <input name="ctl00$MyContentPlaceHolder$txtPengesah" type="text"
                                   id="MyContentPlaceHolder_txtPengesah"
                                   class="form-control rounded-corner" placeholder="Pengesah"
                                   required="required"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Jawatan</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlJawatan"
                                    id="MyContentPlaceHolder_ddlPegawai" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="na44">Pegawai Tadbir (NA44)</option>
                                <option value="na19">Kerani</option>
                            </select>
                        </div>                       
                    </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                    <thead class="colored">
                        <tr>
                            <th width="3%" style="text-align:center;">Bil</th>
                            <th width="10%" style="text-align:center;">Peranan Pengesahan</th>
                            <th width="10%" style="text-align:center;">No. Pekerja</th>
                            <th width="15%" style="text-align:center;">	Nama Staf</th>
                            <th width="10%" style="text-align:center;">Jawatan</th>
                        </tr>
                    </thead>
                        <tbody>
                                            <tr>                                  
                                                <td>1</td>
                                                <td>Penolong Pendaftar Perkhidmatan ROC</a></td>
                                                <td>13456</td>
                                                <td>Azura binti Ali</td>
                                                <td>Pegawai Tadbir (NA44)</td>
                                            </tr>
                                            <tr>                                  
                                                <td>2</td>
                                                <td>Kerani Perkhidmatan ROC</a></td>
                                                <td>13008 </td>
                                                <td>Isa bin Abu </td>
                                                <td>Kerani </td>
                                            </tr>                            
                        </tbody>
                </table>
            </div>
                    <div class="row form-group">                        
                        <div class="col-lg-6">
                            <label>Jumlah(RM) </label>                            
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtJumlah2" type="text"
                                   id="MyContentPlaceHolder_txtJumlah2"
                                   class="form-control rounded-corner" placeholder="2733.50"
                                   required="required"/>
                        </div>                        
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>



     <!--begin::Card-->
     <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Penyediaan PSM - Maklumat Pengesahan</h3></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                    <div class="col-lg-6">
                            <label>No Pekerja</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="No Pekerja" value=""
                                   required="required" placeholder="9599" disabled="disabled"/>
                        </div>
                    <div class="col-lg-6">
                            <label>Nama Staf</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NAMA"
                                   value="" required="required" placeholder="Nama Staf"
                                   disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                    <div class="col-lg-6">
                            <label>Jawatan</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlJawatan"
                                    id="MyContentPlaceHolder_ddlPegawai" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="na44">Pegawai Tadbir (NA44)</option>
                                <option value="na19">Kerani</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakultiJabatan"
                                    id="MyContentPlaceHolder_ddlFakultiJabatan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="K07">UTMDigital</option>
                                <option value="K01">Jabatan Pendaftar</option>
                                <option value="K02">Bendahari</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">                        
                        <div class="col-lg-6">
                            <label>Status</label>                            
                            <input name="ctl00$MyContentPlaceHolder$txtStatus" type="text"
                                   id="MyContentPlaceHolder_txtStatus"
                                   class="form-control rounded-corner" placeholder="Status"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh </label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_1"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                            
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Ulasan</label>
                            <input name="ctl00$MyContentPlaceHolder$txtUlasan" type="text"
                                   id="MyContentPlaceHolder_txtUlasan"
                                   class="form-control rounded-corner" placeholder="Ulasan"/>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
  
   
  
  
    
 
            <div id="MyContentPlaceHolder_savebtn">
                 <div class="col-lg-12">
                        <div style="text-align: center;">                    
                            <button type="button" id="IdButangSave" class="btn btn-primary" style="text-align: center"><span class="fa fa-save"></span>  Simpan</button>
                            <button type="button" id="IdButangBatal" class="btn btn-light-danger" style="text-align: center"><span class="far fa-trash-alt"></span>  Batal</button>
                        </div>
                 </div>
            </div>

    

   
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection