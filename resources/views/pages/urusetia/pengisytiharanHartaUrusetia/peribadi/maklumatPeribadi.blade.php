{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!--Mula: Maklumat Permohonan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
                        Maklumat Permohonan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan</label>
                            <input id="noRujukan" type="text" class="form-control" disabled="disabled"
                                value="PHT/7332/0001" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label>Tarikh Permohonan</label>
                            <input class="form-control" type="date" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" id="tarikhPermohonan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Pegawai PSM<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="pilihPegawai" disabled="disabled">
                                <option>ABU BAKAR BIN ISMAIL</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tamat: Maklumat Permohonan -->

<!--Mula: Maklumat Pemohon -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
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
                            <label>No.Kad Pengenalan</label>
                            <input id="noKadPengenalanPemohon" type="text" class="form-control" disabled="disabled"
                                value="720403065294" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Pekerja</label>
                            <input id="no.Pekerja" type="number" class="form-control" disabled="disabled"
                                value="7332" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan</label>
                            <input id="jabatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="JABATAN TEKNOLOGI MAKLUMAT & KOMUNIKASI (J07)" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian</label>
                            <input id="bahagianPemohon" type="text" class="form-control" disabled="disabled"
                                value="BAHAGIAN PENGURUSAN PEMBANGUNAN APLIKASI DAN MULTIMEDIA" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pemohon -->

<!--Mula: Maklumat Peribadi -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Maklumat Peribadi
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <!-- Mula: Accordion -->
                <div class="accordion accordion-light accordion-toggle-arrow" id="maklumatPeribadi">

                    <!-- Mula: Tab Maklumat Pasangan -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#maklumatPasangan">
                                Pasangan
                            </div>
                        </div>

                        <div id="maklumatPasangan" class="collapse" data-parent="#maklumatPeribadi">
                            <div class="card-body">
                                <!-- Mula: Datatable Maklumat Pasangan -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_maklumatPasangan">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Nama</th>
                                            <th title="Field #3">No Kad Pengenalan</th>
                                            <th title="Field #4">Umur</th>
                                            <th title="Field #5">Hubungan</th>
                                            <th title="Field #6">Status Perkahwinan</th>
                                            <th title="Field #9">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>690125015363</td>
                                            <td>52 TAHUN</td>
                                            <td>SUAMI</td>
                                            <td>BERKAHWIN</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatPasangan') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Maklumat Pasangan -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Pasangan -->

                    <!-- Mula: Tab Maklumat IbuBapa/Penjaga -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#maklumatParent">
                                Ibu Bapa / Penjaga
                            </div>
                        </div>

                        <div id="maklumatParent" class="collapse" data-parent="#maklumatPeribadi">
                            <div class="card-body">
                                <!-- Mula: Datatable Maklumat IbuBapa/Penjaga -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_maklumatParent">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Nama</th>
                                            <th title="Field #3">No Kad Pengenalan</th>
                                            <th title="Field #4">Umur</th>
                                            <th title="Field #5">Hubungan</th>
                                            <th title="Field #6">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>690125015363</td>
                                            <td>52 TAHUN</td>
                                            <td>BAPA</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatIbuBapa') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Maklumat IbuBapa/Penjaga -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat IbuBapa/Penjaga -->

                    <!-- Mula: Tab Maklumat Anak/Tanggungan -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#maklumatTanggungan">
                                Anak / Tanggungan
                            </div>
                        </div>

                        <div id="maklumatTanggungan" class="collapse" data-parent="#maklumatPeribadi">
                            <div class="card-body">
                                <!-- Mula: Datatable Maklumat Anak/Tanggungan -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_maklumatTanggungan">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Nama</th>
                                            <th title="Field #3">Umur</th>
                                            <th title="Field #4">Hubungan</th>
                                            <th title="Field #5">Nama Ibu/Bapa</th>
                                            <th title="Field #6">Status Persekolahan</th>
                                            <th title="Field #7">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>NURHANISAH BINTI JAILANI</td>
                                            <td>24 TAHUN</td>
                                            <td>ANAK</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>TIDAK</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatAnak') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>MUHAMMAD ZULHILMI BIN JAILANI</td>
                                            <td>22 TAHUN</td>
                                            <td>ANAK</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>YA</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatAnak') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>NUR SHAHIRAH BINTI JAILANI</td>
                                            <td>20 TAHUN</td>
                                            <td>ANAK</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>YA</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatAnak') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>MUHAMMAD ZUL AIMAN BIN JAILANI</td>
                                            <td>19 TAHUN</td>
                                            <td>ANAK</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>YA</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatAnak') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Maklumat Anak/Tanggungan -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Anak/Tanggungan -->

                    <!-- Mula: Tab Maklumat Waris -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#maklumatWaris">
                                Waris
                            </div>
                        </div>

                        <div id="maklumatWaris" class="collapse" data-parent="#maklumatPeribadi">
                            <div class="card-body">
                                <!-- Mula: Datatable Maklumat Waris -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_maklumatWaris">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Nama</th>
                                            <th title="Field #3">Alamat</th>
                                            <th title="Field #4">Hubungan</th>
                                            <th title="Field #5">No Tel Rumah</th>
                                            <th title="Field #6">No Tel Bimbit</th>
                                            <th title="Field #7">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>JAILANI BIN ABDULLAH</td>
                                            <td>NO 1 JALAN BAKTI 72 TAMAN MUTIARA RINI, SKUDAI, JOHOR</td>
                                            <td>SUAMI</td>
                                            <td>07-5567203</td>
                                            <td>012-3356789</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatWaris') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ASIAH BINTI HASSAN</td>
                                            <td>NO 65 JALAN SERINDIK, PAHANG</td>
                                            <td>IBU</td>
                                            <td>06-9987653</td>
                                            <td>011-38765678</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatWaris') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>AHMAD BIN KARIM</td>
                                            <td>NO 65 JALAN SERINDIK, PAHANG</td>
                                            <td>BAPA</td>
                                            <td>06-9987653</td>
                                            <td>013-8759086</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.lihatWaris') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Kemaskini">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable Maklumat Waris -->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab Maklumat Waris -->


                </div>
                <!-- Tamat: Accordion -->
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Peribadi -->

<!-- Mula: Butang Seterusnya/ Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pemohonPengisytiharan') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.maklumatPendapatan') }}'"
                    class="btn btn-primary font-weight-bold"> Seterusnya
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Seterusnya/ Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Mula: Script Datatable Maklumat Pasangan -->
<script>
    var KTDatatableHtmlTablePasangan = function () {
        var maklumatPasangan = function () {
            var datatablePasangan = $('#kt_datatable_maklumatPasangan').KTDatatable({
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
                        field: 'Nama',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'No Kad Pengenalan',
                        width: 90,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Umur',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Hubungan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Status Perkahwinan',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Tindakan',
                        width: 70,
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
                maklumatPasangan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTablePasangan.init();
    });
</script>
<!-- Tamat: Script Datatable Maklumat Pasangan -->

<!-- Mula: Script Datatable Maklumat IbuBapa/Penjaga -->
<script>
    var KTDatatableHtmlTableParent = function () {
        var maklumatParent = function () {
            var datatableParent = $('#kt_datatable_maklumatParent').KTDatatable({
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
                        field: 'Nama',
                        width: 150,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'No Kad Pengenalan',
                        width: 100,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Umur',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Hubungan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Tindakan',
                        width: 70,
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
                maklumatParent();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableParent.init();
    });
</script>
<!-- Tamat: Script Datatable Maklumat IbuBapa/Penjaga -->

<!-- Mula: Script Datatable Maklumat Anak/Tanggungan -->
<script>
    var KTDatatableHtmlTableTanggungan = function () {
        var maklumatTanggungan = function () {
            var datatableTanggungan = $('#kt_datatable_maklumatTanggungan').KTDatatable({
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
                        field: 'Nama',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Umur',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Hubungan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Nama Ibu/Bapa',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Status Persekolahan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Tindakan',
                        width: 70,
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
                maklumatTanggungan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableTanggungan.init();
    });
</script>
<!-- Tamat: Script Datatable Maklumat Anak/Tanggungan -->

<!-- Mula: Script Datatable Maklumat Waris -->
<script>
    var KTDatatableHtmlTableWaris = function () {
        var maklumatWaris = function () {
            var datatableWaris = $('#kt_datatable_maklumatWaris').KTDatatable({
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
                        field: 'Nama',
                        width: 150,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Alamat',
                        width: 150,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Hubungan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'No Tel Rumah',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'No Tel Bimbit',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Tindakan',
                        width: 70,
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
                maklumatWaris();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableWaris.init();
    });
</script>
<!-- Tamat: Script Datatable Maklumat Waris -->

@endsection