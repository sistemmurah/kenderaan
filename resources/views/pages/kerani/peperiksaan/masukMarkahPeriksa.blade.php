{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Maklumat Pemohon -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Maklumat Staf Yang Menghadiri Peperiksaan
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
                <label>No. Kad Pengenalan</label>
                <input id="noTel" type="text" class="form-control" disabled="disabled"
                value="770522103589" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Kod PTJ</label>
                <input id="tarikhLahir" type="email" class="form-control" disabled="disabled"
                value="K07" />
            </div>
        </div>
    </div>

</div>
</div>
<!-- Tamat: Maklumat Pemohon -->

<!-- Mula: Maklumat Peperiksaan -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Maklumat Peperiksaan
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
                <label>Kod Peperiksaan</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="P01 - Peperiksaan Pengesahan Jawatan" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tahun/Sesi</label>
                <input id="noTel" type="text" class="form-control" disabled="disabled"
                value="2020/2021" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>No Giliran Peperiksaan</label>
                <input id="noTel" type="text" class="form-control" disabled="disabled"
                value="P01A13898" />
            </div>
        </div>
    </div>

    <br/>

    <h5>Keputusan Peperiksaan</h5>

    <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_periksa">
        <thead style="background-color:#fcf4a3">
            <tr>
                <th title="Field #2">Tarikh</th>
                <th title="Field #3">Masa</th>
                <th title="Field #4">Lokasi</th>
                <th title="Field #5">Kod Kertas</th>
                <th title="Field #5">Keputusan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>25/01/2021</td>
                <td>09:00 - 10:00</td>
                <td>Bilik Ilmuan 3</td>
                <td>P02 - Kewangan</td> 
                <td>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>Lulus</option>
                      <option>Gagal</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>15/04/2021</td>
                <td>09:00 - 10:00</td>
                <td>Dewan Kuliah 3</td>
                <td>P02 - Perintah Am</td> 
                <td>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>Lulus</option>
                      <option>Gagal</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <br/>
    <br/>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <h5>Keputusan Keseluruhan</h5>
            </div>
        </div>
        <div class="col-lg-6" style="text-align: right;">
            <div class="form-group">
                <label class="w-10 label label-inline label-xl label-light-warning font-weight-bold">Lulus Sebahagian</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Status Peraku</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>Diperakukan</option>
                      <option>Tidak Diperakukan</option>
                    </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Catatan</label>
                <label class="text-danger">*Sekiranya TIDAK DIPERAKUKAN</label>
                <textarea class="form-control" id="catatan" rows="3"></textarea>
            </div>
        </div>
    </div>

</div>
</div>
<!-- Tamat: Maklumat Peperiksaan -->

<!-- Mula: Maklumat Pengesahan -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Pegawai Pengesahan
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
                <label>Nama Pegawai</label>
                    <select class="form-control">
                      <option selected>Sila pilih</option>
                      <option>Mohd Khidir Bin Md Joseph</option>
                      <option>Rozita Malinggi Anak Menakan Sipulan</option>
                    </select>
            </div>
        </div>
        <div class="col-lg-6">
            
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Jawatan</label>
                <input id="noTel" type="text" class="form-control" disabled="disabled"
                value="Pegawai Teknologi Maklumat" />
            </div>
        </div>
        <div class="col-lg-6">
            
        </div>
    </div>

    <div class="row">
            <div class="col-lg-6">
                <div class="card-body text-center">
                    <button class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#simpan">Simpan
                    </button>&nbsp;
                    <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#email">Email
                    </button>

                    <div class="modal fade" id="simpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              &times;
                            </button>
                          </div>
                          <div class="modal-body">
                            Keputusan telah disahkan!
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              &times;
                            </button>
                          </div>
                          <div class="modal-body">
                            Slip keputusan peperiksaan telah dihantar kepada staf & PSM PTJ!
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                    
            </div>
        </div>

</div>
</div>
<!-- Tamat: Maklumat Pengesahan -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<!-- Mula: Script Datatable -->
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
                    field: 'Tarikh',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    width: 120,
                },
                {
                    field: 'Masa',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                    width: 150,
                },
                {
                    field: 'Lokasi',
                    width: 200,
                    textAlign: 'center',
                    sortable: false,
                    autoHide: false,
                },
                {
                    field: 'Kod Kertas',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                        //width: 90,
                },
                {
                    field: 'Keputusan',
                    textAlign: 'center',
                    autoHide: false,
                    sortable: false,
                        //width: 90,
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