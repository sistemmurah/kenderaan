{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Maklumat Pelaporan -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Maklumat Pelaporan
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

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>No. Rujukan</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="PS/20202021/01005" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tarikh Dilaporkan</label>
                <input id="noKP" type="tel" class="form-control" disabled="disabled"
                value="22/02/2020" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Nama</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="MAZWAN HISHAMMUDDIN BIN SHAMSUDIN" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>No. Pekerja</label>
                <input id="noKP" type="tel" class="form-control" disabled="disabled"
                value="12021" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Jawatan</label>
                <input id="noTel" type="text" class="form-control" disabled="disabled"
                value="PEGAWAI TEKNOLOGI MAKLUMAT" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Fakulti/Jabatan</label>
                <input id="tarikhLahir" type="email" class="form-control" disabled="disabled"
                value="BENDAHARI" />
            </div>
        </div>
    </div>

</div>
</div>
<!-- Tamat: Maklumat Pelaporan -->

<!-- Mula: Maklumat Tatatertib -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Maklumat Kes Tatatertib
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
                <th title="Field #1">Bil</th>
                <th title="Field #2">Tarikh Kejadian</th>
                <th title="Field #3">Kes Tatatertib</th>
                <th title="Field #4">Jenis Kesalahan</th>
                <th title="Field #5">Bukti Kes</th>
                <th title="Field #6">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>25/01/2021</td>
                <td>Tatakelakuan</td>
                <td>Tidak jujur/Tidak bertanggungjawab</td> 
                <td>
                    <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                        <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Bukti Kes"></i>
                    </button>
                </td>
                <td class="text-right p-0">
                    <button onclick="window.location ='{{ route('staf.tatatertib.maklumatTatatertib') }}'"
                    type="button" class="btn btn-xs btn-icon btn-light-primary">
                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Papar Maklumat">
                    </i>
                </button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>20/12/2020</td>
            <td>Tatabicara</td>
            <td>Tidak baik/Tidak mesra alam</td>
            <td>
                <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                    <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Tooltip"></i>
                </button>
            </td>
            <td class="text-right p-0">
                <button onclick="window.location ='{{ route('staf.tatatertib.maklumatTatatertib') }}'"
                type="button" class="btn btn-xs btn-icon btn-light-primary">
                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i>
            </button>
        </td>
    </tr>
</tbody>
</table>
<!-- Tamat: Datatable-->
</div>
</div>
<!-- Tamat: Maklumat Tatatertib -->

<!-- Mula: Penentuan Pelanggaran -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Penentuan Pelanggaran
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

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Catatan Urusetia</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="Si pelaku didapati bersalah dan positif kacak!" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Keputusan</label><br/>
                <label><input type="radio" name="Keputusan" checked="checked">&nbsp;Hukuman buang kerja atau turun pangkat</label>
                <label><input type="radio" name="Keputusan">&nbsp;Hukuman lebih ringan dari buang kerja atau turun pangkat</label>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tarikh Keputusan</label>
                <input id="noKP" type="tel" class="form-control" disabled="disabled"
                value="25/03/2021" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label>Surat Keputusan</label>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <button type="button" class="btn btn-xs btn-icon btn-light-warning">
                    <i class="far fa-file" data-toggle="tooltip" data-placement="top" title="Sijil Tifoid"></i>
                </button>
            </div>
        </div>
        <div class="col-lg-6">
        </div>
    </div>

</div>
</div>
<!-- Tamat: Penentuan Pelanggaran -->

<!-- Mula: Butang Preview/Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('staf.tatatertib.Tatatertib') }}'"
                class="btn btn-primary font-weight-bold"> Cetak
            </button>
            <button onclick="window.location = '{{ route('staf.tatatertib.Tatatertib') }}'"
            class="btn btn-danger font-weight-bold"> Kembali
        </button>
    </div>
</div>
</div>
</div>
<!-- Mula: Butang Preview/Simpan/Batal -->

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
                    field: 'Bil',
                    width: 20,
                    textAlign: 'center',
                    sortable: false,
                    autoHide: false,
                },
                {
                    field: 'Tarikh Kejadian',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    width: 120,
                },
                {
                    field: 'Kes Tatatertib',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    width: 150,
                },
                {
                    field: 'Jenis Kesalahan',
                    width: 200,
                    textAlign: 'center',
                    sortable: false,
                    autoHide: false,
                },
                {
                    field: 'Bukti Kes',
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
                        //width: 90,
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
<!-- Tamat: Script Datatable -->
@endsection