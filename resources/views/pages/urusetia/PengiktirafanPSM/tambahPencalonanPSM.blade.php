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
        <!-- Maklumat Rekod-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Pencalonan</h3>
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
                            <input type="text" class="form-control" name="noRujukan" value=""
                                    required="required" placeholder="AN20211005"/>
                        </div>                                             
                    </div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                            <label>Jenis Pencalonan : </label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisPencalonan"
                                    id="MyContentPlaceHolder_ddlJenisPencalonan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Semua">Anugerah Perkhidmatan</option>
                            </select>   
                        </div>  
                    <div class="col-lg-6">
                            <label>No. Pekerja : </label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control" name="Jawatan" value=""
                                    required="required" placeholder="7392"/>
                        </div>                                                                  
                    </div>                            
                </div>
            </div>        
        <br/>
        <!-- Kelulusan PSM PTJ-->     
        <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Calon</h3>
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
                            <label>Tarikh Terima</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_tarikhTerima"/>
                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                </div>
                                
                                <span id="MyContentPlaceHolder_RegularExpressionValidator2"
                                  style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
                            </div>    
                        </div>   
                        <div class="col-lg-6">
                            <label>Tarikh Semak</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_tarikhSemak"/>
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
                            <label>Disemak oleh: </label>
                            <input type="text" class="form-control" name="Alasan" value=""
                                    required="required" placeholder="Abu Bakar bin Omar"/>
                        </div>  
                    <div class="col-lg-6">
                            <label>Isu</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlStatus"
                                    id="MyContentPlaceHolder_ddlStatus" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Lulus">Lulus</option>
                                <option value="TidakLulus">Tidak Lulus</option>
                            </select>                                
                        </div>                                                                                           
                    </div>                                
                    
                </div>
            </div>        
        <br/>

        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Perkhidmatan</h3>
                </div>

                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm text-dark"></i>
                    </a>
                </div>

            </div>
            <div class="card-body">
            <label>Pergerakan Gaji/Anugerah Khidmat Cemerlang(AKC)</label>
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="10%" style="text-align:center;font-weight:bold">Tahun</th>
                            <th width="10%" style="text-align:center;">2018</th>
                            <th width="10%" style="text-align:center;">2019</th>
                            <th width="10%" style="text-align:center;">2020</th>
                            <th width="10%" style="text-align:center;">Markah Wajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td style="text-align:center;">Markah Prestasi</td>
                                        <td style="text-align:center;">9.59</td>
                                        <td style="text-align:center;">9.66</td>
                                        <td style="text-align:center;">0.00</td> 
                                        <td style="text-align:center;">64.17%</td>                                      
                                 </tr>                          
                    </tbody>
                </table>
                <br/>

                <label>Pergerakan Gaji/Anugerah Khidmat Cemerlang(AKC)</label>
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="10%" style="text-align:center;font-weight:bold">Tindakan</th>
                            <th width="10%" style="text-align:center;">Tarikh Laporan</th>
                            <th width="10%" style="text-align:center;">Status</th>
                            <th width="10%" style="text-align:center;">Hukuman Tatatertib </th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td style="text-align:center;"></td>
                                        <td style="text-align:center;"></td>
                                        <td style="text-align:center;"></td>
                                        <td style="text-align:center;"></td>                                      
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
                                <button type="submit" class="btn btn-light-danger"><i class="fa fa-home"></i> Kembali</button>
                            </div>
                        </div>
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