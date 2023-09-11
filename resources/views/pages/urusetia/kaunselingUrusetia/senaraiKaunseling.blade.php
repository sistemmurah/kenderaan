{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah Binti Ahmad -->

<!-- Mula: Senarai Pematauan Kaunseling -->
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-user-friends"></i>
                Senarai Pemantauan Kaunseling
            </h3>
        </div>
        <div class="card-toolbar">
            <button onclick="window.location = '{{ route('kaunselingUrusetia.tambahKaunseling') }}'"
                class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Pemantauan Kaunseling">
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
                                <select class="form-control" id="kt_datatable_klien_search_status">
                                    <option value="">Semua</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="PerluDimajukan">Perlu Dimajukan</option>
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
                            id="kt_datatable_pemantauan_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
            id="kt_datatable_pemantauan">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">No Rujukan</th>
                    <th title="Field #3">No Pekerja</th>
                    <th title="Field #4">Nama Klien</th>
                    <th title="Field #5">Tarikh Kemaskini</th>
                    <th title="Field #6">Status</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>KS2021005</td>
                    <td>7332</td>
                    <td>AMINAH BINTI ABDULLAH</td>
                    <td>02/01/2021</td>
                    <td>Selesai</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('kaunselingUrusetia.tambahKaunseling') }}'"
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
<!-- Tamat: Senarai Pemantauan Kaunseling -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- Mula: script datatable pemantauan kaunseling -->
<script>
    var KTDatatableHtmlTablePemantauan = function () {
        var pemantauan = function () {
            var datatablePemantauan = $('#kt_datatable_pemantauan').KTDatatable({
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
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 90,
                    },
                    {
                        field: 'No Pekerja',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 70,
                    },
                    {
                        field: 'Nama Klien',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 160,
                    },
                    {
                        field: 'Tarikh Kemaskini',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'Status',
                        width: 90,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var status = {
                                Selesai: {
                                    'title': 'Selesai',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                PerluDimajukan: {
                                    'title': 'Perlu Dimajukan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                status[row.Status].class + '">' + status[row
                                    .Status]
                                .title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        width: 70,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_pemantauan_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_pemantauan_search_status').on('change', function () {
                datatablePemantauan.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_pemantauan_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                pemantauan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTablePemantauan.init();
    });
</script>
<!-- Tamat: script datatable pemantauan kaunseling -->

@endsection