{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha binti Wahi Anuar -->

<!--Mula: senarai pinjaman/tanggungan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Senarai Pinjaman/Tanggungan Bulanan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <!-- Mula: Accordion -->
                <div class="accordion accordion-light accordion-toggle-arrow" id="pinjamanTanggungan">
                    <!-- Mula: Tab pinjaman Staf  -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title" data-toggle="collapse" data-target="#pinjamanStaf">
                                Staf
                            </div>
                        </div>

                        <div id="pinjamanStaf" class="collapse show" data-parent="#pinjamanTanggungan">
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
                                                            <option value="Dilupuskan">Dilupuskan</option>
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
                                <!--begin: Datatable pinjaman/tanggunganStaf-->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_pinjamanStaf">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">No Rujukan</th>
                                            <th title="Field #3">Kategori</th>
                                            <th title="Field #4">Jumlah Pinjaman / Tanggungan (RM)</th>
                                            <th title="Field #5">Jumlah Bayaran Bulanan (RM)</th>
                                            <th title="Field #6">Lampiran</th>
                                            <th title="Field #7">Status</th>
                                            <th title="Field #8">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PHT/0001/00001</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Dihantar</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganStaf') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PHT/0002/00002</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Dihantar</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganStaf') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>PHT/0003/00003</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Diluluskan</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganStaf') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>PHT/0004/00004</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Dilupuskan</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganStaf') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!--end: Datatable pinjaman/tanggunganStaf-->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Tab pinjaman Staf --->

                    <!-- Mula: Tab pinjaman Pasangan  -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title" data-toggle="collapse" data-target="#pinjamanPasangan">
                                Pasangan
                            </div>
                        </div>

                        <div id="pinjamanPasangan" class="collapse show" data-parent="#pinjamanTanggungan">
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
                                                            <option value="Dilupuskan">Dilupuskan</option>
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
                                <!-- Mula: Datatable pinjamanPasangan  -->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                    id="kt_datatable_pinjamanPasangan">
                                    <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">No Rujukan</th>
                                            <th title="Field #3">Kategori</th>
                                            <th title="Field #4">Jumlah Pinjaman / Tanggungan (RM)</th>
                                            <th title="Field #5">Jumlah Bayaran Bulanan (RM)</th>
                                            <th title="Field #6">Lampiran</th>
                                            <th title="Field #7">Status</th>
                                            <th title="Field #8">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PHT/0001/00001</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Dihantar</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganPasangan') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PHT/0002/00002</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Dikembalikan</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganPasangan') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>PHT/0003/00003</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Diluluskan</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganPasangan') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
                                                    </i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>PHT/0004/00004</td>
                                            <td>Pinjaman Kenderaan</td>
                                            <td>200000.00</td>
                                            <td>1000.00</td>
                                            <td>Ada</td>
                                            <td>Dilupuskan</td>
                                            <td class="text-right p-0">
                                                <button
                                                    onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.tanggungan.lihatTanggunganPasangan') }}'"
                                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="Tooltip">
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
                    <!-- Tamat: pinjaman Pasangan -->
                </div>
                <!-- Tamat: Accordion -->
            </div>

        </div>
    </div>
</div>
<!--Tamat: senarai pinjaman/tanggungan -->

<!-- Mula: Butang Seterusnya/Kembali-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.harta.maklumatHarta') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.kemaskiniPengesahan') }}'"
                    class="btn btn-primary font-weight-bold"> Seterusnya
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Seterusnya/Kembali-->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Function for datatable pinjaman/tanggunganStaf -->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_pinjamanStaf').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },

                columns: [{
                        field: 'Bil',
                        sortable: false,
                        textAlign: 'center',
                        width: 30,
                        autoHide: false,
                    },
                    {
                        field: 'No Rujukan',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Kategori',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Pinjaman / Tanggungan (RM)',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Bayaran Bulanan (RM)',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Lampiran',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'Status',
                        width: 90,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                        template: function (row) {
                            var status = {
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
                                Dilupuskan: {
                                    'title': 'Dilupuskan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                status[row.Status].class + '">' + status[row.Status].title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        sortable: false,
                        textAlign: 'center',
                        autoHide: false,
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
                demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo.init();
    });
</script>

<!-- Function for datatable pinjaman/tanggunganPasangan -->
<script>
    var KTDatatableHtmlTableDemo1 = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_pinjamanPasangan').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },

                columns: [{
                        field: 'Bil',
                        sortable: false,
                        textAlign: 'center',
                        width: 30,
                        autoHide: false,
                    },
                    {
                        field: 'No Rujukan',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Kategori',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Pinjaman / Tanggungan (RM)',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Bayaran Bulanan (RM)',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Lampiran',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'Status',
                        width: 90,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                        template: function (row) {
                            var status = {
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
                                Dilupuskan: {
                                    'title': 'Dilupuskan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                status[row.Status].class + '">' + status[row.Status].title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        sortable: false,
                        textAlign: 'center',
                        autoHide: false,
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
                demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo1.init();
    });
</script>


@endsection