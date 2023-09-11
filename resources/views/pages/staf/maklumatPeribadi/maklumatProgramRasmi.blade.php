{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--Mula: Maklumat Program-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Program
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Nama Program<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="LAWATAN UNTUK KERJA-KERJA PENYELIDIKAN DI UNIVERSITY OF SCIENCE AND TECHNOLOGY (ARMED FORCED PAKISTAN)" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Tujuan Program<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="PENYELIDIKAN DAN KOLABRASI" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                <div class="col-lg-12">
                        <div class="form-group">
                            <label>Faedah Kepada Negara<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="UNTUK MENJALINKAN HUBUNGAN DUA NEGARA" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kekerapan Persidangan/Lawatan/Seminar<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="1 KALI" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bilangan Peserta<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="1" id="example-text-input"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Ketua (Jika Bilangan Peserta Lebih Dari Seorang)</label>
                            <input class="form-control" type="text" value="" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Program -->

<!--begin: Senarai Peserta-->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                <i class="fas fa-plane"></i>
                Maklumat Peserta
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
                            <th width="22%" style="text-align:center;">Nama Peserta</th>
                            <th width="7%" style="text-align:center;">Jawatan/ Pangkat</th>
                            <th width="15%" style="text-align:center;">Muat Naik Fail</th>
                           
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                       ZUBAIDAH BINTI ZARUN
                                    </td>
                                    <td style="text-align:center;">
                                      POST DOCTORAL
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
                                    <input class="form-control" type="text" value="" id="example-text-input"/>
                                    </td>
                                    
                                    <td style="text-align:center;>
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
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
<!--begin: Senarai Peserta-->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                <i class="fas fa-plane"></i>
                Maklumat Perbelanjaan<span class="text-danger">*</span>
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
                            <th width="22%" style="text-align:center;">Jenis Perbelanjaan</th>
                            <th width="7%" style="text-align:center;">Sumber Perbelanjaan</th>
                            <th width="15%" style="text-align:center;">Jumlah Permohonan</th>
                            <th width="15%" style="text-align:center;">Tindakan</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                    TAMBANG PENERBANGA
                                    </td>
                                    <td style="text-align:center;">
                                    SENDIRI
                                    </td>
                                    <td style="text-align:center;">
                                    2000.00
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
										2
                                    </td>
                                    <td style="text-align:center;">
                                    PENGINAPAN
                                    </td>
                                    <td style="text-align:center;">
                                    DITAJA PENGANJUR LUAR
                                    </td>
                                    <td style="text-align:center;">
                                    4000.00
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
										3
                                    </td>
                                    <td style="text-align:center;">
                                    LAIN-LAIN
                                    </td>
                                    <td style="text-align:center;">
                                    SENDIRI
                                    </td>
                                    <td style="text-align:center;">
                                    5000.00
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
										4
                                    </td>
                                    <td>
                                    <input class="form-control" type="text" value="" id="example-text-input"/>
                                    </td>

                                    <td style="text-align:center;">
                                    <input class="form-control" type="text" value="" id="example-text-input"/>
                                    </td>
                                    
                                    <td style="text-align:center;">
                                     <input class="form-control" type="text" value="" id="example-text-input"/>
                                    </td>

                                    <td class="text-center><span class="svg-icon svg-icon-primary svg-icon-2x" style="text-align:center"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
                                    </g>
                                    </svg><!--end::Svg Icon--></span></td>
                                </tr>
                            
                    </tbody>
                    <tbody id="IdTableListMaklumatPermohonan_body">

                    <tr>
                            <td></td>
                            <td></td>
                            <td>Jumlah Keseluruhan</td>
                            <td colspan="1">RM11,000.00</td>
                            <td></td>
                            
                        </tr>
                            
                    </tbody>
                </table>
                <!--end: Table -->
</div>
        </div>
 </div>

</div>
<br>

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
<!--Mula: Maklumat Insuran dan Waris-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Insuran dan Waris
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            Sukacita Dimaklumkan Bahawa Universiti telah meluluskan insuran perjalanan bagi staf yang menjalankan tugas rasmi di luar negara,
                            Dengan melaksanakan ini, Universiti akan menyediakan perlindungan insuran kepada semua staf yang bertaraf
                            tetap, kontrak, sementara(lantikan universiti) bagi melakukan perjalanan ke luar negara atas tujuan rasmi dan/
                            atau berkursus/ menjalanakan latihan luar negara dengan kelulusan Universiti.
                            <br/>
                            <br/>
                            Dengan ini, adakah pihak saudara/saudari bersetuju untuk memilih perlindungan insuran yang disediakan oleh UTM bagi permohonan ini?
                            <br/>
                            <br/>

                            

                            <div class="radio-list">
                                <div class="col-9 col-form-label">
                                    <label class="radio">
                                        <input type="radio"  checked="checked" name="radios4"/>
                                        <span></span>
                                    Ya, saya bersetuju untuk memilih perlindungan insuran yang disediakan oleh UTM
                                    </label>
                                    <label class="radio">
                                    <input type="radio" name="radios4"/>
                                    <span></span>
                                    Tidak , saya tidak bersetuju untuk memilih perlindungan insuran yang disediakan oleh UTM
                                    </label>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Insuran dan Waris -->


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