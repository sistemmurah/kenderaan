{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--Mula: Maklumat Permohonan -->

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                        
                            
                            <div class="form-group">
                            <img src="{{ asset('media/users/default.jpg') }}"height="150" ></img>
					</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama :</label>&nbsp&nbsp<label>MOHD SUBHA BIN SALLEH</label><br>
                            <label>No. Pekerja :</label>&nbsp<label>9364</label><br>
                            <label>Fakulti/Jabatan :</label>&nbsp<label>J07 - JABATAN PERKHIDMATAN DIGITAL</label>><br>
                            <label>Jawatan :</label>&nbsp&nbsp<label>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</label><br>
                           
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Permohonan -->



<!--Mula: Maklumat JawataN Yang Dipohon -->

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Maklumat Jawatan Yang Dipohon
                    </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Jawatan</label> <input id="jawatan" type="text" class="form-control" value="JG00004 - PENGARAH" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Mohon</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="27-Jan-2021" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Bidang</label> <input id="jawatan" type="text" class="form-control" value="BJ00039 - CICT" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Hantar</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/PTJ</label> <input id="jawatan" type="text" class="form-control" value="J07 - JABATAN PERKHIDMATAN DIGITAL" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Dicadangkan</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="TIDAK (KEUTAMAAN : 0)" />
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat JawataN Yang Dipohon -->



<!--Mula: Maklumat Perkhidmatan Semasa Pemohon -->

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Maklumat Perkhidmatan Semasa Pemohon
                    </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan</label> <input id="jawatan" type="text" class="form-control" value="JABATAN PERKHIDMATAN DIGITAL" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lantikan Terkini</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="27-Jan-2021" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Taraf Jawatan</label> <input id="jawatan" type="text" class="form-control" value="TETAP" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Sah Jawatan</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="03-Jan-2006" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Mula Berkhidmat</label> <input id="jawatan" type="text" class="form-control" value="JG00004 - PENGARAH" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pencen</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="29-Jun-2039" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Mula UTM</label> <input id="jawatan" type="text" class="form-control" value="JG00004 - PENGARAH" />
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Tamat Kontrak</label>
                            <input id="no.telPengirim" type="tel" class="form-control" value="27-Jan-2021" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Umur Persaraan</label> <input id="jawatan" type="text" class="form-control" value="60" />
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Perkhidmatan Semasa Pemohon -->

<!--Mula: Maklumat Prestasi Staf -->

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Maklumat Prestasi Staf
                    </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>There are no data record to display</label>
                            
                        </div>
                    </div>
                   
                </div>

                
                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Prestasi Staf -->

<!--begin: Senarai Lampiran-->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                <i class="icon-2x text-dark-50 flaticon-network"></i>
                Lampiran
				</a>
            </h3>
        </div>

        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>

    </div>
<div class="card-body">
  <div class="row">



  <div class="col-lg-12">
 <!--begin: Table -->
    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="22%" style="text-align:center;">Jenis Lampiran</th>
                            <th width="20%" style="text-align:center;">Muatnaik Fail</th>
                            <th width="15%" style="text-align:center;">Nama Fail</th>
                            <th width="15%" style="text-align:center;">Tindakan</th>
                           
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:left;">
                                       *Borang A
                                    </td>
                                    <td style="text-align:center;">
                                    <div></div>
						                <div class="custom-file">
							            <input type="file" class="custom-file-input" id="customFile"/>
							        <label class="custom-file-label" for="customFile">Choose file</label>
						        </div>
                                    </td>
                                    <td style="text-align:center;">
                                    
						            
                                    </td>
                                    
                                    <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
										2
                                    </td>
                                    <td style="text-align:left;">
                                    *CV
                                    </td>
                                    <td style="text-align:center;">
                                    <div></div>
						                <div class="custom-file">
							            <input type="file" class="custom-file-input" id="customFile"/>
							        <label class="custom-file-label" for="customFile">Choose file</label>
						        </div>
                                    </td>
                                    <td style="text-align:center;">
                                    
                                    </td>
                                    
                                    <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
										3
                                    </td>
                                    <td style="text-align:left;">
                                    *Surat Sokongan Ketua Jabatan
                                    </td>
                                    <td style="text-align:center;">
                                    <div></div>
						                <div class="custom-file">
							            <input type="file" class="custom-file-input" id="customFile"/>
							        <label class="custom-file-label" for="customFile">Choose file</label>
						        </div>
                                    </td>
                                    <td style="text-align:center;">
                                    
                                    </td>
                                    
                                    <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
										4
                                    </td>
                                    <td style="text-align:left;">
                                    Lain-lain
                                    </td>
                                    <td style="text-align:center;">
                                    <div></div>
						                <div class="custom-file">
							            <input type="file" class="custom-file-input" id="customFile"/>
							        <label class="custom-file-label" for="customFile">Choose file</label>
						        </div>
                                    </td>
                                    <td style="text-align:center;">
                                    
                                    </td>
                                    
                                    <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>
                                </tr>
              
                    </tbody>
                    
                </table>
                <!--end: Table -->
</div>
        </div>
 </div>



</div>
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('urusetia.jawatanAkademikGiliranUrusetia.senaraiPermohonan') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>            

@endsection

{{-- Scripts Section --}}
@section('scripts')
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/eBoarding/lampiran_jaw_giliran_Table.js') }}"></script>

@endsection