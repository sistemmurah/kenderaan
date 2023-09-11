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
        <!-- Maklumat Kursus-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Maklumat Kursus</h3>
                        <!-- <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Kursus</h3> -->
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
                            <label>Kod Kursus : </label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="kodKursus" value=""
                                    required="required" placeholder="KBDMJDMAPKK2020"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Status Kursus : </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlStatusKursus"
                                    id="MyContentPlaceHolder_ddlStatusKursus" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="PL">AKTIF</option>
                            </select>
                        </div>                                              
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Nama Kursus : </label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="namaKursus" value=""
                                    required="required" placeholder="KEMAHIRAN ASAS SIMBIOSIS PERBAHASAN"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Penganjur : </label>
                            <span style="color: red">*</span>
                                <input type="text" class="form-control" name="Penganjur" value=""
                                    required="required" placeholder="UNIVERSITI TEKNOLOGI MALAYSIA"/>
                        </div>                                              
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Tahap : </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlTahap"
                                    id="MyContentPlaceHolder_ddlTahap" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="PL">WAJIB/KHUSUS</option>
                                <option value="PL">UMUM</option>
                            </select>
                        </div>  
                        <div class="col-lg-6">
                            <label>Jenis Latihan: </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisLatihan"
                                    id="MyContentPlaceHolder_ddlJenisLatihan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="D">KURSUS JANGKA PENDEK</option>
                                <option value="D">KURSUS JANGKA PANJANG</option>
                                <option value="D">LAWATAN KERJA</option>
                                <option value="D">PEMBELAJARAN KENDIRI</option>
                                <option value="D">PERHIMPUNAN BULANAN UNIVERSITI</option>
                                <option value="D">PERSIDANGAN</option>
                                <option value="D">PROGRAM GAYA HIDUP SIHAT</option>
                                <option value="D">PROGRAM MEMBUDAYAKAN ALQURAN</option>
                                <option value="D">SESI PENGKAYAAN ILMU</option>
                                <option value="D">MyLinE</option
                            </select>
                        </div>                                           
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Jenis Kursus</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisKursus"
                                    id="MyContentPlaceHolder_ddlJenisKursus" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="PK">PENINGKATAN KERJAYA</option>
                                <option value="PK">KURSUS PERKHIDMATAN</option>
                            </select>
                        </div>    
                        
                        <div class="col-lg-6">
                            <label>Perancangan Kursus: </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlPerancangan"
                                    id="MyContentPlaceHolder_ddlPerancangan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="KD">KURSUS DIRANCANG</option>
                            </select>
                        </div>                                                                  
                    </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Tajaan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlTajaan"
                                    id="MyContentPlaceHolder_ddlTajaan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Universiti">Universiti</option>
                            </select>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Jumlah Peserta: </label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="JumlahPeserta" value=""
                                    required="required" placeholder="25"/>
                        </div>                                                                  
                    </div>    
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Tempoh</label>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="Tempoh1" value=""
                                            required="required" placeholder="1"/>
                                </div> 
                                <div class="col-lg-4">
                                <select name="ctl00$MyContentPlaceHolder$ddlTempoh2"
                                        id="MyContentPlaceHolder_ddlTempohIkatan2" class="form-control"
                                        required="required">
                                    <option value="BULAN">BULAN</option>
                                    <option value="TAHUN">TAHUN</option>
                                </select> 
                                </div> 
                            </div>                               
                        </div>    
                        <div class="col-lg-6">
                            <label>Kategori: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlKategori"
                                    id="MyContentPlaceHolder_ddlKategori" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="IDP">IDP</option>
                                <option value="PI">PENGKAYAAN ILMU</option>
                                <option value="JMP">LATIHAN JANGKA MASA PENDEK/PANJANG</option>
                            </select> 
                        </div>                                                                  
                    </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Tempoh Ikatan</label>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="TempohIkatan1" value=""
                                            required="required" placeholder="1"/>
                                </div> 
                                <div class="col-lg-4">
                                <select name="ctl00$MyContentPlaceHolder$ddlTempohIkatan2"
                                        id="MyContentPlaceHolder_ddlTempohIkatan2" class="form-control"
                                        required="required">
                                    <option value="BULAN">BULAN</option>
                                    <option value="TAHUN">TAHUN</option>
                                </select> 
                                </div> 
                            </div>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Kursus Wajib: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlKursusWajib"
                                    id="MyContentPlaceHolder_ddlKursusWajib" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Universiti">YA</option>
                                <option value="Universiti">TIDAK</option>
                            </select> 
                        </div>                                                                  
                    </div>  

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Nilai Ikatan</label>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" name="NilaiIkatan1" value=""
                                            required="required" placeholder="RM"/>
                                </div> 
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="NilaiIkatan2" value=""
                                            required="required" placeholder="2000"/>
                                </div> 
                            </div>                               
                        </div>    
                        <div class="col-lg-6">
                            <label>Nilai Tambah: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlNilaiTambah"
                                    id="MyContentPlaceHolder_ddlNilaiTambah" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Universiti">YA</option>
                                <option value="Universiti">TIDAK</option>
                            </select> 
                        </div>                                                                  
                    </div>  

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Sijil</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlSijil"
                                    id="MyContentPlaceHolder_ddlSijil" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="CPA">CERTIFICATE PUBLIC ACCOUNTANT</option>
                            </select>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Laman Web: </label>
                            <input type="text" class="form-control" name="LamanWeb" value=""
                                    required="required" placeholder="-"/>
                        </div>                                                                  
                    </div>   
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Penilaian</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlPenilaian"
                                    id="MyContentPlaceHolder_ddlPenilaian" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Penilaian Selepas: </label>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="PenilaianSelepas" value=""
                                            required="required" placeholder="1"/>
                                </div> 
                                <div class="col-lg-4">
                                <select name="ctl00$MyContentPlaceHolder$ddlPenilaianSelepas"
                                        id="MyContentPlaceHolder_ddlPenilaianSelepas" class="form-control"
                                        required="required">
                                    <option value="HARI">HARI</option>
                                    <option value="BULAN">BULAN</option>
                                </select> 
                                </div> 
                            </div> 
                        </div>                                                                  
                    </div>   
                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Kaedah Penilaian</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlKaedahPenilaian"
                                    id="MyContentPlaceHolder_ddlKaedahPenilaian" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="PEPERIKSAAN">PEPERIKSAAN</option>
                            </select>                                
                        </div>                                                                    
                    </div>                                       
                    
                </div>
            </div>    

        <br/>    
         <!-- Kompetensi -->
         <div class="card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Kompetensi</h3>
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
                            <th width="3%" style="text-align:center;">Kompetensi</th>
                            <th width="15%" style="text-align:center;">Program</th>
                            <th width="15%" style="text-align:center;">Jenis</th>
                            <th width="15%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td></td>
                                        <td>KEMAHIRAN ASAS KOMUNIKASI</a></td>
                                        <td></td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr>     
                                <tr>                                  
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="add"><i class="fa fa-plus"></i></a>                
                                        </td>                        
                                </tr>                                               
                    </tbody>
                </table>
            </div>
        </div>

        <br/>
         <!-- Kandungan Kursus -->
         <div class="card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Kandungan Kursus</h3>
                </div>
                <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Topik : </label>
                                <span style="color: red">*</span>
                                <input type="text" class="form-control" name="Topik" value=""
                                        required="required" placeholder="KOMUNIKASI DALAMAN"/>
                            </div> 
                            <div class="col-lg-12">
                                <label>Metodologi : </label>
                                <span style="color: red">*</span>
                                <textarea name="comment" id="comment" input type="text" class="form-control">
                                MENGURUSKAN KOMUNIKASI BERSAMA RAKAN SEKERJA DENGAN BAIK</textarea></input>
                            </div> 
                            <div class="col-lg-12">
                                <label>Keperluan Peserta Kursus : </label>
                                <span style="color: red">*</span>
                                <textarea name="comment" id="comment" input type="text" class="form-control">
                                PESERTA PERLU MEMBAWA EARPHONE</textarea></input>
                            </div> 
                            <div class="col-lg-12">
                                <label>Catatan : </label>
                                <textarea name="comment" id="comment" input type="text" class="form-control">
                                MENGURUSKAN KOMUNIKASI BERSAMA RAKAN SEKERJA DENGAN BAIK</textarea></input>
                            </div>                                              
                </div>

                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="3%" style="text-align:center;">Bil.</th>
                            <th width="15%" style="text-align:center;">Nama Lampiran</th>
                            <th width="15%" style="text-align:center;">Lampiran</th>
                            <th width="15%" style="text-align:center;">Muat Naik Fail</th>
                        </tr>
                    </thead>
                    <tbody>   
                                <tr>                                  
                                        <td>1.</td>
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td></td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="upload"><i class="fa fa-upload"></i></a>                 
                                        </td>                        
                                </tr>                                               
                    </tbody>
                </table>
            </div>
        </div>

        <br/>
         <!-- Syarat Kursus -->
         <div class="card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Syarat Kursus</h3>
                </div>
                <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                </div>
            </div>

            <div class="card-body">
                <h5 class="card-label">&nbsp;&nbsp;Pra - Syarat Kursus</h5>

                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="3%" style="text-align:center;">Kod Kursus</th>
                            <th width="15%" style="text-align:center;">Nama Kursus</th>
                            <th width="15%" style="text-align:center;">Status</th>
                            <th width="15%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>   
                                <tr>                                  
                                        <td>KPKBJTMAPAC2020</td>
                                        <td>KEMAHIRAN PENGURUSAN DOKUMEN </td>
                                        <td>SEDANG DIJALANKAN</td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr> 
                                <tr>                                  
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="add"><i class="fa fa-plus"></i></a>                 
                                        </td>                        
                                </tr>                                               
                    </tbody>
                </table>

                <h5 class="card-label">&nbsp;&nbsp;Lain - lain Syarat</h5>

                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Perkara</th>
                            <th width="20%" style="text-align:center;">Catatan</th>
                            <th width="10%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>   
                                <tr>                                  
                                        <td>KESIHATAN</td>
                                        <td>TIDAK CACAT PENDENGARAN </td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                   
                                        </td>                        
                                </tr> 
                                <tr>                                  
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td><input type="text" class="form-control" name="LamanWeb" value="" required="required" placeholder=""/></td>
                                        <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="add"><i class="fa fa-plus"></i></a>                 
                                        </td>                        
                                </tr>                                               
                    </tbody>
                </table>
            </div>
        </div>

        <br/>
         <!-- Kumpulan Sasaran-->  
         <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Kumpulan Sasaran</h3>
                        <!-- <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Kursus</h3> -->
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
                            <label>Jabatan/PPN : </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJabatan"
                                    id="MyContentPlaceHolder_ddlJabatan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="PL">JABATAN TEKNOLOGI MAKLUMAT</option>
                            </select>
                        </div>  
                        <div class="col-lg-6">
                            <label>Bahagian Cawangan: </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisLatihan"
                                    id="MyContentPlaceHolder_ddlJenisLatihan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="D">BAHAGIAN APLIKASI AUTOMASI PEJABAT</option>
                            </select>
                        </div>                                           
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Gred</label>
                            <span style="color: red">*</span>
                                <select name="ctl00$MyContentPlaceHolder$ddlGred"
                                        id="MyContentPlaceHolder_ddlGred" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="PK">41</option>
                                    <option value="PK">44</option>
                                    <option value="PK">48</option>
                                </select>
                        </div>   
                        <div class="col-lg-6">
                            <label>Skim Perkhidmatan: </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlSkim"
                                    id="MyContentPlaceHolder_ddlSkim" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="AT43">AT43/44 DIRANCANG</option>
                            </select>
                        </div>                                                                  
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Aktiviti</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlAktiviti"
                                    id="MyContentPlaceHolder_ddlAktiviti" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="AAP">APLIKASI AUTOMASI PEJABAT</option>
                            </select>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Akademik/Kelulusan: </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlAkademik"
                                    id="MyContentPlaceHolder_ddlAkademik" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="DIPLOMA">DIPLOMA</option>
                            </select>                              
                        </div>                                                                  
                    </div>  

                    <div class="form-group row">                  
                            <div class="col-lg-6">
                                <label>Portfolio: </label>
                                <span style="color: red">*</span>
                                <select name="ctl00$MyContentPlaceHolder$ddlPortfolio"
                                        id="MyContentPlaceHolder_ddlPortfolio" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="ACO">ACO</option>
                                </select>                              
                            </div>                      
                            <div class="col-lg-6">
                                <label>Umur: </label>
                                <span style="color: red">*</span>
                                <select name="ctl00$MyContentPlaceHolder$ddlUmur"
                                        id="MyContentPlaceHolder_ddlUmur" class="form-control"
                                        required="required">
                                    <option value="Sila Pilih..">Sila Pilih..</option>
                                    <option value="1280">12-80</option>
                                </select> 
                            </div>                                                                  
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Tempoh perkhidmatan</label>
                            <span style="color: red">*</span>
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="TempohPembatalan1" value=""
                                            required="required" placeholder="1"/>
                                </div> 
                                <div class="col-lg-4">
                                <select name="ctl00$MyContentPlaceHolder$TempohPembatalan2"
                                        id="MyContentPlaceHolder_ddlTempohPembatalan2" class="form-control"
                                        required="required">
                                        <option value="TAHUN">TAHUN</option>
                                        <option value="BULAN">BULAN</option>                                    
                                </select> 
                                </div> 
                            </div>                                
                        </div>    
                        <div class="col-lg-6">
                            <label>Taraf Jawatan: </label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="TarafJawatan" value="TETAP"
                                    required="required" placeholder="25"/>
                        </div>                                                                  
                    </div>  
                   
                </div>
            </div>   

        
        
        
        
        <br/>

         <!-- Bayaran-->  
         <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Bayaran</h3>
                        <!-- <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Kursus</h3> -->
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">                 
                <h5 class="card-label">Bayaran Bajet</h5>
                    <div class="form-group row">
                        <div class="col-lg-5">
                            <label>Jenis Bajet: </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlBajet"
                                    id="MyContentPlaceHolder_ddlBajet" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="PL">BAJET SUKAN DAN REKREASI -UTM</option>
                            </select>
                        </div>                                          
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Bayaran Per Peserta</label>
                            <span style="color: red">*</span>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" name="BayaranPerPeserta1" value=""
                                            required="required" placeholder="RM"/>
                                </div> 
                                <div class="col-lg-10">
                                <input type="text" class="form-control" size="100%" height="50" name="BayaranPerPeserta2" value=""
                                    required="required" placeholder="6500"/>
                                </div> 
                            </div>                               
                        </div>    
                        <div class="col-lg-6">
                            <label>Bayaran Per Sesi</label>
                            <span style="color: red">*</span>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" name="BayaranPerSesi1" value=""
                                            required="required" placeholder="RM"/>
                                </div> 
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="BayaranPerSesi2" value=""
                                            required="required" placeholder="3500"/>
                                </div> 
                            </div>                               
                        </div>                                                                 
                    </div>  
                    <br/>
                    <h5 class="card-label">Bayaran Pembatalan</h5>
                        <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Tempoh Pembatalan</label>
                                    <span style="color: red">*</span>
                                    <div class="form-group row">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="Tempoh1" value=""
                                                    required="required" placeholder="1"/>
                                        </div> 
                                        <div class="col-lg-4">
                                            <select name="ctl00$MyContentPlaceHolder$ddlTempoh2"
                                                    id="MyContentPlaceHolder_ddlTempohIkatan2" class="form-control"
                                                    required="required">
                                                <option value="BULAN">BULAN</option>
                                                <option value="TAHUN">TAHUN</option>
                                            </select> 
                                        </div> 
                                    </div>                               
                                </div>
                        </div>   
                        

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Bayaran Pembatalan</label>
                            <span style="color: red">*</span>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" name="BayaranPembatalan1" value=""
                                            required="required" placeholder="RM"/>
                                </div> 
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="BayaranPembatalan2" value=""
                                            required="required" placeholder="4000"/>
                                </div> 
                            </div>                               
                        </div>    
                        <div class="col-lg-6">
                            <label>Bayaran Ansuran Bulanan</label>
                            <span style="color: red">*</span>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" name="BayaranPerSesi1" value=""
                                            required="required" placeholder="RM"/>
                                </div> 
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="BayaranPerSesi2" value=""
                                            required="required" placeholder="500"/>
                                </div> 
                            </div>                               
                        </div>                                                                 
                    </div>  
                   
                </div>
            </div>   

        
        
        
        
        <br/>

        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: center;padding-top: 10px;padding-bottom: 10px;">
                            <button type="button" id="IdButangSave" class="btn btn-primary" style="text-align: center"><span class="fa fa-save"></span>&nbsp;&nbsp; Simpan</button>                            
                                <button type="submit" class="btn btn-light-danger"><i class="fa fa-home"></i> Kembali</button>
                            </div>
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