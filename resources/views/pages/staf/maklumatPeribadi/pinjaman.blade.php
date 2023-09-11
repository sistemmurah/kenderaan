{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Pinjaman Kenderaan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Pinjaman Kenderaan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.tambahPinjamanKend') }}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Permohonan Pinjaman Kenderaan">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
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
                                    <select class="form-control" id="kt_datatable_kenderaan_search_status">
                                        <option value="">Semua</option>
                                        <option value="Dihantar">Dihantar</option>
                                        <option value="Disahkan">Disahkan</option>
                                        <option value="Diluluskan">Diluluskan</option>
                                        <option value="Ditolak">Ditolak</option>
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
                                   id="kt_datatable_kenderaan_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_kenderaan">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Peminjam</th>
                    <th title="Field #3">Keterangan</th>
                    <th title="Field #4">Jenis Pinjaman</th>
                    <th title="Field #5">Tempoh (Bulan)</th>
                    <th title="Field #6">Harga Jualan</th>
                    <th title="Field #7">Jumlah Pinjaman</th>
                    <th title="Field #8">Status</th>
                    <th title="Field #9">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Wajimin Bin Sugiran</td>
                    <td>Saya ingin membuat pinjaman kenderaan</td>
                    <td>Kereta Baru</td>
                    <td>96</td>
                    <td>60,000.00</td>
                    <td>70,000.00</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Pinjaman Kenderaan -->

    <!-- Mula: Senarai Pinjaman Komputer -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Pinjaman Komputer
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.tambahPinjamanKomp') }}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Permohonan Pinjaman Komputer">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
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
                                    <select class="form-control" id="kt_datatable_komputer_search_status">
                                        <option value="">Semua</option>
                                        <option value="Dihantar">Dihantar</option>
                                        <option value="Disahkan">Disahkan</option>
                                        <option value="Diluluskan">Diluluskan</option>
                                        <option value="Ditolak">Ditolak</option>
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
                                   id="kt_datatable_komputer_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_komputer">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Peminjam</th>
                    <th title="Field #3">Keterangan</th>
                    <th title="Field #5">Tempoh (Bulan)</th>
                    <th title="Field #6">Harga Jualan</th>
                    <th title="Field #7">Jumlah Pinjaman</th>
                    <th title="Field #8">Status</th>
                    <th title="Field #9">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Wajimin Bin Sugiran</td>
                    <td>Saya ingin membuat pinjaman komputer</td>
                    <td>48</td>
                    <td>4,850.00</td>
                    <td>5,000.00</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Pinjaman Komputer -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_kenderaan').KTDatatable({
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
                            field: 'Nama Peminjam',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 80,
                        },
                        {
                            field: 'Keterangan',
                            width: 80,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jenis Pinjaman',
                            width: 70,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tempoh (Bulan)',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Harga Jualan',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Jumlah Pinjaman',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Status',
                            title: 'Status',
                            width: 100,
                            sortable: true,
                            autoHide: false,
                            textAlign: 'center',
                            template: function (row) {
                                var status = {
                                    Dihantar: {
                                        'title': 'Dihantar',
                                        'class': 'w-100 label label-xl label-light-info',
                                    },
                                    Disahkan: {
                                        'title': 'Disahkan',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    Diluluskan: {
                                        'title': 'Diluluskan',
                                        'class': 'w-100 label label-xl label-light-primary',
                                    },
                                    Ditolak: {
                                        'title': 'Ditolak',
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
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            //width: 90,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_kenderaan_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_komputer').KTDatatable({
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
                            field: 'Nama Peminjam',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 120,
                        },
                        {
                            field: 'Keterangan',
                            width: 120,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tempoh (Bulan)',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Harga Jualan',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Jumlah Pinjaman',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Status',
                            title: 'Status',
                            width: 100,
                            sortable: true,
                            autoHide: false,
                            textAlign: 'center',
                            template: function (row) {
                                var status = {
                                    Dihantar: {
                                        'title': 'Dihantar',
                                        'class': 'w-100 label label-xl label-light-info',
                                    },
                                    Disahkan: {
                                        'title': 'Disahkan',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    Diluluskan: {
                                        'title': 'Diluluskan',
                                        'class': 'w-100 label label-xl label-light-primary',
                                    },
                                    Ditolak: {
                                        'title': 'Ditolak',
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
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            //width: 90,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_komputer_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_kenderaan_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_kenderaan_search_status').selectpicker();

                $('#kt_datatable_komputer_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_komputer_search_status').selectpicker();
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

{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>--}}
{{--    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>--}}
{{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection