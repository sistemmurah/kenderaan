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
                        Pengesahan Permit
                    </h3>
                </div>
            </div>

            <!-- Mula: Accordion Pengesahan Permit -->
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
                                        value="MAZWAN HISHAMMUDDIN BIN SHAMSUDIN" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Kad Pengenalan / Pasport</label>
                                        <input id="noKP" type="tel" class="form-control" disabled="disabled"
                                        value="371202106973" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Telefon Bimbit</label>
                                        <input id="noTel" type="text" class="form-control" disabled="disabled"
                                        value="+6010-00230185" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tarikh Lahir</label>
                                        <input id="tarikhLahir" type="email" class="form-control" disabled="disabled"
                                        value="02/12/1937" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tarikh Tamat Pasport (bukan warganegara)<span class="text-danger">*</span></label>
                                        <input id="tarikhTamatPasport" type="text" class="form-control" disabled="disabled" 
                                        value="-" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tarikh Tamat Permit (bukan warganegara)</label>
                                        <input id="tarikhTamatPasport" type="text" class="form-control" disabled="disabled" 
                                        value="-" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nombor Pendaftaran Kenderaan</label>
                                        <input id="noPlat" type="text" class="form-control" disabled="disabled"
                                        value="BBV 9745" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kenderaan</label>
                                        <input id="jenisKenderaan" type="text" class="form-control" disabled="disabled"
                                        value="EXCAVATOR" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jawatan</label>
                                        <input id="Jawatan" type="text" class="form-control" disabled="disabled"
                                        value="PENYELIA PROJEK" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tugas</label>
                                        <input id="Tugas" type="text" class="form-control" disabled="disabled"
                                        value="MENYELIA SITE WORKER DAN MEMANTAU JADUAL PROJEK" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Lokasi Bertugas di UTM</label>
                                        <input id="lokasiDiUTM" type="text" class="form-control" disabled="disabled"
                                        value="TINGKAT 17 MENARA RAZAK" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempoh Bertugas : Dari Tarikh</label>
                                        <input id="tarikhMulaTugas" type="text" class="form-control" disabled="disabled" 
                                        value="01/01/2021" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hingga</label>
                                        <input id="tarikhTamatTugas" type="text" class="form-control" disabled="disabled"
                                        value="31/12/2021" />
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
                                        value="Facundo Pallestri Vision Sdn. Bhd." />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Tel. Pejabat</label>
                                        <input id="noPejabatPemohon2" type="text" class="form-control" disabled="disabled"
                                        value="+603-55573345" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempoh Kontrak Syarikat dan UTM : Dari Tarikh</label>
                                        <input id="tarikhMulaKontrak" type="text" class="form-control" disabled="disabled"
                                        value="01/01/2021" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hingga</label>
                                        <input id="tarikhTamatKontrak" type="text" class="form-control" disabled="disabled"
                                            value="31/01/2022" />
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

                <!-- Mula: Pengesahan -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsePengesahan">
                            Pengesahan
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
                                            <label><input type="radio" name="Pengesahan">&nbsp;Disahkan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="Pengesahan">&nbsp;Tidak Disahkan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tamat: Pengesahan -->

            </div>
            <!-- Tamat: Accordion Pengesahan Permit -->
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