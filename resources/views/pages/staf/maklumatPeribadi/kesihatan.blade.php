{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!-- Mula: Senarai Klinik -->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Klinik
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Klinik Panel">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Rekod
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
                                    <select class="form-control" id="kt_datatable_infoKlinik_search_status">
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
                                   id="kt_datatable_infoKlinik_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoKlinik">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Klinik</th>
                    <th title="Field #3">Alamat Klinik</th>
                    <th title="Field #4">Telefon</th>
                    <th title="Field #5">Tarikh Mula</th>
                    <th title="Field #6">Tarikh Tamat</th>
                    <th title="Field #7">Status</th>
                    <th title="Field #8">Tarikh Kemaskini</th>
                    <th title="Field #9">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>KLINIK SITI FATIMAH TMN U</td>
                    <td>No.4 JALAN KEBANGSAAN 18,TMN UNIVERSITI</td>
                    <td>075207630</td>
                    <td>25/06/2010</td>
                    <td>25/06/2020</td>
                    <td>AKTIF</td>
                    <td>25/06/2019</td>
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
                    <td>KLINIK ALAM SHIFA</td>
                    <td>No.4 JALAN PULAI 3, KANGKAR PULAI</td>
                    <td>075203110</td>
                    <td>25/06/2010</td>
                    <td>25/06/2020</td>
                    <td>AKTIF</td>
                    <td>25/06/2019</td>
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
                    <td>KLINIK POLIKLINIK SRI PULAI</td>
                    <td>No.4 JALAN MERANTI 2,TMN SRI PULAI</td>
                    <td>075204578</td>
                    <td>25/06/2010</td>
                    <td>25/06/2020</td>
                    <td>TIDAKAKTIF</td>
                    <td>25/06/2019</td>
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
    <!-- Tamat: Senarai Klinik -->
    <!-- Mula: Senarai Tuntutan Rawatan Pergigian -->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Tuntutan Rawatan Pergigian
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Tuntutan Rwatan Pergigian">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Rekod
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
                                    <select class="form-control" id="kt_datatable_infoTuntutan_search_status">
                                        <option value="">Semua</option>
                                        <option value="LULUS">LULUS</option>
                                        <option value="TIDAKLULUS">TIDAK LULUS</option>
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
                                   id="kt_datatable_infoTuntutan_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoTuntutan">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">No Rujukan</th>
                    <th title="Field #3">Tarikh Mohon</th>
                    <th title="Field #4">Penerima Rawatan</th>
                    <th title="Field #5">Jumlah Tuntutan (RM)</th>
                    <th title="Field #6">Tarikh Rawatan</th>
                    <th title="Field #7">Status</th>
                    <th title="Field #8">Tarikh Kemaskini</th>
                    <th title="Field #9">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>ADCJ202000556</td>
                    <td>20/06/2019</td>
                    <td>SITI RASHIDAH BINTI HASHIM</td>
                    <td>60.00</td>
                    <td>25/06/2019</td>
                    <td>LULUS</td>
                    <td>25/06/2019</td>
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
    <!-- Tamat: Senarai Tuntutan Rawatan Pergigian -->
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fa fa-heart"></i>&nbsp;&nbsp;Maklumat Kesihatan
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
            <!--begin: page content-->
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Berat Badan (kg) <span style="color:Red;">*</span></label>
                    <input type="text" class="form-control" name="" value="" required="required" disabled="disabled"
                     placeholder="Berat Badan (kg)"/>
                </div>
                <div class="col-lg-6">
                    <label>Tinggi<span style="color:Red;">*</span></label>
                    <input type="text" class="form-control" name="" value="" required="required" disabled="disabled"
                    placeholder="Tinggi"/>
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-lg-6">
                    <label class="control-label" for="idBMI_label">BMI</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="" value="" required="required"
                               disabled="disabled" placeholder="BMI"/>
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#myModal">
                                SKALA
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label>Jenis Darah<span style="color:Red;">*</span></label>
                    <input type="text" class="form-control" name="JENIS_DARAH" value="" required="required"
                           disabled="disabled" placeholder="Jenis Darah"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Kecacatan <span style="color:Red;">*</span></label>
                    <input type="text" class="form-control" name="KECACATAN_FK" value="" required="required"
                           disabled="disabled" placeholder="Kecacatan"/>
                </div>
                <div class="col-lg-6">
                    <label>Sekiranya OKU, sila masukkan no.Ahli OKU <span style="color:Red;">*</span></label>
                    <input type="text" class="form-control" name="NO_OKU" value="" required="required"
                           disabled="disabled" placeholder="No.Ahli OKU"/>

                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <!-- Mula: Senarai Penyakit Kronik -->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Penyakit Kronik
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Tambah Maklumat Penyakit Kronik">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Rekod
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
                                    <select class="form-control" id="kt_datatable_infoKlinik_search_status">
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
                                   id="kt_datatable_infoPenyakit_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoPenyakit">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Penyakit Kronik</th>
                    <th title="Field #3">Catatan</th>
                    <th title="Field #4">Tarikh Kemaskini</th>
                    <th title="Field #5">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>ASTHMA</td>
                    <td>KETURUNAN</td>
                    <td>25/06/2019</td>
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
    <!-- Tamat: Senarai Penyakit Kronik -->

    <!-- begin::The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #FFA800; text-align:center;">
                    <div class="row" style="text-align:center;">
                        <div class="col-lg-12" style="text-align:center;">

                            <font color="WHITE" style="text-align: center">
                                <span class="modal-title" style="text-align:center;">BMI Scale Categories</span>
                            </font>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span style="font-size:14px;">X</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table class="table table-bordered table-hover table-checkable mt-10">
                        <thead style="background-color:red;">
                        <tr>
                            <th>Kategori</th>
                            <th>Skala</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Very severely underweight</td>
                            <td>Less than 15</td>

                        </tr>

                        <tr>
                            <td>Severely underweight</td>
                            <td>From 15.0 to 16.0</td>

                        </tr>

                        <tr>
                            <td>Underweight</td>
                            <td>From 16.0 to 18.5</td>

                        </tr>

                        <tr>
                            <td>Normal (healthy weight)</td>
                            <td>From 18.5 to 25.0</td>

                        </tr>

                        <tr>
                            <td>Overweight</td>
                            <td>From 18.5 to 25.0</td>
                        </tr>
                        <tr>
                            <td>Obese Class I (Moderately obese)</td>
                            <td>From 18.5 to 25.0N</td>
                        </tr>
                        <tr>
                            <td>Obese Class II (Severely obese)</td>
                            <td>From 18.5 to 25.0</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->


                </div>
            </div>

        </div>
    </div>
    <!-- end:: The Modal-->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_infoKlinik').KTDatatable({
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
                            field: 'Nama Klinik',
                            textAlign: 'left',
                            autoHide: false,
                            sortable: false,
                            width: 100,
                        },
                        {
                            field: 'Alamat Klinik',
                            width: 200,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Telefon',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: true,
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
                            sortable: true,
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
                        input: $('#kt_datatable_infoKlinik_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_infoTuntutan').KTDatatable({
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
                            autoHide: false,
                            sortable: false,
                            width: 110,
                        },
                        {
                            field: 'Tarikh Mohon',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: true,
                        },
                        {
                            field: 'Penerima Rawatan',
                            width: 170,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jumlah Tuntutan (RM)',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Rawatan',
                            width: 80,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: true,
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
                                    LULUS: {
                                        'title': 'LULUS',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    TIDAKLULUS: {
                                        'title': 'TIDAK LULUS',
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
                        input: $('#kt_datatable_infoTuntutan_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable3 = $('#kt_datatable_infoPenyakit').KTDatatable({
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
                            field: 'Nama Penyakit Kronik',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'Catatan',
                            width: 150,
                            textAlign: 'left',
                            sortable: false,
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
                        input: $('#kt_datatable_infoPenyakit_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_infoKlinik_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_infoKlinik_search_status').selectpicker();

                $('#kt_datatable_infoTuntutan_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_infoTuntutan_search_status').selectpicker();
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