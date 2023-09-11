{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
  <div class="d-flex flex-column-fluid">
        <div class="container" id="Response">

            <!-- Buka Carian Jadual Gaji -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Carian</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <!--begin: page content-->
                    <!--begin: Datatable-->
                    <!--begin::Button-->

                    <div class="row">                        
                        <div class="col-lg-4">
                            Kod Jawatan UTM
                            <select class="form-control col-sm-12">
								<option>Sila Pilih</option>
								<option>A0601</option>
								<option>A0602</option>
							</select>			
                        </div>
                        <div class="col-lg-4">
                            Kampus
                            <select class="form-control col-sm-12">
								<option>Sila Pilih</option>
								<option>Kuala Lumpur</option>
								<option>Johor Bahru</option>
								<option>Pagoh</option>
							</select>			
                        </div>
                        <div class="col-lg-2">
                            Sistem Saraan
                            <select class="form-control col-sm-12">
								<option>Sila Pilih</option>
								<option>SATU</option>
								<option>DUA</option>
								<option>TIGA</option>
								<option>EMPAT</option>
							</select>		
                                                   
                            <!--end::Button-->
                        </div>
                        <div class="col-lg-2">
                            <label>&nbsp;</label>
                            <div class="col-lg-12 thcenter">
                                <button type="button" id="IdButangSearch" class="btn btn-primary" style="width:100%;"><span class="fa fa-search fa-sm"></span> Cari</button>
                            </div>                            
                            <!--end::Button-->
                        </div>
                    </div>
                    <br>


                    <!--end: Datatable-->
                    <!--end: page content-->

                </div>
            </div>
            <!-- Tutup Carian Jadual Gaji -->
            <br>
            <!-- Buka Senarai Mata Gaji -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-users text-dark"></i>&nbsp;&nbsp;Jadual Tangga Gaji</h3>                        
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                   <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                            <tr>
                                <th>Bil</th>
                                <th width="12%" style="text-align:center;">Peringkat</th>
                                <th width="8%" style="text-align:center;">Tangga Min</th>
                                <th width="8%" style="text-align:center;">Tangga Max</th>
                                <th width="13%" style="text-align:center;">Gaji Min</th>
                                <th width="13%" style="text-align:center;">Gaji Max</th>
                                <th width="10%" style="text-align:center;">Kadar Naik Gaji</th>
                                <th width="12%" style="text-align:center;">Tarikh Mula</th>
                                <th width="12%" style="text-align:center;">Tarikh Tamat</th>
                                <th width="25%" class="thcenter">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>                           
                            <tr>
                                <td>1</td>
                                <td class="thcenter"><select class="form-control col-sm-12">
								<option>P1</option>
								<option>P2</option>
								<option>P3</option>
							</select>		</td>
                                <td class="thcenter"><select class="form-control col-sm-12">
								<option>T00</option>
							</select>		</td>
                                <td class="thcenter"><select class="form-control col-sm-12">
								<option>T99</option>
							</select>		</td>
                                <td class="thcenter"><input type="text" value="0.00" class="form-control col-sm-12"></td>
                                <td class="thcenter"><input type="text" value="0.00" class="form-control col-sm-12"></td>
                                <td class="thcenter"><input type="text" value="0" class="form-control col-sm-12"></td>
                                <td class="thcenter"><input type="text" value="" class="form-control col-sm-12"></td>
                                <td class="thcenter"><input type="text" value="" class="form-control col-sm-12"></td>

                                <td nowrap="nowrap" class="thcenter">
                                    <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.KOD_JAWATAN_JPA" data-id="@item.KOD_JAWATAN_JPA~~KEMASKINI~~@item.PERINGKAT" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                                    <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_@item.KOD_JAWATAN_JPA" data-id="@item.KOD_JAWATAN_JPA~~HAPUS~~@item.PERINGKAT" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                                </td>
                            </tr>                                    
                        </tbody>                 

                      

                    </table>
                    <!--end: Datatable-->
                    <!--end: page content-->

                </div>
            </div>
            <!-- Tutup Senarai Mata Gaji -->
            <br>
            <!-- Buka Senarai Elaun Tetap -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-users text-dark"></i>&nbsp;&nbsp; Elaun</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable2">
                <thead class="colored">
                            <tr>
                                <th>Bil</th>
                                <th width="28%" style="text-align:center;">Keterangan Elaun</th>
                                <th width="12%" style="text-align:center;">Jumlah</th>
                                <th width="15%" style="text-align:center;">Tarikh Mula</th>
                                <th width="15%" style="text-align:center;">Tarikh Tamat</th>
                                <th width="10%" style="text-align:center;">Jenis Bayaran</th>
                                <th class="thcenter">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>                            
                                        <tr>
                                            <td>1</td>
                                            <td style="text-align:center;">
											<select class="form-control col-sm-12" id="idKod" name="KOD"><option value="">Sila Pilih</option>
<option value="002">002 - ELAUN KHIDMAT AWAM</option>
<option value="003">003 - IMBUHAN TETAP PERUMAHAN</option>
<option value="004">004 - IMBUHAN TETAP KERAIAN</option>
<option value="005">005 - BANTUAN SARA HIDUP (COLA)</option>
<option value="028">028 - ELAUN PEMBANTU RUMAH</option>
<option value="030">030 - ELAUN JAWATAN UTAMA/GRED KHAS</option>
</select></td>
                                            <td style="text-align:center;"><input type="text" value="0" class="form-control col-sm-12"></td>
                                            <td style="text-align:center;"><input type="text" value="" class="form-control col-sm-12"></td>
                                            <td style="text-align:center;"><input type="text" value="" class="form-control col-sm-12"></td>
                                            <td class="thcenter">Cheque</td>
                                            <td nowrap="nowrap" class="thcenter">
                                                <a onclick="fnCallModalItemElaun(this);" id="activityAdDetails_@item.ELAUN_TETAP_PK" data-id="@item.ELAUN_TETAP_PK~~KEMASKINI~~@_elaun" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                                                <a onclick="fnCallModalItemElaun(this);" id="IdBtnModalDelete_@item.ELAUN_TETAP_PK" data-id="@item.ELAUN_TETAP_PK~~HAPUS~~@_elaun" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                                            </td>
                                        </tr>                                
                        </tbody>                       
                    </table>

                    <!--end: Datatable-->
                    <!--end: page content-->

                </div>
            </div>
            <!-- Tutup Senarai Elaun Tetap -->
        </div>
    </div>
    <!-- Tutup Content Jadual Gaji -->

    <!--begin::Modal Gaji-->
  
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Waran/tawIkl_mataGaji.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection
