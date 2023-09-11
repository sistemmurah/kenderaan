{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--begin::Subheader-->

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <!-- Title CArd : Maklumat Baki Tuntutan Tahun 2020-->
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-tooth text-dark"></i>&nbsp;&nbsp;Maklumat Baki Tuntutan Tahun
                    2020</h3>
            </div>

            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm text-dark"></i>
                </a>
            </div>
        </div>
        <!-- END Title CArd :Maklumat Baki Tuntutan Tahun 2020-->

        <div class="card-body">
            <div class="col-lg-4">
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="border-top-0"><label><b>Jumlah Kelayakan Tahunan (RM)</b></label></td>
                        <td class="border-top-0"><label><b>:</b></label></td>
                        <td class="border-top-0"><label><b>500</b></label></td>
                    </tr>
                    <tr>
                        <td class="border-top-0"><label><b>Jumlah Yang Telah Dituntut (RM)</b></label></td>
                        <td class="border-top-0"><label><b>:</b></label></td>
                        <td class="border-top-0"><label><b>330</b></label></td>
                    </tr>
                    <tr>
                        <td class="border-top-0"><label><b>Jumlah Baki (RM)</b></label></td>
                        <td class="border-top-0"><label><b>:</b></label></td>
                        <td class="border-top-0"><label><b>170</b></label></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <br/>
    <!--end::Card-->
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <!-- Title CArd : Maklumat Baki Tuntutan Tahun 2019-->
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-tooth text-dark"></i>&nbsp;&nbsp;Maklumat Baki Tuntutan Tahun
                    2019</h3>
            </div>

            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm text-dark"></i>
                </a>
            </div>
        </div>
        <!-- END Title CArd :Maklumat Baki Tuntutan Tahun 2019-->

        <div class="card-body">
            <div class="col-lg-4">
                <table class="table" id="kt_datatable">
                    <tbody>
                    <tr>
                        <td class="border-top-0"><label><b>Jumlah Kelayakan Tahunan (RM)</b></label></td>
                        <td class="border-top-0"><label><b>:</b></label></td>
                        <td class="border-top-0"><label><b>500</b></label></td>
                    </tr>
                    <tr>
                        <td class="border-top-0"><label><b>Jumlah Yang Telah Dituntut (RM)</b></label></td>
                        <td class="border-top-0"><label><b>:</b></label></td>
                        <td class="border-top-0"><label><b>160</b></label></td>
                    </tr>
                    <tr>
                        <td class="border-top-0"><label><b>Jumlah Baki (RM)</b></label></td>
                        <td class="border-top-0"><label><b>:</b></label></td>
                        <td class="border-top-0"><label><b>340</b></label></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end::Card-->
    <br />
    <!-- Mula: Senarai Permohonan Tuntutan-->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Senarai Permohonan Tuntutan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Permohonan Tuntutan Pergigian">
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
                                    <select class="form-control" id="kt_datatable_mohonTuntutan_search_status">
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
                                   id="kt_datatable_mohonTuntutan_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_mohonTuntutan">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">No Rujukan</th>
                    <th title="Field #3">Tarikh Mohon</th>
                    <th title="Field #4">Tarikh Rawatan</th>
                    <th title="Field #5">Penerima Rawatan</th>
                    <th title="Field #6">Jumlah Tuntutan Rawatan (RM)</th>
                    <th title="Field #7">Status</th>
                    <th title="Field #8">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>ADCK07202000025</td>
                    <td>06/01/2020</td>
                    <td>06/01/2020</td>
                    <td>NORAINI BTE RAMLI</td>
                    <td>330.0</td>
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
                <tr>
                    <td>2</td>
                    <td>ADCK07201901314</td>
                    <td>08/07/2019</td>
                    <td>19/06/2019</td>
                    <td>NORAINI BTE RAMLI</td>
                    <td>160.0</td>
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
                <tr>
                    <td>3</td>
                    <td>ADCK07201802253</td>
                    <td>16/12/2018</td>
                    <td>10/11/2018</td>
                    <td>NORAINI BTE RAMLI</td>
                    <td>75.0</td>
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
    <!-- Tamat: Senarai Permohonan Tuntutan -->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_mohonTuntutan').KTDatatable({
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
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 125,
                        },
                        {
                            field: 'Tarikh Mohon',
                            width: 75,
                            textAlign: 'left',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Rawatan',
                            width: 75,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Penerima Rawatan',
                            width: 100,
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jumlah Tuntutan Rawatan (RM)',
                            width: 70,
                            sortable: false,
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
                        input: $('#kt_datatable_mohonTuntutan_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_mohonTuntutan_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_mohonTuntutan_search_status').selectpicker();
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