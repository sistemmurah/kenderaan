{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Permohonan Tuntutan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-tooth"></i>
                        Permohonan Tuntutan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Sila Pilih Pegawai PSM<span class="text-danger">*</span></label>
                            <select class="form-control" id="pegawaiPSM">
                                <option>Sila Pilih</option>
                                <option>ABU BAKAR BIN ISMAIL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan<span class="text-danger">*</span></label>
                            <input id="noRujukan" type="text" class="form-control" placeholder="Nombor Rujukan" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Permohonan<span class="text-danger">*</span></label>
                            <input id="tkhMohon" type="text" class="form-control"
                                value="{{ now()->toDateString('Y-m-d') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Rawatan<span class="text-danger">*</span></label>
                            <input class="form-control" id="tkhRawatan" type="date" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Penerima Rawatan<span class="text-danger">*</span></label>
                            <select class="form-control" id="penerimaRawatan">
                                <option>Sila Pilih</option>
                                <option>JAILANI BIN ABDULLAH</option>
                                <option>SITI RASHIDAH BINTI HASHIM</option>
                                <option>MUHAMMAD ZULHILMI BIN JAILANI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jenis Rawatan<span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" id="jenisRawatan" multiple>
                                <option>G01 - PEMERIKSAAN DAN DIAGNOSIS</option>
                                <option>G02 - RAWATAN ABSES (BENGKAK GUSI)</option>
                                <option>G03 - EDONDONTIK (MEMATIKAN SARAF)</option>
                                <option>G04 - PEMBEDAHAN KECIL MULUT (MINOR ORAL SURGERY)</option>
                                <option>G05 - X-RAY</option>
                                <option>G06 -UBAT-UBATAN</option>
                                <option>G07 - CABUTAN GIGI</option>
                                <option>G08 - TAMPALAN GIGI</option>
                                <option>G09 - PENSKALERAN (CUCI GIGI)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Klinik<span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option>Sila Pilih</option>
                                <option>KG0000 - LAIN-LAIN KLINIK</option>
                                <option>KG0001 - ALPHA DENTAL CLINIC - JOHOR BAHRU</option>
                                <option>KG0002 - AMIM DENTAL SURGERY - TAMAN UNIVERSITI</option>
                                <option>KG0003 - AMIM DENTAL SURGERY - JOHOR BAHRU</option>
                                <option>KG0004 - AMIM DENTAL SURGERY - BANDAR SERI ALAM</option>
                                <option>KG0005 - ANG DENTAL SURGERY - JOHOR BAHRU</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Resit Bayaran<span class="text-danger">*</span></label>
                            <input id="noResit" type="text" class="form-control"
                                placeholder="No. Resit Bayaran Rawatan" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jumlah Tuntutan Rawatan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Baki Boleh Dituntut<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input type="text" class="form-control" disabled="disabled" value="400.00" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Permohonan Tuntutan -->

<!-- Start Lampiran-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-tooth"></i>
                        Lampiran
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <!--begin: Datatable-->
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_lampiran">
                    <thead style="background-color:#fcf4a3">
                        <tr>
                            <th title="Field #1">Bil</th>
                            <th title="Field #2">Nama Fail </th>
                            <th title="Field #3">Fail</th>
                            <th title="Field #4">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Resit Rawatan</td>
                            <td>Resit Rawatan.pdf</td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-light-primary" id="lihatLampiran">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="hapusLampiran">
                                    <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip"> </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-primary" id="uploadFile">
                                    <i class="fas fa-upload" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                    id="tambahLampiran">
                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
</div>
<!-- End Lampiran -->

<!-- Mula: Butang Simpan/Hantar/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('pergigianStaf.senaraiPergigian') }}'"
                    class="btn btn-outline-primary"> Simpan
                </button>
                <button onclick="window.location = '{{ route('pergigianStaf.senaraiPergigian') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button onclick="window.location = '{{ route('pergigianStaf.senaraiPergigian') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Hantar/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- carian klinik -->
<script>
    // Class definition

    var KTBootstrapSelect = function () {

        // Private functions
        var demos = function () {
            // minimum setup
            $('.kt-selectpicker').selectpicker();
        }

        return {
            // public functions
            init: function () {
                demos();
            }
        };
    }();

    jQuery(document).ready(function () {
        KTBootstrapSelect.init();
    });
</script>

<!-- Function for datatable Lampiran-->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_lampiran').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },

                columns: [{
                        field: 'Bil',
                        textAlign: 'center',
                        width: 50,
                        autoHide: false,
                    },
                    {
                        field: 'Nama Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                    },
                ],

            });

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