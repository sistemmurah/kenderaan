{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<div class="d-flex flex-column-fluid">
    <div class="container">
        <!-- Maklumat Rekod-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Rekod</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>No Pekerja : </label>
                            <input type="text" class="form-control" name="noPekerja" value=""
                                    required="required" placeholder="7932"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Nama : </label>
                                <input type="text" class="form-control" name="Nama" value=""
                                    required="required" placeholder="Aminah binti Abdullah"/>
                        </div>                                              
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Jawatan : </label>
                            <input type="text" class="form-control" name="Jawatan" value=""
                                    required="required" placeholder="Pegawai Teknologi Maklumat (FA41)"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                    id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="JP">Jabatan Pendaftar</option>
                                <option value="JPD">Jabatan Perkhidmatan Digital</option>
                            </select>
                        </div>                                           
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Tarikh</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_tarikh"/>
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
                            <label>WBB/Syif: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                    id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="WBB1">WBB1</option>
                                <option value="WBB2">WBB2</option>
                            </select>
                        </div>                                                                  
                    </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Isu</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlIsu"
                                    id="MyContentPlaceHolder_ddlIsu" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="TL">TL : Tidak Lengkap</option>
                                <option value="TH">TH : Tidak Hadir</option>
                                <option value="ML">ML : Masuk Lewat</option>
                                <option value="FX">FX : Tiada Ganti Fleksi</option>
                                <option value="KA">KA : Keluar Awal</option>
                                <option value="KM">KM : Keluar Masuk</option>
                            </select>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Alasan: </label>
                            <input type="text" class="form-control" name="Alasan" value=""
                                    required="required" placeholder="Cuti Rehat"/>
                        </div>                                                                  
                    </div>                                
                    
                </div>
            </div>        
        <br/>
        <!-- Kelulusan PSM PTJ-->     
        <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Kelulusan PSM PTJ</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">                   

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Tarikh Terima</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_tarikhTerima"/>
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
                            <label>Tarikh Semak</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_tarikhSemak"/>
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
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Disemak oleh: </label>
                            <input type="text" class="form-control" name="Alasan" value=""
                                    required="required" placeholder="Abu Bakar bin Omar"/>
                        </div>  
                    <div class="col-lg-6">
                            <label>Isu</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlStatus"
                                    id="MyContentPlaceHolder_ddlStatus" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Lulus">Lulus</option>
                                <option value="TidakLulus">Tidak Lulus</option>
                            </select>                                
                        </div>                                                                                           
                    </div>                                
                    
                </div>
            </div>        
        <br/>

    </div>
</div>

@endsection

{{-- Scripts Section --}}
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

 <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection