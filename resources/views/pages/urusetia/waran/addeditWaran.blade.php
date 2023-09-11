{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--begin: Senarai-->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                Waran
				</a>
            </h3>
        </div>

        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>

    </div>


 <div class="card-body">
 
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="row">
                                <div class="col-6 col-sm-6" style="background-color: #F5EEE0; border: double;">
                                    <div class="form-group">
                                        <center><label>JABATAN PERKHIDMATAN AWAM (JPA) </label></center><br /><br />
                                        <label >Kod Skim JPA</label>
                                        <select name="IdModalItemSkimJpa" class="form-control">
                                            @foreach($listSkimJpa as $row)
                                                @if($edit)
                                                    <option value="{{ $row->skim_jpa_pk }}" {{ $row->skim_jpa_pk == $listWaran->skim_jpa ? 'selected' : '' }}>{{ $row->deskripsi }}</option>
                                                @else
                                                    <option value="{{ $row->skim_jpa_pk }}">{{ $row->kod_skim }} - {{ $row->deskripsi }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        Skim<span class = "control-label required">*</span>
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        KOD GAJI SSM
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Gred Jawatan JPA
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Nama Jawatan JPA
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Program
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Kumpulan Perkhidmatan
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Kuota JPA
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Tahun Waran
                                        <div class='input-group date'>
                                        <input type="text" class="form-control" placeholder="Sila masukkan tarikh" id="kt_datepicker_5" value="" />
                                                <span class="input-group-text">
                                                    <i class="flaticon2-calendar-1"></i>
                                                </span>
                                        </div>
                                    </div>
                                       
                                    
                                    <div class="form-group">
                                        Tarikh Lulus
                                        <div class='input-group date'>
                                        <input type="text" class="form-control" placeholder="Sila masukkan tarikh" id="kt_datepicker_5" value="" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="flaticon2-calendar-1"></i>
                                                </span>
                                             </div>
											 </div>
                                    </div>
                                        
                                    
                                    <div class="form-group">
                                        Butir-Butir Perubahan
                                        <textarea class="form-control rounded-corner"></textarea>
                                        
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6" style="background-color:#F5EEE0; border: double;">
                                    <div class="form-group">
                                        <center><label>UNIVERSITI TEKNOLOGI MALAYSIA (UTM) </label></center><br /><br />
                                        OD Kod
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Kod PTJ
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Singkatan Nama Jawatan
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                    </div>
                                    <div class="form-group">
                                       Gred Jawatan UTM
                                        <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        Nama Jawatan UTM
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                    </div>
                                    <div class="form-group">
                                        Jumlah Waran
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                    </div>
                                    <div class="form-group">
                                        Bilangan Isi Waran
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                    </div>
                                    <div class="form-group">
                                        Bilangan Kosong Waran
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />                                    
                                        
                                    </div>
                                    <div class="form-group">
                                        Tarikh Lulus LPU
                                        <div class='input-group date'>
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="flaticon2-calendar-1"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        Tarikh Lulus Waran
                                        <div class='input-group date'>
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="flaticon2-calendar-1"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        Catatan
                                        <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row col-sm-12">
                    <div class="col-md-offset-2 col-md-10">
					
					
					<a id="MyContentPlaceHolder_btnBack" class="btn btn-danger" href="../Waran/carian"><i class="fa fa-chevron-left">&nbsp;</i>Kembali</a>
                        <button type="button" id="IdBtnModalItemSaveKodItem" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                            <span>
                                <i class="fa fa-save"></i>
                                <span id="IdButangAction">Simpan Waran</span>
                            </span>
                        </button>
                        <a href="@_path/PreServices/Waran" class="btn btn-sm m-btn--pill btn-info" style="display:none;"><span id="IdBtnKodItemRefreshScreen">Back To List</span></a>
                    </div>
                </div>
                <br />
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12" style="background-color: #EEE1C6; border: double;">
                            <div class="form-group row" style="padding-top: 10px; padding-left: 45%;" align="center">                                
                                No. Waran:
                            </div>
                            <div class="form-group row" style="padding-left: 30%;" align="center">
                            <input name="SKIM_JPA" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                                                
                                <div style="padding-top: 10px;">&mdash;</div>
                                <input name="SKIM" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                                                
                                <div style="padding-top: 10px;">&mdash;</div>
                                <input name="SGKTN_JWTN" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                                                
                                <div style="padding-top: 10px;">&mdash;</div>
                                <input name="KOD_GRED_JAWATAN" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                                                
                                <div style="padding-top: 10px;">&mdash;</div>
                                <input name="OD_STATUS" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                                                
                                <div style="padding-top: 10px;">&mdash;</div>
                                <input name="TAHUN" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                                                
                                <div style="padding-top: 10px;">&mdash;</div>
                                <input name="KOD_WARAN" type="text" id="" class="form-control rounded-corner" placeholder="" value="" style = "width:70px;" disabled="disabled" />
                                
                            </div>

                        </div>
                    </div>
                </div>



<!-- -->
</div>























@endsection

{{-- Scripts Section --}}
@section('scripts')

	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/Waran/Waran.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Waran/OnChange.js') }}"></script>
@endsection