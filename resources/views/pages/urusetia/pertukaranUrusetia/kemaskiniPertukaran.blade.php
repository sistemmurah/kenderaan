{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared By: Siti Nurul Aqilah Binti Ahmad -->

<!-- Mula: Card Maklumat Peribadi -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom card-collapsed" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Maklumat Peribadi
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja</label>
                            <input id="noPekerja" type="text" class="form-control" disabled="disabled" value="7332" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="nama" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Umur</label>
                            <input id="umur" type="text" class="form-control" disabled="disabled" value="41 TAHUN" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gred Jawatan</label>
                            <input id="gredJawatan" type="text" class="form-control" disabled="disabled" value="F41" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatan" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>PTJ / Fakulti</label>
                            <input id="ptj" type="text" class="form-control" disabled="disabled"
                                value="PUSAT PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian / Sekolah</label>
                            <input id="bahagian" type="text" class="form-control" disabled="disabled"
                                value="PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Unit</label>
                            <input id="unit" type="text" class="form-control" disabled="disabled"
                                value="PEMBANGUNAN APLIKASI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Agama</label>
                            <input id="agama" type="text" class="form-control" disabled="disabled" value="ISLAM" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status Perkahwinan</label>
                            <input id="statusPerkahwinan" type="text" class="form-control" disabled="disabled"
                                value="BERKAHWIN" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Card Maklumat Peribadi -->

<!-- Mula: Card Maklumat Perkhidmatan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom card-collapsed" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-briefcase"></i>
                        Maklumat Perkhidmatan
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Masuk UTM<span class="text-danger">*</span></label>
                            <input id="tkhMasuk" type="date" class="form-control" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Sah Jawatan<span class="text-danger">*</span></label>
                            <input id="tkhSahJwtn" type="date" class="form-control" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Lantikan Terkini<span class="text-danger">*</span></label>
                            <input id="tkhLantikanTerkini" type="date" class="form-control" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Taraf Jawatan<span class="text-danger">*</span></label>
                            <input id="tarafJwtn" type="text" class="form-control" disabled="disabled"
                                value="Taraf Jawatan" />
                        </div>
                    </div>
                </div>
                <!-- Mula: Accordion -->
                <div class="accordion accordion-light accordion-toggle-arrow" id="perkhidmatan">
                    <!-- Mula: Senarai Anugerah -->
                    
                    <!-- Tamat: Senarai Anugerah -->

                    <!-- Mula: Prestasi Kehadiran -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#kehadiran">
                                Prestasi Kehadiran
                            </div>
                        </div>

                        <div id="kehadiran" class="collapse" data-parent="#perkhidmatan">
                            <div class="card-body">
                                <!-- Mula: Datatable Prestasi Kehadiran -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_kehadiran">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Tahun</th>
                                            <th title="Field #3">Kehadiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2021</td>
                                            <td>PENUH</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2020</td>
                                            <td>PENUH</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2019</td>
                                            <td>PENUH</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Prestasi Kehadiran -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Prestasi Kehadiran -->

                    <!-- Mula: Prestasi LNPT -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#lnpt">
                                Prestasi LNPT
                            </div>
                        </div>

                        <div id="lnpt" class="collapse" data-parent="#perkhidmatan">
                            <div class="card-body">
                                <!-- Mula: Datatable Prestasi LNPT -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_lnpt">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Tahun</th>
                                            <th title="Field #3">LNPT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2021</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2020</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2019</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Prestasi LNPT -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Prestasi LNPT -->

                    <!-- Mula: Sejarah Penempatan -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#penempatan">
                                Sejarah Penempatan
                            </div>
                        </div>

                        <div id="penempatan" class="collapse show" data-parent="#perkhidmatan">
                            <div class="card-body">
                                <!-- Mula: Datatable Sejarah Penempatan -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_penempatan">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">PTJ/Bahagian/Unit</th>
                                            <th title="Field #3">Tempoh Perkhidmatan</th>
                                            <th title="Field #4">Jawatan</th>
                                            <th title="Field #5">Taraf Jawatan</th>
                                            <th title="Field #6">Deskripsi Tugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>UTMDigital</td>
                                            <td>20 TAHUN</td>
                                            <td>PEGAWAI TEKNOLOGI MAKLUMAT</td>
                                            <td></td>
                                            <td>file.pdf</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Sejarah Penempatan -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Sejarah Penempatan -->
                </div>
                <!-- Tamat: Accordion -->

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Card Maklumat Perkhidmatan -->

<!-- Mula: Card Maklumat Ahli Keluarga UTM -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom card-collapsed" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-users"></i>
                        Maklumat Ahli Keluarga
                    </h3>
                    <small> (Yang Masih Berkhidmat Di UTM) </small>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <!-- Mula: search no.pekerja -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari" />
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="search"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tamat: search no.pekerja -->

                <!-- Mula: maklumat staf -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaStaf" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanStaf" type="text" class="form-control" disabled="disabled"
                                value="PENSYARAH" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gred Jawatan</label>
                            <input id="gredJwtnStaf" type="text" class="form-control" disabled="disabled" value="F43" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>PTJ / Fakulti</label>
                            <input id="ptjStaf" type="text" class="form-control" disabled="disabled"
                                value="FAKULTI KEJURUTERAAN" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian / Sekolah</label>
                            <input id="bahagianStaf" type="text" class="form-control" disabled="disabled"
                                value="SEKOLAH KOMPUTERAN" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Unit</label>
                            <input id="unitStaf" type="text" class="form-control" disabled="disabled"
                                value="TEKNOLOGI MAKLUMAT" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Hubungan</label>
                            <input id="hubunganStaf" type="text" class="form-control" disabled="disabled"
                                value="SUAMI" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status Perkahwinan</label>
                            <input id="statusPerkahwinanStaf" type="text" class="form-control" disabled="disabled"
                                value="BERKAHWIN" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Agama</label>
                            <input id="agama" type="text" class="form-control" disabled="disabled" value="ISLAM" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
                <!-- Tamat: maklumat staf -->
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Card Maklumat Ahli Keluarga UTM -->

<!-- Mula: Card Maklumat Pertukaran -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-exchange-alt"></i>
                        Maklumat Pertukaran
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Alasan Pertukaran<span class="text-danger">*</span></label>
                            <select class="form-control" id="alasanPertukaran" disabled="disabled">
                                <!--option value="1">Sila Pilih</option-->
                                <option value="2">TEMPOH PERKHIDMATAN LEBIH 5 TAHUN DI PTJ</option>
                                <option value="3">KELUARGA</option>
                                <option value="4">KESIHATAN</option>
                                <option value="5">TUKAR KMAPUS</option>
                                <option value="6">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainAlasan">
                        <div class="form-group">
                            <label>Lain-lain<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" disabled="disabled" value="Sila Nyatakan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>PTJ Baharu<span class="text-danger">*</span></label>
                            <input id="ptjBaru" type="text" class="form-control" disabled="disabled"
                                value="UTMDIGITAL" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Justifikasi<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="justifikasi" rows="2"
                                disabled="disabled">TEMPOH PERKHIDMATAN LEBIH 5 TAHUN DI PTJ</textarea>
                        </div>
                    </div>
                </div>

                <!-- Mula: Accordion -->
                <div class="accordion accordion-light accordion-toggle-arrow" id="lampiranPertukaran">
                    <!-- Mula: Lampiran -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#lampiran">
                                Lampiran
                            </div>
                        </div>

                        <div id="lampiran" class="collapse show" data-parent="#lampiranPertukaran">
                            <div class="card-body">

                                <!-- Mula: Datatable Lampiran Pertukaran -->
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
                                            <td>Surat Pertukaran</td>
                                            <td>pertukaran.pdf</td>
                                            <td class="text-right p-0">
                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary"
                                                    id="lihatLampiranStaf">
                                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable Lampiran Pertukaran -->
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span><b style="color:red;">Peringatan: </b>Staf perlu memuat naik surat atau
                                            laporan tertentu
                                            sebagai bukti bagi menyokong alasan pertukaran yang dinyatakan.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Lampiran -->
                </div>
                <!-- Tamat: Accordion -->
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Card Maklumat Pertukaran -->

<!-- Mula: Card Pengakuan Pemohon -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-signature"></i>
                        Pengakuan Pemohon
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="checkbox-list">
                                <h6 class="checkbox">
                                    <input type="checkbox" disabled="disabled" checked="checked" name="pengakuan" />
                                    <span></span>
                                    Saya mengaku bahawa maklumat yang diberikan adalah benar dan tepat.
                                    Sekiranya didapati maklumat bercanggah, saya bersetuju bahawa
                                    permohonan ini ditolak.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Card Pengakuan Pemohon -->

<!-- Mula: Pengesahan PSM/PTJ -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Pengesahan PSM/PTJ
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Terima</label>
                            <input id="tarikhTerimaPSM" class="form-control" type="text" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kemaskini</label>
                            <input id="tarikhKemaskiniPSM" class="form-control" type="text" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh<span class="text-danger">*</span></label>
                            <input id="namaPegawaiPSM" type="text" class="form-control"
                                placeholder="Nama Pegawai PSM" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Status<span class="text-danger">*</span></b></label>
                            <select class="form-control" id="pengesahanPSM">
                                <option>Sila Pilih</option>
                                <option value="1">TERIMA</option>
                                <option value="2">TIDAK TERIMA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanPSM">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea"><b>Catatan<span class="text-danger">*</span></b></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Terima"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pengesahan PSM/PTJ -->

<!-- Mula: Pengesahan Ketua Jabatan/Pengerusi -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Pengesahan Ketua Jabatan/Pengerusi
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Terima</label>
                            <input id="tarikhTerimaJabatan" class="form-control" type="text" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kemaskini</label>
                            <input id="tarikhKemaskiniJabatan" class="form-control" type="text" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh<span class="text-danger">*</span></label>
                            <input id="ketuaJabatan" type="text" class="form-control"
                                placeholder="Nama Ketua Jabatan/Pengerusi" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Status<span class="text-danger">*</span></b></label>
                            <select class="form-control" id="pengesahanJabatan">
                                <option>Sila Pilih</option>
                                <option value="1">SOKONG</option>
                                <option value="2">TIDAK SOKONG</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanJabatan">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea"><b>Catatan<span class="text-danger">*</span></b></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Sokong"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pengesahan Ketua Jabatan/Pengerusi -->

<!-- Mula: Kelulusan Dekan/Pengarah -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" data-card="true" id="kt_card_1">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Kelulusan Dekan/Pengarah
                    </h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                        data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Terima</label>
                            <input id="tarikhTerimaDekan" class="form-control" type="text" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kemaskini</label>
                            <input id="tarikhKemaskiniDekan" class="form-control" type="text" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Diluluskan Oleh<span class="text-danger">*</span></label>
                            <input id="namaDekan" type="text" class="form-control" placeholder="Nama Dekan/Pengarah" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Status<span class="text-danger">*</span></b></label>
                            <select class="form-control" id="kelulusanDekan">
                                <option>Sila Pilih</option>
                                <option value="1">LULUS</option>
                                <option value="2">TIDAK LULUS</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanDekan">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea"><b>Catatan<span class="text-danger">*</span></b></label>
                            <textarea class="form-control" rows="2"
                                placeholder="Sila Nyatakan Sebab Tidak Lulus"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Kelulusan Dekan/Pengarah -->

<!-- Mula: Butang Simpan/Hantar/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pertukaranUrusetia.pemohonPertukaran') }}'"
                    class="btn btn-primary"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('pertukaranUrusetia.pemohonPertukaran') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Hantar/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- Mula: script toggle card -->
<script>
    // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
    var card = new KTCard('kt_card_1');

    // Toggle event handlers
    card.on('beforeCollapse', function (card) {
        setTimeout(function () {
            toastr.info('Before collapse event fired!');
        }, 100);
    });

    card.on('afterCollapse', function (card) {
        setTimeout(function () {
            toastr.warning('Before collapse event fired!');
        }, 2000);
    });

    card.on('beforeExpand', function (card) {
        setTimeout(function () {
            toastr.info('Before expand event fired!');
        }, 100);
    });

    card.on('afterExpand', function (card) {
        setTimeout(function () {
            toastr.warning('After expand event fired!');
        }, 2000);
    });

    // Remove event handlers
    card.on('beforeRemove', function (card) {
        toastr.info('Before remove event fired!');

        return confirm('Are you sure to remove this card ?'); // remove card after user confirmation
    });

    card.on('afterRemove', function (card) {
        setTimeout(function () {
            toastr.warning('After remove event fired!');
        }, 2000);
    });

    // Reload event handlers
    card.on('reload', function (card) {
        toastr.info('Leload event fired!');

        KTApp.block(card.getSelf(), {
            overlayColor: '#ffffff',
            type: 'loader',
            state: 'primary',
            opacity: 0.3,
            size: 'lg'
        });

        // update the content here

        setTimeout(function () {
            KTApp.unblock(card.getSelf());
        }, 2000);
    });
</script>
<!-- Tamat: script toggle card -->

<!-- Mula: script datatable anugerah -->
<script>
    var KTDatatableHtmlTableAnugerah = function () {
        var anugerah = function () {
            var datatableAnugerah = $('#kt_datatable_anugerah').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'No Rujukan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        //width: 150,
                    },
                    {
                        field: 'Jenis Anugerah',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        //width: 150,
                    },
                ],
            });
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                anugerah();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableAnugerah.init();
    });
</script>
<!-- Tamat: script datatable anugerah -->

<!-- Mula: script datatable kehadiran -->
<script>
    var KTDatatableHtmlTableKehadiran = function () {
        var kehadiran = function () {
            var datatableKehadiran = $('#kt_datatable_kehadiran').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Tahun',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        //width: 150,
                    },
                    {
                        field: 'Kehadiran',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        //width: 150,
                    },
                ],
            });
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                kehadiran();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableKehadiran.init();
    });
</script>
<!-- Tamat: script datatable kehadiran -->

<!-- Mula: script datatable LNPT -->
<script>
    var KTDatatableHtmlTableLNPT = function () {
        var LNPT = function () {
            var datatableLNPT = $('#kt_datatable_lnpt').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Tahun',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        //width: 150,
                    },
                    {
                        field: 'LNPT',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        //width: 150,
                    },
                ],
            });
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                LNPT();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableLNPT.init();
    });
</script>
<!-- Tamat: script datatable LNPT -->

<!-- Mula: script datatable sejarah Penempatan -->
<script>
    var KTDatatableHtmlTablePenempatan = function () {
        var penempatan = function () {
            var datatablePenempatan = $('#kt_datatable_penempatan').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'PTJ/Bahagian/Unit',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 150,
                    },
                    {
                        field: 'Tempoh Perkhidmatan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 90,
                    },
                    {
                        field: 'Jawatan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 150,
                    },
                    {
                        field: 'Taraf Jawatan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 70,
                    },
                    {
                        field: 'Deskripsi Tugas',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 70,
                    },
                ],
            });
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                penempatan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTablePenempatan.init();
    });
</script>
<!-- Tamat: script datatable sejarah penempatan -->

<!-- script datatable lampiran -->
<script>
    var KTDatatableHtmlTableLampiran = function () {
        var lampiran = function () {
            var datatableLampiran = $('#kt_datatable_lampiran').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Nama Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Fail',
                        width: 200,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],
            });
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                lampiran();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableLampiran.init();
    });
</script>

<!-- script show lain-lain -->
<script>
    $('#lainAlasan').hide();

    $('#alasanPertukaran').change(function () {
        if ($(this).val() == 6) {
            $('#lainAlasan').show();
        } else {
            $('#lainAlasan').hide();
        }
    });
</script>

<!-- script show catatan PSM/PTJ -->
<script>
    $('#catatanPSM').hide();

    $('#pengesahanPSM').change(function () {
        if ($(this).val() == 2) {
            $('#catatanPSM').show();
        } else {
            $('#catatanPSM').hide();
        }
    });
</script>

<!-- script show catatan Jabatan/Pengerusi -->
<script>
    $('#catatanJabatan').hide();

    $('#pengesahanJabatan').change(function () {
        if ($(this).val() == 2) {
            $('#catatanPSM').show();
        } else {
            $('#catatanPSM').hide();
        }
    });
</script>

<!-- script show catatan Dekan/Pengarah -->
<script>
    $('#catatanDekan').hide();

    $('#kelulusanDekan').change(function () {
        if ($(this).val() == 2) {
            $('#catatanDekan').show();
        } else {
            $('#catatanDekan').hide();
        }
    });
</script>

@endsection