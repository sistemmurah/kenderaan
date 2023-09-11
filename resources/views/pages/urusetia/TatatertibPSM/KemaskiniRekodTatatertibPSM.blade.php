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
        <!-- Maklumat Pelaporan-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Pelaporan</h3>
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
                            <label>No Rujukan : </label>
                            <input type="text" class="form-control" name="noPekerja" value=""
                                    required="required" placeholder="TLHDN2021003"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>Tarikh Dilaporkan : </label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_1"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div> 
                        </div>                                              
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Nama : </label>
                            <input type="text" class="form-control" name="Nama" value=""
                                    required="required" placeholder="AMINAH BINTI ABDULLAH"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>No Pekerja : </label>
                            <input type="text" class="form-control" name="NoPekerja" value=""
                                    required="required" placeholder="7392"/>                          
                        </div>                                           
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Jawatan</label>
                            <input type="text" class="form-control" name="Jawatan" value=""
                                    required="required" placeholder="Pegawai Teknologi Maklumat"/>  
                        </div>   
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                    id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="JP">Jabatan Pendaftar</option>
                                <option value="JPD">Jabatan Perkhidmatan Digital</option>
                            </select>
                        </div>                                                                  
                    </div>                                              
                    
                </div>
            </div>        
        <br/>
         <!-- Maklumat Pelapor-->     
         <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Pelapor</h3>
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
                            <label>Nama : </label>
                            <input type="text" class="form-control" name="Nama" value=""
                                    required="required" placeholder="MOHD ZAID BIN ZAIN"/>
                        </div>  
                        <div class="col-lg-6">
                            <label>No Pekerja : </label>
                            <input type="text" class="form-control" name="NoPekerja" value=""
                                    required="required" placeholder="8002"/>                          
                        </div>                                           
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Jawatan</label>
                            <input type="text" class="form-control" name="Jawatan" value=""
                                    required="required" placeholder="Pengarah Teknologi Digital"/>  
                        </div>   
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                    id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="JP">Jabatan Pendaftar</option>
                                <option value="JPD">Jabatan Perkhidmatan Digital</option>
                            </select>
                        </div>                                                                  
                    </div>                                              
                    
                </div>
            </div>        
        <br/>
         <!-- Maklumat Kes Tatatertib-->     
         <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp; Maklumat Kes Tatatertib</h3>
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
                                <button onclick="window.location = '{{ route('urusetia.TatatertibPSM.MaklumatKesTatatertibPSM') }}'" class="btn btn-sm btn-icon btn-light-primary"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i> Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                                <thead class="colored">
                                        <tr>
                                        <th width="3%" style="text-align:center;">Bil</th>
                                            <th width="10%" style="text-align:center;">Tarikh Kejadian</th>
                                            <th width="10%" style="text-align:center;">Kes Tatatertib</th>
                                            <th width="10%" style="text-align:center;">Jenis Pelanggaran Tatatertib</th>
                                            <th width="10%" style="text-align:center;">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>                                  
                                                    <td style="text-align:center;">1.</td>
                                                    <td style="text-align:center;">27/12/2020</td>
                                                    <td style="text-align:center;">Tatakelakuan</td>
                                                    <td style="text-align:center;">Tidak jujur/Tidak bertanggungjawab</td>
                                                    <td style="text-align:center;">
                                                    <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>                                       
                                                    </td> 
                                            </tr>                          
                    </tbody>
                </table>
                        </div>                                                                                                            
                    </div>                                
                    
                </div>
            </div>        
        <br/>
        <!-- Bukti Kes Tatatertib-->     
        <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;  Bukti Kes Tatatertib</h3>
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
                            <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                                <thead class="colored">
                                        <tr>
                                        <th width="3%" style="text-align:center;">Bil</th>
                                            <th width="10%" style="text-align:center;">Nama Fail</th>
                                            <th width="10%" style="text-align:center;"> Fail</th>
                                            <th width="10%" style="text-align:center;">Muat Naik Fail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>                                  
                                                    <td style="text-align:center;">1.</td>
                                                    <td style="text-align:center;">Bukti Kes</td>
                                                    <td style="text-align:center;">Bukti Kes.pdf</td>
                                                    <td style="text-align:center;>
                                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Download.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="1" width="2" height="14" rx="1"/>
                                                        <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
                                                        </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                        
                                                    </td>
                                            </tr>                          
                    </tbody>
                </table>
                        </div>                                                                                                            
                    </div>                                
                    
                </div>
            </div>        
        <br/>


        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div id="MyContentPlaceHolder_savebtn">
                    <div class="col-lg-12">
                        <div style="text-align: center;padding-top: 10px;padding-bottom: 10px;">   
                                      
                            <button type="button" id="IdButangSave" class="btn btn-primary" style="text-align: center"><span class="fa fa-save"></span>  Simpan</button>
                            <button type="button" id="IdButangBatal" class="btn btn-light-danger" style="text-align: center"><span class="fa fa-home"></span>  Kembali</button>
                       
                        </div>
                    </div>
                </div>
    </div>
    <br/>
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