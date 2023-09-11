{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Nurul Natasha binti Wahi Anuar -->

<!--Mula: Maklumat Pemohon -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-tooth"></i>
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
                                value="SITI RASHIDAH BINTI HASHIM" />
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
                                value="6957" />
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

<!-- Mula: Maklumat Tuntutan -->
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-tooth"></i>
                Maklumat Tuntutan
            </h3>
        </div>
    </div>

    <!-- Mula: Accordion Maklumat Tuntutan -->
    <div class="card-body">
        <div class="accordion accordion-light accordion-toggle-arrow" id="tuntutan">
            <!-- Mula: Tab Maklumat Keluarga -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#maklumatKeluarga">
                        Maklumat Keluarga
                    </div>
                </div>

                <div id="maklumatKeluarga" class="collapse" data-parent="#tuntutan">
                    <div class="card-body">
                        <div class="mb-5">
                            <div class="row align-items-center">

                                <div class="col-md-9">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Kelayakan:</label>
                                                <select class="form-control" id="kt_datatable_keluarga_search_status">
                                                    <option value="">Semua</option>
                                                    <option value="Layak">Layak</option>
                                                    <option value="Tidak_Layak">Tidak Layak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Cari"
                                            id="kt_datatable_keluarga_search_query" />
                                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Mula: Datatable Maklumat Keluarga -->
                        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                            id="kt_datatable_keluarga">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th title="Field #1">Bil</th>
                                    <th title="Field #2">Nama</th>
                                    <th title="Field #3">No Kad Pengenalan</th>
                                    <th title="Field #4">Hubungan</th>
                                    <th title="Field #5">Umur</th>
                                    </th>
                                    <th title="Field #6">Status</th>
                                    <th title="Field #7">Kelayakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JAILANI BIN ABDULLAH</td>
                                    <td>690125015363</td>
                                    <td>SUAMI</td>
                                    <td>52 TAHUN</td>
                                    <td>BERKAHWIN</td>
                                    <td>Layak</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SITI RASHIDAH BINTI HASHIM</td>
                                    <td>720403065294</td>
                                    <td>DIRI SENDIRI</td>
                                    <td>48 TAHUN</td>
                                    <td></td>
                                    <td>Layak</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>NURHANISAH BINTI JAILANI</td>
                                    <td>961029253054</td>
                                    <td>ANAK</td>
                                    <td>24 TAHUN</td>
                                    <td></td>
                                    <td>Tidak_Layak</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MUHAMMAD ZULHILMI BIN JAILANI</td>
                                    <td>980923015531</td>
                                    <td>ANAK</td>
                                    <td>22 TAHUN</td>
                                    <td></td>
                                    <td>Layak</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Tamat: Datatable Maklumat Keluarga -->
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Maklumat Keluarga -->

            <!-- Mula: Tab Maklumat Baki Tuntutan Tahun 2021 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#bakiTuntutanSemasa">
                        Baki Tuntutan Tahun 2021
                    </div>
                </div>

                <div id="bakiTuntutanSemasa" class="collapse show" data-parent="#tuntutan">
                    <div class="card-body">
                        <table class="table">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th style="text-align:center;">Jumlah Kelayakan Tahunan (RM)</th>
                                    <th style="text-align:center;">Jumlah Yang Telah Dituntut (RM)</th>
                                    <th style="text-align:center;">Jumlah Baki (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">500.00</td>
                                    <td style="text-align:center;">100.00</td>
                                    <td style="text-align:center;">400.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Maklumat Baki Tuntutan Tahun 2021 -->

            <!-- Mula: Tab Maklumat Baki Tuntutan Tahun 2020 -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#bakiTuntutanLepas">
                        Baki Tuntutan Tahun 2020
                    </div>
                </div>

                <div id="bakiTuntutanLepas" class="collapse" data-parent="#tuntutan">
                    <div class="card-body">
                        <table class="table">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th style="text-align:center;">Jumlah Kelayakan Tahunan (RM)</th>
                                    <th style="text-align:center;">Jumlah Yang Telah Dituntut (RM)</th>
                                    <th style="text-align:center;">Jumlah Baki (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">500.00</td>
                                    <td style="text-align:center;">100.00</td>
                                    <td style="text-align:center;">400.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Maklumat Baki Tuntutan Tahun 2020 -->
        </div>
    </div>
    <!-- Tamat: Accordion Maklumat Tuntutan -->
</div>
<!-- Tamat: Maklumat Tuntutan -->

<!-- Mula: Senarai Permohonan Tuntutan -->
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-tooth"></i>
                Senarai Tuntutan Pergigian
            </h3>
        </div>
    </div>

    <div class="card-body">
        <div class="mb-5">
            <div class="row align-items-center">

                <div class="col-md-9">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                <select class="form-control" id="kt_datatable_tuntutanStaf_search_status">
                                    <option value="">Semua</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Dihantar">Dihantar</option>
                                    <option value="Diluluskan">Diluluskan</option>
                                    <option value="Dikembalikan">Dikembalikan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Cari"
                            id="kt_datatable_tuntutanStaf_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
            id="kt_datatable_tuntutanStaf">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">No Rujukan</th>
                    <th title="Field #3">Penerima Rawatan</th>
                    <th title="Field #4">Tarikh Rawatan</th>
                    <th title="Field #5">Tarikh Permohonan</th>
                    <th title="Field #6">Jumlah Tuntutan (RM)</th>
                    <th title="Field #7">Status</th>
                    <th title="Field #8">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ADCJ07202000556</td>
                    <td>SITI RASHIDAH BINTI HASHIM</td>
                    <td>28/01/2021</td>
                    <td>01/02/2021</td>
                    <td>250.00</td>
                    <td>Dihantar</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianUrusetia.kemaskiniTuntutan') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ADCJ07202000262</td>
                    <td>MUHAMMAD AIMAN HAFIZI BIN JAILANI</td>
                    <td>02/01/2021</td>
                    <td>10/01/2021</td>
                    <td>50.00</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianUrusetia.kemaskiniTuntutan') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ADCJ07202000263</td>
                    <td>MUHAMMAD AIMAN HAFIZI BIN JAILANI</td>
                    <td>14/01/2021</td>
                    <td>24/01/2021</td>
                    <td>50.00</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianUrusetia.kemaskiniTuntutan') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>ADCJ07202000179</td>
                    <td>MUHAMMAD AIMAN HAFIZI BIN JAILANI</td>
                    <td>03/06/2020</td>
                    <td>10/06/2020</td>
                    <td>100.00</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianUrusetia.kemaskiniTuntutan') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ADCJ07202000120</td>
                    <td>NUR AMALINA BINTI JAILANI</td>
                    <td>20/04/2020</td>
                    <td>23/04/2020</td>
                    <td>210.00</td>
                    <td>Dikembalikan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianUrusetia.kemaskiniTuntutan') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Tamat: Datatable-->
    </div>
</div>
<!-- Tamat: Senarai Permohonan Tuntutan -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('pergigianUrusetia.pemohonPergigian') }}'"
                    class="btn btn-primary"> Simpan
                </button>
                <button onclick="window.location = '{{ route('pergigianUrusetia.pemohonPergigian') }}'"
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

<!-- Mula: script datatable senarai permohonan tuntutan -->
<script>
    var KTDatatableHtmlTableTuntutan = function () {
        var tuntutan = function () {
            var datatableTuntutan = $('#kt_datatable_tuntutanStaf').KTDatatable({
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
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 130,
                    },
                    {
                        field: 'Penerima Rawatan',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 150,
                    },
                    {
                        field: 'Tarikh Rawatan',
                        width: 80,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tarikh Permohonan',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Tuntutan (RM)',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'StatusStaf',
                        width: 90,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var statusStaf = {
                                Draft: {
                                    'title': 'Draft',
                                    'class': 'w-100 label label-xl label-light-info',
                                },
                                Dihantar: {
                                    'title': 'Dihantar',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Diluluskan: {
                                    'title': 'Diluluskan',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                Dikembalikan: {
                                    'title': 'Dikembalikan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                statusStaf[row.Status].class + '">' + statusStaf[row
                                    .Status]
                                .title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_tuntutanStaf_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_tuntutanStaf_search_status').on('change', function () {
                datatableTuntutan.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_tuntutanStaf_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                tuntutan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableTuntutan.init();
    });
</script>
<!-- Tamat: script datatable senarai permohonan tuntutan -->

<!-- Mula: script datatable maklumat keluarga -->
<script>
    var KTDatatableHtmlTableKeluarga = function () {
        var keluarga = function () {
            var datatableKeluarga = $('#kt_datatable_keluarga').KTDatatable({
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
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 140,
                    },
                    {
                        field: 'No Kad Pengenalan',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: 'Hubungan',
                        width: 80,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Umur',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                    },

                    {
                        field: 'Kelayakan',
                        title: 'kelayakan',
                        width: 100,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var kelayakan = {
                                Layak: {
                                    'title': 'Layak',
                                    'class': 'w-100 label label-xl label-light-info',
                                },
                                Tidak_Layak: {
                                    'title': 'Tidak Layak',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                kelayakan[row.Kelayakan].class + '">' + kelayakan[row
                                    .Kelayakan]
                                .title +
                                '</span>';
                        }
                    },
                ],

                search: {
                    input: $('#kt_datatable_keluarga_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_keluarga_search_status').on('change', function () {
                datatableKeluarga.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_keluarga_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                keluarga();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableKeluarga.init();
    });
</script>
<!-- Tamat: script datatable maklumat keluarga -->

@endsection