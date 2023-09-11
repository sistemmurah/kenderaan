{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Nurul Natasha binti Wahi Anuar -->

<!-- Mula: Senarai Permohonan Tuntutan Pergigian -->
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-tooth"></i>
                Senarai Pemohon Tuntutan Pergigian
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
                                <select class="form-control" id="kt_datatable_tuntutanStaf_search_status">
                                    <option value="">Semua</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Dihantar">Dihantar</option>
                                    <option value="Diluluskan">Diluluskan</option>
                                    <option value="Dikembalikan">Dikembalikan</option>
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
                            id="kt_datatable_tuntutanStaf_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
            id="kt_datatable_tuntutanStaf">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Nama Pemohon</th>
                    <th title="Field #3">Tarikh Permohonan</th>
                    <th title="Field #4">Tarikh Kelulusan</th>
                    <th title="Field #5">Jumlah Tuntutan (RM)</th>
                    <th title="Field #6">Status</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SITI RASHIDAH BINTI HASHIM</td>
                    <td>01/02/2021</td>
                    <td></td>
                    <td>250.00</td>
                    <td>Dihantar</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianUrusetia.kemaskiniPergigian') }}'"
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
<!-- Tamat: Senarai Permohonan Tuntutan Pergigian -->


@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- Mula: script datatable senarai permohonan tuntutan -->
<script>
    var KTDatatableHtmlTableTuntutan = function () {
        var tuntutan = function () {
            var datatableTuntutan = $('#kt_datatable_tuntutanStaf').KTDatatable({
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
                        field: 'Nama Pemohon',
                        textAlign: 'left',
                        autoHide: false,
                        sortable: false,
                        width: 210,
                    },
                    {
                        field: 'Tarikh Permohonan',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tarikh Kelulusan',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jumlah Tuntutan (RM)',
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'StatusStaf',
                        width: 90,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var statusStaf = {
                                Draft: {
                                    'title': 'Draft',
                                    'class': 'w-100 label label-xl label-light-info',
                                },
                                Dihantar: {
                                    'title': 'Dihantar',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Diluluskan: {
                                    'title': 'Diluluskan',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                Dikembalikan: {
                                    'title': 'Dikembalikan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                statusStaf[row.Status].class + '">' + statusStaf[row
                                    .Status]
                                .title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_tuntutanStaf_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_tuntutanStaf_search_status').on('change', function () {
                datatableTuntutan.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_tuntutanStaf_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                tuntutan();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableTuntutan.init();
    });
</script>
<!-- Tamat: script datatable senarai permohonan tuntutan -->

@endsection