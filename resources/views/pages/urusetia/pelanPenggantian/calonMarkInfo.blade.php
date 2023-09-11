{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <link href="{{ asset('plugins/custom/uppy/uppy.bundle.css') }}" rel="stylesheet"
          type="text/css"/>

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">


    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--Mula: Calon Info Pelan Penggantian -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-info-circle"></i>
                            Keputusan Penilaian SPU
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample3">
                        <div class="card">
                            <div class="card-header mb-2" id="headingOne3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
                                    Maklumat Asas
                                </div>
                            </div>
                            <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <div class="col-xl-12">
                                        <div class="d-flex justify-content-center mb-10">
                                            <div class="image-input image-input-outline" id="kt_image_4"
                                                 style="background-image: url({{ asset('media/users/blank.png') }})">
                                                <div class="image-input-wrapper" style=""></div>
                                                <div class="tambah_input" style="display:none;">
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                           data-action="change" data-toggle="tooltip" title=""
                                                           data-original-title="Tukar gambar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar"/>
                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                    </label>

                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                          data-action="cancel" data-toggle="tooltip"
                                                          title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-12">Nama</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="nama" placeholder="NAMA PENUH"
                                                   disabled="{{ $disabled }}"
                                                   value="HASMAH BINTI ALI"/>
                                        </div>
                                        <!--tamat : input text nama-->

                                        <!--mula : input text no pekerja-->
                                        <label class="col-md-2 col-sm-12">No. Pekerja</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="no_pekerja" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="5432">
                                        </div>
                                        <!--tamat : input text no pekerja-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text Jwtn-->
                                        <label class="col-md-2 col-sm-12">Jawatan Semasa</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="jawatan_semasa"
                                                   placeholder="Contoh: NA41A - PENOLONG PENDAFTAR"
                                                   disabled="{{ $disabled }}"
                                                   value="NA41A - PENOLONG PENDAFTAR">
                                        </div>
                                        <!--tamat : input text Jwtn-->

                                        <!--mula : input text kod_ptj-->
                                        <label class="col-md-2 col-sm-12">Kod PTJ</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="kod_ptj" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="J010200">
                                        </div>
                                        <!--tamat : input text kod_ptj-->

                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text KP-->
                                        <label class="col-md-2 col-sm-12">No.KP Baru/Passport</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="no_kp"
                                                   placeholder="Contoh: 840309115300" disabled="{{ $disabled }}"
                                                   value="840309115300">
                                        </div>
                                        <!--tamat : input text KP-->

                                        <!--mula : input text Umur-->
                                        <label class="col-md-2 col-sm-12">Umur</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="umur" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="29 Tahun 7 Bulan">
                                        </div>
                                        <!--tamat : input text Umur-->

                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text No Rujukan-->
                                        <label class="col-md-2 col-sm-12">No. Rujukan Kumpulan Bakat</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="NO_RUJUKAN" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="PB/2013/N48/001">
                                        </div>
                                        <!--tamat : input text No Rujukan-->
                                        <!--mula : input text Status-->
                                        <label class="col-md-2 col-sm-12">Status</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="STATUS"
                                                   placeholder="" disabled="{{ $disabled }}"
                                                   value="DILULUSKAN">
                                        </div>
                                        <!--tamat : input text Status-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text Kod Organisasi-->
                                        <label class="col-md-2 col-sm-12">Kod Organisasi</label>
                                        <div class="col-md-10 col-sm-12">
                                            <input type="text" class="form-control" name="KOD_ORGANISASI"
                                                   placeholder="Contoh: PB/J02/010101 - (NA48A - Timbalan Pendaftar Goverman)"
                                                   disabled="{{ $disabled }}"
                                                   value="PB/J02/010101 - (NA48A - Timbalan Pendaftar Goverman)">
                                        </div>
                                        <!--tamat : input text Kod Organisasi-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text tatatertib-->
                                        <label class="col-md-2 col-sm-12">Tatatertib</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="checkbox-inline">
                                                <label class="checkbox checkbox-outline checkbox-primary">
                                                    <input type="checkbox" name="group1[]" id="checkbox">
                                                    <span></span>
                                                    Ya
                                                </label>
                                            </div>
                                        </div>
                                        <!--tamat : input text tatatertib-->

                                        <!--mula : input text tapisan keutuhan-->
                                        <label class="col-md-2 col-sm-12">Melepasi tapisan keutuhan</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="checkbox-inline">
                                                <label class="checkbox checkbox-outline checkbox-primary">
                                                    <input type="checkbox" name="group2[]" id="checkbox2">
                                                    <span></span>
                                                    Ya
                                                </label>
                                            </div>
                                        </div>
                                        <!--tamat : input text tapisan keutuhan--->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-list-alt"></i>
                            Muat Naik Dokumen Lampiran
                        </h3>
                    </div>

                    <div class="card-toolbar">
                        <button onclick="window.location = '{{ route('urusetia.pelanPenggantian.calonMarkInfo') }}'"
                                class="btn btn-success btn-light-primary" data-toggle="tooltip"
                                title="Muat Naik Fail">
                            <i class="fas fa-upload"></i>
                            Muat Naik
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label
                                class="col-md-3 col-sm-12 col-form-label text-lg-left">Lampiran</label>
                        <div class="col-md-9 col-sm-12">
                            <div class="uppy" id="kt_uppy_5">
                                <div class="uppy-wrapper"></div>
                                <div class="uppy-list"></div>
                                <div class="uppy-status"></div>
                                <div class="uppy-informer uppy-informer-min"></div>
                            </div>
                            <span class="form-text text-muted">Maksimum Saiz Fail adalah
                                                    100MB dan Maksimum Fail adalah 5.</span>
                            <span class="form-text text-muted">* Format PDF, XLSX, XLS, DOCX, dan DOC sahaja.</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-1"></div>
                        <div class="col-xl-12">
                            <div class="my-5">

                                <!-- Mula: Datatable-->
                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                       id="kt_datatable_lampiran">
                                    <thead style="background-color:#fcf4a3">
                                    <tr>
                                        <th title="Field #1">Bil</th>
                                        <th title="Field #2">Nama Fail</th>
                                        <th title="Field #3">Tarikh Muat Naik</th>
                                        <th title="Field #4">Fail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ujian Profail 1</td>
                                        <td>12/12/2013</td>
                                        <td>
                                            <button onclick="window.location = ''"
                                                    class="btn btn-light-info btn-sm btn-bold" data-toggle="tooltip"
                                                    title="Muat Naik Fail">
                                                <i class="fas fa-download"></i>
                                                Muat Turun
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable-->


                            </div>
                            <div class="col-xl-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fa fa-user"></i>
                            Penilaian Pembangunan Kumpulan Bakat
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus mb-5" id="accordionExample4">
                        <div class="card">
                            <div class="card-header mb-2" id="headingTwo3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseTwo3">
                                    Personaliti
                                </div>
                            </div>
                            <div id="collapseTwo3" class="collapse show" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <!-- Mula: Datatable-->
                                    <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                           id="kt_datatable_personaliti">
                                        <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Kriteria</th>
                                            <th title="Field #3">Skala Pencapaian</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Komited</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="KOMITED"
                                                           placeholder=""
                                                           value="4.11">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kompeten</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="KOMPETEN"
                                                           placeholder=""
                                                           value="4.45">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Komunikatif</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="KOMUNIKATIF"
                                                           placeholder=""
                                                           value="4.34">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Konsisten</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="KONSISTEN"
                                                           placeholder=""
                                                           value="3.89">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Kreatif</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="KREATIF"
                                                           placeholder=""
                                                           value="4.11">
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- Tamat: Datatable-->

                                    <br/>

                                    <table border="0">
                                        <tr>
                                            <td style="width:80%" >
                                                <div class="" style="text-align: right">
                                                    <strong>Jumlah</strong>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 15px">
                                                <input type="text" style="text-align: center"
                                                       class="form-control"
                                                       name="KREATIF"
                                                       placeholder="" disabled="{{ $disabled }}"
                                                       value="20.90">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    {{--<!-- ruang kosong ditepi kanan -->
                                    <div class="" style="text-align: right">
                                        Jumlah

                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus mb-5" id="accordionExample5">
                        <div class="card">
                            <div class="card-header mb-2" id="headingThree3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseThree3">
                                    Kepimpinan
                                </div>
                            </div>
                            <div id="collapseThree3" class="collapse show" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <!-- Mula: Datatable-->
                                    <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                           id="kt_datatable_kepimpinan">
                                        <thead style="background-color:#fcf4a3">
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Kriteria</th>
                                            <th title="Field #3">Skala Pencapaian</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Inspiring Followers</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="INSPIRING"
                                                           placeholder=""
                                                           value="4.65">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Managing Change</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="CHANGE"
                                                           placeholder=""
                                                           value="4.56">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Create The Future</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="FUTURE"
                                                           placeholder=""
                                                           value="3.87">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Challenging Status Quo</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="CHALLENGING"
                                                           placeholder=""
                                                           value="4.11">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Modelling The Way</td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 50px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-group rounded-sm border-1"
                                                           name="MODELLING"
                                                           placeholder=""
                                                           value="4.11">
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- Tamat: Datatable-->

                                    <br />

                                    <table border="0">
                                        <tr>
                                            <td style="width:80%" >
                                                <div class="" style="text-align: right">
                                                    <strong>Jumlah</strong>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-10 col-sm-12" style="padding-left: 15px">
                                                    <input type="text" style="text-align: center"
                                                           class="form-control"
                                                           name="KREATIF"
                                                           placeholder="" disabled="{{ $disabled }}"
                                                           value="20.90">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table border="0">
                        <tr>
                            <td style="width:60%" >
                                <div class="" style="text-align: right">
                                    <strong>Jumlah Keseluruhan</strong>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6 col-sm-12" style="padding-left: 15px">
                                    <input type="text" style="text-align: center"
                                           class="form-control"
                                           name="KREATIF"
                                           placeholder="" disabled="{{ $disabled }}"
                                           value="83.60">
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!--Tamat: Calon Info Pelan Penggantian -->

    <!-- Mula: Butang Simpan/Kembali -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card ">
                <div class="card-body text-center">
                    <button type="submit" onclick="window.location = '{{ route('urusetia.pelanPenggantian.calonMarkInfo') }}'"
                            class="btn btn-primary font-weight-bold"> Simpan
                    </button>

                    <a href="{{ route('urusetia.pelanPenggantian.carianPenilaian') }}" class="btn btn-danger font-weight-bold">Kembali</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Tamat: Butang Simpan/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <script>
        $('input[type="checkbox"]').on('change', function () {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });
    </script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        $("#tkh_mesyuarat").datepicker({
            orientation: "bottom left",
            todayHighlight: true,
            format: 'dd/mm/yyyy'
        }).datepicker("setDate", new Date());
        $('#tkh_mesyuarat').val('');
    </script>

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {

                var datatable = $('#kt_datatable_lampiran').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Nama Fail',
                            width: 350,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Muat Naik',
                            width: 150,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Fail',
                            width: 130,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                });

                var datatable2 = $('#kt_datatable_personaliti').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Kriteria',
                            width: 550,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Skala Pencapaian',
                            width: 180,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                });

                var datatable3 = $('#kt_datatable_kepimpinan').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Kriteria',
                            width: 550,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Skala Pencapaian',
                            width: 180,
                            textAlign: 'center',
                            sortable: false,
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

    <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}"></script>
    <script>
        "use strict";

        // Class definition
        var KTUppy = function () {
            const Tus = Uppy.Tus;
            const ProgressBar = Uppy.ProgressBar;
            const StatusBar = Uppy.StatusBar;
            const FileInput = Uppy.FileInput;
            const Informer = Uppy.Informer;

            // to get uppy companions working, please refer to the official documentation here: https://uppy.io/docs/companion/
            const Dashboard = Uppy.Dashboard;
            const Dropbox = Uppy.Dropbox;
            const GoogleDrive = Uppy.GoogleDrive;
            const Instagram = Uppy.Instagram;
            const Webcam = Uppy.Webcam;

            // Private functions

            var initUppy5 = function () {
                // Uppy variables
                // For more info refer: https://uppy.io/
                var elemId = 'kt_uppy_5';
                var id = '#' + elemId;
                var $statusBar = $(id + ' .uppy-status');
                var $uploadedList = $(id + ' .uppy-list');
                var timeout;

                var uppyMin = Uppy.Core({
                    debug: true,
                    autoProceed: true,
                    showProgressDetails: true,
                    restrictions: {
                        maxFileSize: 1000000000000, // 1mb
                        maxNumberOfFiles: 5,
                        minNumberOfFiles: 1
                    }
                });

                uppyMin.use(FileInput, {
                    target: id + ' .uppy-wrapper',
                    pretty: false
                });
                uppyMin.use(Informer, {
                    target: id + ' .uppy-informer'
                });

                // demo file upload server
                uppyMin.use(Tus, {
                    endpoint: 'https://master.tus.io/files/'
                });
                uppyMin.use(StatusBar, {
                    target: id + ' .uppy-status',
                    hideUploadButton: true,
                    hideAfterFinish: false
                });

                $(id + ' .uppy-FileInput-input').addClass('uppy-input-control').attr('id', elemId +
                    '_input_control');
                $(id + ' .uppy-FileInput-container').append(
                    '<label class="uppy-input-label btn btn-light-primary btn-sm btn-bold" for="' + (elemId +
                    '_input_control') + '">Lampirkan Fail</label>');

                var $fileLabel = $(id + ' .uppy-input-label');

                uppyMin.on('upload', function (data) {
                    $fileLabel.text("Sedang Dimuat Naik...");
                    $statusBar.addClass('uppy-status-ongoing');
                    $statusBar.removeClass('uppy-status-hidden');
                    clearTimeout(timeout);
                });

                uppyMin.on('complete', function (file) {
                    $.each(file.successful, function (index, value) {
                        var sizeLabel = "bytes";
                        var filesize = value.size;
                        if (filesize > 1024) {
                            filesize = filesize / 1024;
                            sizeLabel = "kb";

                            if (filesize > 1024) {
                                filesize = filesize / 1024;
                                sizeLabel = "MB";
                            }
                        }
                        var uploadListHtml = '<div class="uppy-list-item" data-id="' + value.id +
                            '"><div class="uppy-list-label">' + value.name + ' (' + Math.round(
                                filesize, 2) + ' ' + sizeLabel +
                            ')</div><span class="uppy-list-remove" data-id="' + value.id +
                            '"><i class="flaticon2-cancel-music"></i></span></div>';
                        $uploadedList.append(uploadListHtml);
                    });

                    $fileLabel.text("Tambah Fail");

                    $statusBar.addClass('uppy-status-hidden');
                    $statusBar.removeClass('uppy-status-ongoing');
                });

                $(document).on('click', id + ' .uppy-list .uppy-list-remove', function () {
                    var itemId = $(this).attr('data-id');
                    uppyMin.removeFile(itemId);
                    $(id + ' .uppy-list-item[data-id="' + itemId + '"').remove();
                });
            }

            return {
                // public functions
                init: function () {
                    initUppy5();
                }
            };
        }();

        KTUtil.ready(function () {
            KTUppy.init();
        });

    </script>

@endsection