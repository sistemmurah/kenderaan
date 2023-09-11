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
                Penjanaan Slip Peperiksaan
            </h3>
        </div>
        <div class="card-toolbar">
            <button class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#hantar">Hantar&nbsp;
                <span><i class="flaticon2-paperplane text-white"></i></span>
            </button>&nbsp;&nbsp;
            <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#jana">Generate&nbsp;
                <span><i class="flaticon2-download-2 text-white"></i></span>
            </button>
        </div>

        <div class="modal fade" id="hantar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  &times;
                </button>
              </div>
              <div class="modal-body">
                Slip peperiksaan telah dihantar kepada staf!
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="jana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  &times;
                </button>
              </div>
              <div class="modal-body">
                Slip peperiksaan telah dijana!
              </div>
            </div>
          </div>
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

    <table class="datatable datatable-head-custom table-hover table-light table-bordered" id="kt_datatable_periksa">
        <thead style="background-color:#fcf4a3">
            <tr>
                <th title="Field #2">Tarikh</th>
                <th title="Field #3">Masa</th>
                <th title="Field #4">Lokasi</th>
                <th title="Field #5">Kod Kertas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>25/01/2021</td>
                <td>09:00 - 10:00</td>
                <td>Bilik Ilmuan 3</td>
                <td>P02 - Kewangan</td> 
            </tr>
        </tbody>
    </table>

</div>
</div>
<!-- Tamat: Maklumat Peperiksaan -->

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