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
                        Maklumat Pemohon
                    </h3>
                </div>
            </div>

            <!-- Mula: Accordion Jawatan Hakiki & Jawatan Giliran -->
            <div class="accordion accordion-toggle-arrow" id="accordionJawatan">
                <!-- Mula: Jawatan Hakiki -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title" data-toggle="collapse" data-target="#collapseHakiki">
                            Jawatan Hakiki
                        </div>
                    </div>

                    <div id="collapseHakiki" class="collapse show" data-parent="#accordionJawatan">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gelaran</label>
                                        <input id="gelaranPemohon" type="text" class="form-control" disabled="disabled" 
                                        value="AR" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Tel. Pejabat</label>
                                        <input id="noPejabatPemohon" type="tel" class="form-control" disabled="disabled" 
                                        value="-" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                                            value="NORASLINDA BINTI ABDUL RAHMAN" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Tel. Peribadi</label>
                                        <input id="noPeribadiPemohon" type="tel" class="form-control" disabled="disabled"
                                            value="012-6407306" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jawatan</label>
                                        <input id="jawatanPemohon" type="text" class="form-control" disabled="disabled"
                                            value="PENSYARAH KANAN" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Emel</label>
                                        <input id="emelPemohon" type="email" class="form-control" disabled="disabled"
                                            value="noraslinda.ar@utm.my" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Bidang<span class="text-danger">*</span></label>
                                        <input id="bidangPemohon" type="text" class="form-control" disabled="disabled" 
                                        value="TEKNOLOGI MAKLUMAT" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Laman Web</label>
                                        <input id="websitePemohon" type="text" class="form-control" disabled="disabled" 
                                        value="-" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Kelayakan Akademik</label>
                                        <input id="akademikPemohon" type="text" class="form-control" disabled="disabled"
                                            value="M. SC. TOURISM PLANNING, UTM, BACHELOR ARCHITECTURE, UTM,DIPLOMA ARCHITECTURE, POLISAS" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input id="alamatPemohon1" type="text" class="form-control" disabled="disabled"
                                            value="SCHOOL OF ARCHITECTURE, FACULTY OF BUILT ENVIRONMENT AND SURVEYING," />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input id="alamatPemohon2" type="text" class="form-control" disabled="disabled"
                                            value="UNIVERSITI TEKNOLOGI MALAYSIA," />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Poskod</label>
                                        <input id="poskodPemohon" type="text" class="form-control" disabled="disabled" 
                                        value="81310" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Bandar</label>
                                        <input id="bandarPemohon" type="text" class="form-control" disabled="disabled"
                                            value="UTM Johor Bahru" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Negeri</label>
                                        <input id="negeriPemohon" ype="text" class="form-control" disabled="disabled" 
                                        value="Johor" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tamat: Jawatan Hakiki -->

                <!-- Mula: Jawatan Giliran -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseGiliran">
                            Jawatan Giliran
                        </div>
                    </div>
                    <div id="collapseGiliran" class="collapse" data-parent="#accordionJawatan">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gelaran</label>
                                        <input id="gelaranPemohon2" type="text" class="form-control" disabled="disabled" 
                                        value="AR" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Tel. Pejabat</label>
                                        <input id="noPejabatPemohon2" type="text" class="form-control" disabled="disabled"
                                            value="07-5557345" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                                            value="NORASLINDA BINTI ABDUL RAHMAN" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No. Tel. Peribadi</label>
                                        <input id="noPeribadiPemohon" type="text" class="form-control" disabled="disabled"
                                            value="012-6407306" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jawatan</label>
                                        <input id="jawatanPemohon2" type="text" class="form-control" disabled="disabled" 
                                        value="PEGARAH" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Emel</label>
                                        <input id="emelPemohon2" type="email" class="form-control" disabled="disabled"
                                            value="noraslinda.ar@utm.my" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Bidang<span class="text-danger">*</span></label>
                                        <input id="bidangPemohon2" type="text" class="form-control" disabled="disabled"
                                        value="TEKNOLOGI MAKLUMAT" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Laman Web</label>
                                        <input id="websitePemohon2" type="text" class="form-control" disabled="disabled" value="-" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Kelayakan Akademik</label>
                                        <input id="akademikPemohon" type="text" class="form-control" disabled="disabled"
                                            value="M. SC. TOURISM PLANNING, UTM, BACHELOR ARCHITECTURE, UTM,DIPLOMA ARCHITECTURE, POLISAS" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input id="alamatPemohon3" type="text" class="form-control" disabled="disabled"
                                            value="SCHOOL OF ARCHITECTURE, FACULTY OF BUILT ENVIRONMENT AND SURVEYING," />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input id="alamatPemohon4" type="text" class="form-control" disabled="disabled"
                                            value="UNIVERSITI TEKNOLOGI MALAYSIA," />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Poskod</label>
                                        <input id="poskodPemohon2" type="text" class="form-control" disabled="disabled" 
                                        value="81310" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Bandar</label>
                                        <input id="bandarPemohon2" type="text" class="form-control" disabled="disabled"
                                            value="UTM Johor Bahru" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Negeri</label>
                                        <input id="negeriPemohon2" type="text" class="form-control" disabled="disabled" 
                                        value="Johor" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tamat: Jawatan Giliran -->
            </div>
            <!-- Tamat: Accordion Jawatan Hakiki & Jawatan Giliran -->
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Pemohon -->

<!-- Mula: Maklumat Kad Nama -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Maklumat Kad Nama
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Paparan Kad</label>
                            <select class="form-control" id="paparanKad" disabled="disabled">
                                <option>HADAPAN</option>
                                <option>BELAKANG</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bilangan Dipohon<span class="text-danger">*</span></label>
                            <select class="form-control" id="bilanganDipohon" disabled="disabled">
                                <option>1 KOTAK</option>
                                <option>2 KOTAK</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Diperlukan<span
                                        class="text-danger">*</span></label>
                            <input class="form-control" id="tarikhDiperlukan" type="date" disabled="disabled"
                            value="2021-02-20"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Kad Nama -->

<!-- Mula: Pengesahan PSM PTJ -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Pengesahan PSM PTJ
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Terima</label>
                            <input id="tarikhTerimaPSM" class="form-control" type="date" disabled="disabled"
                                value="2021-01-19" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kemaskini</label>
                            <input id="tarikhKemaskiniPSM" class="form-control" type="date" disabled="disabled"
                                value="2021-01-19" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disemak Oleh<span class="text-danger">*</span></label>
                            <input id="namaPegawaiPSM" type="text" class="form-control" 
                            placeholder="Nama Pegawai PSM" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Status<span class="text-danger">*</span></b></label>
                            <select class="form-control" id="pengesahanPSM">
                                <option>Sila Pilih</option>
                                <option>SAH</option>
                                <option>TIDAK SAH</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea"><b>Catatan<span class="text-danger">*</span></b></label>
                            <textarea id="catatanPSM" class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Sah"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pengesahan PSM PTJ -->

<!-- Mula: Kelulusan Pegawai BPO -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Kelulusan Pegawai BPO
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Terima</label>
                            <input id="tarikhTerimaBPO" class="form-control" type="date" disabled="disabled"
                                value="2021-01-19" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kemaskini</label>
                            <input id="tarikhKemaskiniBPO" class="form-control" type="date" disabled="disabled"
                                value="2021-01-19" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disemak Oleh<span class="text-danger">*</span></label>
                            <input id="namaPegawaiBPO" type="text" class="form-control" 
                            placeholder="Nama Pegawai BPO" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="kelulusanBPO">
                                <option>Sila Pilih</option>
                                <option>LULUS</option>
                                <option>TIDAK LULUS</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Catatan<span class="text-danger">*</span></label>
                            <textarea id="catatanBPO" class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Lulus"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Kelulusan Pegawai BPO -->

<!-- Mula: Butang Preview/Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button class="btn btn-warning font-weight-bold"> Preview
                </button>
                <button onclick="window.location = '{{ route('kadNamaUrusetia.pemohonKadNama') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('kadNamaUrusetia.pemohonKadNama') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
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