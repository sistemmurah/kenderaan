{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Nurul Natasha Binti Wahi Anuar -->

<!-- Mula: Maklumat Permohonan-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Permohonan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jenis Permohonan<span class="text-danger">*</span></label>
                            <select class="form-control" id="jenisPermohonan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">BORANG A-URUSAN RASMI</option>
                                <option value="3">BORANG C-PERSENDIRIAN</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mula: Maklumat Permohonan -->

<!--Mula: Maklumat Pemohon -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Pemohon
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja</label>
                            <input id="noPekerjaPemohon" type="number" class="form-control" disabled="disabled"
                                value="7332" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Warganegara</label>
                            <input id="warganegaraPemohon" type="text" class="form-control" disabled="disabled"
                                value="MYS-MALAYSIA" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Kad Pengenalan</label>
                            <input id="noKPPemohon" type="number" class="form-control" disabled="disabled"
                                value="750626015432" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan</label>
                            <input id="jabatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian</label>
                            <input id="bahagianPemohon" type="text" class="form-control" disabled="disabled"
                                value="BAHAGIAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Emel Rasmi</label>
                            <input id="emelPemohon" type="email" class="form-control" disabled="disabled"
                                value="aminah@utm.my" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Tel Pejabat</label>
                            <input id="telPejabatPemohon" type="number" class="form-control" disabled="disabled"
                                value="075533067" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Pemohon -->

<!--Mula: Borang A-Urusan Rasmi -->
<div class="row" id="urusanRasmi">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Borang A-Urusan Rasmi
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <!-- Mula: Accordion -->
                <div class="accordion accordion-light accordion-toggle-arrow" id="borangA">

                    <!-- Mula: Tab Maklumat Perjalanan -->
                    <div class="card" id="maklumatPerjalananA">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse" data-target="#maklumatPerjalanan">
                                Maklumat Perjalanan
                            </div>
                        </div>

                        <div id="maklumatPerjalanan" class="collapse show" data-parent="#borangA">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No.Rujukan</label>
                                            <input id="noRujukanA" type="text" class="form-control" disabled="disabled"
                                                value="J2021A0001" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tarikh Permohonan<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date"
                                                value="{{ now()->toString('Y-m-d') }}"
                                                id="tarikhPermohonanA" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Lawatan<span class="text-danger">*</span></label>
                                            <select class="form-control" id="jenisLawatanA">
                                                <option value="1">Sila Pilih</option>
                                                <option value="2">SEMINAR</option>
                                                <option value="3">PERSIDANGAN</option>
                                                <option value="4">LATIHAN</option>
                                                <option value="5">BENGKEL</option>
                                                <option value="6">MESYUARAT</option>
                                                <option value="7">LAWATAN RASMI</option>
                                                <option value="8">MOU/MOA/JARINGAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kategori Penglibatan</label>
                                            <input id="kategoriPenglibatanA" type="text" class="form-control"
                                                placeholder="Kategori Penglibatan" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NEGARA<span class="text-danger">*</span></label>
                                            <select class="form-control" id="negaraPerjalananA">
                                                <option>Sila Pilih</option>
                                                <option>MALAYSIA</option>
                                                <option>SINGAPURA</option>
                                                <option>INDONESIA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lawatan<span class="text-danger">*</span></label>
                                            <input id="tempatLawatanA" type="text" class="form-control"
                                                placeholder="Tempat Lawatan" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tarikh Mula<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" value=""
                                                id="tarikhMulaPerjalananA" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tarikh Tamat<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" value=""
                                                id="tarikhTamatPerjalananA" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bilangan Hari<span class="text-danger">*</span></label>
                                            <input class="form-control" type="number" value="" id="bilanganHariA" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Perjalanan -->

                    <!-- Mula: Tab Maklumat Program -->
                    <div class="card" id="maklumatProgramA">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse" data-target="#maklumatProgram">
                                Maklumat Program
                            </div>
                        </div>

                        <div id="maklumatProgram" class="collapse show" data-parent="#borangA">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <label>Kekerapan Persidangan/Lawatan/Seminar<span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="0"
                                                    id="kekerapan" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Kali</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nama Program<span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="namaProgram" rows="2"
                                                placeholder="Sila Nyatakan Disini"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tujuan Program<span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="tujuanProgram" rows="3"
                                                placeholder="Sila Nyatakan Disini"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Faedah Kepada Negara<span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="tujuanProgram" rows="3"
                                                placeholder="Sila Nyatakan Disini"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Kelulusan Kementerian Dalam Negeri dan Kementerian
                                                Luar</label><small>(Jika Persidangan, Seminar dan Lawatan rasmi diadakan
                                                di negara Israel)</small>
                                            <textarea class="form-control" id="tujuanProgram" rows="3"
                                                placeholder="Sila Nyatakan Disini"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Program -->

                    <!-- Mula: Tab Maklumat Peserta -->
                    <div class="card" id="maklumatPesertaA">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse" data-target="#maklumatPeserta">
                                Maklumat Peserta
                            </div>
                        </div>

                        <div id="maklumatPeserta" class="collapse show" data-parent="#borangA">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bilangan Peserta<span class="text-danger">*</span></label>
                                            <input id="bilanganPeserta" type="number" class="form-control"
                                                placeholder="0" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ketua</label><small>(Jika Bilangan Peserta Melebihi
                                                Seorang)</small>
                                            <input id="namaKetua" type="text" class="form-control"
                                                placeholder="Nama Ketua" />
                                        </div>
                                    </div>
                                </div><br>

                                <!--begin: Datatable-->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_peserta">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Nama Peserta </th>
                                            <th title="Field #3">Jawatan/ Pangkat</th>
                                            <th title="Field #4">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ZUBAIDAH BINTI HARUN</td>
                                            <td>POST DOCTORAL</td>
                                            <td class="text-right p-0">
                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger">
                                                    <i class="far fa-trash-alt" data-toggle="tooltip"
                                                        data-placement="top" title="Tooltip"> </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="namaPeserta" type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="jawatanPangkat" type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td class="text-right p-0">
                                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                                    id="tambahPeserta">
                                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                                <br><br>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label>Sebutkan samada pegawai Kedutaan Malaysia di negeri tempat seminar /
                                                persidangan / lawatan rasmi diadakan akan menyertai persidangan
                                                itu.<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="kedutaanA">
                                                    <option value="1">Sila Pilih</option>
                                                    <option value="2">YA</option>
                                                    <option value="3">TIDAK</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="alasanKedutaanA">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Alasan Pegawai Diperlukan<span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="3"
                                                placeholder="Sila Nyatakan Mengapa Kehadiran Pegawai Tersebut Diperlukan."></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Peserta -->

                    <!-- Mula: Tab Maklumat Perbelanjaan -->
                    <div class="card" id="maklumatPerbelanjaanA">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse" data-target="#maklumatPerbelanjaan">
                                Maklumat Perbelanjaan
                            </div>
                        </div>

                        <div id="maklumatPerbelanjaan" class="collapse show" data-parent="#borangA">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6" id="perbelanjaanOlehA">
                                        <div class="form-group">
                                            <label>Perbelanjaan Oleh<span class="text-danger">*</span></label>
                                            <select class="form-control">
                                                <option>Sila Pilih</option>
                                                <option>GERAN PENEYLIDIKAN RMC</option>
                                                <option>UTM</option>
                                                <option>PENGAJUR</option>
                                                <option>SENDIRIL</option>
                                                <option>UTM & PENGANJUR</option>
                                                <option>UTM & SENDIRI</option>
                                                <option>PENGANJUR & SENDIRI</option>
                                                <option>LAIN-LAIN</option>
                                                <option>GERAN PENYELIDIKAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jumlah Perbelanjaan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">RM</span></div>
                                                <input id="jumlahPerbelanjaanA" type="text" class="form-control"
                                                    placeholder="0.00" />
                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                <!--begin: Datatable-->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_perbelanjaan">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Jenis Perbelanjaan</th>
                                            <th title="Field #3">Sumber Perbelanjaan</th>
                                            <th title="Field #4">Jumlah Permohonan (RM)</th>
                                            <th title="Field #5">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TAMBANG PENERBANGAN</td>
                                            <td>SENDIRI</td>
                                            <td>2000.00</td>
                                            <td class="text-right p-0">
                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger">
                                                    <i class="far fa-trash-alt" data-toggle="tooltip"
                                                        data-placement="top" title="Tooltip"> </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="jenisPerbelanjaan" type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="sumberPerbelanjaan" type="text" class="form-control" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="jumlahPermohonan" type="number" class="form-control" />
                                                </div>
                                            </td>
                                            <td class="text-right p-0">
                                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                                    id="tambahPerbelanjaaan">
                                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Perbelanjaan -->

                    <!-- Mula: Tab Maklumat Insurans dan Waris -->
                    <div class="card" id="maklumatInsuransWarisA">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse"
                                data-target="#maklumatInsuransWarisA">
                                Maklumat Insurans dan Waris
                            </div>
                        </div>

                        <div id="maklumatInsuransWarisA" class="collapse show" data-parent="#borangA">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6" id="maklumatWarisA">
                                        <div class="form-group">
                                            <label>Maklumat Waris<span class="text-danger">*</span></label>
                                            <select class="form-control">
                                                <option>Sila Pilih</option>
                                                <option>SUAMI: JAILANI BIN ABDULLAH (690102015541)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Sukacita dimaklumkan bahawa Universiti telah meluluskan
                                            pelaksanaan
                                            insurans
                                            perjalanan bagi staf yang menjalankan tugas rasmi di luar negara.
                                            Dengan
                                            pelaksanaan
                                            ini, Universiti akan menyediakan perlindungan insurans kepada semua
                                            staf
                                            yang bertaraf
                                            tetap, kontrak atau sementara (lantikan universiti) yang melakukan
                                            perjalanan ke luar
                                            negara atas tujuan rasmi dan/atau berkursus/menjalani latihan luar
                                            negara
                                            dengan
                                            kelulusan Universiti.
                                        </span>
                                        <br>
                                        <span>
                                            Dengan itu, adakah pihak saudara/saudari bersetuju untuk memilih
                                            perlindungan insurans
                                            yang disediakan oleh UTM bagi permohonan ini?
                                        </span>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="radio-list">
                                                <label class="radio" id="ya">
                                                    <input type="radio" name="radios" />
                                                    <span></span>
                                                    Ya, saya bersetuju untuk memilih perlindungan insuran yang
                                                    disediakan oleh UTM.
                                                </label>
                                                <label class="radio" id="tidak">
                                                    <input type="radio" name="radios" />
                                                    <span></span>
                                                    Tidak, saya tidak bersetuju untuk memilih perlindungan
                                                    insuran
                                                    yang
                                                    disediakan oleh
                                                    UTM.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Insurans dan Waris-->

                </div>
                <!-- Tamat: Accordion -->
            </div>

        </div>
    </div>
</div>
<!--Tamat: Borang A-Urusan Rasmi -->

<!--Mula: Borang C-Persendirian -->
<div class="row" id="persendirian">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Borang C-Persendirian
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <!-- Mula: Accordion -->
                <div class="accordion accordion-light accordion-toggle-arrow" id="borangC">

                    <!-- Mula: Tab Maklumat perjalanan -->
                    <div class="card" id="maklumatPerjalananC">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse" data-target="#maklumatPerjalanan1">
                                Maklumat Perjalanan
                            </div>
                        </div>

                        <div id="maklumatPerjalanan1" class="collapse show" data-parent="#borangC">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No.Rujukan</label>
                                            <input id="noRujukanC" type="text" class="form-control" disabled="disabled"
                                                value="J2021C0001" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tarikh Permohonan<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date"
                                                value="{{ now()->toString('Y-m-d') }}"
                                                id="tarikhPermohonanC" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Lawatan<span class="text-danger">*</span></label>
                                            <select class="form-control" id="jenisLawatanC">
                                                <option value="1">Sila Pilih</option>
                                                <option value="2">SENDIRI</option>
                                                <option value="3">BERKUMPULAN</option>
                                                <option value="4">PENGANJUR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kategori Penglibatan</label>
                                            <input id="kategoriPenglibatanC" type="text" class="form-control"
                                                placeholder="Kategori Penglibatan" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NEGARA<span class="text-danger">*</span></label>
                                            <select class="form-control" id="negaraPerjalananC">
                                                <option>Sila Pilih</option>
                                                <option>MALAYSIA</option>
                                                <option>SINGAPURA</option>
                                                <option>INDONESIA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lawatan<span class="text-danger">*</span></label>
                                            <input id="tempatLawatanC" type="text" class="form-control"
                                                placeholder="Tempat Lawatan" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tarikh Mula<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" value=""
                                                id="tarikhMulaPerjalananC" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tarikh Tamat<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" value=""
                                                id="tarikhTamatPerjalananC" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bilangan Hari<span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" value="" id="bilanganHariC" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jumlah Perbelanjaan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">RM</span></div>
                                                <input id="jumlahPerbelanjaanC" type="text" class="form-control"
                                                    placeholder="0.00" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kelulusan Cuti<span class="text-danger">*</span></label>
                                            <select class="form-control" id="kelulusanCutiC">
                                                <option value="1">Sila Pilih</option>
                                                <option value="2">CUTI REHAT</option>
                                                <option value="3">CUTI TANPA GAJI</option>
                                                <option value="4">CUTI BEREKOD</option>
                                                <option value="5">LAIN-LAIN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" id="lainCutiC">
                                        <div class="form-group">
                                            <label>Lain-lain<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Sila Nyatakan" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6" id="perbelanjaanOlehC">
                                        <div class="form-group">
                                            <label>Perbelanjaan Oleh<span class="text-danger">*</span></label>
                                            <select class="form-control">
                                                <option>Sila Pilih</option>
                                                <option>SENDIRI</option>
                                                <option>PENGANJUR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat perjalanan -->

                    <!-- Mula: Tab Maklumat Penganjur -->
                    <div class="card" id="maklumatPenganjurC">
                        <div class="card-header">
                            <div class="card-title collapse" data-toggle="collapse" data-target="#maklumatPenganjur">
                                Maklumat Penganjur
                            </div>
                        </div>

                        <div id="maklumatPenganjur" class="collapse show" data-parent="#borangC">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama<span class="text-danger">*</span></label>
                                            <input id="namaPenganjur" type="text" class="form-control"
                                                placeholder="Nama Penganjur" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No.Tel Penganjur<span class="text-danger">*</span></label>
                                            <input id="NoTelPenganjur" type="tel" class="form-control"
                                                placeholder="0342415237" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Alamat<span class="text-danger">*</span></label>
                                            <input id="alamatPenganjur1" type="text" class="form-control"
                                                placeholder="NO.24 JALAN KEMBOJA" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input id="alamatPenganjur2" type="text" class="form-control"
                                                placeholder="KAMPUNG TASIK PERMAISURI" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Poskod<span class="text-danger">*</span></label>
                                            <input id="poskodPenganjur" type="number" class="form-control"
                                                placeholder="81310" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bandar<span class="text-danger">*</span></label>
                                            <input id="bandarPengajur" type="text" class="form-control"
                                                placeholder="JOHOR BAHRU" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>
                                                Negeri<span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="negeriPenganjur">
                                                <option>Sila Pilih</option>
                                                <option>JOHOR</option>
                                                <option>KUALA LUMPUR</option>
                                                <option>SELANGOR</option>
                                                <option>MELAKA</option>
                                                <option>NEGERI SEMBILAN</option>
                                                <option>PAHANG</option>
                                                <option>PERAK</option>
                                                <option>KEDAH</option>
                                                <option>PERLIS</option>
                                                <option>PULAU PINANG</option>
                                                <option>KELANTAN</option>
                                                <option>TERENGGANU</option>
                                                <option>SABAH</option>
                                                <option>SARAWAK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>
                                                Negara<span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="negaraPenganjur">
                                                <option>MALAYSIA</option>
                                                <option>SINGAPURA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Perjalanan -->

                </div>
                <!-- Tamat: Accordion -->
            </div>

        </div>
    </div>
</div>
<!--Tamat: Borang C-Persendirian -->

<!-- Start Lampiran-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Lampiran
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <!--begin: Datatable-->
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_lampiran">
                    <thead style="background-color:#fcf4a3">
                        <tr>
                            <th title="Field #1">Bil</th>
                            <th title="Field #2">Nama Fail </th>
                            <th title="Field #3">Fail</th>
                            <th title="Field #4">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kelulusan Cuti</td>
                            <td>Kelulusan Cuti.pdf</td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-light-primary" id="lihatLampiran">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="hapusLampiran">
                                    <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip"> </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-primary" id="uploadFile">
                                    <i class="fas fa-upload" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                    id="tambahLampiran">
                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
</div>
<!-- End Lampiran -->

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
                <button onclick="window.location = '{{ route('eBoardingStaf.senaraiEBoarding') }}'"
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
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- Mula: Function for datatable Lampiran-->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_lampiran').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },
                columns: [{
                        field: 'Bil',
                        textAlign: 'center',
                        width: 50,
                        autoHide: false,
                    },
                    {
                        field: 'Nama Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                    },
                ],
            });
        };
        return {
            // Public functions
            init: function () {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo.init();
    });
</script>
<!-- Tamat: Function for datatable Lampiran-->

<!-- Mula: Function for datatable Maklumat Peserta-->
<script>
    var KTDatatableHtmlTableDemoA = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_peserta').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },
                columns: [{
                        field: 'Bil',
                        textAlign: 'center',
                        width: 50,
                        autoHide: false,
                    },
                    {
                        field: 'Nama Peserta',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jawatan/Pangkat',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                    },
                ],
            });
        };
        return {
            // Public functions
            init: function () {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemoA.init();
    });
</script>
<!-- Tamat: Function for datatable Maklumat Peserta-->

<!-- Mula: Function for datatable Maklumat Perbelanjaan-->
<script>
    var KTDatatableHtmlTableDemoB = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_perbelanjaan').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },
                columns: [{
                        field: 'Bil',
                        textAlign: 'center',
                        width: 50,
                        autoHide: false,
                    },
                    {
                        field: 'Jenis Perbelanjaan',
                        width: 200,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Sumber Perbelanjaan',
                        width: 150,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Permohonan (RM)',
                        width: 150,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                    },
                ],
            });
        };
        return {
            // Public functions
            init: function () {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemoB.init();
    });
</script>
<!-- Tamat: Function for datatable Maklumat Perbelanjaan-->

<!-- script hide & show-->
<script>
    $('#lainCutiC').hide();
    $('#perbelanjaanOlehC').hide();
    $('#maklumatPenganjurC').hide();
    $('#urusanRasmi').hide();
    $('#persendirian').hide();

    $('#jenisPermohonan').change(function () {
        if ($(this).val() == 1) {
            $('#urusanRasmi').hide();
            $('#persendirian').hide();
        } else if ($(this).val() == 2) {
            $('#urusanRasmi').show();
            $('#persendirian').hide();
        } else if ($(this).val() == 3) {
            $('#urusanRasmi').hide();
            $('#persendirian').show();
        } else {
            $('#urusanRasmi').hide();
            $('#persendirian').hide();
        }
    });

    $('#kelulusanCutiC').change(function () {
        if ($(this).val() == 5) {
            $('#lainCutiC').show();
        } else {
            $('#lainCutiC').hide();
        }
    });

    $('#jenisLawatanC').change(function () {
        if ($(this).val() == 4) {
            $('#perbelanjaanOlehC').show();
            $('#maklumatPenganjurC').show();
        } else {
            $('#perbelanjaanOlehC').hide();
            $('#maklumatPenganjurC').hide();
        }
    });
</script>

<!-- Function to show/hide section alasan Kedutaan -->
<script>
    $('#alasanKedutaanA').hide();

    $("#kedutaanA").change(function () {
        if ($(this).val() == 2) {
            $('#alasanKedutaanA').show();
        } else {
            $('#alasanKedutaanA').hide();
        }
    });
</script>

@endsection