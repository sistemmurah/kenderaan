{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Pilih jenis pendapatan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Maklumat Pendapatan<span class="text-danger">*</span></label>
                            <select class="form-control" id="maklumatPendapatan" disabled="disabled">
                                <option value="5">STAF BERSAMA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="perananWakil">
                            <label>Peranan Wakil<span class="text-danger">*</span></label>
                            <select class="form-control" disabled="disabled">
                                <option value="2">SUAMI</option>
                                <option value="3">ISTERI</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pilih jenis pendapatan -->

<!-- Mula: Pendapatan Staf -->
<div class="card card-custom gutter-b" id="pendapatanStaf">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-hand-holding-usd"></i>
                Pendapatan Staf
            </h3>
        </div>
    </div>

    <!-- Mula: Accordion Pendapatan Staf -->
    <div class="card-body">
        <div class="accordion accordion-light accordion-toggle-arrow" id="pendapatanStaf">
            <!-- Mula: Tab Senarai Emolumen Bulanan Semasa -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#emolumenStaf">
                        Senarai Emolumen Bulanan Semasa
                    </div>
                </div>

                <div id="emolumenStaf" class="collapse" data-parent="#pendapatanStaf">
                    <div class="card-body">
                        <!-- Mula: table pendapatan staf -->
                        <b>PENDAPATAN</b>
                        <br><br>
                        <table class="table table-striped">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th style="text-align:center;">Kod</th>
                                    <th style="text-align:center;">Deskripsi</th>
                                    <th style="text-align:center;">Jumlah (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">006</td>
                                    <td>BANTUAN SARA HIDUP (COLA)</td>
                                    <td style="text-align:center;">250.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">031</td>
                                    <td>GAJI POKOK</td>
                                    <td style="text-align:center;">1191.22</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">046</td>
                                    <td>ELAUN KHIDMAT AWAM</td>
                                    <td style="text-align:center;">115.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">045</td>
                                    <td>IMBUHAN TETAP PERUMAHAN</td>
                                    <td style="text-align:center;">100.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:670px;">JUMLAH PENDAPATAN</th>
                                    <th style="text-align:center;">RM 1736.22</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- Tamat: table pendapatan staf -->
                        <br>
                        <!-- Mula: table potongan staf -->
                        <b>POTONGAN</b>
                        <br><br>
                        <table class="table table-striped">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th></th>
                                    <th style="text-align:center;">Kod</th>
                                    <th style="text-align:center;">Deskripsi</th>
                                    <th style="text-align:center;">Jumlah (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan1" />
                                    </td>
                                    <td style="text-align:center;">501</td>
                                    <td>BIRO PERKHIDMATAN ANGKASA</td>
                                    <td style="text-align:center;">645.39</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan2" />
                                    </td>
                                    <td style="text-align:center;">804</td>
                                    <td>YPIEM</td>
                                    <td style="text-align:center;">5.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan3" />
                                    </td>
                                    <td style="text-align:center;">891</td>
                                    <td>YURAN AHLI BAKES</td>
                                    <td style="text-align:center;">3.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan4" />
                                    </td>
                                    <td style="text-align:center;">900</td>
                                    <td>PINJ PUBLIC BANK BAKES</td>
                                    <td style="text-align:center;">223.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:710px;">JUMLAH POTONGAN</th>
                                    <th style="text-align:center;">RM 876.89</th>
                                </tr>
                                <tr>
                                    <th style="width:710px;">GAJI BERSIH</th>
                                    <th style="text-align:center;">RM 859.33</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- Tamat: table potongan staf -->
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Senarai Emolumen Bulanan Semasa -->

            <!-- Mula: Tab Senarai Pendapatan Bulanan Staf -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title" data-toggle="collapse" data-target="#tambahStaf">
                        Senarai Pendapatan Bulanan
                    </div>
                </div>

                <div id="tambahStaf" class="collapse show" data-parent="#pendapatanStaf">
                    <div class="card-body">
                        <div class="mb-5">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                <select class="form-control"
                                                    id="kt_datatable_pendapatanStaf_search_status">
                                                    <option value="">Semua</option>
                                                    <option value="Disimpan">Disimpan</option>
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
                                            id="kt_datatable_pendapatanStaf_search_query" />
                                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Mula: Datatable Senarai Pendapatan Bulanan Staf -->
                        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                            id="kt_datatable_pendapatanStaf">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th title="Field #1">Bil</th>
                                    <th title="Field #2">No Rujukan</th>
                                    <th title="Field #3">Jenis Pendapatan</th>
                                    <th title="Field #4">Jumlah (RM)</th>
                                    <th title="Field #5">Status</th>
                                    <th title="Field #6">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PHT/7991/00002</td>
                                    <td>Pekerjaan Luar</td>
                                    <td>2000.00</td>
                                    <td>Dikembalikan</td>
                                    <td class="text-right p-0">
                                        <button
                                            onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.lihatPendapatanStaf') }}'"
                                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top"
                                                title="Lihat">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PHT/7991/00001</td>
                                    <td>SEWA RUMAH</td>
                                    <td>250.00</td>
                                    <td>Diluluskan</td>
                                    <td class="text-right p-0">
                                        <button
                                            onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.lihatPendapatanStaf') }}'"
                                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top"
                                                title="Tooltip">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Tamat: Datatable Senarai Pendapatan Bulanan Staf -->
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Senarai Pendapatan Bulanan Staf -->
        </div>
    </div>
    <!-- Tamat: Accordion Pendapatan Staf -->
</div>
<!-- Tamat: Pendapatan Staf -->

<!-- Mula: Pendapatan Pasangan-->
<div class="card card-custom gutter-b" id="pendapatanPasangan">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-hand-holding-usd"></i>
                Pendapatan Pasangan
            </h3>
        </div>
    </div>

    <!-- Mula: Accordion Pendapatan Pasangan -->
    <div class="card-body">
        <div class="accordion accordion-light accordion-toggle-arrow" id="pendapatanPasangan">
            <!-- Mula: Tab Senarai Emolumen Bulanan Semasa -->
            <div class="card" id="pasanganEmolumen">
                <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#emolumenPasangan">
                        Senarai Emolumen Bulanan Semasa
                    </div>
                </div>

                <div id="emolumenPasangan" class="collapse" data-parent="#pendapatanPasangan">
                    <div class="card-body">
                        <!-- Mula: table pendapatan pasangan -->
                        <b>PENDAPATAN</b>
                        <br><br>
                        <table class="table table-striped">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th style="text-align:center;">Kod</th>
                                    <th style="text-align:center;">Deskripsi</th>
                                    <th style="text-align:center;">Jumlah (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">006</td>
                                    <td>BANTUAN SARA HIDUP (COLA)</td>
                                    <td style="text-align:center;">250.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">031</td>
                                    <td>GAJI POKOK</td>
                                    <td style="text-align:center;">1191.22</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">046</td>
                                    <td>ELAUN KHIDMAT AWAM</td>
                                    <td style="text-align:center;">115.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">045</td>
                                    <td>IMBUHAN TETAP PERUMAHAN</td>
                                    <td style="text-align:center;">100.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:670px;">JUMLAH PENDAPATAN</th>
                                    <th style="text-align:center;">RM 1736.22</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- Tamat: table pendapatan pasangan -->
                        <br>
                        <!-- Mula: table potongan pasangan -->
                        <b>POTONGAN</b>
                        <br><br>
                        <table class="table table-striped">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th></th>
                                    <th style="text-align:center;">Kod</th>
                                    <th style="text-align:center;">Deskripsi</th>
                                    <th style="text-align:center;">Jumlah (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan1" />
                                    </td>
                                    <td style="text-align:center;">501</td>
                                    <td>BIRO PERKHIDMATAN ANGKASA</td>
                                    <td style="text-align:center;">645.39</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan2" />
                                    </td>
                                    <td style="text-align:center;">804</td>
                                    <td>YPIEM</td>
                                    <td style="text-align:center;">5.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan3" />
                                    </td>
                                    <td style="text-align:center;">891</td>
                                    <td>YURAN AHLI BAKES</td>
                                    <td style="text-align:center;">3.00</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="checkbox" name="simpanan4" />
                                    </td>
                                    <td style="text-align:center;">900</td>
                                    <td>PINJ PUBLIC BANK BAKES</td>
                                    <td style="text-align:center;">223.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:710px;">JUMLAH POTONGAN</th>
                                    <th style="text-align:center;">RM 876.89</th>
                                </tr>
                                <tr>
                                    <th style="width:710px;">GAJI BERSIH</th>
                                    <th style="text-align:center;">RM 859.33</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- Tamat: table potongan pasangan -->
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Senarai Emolumen Bulanan Semasa -->

            <!-- Mula: Tab Senarai Pendapatan Bulanan Pasangan -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title" data-toggle="collapse" data-target="#tambahPasangan">
                        Senarai Pendapatan Bulanan
                    </div>
                </div>

                <div id="tambahPasangan" class="collapse show" data-parent="#pendapatanPasangan">
                    <div class="card-body">
                        <div class="mb-5">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                <select class="form-control"
                                                    id="kt_datatable_pendapatanStaf_search_status">
                                                    <option value="">Semua</option>
                                                    <option value="Disimpan">Disimpan</option>
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
                                            id="kt_datatable_pendapatanStaf_search_query" />
                                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Mula: Datatable Senarai Pendapatan Bulanan Pasangan -->
                        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                            id="kt_datatable_pendapatanPasangan">
                            <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th title="Field #1">Bil</th>
                                    <th title="Field #2">No Rujukan</th>
                                    <th title="Field #3">Jenis Pendapatan</th>
                                    <th title="Field #4">Jumlah (RM)</th>
                                    <th title="Field #5">Status</th>
                                    <th title="Field #6">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PHT/7991/00002</td>
                                    <td>Pekerjaan Luar</td>
                                    <td>2000.00</td>
                                    <td>Dihantar</td>
                                    <td class="text-right p-0">
                                        <button
                                            onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.lihatPendapatanPasangan') }}'"
                                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top"
                                                title="Kemaskini">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PHT/7991/00001</td>
                                    <td>SEWA RUMAH</td>
                                    <td>250.00</td>
                                    <td>Dihantar</td>
                                    <td class="text-right p-0">
                                        <button
                                            onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.lihatPendapatanPasangan') }}'"
                                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                                            <i class="fas fa-eye" data-toggle="tooltip" data-placement="top"
                                                title="Tooltip">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Tamat: Datatable Senarai Pendapatan Bulanan Pasangan -->
                    </div>
                </div>
            </div>
            <!-- Tamat: Tab Senarai Pendapatan Bulanan Pasangan -->
        </div>
    </div>
    <!-- Tamat: Accordion Pendapatan pasangan -->

</div>
<!-- Tamat: Pendapatan Pasangan -->

<!-- Mula: Butang Seterusnya/ Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.maklumatPeribadi') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.harta.maklumatHarta') }}'"
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

<!-- Mula: script datatable pendapatan staf -->
<script>
    var KTDatatableStaf = function () {
        var staf = function () {
            var datatableStaf = $('#kt_datatable_pendapatanStaf').KTDatatable({
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
                        width: 110,
                    },
                    {
                        field: 'Jenis Pendapatan',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 130,
                    },
                    {
                        field: 'Jumlah (RM)',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'StatusStaf',
                        width: 100,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var statusStaf = {
                                Disimpan: {
                                    'title': 'Disimpan',
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
                                statusStaf[row.Status].class + '">' + statusStaf[row.Status]
                                .title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_pendapatanStaf_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_pendapatanStaf_search_status').on('change', function () {
                datatableStaf.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_pendapatanStaf_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                staf();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableStaf.init();
    });
</script>
<!-- Tamat: script datatable pendapatan staf -->

<!-- Mula: script datatable pendapatan pasangan -->
<script>
    var KTDatatablePasangan = function () {
        var pasangan = function () {
            var datatablePasangan = $('#kt_datatable_pendapatanPasangan').KTDatatable({
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
                        width: 110,
                    },
                    {
                        field: 'Jenis Pendapatan',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 130,
                    },
                    {
                        field: 'Jumlah (RM)',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'StatusPasangan',
                        width: 100,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var statusPasangan = {
                                Disimpan: {
                                    'title': 'Disimpan',
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
                                statusPasangan[row.Status].class + '">' + statusPasangan[row
                                    .Status].title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_pendapatanPasangan_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_pendapatanPasangan_search_status').on('change', function () {
                // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                // alert(regExSearch);
                //alert($(this).val().toLowerCase());
                datatablePasangan.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_pendapatanPasangan_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                pasangan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatablePasangan.init();
    });
</script>
<!-- Tamat: script datatable pendapatan pasangan -->

<!-- script show pendapatan pasangan section -->
<script>
    $('#perananWakil').hide();

    $('#maklumatPendapatan').change(function () {
        if ($(this).val() == 1) {
            $('#pendapatanPasangan').show();
            $('#pasanganEmolumen').hide();
            $('#perananWakil').hide();
        } else if ($(this).val() == 2) {
            $('#pendapatanPasangan').hide();
            $('#perananWakil').hide();
        } else if ($(this).val() == 3) {
            $('#pendapatanPasangan').show();
            $('#perananWakil').hide();
            $('#pasanganEmolumen').hide();
        } else if ($(this).val() == 4) {
            $('#pendapatanPasangan').hide();
            $('#perananWakil').hide();
        } else if ($(this).val() == 5) {
            $('#pendapatanPasangan').show();
            $('#perananWakil').show();
            $('#pasanganEmolumen').show();
        } else {
            $('#pendapatanPasangan').show();
            $('#perananWakil').hide();
            $('#pasanganEmolumen').hide();
        }
    });
</script>

@endsection