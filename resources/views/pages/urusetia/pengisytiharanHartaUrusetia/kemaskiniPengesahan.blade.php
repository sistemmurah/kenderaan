{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha binti Wahi Anuar -->

<!--Mula: Pengakuan Pemohon-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Pengesahan Pemohon
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Tandakan yang berkenaan</label><br>
                            <div class="checkbox-list">
                                <label class="checkbox">
                                    <input type="checkbox" name="isytiharKaliPertama" disabled="disabled" />
                                    <span></span>
                                    Tiada harta yang diisytiharkan (Bagi Pengisytiharan Harta Kali Pertama)
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="isytiharSemula" disabled="disabled" />
                                    <span></span>
                                    Tiada sebarang perubahan maklumat (Bagi Pengisytiharan Harta Semula).<br>
                                    Saya dengan ini mengisytiharkan semua harta yang saya miliki serta tangungan dan
                                    segala maklumat yang diberikan adalah benar dan tidak bercanggah dengan mana-mana
                                    peraturan.
                                </label>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Pengakuan Pemohon -->

<!--Mula: Pengesahan PSM PTJ -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Pengesahan PSM Fakulti/Jabatan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh</label>
                            <input id="namaPegawaiPSM" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPegawaiPSM" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI PSM" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pengesahan</label>
                            <input id="tarikhPengesahanPSM" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanPSM">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DIKLARIFIKASI</option>
                                <option value="3">TIDAK DIKLARIFIKASI</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanPSM">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Diklarifikasi"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Pengesahan PSM PTJ -->

<!--Mula: Pengesahan dekan/pengarah -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Pengesahan Dekan/Pengarah
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh</label>
                            <input id="namaDekan" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanDekan" type="text" class="form-control" disabled="disabled"
                                value="DEKAN" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pengesahan</label>
                            <input id="tarikhPengesahanDekan" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanDekan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DiSYORKAN</option>
                                <option value="3">TIDAK DISYORKAN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanDekan">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Disyorkan"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Pengesahan dekan/pengarah -->

<!--Mula: Pengesahan urusetia -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Pengesahan Urusetia Pengisytiharan Harta
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disemak Oleh</label>
                            <input id="namaUrusetia" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanUrursetia" type="text" class="form-control" disabled="disabled"
                                value="URUSETIA PENGISYTIHARAN HARTA" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Semakan</label>
                            <input id="tarikhSemakanUrusetia" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanUrusetia">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DISEMAK</option>
                                <option value="3">DIKEMBALIKAN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanUrusetia">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Dikembalikan"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Pengesahan urusetia -->

<!--Mula: Pengesahan Pegawai urusetia -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Pengesahan Pegawai Urusetia Pengisytiharan Harta
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh</label>
                            <input id="namaPegawaiUrusetia" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPegawaiUrursetia" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI URUSETIA PENGISYTIHARAN HARTA" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pengesahan</label>
                            <input id="tarikhPengesahanPegawaiUrusetia" class="form-control" type="date"
                                disabled="disabled" value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanPegawaiUrusetia">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DISAHKAN</option>
                                <option value="3">TIDAK DISAHKAN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanPegawaiUrusetia">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Disahkan"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Pengesahan Pegawai urusetia -->

<!--Mula: Perakuan Jawatankuasa Tatatertib -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Perakuan Mesyuarat Jawatankuasa Tatatertib
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Diluluskan Oleh</label>
                            <input id="namaJawatanKuasa" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanJawatanKuasa" type="text" class="form-control" disabled="disabled"
                                value="JAWATANKUASA TATATERTIB" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Mesyuarat</label>
                            <input id="tarikhMesyuaratJawatanKuasa" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kelulusan</label>
                            <input id="tarikhKelulusanJawatanKuasa" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanJawatanKuasa">
                                <option valuue="1">Sila Pilih</option>
                                <option value="2">LULUS</option>
                                <option value="3">TIDAK LULUS</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanJawatanKuasa">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Lulus"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Pengesahan urusetia -->

<!-- Mula: Butang Simpan/Hantar/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.tanggungan.maklumatTanggungan') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pemohonPengisytiharan') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Hantar/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Function to show/hide section catatan PSM -->
<script>
    $('#catatanPSM').hide();

    $("#pengesahanPSM").change(function () {
        if ($(this).val() == 3) {
            $('#catatanPSM').show();
        } else {
            $('#catatanPSM').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Dekan -->
<script>
    $('#catatanDekan').hide();

    $("#pengesahanDekan").change(function () {
        if ($(this).val() == 3) {
            $('#catatanDekan').show();
        } else {
            $('#catatanDekan').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Urusetia -->
<script>
    $('#catatanUrusetia').hide();

    $("#pengesahanUrusetia").change(function () {
        if ($(this).val() == 3) {
            $('#catatanUrusetia').show();
        } else {
            $('#catatanUrusetia').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Pegawai Urusetia -->
<script>
    $('#catatanPegawaiUrusetia').hide();

    $("#pengesahanPegawaiUrusetia").change(function () {
        if ($(this).val() == 3) {
            $('#catatanPegawaiUrusetia').show();
        } else {
            $('#catatanPegawaiUrusetia').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Urusetia -->
<script>
    $('#catatanJawatanKuasa').hide();

    $("#pengesahanJawatanKuasa").change(function () {
        if ($(this).val() == 3) {
            $('#catatanJawatanKuasa').show();
        } else {
            $('#catatanJawatanKuasa').hide();
        }
    });
</script>

@endsection