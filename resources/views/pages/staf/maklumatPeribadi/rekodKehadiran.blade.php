{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Rekod Tahunan -->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Rekod Tahunan
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

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_rekodHadir">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Tahun/Bulan</th>
                    <th title="Field #2">Jan</th>
                    <th title="Field #3">Feb</th>
                    <th title="Field #4">Mac</th>
                    <th title="Field #5">Apr</th>
                    <th title="Field #6">Mei</th>
                    <th title="Field #7">Jun</th>
                    <th title="Field #8">Jul</th>
                    <th title="Field #9">Ogos</th>
                    <th title="Field #10">Sep</th>
                    <th title="Field #11">Okt</th>
                    <th title="Field #12">Nov</th>
                    <th title="Field #13">Dis</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2020</td>
                    <td><a href="">23</a></td>
                    <td><a href="">20</a></td>
                    <td><a href="">22</a></td>
                    <td><a href="">22</a></td>
                    <td><a href="">21</a></td>
                    <td><a href="">22</a></td>
                    <td><a href="">23</a></td>
                    <td><a href="">21</a></td>
                    <td><a href="">22</a></td>
                    <td><a href="">22</a></td>
                    <td><a href="">21</a></td>
                    <td><a href="">23</a></td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Rekod Tahunan -->
    <!-- Mula: Senarai Rekod Kesalahan Kehadiran -->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Rekod Kesalahan Kehadiran
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
            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_rekodSalahHadir">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Tahun</th>
                    <th title="Field #2">DLTA</th>
                    <th title="Field #3">DTS</th>
                    <th title="Field #4">BTS</th>
                    <th title="Field #5">BATA</th>
                    <th title="Field #6">DTS BATA</th>
                    <th title="Field #7">DLTA BTS</th>
                    <th title="Field #8">Tiada Rekod</th>
                    <th title="Field #9">Bil Kesalahan Kehadiran</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="KehadiranLink">2020</a></td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>8</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Rekod Kesalahan Kehadiran -->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_rekodHadir').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    layout: {
                        scroll: true,
                    },

                    pagination: false,

                    columns: [{
                        field: 'Tahun/Bulan',
                        width: 90,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Jan',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 25,
                        },
                        {
                            field: 'Feb',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Mac',
                            width: 30,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Apr',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Mei',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jun',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jul',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Ogos',
                            width: 35,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Sep',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Okt',
                            width: 25,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Nov',
                            width: 28,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Dis',
                            width: 20,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],
                });

                var datatable2 = $('#kt_datatable_rekodSalahHadir').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    layout: {
                        scroll: true,
                    },

                    pagination: false,

                    columns: [{
                        field: 'Tahun',
                        width: 90,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'DLTA',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 35,
                        },
                        {
                            field: 'DTS',
                            width: 35,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'BTS',
                            width: 35,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'BATA',
                            width: 35,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'DTS BATA',
                            width: 35,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'DLTA BTS',
                            width: 35,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tiada Rekod',
                            width: 50,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Bil Kesalahan Kehadiran',
                            width: 70,
                            textAlign: 'center',
                            sortable: false,
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

{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>--}}
{{--    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>--}}
{{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection