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
                        Tambah Maklumat Tanggungan
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
                            <label>No Kad Pengenalan/ Sijil Beranak</label>
                            <input id="no.pekerja" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lahir</label>
                            <input id="no.pekerja" type="date" class="form-control" 
                                value="" />
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Hubungan</label>
                            <select class="form-control" id="negaraPenganjur">
                                                <option>Sila Pilih</option>
                                                <option>Isteri</option>
                                                <option>Anak</option>
                                                
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Alamat Surat Menyurat</label>
                            <input id="no.pekerja" type="tel" class="form-control" 
                                value="" />
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Permohonan -->

<!-- Mula: Butang Simpan/Hantar/Kembali/Cetak -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('eBoardingStaf.senaraiEBoarding') }}'"
                    class="btn btn-light-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('eBoardingStaf.senaraiEBoarding') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button onclick="window.location = '{{ route('staf.insuranBerkelompok.insuranBerkelompokMohon') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
                <button onclick="window.location = '{{ route('eBoardingStaf.senaraiEBoarding') }}'"
                    class="btn btn-warning font-weight-bold"> Cetak
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Hantar/Kembali/Cetak -->




@endsection

{{-- Scripts Section --}}
@section('scripts')

	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/insKelompok/insKelompokDatatable.js') }}"></script>
    
@endsection