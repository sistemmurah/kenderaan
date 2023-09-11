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
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Rekod Kehadiran</h3>
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
                            <select name="ctl00$MyContentPlaceHolder$ddlPilihan"
                                    id="MyContentPlaceHolder_ddlPilihan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Semua">Semua</option>
                                <option value="Januari">No. Pekerja</option>
                                <option value="Februari">Nama</option>
                                <option value="Mac">Bulan</option>
                                <option value="April">Tarikh</option>
                                <option value="May">Hari</option>
                                <option value="Jun">Syif</option>
                                <option value="Julai">Isu</option>
                            </select>
                        </div>  
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="noPekerja" value=""
                                   required="required" placeholder="Cari"/>
                        </div> 
                        <div class="col-lg-1">
                        <button type="submit" class="btn btn-light-primary"><i class="fa fa-search"></i> </button>                      
                        </div>    
                                            
                    </div>
                    <br/>

                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="3%" style="text-align:center;">No. Pekerja</th>
                            <th width="8%" style="text-align:center;">Nama</th>
                            <th width="10%" style="text-align:center;">Tarikh</th>
                            <th width="8%" style="text-align:center;">Hari</th>
                            <th width="8%" style="text-align:center;">WBB/Syif</th>
                            <th width="10%" style="text-align:center;">Masuk</th>
                            <th width="20%" style="text-align:center;">Keluar</th>
                            <th width="15%" style="text-align:center;">Kehilangan Masa</th>
                            <th width="15%" style="text-align:center;">Jenis Isu / Catatan</th>
                            <th width="15%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td>7392</td>
                                        <td>Aminah Binti Abdullah</td>
                                        <td>11/01/2021</td>
                                        <td>Isnin</td>
                                        <td>WBB2</td>
                                        <td></td>
                                        <td></td>
                                        <td>09.00</td>
                                        <td>TH - Kursus</td>   
                                        <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>                         
                                </tr>
                                <tr>                                  
                                        <td>8231</td>
                                        <td>Anuar Bin Roslan</td>
                                        <td>12/01/2021</td>
                                        <td>Selasa</td>
                                        <td>WBB2</td>
                                        <td>08:40:12</td>
                                        <td>13:40:12</td>
                                        <td>03.00</td>
                                        <td>KA - Time Slip</td>   
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

      

        <!-- Senarai Jenis Isu -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Jenis Isu</h3>
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
                            <label>TL : Tidak Lengkap</label>
                            
                        </div>  
                        <div class="col-lg-6">
                            <label>TH : Tidak Hadir </label>
                           
                        </div>                      
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>ML : Masuk Lewat</label>
                            
                        </div>  
                        <div class="col-lg-6">
                            <label>FX : Tiada Ganti Fleksi </label>
                           
                        </div>                      
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>KA : Keluar Awal</label>
                            
                        </div>  
                        <div class="col-lg-6">
                            <label>KM : Keluar Masuk</label>
                           
                        </div>                      
                    </div>
                   
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