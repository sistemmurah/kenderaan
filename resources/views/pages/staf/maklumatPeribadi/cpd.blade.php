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
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Rekod CPD 3 Tahun Terkini</h3>
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

            <div class="card-deck">

                <div class="card">
                    <button type="button" class="btn px-0 py-0" data-toggle="modal" data-target="#cpdModal">
                        <div class="card-header bg-warning">
                            <h3 class="card-label text-center text-white">2018</h3>
                        </div>
                        <div class="card-body text-center">
                            <h3>66.5</h3>
                            <p class="card-text">Jumlah mata CPD</p>
                        </div>
                    </button>
                </div>


                <div class="card">
                    <button type="button" class="btn px-0 py-0" data-toggle="modal" data-target="#cpdModal">
                        <div class="card-header bg-primary">
                            <h3 class="card-label text-center text-white">2019</h3>
                        </div>
                        <div class="card-body text-center">
                            <h3>73.8</h3>
                            <p class="card-text">Jumlah mata CPD</p>
                        </div>
                    </button>
                </div>


                <div class="card" href="#exampleModal">
                    <button type="button" class="btn px-0 py-0" data-toggle="modal" data-target="#cpdModal">
                        <div class="card-header bg-success">
                            <h3 class="card-label text-center text-white">2020</h3>
                        </div>
                        <div class="card-body text-center">
                            <h3>32.9</h3>
                            <p class="card-text">Jumlah mata CPD</p>
                        </div>
                    </button>
                </div>

            </div>

            <!--begin::The Modal-->
            <div class="modal fade" id="cpdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Maklumat CPD Tahun 2018</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            {{-- <img src="~/assets/media/peribadi/CPD.JPG" alt="CPD" class="img-fluid"/>--}}

                            <div class="mb-5">
                                <div class="row align-items-center">
                                    <div class="col-md-9">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Cari"
                                                   id="kt_datatable_infoCPD_search_query"/>
                                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mula: Datatable-->
                            <table class="table table-bordered">
                                <thead style="background-color:#fcf4a3">
                                <tr>
                                    <th>Bil</th>
                                    <th>Kod Pelaksanaan Kursus</th>
                                    <th style="text-align: center">Tajuk</th>
                                    <th style="text-align: center">Jenis</th>
                                    <th>Peringkat</th>
                                    <th>Tahun Laksana</th>
                                    <th style="text-align: center">Tarikh Mula</th>
                                    <th style="text-align: center">Tarikh Tamat</th>
                                    <th>Mata CPD</th>
                                </tr>
                                </thead>
                                <tbody id="myDataTable">
                                <tr>
                                    <td>1</td>
                                    <td>AP/2020/3/00017/2020/01</td>
                                    <td>KNOWLEDGE SHARING SESSION - METAPHOR ANALYSIS PART 1</td>
                                    <td>KEPIMPINAN AKADEMIK</td>
                                    <td style="text-align: center">3</td>
                                    <td style="text-align: center">2020</td>
                                    <td>05/08/2020</td>
                                    <td>05/08/2020</td>
                                    <td>23.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>E/2020/1/01701/2020/01</td>
                                    <td>BOOK SHARING@UTMKL 2020 SIRI 11</td>
                                    <td>KURSUS/TAKLIMAT/BENGKEL/LATIHAN/SEMINAR KHAS</td>
                                    <td style="text-align: center">1</td>
                                    <td style="text-align: center">2020</td>
                                    <td>05/08/2020</td>
                                    <td>05/08/2020</td>
                                    <td>3.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- Tamat: Datatable-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::The Modal-->

            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_infoCPD').KTDatatable({
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
                            field: 'Kod Pelaksanaan Kursus',
                            textAlign: 'left',
                            autoHide: false,
                            sortable: false,
                            width: 100,
                        },
                        {
                            field: 'Tajuk',
                            width: 100,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jenis',
                            width: 100,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Peringkat',
                            width: 65,
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tahun Laksana',
                            width: 60,
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Mula',
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
                            field: 'Mata CPD Dapat',
                            width: 50,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_infoCPD_search_query'),
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

    {{--    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>--}}
    {{--    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection