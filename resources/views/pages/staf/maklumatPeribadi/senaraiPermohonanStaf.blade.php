{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Start Senarai e-Boarding -->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                <i class="fas fa-plane"></i>
                Senarai Permohonan
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
  <div class="row">
            <div class="col-lg-12" style="text-align:right;">
                 <a href="../Waran/tambahWaran" onclick="" id="IdBtnModalCreateNew" data-id="0~~SIMPAN" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit"></i> Tambah</a>
            </div>
<br><br>

<div class="col-lg-12">
 <!--begin: Table -->
<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="10%" style="text-align:center;">No Rujukan</th>
                            <th width="7%" style="text-align:center;">Tarikh Permohonan</th>
                            <th width="10%" style="text-align:center;">No Pekerja</th>
                            <th width="7%" style="text-align:center;">Nama Staf</th>
                            <th width="8%" style="text-align:center;">Fakulti/Jabatan</th>
                            <th width="8%" style="text-align:center;">Jenis Permohonan</th>
                            <th width="8%" style="text-align:center;">Negara</th>
                            <th width="7%" style="text-align:center;">Tarikh Mula Perjalanan</th>
                            <th width="7%" style="text-align:center;">Status</th>
                            <th width="200" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                        J2021C00701
                                    </td>
                                    <td style="text-align:center;">
                                    02/01/2021
                                    </td>
                                    <td style="text-align:center;"> 
                                    7332
                                    </td>
                                    <td style="text-align:center;">
                                    AMINAH BINTI ABDULLAH
                                    </td>
                                    <td style="text-align:center;">
                                    JABATAN PERKHIDMATAN DIGITAL
                                    </td>
                                    <td style="text-align:center;">
                                    BORANG C - PERSENDIRIAN
                                    </td>
                                    <td style="text-align:center;">
                                    SAUDI ARABIA
                                    </td>
                                    <td>15/01/2021</td>
                                    <td>Diluluskan</td>
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
<!-- End Senarai e-Boarding-->

<br>

<!--Mula: Nota-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        
                        Nota
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        
                    </thead>
                <tbody>
                    <tr>
                        <th scope="row">Draft</th>
                        <td>Permohonan belum dihantar oleh Pemohon</td>
                        <th scope="row">Recommended</th>
                        <td>Permohonan telah disokong oleh Dekan/Ketua Fakulti</td>
                    </tr>
                    <tr>
                        <th scope="row">Submitted</th>
                        <td>Permohonan telah dihantar oleh Pemohon</td>
                        <th scope="row">Not Recommended</th>
                        <td>Permohonan tidak disokong oleh Dekan/Ketua Fakulti</td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Clarification</th>
                        <td>Permohonan telah disemak oleh PSM Fakulti</td>
                        <th scope="row">Certified by TNCPI</th>
                        <td>Permohonan telah diperaku oleh TNCPI</td>
                    </tr>
                    <tr>
                        <th scope="row">No Clarification</th>
                        <td>Permohonan ditolak dan dikembalikan kepada Pemohon oleh PSM Fakulti</td>
                        <th scope="row">Approved</th>
                        <td>Permohonan diluluskan oleh NC</td>
                    </tr>
                    <tr>
                        <th scope="row">Correction PSM</th>
                        <td>Permohonan telah disemak oleh PSM Fakulti dan dikembalikan <br/>kepada pemohon untuk PEMBETULAN</td>
                        <th scope="row">Not Approved</th>
                        <td>Permohonan tidak diluluskan oleh NC</td>
                    </tr>
                    
   
                </tbody>
                </table>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Tamat: Nota -->

@endsection

{{-- Scripts Section --}}
@section('scripts')

	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/eBoarding/eBoardingTable.js') }}"></script>
    
@endsection