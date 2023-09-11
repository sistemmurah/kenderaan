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
                        Selenggara Kategori Jawatan
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
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kategori Jawatan</label>
                            <select class="form-control" id="exampleSelect1">
							<option>Tiada Rekod</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
                        </div>
                    </div>
                </div>
                
                <div class="card-body text-center">
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.senaraiPermohonanStaf') }}'"
                    class="btn btn-success font-weight-bold"> Cari
                </button>
                
                </div>

                <!--begin: Table -->
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="10%" style="text-align:center;">Jenis Lantikan</th>
                            <th width="7%" style="text-align:center;">Kod Jawatan</th>
                            <th width="10%" style="text-align:center;">Kategori Jawatan</th>
                            <th width="7%" style="text-align:center;">Tkh.Mula Aktif</th>
                            <th width="7%" style="text-align:center;">Tkh.Tamat Aktif</th>
                            <th width="7%" style="text-align:center;">Tindakan</th>
                            
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                    PUSAT
                                    </td>
                                    <td style="text-align:center;">
                                    JG00033
                                    </td>
                                    <td style="text-align:center;"> 
                                    PENGURUS FASILITI
                                    </td>
                                    <td style="text-align:center;">
                                    01-JAN-2017
                                    </td>
                                    <td style="text-align:center;">
                                    31-DEC-9999
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
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection