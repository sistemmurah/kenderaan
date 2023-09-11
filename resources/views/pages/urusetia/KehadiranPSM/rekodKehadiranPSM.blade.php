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
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Carian Rekod Kehadiran</h3>
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
                            <label>No Pekerja / Nama : </label>
                            <!-- @Html.DropDownListFor(model => model.tarikhIklan, new SelectList(Model.ListDDTarikhIklan, "Key", "ViewField"), "-- Please Select --", new { @class = "form-control col-lg-12", @onchange = "tapisJawatan(this)", id = "SESI" }) -->
							<input name="myKadPemohon" type="text" id="myKadPemohon" class="form-control" value="" />
                            
                        </div>  
                        <div class="col-lg-6">
                            <label>Bulan Kehadiran : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlBulanKehadiran"
                                    id="MyContentPlaceHolder_ddlBulanKehadiran" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Semua">Semua</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Mac">Mac</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="Jun">Jun</option>
                                <option value="Julai">Julai</option>
                                <option value="Ogos">Ogos</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Disember">Disember</option>
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
                            <div style="text-align: center;padding-top: 10px;">
                                <button type="submit" class="btn btn-light-primary"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        <br>

        <!-- Senarai Rekod Kehadiran -->
        <div class="card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Rekod Kehadiran</h3>
                </div>

                <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: right;padding-top: 15px;">
                                <button type="submit" class="btn btn-light-warning"><i class="fa fa-print"></i> Cetak</button>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="card-body">

                <div class="form-group row">
                        <div class="col-lg-6">
                            <label>No Pekerja : </label>
                            <input type="text" class="form-control" name="noPekerja" value=""
                                   required="required" placeholder="7392" disabled="disabled"/>                          
                        </div>  
                        <div class="col-lg-6">
                            <label>Nama : </label>
                            <input type="text" class="form-control" name="namaPekerja" value=""
                                   required="required" placeholder="Aminah binti Abdullah" disabled="disabled"/>
                        </div>                      
                </div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Jawatan : </label>
                            <input type="text" class="form-control" name="noPekerja" value=""
                                   required="required" placeholder="Pegawai Teknologi Maklumat (FA41)" disabled="disabled"/>                          
                        </div>  
                        <div class="col-lg-6">
                            <label>Fakulti : </label>
                            <input type="text" class="form-control" name="namaPekerja" value=""
                                   required="required" placeholder="Jabatan Perkhidmatan Digital" disabled="disabled"/>
                        </div>                      
                </div>
                <br/>
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="3%" style="text-align:center;">Tarikh</th>
                            <th width="8%" style="text-align:center;">Hari</th>
                            <th width="10%" style="text-align:center;">WBB/Syif</th>
                            <th width="8%" style="text-align:center;">Masuk</th>
                            <th width="8%" style="text-align:center;">Keluar</th>
                            <th width="10%" style="text-align:center;">Fleksi (Min)</th>
                            <th width="20%" style="text-align:center;">Lewat</th>
                            <th width="15%" style="text-align:center;">Kehilangan Masa</th>
                            <th width="15%" style="text-align:center;">Sumbangan Masa</th>
                            <th width="15%" style="text-align:center;">Kerja Lebih Masa</th>
                            <th width="15%" style="text-align:center;">Isu / Catatan</th>
                            <th width="15%" style="text-align:center;">Status</th>
                            <th width="15%" style="text-align:center;">Aliran Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td>11/01/2021</td>
                                        <td>Isnin</a></td>
                                        <td>WBB2</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>00.00</td>
                                        <td>00.00</td>
                                        <td>00.00</td>   
                                        <td>00.00</td> 
                                        <td>Cuti Rehat</td>   
                                        <td></td>   
                                        <td></td>                           
                                </tr>
                                <tr>                                  
                                        <td>12/01/2021</td>
                                        <td>Selasa</a></td>
                                        <td>WBB2</td>
                                        <td>08:12:09</td>
                                        <td>17:40:12</td>
                                        <td>19</td>
                                        <td>00.00</td>
                                        <td>00.00</td>
                                        <td>04.01</td>   
                                        <td>00.00</td> 
                                        <td></td>   
                                        <td></td>   
                                        <td></td>                                
                                </tr>
                                <tr>                                  
                                        <td></td>
                                        <td></a></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Jumlah</b></td>
                                        <td><b>19</b></td>
                                        <td><b>00.00</b></td>
                                        <td><b>00.00</b></td>
                                        <td><b>04.01</b></td>   
                                        <td><b>00.00</b></td> 
                                        <td></td>   
                                        <td></td>   
                                        <td></td>                                  
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