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

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Permohonan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="mr-3 mb-0 d-none d-md-block">Jenis Permohonan</label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">BORANG C - PERSENDIRIAN</option>
                                    <option value="">SILA PILIH</option>
                                    <option value="">BORANG A - URUSAN RASMI</option>
                                    <option value="">BORANG C - PERSENDIRIAN</option>
                                    
                                </select>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tamat: Maklumat Permohonan -->

<!--Mula: Maklumat Pemohon-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Pemohon
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaPengirim" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Pekerja</label>
                            <input id="no.pekerja" type="tel" class="form-control" disabled="disabled"
                                value="7332" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Warganegara</label>
                            <input id="warganegara" type="text" class="form-control" disabled="disabled"
                                value="MYS - MALAYSIA" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Kad Pengenalan</label>
                            <input id="no.telPengirim" type="tel" class="form-control" disabled="disabled"
                                value="750626-01-5442" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatan" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT (FA41)" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti</label>
                            <input id="no.telPengirim" type="tel" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email Rasmi</label>
                            <input id="emailRasmi" type="text" class="form-control" disabled="disabled"
                                value="aminah@utm.my" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Telefon Pejabat</label>
                            <input id="no.telPejabat" type="tel" class="form-control" disabled="disabled"
                                value="075533067" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pemohon -->

<!--Mula: Maklumat Perjalanan-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Perjalanan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan</label>
                            <input id="namaPengirim" type="text" class="form-control" disabled="disabled"
                                value="J2021C00701" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Permohonan</label>
						   
							<input class="form-control" type="date" value="2020-01-02" id="example-date-input"/>
						    
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Jenis Lawatan<span class="text-danger">*</span></label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">SILA PILIH</option>
                                    <option value="">SENDIRI</option>
                                    <option value="">BERKUMPULAN</option>
                                    <option value="">PENGANJUR</option>
                                </select>
                        </div>
                    </div>
                 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kategori Penglibatan</label>
                            <input class="form-control" type="text" value="" id="example-text-input"/>
                                
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Negara<span class="text-danger">*</span></label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">SILA PILIH</option>
                                    <option value="">SAUDI ARABIA</option>
                                    <option value="">CHINA</option>
                                    <option value="">PAKISTAN</option>
                                </select>
                        </div>
                    </div>
                 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tempat Lawatan<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="MEKAH" id="example-text-input"/>
                                
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Tarikh Mula<span class="text-danger">*</span></label>
						    
							<input class="form-control" type="date" value="2020-01-02" id="example-date-input"/>
						    
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Tarikh Tamat<span class="text-danger">*</span></label>
						    
							<input class="form-control" type="date" value="2020-01-02" id="example-date-input"/>
						    
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Bilangan Hari<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="10" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Jumlah Perbelanjaan</label>
                            <input class="form-control" type="text" value="RM20,000.00" id="example-text-input"/>
                        </div>
                    </div>
                </div>
            

                 <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kelulusan Cuti<span class="text-danger">*</span></label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">SILA PILIH</option>
                                    <option value="">CUTI REHAT</option>
                                    <option value="">CUTI TANPA GAJI/option>
                                    <option value="">CUTI BEREKOD</option>
                                    <option value="">LAIN-LAIN</option>
                                </select>
                        </div>
                    </div>
                </div>     
            </div>


        </div>
    </div>
</div>
<!--Tamat: Maklumat Perjalanan -->


<!--Mula: Maklumat Penganjur-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Penganjur
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Penganjur<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="TRAVEL JOM SDN. BHD" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Tel Penganjur<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="03-4241528" id="example-text-input"/>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat 1<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="215 TAMAN CEMPAKA" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label>Alamat 2</label>
                            <input class="form-control" type="text" value="BUKIT CEMPAKA" id="example-text-input"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="43000" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="SHAH ALAM" id="example-text-input"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negeri<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="SELANGOR" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Ketua Kumpulan</label>
                            <input class="form-control" type="text" value="" id="example-text-input"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Penganjur -->



<br/>

<!--begin: Senarai Lampiran-->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                <i class="fas fa-plane"></i>
                Lampiran<span class="text-danger">*</span>
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
            
<br><br>

<div class="col-lg-12">
 <!--begin: Table -->
<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="22%" style="text-align:center;">Nama Fail</th>
                            <th width="7%" style="text-align:center;">Fail</th>
                            <th width="15%" style="text-align:center;">Muat Naik Fail</th>
                           
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                       Kelulusan Cuti
                                    </td>
                                    <td style="text-align:center;">
                                      KelulusanCuti.pdf
                                    </td>
                                    
                                    <td style="text-align:center;">
                                       <a onclick="fnCallModalItem(this);" id="activityAdDetails_@item.WARAN_PK" data-id="@item.WARAN_PK~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                        <button type="button" id="IdButangDelete" onclick="deleteWaran(this)" data-id="@item.WARAN_PK~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                                       
                                    </td>
                                </tr>
              
                    </tbody>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td>
                                    <input class="form-control" type="text" value="" id="example-text-input"/>
                                    </td>
                                    <td style="text-align:center;">
                                      
                                    </td>
                                    
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
                <!--end: Table -->
</div>
        </div>
 </div>

</div>

<br>

<!-- Mula: Butang Hantar/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.senaraiPermohonanStaf') }}'"
                    class="btn btn-success font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.senaraiPermohonanStaf') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.senaraiPermohonanStaf') }}'"
                    class="btn btn-danger font-weight-bold"> Batal
                </button>
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.senaraiPermohonanStaf') }}'"
                    class="btn btn-warning font-weight-bold"> Cetak
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Hantar/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')

	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/eBoarding/eBoardingTable.js') }}"></script>
    
@endsection