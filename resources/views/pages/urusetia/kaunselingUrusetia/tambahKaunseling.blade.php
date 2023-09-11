{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah Binti Ahmad -->

<!-- Mula: search no pekerja/nama klien -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-search"></i>
                        Carian
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja / Nama</label>
                            <div class="input-icon input-icon-right">
                                <input type="text" class="form-control" placeholder="Cari..." />
                                <span><i class="flaticon2-search-1 icon-md"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mula: search no pekerja klien -->

<!--Mula: Maklumat Klien -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklumat Klien
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan</label>
                            <input id="noRujukan" type="text" class="form-control" disabled="disabled"
                                value="KS2021006" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja</label>
                            <input id="noPekerja" type="text" class="form-control" disabled="disabled" value="7332" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaKlien" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanKlien" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan</label>
                            <input id="jabatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian</label>
                            <input id="bahagianKlien" type="text" class="form-control" disabled="disabled"
                                value="BAHAGIAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Klien -->

<!--Mula: Maklumat Laporan Sesi Kaunseling -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklum Balas Penyelia
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Tingkah Laku Staf (Semasa)<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="tingkahLaku" rows="3"
                                placeholder="Sila Tulis Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Emosi Staf<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="emosi" rows="3"
                                placeholder="Sila Tulis Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Pemikiran Staf<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="pemikiran" rows="3"
                                placeholder="Sila Tulis Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Prestasi Staf<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="prestasi" rows="3"
                                placeholder="Sila Tulis Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Cadangan Penyelia<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="cadanganPenyelia" rows="3"
                            placeholder="Sila Tulis Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Lain-lain</label>
                            <textarea class="form-control" id="cadanganPenyelia" rows="4"
                            placeholder="Sila Tulis Disini"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Laporan Sesi Kaunseling -->

<!-- Mula: Butang Hantar/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">

                <button onclick="window.location = '{{ route('kaunselingUrusetia.senaraiKaunseling') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button onclick="window.location = '{{ route('kaunselingUrusetia.senaraiKaunseling') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Hantar/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection