{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Markah Prestasi Tahun Semasa</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <div class="card-body">

            <!--begin: page content-->
            <div class="card-deck">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h3 class="card-label text-center text-white">2017</h3>
                    </div>
                    <div class="card-body text-center">
                        <h3>94.8</h3>
                        {{-- Nanti kena buat link ke sistem LNPT - details markah tahun semasa(click button--}}
                        {{-- cetak PDF). Tapi skrg screenshot gambar je dulu.--}}
                        <p class="card-text">Markah Tahun 2017</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-label text-center text-white">2018</h3>
                    </div>
                    <div class="card-body text-center">
                        <h3>87.68</h3>
                        <p class="card-text">Markah Tahun 2018</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-label text-center text-white">2019</h3>
                    </div>
                    <div class="card-body text-center">
                        <h3><a href="PrestasiTahunSemasa">83.38</a></h3>
                        <p class="card-text">Markah Tahun 2019</p>
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!--Mula: Maklumat Deskripsi Kerja -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-id-card"></i>
                            Maklumat Deskripsi Kerja
                        </h3>
                    </div>
                </div>

                <!-- Mula: Accordion Prestasi -->
                <div class="accordion accordion-toggle-arrow" id="accordionPrestasi">
                    <!-- Mula: Maklumat Bahagian -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title" data-toggle="collapse" data-target="#collapseBahagian">
                                A. Maklumat Bahagian
                            </div>
                        </div>

                        <div id="collapseBahagian" class="collapse show" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Fakulti/ Jabatan</b>
                                    </div>
                                    <div class="col-md-3">
                                        Jabatan Perkhidmatan Digital
                                    </div>
                                    <div class="col-md-3">
                                        <b>Bahagian</b>
                                    </div>
                                    <div class="col-md-3">
                                        Bahagian Inovasi Digital
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Unit</b>
                                    </div>
                                    <div class="col-md-3">
                                        Software & Application Assurance
                                    </div>
                                    <div class="col-md-3">
                                        <b>Kampus</b>
                                    </div>
                                    <div class="col-md-3">
                                        UTM Jb
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Ketua Bahagian</b>
                                    </div>
                                    <div class="col-md-3">
                                        Ts. Pm Dr. Mohd Murtadha Bin Mohamad
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Maklumat Bahagian -->

                    <!-- Mula: Maklumat Pegawai -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsePegawai">
                                B. Maklumat Pegawai
                            </div>
                        </div>
                        <div id="collapsePegawai" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Nama</b>
                                    </div>
                                    <div class="col-md-3">
                                        Noor Emylia Binti Yusoff
                                    </div>
                                    <div class="col-md-3">
                                        <b>No. Pekerja</b>
                                    </div>
                                    <div class="col-md-3">
                                        13456
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Gelaran Jawatan</b>
                                    </div>
                                    <div class="col-md-3">
                                        Penolong Pegawai Teknologi Maklumat
                                    </div>
                                    <div class="col-md-3">
                                        <b>Kod Jawatan </b>
                                    </div>
                                    <div class="col-md-3">
                                        FA29A
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Gred Jawatan</b>
                                    </div>
                                    <div class="col-md-3">
                                        F29
                                    </div>
                                    <div class="col-md-3">
                                        <b>Taraf Jawatan </b>
                                    </div>
                                    <div class="col-md-3">
                                        Tetap
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Jenis Laluan Kerjaya </b>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3">
                                        <b>No Surat Kelulusan Perjawatan (SKP)</b>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Tarikh Kelulusan SKP</b>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3">
                                        <b>Bidang Utama</b>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Maklumat Pegawai -->

                    <!-- Mula: Maklumat Pengesahan -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsePengesahan">
                                C. Maklumat Pengesahan
                            </div>
                        </div>
                        <div id="collapsePengesahan" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Hierarki 1 (Bahagian)</b>
                                    </div>
                                    <div class="col-md-3">
                                        Bahagian Inovasi Digital
                                    </div>
                                    <div class="col-md-3">
                                        <b>Disediakan Oleh</b>
                                    </div>
                                    <div class="col-md-3">
                                        Noor Emylia Binti Yusoff
                                        Penolong Pegawai Teknologi Maklumat (F29)
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Hierarki 2 (Seksyen)</b>
                                    </div>
                                    <div class="col-md-3">
                                        Seksyen Inovasi Digital
                                    </div>
                                    <div class="col-md-3">
                                        <b>Disemak Oleh</b>
                                    </div>
                                    <div class="col-md-3">
                                        Noor Ana Binti Atai
                                        Pegawai Teknologi Maklumat (F41/F44)
                                    </div>
                                </div>

                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-3">
                                        <b>Hierarki 3 (Unit)</b>
                                    </div>
                                    <div class="col-md-3">
                                        Software & Application Assurance
                                    </div>
                                    <div class="col-md-3">
                                        <b>Diluluskan Oleh</b>
                                    </div>
                                    <div class="col-md-3">
                                        Mokhles Bin Md Sawal
                                        Ketua Pegawai Teknologi Maklumat (F48)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Maklumat Pengesahan -->

                    <!-- Mula: Pengemaskinian -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse"
                                 data-target="#collapsePengemaskinian">
                                D. Pengemaskinian
                            </div>
                        </div>
                        <div id="collapsePengemaskinian" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">

                                <!-- Mula: Datatable-->
                                <table class="table table-bordered">
                                    <thead style="background-color:#fcf4a3">
                                    <tr>
                                        <th>Bil</th>
                                        <th style="text-align: center">Tarikh</th>
                                        <th style="text-align: center">Tajuk</th>
                                        <th style="text-align: center">Pengesahan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td style="text-align: center">13/02/2020</td>
                                        <td>Penyediaan Kali Pertama</td>
                                        <td>
                                            Noor Emylia Binti Yusoff
                                            13/02/2020
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable-->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Pengemaskinian -->

                    <!-- Mula: Deskripsi Tugas -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse"
                                 data-target="#collapseDeskripsi">
                                E. Deskripsi Tugas
                            </div>
                        </div>
                        <div id="collapseDeskripsi" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-6">
                                        <font color="#000000"><b>Tujuan Pengwujudan Jawatan</b></font>
                                    </div>
                                    <div class="col-md-6">
                                        Membantu dan melaksanakan aktiviti pengujian sistem bagi memastikan sistem yang dibangunkan mengikut
                                        piawaian dan garis panduan yang ditetapkan.
                                    </div>
                                </div>
                                <br/>
                                <!--Mula: Datatable-->
                                <table class="table table-bordered">
                                    <thead style="background-color:#fcf4a3">
                                    <tr>
                                        <th>Bil</th>
                                        <th>Akauntabiliti</th>
                                        <th>Tugas Utama</th>
                                        <th>Kompetensi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Membantu dalam menyelaraskan pengurusan dokumentasi yang berkaitan dengan application assurance
                                            bagi memastikan aktiviti pengujian terancang
                                        </td>
                                        <td>Membantu dalam menyelaraskan dokumen keperluan pengguna sistem dan aplikasi yang perlu
                                            disediakan oleh pihak pembangun.
                                        </td>
                                        <td>
                                            Quality Management
                                            Quality Assurance
                                            Quality Standard
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Melaksanakan pembangunan projek mengikut perancangan yang telah ditetapkan dan mengikut
                                            spesifikasi dokumen keperluan pengguna
                                        </td>
                                        <td>Membantu menyedia rekabentuk GUI, rekabentuk pangkalan data dan proses kerja sistem berkaitan.
                                        </td>
                                        <td>System Architecture Skill</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Membantu memastikan prestasi sistem selepas pelaksanaan sentiasa mengikut mutu perkhidmatan</td>
                                        <td>Membantu melaksanakan latihan kepada unit application support selepas pembangunan selesai.</td>
                                        <td>Communication & Training Skill</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--Tamat: Datatable-->

                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Deskripsi Tugas-->

                    <!-- Mula: Dimensi -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse"
                                 data-target="#collapseDimensi">
                                F. Dimensi
                            </div>
                        </div>
                        <div id="collapseDimensi" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <!-- Mula: Datatable-->
                                <table class="table table-bordered">
                                    <thead style="background-color:#fcf4a3">
                                    <tr>
                                        <th>Bil</th>
                                        <th>Parameter</th>
                                        <th>Kuantiti</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Bilangan bulan pengujian ke atas 1 sistem atau aplikasi</td>
                                        <td>2 bulan dengan mengambil kira tempoh pembangunan adalah 4 bulan dan telah memenuhi keperluan
                                            pengujian
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Bilangan sistem dan aplikasi yang diuji</td>
                                        <td>Membuat pengujian ke atas 3 sistem atau aplikasi setahun</td>

                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Bilangan penglibatan projek pembangunan dan penyelenggaraan sistem</td>
                                        <td>Membangunkan 3 sistem atau aplikasi setahun dengan mengambilkira tempoh pembangunan adalah 3
                                            bulan setiap satu
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Tamat: Datatable-->
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Dimensi -->

                    <!-- Mula: Kelayakan Akademik -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse"
                                 data-target="#collapseKelayakan">
                                G. Kelayakan Akademik
                            </div>
                        </div>
                        <div id="collapseKelayakan" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-12">
                                        Diploma Teknologi Maklumat (Pengaturcaraan)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamat: Kelayakan Akademik -->

                    <!-- Mula: Pengalaman -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse"
                                 data-target="#collapsePengalaman">
                                H. Pengalaman
                            </div>
                        </div>
                        <div id="collapsePengalaman" class="collapse" data-parent="#accordionPrestasi">
                            <div class="card-body">
                                <div class="row" style="line-height: normal;">
                                    <div class="col-md-12">
                                        1. Berpengalaman sekurang-kurangnya 1-3 tahun dalam bidang pengujian sistem dan aplikasi.
                                    </div>
                                    <div class="col-md-12">
                                        2. Berpengalaman sekurang-kurangnya 1-3 tahun dalam bidang pembangunan sistem dan aplikasi.
                                    </div>
                                    <div class="col-md-12">
                                        3. Minimum menghadiri Kursus Certified Testers Foundation Level (CTFL)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Tamat: Accordion Prestasi -->
            </div>
        </div>
    </div>
    <!--Tamat: Maklumat Deskripsi Kerja -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
{{--    <script>--}}
{{--        var KTDatatableHtmlTableDemo = function () {--}}
{{--            var demo = function () {--}}
{{--                var datatable = $('#kt_datatable_pengemaskinian').KTDatatable({--}}
{{--                    data: {--}}
{{--                        saveState: {--}}
{{--                            cookie: false--}}
{{--                        },--}}
{{--                    },--}}

{{--                    layout: {--}}
{{--                        scroll: true,--}}
{{--                    },--}}

{{--                    pagination: false,--}}

{{--                    columns: [{--}}
{{--                        field: 'Bil',--}}
{{--                        width: 20,--}}
{{--                        textAlign: 'center',--}}
{{--                        sortable: false,--}}
{{--                        autoHide: false,--}}
{{--                    },--}}
{{--                        {--}}
{{--                            field: 'Tarikh',--}}
{{--                            textAlign: 'center',--}}
{{--                            autoHide: false,--}}
{{--                            sortable: true,--}}
{{--                            width: 80,--}}
{{--                        },--}}
{{--                        {--}}
{{--                            field: 'Tajuk',--}}
{{--                            width: 200,--}}
{{--                            textAlign: 'left',--}}
{{--                            sortable: false,--}}
{{--                            autoHide: false,--}}
{{--                        },--}}
{{--                        {--}}
{{--                            field: 'Pengesahan',--}}
{{--                            width: 250,--}}
{{--                            textAlign: 'center',--}}
{{--                            sortable: false,--}}
{{--                            autoHide: false,--}}
{{--                        },--}}
{{--                    ],--}}
{{--                });--}}

{{--                var datatable2 = $('#kt_datatable_akauntabiliti').KTDatatable({--}}
{{--                    data: {--}}
{{--                        saveState: {--}}
{{--                            cookie: false--}}
{{--                        },--}}
{{--                    },--}}

{{--                    layout: {--}}
{{--                        scroll: true,--}}
{{--                    },--}}

{{--                    pagination: false,--}}

{{--                    columns: [{--}}
{{--                        field: 'Bil',--}}
{{--                        width: 20,--}}
{{--                        textAlign: 'center',--}}
{{--                        sortable: false,--}}
{{--                        autoHide: false,--}}
{{--                    },--}}
{{--                        {--}}
{{--                            field: 'Akauntabiliti',--}}
{{--                            textAlign: 'left',--}}
{{--                            autoHide: false,--}}
{{--                            sortable: false,--}}
{{--                            width: 330,--}}
{{--                        },--}}
{{--                        {--}}
{{--                            field: 'Tugas Utama',--}}
{{--                            width: 330,--}}
{{--                            textAlign: 'left',--}}
{{--                            sortable: false,--}}
{{--                            autoHide: false,--}}
{{--                        },--}}
{{--                        {--}}
{{--                            field: 'Kompetensi',--}}
{{--                            width: 120,--}}
{{--                            textAlign: 'left',--}}
{{--                            sortable: false,--}}
{{--                            autoHide: false,--}}
{{--                        },--}}
{{--                    ],--}}
{{--                });--}}

{{--                var datatable3 = $('#kt_datatable_dimensi').KTDatatable({--}}
{{--                    data: {--}}
{{--                        saveState: {--}}
{{--                            cookie: false--}}
{{--                        },--}}
{{--                    },--}}

{{--                    layout: {--}}
{{--                        scroll: true,--}}
{{--                    },--}}

{{--                    pagination: false,--}}

{{--                    columns: [{--}}
{{--                        field: 'Bil',--}}
{{--                        width: 20,--}}
{{--                        textAlign: 'center',--}}
{{--                        sortable: false,--}}
{{--                        autoHide: false,--}}
{{--                    },--}}
{{--                        {--}}
{{--                            field: 'Parameter',--}}
{{--                            textAlign: 'left',--}}
{{--                            autoHide: false,--}}
{{--                            sortable: false,--}}
{{--                            width: 380,--}}
{{--                        },--}}
{{--                        {--}}
{{--                            field: 'Kuantiti',--}}
{{--                            width: 380,--}}
{{--                            textAlign: 'left',--}}
{{--                            sortable: false,--}}
{{--                            autoHide: false,--}}
{{--                        },--}}
{{--                    ],--}}
{{--                });--}}
{{--            };--}}

{{--            return {--}}
{{--                // Public functions--}}
{{--                init: function () {--}}
{{--                    // init dmeo--}}
{{--                    demo();--}}
{{--                },--}}
{{--            };--}}
{{--        }();--}}

{{--        jQuery(document).ready(function () {--}}
{{--            KTDatatableHtmlTableDemo.init();--}}
{{--        });--}}
{{--    </script>--}}

    {{--    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>--}}
    {{--    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet"--}}
    {{--          type="text/css"/>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection