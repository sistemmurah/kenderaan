{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah Binti Ahmad -->

<!--Mula: Maklumat Temujanji -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklumat Temujanji
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Temujanji<span class="text-danger">*</span></label>
                            <input class="form-control" type="date"
                                value="{{ now()->toString('Y-m-d') }}" id="tarikhTemujanji" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Waktu Mula<span class="text-danger">*</span></label>
                            <input class="form-control" type="time" value="00:00:00" id="waktuMula" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Waktu Tamat<span class="text-danger">*</span></label>
                            <input class="form-control" type="time" value="00:00:00" id="waktuTamat" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Lokasi<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="lokasi" rows="2"
                                placeholder="Nyatakan Lokasi"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kaedah<span class="text-danger">*</span></label>
                            <select class="form-control" id="kaedah">
                                <option>Sila Pilih</option>
                                <option>BERSEMUKA</option>
                                <option>ATAS TALIAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kategori Kes<span class="text-danger">*</span></label>
                            <select class="form-control" id="jenisRawatan">
                                <option>FIZ - KESIHATAN FIZIKAL</Kbd></option>
                                <option>KEW - KEWANGAN DAN KEHIDUPAN</option>
                                <option>SOS - SOSIAL DAN HIBURAN</option>
                                <option>SEX - PERKAHWINAN DAN SEKS</option>
                                <option>SPSI - PERHUBUNGAN SOSIAL PSIKOLOGIKAL</option>
                                <option>PSI - MASLAH PSIKOLOGIKAL</option>
                                <option>MOR - MASALAH MORAL DAN AGAMA</option>
                                <option>KEL - KELUARGA DAN RUMAHTANGGA</option>
                                <option>PER - PEKERJAAN</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Temujanji -->

<!--Mula: Maklumat Laporan Sesi Kaunseling -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklumat Laporan Sesi Kaunseling
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Latar Belakang<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="latarBelaknag" rows="2"
                                placeholder="Nyatakan Latar Belakang Kes"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Perbincangan Sesi Dan Diagnosis<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="diagnosis" rows="3"
                                placeholder="Tulis Perbincangan Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Pelan Perancangan Kaunseling<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="perancangan" rows="3"
                                placeholder="Tulis Pelan Perancangan Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Rumusan<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="rumusan" rows="2"
                                placeholder="Tulis Rumusan Disini"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Cadangan<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="cadangan" rows="2"
                                placeholder="Tulis Catatan Disini"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="radio-list">
                                <label class="radio" id="sesiSelesai">
                                    <input type="radio" name="radios" />
                                    <span></span>
                                    Sesi Selesai
                                </label>
                                <label class="radio" id="kaunselingRujukan">
                                    <input type="radio" name="radios" />
                                    <span></span>
                                    Perlu Majukan Kepada Kaunselor Untuk Kes Kaunseling Rujukan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Laporan Sesi Kaunseling -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">

                <button onclick="window.location = '{{ route('kaunselingKaunselor.kemaskiniKlien') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('kaunselingKaunselor.kemaskiniKlien') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection