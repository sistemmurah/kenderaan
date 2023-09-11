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
                        Borang Permohonan Baru / Sambung / Berhenti Pelan Takaful Berkelompok UTM
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pelan Takaful UTM Bagi Tahun</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nombor Sijil</label>
                            <input id="no.pekerja" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jenis Permohonan</label>
                            <select class="form-control" id="negaraPenganjur">
                                                <option>Baru</option>
                                                <option>Sambung Keahlian</option>
                                                <option>Penamatan Keahlian</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jenis Insuran</label>
                            <select class="form-control" id="negaraPenganjur">
                                                <option>Pelan Takaful Keluarga Berkelompok (PTKB)</option>
                                                <option>Group Ma'asyi Family Takaful</option>
                                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Permohonan -->

<!--Mula: Pengesahan/ Akad Staf-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                    Pengesahan/ Akad Penyambungan Mencarum
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.K/P</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lahir</label>
                            <input class="form-control" type="date" value="" id="example-date-input"/>
                        </div>
                    </div>
                
                
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Umur</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian/Jabatan</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="namaPengirim" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Sokongan</label>
                            <select class="form-control" id="negaraPenganjur">
                                <option>Ketua Jabatan</option>
                                <option>Penolong Pendaftar</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tamat: Pengesahan Staf -->


<!--Mula: Maklumat Pemohon dan Keluarga/Tanggungan)-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                    Maklumat Pemohon dan Keluarga/Tanggungan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No Kad Pengenalan</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lahir</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Cawangan</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No Pekerja</label>
                            <input id="emailRasmi" type="text" class="form-control" 
                                value="" />
                        </div>
                    </div>
                  
                </div>
        
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Pemohon -->


<!--Mula: Maklumat Keluarga/Tanggungan)-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                    Maklumat Keluarga/Tanggungan
                    </h3>
                </div>
                <div class="card-toolbar">
                    </h3><button onclick="window.location = '{{route('staf.insuranBerkelompok.insBerTamTanggungan')}}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah tanggungan" textAlign='right'>
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                    </button>
                </div>
            </div>

            <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                <tr>
                    <th style="text-align:center;">Bil</th>
                    <th style="text-align:center;">Nama</th>
                    <th style="text-align:center;">No Kad Pengenalan/ Sijil Beranak</th>
                    <th style="text-align:center;">Tarikh Lahir</th>
                    <th style="text-align:center;">Hubungan</th>
                    <th style="text-align:center;">Alamat Surat Menyurat</th>
                    <th style="text-align:center;">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Siti Binti Ali</td>
                    <td>860112012334</td>
                    <td>02/01/1986</td>
                    <td>Isteri</td>
                    <td>Taman Universiti</td>
                    <td class="text-center p-0">
                        <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                <td>2</td>
                <td>100201018776</td>
                    <td>Karim binti Salleh</td>
                    <td>02/01/2010</td>
                    <td>Anak</td>
                    <td>Taman Universiti<</td>
                    <td class="text-center p-0">
                        <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
               
            </tbody>
        </table>
        <!--end: Datatable-->
        </div>
    </div>
</div>
<!--Tamat: Maklumat JAWATAN PENTADBIR AKADEMIK SEKARANG (JIKA ADA) -->




@endsection

{{-- Scripts Section --}}
@section('scripts')

	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/insKelompok/insKelompokDatatable.js') }}"></script>
    
@endsection