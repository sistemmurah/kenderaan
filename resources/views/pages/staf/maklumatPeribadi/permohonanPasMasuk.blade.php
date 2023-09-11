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
                <h3 class="card-label"><i class="fas fa-address-card text-dark"></i> Maklumat Pemohon</h3>
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
                            <label>Nama Penuh</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NAMA"
                                   value="" required="required" placeholder="Nama Penuh"/>
                        </div>
                        <div class="col-lg-6">
                            <label>No. Kad Pengenalan / Passport :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NO_KP_PASSPORT"
                                   value=""
                                   required="required" placeholder="No. Kad Pengenalan / Passport" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>No. Telefon (Telefon Bimbit) :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NO_HP"
                                   value=""
                                   required="required" placeholder="No. Telefon (handphone)"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Lahir:</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Tamat Passport (Bukan Warganegara):</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                          
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Tamat Permit (Bukan Warganegara):</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Nombor Pendaftaran Kenderaan :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NO_PENDAFTARAN_KENDERAAN"
                                   value="" required="required" placeholder="Nombor Pendaftaran Kenderaan"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Jenis Kenderaan :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="JENIS_KENDERAAN"
                                   value="" required="required" placeholder="Jenis Kenderaan "/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Jawatan :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="JAWATAN"
                                   value="" required="required" placeholder="Jawatan"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Tugas :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="TUGAS"
                                   value="" required="required" placeholder="Tugas"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Lokasi Bertugas di UTM :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="LOKASI_BERTUGAS"
                                   value="" required="required" placeholder="Lokasi Bertugas di UTM "/>
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                     <div class="row form-group">
                        <div class="col-lg-6">
                              <label>Tempoh Bertugas : Dari Tarikh</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Hingga:</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="row form-group">
                        <div class="col-lg-6">
                              <label>Waktu Berada Dalam UTM : Dari Jam</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select time" data-target="#kt_datetimepicker_4"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_4" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                 <i class="ki ki-clock"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Hingga:</label>
                            <span style="color: red">*</span>
                             <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select time" data-target="#kt_datetimepicker_4"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_4" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                 <i class="ki ki-clock"></i>
                                </span>
                                </div>
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
                <h3 class="card-label">Alamat Surat Menyurat</h3>
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
                <div class="row ">
                    <!--begin: row kiri-->
                    <!--begin: row kiri sherry-->
                    <div class="col-lg-6">
                        {{--<h5><u>Maklumat Peribadi</u></h5>--}}
                        {{--<p></p>--}}
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control mb-1" name="ALAMAT_S1"
                                   value="" required="required"
                                   placeholder="Alamat" disabled="disabled"/>
                            <input type="text" class="form-control mb-1" name="ALAMAT_S2"
                                   value="" required="required"
                                   placeholder="Alamat 2" disabled="disabled"/>
                            <input type="text" class="form-control" name="ALAMAT_S3"
                                   value="" required="required"
                                   placeholder="Alamat 3" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label>Poskod</label>
                            <input type="number" TextBox ID="txtNoPekerja" runat="server" class="form-control"
                                   name="POSKOD_S" value=""
                                   required="required" placeholder="Poskod" disabled="disabled"/>
                        </div>
                        
                        <div class="form-group">
                            
                        </div>
                        <!--</form>-->
                        <!--end::Form-->
                    </div>
                    <!--end: row kiri-->
                    <!--begin: row kanan-->
                    <div class="col-lg-6">
                        {{--<h5><u>Maklumat Perkhidmatan</u></h5>--}}
                        {{--<p></p>--}}
                        <div class="form-group">
                            <label>Bandar</label>
                            <input type="text" TextBox ID="txtID" runat="server" class="form-control rounded-corner"
                                   name="BANDAR_S" value=""
                                   required="required" placeholder="Bandar" disabled="disabled"/>
                            <input type="text" class="form-control" style="visibility:hidden"/>
                        </div>
                        <div class="form-group">
                            <label>Negeri</label>
                            <input type="text" class="form-control" name="NEGERI_S"
                                   value="" required="required" placeholder="Negeri"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label>Negara</label>
                            <input type="text" class="form-control" name="NEGARA"
                                   value="" required="required" placeholder="Negara"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                           
                        </div>
                    </div>
                    <!--end: row kanan-->
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
                <h3 class="card-label">Alamat Pejabat / Majikan</h3>
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
                <div class="row ">
                    <!--begin: row kiri-->
                    <!--begin: row kiri sherry-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control mb-1" name="ALAMAT_S1"
                                   value="" required="required"
                                   placeholder="Alamat" disabled="disabled"/>
                            <input type="text" class="form-control mb-1" name="ALAMAT_S2"
                                   value="" required="required"
                                   placeholder="Alamat 2" disabled="disabled"/>
                            <input type="text" class="form-control" name="ALAMAT_S3"
                                   value="" required="required"
                                   placeholder="Alamat 3" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label>Poskod</label>
                            <input type="number" TextBox ID="txtNoPekerja" runat="server" class="form-control"
                                   name="POSKOD_S" value=""
                                   required="required" placeholder="Poskod" disabled="disabled"/>
                        </div>
                       
                        <div class="form-group">
                            
                        </div>
                        <!--</form>-->
                        <!--end::Form-->
                    </div>
                    <!--end: row kiri-->
                    <!--begin: row kanan-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar</label>
                            <input type="text" TextBox ID="txtID" runat="server" class="form-control rounded-corner"
                                   name="BANDAR_S" value=""
                                   required="required" placeholder="Bandar" disabled="disabled"/>
                            <input type="text" class="form-control" style="visibility:hidden"/>
                        </div>
                        <div class="form-group">
                            <label>Negeri</label>
                            <input type="text" class="form-control" name="NEGERI_S"
                                   value="" required="required" placeholder="Negeri"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label>Negara</label>
                            <input type="text" class="form-control" name="NEGARA"
                                   value="" required="required" placeholder="Negara"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                           
                        </div>
                    </div>
                    <!--end: row kanan-->
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
                <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Maklumat Majikan</h3></h3>
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
                            <label>Nama Syarikat :</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NAMA_SYARIKAT"
                                   value="" required="required" placeholder="Nama Syarikat"/>
                        </div>
                        <div class="col-lg-6">
                            <label>No. Telefon Pejabat:</label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="NO_TEL_PEJABAT"
                                   value=""
                                   required="required" placeholder="No. Telefon Pejabat" />
                        </div>
                    </div>
                      <div class="row form-group">
                        <div class="col-lg-6">
                              <label>Tempoh Kontrak Syarikat dan UTM : Dari Tarikh</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Hingga:</label>
                            <span style="color: red">*</span>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
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
            <h3 class="card-label"><i class="far fa-address-book text-dark"></i> Pengakuan</h3>
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
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="checkbox-inline">
                                <label class="checkbox m-0">
                                    <input type="checkbox">
                                    <span></span>SAYA MENGAKU BAHAWA SEGALA MAKLUMAT YANG DIBERIKAN ADALAH BENAR.
                                </label>
                            </div>
                            <br/>
                            <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Hantar Permohonan</button>
                        </div>
                    </div>  
                    
                </div>
              
        </div>
        <!--end: page content-->

    </div>
</div>
<!--end::Card-->
<br />
    
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