{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha Binti Wahi Anuar -->

<!--Mula: Maklumat Permohonan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-mail-bulk"></i>
                        Maklumat Permohonan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Permohonan</label>
                            <input id="noPermohonan" type="text" class="form-control" disabled="disabled"
                                value="JBPL2021011700004" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Pegawai PSM<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="pilihPegawai" disabled="disabled">
                                <option>ABU BAKAR BIN ISMAIL</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tamat: Maklumat Permohonan -->

<!--Mula: Maklumat Pengirim -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-mail-bulk"></i>
                        Maklumat Pengirim
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
                            <label>No.Telefon</label>
                            <input id="no.telPengirim" type="tel" class="form-control" disabled="disabled"
                                value="0122511468" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Pekerja</label>
                            <input id="no.pekerjaPemohon" type="number" class="form-control" disabled="disabled"
                                value="7332" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kod PTJ</label>
                            <input id="KodPTJPengirim" type="tel" class="form-control" disabled="disabled"
                                value="J42" />
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
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kampus</label>
                            <input id="kampusPemohon" type="text" class="form-control" disabled="disabled"
                                value="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input id="alamatPengirim1" type="text" class="form-control" disabled="disabled"
                                value="UNIVERSITI TEKNOLOGI MALAYSIA" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatPengirim2" type="text" class="form-control" disabled="disabled" value="" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod</label>
                            <input id="poskodPengirim" type="text" class="form-control" disabled="disabled"
                                value="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar</label>
                            <input id="bandarPengirim" type="tel" class="form-control" disabled="disabled"
                                value="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negeri</label>
                            <input id="negeriPengirim" type="text" class="form-control" disabled="disabled"
                                value="JOHOR" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pengirim -->

<!--Mula: Maklumat Penerima -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-mail-bulk"></i>
                        Maklumat Penerima
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
                                            <option value="Dihantar">Dihantar</option>
                                            <option value="Diluluskan">Diluluskan</option>
                                            <option value="Dipos">Dipos</option>
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
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_maca">
                    <thead style="background-color:#fcf4a3">
                        <tr>
                            <th title="Field #1">Bil</th>
                            <th title="Field #2">No Tracking</th>
                            <th title="Field #3">Nama</th>
                            <th title="Field #4">Jenis Penghantaran</th>
                            <th title="Field #5">Tarikh Kelulusan</th>
                            <th title="Field #6">Status</th>
                            <th title="Field #7">Tindakan</th>
                            <th title="Field #8">Slip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>ROSNAH BINTI MALIK</td>
                            <td>POS BERDAFTAR</td>
                            <td>17/01/2021</td>
                            <td>Dihantar</td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.kemaskiniPenerima') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>ROSNAH BINTI MALIK</td>
                            <td>POS BERDAFTAR</td>
                            <td>17/01/2021</td>
                            <td>Diluluskan</td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.kemaskiniPenerima') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.slipPenghantaran') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-danger">
                                    <i class="far fa-file-pdf" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="form-group">
                                    <input id="trackingNumber" type="text" class="form-control" />
                                </div>
                            </td>
                            <td>ROSNAH BINTI MALIK</td>
                            <td>POS BERDAFTAR</td>
                            <td>17/01/2021</td>
                            <td>Dipos</td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.kemaskiniPenerima') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="far fa-save" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.slipPenghantaran') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-danger">
                                    <i class="far fa-file-pdf" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>MY7013900133</td>
                            <td>ROSNAH BINTI MALIK</td>
                            <td>POS BERDAFTAR</td>
                            <td>17/01/2021</td>
                            <td>Dipos</td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.kemaskiniPenerima') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button
                                    onclick="window.location ='{{ route('sysmelUrusetia.slipPenghantaran') }}'"
                                    type="button" class="btn btn-sm btn-icon btn-light-danger">
                                    <i class="far fa-file-pdf" data-toggle="tooltip" data-placement="top" title="Tooltip">
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
<!--Tamat: Maklumat Penerima -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('sysmelUrusetia.pemohonSysmel') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('sysmelUrusetia.pemohonSysmel') }}'"
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
                        sortable: false,
                        textAlign: 'center',
                        width: 40,
                        autoHide: false,
                    },
                    {
                        field: 'No Tracking',
                        sortable: true,
                        textAlign: 'center',
                        width: 100,
                        autoHide: false,
                    },
                    {
                        field: 'Nama',
                        width: 150,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Jenis Penghantaran',
                        sortable: true,
                        width: 100,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tarikh Kemaskini',
                        type: 'date',
                        width: 100,
                        format: 'DD/MM/YYYY',
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
                            var status = {
                                Dihantar: {
                                    'title': 'Dihantar',
                                    'class': 'w-100 label label-xl label-light-info',
                                },
                                Diluluskan: {
                                    'title': 'Diluluskan',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                Dipos: {
                                    'title': 'Dipos',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Dikembalikan: {
                                    'title': 'Dikembalikan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                status[row.Status].class + '">' + status[row.Status].title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        width: 100,
                        sortable: false,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Slip',
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