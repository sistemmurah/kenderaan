{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Maklumat Peperiksaan -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Daftar Kod Peperiksaan
            </h3>
        </div>
        <div class="card-toolbar">
            <button class="btn btn-warning font-weight-bold">Hebahan&nbsp;
                <span><i class="flaticon-chat text-white"></i></span>
            </button>&nbsp;&nbsp;
            <button class="btn btn-primary font-weight-bold">Simpan&nbsp;
                <span><i class="flaticon-envelope text-white"></i></span>
            </button>&nbsp;&nbsp;
            <button class="btn btn-success font-weight-bold">Baru&nbsp;
                <span><i class="flaticon2-file-1 text-white"></i></span>
            </button>
        </div>
    </div>

<div class="card-body">

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Kod Peperiksaan</label>
                <select class="form-control">
                  <option>01 - Peperiksaan perkhidmatan kumpulan pengurusan dan profesional, kumpulan pelaksana dan yang setaraf gred 29 hingga 41</option>
                  <option>02 - Peperiksaan perkhidmatan kumpulan sokongan dan yang setaraf gred 11 hingga 26</option>
                  <option>03 - Peperiksaan perkhidmatan kumpulan pegawai tinggi/kanan, pentadbir dan yang setaraf gred 44 hingga 54</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tahun/Sesi</label>
                <select class="form-control">
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
                <label>Tarikh Permohonan</label>
                <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                    <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_3"/>
                    <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                        <span class="input-group-text">
                        <i class="ki ki-calendar"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tarikh Tutup Permohonan</label>
                <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                    <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_4"/>
                    <div class="input-group-append" data-target="#kt_datetimepicker_4" data-toggle="datetimepicker">
                        <span class="input-group-text">
                        <i class="ki ki-calendar"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Kapasiti</label>
                <input id="kapasitiCalon" type="text" class="form-control"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Lokasi Peperiksaan</label>
                <select class="form-control">
                  <option>Dewan Kuliah 1</option>
                  <option>Dewan Kuliah 2</option>
                  <option>Dewan Kuliah 3</option>
                  <option>Dewan Kuliah 4</option>
                </select>
            </div>
        </div>
    </div>

    <br/>

    <div class="mb-5">
        <div class="row align-items-center">

            <div class="col-md-9">
                <div class="row align-items-center">
                    <div class="col-md-4 my-2 my-md-0">
                        <div class="d-flex align-items-center">
                            <h4>Kertas Peperiksaan</h4>
                        </div>
                    </div>
                    <div class="col-md-4 my-2 my-md-0">
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="text-align: right;">
                <button class="btn btn-success font-weight-bold">Tambah&nbsp;
                    <span><i class="flaticon2-plus-1 text-white"></i></span>
                </button>
            </div>

        </div>
    </div>

    <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_periksa">
        <thead style="background-color:#fcf4a3">
            <tr>
                <th title="Field #5">Kod Kertas</th>
                <th title="Field #6">Sub Kertas</th>
                <th title="Field #2">Tarikh Peperiksaan</th>
                <th title="Field #3">Mula</th>
                <th title="Field #4">Tamat</th>
                <th title="Field #4">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select class="form-control">
                      <option>S01</option>
                      <option>S02</option>
                      <option>S03</option>
                      <option>S04</option>
                    </select>
                </td>
                <td>
                    <select class="form-control">
                      <option>P01</option>
                      <option>P02</option>
                      <option>P03</option>
                      <option>P04</option>
                    </select>
                </td>
                <td>
                    <div class="input-group input-group-solid date" id="kt_datetimepicker_5" data-target-input="nearest">
                        <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date" data-target="#kt_datetimepicker_5"/>
                        <div class="input-group-append" data-target="#kt_datetimepicker_5" data-toggle="datetimepicker">
                            <span class="input-group-text">
                            <i class="ki ki-calendar"></i>
                            </span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-solid date" id="kt_datetimepicker_6" data-target-input="nearest">
                        <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select time" data-target="#kt_datetimepicker_6"/>
                        <div class="input-group-append" data-target="#kt_datetimepicker_6" data-toggle="datetimepicker">
                            <span class="input-group-text">
                             <i class="ki ki-clock"></i>
                            </span>
                        </div>
                    </div>
                </td>
                <td>
                    <select class="form-control">
                      <option>08:00</option>
                      <option>09:00</option>
                      <option>10:00</option>
                      <option>11:00</option>
                    </select>
                </td>
                <td class="text-right p-0">
                    <button type="button" class="btn btn-xs btn-icon btn-light-primary">
                        <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip"></i>
                    </button>
                    <button type="button" class="btn btn-xs btn-icon btn-light-danger">
                        <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

</div>
</div>
<!-- Tamat: Maklumat Peperiksaan -->

<!-- Mula: Maklumat Sejarah Peperiksaan -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Senarai Daftar Kod Peperiksaan
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
    <!-- Mula: Datatable-->
    <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_permit">
        <thead style="background-color:#fcf4a3">
            <tr>
                <th title="Field #1">Tahun/Sesi</th>
                <th title="Field #2">Nama Peperiksaan</th>
                <th title="Field #3">Sub Peperiksaan</th>
                <th title="Field #4">Kod Kertas</th>
                <th title="Field #5">Status</th>
                <th title="Field #5">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2019/2020</td>
                <td>Peperiksaan Kompetensi</td>
                <td>Peperiksaan Sah Jawatan</td>
                <td>K02 - Kewangan</td>
                <td>Gagal</td>
                <td class="text-right p-0">
                    <button onclick="window.location ='{{ route('kerani.peperiksaan.butirPemohonPeriksa') }}'"
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
<!-- Tamat: Maklumat Sejarah Peperiksaan -->

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
                    field: 'Tahun/Sesi',
                    width: 120,
                    textAlign: 'center',
                    sortable: false,
                    autoHide: false,
                },
                {
                    field: 'Nama Peperiksaan',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    //width: 120,
                },
                {
                    field: 'Sub Peperiksaan',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    //width: 150,
                },
                {
                    field: 'Kod Kertas',
                    //width: 200,
                    textAlign: 'center',
                    sortable: false,
                    autoHide: false,
                },
                {
                    field: 'Status',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                        //width: 90,
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

<script>
    var KTDatatableHtmlTable = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_periksa').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },

                layout: {
                    scroll: true,
                },

                columns: [
                {
                    field: 'Kod Kertas',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    //width: 90,
                },
                {
                    field: 'Sub Kertas',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    //width: 90,
                },
                {
                    field: 'Tarikh Peperiksaan',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    width: 120,
                },
                {
                    field: 'Mula',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    width: 150,
                },
                {
                    field: 'Tamat',
                    width: 200,
                    textAlign: 'center',
                    sortable: false,
                    autoHide: false,
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
                        input: $('#kt_datatable_periksa_search_query'),
                        key: 'generalSearch'
                    },
                });

            $('#kt_datatable_periksa_search_status').on('change', function () {
                // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                // alert(regExSearch);
                //alert($(this).val().toLowerCase());
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_periksa_search_status').selectpicker();
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
        KTDatatableHtmlTable.init();
    });
</script>
<!-- Tamat: Script Datatable -->
@endsection