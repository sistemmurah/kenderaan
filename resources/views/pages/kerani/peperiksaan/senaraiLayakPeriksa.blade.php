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
                Senarai Staf Yang Layak Menduduki Peperiksaan
            </h3>
        </div>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Tahun/Sesi</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>2021/1</option>
                      <option>2021/2</option>
                      <option>2021/3</option>
                      <option>2021/4</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Kampus</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>Kuala Lumpur</option>
                      <option>Johor Bahru</option>
                      <option>Pagoh</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Kod Peperiksaan</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>P01</option>
                      <option>P02</option>
                      <option>P03</option>
                      <option>P04</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Kod PTJ</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>K07</option>
                      <option>J07</option>
                      <option>P07</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Gred Jawatan</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>F29</option>
                      <option>F32</option>
                      <option>F36</option>
                      <option>F41</option>
                      <option>F44</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                
            </div>
        </div>

        <br/>

        <div class="mb-5">
            <div class="row align-items-center">

                <div class="col-md-9">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Cari"
                            id="kt_datatable_permit_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="text-align: right;">
                <button class="btn btn-warning font-weight-bold">Import&nbsp;
                    <span><i class="flaticon2-file-1 text-white"></i></span>
                </button>
            </div>

            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_permit">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #3">Nama</th>
                    <th title="Field #4">No Pekerja</th>
                    <th title="Field #4">No Kad Pengenalan</th>
                    <th title="Field #5">Tarikh Lantikan Terkini</th>
                    <th title="Field #6">Status</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mazwan Hishammuddin Bin Shamsudin</td>
                    <td>13898</td>
                    <td>850909105349</td>
                    <td>25/01/2021</td>
                    <td>Hadir</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('kerani.peperiksaan.penjanaSlipPeriksa') }}'"
                            type="button" class="btn btn-sm btn-light-primary">
                            Approval
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jamilah Binti Md Sigit</td>
                    <td>6795</td>
                    <td>991010046795</td>
                    <td>05/11/2020</td>
                    <td>Tidak</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('kerani.peperiksaan.penjanaSlipPeriksa') }}'"
                            type="button" class="btn btn-sm btn-light-primary">
                            Approval
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lampoi Agil Anak Langkau Milibin</td>
                    <td>15092</td>
                    <td>880125015092</td>
                    <td>15/01/2021</td>
                    <td>Hadir</td>
                    <td class="text-right p-0">
                        <button onclick="window.location ='{{ route('kerani.peperiksaan.penjanaSlipPeriksa') }}'"
                            type="button" class="btn btn-sm btn-light-primary">
                            Approval
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
                        field: 'No Pekerja',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: 'No Kad Pengenalan',
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                        width: 150,
                    },
                    {
                        field: 'Tarikh Lantikan Terkini',
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
                                Hadir: {
                                    'title': 'Hadir',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Tidak: {
                                    'title': 'Tidak Hadir',
                                    'class': 'w-100 label label-xl label-light-danger',
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