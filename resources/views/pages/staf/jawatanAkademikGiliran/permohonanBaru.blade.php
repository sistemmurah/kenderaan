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
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Borang Permohonan/ Pencalonan Pentadbir Akademik
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Jawatan</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Pemohon</label>
                            <input id="no.pekerja" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Staf</label>
                            <input id="warganegara" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan Hakiki</label>
                            <input id="no.telPengirim" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Umur</label>
                            <input id="jawatan" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti Hakiki</label>
                            <input id="no.telPengirim" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lantikan Pertama Di UTM</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Bersara</label>
                            <input id="no.telPejabat" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lantikan Kontrak(Jika Berkaitan)</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Permohonan -->

<!--Mula: Maklumat Kenaikan Pangkat-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Maklumat Kenaikan Pangkat
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Profesor</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Profesor Madya</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pensyarah Kanan</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Kenaikan Pangkat -->


<!--Mula: Maklumat JAWATAN PENTADBIR AKADEMIK SEKARANG (JIKA ADA)-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Maklumat Jawatan Pentadbir Akademik Sekarang
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>PTJ</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat JAWATAN PENTADBIR AKADEMIK SEKARANG (JIKA ADA) -->


<!--Mula: Maklumat PENGALAMAN PENTADBIR AKADEMIK TERDAHULU (JIKA ADA)-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">  
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                        Maklumat Pengalaman Pentadbir Akademik Terdahulu (Jika Ada)
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Jawatan</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/PTJ</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
            
                <br>
            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Tempoh Mula Lantikan</label>
                            <label>Mula</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tempoh Tamat Lantikan</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Bidang Kepakaran</label>
                            <input class="form-control" type="text" value="" id="example-date-input"/>
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="card-body text-center">
                    <button onclick="window.location = '{{ route('staf.maklumatPeribadi.senaraiPermohonanStaf') }}'"
                    class="btn btn-success font-weight-bold"> Tambah
                    </button>
                </div>

                 <!--begin: Table -->
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="10%" style="text-align:center;">Nama Jawatan</th>
                            <th width="7%" style="text-align:center;">PTJ/Fakulti</th>
                            <th width="10%" style="text-align:center;">Tempoh Mula Lantikan</th>
                            <th width="7%" style="text-align:center;">Tempoh Tamat Lantikan</th>
                            <th width="7%" style="text-align:center;">Tindakan</th>
                            
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">

								<tr>
                                    <td style="text-align:center;">
										1
                                    </td>
                                    <td style="text-align:center;">
                                        
                                    </td>
                                    <td style="text-align:center;">
                                    
                                    </td>
                                    <td style="text-align:center;"> 
                                    
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
<!--Tamat: Maklumat PENGALAMAN PENTADBIR AKADEMIK TERDAHULU (JIKA ADA) -->

<!--Mula: Maklumat Markah Prestasi 2 tahun Terkini-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">  
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                    Maklumat Markah Prestasi 2 Tahun Terkini
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tahun</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Markah</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
            
                <br>
            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        
                            <label>Tahun</label>
                            <input class="form-control" type="text" value="" id="example-date-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Markah</label>
                            <input class="form-control" type="text" value="" id="example-date-input"/>
                        </div>
                    </div>
                </div>
                <br>
                 
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Markah Prestasi 2 tahun Terkini -->

<!--Mula: Maklumat Perakuan Calon-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Perakuan Calon
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            Saya mengaku bahawa maklumat yang diberikan adalah betul semasa permohonan ini dibuat dan saya juga:
                            <br/><br/>
                            <div class="checkbox-list checkbox-square">
                                <label class="checkbox">
                                    <input type="checkbox"  name="Checkboxes4"/>
                                    <span></span>
                                    BERSETUJU
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" checked="" name="Checkboxes4"/>
                                    <span></span>
                                    TIDAK BERSETUJU
                                </label>
                                
                            </div>

                            
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>
</div>

<!--Tamat: Maklumat Perakuan Calon -->

<!--Mula: Maklumat Pengesahan Dekan/Pengarah-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Pengesahan Dekan/Pengarah
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            Saya mengesahkan maklumat ini adalah benar dan saya:
                            <br>
                            <br/>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-list checkbox-square">
                                    <label class="checkbox">
                                        <input type="checkbox"  name="Checkboxes4"/>
                                        <span></span>
                                        MENYOKONG
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" checked="" name="Checkboxes4"/>
                                        <span></span>
                                        TIDAK MENYOKONG
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

<!--Tamat: Maklumat Pengesahan Dekan/Pengarah-->

<br/>

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