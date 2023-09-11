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
        <!-- Carian Kursus -->
     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Carian Senarai Kursus</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Carian: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlBulanKehadiran"
                                    id="MyContentPlaceHolder_ddlBulanKehadiran" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Semua">Semua</option>
                                <option value="Kod">Kod Kursus</option>
                                <option value="Nama">Nama Kursus</option>
                                <option value="Jabatan">Jabatan/PPN</option>
                                <option value="Bahagian">Bahagian/Cawangan</option>
                                <option value="Kompetensi">Kompetensi</option>
                                <option value="Tahap">Tahap</option>
                                <option value="Jenis">Jenis Kursus</option>
                                <option value="Status">Status</option>
                            </select>
                        </div>   
                        <div class="col-lg-6">
                            <label>Cari : </label>
                            <!-- @Html.DropDownListFor(model => model.tarikhIklan, new SelectList(Model.ListDDTarikhIklan, "Key", "ViewField"), "-- Please Select --", new { @class = "form-control col-lg-12", @onchange = "tapisJawatan(this)", id = "SESI" }) -->
							<input name="cari" type="text" id="cari" class="form-control" value="" />
                            
                        </div>                                           
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                        </div>
                    </div>
                    <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: center;padding-top: 10px;">
                                <button type="submit" class="btn btn-light-primary"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        <br>

        <!-- Senarai Kursus -->
        <div class="card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Kursus</h3>
                </div>

                <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: right;padding-top: 15px;">
                                <a href="{{route('urusetia.Kursus.TambahKursus')}}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah</a>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="card-body">

                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="3%" style="text-align:center;">Kod Kursus</th>
                            <th width="15%" style="text-align:center;">Nama Kursus</th>
                            <th width="15%" style="text-align:center;">Kompetensi</th>
                            <th width="15%" style="text-align:center;">Jabatan</th>
                            <th width="10%" style="text-align:center;">Bahagian/Cawangan</th>
                            <th width="10%" style="text-align:center;">Jenis Kursus</th>
                            <th width="15%" style="text-align:center;">Tahap</th>
                            <th width="15%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td>KBDMJDMAPKK2020</td>
                                        <td>KEMAHIRAN ASAS SIMBIOSIS</a></td>
                                        <td>KEMAHIRAN BAHASA</td>
                                        <td>JABATAN TEKNOLOGI MAKLUMAT</td>
                                        <td>BAHAGIAN AUTOMASI APLIKASI PEJABAT</td>
                                        <td>DALAMAN</td>
                                        <td>PENGKHUSUSAN LANJUTAN</td>
                                        <td style="text-align:center;">
                                         <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr>     
                                <tr>                                  
                                        <td>GTKPJTMAPDF1001</td>
                                        <td>KEMAHIRAN BAHASA</a></td>
                                        <td>GENERIK TERAS</td>
                                        <td>JABATAN TEKNOLOGI MAKLUMAT</td>
                                        <td>BAHAGIAN AUTOMASI APLIKASI PEJABAT</td>
                                        <td></td>
                                        <td>INDUKSI</td>
                                        <td style="text-align:center;">
                                         <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr>    
                                <tr>                                  
                                        <td>MIGJATMAPAC2020</td>
                                        <td>KEMAHIRAN TAMBAHAN</a></td>
                                        <td>META</td>
                                        <td>JABATAN TEKNOLOGI MAKLUMAT</td>
                                        <td>BAHAGIAN AUTOMASI APLIKASI PEJABAT</td>
                                        <td></td>
                                        <td>ASAS</td>
                                        <td style="text-align:center;">
                                         <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr>  
                                <tr>                                  
                                        <td>GTKPW02BOKL2020</td>
                                        <td>KEMAHIRAN BAHASA</a></td>
                                        <td>GENERIK TERAS</td>
                                        <td>JABATAN TEKNOLOGI MAKLUMAT</td>
                                        <td>BAHAGIAN AUTOMASI APLIKASI PEJABAT</td>
                                        <td></td>
                                        <td>ASAS</td>
                                        <td style="text-align:center;">
                                         <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr>                     
                    </tbody>
                </table>
            </div>
        </div>
        <br/>

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