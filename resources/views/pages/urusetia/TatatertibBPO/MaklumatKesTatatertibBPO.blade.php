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
        <!-- Maklumat Pelaporan-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Kes Tatatertib</h3>
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
                            <label>Kes Tatatertib : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlkes"
                                    id="MyContentPlaceHolder_ddlKes" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Tatakelakuan">Tatakelakuan</option>
                            </select>
                        </div>  
                        <div class="col-lg-6">
                            <label>Tarikh Kejadian : </label>
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

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Jenis Pelanggaran Tatatertib : </label>
                            <input type="text" class="form-control" name="JenisPelanggaran" value=""
                                    required="required" placeholder="TIdak Jujur/ Tidak Bertanggungjawab"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Pelanggaran Tatatertib : </label>
                            <input type="text" class="form-control" name="NoPekerja" value=""
                                    required="required" placeholder="1(h)/1(j)"/>                          
                        </div>                                           
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-12">
                            <label>Catatan</label>
                        </div>     
                        <div class="col-lg-12">
                            <textarea rows="4" cols="100" name="comment" form="usrform">Catatan mengenai kes</textarea>
                        </div>                                                                                       
                    </div>                                                           
                    </div>                                              
                    <div class="card card-custom" data-card="true" id="kt_card_1">
            <div id="MyContentPlaceHolder_savebtn">
                    <div class="col-lg-12">
                        <div style="text-align: center;padding-top: 10px;padding-bottom: 10px;">                               
                            <a href="{{route('urusetia.TatatertibBPO.rekodTatatertibBPO')}}">
							<button type="button" id="IdButangBatal" class="btn btn-light-danger" style="text-align: center"><span class="fa fa-home"></span>  Kembali</button>
                       </a>
                        </div>
                    </div>
                </div>
    </div>
                </div>
            </div>        
        <br/>
     
    
@endsection

{{-- Scripts Section --}}
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

 <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection