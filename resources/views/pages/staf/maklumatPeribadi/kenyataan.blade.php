{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-address-book"></i> Kelayakan Cuti</h3>
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
            <!--begin: page content-->
            <form class="form">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Cuti Rehat</label>
                            <input name="ctl00$MyContentPlaceHolder$trkTutupIklan" type="text"
                                   id="MyContentPlaceHolder_trkTutupIklan" class="form-control"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Cuti Tahunan</label>
                            <input name="ctl00$MyContentPlaceHolder$trkTutupIklan" type="text"
                                   id="MyContentPlaceHolder_trkTutupIklan" class="form-control"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Cuti Bawa Hadapan</label>
                            <input name="ctl00$MyContentPlaceHolder$trkTutupIklan" type="text"
                                   id="MyContentPlaceHolder_trkTutupIklan" class="form-control"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Baki Cuti</label>
                            <input name="ctl00$MyContentPlaceHolder$trkTutupIklan" type="text"
                                   id="MyContentPlaceHolder_trkTutupIklan" class="form-control"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Pegawai Penyokong </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlIklan" id="MyContentPlaceHolder_ddlIklan"
                                    class="form-control">
                                <option value="">Siti Rashidah</option>
                                <option value="">2019/2020 - 1</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Pegawai Pelulus </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlIklan" id="MyContentPlaceHolder_ddlIklan"
                                    class="form-control">
                                <option value="">Siti Rashidah</option>
                                <option value="">2019/2020 - 1</option>
                            </select>
                        </div>
                    </div>

                </div>
            </form>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!-- Mula: Senarai Sejarah Cuti -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-history"></i>
                    Senarai Sejarah Cuti
                </h3>
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
                                    <select class="form-control" id="kt_datatable_sejCuti_search_status">
                                        <option value="">Semua</option>
                                        <option value="Hantar">Dihantar</option>
                                        <option value="Sah">Disahkan</option>
                                        <option value="Lulus">Diluluskan</option>
                                        <option value="Tolak">Ditolak</option>
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
                                   id="kt_datatable_sejCuti_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_sejCuti">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Tarikh Mohon</th>
                    <th title="Field #3">Tarikh Cuti</th>
                    <th title="Field #4">Catatan</th>
                    <th title="Field #5">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>18/6/2020</td>
                    <td>21/06/2020 - 22/06/2020</td>
                    <td>Cuti Hari Raya</td>
                    <td>Lulus</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Sejarah Cuti -->

    <!-- Mula: Senarai Pegawai Penyokong (Subordinate) -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-support"></i>
                    Senarai Pegawai Penyokong (Subordinate)
                </h3>
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
                                    <select class="form-control" id="kt_datatable_pegawaiPenyokong_search_status">
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
                                   id="kt_datatable_pegawaiPenyokong_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_pegawaiPenyokong">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nombor Pekerja</th>
                    <th title="Field #3">Nama</th>
                    <th title="Field #4">Tarikh Cuti</th>
                    <th title="Field #5">Status</th>
                    <th title="Field #5">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>6957</td>
                    <td>Siti Rashidah</td>
                    <td>26/07/2020 - 28/07/2020</td>
                    <td>Dihantar</td>
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
    <!-- Tamat: Senarai Pegawai Penyokong (Subordinate) -->

    <!-- Mula: Senarai Pergerakan Staf -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-walking"></i>
                    Senarai Pergerakan Staf
                </h3>
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
                                   id="kt_datatable_pergerakanStaf_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_pergerakanStaf">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Tarikh Mula</th>
                    <th title="Field #3">Tarikh Tamat</th>
                    <th title="Field #4">Hari</th>
                    <th title="Field #5">Kod</th>
                    <th title="Field #5">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>14/01/2020</td>
                    <td>14/01/2020</td>
                    <td>1</td>
                    <td>LZ</td>
                    <td>Sesi perkongsian nombor pendaftaran khas & demo</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Mula: Senarai Pergerakan Staf -->

@endsection

{{-- Scripts Section --}}
@section('scripts')

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_sejCuti').KTDatatable({
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
                            field: 'Tarikh Mohon',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 90,
                        },
                        {
                            field: 'Tarikh Cuti',
                            width: 180,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Catatan',
                            width: 250,
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
                                    Hantar: {
                                        'title': 'Dihantar',
                                        'class': 'w-100 label label-xl label-light-info',
                                    },
                                    Sah: {
                                        'title': 'Disahkan',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    Lulus: {
                                        'title': 'Diluluskan',
                                        'class': 'w-100 label label-xl label-light-primary',
                                    },
                                    Tolak: {
                                        'title': 'Ditolak',
                                        'class': 'w-100 label label-xl label-light-danger',
                                    },
                                };
                                return '<span class="label label-lg font-weight-bold label-inline ' +
                                    status[row.Status].class + '">' + status[row.Status].title +
                                    '</span>';
                            }
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_sejCuti_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable2 = $('#kt_datatable_pegawaiPenyokong').KTDatatable({
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
                            field: 'Nombor Pekerja',
                            autoHide: false,
                            sortable: false,
                            textAlign: 'center',
                            width: 60,
                        },
                        {
                            field: 'Nama',
                            width: 250,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Cuti',
                            width: 180,
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
                        input: $('#kt_datatable_pegawaiPenyokong_search_query'),
                        key: 'generalSearch'
                    },
                });

                var datatable3 = $('#kt_datatable_pergerakanStaf').KTDatatable({
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
                            field: 'Tarikh Mula',
                            autoHide: false,
                            sortable: false,
                            textAlign: 'center',
                            width: 90,
                        },
                        {
                            field: 'Tarikh Tamat',
                            width: 90,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Hari',
                            width: 60,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Kod',
                            width: 60,
                            textAlign: 'center',
                            sortable: true,
                            autoHide: false,
                        },
                        {
                            field: 'Keterangan',
                            width: 250,
                            textAlign: 'left',
                            sortable: true,
                            autoHide: false,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_pergerakanStaf_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_sejCuti_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_sejCuti_search_status').selectpicker();

                $('#kt_datatable_pegawaiPenyokong_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_pegawaiPenyokong_search_status').selectpicker();
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