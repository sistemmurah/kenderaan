{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha binti Wahi Anuar -->

<!--Mula: Maklumat Pinjaman/Tanggungan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Maklumat Pinjaman/Tanggungan Pasangan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Kategori Pinjaman/Tanggungan<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="kategoriPinjamanPasangan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">CUKAI PENDAPATAN</option>
                                <option value="3">PINJAMAN KENDERAAN</option>
                                <option value="4">PINJAMAN KOOPERASI</option>
                                <option value="5">PINJAMAN PENGAJIAN</option>
                                <option value="6">PINJAMAN PERIBADI</option>
                                <option value="7">PINJAMAN PERUMAHAN</option>
                                <option value="8">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="lainKategoriPasangan">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Kategori Pinjaman/Tanggungan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Maklumat Pinjaman/Tanggungan<span class="text-danger">*</span></label>
                            <input id="maklumatPinjamanPasangan" type="text" class="form-control"
                                placeholder="Maklumat Pinjaman/Tanggungan" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Institusi Memberi Pinjaman/Tanggungan<span class="text-danger">*</span></label>
                            <input id="institusiPinjamanPasangan" type="text" class="form-control"
                                placeholder="Institusi Pinjaman/Tanggungan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jumlah Pinjaman/Tanggungan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="jumlahPinjamanPasangan" type="text" class="form-control"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jumlah Bayaran Bulanan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="ansuranBulananPasangan" type="text" class="form-control"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label>Tempoh Bayaran<span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="0"
                                                    id="tempohTahunPasangan" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Tahun</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="0"
                                                    id="tempohBulanPasangan" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Bulan</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Ansuran Pertama<span class="text-danger">*</span></label>
                            <input id="tarikhAnsuranPertamaPasangan" class="form-control" type="date" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Cara Bayaran<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="caraBayaranPasangan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">BAYAR SENDIRI</option>
                                <option value="3">MELALUI POTONGAN GAJI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="lainKeteranganPasangan">
                            <label>Keterangan Lain</label>
                            <input type="text" class="form-control" placeholder="Keterangan Lain" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pinjaman/Tanggungan -->

<!-- Start Lampiran-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Lampiran
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <!--begin: Datatable-->
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_maca">
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
                            <td>Geran Kenderaan</td>
                            <td>GeranKenderaan.pdf</td>
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

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.tanggungan.senaraiTanggungan') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.tanggungan.senaraiTanggungan') }}'"
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

<!-- script hide & show lain-lain section -->
<script>
    $('#lainKategoriPasangan').hide();

    $('#kategoriPinjamanPasangan').change(function () {
        if ($(this).val() == 8) {
            $('#lainKategoriPasangan').show();
        } else {
            $('#lainKategoriPasangan').hide();
        }
    });
</script>

@endsection