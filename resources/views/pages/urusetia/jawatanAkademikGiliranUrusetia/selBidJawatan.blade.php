{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--Mula: Maklumat Permohonan -->

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                    Selenggara Bidang Jawatan
                    </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        
                            <label>Jenis Lantikan</label>
                            <div class="form-group">
						<select class="form-control" id="exampleSelect1">
							<option>Sila Pilih</option>
							<option>PUSAT</option>
							<option>PTJ</option>
							<option>HEMA</option>
							<option>SPACE</option>
                            <option>TNCPI/option>
						</select>
					</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kategori Jawatan</label>
                            <select class="form-control" id="exampleSelect1">
							<option>Tiada Rekod</option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
						</select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Bidang Jawatan</label>
                            <select class="form-control" id="exampleSelect1">
							<option>Tiada Rekod</option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
						</select>
                        </div>
                    </div>
                    
                </div>
                <br>
                
                
                <div class="card-body text-center">
                
                
                </div>

                 <!--begin: Table -->
                 <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="10%" style="text-align:center;">Jenis Lantikan</th>
                            <th width="7%" style="text-align:center;">Kategori Jawatan</th>
                            <th width="10%" style="text-align:center;">Nama Bidang Jawatan</th>
                            <th width="7%" style="text-align:center;">Tindakan</th>
                            
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                    
                                    </td>
                                    <td style="text-align:center;">
                                    10076
                                    </td>
                                    <td style="text-align:center;"> 
                                   
                                    </td>
                                    <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>
                                </tr>
              
                    </tbody>
                </table>
                <!--end: Table -->

                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Permohonan -->



@endsection

{{-- Scripts Section --}}
@section('scripts')
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/jaw_pentad_giliran/sen_sel_bid_jaw_table.js') }}"></script>

@endsection