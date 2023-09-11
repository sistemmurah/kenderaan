{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Nurul Natasha Binti Wahi Anuar : 31/1/2021-->

<!--Mula: Maklumat Permohonan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-briefcase"></i>
                        Maklumat Permohonan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan</label>
                            <input id="noRujukan" type="text" class="form-control" disabled="disabled"
                                value="PKJL2021001" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label>Tarikh Permohonan</label>
                            <input class="form-control" type="date" disabled="disabled"
                                value="{{ now()->toDateString('Y-m-d') }}" id="tarikhPermohonan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Pegawai PSM<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="pilihPegawai">
                                <option>Sila Pilih</option>
                                <option>ABU BAKAR BIN ISMAIL</option>
                                <option>OSMAN BIN BAKAR</option>
                                <option>JAMAL BIN JAMIL</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tamat: Maklumat Permohonan -->

<!--Mula: Maklumat Pemohon -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-briefcase"></i>
                        Maklumat Pemohon
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Pekerja</label>
                            <input id="no.pekerjaPemohon" type="number" class="form-control" disabled="disabled"
                                value="7332" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT (FA41)" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan</label>
                            <input id="jabatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian</label>
                            <input id="bahagianPemohon" type="text" class="form-control" disabled="disabled"
                                value="BAHAGIAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pemohon -->

<!--Mula: Maklumat Pekerjaan Luar -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-briefcase"></i>
                        Maklumat Pekerjaan Luar
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan<span class="text-danger">*</span></label>
                            <input id="jawatanPekerjaan" type="text" class="form-control"
                                placeholder="PEGAWAI PENASIHAT" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gaji Permulaan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="gajiPermulaan" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Mula<span class="text-danger">*</span></label>
                            <input id="tarikhMula" class="form-control" type="date" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Tamat<span class="text-danger">*</span></label>
                            <input id="traikhTamat" class="form-control" type="date" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Syarikat<span class="text-danger">*</span></label>
                            <input id="namaSyarikat" type="text" class="form-control"
                                placeholder="ABDULLAH SERVICES SDN BHD" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Emel Syarikat<span class="text-danger">*</span></label>
                            <input id="emelSyarikat" type="email" class="form-control"
                                placeholder="abdullahservices@gmail.com" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Telefon Syarikat<span class="text-danger">*</span></label>
                            <input id="noTelSyarikat" type="tel" class="form-control" placeholder="0325674534" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat Syarikat<span class="text-danger">*</span></label>
                            <input id="alamatPenerima1" type="text" class="form-control"
                                placeholder="NO.24 JALAN KEMBOJA" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatPenerima2" type="text" class="form-control"
                                placeholder="KAMPUNG TASIK PERMAISURI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodPenerima" type="number" class="form-control" placeholder="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarPenerima" type="text" class="form-control" placeholder="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negeri<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negeriPenerima">
                                <option>Sila Pilih</option>
                                <option>JOHOR</option>
                                <option>KUALA LUMPUR</option>
                                <option>SELANGOR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>KEDAH</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>KELANTAN</option>
                                <option>TERENGGANU</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negara<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negaraPenerima">
                                <option>MALAYSIA</option>
                                <option>SINGAPORE</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pekerjaan Luar -->

<!-- Start Lampiran-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-file-contract"></i>
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
                            <td>Surat Tawaran</td>
                            <td>SuratTawaran.pdf</td>
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

<!-- Mula: Butang Hantar/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('pekerjaanLuarStaf.senaraiPekerjaanLuar') }}'"
                    class="btn btn-outline-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('pekerjaanLuarStaf.senaraiPekerjaanLuar') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button onclick="window.location = '{{ route('pekerjaanLuarStaf.senaraiPekerjaanLuar') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Hantar/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

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