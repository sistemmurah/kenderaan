{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Maklumat Pendapatan Pasangan-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-hand-holding-usd"></i>
                        Maklumat Pendapatan Pasangan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jenis Pendapatan<span class="text-danger">*</span></label>
                            <select class="form-control" id="jenisPendapatanPasangan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">GAJI BERSIH</option>
                                <option value="3">DIVIDEN</option>
                                <option value="4">KERETA SEWA</option>
                                <option value="5">RUMAH SEWA</option>
                                <option value="6">PERNIAGAAN</option>
                                <option value="7">PEKERJAAN LUAR</option>
                                <option value="8">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="lainPasangan">
                            <label>Lain-lain<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Sila Nyatakan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Maklumat Pendapatan<span class="text-danger">*</span></label>
                            <textarea id="maklumatPendapatanPasangan" class="form-control" rows="3"
                                placeholder="Sila Nyatakan Maklumat Pendapatan Pasangan"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row" id="bulananTahunan">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bulanan/Tahunan<span class="text-danger">*</span></label>
                            <select class="form-control" id="pasanganBulananTahunan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">BULANAN</option>
                                <option value="3">TAHUNAN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jumlah Bulanan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="jumlahBulananPasangan" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="jumlahTahunanPasangan">
                            <label>Jumlah Tahunan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Pendapatan Pasangan -->

<!-- Mula: Lampiran Pasangan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-hand-holding-usd"></i>
                        Lampiran
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <!-- Mula: Datatable Lampiran Pasangan -->
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_lampiran_pasangan">
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
                            <td>Sewa Rumah</td>
                            <td>sewa.pdf</td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-light-primary"
                                    id="lihatLampiranPasangan">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger"
                                    id="hapusLampiranPasangan">
                                    <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip"> </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="form-group">
                                    <input id="namaFailLampiranPasangan" type="text" class="form-control" />
                                </div>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-primary" id="uploadFilePasangan">
                                    <i class="fas fa-upload" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                    id="tambahLampiranPasangan">
                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable Pasangan -->
            </div>
        </div>
        <!-- Tamat: Datatable Lampiran Pasangan -->
    </div>
</div>
<!-- Tamat: Lampiran Pasangan -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.pendapatan.senaraiPendapatan') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.pendapatan.senaraiPendapatan') }}'"
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

<!-- script datatable lampiran -->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_lampiran_pasangan').KTDatatable({
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
                        field: 'Nama Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
                    },
                    {
                        field: 'Fail',
                        width: 200,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        width: 90,
                        textAlign: 'center',
                        autoHide: false,
                        sortable: false,
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

<!-- script hide & show lain-lain section -->
<script>
    $('#lainPasangan').hide();
    $('#bulananTahunan').hide();
    $('#jumlahTahunanPasangan').hide();

    $('#jenisPendapatanPasangan').change(function () {
        if ($(this).val() == 1) {
            $('#lainStaf').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 2) {
            $('#lainPasangan').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 3) {
            $('#lainPasangan').hide();
            $('#bulananTahunan').show();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 4) {
            $('#lainPasangan').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 5) {
            $('#lainPasangan').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 6) {
            $('#lainPasangan').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 7) {
            $('#lainPasangan').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 8) {
            $('#lainPasangan').show();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        } else {
            $('#lainPasangan').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanPasangan').hide();
        }
    });

    $('#pasanganBulananTahunan').change(function () {
        if ($(this).val() == 1) {
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 2) {
            $('#jumlahTahunanPasangan').hide();
        } else if ($(this).val() == 3) {
            $('#jumlahTahunanPasangan').show();
        } else {
            $('#jumlahTahunanPasangan').hide();
        }
    });
</script>

@endsection