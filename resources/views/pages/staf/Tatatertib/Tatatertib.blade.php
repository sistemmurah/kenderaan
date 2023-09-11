{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Senarai Permohon Permit -->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Rekod Tatatertib
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
                                <select class="form-control" id="kt_datatable_permit_search_status">
                                    <option value="">Semua</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Selesai">Selesai</option>
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
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">No Rujukan</th>
                    <th title="Field #3">Nama</th>
                    <th title="Field #4">Jabatan</th>
                    <th title="Field #5">Tarikh</th>
                    <th title="Field #6">Status</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>JS/20202021/01907</td>
                    <td>Mazwan Hishammuddin Bin Shamsudin</td>
                    <td>Bendahari</td>
                    <td>25/01/2021</td>
                    <td>Baru</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.tatatertib.rekodTatatertib') }}'"
                            type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JS/20202021/00953</td>
                    <td>Mazwan Hishammuddin Bin Shamsudin</td>
                    <td>Bendahari</td>
                    <td>05/11/2020</td>
                    <td>Baru</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.tatatertib.rekodTatatertib') }}'"
                            type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-xs btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>PS/20202021/01005</td>
                    <td>Mazwan Hishammuddin Bin Shamsudin</td>
                    <td>Bendahari</td>
                    <td>15/01/2021</td>
                    <td>Selesai</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('staf.tatatertib.rekodTatatertib') }}'"
                            type="button" class="btn btn-xs btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
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
<!-- Tamat: Senarai Permohon Permit -->


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
                        width: 150,
                    },
                    {
                        field: 'Nama',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 250,
                    },
                    {
                        field: 'Jabatan',
                        width: 115,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Tarikh',
                        width: 80,
                        textAlign: 'center',
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
                                Baru: {
                                    'title': 'Baru',
                                    'class': 'w-100 label label-xl label-light-warning',
                                },
                                Selesai: {
                                    'title': 'Selesai',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                /*Diluluskan: {
                                    'title': 'Diluluskan',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                Ditolak: {
                                    'title': 'Ditolak',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },*/
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
                        width: 90,
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