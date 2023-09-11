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
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Carian Pencalonan</h3>
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
                            <label>Jenis Pencalonan: </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlJenisPencalonan"
                                    id="MyContentPlaceHolder_ddlJenisPencalonan" class="form-control"
                                    required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="Semua">Anugerah Perkhidmatan</option>
                            </select>                            
                        </div>                       
                    </div>
                    <br/>
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

        <!-- Senarai Pengiktirafan BPO -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Calon</h3>
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
                            <th width="8%" style="text-align:center;">No. Rujukan</th>
                            <th width="10%" style="text-align:center;">Jenis Pencalonan</th>
                            <th width="20%" style="text-align:center;">Nama Calon</th>
                            <th width="8%" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>                                  
                                        <td>1</td>
                                        <td>AN20211005</a></td>
                                        <td>Anugerah Perkhidmatan</td>
                                        <td>Aminah binti Abdullah</td> 
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

@endsection

{{-- Scripts Section --}}
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

 <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection