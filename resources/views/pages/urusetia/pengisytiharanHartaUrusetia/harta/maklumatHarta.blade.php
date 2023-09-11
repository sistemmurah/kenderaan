{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Fadhilah Binti Mirzeman -->

<!-- Start Senarai harta-->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-coins"></i>
                Harta
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
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">Semua</option>
                                    <option value="Disimpan">Disimpan</option>
                                    <option value="Diluluskan">Diluluskan</option>
                                    <option value="Dihantar">Dihantar</option>
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
                    <th title="Field #2">No Pendaftaran</th>
                    <th title="Field #3">Kategori Harta</th>
                    <th title="Field #4">Jenis Harta</th>
                    <th title="Field #5">Lampiran</th>
                    <th title="Field #6">Status</th>
                    <th title="Field #7">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PHT/6957/00002</td>
                    <td>Kenderaan</td>
                    <td>Kereta</td>
                    <td>Ada</td>
                    <td>Diluluskan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.harta.lihatHarta') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PHT/6957/00003</td>
                    <td>Aset</td>
                    <td>Rumah</td>
                    <td>Ada</td>
                    <td>Dihantar</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.harta.lihatHarta') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>PHT/6957/00004</td>
                    <td>Saham</td>
                    <td>Saham</td>
                    <td>Tiada</td>
                    <td>Dikembalikan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pengisytiharanHartaUrusetia.harta.lihatHarta') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!-- End Senarai harta -->

<!-- Mula: Butang Seterusnya/Kembali-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.maklumatPendapatan') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.tanggungan.maklumatTanggungan') }}'"
                    class="btn btn-primary font-weight-bold"> Seterusnya
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Seterusnya/Kembali-->

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
                    saveState: {
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
                        field: 'No Pendaftaran',
                        width: 170,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Kategori Harta',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jenis Harta',
                        width: 110,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Lampiran',
                        width: 100,
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
                            var state = {
                                Disimpan: {
                                    'title': 'Disimpan',
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
                                state[row.Status].class + '">' + state[row.Status].title +
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