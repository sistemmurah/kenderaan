{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah Binti Ahmad -->

<!--Mula: Maklumat Klien -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklumat Klien
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan</label>
                            <input id="noRujukan" type="text" class="form-control" disabled="disabled"
                                value="KS2021006" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pekerja</label>
                            <input id="noPekerja" type="text" class="form-control" disabled="disabled" value="7332" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaKlien" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanKlien" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan</label>
                            <input id="jabatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian</label>
                            <input id="bahagianKlien" type="text" class="form-control" disabled="disabled"
                                value="BAHAGIAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--Tamat: Maklumat Klien -->

<!-- Mula: Sesi Kaunseling -->
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-user-friends"></i>
                Maklumat Sesi Kaunseling
            </h3>
        </div>
        <div class="card-toolbar">
            <button
                onclick="window.location = '{{ route('kaunselingKaunselor.tambahSesiKaunseling') }}'"
                class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Sesi Kaunseling">
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
                            id="kt_datatable_klien_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
            id="kt_datatable_kaunseling">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Tarikh Temujanji</th>
                    <th title="Field #3">Waktu Mula</th>
                    <th title="Field #4">Waktu Tamat</th>
                    <th title="Field #5">Status</th>
                    <th title="Field #6">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>02/01/2021</td>
                    <td>2:00pm</td>
                    <td>4:00pm</td>
                    <td>Selesai</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('kaunselingKaunselor.tambahSesiKaunseling') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>27/12/2020</td>
                    <td>2:00pm</td>
                    <td>4:00pm</td>
                    <td>PerluDimajukan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('kaunselingKaunselor.tambahSesiKaunseling') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Tamat: Datatable-->
    </div>
</div>
<!-- Tamat: Sesi Kaunseling -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">

                <button
                    onclick="window.location = '{{ route('kaunselingKaunselor.senaraiKlien') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('kaunselingKaunselor.senaraiKlien') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>


<!-- Mula: script datatable sesi kaunseling -->
<script>
    var KTDatatableHtmlTableKaunseling = function () {
        var kaunseling = function () {
            var datatableKaunseling = $('#kt_datatable_kaunseling').KTDatatable({
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
                        field: 'Tarikh Temujanji',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Waktu Mula',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Waktu Tamat',
                        width: 110,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Status',
                        title: 'Status',
                        width: 130,
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
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                ],

                search: {
                    input: $('#kt_datatable_klien_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_klien_search_status').on('change', function () {
                datatableKlien.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_klien_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                kaunseling();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableKaunseling.init();
    });
</script>
<!-- Tamat: script datatable sesi kaunseling -->

@endsection