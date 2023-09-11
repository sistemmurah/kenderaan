{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Lantikan</h5>
            <!--end::Page Title-->
            <!--begin::Actions-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
            <span class="text-muted font-weight-bold mr-4">Semak Permohonan Baru</span>

            <!--end::Actions-->
        </div>
        <!--end::Info-->
    </div>
    <div style="width:150px;">
        <a href="#" class="btn btn-light-info font-weight-bolder btn-sm"><b><font color="black">Today : </font><?php echo date('d M Y');?></b></a>
    </div>
</div>

            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Senarai Tarikh Iklan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
				
				<div class="col-lg-12" style="text-align:right;">
				
				   <a href="@_path/Waran/KawalanTarikh" class="btn btn-primary font-weight-bolder">
                            <i class="fa fa-plus text-light"></i>Daftar Iklan Baru
                        </a>
				</div>
				<br>
				<div class="col-lg-12">

 <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
            <thead class="colored">
                            <tr>
                                <th title="Field #">Bil</th>
                                <th title="Field #1">Sesi</th>
                                <th title="Field #2">Tarikh Mula</th>
                                <th title="Field #3">Tarikh Tamat</th>
                                <th title="Field #5">Kategori</th>
                                <th title="Field #6">Status</th>
                                <th title="Field #10">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align:center;">2021/1</td>
                                            <td style="text-align:center;">10/01/2021</td>
                                            <td style="text-align:center;">12/03/2021</td>
                                            <td style="text-align:center;">LANTIKAN PPP</td>
                                            <td style="text-align:center;">
                                                <p class="label-light-danger"><span class="label font-weight-bold label-lg label-inline  label-light-success">AKTIF </span></p>
                                            </td>
                                            <td style="text-align:center;">
                                                <a class="btn btn-sm btn-clean btn-icon flaticon-edit icon-md text-black-50" data-id="124~0" href="/v1/Waran/TambahJawatan/124~0" title="Kemaskini/Tambah Jawatan"> </a>
                                                <a onclick="fnCallModalItemTarikh(this);" id="IdBtnModalDelete_124" data-id="124~~HAPUS" class="btn btn-sm btn-clean btn-icon flaticon2-rubbish-bin-delete-button icon-md text-black-50" title="Hapus"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center;">2</td>
                                            <td style="text-align:center;">2020/1</td>
                                            <td style="text-align:center;">10/10/2020</td>
                                            <td style="text-align:center;">12/10/2020</td>
                                            <td style="text-align:center;">LANTIKAN PPP</td>
                                            <td style="text-align:center;">
                                                <p class="label-light-danger"><span class="label font-weight-bold label-lg label-inline  label-light-danger">TIDAK AKTIF </span></p>
                                            </td>
                                            <td style="text-align:center;">
                                                <a class="btn btn-sm btn-clean btn-icon flaticon-edit icon-md text-black-50" data-id="99~0" href="/v1/Waran/TambahJawatan/99~0" title="Kemaskini/Tambah Jawatan"> </a>
                                                <a onclick="fnCallModalItemTarikh(this);" id="IdBtnModalDelete_99" data-id="99~~HAPUS" class="btn btn-sm btn-clean btn-icon flaticon2-rubbish-bin-delete-button icon-md text-black-50" title="Hapus"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center;">3</td>
                                            <td style="text-align:center;">2020/2</td>
                                            <td style="text-align:center;">10/09/2020</td>
                                            <td style="text-align:center;">03/10/2020</td>
                                            <td style="text-align:center;">LANTIKAN PPP</td>
                                            <td style="text-align:center;">
                                                <p class="label-light-danger"><span class="label font-weight-bold label-lg label-inline  label-light-danger">TIDAK AKTIF </span></p>
                                            </td>
                                            <td style="text-align:center;">
                                                <a class="btn btn-sm btn-clean btn-icon flaticon-edit icon-md text-black-50" data-id="92~0" href="/v1/Waran/TambahJawatan/92~0" title="Kemaskini/Tambah Jawatan"> </a>
                                                <a onclick="fnCallModalItemTarikh(this);" id="IdBtnModalDelete_92" data-id="92~~HAPUS" class="btn btn-sm btn-clean btn-icon flaticon2-rubbish-bin-delete-button icon-md text-black-50" title="Hapus"></a>
                                            </td>
                                        </tr>
                        </tbody>
                    </table>
				</div>
				</div>
			</div>




@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Waran/CarianTarikh2.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection