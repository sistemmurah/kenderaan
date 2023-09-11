{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Pendidikan Peringkat Tinggi -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Pendidikan Peringkat Tinggi
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Pendidikan Peringkat Tinggi">
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
                                    <select class="form-control" id="kt_datatable_pendTinggi_search_status">
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
                                   id="kt_datatable_pendTinggi_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_pendTinggi">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Institusi</th>
                    <th title="Field #3">Tahap</th>
                    <th title="Field #4">Tahun</th>
                    <th title="Field #5">CGPA</th>
                    <th title="Field #6">Pengkhususan</th>
                    <th title="Field #7">Major Pengkhususan</th>
                    <th title="Field #8">Minor Pengkhususan</th>
                    <th title="Field #8">Bidang</th>
                    <th title="Field #10">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>UNIVERSITI TEKNOLOGI MALAYSIA</td>
                    <td>TINGGI</td>
                    <td>2020</td>
                    <td>3.5</td>
                    <td>SAINS</td>
                    <td>TULEN (MAKLUMAT)</td>
                    <td>PENGURUSAN</td>
                    <td>SUMBER KEWANGAN</td>
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
    <!-- Tamat: Senarai Pendidikan Peringkat Tinggi -->

    <!-- Mula: Senarai Pendidikan Peringkat Sekolah -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Pendidikan Peringkat Sekolah
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Pendidikan Peringkat Sekolah">
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
                                    <select class="form-control" id="kt_datatable_pendSekolah_search_status">
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
                                   id="kt_datatable_pendSekolah_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_pendSekolah">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Sekolah</th>
                    <th title="Field #3">Tahap</th>
                    <th title="Field #4">Tahun Mula</th>
                    <th title="Field #5">Tahun Akhir</th>
                    <th title="Field #6">Bidang</th>
                    <th title="Field #7">Tarikh Kemaskini</th>
                    <th title="Field #10">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>SEKOLAH MENENGAH KEBANGSAAN SKUDAI</td>
                    <td>SPM</td>
                    <td>1999</td>
                    <td>1999</td>
                    <td>LAIN-LAIN</td>
                    <td>24/06/2010</td>
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
    <!-- Tamat: Senarai Pendidikan Peringkat Sekolah -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_pendTinggi').KTDatatable({
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
                            field: 'Institusi',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'Tahap',
                            width: 90,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: true,
                        },
                        {
                            field: 'Tahun',
                            width: 90,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'CGPA',
                            width: 90,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Pengkhususan',
                            width: 100,
                            textAlign: 'center',
                            autoHide: true,
                        },
                        {
                            field: 'Major Pengkhususan',
                            width: 90,
                            textAlign: 'center',
                            autoHide: true,
                        },
                        {
                            field: 'Minor Pengkhususan',
                            width: 90,
                            textAlign: 'center',
                            autoHide: true,
                        },
                        {
                            field: 'Bidang',
                            width: 90,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        // {
                        //     field: 'Status',
                        //     title: 'Status',
                        //     width: 100,
                        //     sortable: true,
                        //     autoHide: false,
                        //     textAlign: 'center',
                        //     template: function (row) {
                        //         var status = {
                        //             Dihantar: {
                        //                 'title': 'Dihantar',
                        //                 'class': 'w-100 label label-xl label-light-info',
                        //             },
                        //             Disahkan: {
                        //                 'title': 'Disahkan',
                        //                 'class': 'w-100 label label-xl label-light-success',
                        //             },
                        //             Diluluskan: {
                        //                 'title': 'Diluluskan',
                        //                 'class': 'w-100 label label-xl label-light-primary',
                        //             },
                        //             Ditolak: {
                        //                 'title': 'Ditolak',
                        //                 'class': 'w-100 label label-xl label-light-danger',
                        //             },
                        //         };
                        //         return '<span class="label label-lg font-weight-bold label-inline ' +
                        //             status[row.Status].class + '">' + status[row.Status].title +
                        //             '</span>';
                        //     }
                        // },
                        {
                            field: 'Tindakan',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            //width: 90,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_pendTinggi_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_pendSekolah').KTDatatable({
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
                            field: 'Nama Sekolah',
                            autoHide: false,
                            sortable: false,
                            width: 250,
                        },
                        {
                            field: 'Tahap',
                            width: 60,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: true,
                        },
                        {
                            field: 'Tahun Mula',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tahun Akhir',
                            width: 80,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Bidang',
                            width: 100,
                            textAlign: 'center',
                            autoHide: true,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        // {
                        //     field: 'Status',
                        //     title: 'Status',
                        //     width: 100,
                        //     sortable: true,
                        //     autoHide: false,
                        //     textAlign: 'center',
                        //     template: function (row) {
                        //         var status = {
                        //             Dihantar: {
                        //                 'title': 'Dihantar',
                        //                 'class': 'w-100 label label-xl label-light-info',
                        //             },
                        //             Disahkan: {
                        //                 'title': 'Disahkan',
                        //                 'class': 'w-100 label label-xl label-light-success',
                        //             },
                        //             Diluluskan: {
                        //                 'title': 'Diluluskan',
                        //                 'class': 'w-100 label label-xl label-light-primary',
                        //             },
                        //             Ditolak: {
                        //                 'title': 'Ditolak',
                        //                 'class': 'w-100 label label-xl label-light-danger',
                        //             },
                        //         };
                        //         return '<span class="label label-lg font-weight-bold label-inline ' +
                        //             status[row.Status].class + '">' + status[row.Status].title +
                        //             '</span>';
                        //     }
                        // },
                        {
                            field: 'Tindakan',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            //width: 90,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_pendSekolah_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_pendTinggi_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_pendTinggi_search_status').selectpicker();

                $('#kt_datatable_pendSekolah_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_pendSekolah_search_status').selectpicker();
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
@endsection