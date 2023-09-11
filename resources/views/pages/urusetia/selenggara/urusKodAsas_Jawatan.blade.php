{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline mr-5" style="padding-left:50px;">
                <!--begin::Page Title-->
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="@_path" class="text-muted"><i class="fa fa-lg fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <h5 class="text-dark font-weight-bold my-2 mr-5">Kod Jawatan</h5>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center" style="padding-right: 0px;">
            <div style="width:150px;">
                <a href="#" class="btn btn-light-info font-weight-bolder btn-sm"><b><font color="black">Today : </font>@_showDate</b></a>
            </div>
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
<!--Senarai-->
<div class="d-flex flex-column-fluid">
    <div class="container">
        <!-- Semak Permohonan Baru -->
       
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Semak Kod Jawatan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Kod Jawatan : </label>
                           <select class="form-control col-lg-12" id="SESI" name="KOD_JAWATAN"><option value="">-- Sila Pilih --</option>
<option value="A0401">A0401</option>
<option selected="selected" value="A0501">A0501</option>
<option value="A0601">A0601</option>
<option value="A0602">A0602</option>
<option value="A0701">A0701</option>
<option value="A0702">A0702</option>
<option value="A0704">A0704</option>
</select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                        </div>
                    </div>
                    <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <br>

        <!-- Senarai Permohonan Baru -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Kod Jawatan</h3>
                </div>

                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm text-dark"></i>
                    </a>
                </div>

            </div>
            <div class="card-body">
                <p align="right">
                    <a onclick="fnCallModalItem(this);" id="IdBtnModalCreateNew" data-id="~~SIMPAN" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit"></i> Tambah</a>
                </p>
<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil.</th>
                            <th width="8%" style="text-align:center;">Kod Jawatan</th>
                            <th width="8%" style="text-align:center;">Kod JPA</th>
                            <th width="8%" style="text-align:center;">Gred Jawatan</th>
                            <th width="8%" style="text-align:center;">Deskripsi Jawatan</th>
                            <th width="8%" style="text-align:center;">Kumpulan</th>
                            <th width="8%" style="text-align:center;">Deskripsi Skim</th>
                            <th width="8%" style="text-align:center;">Deskripsi JPA</th>
                            <th width="8%" style="text-align:center;">Deskripsi Kumpulan</th>
                            
                        </tr>
                    </thead>
                     <tbody id="IdTableListMaklumatPermohonan_body">
                                <tr>
                                    <td style="text-align:right;">
                                        1
                                    </td>
                                    <td style="text-align:center;">
                                        A0501
                                    </td>
                                    <td style="text-align:center;">
                                        TIMBALAN NAIB CANSELOR
                                    </td>
                                    <td style="text-align:center;">
                                        
                                    </td>
                                    <td style="text-align:center;">
                                        
                                    </td>
                                    <td style="text-align:center;">
                                        D
                                    </td>
                                    <td style="text-align:center;">
                                        
                                    </td>
                                    <td style="text-align:center;">
                                        
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_A0501" data-id="A0501~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodJawatan(this)" data-id="A0501~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                    </td>
                                </tr>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Waran/urusKodAsas_Jawatan.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection