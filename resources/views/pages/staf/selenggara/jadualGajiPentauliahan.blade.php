{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!--begin::Carian-->
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fa fa-search"></i>&nbsp;&nbsp;Carian</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">
            <!--begin: page content-->
            <div class="row">
                <div class="col-lg-4">
                    <label class="col-sm-12 required" for="KOD_JAWATAN">Kod Jawatan UTM </label>
                    <select class="form-control col-sm-12" id="IdItemKodUTM" name="KOD_JAWATAN" disabled="disabled">
                        <option value="FA41A">FA41A</option>
                        <option value="">Sila Pilih</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label class="col-sm-12 required" for="FLAG">Kampus </label>
                    <select class="form-control col-sm-12" id="IdItemKampus" name="FLAG" disabled="disabled">
                        <option value="J">JOHOR BAHRU</option>
                        <option value="">Sila Pilih</option>
                        <option value="K">KUALA LUMPUR</option>
                        <option value="P">PAGOH</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label class="col-sm-12" for="SISTEM_SARAAN">Sistem Saraan </label>
                    <select class="form-control col-sm-12" id="IdItemSistSaraan" name="SISTEM_SARAAN" disabled="disabled">
                        <option value="4">EMPAT</option>
                        <option value="">Sila Pilih</option>
                        <option value="1">SATU</option>
                        <option value="2">DUA</option>
                        <option value="3">TIGA</option>
                    </select>
                </div>
                <!--begin::Button-->
                <div class="col-lg-2">
                    <label>&nbsp;</label>
                    <div class="col-lg-12 thcenter">
                        <button type="button" id="IdButangSearch" class="btn btn-primary" style="width:100%;"><span
                                    class="fa fa-search fa-sm"></span> Cari
                        </button>
                    </div>
                    <div class="col-lg-5 thcenter">&nbsp;</div>
                    <!--end::Button-->
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <!--end::Carian-->
    <br />
    <!-- Mula: Senarai Gaji -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Gaji
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Gaji Merujuk Kepada Kod Jawatan" disabled="disabled">
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
                                   id="kt_datatable_infoGaji_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoGaji">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Peringkat</th>
                    <th title="Field #3">Tangga Min</th>
                    <th title="Field #4">Tangga Max</th>
                    <th title="Field #5">Gaji Min</th>
                    <th title="Field #6">Gaji Max</th>
                    <th title="Field #7">Kadar Naik Gaji</th>
                    <th title="Field #8">Kadar Naik Max</th>
                    <th title="Field #9">Tarikh Mula</th>
                    <th title="Field #10">Tarikh Tamat</th>
                    <th title="Field #11">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>P6</td>
                    <td>T00</td>
                    <td>T99</td>
                    <td>2,145.88</td>
                    <td>9,618.00</td>
                    <td>225</td>
                    <td>288.00</td>
                    <td>01/07/2016</td>
                    <td>31/12/9999</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary" disabled="disabled">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9" disabled="disabled">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Gaji -->

    <!-- Mula: Senarai Elaun -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Elaun
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Elaun Merujuk Kepada Kod Jawatan" disabled="disabled">
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
                                   id="kt_datatable_infoElaun_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoElaun">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Keterangan Elaun</th>
                    <th title="Field #3">Jumlah</th>
                    <th title="Field #4">Tarikh Mula</th>
                    <th title="Field #5">Tarikh Tamat</th>
                    <th title="Field #6">Jenis Bayaran</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>002 - ELAUN KHIDMAT AWAM</td>
                    <td>300</td>
                    <td>01/07/2016</td>
                    <td>31/12/9999</td>
                    <td>Cheque</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary" disabled="disabled">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9" disabled="disabled">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>003 - IMBUHAN TETAP PERUMAHAN</td>
                    <td>300</td>
                    <td>01/11/2015</td>
                    <td>31/12/9999</td>
                    <td>Cheque</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary" disabled="disabled">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9" disabled="disabled">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Elaun -->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_infoGaji').KTDatatable({
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
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Peringkat',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 70,
                        },
                        {
                            field: 'Tangga Min',
                            width: 60,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tangga Max',
                            width: 60,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Gaji Min',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Gaji Max',
                            width: 70,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Kadar Naik Gaji',
                            width: 60,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Kadar Naik Max',
                            width: 60,
                            textAlign: 'center',
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Mula',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: true,
                        },
                        {
                            field: 'Tarikh Tamat',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
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
                        input: $('#kt_datatable_infoGaji_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_infoElaun').KTDatatable({
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
                            field: 'Keterangan Elaun',
                            autoHide: false,
                            sortable: false,
                            width: 220,
                        },
                        {
                            field: 'Jumlah',
                            width: 50,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tahun Mula',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tahun Tamat',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Jenis Bayaran',
                            width: 70,
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
                        input: $('#kt_datatable_infoElaun_search_query'),
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

{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>--}}
{{--    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>--}}
{{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection