{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Perkhidmatan Dalam UTM-->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Perkhidmatan Dalam UTM
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
            <div class="mb-5">
                <div class="row align-items-center">

                    <div class="col-md-9">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="kt_datatable_sejKhidmatUtm_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_sejKhidmatUtm">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Tarikh Mula Kuatkuasa</th>
                    <th title="Field #3">Jawatan</th>
                    <th title="Field #4">PTJ</th>
                    <th title="Field #5">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>25/06/2010</td>
                    <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                    <td>UTM DIGITAL</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>25/12/2014</td>
                    <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                    <td>UTM DIGITAL</td>
                    <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>08/11/2015</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                    <td>UTM DIGITAL</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>08/12/2017</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                    <td>UTM DIGITAL</td>
                    <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>08/02/2020</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                    <td>UTM DIGITAL</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>08/02/2020</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                    <td>UTM DIGITAL</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Perkhidmatan Dalam UTM-->

    <!-- Mula: Senarai Perkhidmatan Luar UTM-->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Perkhidmatan Luar UTM
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
            <div class="mb-5">
                <div class="row align-items-center">

                    <div class="col-md-9">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="kt_datatable_sejKhidmatLuar_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_sejKhidmatLuar">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Jawatan</th>
                    <th title="Field #3">Majikan</th>
                    <th title="Field #4">Tarikh Lantikan</th>
                    <th title="Field #5">Tarikh Tamat</th>
                    <th title="Field #6">Taraf Pekerjaan</th>
                    <th title="Field #7">Tarikh Kemaskini</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengaturcara (Programmer)</td>
                    <td>Smart Brain Sdn Bhd</td>
                    <td>20/01/2004</td>
                    <td>25/06/2010</td>
                    <td>TETAP</td>
                    <td>26/06/2010</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Perkhidmatan Luar UTM-->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_sejKhidmatUtm').KTDatatable({
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
                        sortable: true,
                        autoHide: false,
                    },
                        {
                            field: 'Tarikh Mula Kuatkuasa',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: true,
                            width: 80,
                        },
                        {
                            field: 'Jawatan',
                            width: 250,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'PTJ',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Keterangan',
                            width: 250,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_sejKhidmatUtm_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_sejKhidmatLuar').KTDatatable({
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
                            field: 'Nama Jawatan',
                            autoHide: false,
                            sortable: false,
                            width: 200,
                        },
                        {
                            field: 'Majikan',
                            width: 150,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Lantikan',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Tamat',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Taraf Pekerjaan',
                            width: 80,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_sejKhidmatLuar_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_sejKhidmatUtm_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_sejKhidmatUtm_search_status').selectpicker();

                $('#kt_datatable_sejKhidmatLuar_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_sejKhidmatLuar_search_status').selectpicker();
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