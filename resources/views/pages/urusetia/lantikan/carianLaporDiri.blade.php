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
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Carian Lapor Diri</h3>
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
                            <label>No Pekerja / MyKad : </label>
                            <!-- @Html.DropDownListFor(model => model.tarikhIklan, new SelectList(Model.ListDDTarikhIklan, "Key", "ViewField"), "-- Please Select --", new { @class = "form-control col-lg-12", @onchange = "tapisJawatan(this)", id = "SESI" }) -->
							<input name="myKadPemohon" type="text" id="myKadPemohon" class="form-control" value="" />
                            
                        </div>                       
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Nama Staf : </label>
                            <!-- <input name="myKadPemohon" type="text" id="myKadPemohon" class="form-control" value="@Html.DisplayFor(model => model.myKadPemohon)" />-->
														<input name="myKadPemohon" type="text" id="myKadPemohon" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                        </div>
                    </div>
                    <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: left;">
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
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Staf Lapor Diri</h3>
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
                            <th width="3%" style="text-align:center;">Bil</th>
                            <th width="8%" style="text-align:center;">MyKad</th>
                            <th width="10%" style="text-align:center;">No. Pekerja</th>
                            <th width="20%" style="text-align:center;">Nama</th>
                            <th width="8%" style="text-align:center;">Fakulti/Jabatan</th>
                            <th width="8%" style="text-align:center;">Jawatan</th>
                            <th width="10%" style="text-align:center;">Status Aktif</th>
                            <th width="20%" style="text-align:center;">Status Permohonan RMC</th>
                            <th width="15%" style="text-align:center;">No Rujukan RMC</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td>1</td>
                                        <td>850911108796</a></td>
                                        <td>9599</td>
                                        <td>Zailis bin Abu Bakar</td>
                                        <td>UTMDigital</td>
                                        <td>Pensyarah Kanan </td>
                                        <td>Aktif</td>
                                        <td></td>
                                        <td></td>                                       
                                        <input type="hidden" name="PEMOHON_FK" value="@Html.DisplayFor(m => item.PEMOHON_FK)" />
                                        <input type="hidden" name="PERMOHONAN_FK" value="@Html.DisplayFor(m => item.PERMOHONAN_FK)" />                                  
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

<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

 <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection