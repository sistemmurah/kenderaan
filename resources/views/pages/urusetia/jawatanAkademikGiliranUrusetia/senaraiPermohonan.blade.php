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
                        Senarai Permohonan
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
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kaedah Pencalonan</label>
                            <select class="form-control" id="exampleSelect1">
							<option>Sila Pilih</option>
							<option>Lantikan Khas</option>
							<option>Lantikan Biasa</option>
							</select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Pemohon</label>
                            <input id="jawatan" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja Pemohon</label>
                            <input id="no.telPengirim" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
                
                <div class="card-body text-center">
                
                
                </div>

                <!--begin: Table -->
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="10%" style="text-align:center;">Dicadangkan</th>
                            <th width="7%" style="text-align:center;">Keutamaan</th>
                            <th width="10%" style="text-align:center;">Jenis Lantikan</th>
                            <th width="7%" style="text-align:center;">Kategori Jawatan</th>
                            <th width="7%" style="text-align:center;">Nama Bidang</th>
                            <th width="10%" style="text-align:center;">No Pekerja</th>
                            <th width="7%" style="text-align:center;">Nama</th>
                            <th width="10%" style="text-align:center;">Jawatan Semasa</th>
                            <th width="7%" style="text-align:center;">Kaedah Permohonan</th>
                            <th width="7%" style="text-align:center;">Tkh.Mohon</th>
                            <th width="7%" style="text-align:center;">Tkh.Hantar</th>
                            <th width="7%" style="text-align:center;">Status Permohonan</th>
                            <th width="7%" style="text-align:center;">Tindakan</th>
                            
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                    <select class="form-control" id="exampleSelect1">
							        <option>TIDAK</option>
							        <option></option>	
						            </select>
                                    </td>
                                    <td style="text-align:center;">
                                    <select class="form-control" id="exampleSelect1">
							        <option>0</option>
							        <option></option>	
						            </select>
                                    </td>
                                    <td style="text-align:center;"> 
                                    PUSAT
                                    </td>
                                    <td style="text-align:center;">
                                    PENGARAH
                                    </td>
                                    <td style="text-align:center;">
                                    CICT
                                    </td>
                                    <td style="text-align:center;">
                                    <a href="{{route('urusetia.jawatanAkademikGiliranUrusetia.perincianSenaraiPermohonan')}}"> 9364</a>
                                    </td>
                                    <td style="text-align:center;"> 
                                    MOHD SUBHA BIN SALLEH
                                    </td>
                                    <td style="text-align:center;">
                                    PEGAWAI TEKNOLOGI MAKLUMAT GRED F41/F44
                                    </td>
                                    <td style="text-align:center;"> 
                                    PERMOHONAN BIASA
                                    </td>
                                    <td style="text-align:center;">
                                    27-JAN-2021
                                    </td>
                                    <td style="text-align:center;"> 
                                    
                                    </td>
                                    <td style="text-align:center;">
                                   DRAFT
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
    <script src="{{ asset('js/pages/Scripts/jaw_pentad_giliran/sen_permohonan_Table.js') }}"></script>

@endsection