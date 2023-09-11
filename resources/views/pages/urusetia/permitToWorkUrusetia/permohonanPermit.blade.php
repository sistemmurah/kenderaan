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
                Senarai Permohonan Permit
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
                    <th title="Field #2">Nama Pemohon</th>
                    <th title="Field #5">Nama Syarikat</th>
                    <th title="Field #6">Alamat Pejabat</th>
                    <th title="Field #7">Status</th>
                    <th title="Field #8">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mazwan Hishammuddin Bin Shamsudin</td>
                    <td>Facundo Pallestri Vision Sdn. Bhd.</td>
                    <td>5/5C, Pavilion Bukit Bintang, KL.</td>
                    <td>Dihantar</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('permitToWorkUrusetia.pengesahanPermit') }}'"
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
                    <td>Nik Nurul Syaridah Binti Nik Ibrahim</td>
                    <td>Chair Red Bear Red & Co.</td>
                    <td>Wisma Mawi, Taman Len Seng, Selangor.</td>
                    <td>Dihantar</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('permitToWorkUrusetia.pengesahanPermit') }}'"
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
                    <td>Shin Chan Huat</td>
                    <td>Astana Mewah Sdn. Bhd.</td>
                    <td>Bangunan Chil Yung, Klang Utama, Selangor.</td>
                    <td>Disahkan</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('permitToWorkUrusetia.kelulusanPermit') }}'"
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
                    <td>4</td>
                    <td>Ramalingan A/L Rajagombal</td>
                    <td>Steven Sense Tech Bhd.</td>
                    <td>A88, Jalan Tun Razak, TRX Tower, KL.</td>
                    <td>Disahkan</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('permitToWorkUrusetia.kelulusanPermit') }}'"
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
                        field: 'Nama',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 250,
                    },
                    {
                        field: 'Syarikat',
                        width: 115,
                        textAlign: 'left',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Alamat',
                        width: 130,
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