{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Start Tambah Peranan -->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-users"></i>
                Tambah Peranan
            </h3>
        </div>
    </div>

    <div class="card-body">
        <div class="mb-5">
            <div class="row align-items-center">

                <div class="col-md-9">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Peranan<span class="text-danger">*</span></label>
                                <input id="peranan" type="text" class="form-control" placeholder="Urusetia" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--begin: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_maca">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Deskripsi</th>
                    <th title="Field #3">Akses</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        Kemaskini Maklumat
                    </td>
                    <td>
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" name="kemaskiniMaklumat" />
                            <span></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Beri Kelulusan</td>
                    <td>
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" name="kemaskiniMaklumat" />
                            <span></span>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!-- End Tambah Peranan -->

<!-- Mula: Butang Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('peranan.senaraiPeranan') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('peranan.senaraiPeranan') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Batal -->

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
                        width: 20,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Deskripsi',
                        width: 500,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Akses',
                        width: 100,
                        textAlign: 'left',
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