{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Pakaian Seragam -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Pakaian Seragam
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Pakaian Seragam">
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
                                    <select class="form-control" id="kt_datatable_pakaianSeragam_search_status">
                                        <option value="">Semua</option>
                                        <option value="AKTIF">AKTIF</option>
                                        <option value="TIDAKAKTIF">TIDAK AKTIF</option>
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
                                   id="kt_datatable_pakaianSeragam_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_pakaianSeragam">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Tahun</th>
                    <th title="Field #3">Kod</th>
                    <th title="Field #4">Jenis</th>
                    <th title="Field #5">Bil Peruntukan</th>
                    <th title="Field #6">Bil Pengambilan</th>
                    <th title="Field #7">Tarikh Pengambilan</th>
                    <th title="Field #8">Status</th>
                    <th title="Field #9">Tarikh Kemaskini</th>
                    <th title="Field #10">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>2018</td>
                    <td>KKK07</td>
                    <td>Kemeja Lengan Pendek Kuning, Kolar dan Pipping Maroon</td>
                    <td>2</td>
                    <td>2</td>
                    <td>25/04/2018</td>
                    <td>AKTIF</td>
                    <td>25/06/2018</td>
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
                <tr>
                    <td>2</td>
                    <td>2018</td>
                    <td>KKK08</td>
                    <td>Seluar Panjang Hitam</td>
                    <td>2</td>
                    <td>2</td>
                    <td>25/04/2018</td>
                    <td>AKTIF</td>
                    <td>25/06/2018</td>
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
    <!-- Tamat: Senarai Pakaian Seragam -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_pakaianSeragam').KTDatatable({
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
                            width: 50,
                        },
                        {
                            field: 'Kod',
                            width: 50,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: true,
                        },
                        {
                            field: 'Jenis',
                            width: 150,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Bil Peruntukan',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: true,
                        },
                        {
                            field: 'Bil Pengambilan',
                            width: 90,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Pengambilan',
                            width: 90,
                            textAlign: 'center',
                            sortable: true,
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
                                    AKTIF: {
                                        'title': 'AKTIF',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    TIDAKAKTIF: {
                                        'title': 'TIDAK AKTIF',
                                        'class': 'w-100 label label-xl label-light-danger',
                                    },
                                };
                                return '<span class="label label-lg font-weight-bold label-inline ' +
                                    status[row.Status].class + '">' + status[row.Status].title +
                                    '</span>';
                            }
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            autoHide: true,
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
                        input: $('#kt_datatable_pakaianSeragam_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_pakaianSeragam_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_pakaianSeragam_search_status').selectpicker();
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