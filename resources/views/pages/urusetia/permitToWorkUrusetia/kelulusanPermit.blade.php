{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--Mula: Maklumat Pemohon -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Kelulusan Permit
                    </h3>
                </div>
            </div>

            <!-- Mula: Accordion Kelulusan Permit -->
            <div class="accordion accordion-toggle-arrow" id="accordionPermit">
                <!-- Mula: Maklumat Pemohon -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title" data-toggle="collapse" data-target="#collapsePemohon">
                            Maklumat Pemohon
                        </div>
                    </div>

                    <div id="collapsePemohon" class="collapse show" data-parent="#accordionPermit">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                                        value="RAMALINGAN A/L RAJAGOMBAL" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Kad Pengenalan / Pasport</label>
                                        <input id="noKP" type="tel" class="form-control" disabled="disabled"
                                        value="-" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Telefon Bimbit</label>
                                        <input id="noTel" type="text" class="form-control" disabled="disabled"
                                        value="+6011-11130132" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tarikh Lahir</label>
                                        <input id="tarikhLahir" type="email" class="form-control" disabled="disabled"
                                        value="02/02/1935" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tarikh Tamat Pasport (bukan warganegara)<span class="text-danger">*</span></label>
                                        <input id="tarikhTamatPasport" type="text" class="form-control" disabled="disabled" 
                                        value="10/03/2025" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tarikh Tamat Permit (bukan warganegara)</label>
                                        <input id="tarikhTamatPasport" type="text" class="form-control" disabled="disabled" 
                                        value="10/03/2025" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nombor Pendaftaran Kenderaan</label>
                                        <input id="noPlat" type="text" class="form-control" disabled="disabled"
                                        value="VBF 7915" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kenderaan</label>
                                        <input id="jenisKenderaan" type="text" class="form-control" disabled="disabled"
                                        value="VAN" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jawatan</label>
                                        <input id="Jawatan" type="text" class="form-control" disabled="disabled"
                                        value="BURUH KASAR" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tugas</label>
                                        <input id="Tugas" type="text" class="form-control" disabled="disabled"
                                        value="MEMASTIKAN KERJA SIAP PADA WAKTU YANG SINGKAT" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Lokasi Bertugas di UTM</label>
                                        <input id="lokasiDiUTM" type="text" class="form-control" disabled="disabled"
                                        value="PUSAT UTM DIGITAL" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempoh Bertugas : Dari Tarikh</label>
                                        <input id="tarikhMulaTugas" type="text" class="form-control" disabled="disabled" 
                                        value="21/12/2019" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hingga</label>
                                        <input id="tarikhTamatTugas" type="text" class="form-control" disabled="disabled"
                                        value="21/10/2023" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Waktu Berada Dalam UTM : Dari Jam</label>
                                        <input id="jamMulaTugas" type="text" class="form-control" disabled="disabled" 
                                        value="09:00" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hingga</label>
                                        <input id="jamTamatTugas" type="text" class="form-control" disabled="disabled"
                                        value="18:00" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tamat: Maklumat Pemohon -->

                <!-- Mula: Maklumat Majikan -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseMajikan">
                            Maklumat Majikan
                        </div>
                    </div>
                    <div id="collapseMajikan" class="collapse" data-parent="#accordionPermit">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Syarikat</label>
                                        <input id="namaSyarikat" type="text" class="form-control" disabled="disabled" 
                                        value="Steven Sense Tech Bhd." />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Tel. Pejabat</label>
                                        <input id="noPejabatPemohon2" type="text" class="form-control" disabled="disabled"
                                        value="+603-33173840" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempoh Kontrak Syarikat dan UTM : Dari Tarikh</label>
                                        <input id="tarikhMulaKontrak" type="text" class="form-control" disabled="disabled"
                                        value="21/12/2019" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hingga</label>
                                        <input id="tarikhTamatKontrak" type="text" class="form-control" disabled="disabled"
                                            value="21/10/2023" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Tamat: Maklumat Majikan -->

                <!-- Mula: Maklumat Lampiran -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseLampiran">
                            Maklumat Lampiran
                        </div>
                    </div>
                    <div id="collapseLampiran" class="collapse" data-parent="#accordionPermit">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>2 Keping Gambar Pasport</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Gambar Pasport"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Kad Pengenalan</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Kad Pengenalan"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Pasport</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Pasport"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Permit</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Permit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Surat Tawaran Kerja</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Surat Tawaran Kerja"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Surat Tawaran Kontrak UTM</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Surat Tawaran Kontrak"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Sijil Tifoid</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                                            <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Sijil Tifoid"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Tamat: Maklumat Majikan -->

                <!-- Mula: Kelulusan -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsePengesahan">
                            Kelulusan
                        </div>
                    </div>
                    <div id="collapsePengesahan" class="collapse" data-parent="#accordionPermit">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Status</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="Pengesahan">&nbsp;Diluluskan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="Pengesahan">&nbsp;Tidak Diluluskan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tamat: Kelulusan -->

            </div>
            <!-- Tamat: Accordion Kelulusan Permit -->
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Pemohon -->

<!-- Mula: Butang Preview/Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('permitToWorkUrusetia.permohonanPermit') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('permitToWorkUrusetia.permohonanPermit') }}'"
                    class="btn btn-danger font-weight-bold"> Batal
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Mula: Butang Preview/Simpan/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection