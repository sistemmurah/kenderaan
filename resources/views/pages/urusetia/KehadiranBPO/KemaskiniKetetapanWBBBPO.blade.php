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
                        <h3 class="card-label"><i class="fa fa-calendar text-dark"></i>&nbsp;&nbsp;Kemaskini Syif Harian</h3>
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
                            <label>Hari : </label>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                <input type="checkbox" id="Ahad" name="vehicle1" value="Bike">
                                <label for="vehicle1"> Ahad</label><br>
                                </div> 
                                <div class="col-lg-2">
                                <input type="checkbox" id="Isnin" name="vehicle2" value="Car">
                                <label for="vehicle2">Isnin</label><br>
                                </div>
                                <div class="col-lg-2">
                                <input type="checkbox" id="Selasa" name="vehicle3" value="Boat">
                                <label for="vehicle3">Selasa</label><br><br>
                                </div>  
                                <div class="col-lg-2">
                                <input type="checkbox" id="Rabu" name="vehicle3" value="Boat">
                                <label for="vehicle3">Rabu</label><br><br>
                                </div>  
                                <div class="col-lg-2">
                                <input type="checkbox" id="Khamis" name="vehicle3" value="Boat">
                                <label for="vehicle3">Khamis</label><br><br>
                                </div>  
                                <div class="col-lg-2">
                                <input type="checkbox" id="Jumaat" name="vehicle3" value="Boat">
                                <label for="vehicle3">Jumaat</label><br><br>
                                </div>
                                <div class="col-lg-2"  style="margin-top: -15px;">
                                <input type="checkbox" id="Sabtu" name="vehicle3" value="Boat">
                                <label for="vehicle3">Sabtu</label><br><br>
                                </div>    
                            </div>
                        </div>                                              
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Jenis Hari : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisHari"
                                    id="MyContentPlaceHolder_ddlJenisHari" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Bekerja">Hari Bekerja</option>
                                <option value="Off">Hari Off</option>
                                <option value="CutiNegeri">Cuti Negeri</option>
                                <option value="Rehat">Hari Rehat</option>
                            </select>
                        </div>  
                        <div class="col-lg-6">
                            <label>Kategori Pegawai : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                    id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div>                                           
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Label (Laporan)</label>
                            <input type="text" class="form-control" name="labelLaporan" value=""
                                    required="required" placeholder="01"/>                       
                        </div>     
                        <div class="col-lg-6">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value=""
                                    required="required" placeholder="Khamis (Waktu Rehat 1PM - 2PM)"/>                            
                        </div>                                                                 
                    </div>   
                    <br/>                                               
                </div>
            </div>        
        <br/>

<div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-calendar text-dark"></i>&nbsp;&nbsp;Waktu Berkerja/Bulan Puasa</h3>
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
                            <label>Waktu Masuk : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuMasuk"
                                        id="MyContentPlaceHolder_ddlWaktuMasuk" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuMasukHari"
                                        id="MyContentPlaceHolder_ddlWaktuMasukHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>  
                        <div class="col-lg-6">
                            <label>Waktu Awal Dari : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuAwal"
                                        id="MyContentPlaceHolder_ddlWaktuAwal" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuAwalHari"
                                        id="MyContentPlaceHolder_ddlWaktuAwalHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>                                              
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Waktu Keluar : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuKeluar"
                                        id="MyContentPlaceHolder_ddlWaktuKeluar" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuKeluarHari"
                                        id="MyContentPlaceHolder_ddlWaktuKeluarHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>  
                        <div class="col-lg-6">
                            <label>Waktu Lewat Hingga : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuLewatHingga"
                                        id="MyContentPlaceHolder_ddlWaktuLewatHingga" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuLewatHari"
                                        id="MyContentPlaceHolder_ddlWaktuLewatHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>                                              
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Waktu Separuh Hari : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlSeparuhHari"
                                        id="MyContentPlaceHolder_ddlSeparuhHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlSeparuhHariHari"
                                        id="MyContentPlaceHolder_ddlSeparuhHariHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>  
                        <div class="col-lg-6">
                            <label>Kod Cuti Umum : </label>
                                    <select name="ctl00$MyContentPlaceHolder$ddlKodCutiUmum"
                                        id="MyContentPlaceHolder_ddlKodCutiUmum" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                                      
                        </div>                                              
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Waktu Rehat (Mula) : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuRehatMula"
                                        id="MyContentPlaceHolder_ddlWaktuRehatMula" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuRehatMulaHari"
                                        id="MyContentPlaceHolder_ddlWaktuRehatMulaHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>  
                        <div class="col-lg-6">
                            <label>Kod Cuti Pelepasan : </label>
                                    <select name="ctl00$MyContentPlaceHolder$ddlKodCutiPelepasan"
                                        id="MyContentPlaceHolder_ddlKodCutiPelepasan" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                                      
                        </div>                                              
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Waktu Rehat (Akhir) : </label>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuRehatMula"
                                        id="MyContentPlaceHolder_ddlWaktuRehatMula" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>
                                </div> 
                                <div class="col-lg-6">
                                    <select name="ctl00$MyContentPlaceHolder$ddlWaktuRehatMulaHari"
                                        id="MyContentPlaceHolder_ddlWaktuRehatMulaHari" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="Isnin">Isnin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Khamis">Khamis</option>
                                    <option value="Jumaat">Jumaat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Ahad">Ahad</option>
                                    </select>
                                </div> 
                            </div>                           
                        </div>                                             
                    </div>
                    <div class="form-group row">                        
                        <div class="col-lg-6">
                            <label>Jumlah Waktu Bekerja : </label>
                                    <select name="ctl00$MyContentPlaceHolder$ddlJumlahWaktuBekerja"
                                        id="MyContentPlaceHolder_ddlJumlahWaktuBekerja" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="0730">0730</option>
                                    <option value="0800">0800</option>
                                    <option value="0830">0830</option>
                                    </select>                                                      
                        </div>                                              
                    </div>
                    <br/>

        <h5 style="text-align:center;"><b>Kerja Lebih Masa</b></h5>
            
            <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
            <thead class="colored">
                <tr>
                    <th width="3%" style="text-align:center;">No.</th>
                    <th width="8%" style="text-align:center;">Kerja Lebih Masa</th>
                    <th width="15%" style="text-align:center;">Waktu Mula</th>
                    <th width="8%" style="text-align:center;">Waktu Akhir</th>
                    <th width="8%" style="text-align:center;">Minimum (Minit)</th>
                    <th width="8%" style="text-align:center;">Tindakan</th>
                </tr>
            </thead>
            <tbody>
            <tr>                                  
                    <td>1.</td>
                    <td>NWM</td>
                    <td>0000</td>
                    <td>0600</td>
                    <td>0</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>
            <tr>                                  
                    <td>2.</td>
                    <td>NWM</td>
                    <td>0600</td>
                    <td>0800</td>
                    <td>0</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>
            <tr>                                  
                    <td>3.</td>
                    <td>NWM</td>
                    <td>1700</td>
                    <td>2200</td>
                    <td>0</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>   
            <tr>                                  
                    <td>4.</td>
                    <td>NWM</td>
                    <td>2200</td>
                    <td>2400</td>
                    <td>0</td>                   
                    <td style="text-align:center;">
                   <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                    <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                    </td>                         
            </tr>                
        </tbody>
    </table>    
</div>
</div>
       

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