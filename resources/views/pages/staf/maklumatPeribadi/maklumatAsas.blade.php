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
                <h3 class="card-label"><i class="fa fa-user"></i> Maklumat Asas</h3>
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
                            <label>Tel. Bimbit</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NO_TEL_PEJABAT"
                                   value=""
                                   required="required" placeholder="Tel. Bimbit" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Umur</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$TextUmur" type="text"
                                   id="MyContentPlaceHolder_TextUmur" class="form-control" placeholder="Umur">
                        </div>
                        <div class="col-lg-6">
                            <label>Jantina</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="JANTINA"
                                   value="" required="required" placeholder="Jantina"
                                   disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Bangsa</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="BANGSA"
                                   value="" required="required" placeholder="Bangsa"
                                   disabled="disabled"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Agama</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="AGAMA"
                                   value="" required="required" placeholder="Agama"
                                   disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>No. Sijil Pertukaran Agama</label>
                            <input name="ctl00$MyContentPlaceHolder$TxtSijil" type="text"
                                   id="MyContentPlaceHolder_TxtSijil" class="form-control rounded-corner"
                                   placeholder="No. Sijil Pertukaran Agama"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Status Perkahwinan</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="STATUS_KAHWIN"
                                   value="" required="required" placeholder="Status Perkahwinan"
                                   disabled="disabled"/>
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
                <h3 class="card-label"><i class="far fa-address-book"></i> Maklumat Gelaran</h3></h3>
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
                            <label>Gelaran Rasmi</label>
                            <input name="ctl00$MyContentPlaceHolder$txtGelaranRasmi" type="text"
                                   id="MyContentPlaceHolder_txtGelaranRasmi" class="form-control rounded-corner"
                                   placeholder="Gelaran Rasmi"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Gelaran Peribadi</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlGelaranPeribadi"
                                    id="MyContentPlaceHolder_ddlGelaranPeribadi" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Cik">Cik</option>
                                <option value="Encik">Encik</option>
                                <option value="Puan">Puan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Gelaran Profesional</label>
                            <input name="ctl00$MyContentPlaceHolder$txtGelaranProfesional" type="text"
                                   id="MyContentPlaceHolder_txtGelaranProfesional"
                                   class="form-control rounded-corner" placeholder="Gelaran Profesional"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Gelaran Kebesaran</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlGelaranKebesaran"
                                    id="MyContentPlaceHolder_ddlGelaranKebesaran" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Cik">Tun</option>
                                <option value="Encik">Tan Sri</option>
                                <option value="Puan">Puan Sri</option>
                                <option value="Encik">Datuk</option>
                                <option value="Puan">Datin</option>
                            </select>
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
                <h3 class="card-label"><i class="fas fa-building"></i> Maklumat Fakulti / Jabatan</h3>
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
                            <label>Jawatan</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NAMA_JAWATAN" value=""
                                   required="required" placeholder="Jawatan" disabled="disabled"/>

                        </div>
                        <div class="col-lg-6">
                            <label>Kod PTJ RA</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKodPTJRA" type="text"
                                   id="MyContentPlaceHolder_txtKodPTJRA" class="form-control"
                                   placeholder="Kod PTJ RA"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label> Jawatan Giliran</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtJawatanGiliran" type="text"
                                   id="MyContentPlaceHolder_txtJawatanGiliran" class="form-control"
                                   placeholder="Jawatan Giliran"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Kod PTJ COE</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKodPTJCOE" type="text"
                                   id="MyContentPlaceHolder_txtKodPTJCOE" class="form-control"
                                   placeholder="Kod PTJ COE"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Kod Jawatan</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtKodJawatan" type="text"
                                   id="MyContentPlaceHolder_txtKodJawatan" class="form-control"
                                   placeholder="Kod Jawatan"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Nama RG</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNamaRG" type="text"
                                   id="MyContentPlaceHolder_txtNamaRG" class="form-control"
                                   placeholder="Nama RG"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Fakulti / Jabatan Asal</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="FAKULTI" value="" required="required"
                                   placeholder="Fakulti / Jabatan" disabled="disabled"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Fakulti / Jabatan Dipinjamkan</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="FAKULTI" value="" required="required"
                                   placeholder="Fakulti / Jabatan" disabled="disabled"/>
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
                            <label>Kod Klasifikasi</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKodKlasifikasi" type="text"
                                   id="MyContentPlaceHolder_txtKodKlasifikasi" class="form-control"
                                   placeholder="Kod Klasifikasi"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Unit</label>
                            <input name="ctl00$MyContentPlaceHolder$txtUnit" type="text"
                                   id="MyContentPlaceHolder_txtUnit" class="form-control" placeholder="Unit"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Tamat Klasifikasi</label>
                            <input name="ctl00$MyContentPlaceHolder$txtTarikhTamatKlasifikasi" type="text"
                                   id="MyContentPlaceHolder_txtTarikhTamatKlasifikasi" class="form-control"
                                   placeholder="Tarikh Tamat Klasifikasi"/>
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
                <h3 class="card-label"><i class="far fa-file-alt"></i> Maklumat Pengenalan</h3></h3>
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
                            <label>No. Kad Pengenalan Baru</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtNoKadPengenalanBaru" type="text"
                                   id="MyContentPlaceHolder_txtNoKadPengenalanBaru"
                                   class="form-control rounded-corner" placeholder="No. Kad Pengenalan Baru"
                                   required="required"/>
                        </div>
                        <div class="col-lg-6">


                            <label>Tarikh Keluar Kad Pengenalan</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_1"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                            </div>
                            <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>No. Kad Pengenalan Lama</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtNoKadPengenalanLama" type="text"
                                   id="MyContentPlaceHolder_txtNoKadPengenalanLama"
                                   class="form-control rounded-corner" placeholder="No. Kad Pengenalan Lama"
                                   required="required"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Negeri</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlNegeri"
                                    id="MyContentPlaceHolder_ddlNegeri" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Johor">Johor</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Selangor">Selangor</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>No. Pasport</label>
                            <input name="ctl00$MyContentPlaceHolder$txtPasport" type="text"
                                   id="MyContentPlaceHolder_txtPasport" class="form-control rounded-corner"
                                   placeholder="No. Pasport"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Daerah</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlDaerah"
                                    id="MyContentPlaceHolder_ddlDaerah" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Johor">Skudai</option>
                                <option value="Melaka">Batu Pahat</option>
                                <option value="Kuala Lumpur">Kluang</option>
                                <option value="Kuala Lumpur">Muar</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Warna Kad Pengenalan</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlWarnaKadPengenalan"
                                    id="MyContentPlaceHolder_ddlWarnaKadPengenalan" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Biru">Biru</option>
                                <option value="Merah">Merah</option>

                            </select>
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
                <h3 class="card-label"><i class="fas fa-address-card"></i> Maklumat Kelahiran
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
                            <label>Tarikh Lahir</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" name="TKH_LAHIR"
                                       value="" required="required"
                                       placeholder="Tarikh Lahir" disabled="disabled"/>
                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Negara</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlNegara"
                                    id="MyContentPlaceHolder_ddlNegara" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapura">Singapura</option>
                                <option value="Brunei">Brunei</option>

                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Negeri</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NEGERI_LAHIR"
                                   value="" required="required"
                                   placeholder="Negeri" disabled="disabled"/>

                        </div>
                        <div class="col-lg-6">
                            <label>Tempat</label>
                            <input name="ctl00$MyContentPlaceHolder$txtTempat" type="text"
                                   id="MyContentPlaceHolder_txtTempat" class="form-control"
                                   placeholder="Tempat"/>
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
                <h3 class="card-label"><i class="fas fa-newspaper"></i> Maklumat Lain-lain
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
                            <label>Kewarganegaraan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlKewarganegaraan"
                                    id="MyContentPlaceHolder_ddlKewarganegaraan" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>No. Sijil Kerakyatan </label>
                            <input name="ctl00$MyContentPlaceHolder$txtNoSijilKerakyatan" type="text"
                                   id="MyContentPlaceHolder_txtNoSijilKerakyatan" class="form-control"
                                   placeholder="No. Sijil Kerakyatan"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label> Warganegara</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlWarganegara"
                                    id="MyContentPlaceHolder_ddlWarganegara" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Ya">Malaysia</option>
                                <option value="Tidak">Indonesia</option>
                                <option value="Tidak">Bangladesh</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Emel Rasmi</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="EMAIL_RASMI"
                                   value="" required="required"
                                   placeholder="Emel Rasmi" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Taraf Permastautin</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlTarafPermastautin"
                                    id="MyContentPlaceHolder_ddlTarafPermastautin" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Emel Kedua </label>
                            <input type="text" class="form-control" name="EMAIL_KEDUA"
                                   value="" required="required"
                                   placeholder="Emel Kedua" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Etnik</label>
                            <input name="ctl00$MyContentPlaceHolder$txtEtnik" type="text"
                                   id="MyContentPlaceHolder_txtEtnik" class="form-control" placeholder="Etnik"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Laman Web </label>
                            <input name="ctl00$MyContentPlaceHolder$txtLamanWeb" type="text"
                                   id="MyContentPlaceHolder_txtLamanWeb" class="form-control"
                                   placeholder="Laman Web"/>
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
                <h3 class="card-label"><i class="fas fa-newspaper"></i> Maklumat Lesen
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
                            <label>Kategori Kelas Lesen </label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtKategoriKelasLesen" type="text"
                                   id="MyContentPlaceHolder_txtKategoriKelasLesen"
                                   class="form-control rounded-corner" placeholder="Kategori Kelas Lesen "/>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Tamat</label>
                            <span style="color: red">*</span>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_2"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>No. Lesen</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtNoLesen" type="text"
                                   id="MyContentPlaceHolder_txtNoLesen" class="form-control"
                                   placeholder="No. Lesen"/>
                        </div>
                    </div>

                </div>
            </div>

            <!--end: page content-->

        </div>
    </div>
    <!--end::Card-->
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