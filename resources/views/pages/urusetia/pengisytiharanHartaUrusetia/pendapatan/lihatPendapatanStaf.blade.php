{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Maklumat Pendapatan Staf -->
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
                            <select class="form-control" id="jenisPendapatanStaf" disabled="disabled">
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
                    <div class="col-lg-6" id="lainStaf">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="Jenis Pendapatan" disabled="disabled"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Maklumat Pendapatan<span class="text-danger">*</span></label>
                            <textarea id="maklumatPendapatanStaf" class="form-control" rows="3"
                                value="GAJI BERSIH" disabled="disabled"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row" id="bulananTahunan">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bulanan/Tahunan<span class="text-danger">*</span></label>
                            <select class="form-control" id="stafBulananTahunan" disabled="disabled">
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
                                <input id="jumlahBulananStaf" type="text" class="form-control" value="2000.00" disabled="disabled" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="jumlahTahunanStaf">
                            <label>Jumlah Tahunan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input type="text" class="form-control" value="24000.00" disabled="disabled"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Pendapatan Staf -->

<!-- Mula: Lampiran Staf -->
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
                <!-- Mula: Datatable Lampiran Staf -->
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_lampiran_staf">
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
                                    id="lihatLampiranStaf">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable Staf -->
            </div>
        </div>
        <!-- Tamat: Datatable Lampiran Staf -->
    </div>
</div>
<!-- Tamat: Lampiran Staf -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.pendapatan.maklumatPendapatan') }}'"
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

<!-- script datatable lampiran-->
<script>
    var KTDatatableHtmlTableDemo = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_lampiran_staf').KTDatatable({
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
    $('#lainStaf').hide();
    $('#bulananTahunan').hide();
    $('#jumlahTahunanStaf').hide();

    $('#jenisPendapatanStaf').change(function () {
        if ($(this).val() == 1) {
            $('#lainStaf').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 2) {
            $('#lainStaf').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 3) {
            $('#lainStaf').hide();
            $('#bulananTahunan').show();
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 4) {
            $('#lainStaf').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 5) {
            $('#lainStaf').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 6) {
            $('#lainStaf').hide();
            $('#bulananTahunanStaf').hide();
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 7) {
            $('#lainStaf').hide();
            $('#bulananTahunanStaf').hide();
            $('#jumlahTahunanStaf').hide();
        }else if ($(this).val() == 8) {
            $('#lainStaf').show();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanStaf').hide();
        } else {
            $('#lainStaf').hide();
            $('#bulananTahunan').hide();
            $('#jumlahTahunanStaf').hide();
        }
    });

    $('#stafBulananTahunan').change(function () {
        if ($(this).val() == 1) {
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 2) {
            $('#jumlahTahunanStaf').hide();
        } else if ($(this).val() == 3) {
            $('#jumlahTahunanStaf').show();
        } else {
            $('#jumlahTahunanStaf').hide();
        }
    });
</script>

@endsection