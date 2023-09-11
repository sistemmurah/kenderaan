{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha Binti Wahi Anuar -->

<!-- Start Senarai Sysmel -->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-mail-bulk"></i>
                Senarai Sysmel
            </h3>
        </div>
        <div class="card-toolbar">
            <button onclick="window.location = '{{ route('sysmelStaf.tambahSysmel') }}'"
                class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Sysmel">
                <i class="fas fa-plus-circle"></i> Tambah
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
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">Semua</option>
                                    <option value="Dihantar">Dihantar</option>
                                    <option value="Diluluskan">Diluluskan</option>
                                    <option value="Dipos">Dipos</option>
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
                            id="kt_datatable_maca_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!--begin: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_maca">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">No Permohonan</th>
                    <th title="Field #5">Tarikh Kelulusan</th>
                    <th title="Field #6">Status</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>JBPL2021011700004</td>
                    <td></td>
                    <td>Dihantar</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JBPL2021011600003</td>
                    <td>16/01/2021</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>JBPL2021011500002</td>
                    <td>15/01/2021</td>
                    <td>Dipos</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>JBPL2020122000001</td>
                    <td>20/12/2020</td>
                    <td>Dikembalikan</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
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
        <!--end: Datatable-->
    </div>
</div>
<!-- End Senarai Sysmel -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Function for datatable -->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_maca').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },

                columns: [{
                        field: 'Bil',
                        sortable: false,
                        textAlign: 'center',
                        width: 50,
                        autoHide: false,
                    },
                    {
                        field: 'No Permohonan',
                        width: 200,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tarikh Kelulusan',
                        width: 200,
                        type: 'date',
                        format: 'DD/MM/YYYY',
                        textAlign: 'center',
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
                                Diluluskan: {
                                    'title': 'Diluluskan',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                Dipos: {
                                    'title': 'Dipos',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Dikembalikan: {
                                    'title': 'Dikembalikan',
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
                        sortable: false,
                        textAlign: 'center',
                        autoHide: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_maca_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_maca_search_status').on('change', function () {
                // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                // alert(regExSearch);
                //alert($(this).val().toLowerCase());
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_maca_search_status').selectpicker();
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