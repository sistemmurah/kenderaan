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
        <!-- Carian Lapor Diri -->
     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Rekod Tatatertib</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: right;padding-top: 15px;">
                                <button onclick="window.location = '{{ route('urusetia.TatatertibPSM.KemaskiniRekodTatatertibPSM') }}'" class="btn btn-sm btn-icon btn-light-primary"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i> Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                        <th width="3%" style="text-align:center;">Bil</th>
                            <th width="8%" style="text-align:center;">No. Rujukan</th>
                            <th width="10%" style="text-align:center;">Nama</th>
                            <th width="10%" style="text-align:center;">Jawatan</th>
                            <th width="10%" style="text-align:center;">Jabatan</th>
                            <th width="10%" style="text-align:center;">Kes Tatatertib</th>
                            <th width="10%" style="text-align:center;">Tarikh Laporan</th>
                            <th width="10%" style="text-align:center;">Status</th>
                            <th width="10%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td style="text-align:center;">1.</td>
                                        <td style="text-align:center;">TLHDN2021003</td>
                                        <td style="text-align:center;">AMINAH BINTI ABDULLAH</td>
                                        <td style="text-align:center;">PEGAWAI TEKNOLOGI MAKLUMAT</td>
                                        <td style="text-align:center;">JABATAN PERKHIDMATAN DIGITAL</td> 
                                        <td style="text-align:center;">TATAKELAKUAN</td>   
                                        <td style="text-align:center;">02/01/2021</td> 
                                        <td style="text-align:center;">BELUM SELESAI</td>    
                                        <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                 </tr>                          
                    </tbody>
                </table>
                  
                </div>
            </div>
        
        <br>  

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