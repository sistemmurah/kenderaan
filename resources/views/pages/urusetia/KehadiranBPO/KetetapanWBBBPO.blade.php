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
        <!-- Maklumat WBB/Syif-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;WBB/Syif</h3>
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
                            <label>Kod : </label>
                            <input type="text" class="form-control" name="kod" value=""
                                    required="required" placeholder="J2WBB2"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Label/Laporan : </label>
                                <input type="text" class="form-control" name="label" value=""
                                    required="required" placeholder="S2"/>
                        </div>                                              
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Nama : </label>
                            <input type="text" class="form-control" name="Nama" value=""
                                    required="required" placeholder="Jadual 2 - WBB2"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                    id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="J17033">J17033 - Jabatan Pendaftar</option>
                                <option value="J17034">J17034 - Jabatan Perkhidmatan Digital</option>
                                <option value="J17035">J17035 - Jabatan Timbalan Naib Canselor</option>
                            </select>
                        </div>                                           
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Negeri</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlNegeri"
                                    id="MyContentPlaceHolder_ddlNegeri" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Johor">Johor</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Selangor">Selangor</option>
                            </select>                             
                        </div>                                                                  
                    </div>   
                    <br/>

<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
<thead class="colored">
    <tr>
        <th width="3%" style="text-align:center;">No.</th>
        <th width="8%" style="text-align:center;">Kod</th>
        <th width="15%" style="text-align:center;">Nama</th>
        <th width="8%" style="text-align:center;">Kategori</th>
        <th width="8%" style="text-align:center;">Jenis Hari</th>
        <th width="8%" style="text-align:center;">Tindakan</th>
    </tr>
</thead>
<tbody>
            <tr>                                  
                    <td>1.</td>
                    <td>J2H2</td>
                    <td>Ahad-Rabu (Waktu Rehat 1PM - 2PM)</td>
                    <td>Normal</td>
                    <td>Hari Bekerja</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>
            <tr>                                  
                    <td>2.</td>
                    <td>J2H2</td>
                    <td>Khamis (Waktu Rehat 1PM - 2PM)</td>
                    <td>Normal</td>
                    <td>Hari Bekerja</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>   
            <tr>                                  
                    <td>3.</td>
                    <td>J2H3</td>
                    <td>Jumaat (Hari Rehat)</td>
                    <td>Normal</td>
                    <td>Hari Rehat</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>      
            <tr>                                  
                    <td>4.</td>
                    <td>J2H4</td>
                    <td>Off Day</td>
                    <td>Normal</td>
                    <td>Hari Off</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr> 
            <tr>                                  
                    <td>5.</td>
                    <td>J2H5</td>
                    <td>Cuti Am</td>
                    <td>Normal</td>
                    <td>Cuti Negeri</td>                   
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
       

        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div id="MyContentPlaceHolder_savebtn">
                 <div class="col-lg-12">
                        <div style="text-align: center;padding-top: 10px;padding-bottom: 10px;">                    
                            <button type="button" id="IdButangSave" class="btn btn-primary" style="text-align: center"><span class="fa fa-save"></span>  Simpan</button>
                            <button type="button" id="IdButangBatal" class="btn btn-light-danger" style="text-align: center"><span class="far fa-trash-alt"></span>  Batal</button>
                        </div>
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