{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Start Senarai e-Boarding -->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-plane"></i>
                Senarai Permohonan
            </h3>
        </div>
        
    </div>

    <div class="card-body">
        
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                <tr>
                    <th>Bil</th>
                    <th>No Rujukan</th>
                    <th>Tarikh Permohonan</th>
                    <th>No Pekerja</th>
                    <th>Nama Staf</th>
                    <th>Fakulti/Jabatan</th>
                    <th>Jenis Permohonan</th>
                    <th>Negara</th>
                    <th>Tarikh Mula Perjalanan</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>J2021C00701</td>
                    <td>02/01/2021</td>
                    <td>7332</td>
                    <td>AMINAH BINTI ABDULLAH</td>
                    <td>JABATAN PERKHIDMATAN DIGITAL</td>
                    <td>BORANG C - PERSENDIRIAN</td>
                    <td>SAUDI ARABIA</td>
                    <td>15/01/2021</td>
                    <td>Diluluskan</td>
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
                <tr>
                <td>2</td>
                    <td>J2021A00325</td>
                    <td>02/01/2021</td>
                    <td>7332</td>
                    <td>AMINAH BINTI ABDULLAH</td>
                    <td>JABATAN PERKHIDMATAN DIGITAL</td>
                    <td>BORANG C - PERSENDIRIAN</td>
                    <td>PAKISTAN</td>
                    <td>03/03/2021</td>
                    <td>Diluluskan</td>
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
<!-- End Senarai e-Boarding-->




<!--Mula: Nota-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        
                        Nota
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        
                    </thead>
                <tbody>
                    <tr>
                        <th scope="row">Draft</th>
                        <td>Permohonan belum dihantar oleh Pemohon</td>
                        <th scope="row">Recommended</th>
                        <td>Permohonan telah disokong oleh Dekan/Ketua Fakulti</td>
                    </tr>
                    <tr>
                        <th scope="row">Submitted</th>
                        <td>Permohonan telah dihantar oleh Pemohon</td>
                        <th scope="row">Not Recommended</th>
                        <td>Permohonan tidak disokong oleh Dekan/Ketua Fakulti</td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Clarification</th>
                        <td>Permohonan telah disemak oleh PSM Fakulti</td>
                        <th scope="row">Certified by TNCPI</th>
                        <td>Permohonan telah diperaku oleh TNCPI</td>
                    </tr>
                    <tr>
                        <th scope="row">No Clarification</th>
                        <td>Permohonan ditolak dan dikembalikan kepada Pemohon oleh PSM Fakulti</td>
                        <th scope="row">Approved</th>
                        <td>Permohonan diluluskan oleh NC</td>
                    </tr>
                    <tr>
                        <th scope="row">Correction PSM</th>
                        <td>Permohonan telah disemak oleh PSM Fakulti dan dikembalikan <br/>kepada pemohon untuk PEMBETULAN</td>
                        <th scope="row">Not Approved</th>
                        <td>Permohonan tidak diluluskan oleh NC</td>
                    </tr>
                    
   
                </tbody>
                </table>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Tamat: Nota -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/eBoarding/eBoardingTable.js') }}"></script>









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
                        width: 20,
                        autoHide: false,
                    },
                    {
                        field: 'No Rujukan',
                        width: 100,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },

                    {
                        field: 'Tarikh Permohonan',
                        type: 'date',
                        width: 100,
                        format: 'DD/MM/YYYY',
                        textAlign: 'center',
                    },
                    {
                        field: 'No.Pekerja',
                        width: 100,
                        sortable: false,
                        textAlign: 'center',
                        autoHide: false,
                    },

                    {
                        field: 'Nama Staf',
                        width: 200,
                        sortable: true,
                        textAlign: 'left',
                        autoHide: false,
                    },
                    {
                        field: 'Fakulti/Jabatan',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jenis Permohonan',
                        width: 90,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Negara',
                        width: 90,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },

                    {
                        field: 'Tarikh Mula Perjalanan',
                        type: 'date',
                        width: 30,
                        format: 'DD/MM/YYYY',
                        textAlign: 'center',
                    },

                    {
                        field: 'Status',
                        title: 'Status',
                        width: 80,
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