{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Peribadi Pasangan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Peribadi Pasangan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Maklumat Peribadi Pasangan">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="kt_datatable_infoPasangan_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoPasangan">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama</th>
                    <th title="Field #3">No Kad Pengenalan</th>
                    <th title="Field #4">Tarikh Lahir</th>
                    <th title="Field #5">Tarikh Meninggal Dunia</th>
                    <th title="Field #6">Hubungan</th>
                    <th title="Field #7">Tarikh Kemaskini</th>
                    <th title="Field #8">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>LADEN BIN OSMAN</td>
                    <td>860525015667</td>
                    <td>25/05/1986</td>
                    <td>-</td>
                    <td>SUAMI</td>
                    <td>01/02/2021</td>
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
                    <td>ASIAH BINTI KASSIM</td>
                    <td>870107095660</td>
                    <td>07/01/1987</td>
                    <td>-</td>
                    <td>ISTERI</td>
                    <td>01/02/2021</td>
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
    <!-- Tamat: Senarai Peribadi Pasangan -->

    <!-- Mula: Senarai Ibu Bapa -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Ibu Bapa
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Maklumat Ibu Bapa">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="kt_datatable_infoIbuBapa_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoIbuBapa">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama</th>
                    <th title="Field #3">No Kad Pengenalan</th>
                    <th title="Field #4">Tarikh Lahir</th>
                    <th title="Field #5">Tarikh Meninggal Dunia</th>
                    <th title="Field #6">Hubungan</th>
                    <th title="Field #7">Tarikh Kemaskini</th>
                    <th title="Field #8">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>OSMAN BIN ADAM</td>
                    <td>471228095237</td>
                    <td>28/12/1947</td>
                    <td>22/11/2020</td>
                    <td>BAPA</td>
                    <td>22/01/2021</td>
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
                    <td>HASIAH BINTI ALI</td>
                    <td>630816115246</td>
                    <td>16/08/1963</td>
                    <td>-</td>
                    <td>IBU</td>
                    <td>22/01/2021</td>
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
    <!-- Tamat: Senarai Ibu Bapa -->

    <!-- Mula: Senarai Anak/Tanggungan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Anak/Tanggungan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Maklumat Anak/Tanggungan">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="kt_datatable_infoAnak_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoAnak">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama</th>
                    <th title="Field #3">No Kad Pengenalan</th>
                    <th title="Field #4">Tarikh Lahir</th>
                    <th title="Field #5">Tarikh Meninggal Dunia</th>
                    <th title="Field #6">Hubungan</th>
                    <th title="Field #7">Tarikh Kemaskini</th>
                    <th title="Field #8">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>ABUBAKAR BIN LADEN</td>
                    <td>100425095237</td>
                    <td>25/04/2010</td>
                    <td>-</td>
                    <td>ANAK</td>
                    <td>01/02/2021</td>
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
    <!-- Tamat: Senarai Anak/Tanggungan  -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_infoPasangan').KTDatatable({
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
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'No Kad Pengenalan',
                            width: 100,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Lahir',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Meninggal Dunia',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Hubungan',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            autoHide: false,
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
                        input: $('#kt_datatable_infoPasangan_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_infoIbuBapa').KTDatatable({
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
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'No Kad Pengenalan',
                            width: 100,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Lahir',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Meninggal Dunia',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Hubungan',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            autoHide: false,
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
                        input: $('#kt_datatable_infoIbuBapa_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable3 = $('#kt_datatable_infoAnak').KTDatatable({
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
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'No Kad Pengenalan',
                            width: 100,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Lahir',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Meninggal Dunia',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Hubungan',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            autoHide: false,
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
                        input: $('#kt_datatable_infoAnak_search_query'),
                        key: 'generalSearch'
                    },
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

{{--    --}}{{-- page scripts --}}
{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/perkhidmatan.js') }}"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/PendidikanTinggi.js') }}" type="text/javascript"></script>--}}

{{--    --}}{{-- vendors --}}
{{--    <script src="{{ asset('js/pages/Scripts/shared/datatables.bundle.js') }}"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection