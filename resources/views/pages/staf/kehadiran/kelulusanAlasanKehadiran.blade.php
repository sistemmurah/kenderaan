{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Rekod Kehadiran -->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Rekod Kesalahan
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
                                <select class="form-control" id="kt_datatable_permit_search_status">
                                    <option value="">Semua</option>
                                    <option value="Bulan">Bulan</option>
                                    <option value="Hari">Hari</option>
                                    <option value="Isu">Isu</option>
                                    <!--<option value="Diluluskan">Diluluskan</option>
                                    <option value="Ditolak">Ditolak</option>-->
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
                            id="kt_datatable_permit_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_permit">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Tarikh</th>
                    <th title="Field #2">Hari</th>
                    <th title="Field #3">WBB</th>
                    <th title="Field #4">Masuk</th>
                    <th title="Field #5">Keluar</th>
                    <th title="Field #6">Fleksi</th>
                    <th title="Field #7">Lewat</th>
                    <th title="Field #8">Kehilangan Masa</th>
                    <th title="Field #9">Isu</th>
                    <th title="Field #10">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>25/01/21</td>
                    <td>Isnin</td>
                    <td>WBB2</td>
                    <td>08:07:23</td>
                    <td>17:32:44</td>
                    <td>0</td>
                    <td>00:07</td>
                    <td>00:07</td>
                    <td>ML</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.kehadiran.rekodKehadiranStaf') }}'"
                        type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Papar Maklumat"></i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>25/01/21</td>
                    <td>Selasa</td>
                    <td>WBB2</td>
                    <td>08:07:23</td>
                    <td>17:32:44</td>
                    <td>0</td>
                    <td>00:07</td>
                    <td>00:07</td>
                    <td>ML</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.kehadiran.rekodKehadiranStaf') }}'"
                        type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Papar Maklumat"></i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>25/01/21</td>
                    <td>Rabu</td>
                    <td>WBB2</td>
                    <td>08:07:23</td>
                    <td>17:32:44</td>
                    <td>0</td>
                    <td>00:07</td>
                    <td>00:07</td>
                    <td>ML</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.kehadiran.rekodKehadiranStaf') }}'"
                        type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Papar Maklumat"></i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>25/01/21</td>
                    <td>Khamis</td>
                    <td>WBB2</td>
                    <td>08:07:23</td>
                    <td>17:32:44</td>
                    <td>0</td>
                    <td>00:07</td>
                    <td>00:07</td>
                    <td>ML</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.kehadiran.rekodKehadiranStaf') }}'"
                        type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Papar Maklumat"></i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>25/01/21</td>
                    <td>Jumaat</td>
                    <td>WBB2</td>
                    <td>08:07:23</td>
                    <td>17:32:44</td>
                    <td>0</td>
                    <td>00:07</td>
                    <td>00:07</td>
                    <td>ML</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.kehadiran.rekodKehadiranStaf') }}'"
                        type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Papar Maklumat"></i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Tamat: Datatable-->
    </div>
</div>
<!-- Tamat: Rekod Kehadiran -->

<!-- Mula: Jenis Isu -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Jenis Isu
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

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>TL - Tidak Lengkap</label><br/>
                    <label>ML - Masuk Lewat</label><br/>
                    <label>KA - Keluar Awal</label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>TH - Tidak Hadir</label><br/>
                    <label>TX - Tidak Ganti Fleksi</label><br/>
                    <label>KM - Keluar Masuk</label>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Tamat: Jenis Isu -->


@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- Mula: Script Datatable -->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_permit').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [{
                        field: 'Tarikh',
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                        width: 60,
                    },
                    {
                        field: 'Hari',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 60,
                    },
                    {
                        field: 'WBB',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 50,
                    },
                    {
                        field: 'Masuk',
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                        width: 60,
                    },
                    {
                        field: 'Keluar',
                        textAlign: 'center',
                        autoHide: false,
                        width: 60,
                    },
                    /*{
                        field: 'Status',
                        title: 'Status',
                        width: 100,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var status = {
                                Bulan: {
                                    'title': 'Bulan',
                                    'class': 'w-100 label label-xl label-light-warning',
                                },
                                Hari: {
                                    'title': 'Hari',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Isu: {
                                    'title': 'Isu',
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
                    },*/
                    {
                        field: 'Fleksi',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 40,
                    },
                    {
                        field: 'Lewat',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 40,
                    },
                    {
                        field: 'Kehilangan Masa',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 80,
                    },
                    {
                        field: 'Isu',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 20,
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 80,
                    },
                ],
                
                search: {
                    input: $('#kt_datatable_permit_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_permit_search_status').on('change', function () {
                // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                // alert(regExSearch);
                //alert($(this).val().toLowerCase());
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_permit_search_status').selectpicker();
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
<!-- Tamat: Script Datatable -->

@endsection