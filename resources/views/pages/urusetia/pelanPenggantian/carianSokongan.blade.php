{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">


    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--Mula: Carian Pelan Penggantian -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-search"></i>
                            Semakan/Sokongan/Perakaun Calon Kumpulan Bakat
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus mb-2" id="accordionExample3">
                        <div class="card">
                            <div class="card-header mb-2" id="headingOne3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
                                    Carian Calon
                                </div>
                            </div>
                            <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-10">
                                            {{-- Group 1 --}}
                                            <div class="my-5">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Kategori<span
                                                                class="text-danger">*</span></label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control " name="kemaskiniJenis1"
                                                                id="kemaskiniJenis1">
                                                            <option value="">Sila Pilih</option>
                                                            <option value="1">
                                                                PB - PENTADBIR BUKAN AKADEMIK
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <!--mula : Kod PTJ  -->
                                                    <label class="col-lg-3 col-form-label">Kod PTJ / Skim</label>
                                                    <div class="col-lg-3">
                                                        <select class="form-control " name="kemaskiniJenis2"
                                                                id="kemaskiniJenis2">
                                                            <option value="">Sila Pilih</option>
                                                            <option value="1">
                                                                J02
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!--tamat : Kod PTJ  -->
                                                </div>

                                                <div class="form-group row">
                                                    <!--mula : Kod Organisasi -->
                                                    <label class="col-lg-3 col-form-label">Kod Organisasi</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control " name="kemaskiniJenis3"
                                                                id="kemaskiniJenis3">
                                                            <option value="">Sila Pilih</option>
                                                            <option value="1">
                                                                PB/J02/010101 - (NA48A - Timbalan Pendaftar Goverman)
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!--tamat : Kod Organisasi -->
                                                </div>

                                                <div class="form-group row">
                                                    <!--Mula : Level-->
                                                    <label class="col-lg-3 col-form-label">Level
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <select class="form-control " name="kemaskiniJenis4"
                                                                id="kemaskiniJenis4">
                                                            <option value="">Sila Pilih</option>
                                                            <option value="1">
                                                                1
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!--tamat : Level -->
                                                </div>

                                                <div class="form-group row">
                                                    <!--mula : Nama -->
                                                    <label class="col-lg-3 col-form-label">Nama</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" placeholder="NAMA"
                                                               name="NAMA"
                                                               value=""/>
                                                    </div>
                                                    <!--tamat : Nama -->
                                                </div>

                                                <div class="form-group row">
                                                    <!--mula : No Pekerja -->
                                                    <label class="col-lg-3 col-form-label">No. Pekerja</label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" placeholder="NO PEKERJA"
                                                               name="NO_PEKERJA"
                                                               value=""/>
                                                    </div>
                                                    <!--tamat : No Pekerja -->
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Kod PTJ
                                                    </label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control " name="kemaskiniJenis3"
                                                                id="kemaskiniJenis3">
                                                            <option value="">Sila Pilih</option>
                                                            <option value="J01">J01 - CANSELORI</option>
                                                            <option value="J02">J02 - PENDAFTAR</option>
                                                            <option value="J03">J03 - BENDAHARI</option>
                                                            <option value="J04">J04 - PERPUSTAKAAN SULTANAH ZANARIAH
                                                            </option>
                                                            <option value="J05">J05 - PEJABAT HARTA BINA</option>
                                                            <option value="J06">J06 - PEJABAT HAL EHWAL MAHASISWA DAN
                                                                ALUMNI
                                                            </option>
                                                            <option value="J07">J07 - PUSAT TEKNOLOGI MAKLUMAT &amp;
                                                                KOMUNIKASI
                                                            </option>
                                                            <option value="J08">J08 - PEJABAT TNC (A&amp;A)</option>
                                                            <option value="J09">J09 - PEJABAT TNC(P&amp;I)</option>
                                                            <option value="J10">J10 - SEKOLAH PENGAJIAN SISWAZAH
                                                            </option>
                                                            <option value="J11">J11 - SEKOLAH PENDIDIKAN PROFESIONAL
                                                                &amp; PENDIDIKAN BERTERUSAN
                                                            </option>
                                                            <option value="J12">J12 - PEJABAT PENERBIT</option>
                                                            <option value="J13">J13 - PUSAT PENGURUSAN PENYELIDIKAN
                                                            </option>
                                                            <option value="J14">J14 - PUSAT INOVASI DAN KOMERSILISASI
                                                            </option>
                                                            <option value="J15">J15 - OVERHEAD UNIVERSITI (UTM JB)
                                                            </option>
                                                            <option value="J16">J16 - PUSAT PENGAJARAN DAN
                                                                PEMBELAJARAN
                                                            </option>
                                                            <option value="J17">J17 - PEJABAT TIMBALAN NAIB CANSELOR
                                                                (PEMBANGUNAN)
                                                            </option>
                                                            <option value="J21">J21 - FAKULTI ALAM BINA</option>
                                                            <option value="J22">J22 - FAKULTI KEJURUTERAAN AWAM</option>
                                                            <option value="J23">J23 - FAKULTI KEJURUTERAAN ELEKTRIK
                                                            </option>
                                                            <option value="J24">J24 - FAKULTI KEJURUTERAAN MEKANIKAL
                                                            </option>
                                                            <option value="J25">J25 - FAKULTI KEJURUTERAAN KIMIA &amp;
                                                                KEJURUTERAAN SUMBER ASLI
                                                            </option>
                                                            <option value="J26">J26 - FAKULTI SAINS</option>
                                                            <option value="J27">J27 - FAKULTI GEOINFORMASI DAN HARTA
                                                                TANAH
                                                            </option>
                                                            <option value="J28">J28 - FAKULTI SAINS KOMPUTER &amp;
                                                                SISTEM MAKLUMAT
                                                            </option>
                                                            <option value="J29">J29 - FAKULTI PENGURUSAN DAN PEMBANGUNAN
                                                                SUMBER MANUSIA
                                                            </option>
                                                            <option value="J31">J31 - FAKULTI PENDIDIKAN</option>
                                                            <option value="J33">J33 - FAKULTI TAMADUN ISLAM</option>
                                                            <option value="J35">J35 - FAKULTI BIOSAINS &amp;
                                                                BIOKEJURUTERAAN
                                                            </option>
                                                            <option value="J36">J36 - FAKULTI KEJURUTERAAN BIOPERUBATAN
                                                                &amp; SAINS KESIHATAN
                                                            </option>
                                                            <option value="J38">J38 - ADVANCED INFORMATICS SCHOOL
                                                            </option>
                                                            <option value="J39">J39 - UTM PERDANA SCHOOL</option>
                                                            <option value="J40">J40 - SEKOLAH RAZAK UTM DALAM
                                                                KEJURUTERAAN &amp; TEKNOLOGI TERMAJU
                                                            </option>
                                                            <option value="J41">J41 - AKADEMI BAHASA</option>
                                                            <option value="J42">J42 - FAKULTI KEJURUTERAAN PETROLEUM DAN
                                                                KEJURUTERAAN TENAGA DIPERBAHARUI
                                                            </option>
                                                            <option value="J43">J43 - MALAYSIA-JAPAN INTERNATIONAL
                                                                INSTITUTE OF TECHNOLOGY
                                                            </option>
                                                            <option value="J44">J44 - FAKULTI KEJURUTERAAN KIMIA
                                                            </option>
                                                            <option value="J45">J45 - FAKULTI BIOSAINS DAN KEJURUTERAAN
                                                                PERUBATAN
                                                            </option>
                                                            <option value="J46">J46 - FAKULTI KEJURUTERAAN KIMIA DAN
                                                                KEJURUTERAAN TENAGA
                                                            </option>
                                                            <option value="J50">J50 - PUSAT TANGGUNGJAWAB UMUM UTM
                                                                SKUDAI
                                                            </option>
                                                            <option value="J51">J51 - FAKULTI KEJURUTERAAN</option>
                                                            <option value="J52">J52 - FAKULTI ALAM BINA &amp; UKUR
                                                            </option>
                                                            <option value="J53">J53 - FAKULTI SAINS SOSIAL &amp;
                                                                KEMANUSIAAN
                                                            </option>
                                                            <option value="J54">J54 - FAKULTI SAINS</option>
                                                            <option value="J55">J55 - SEKOLAH PERNIAGAAN ANTARABANGSA
                                                                AZMAN HASHIM
                                                            </option>
                                                            <option value="K01">K01 - CANSELORI</option>
                                                            <option value="K02">K02 - PENDAFTAR</option>
                                                            <option value="K03">K03 - BENDAHARI</option>
                                                            <option value="K04">K04 - PERPUSTAKAAN SULTANAH ZANARIAH
                                                            </option>
                                                            <option value="K05">K05 - PEJABAT HARTA BINA</option>
                                                            <option value="K06">K06 - PEJABAT HAL EHWAL MAHASISWA
                                                                INTERNATIONAL CAMPUS
                                                            </option>
                                                            <option value="K07">K07 - PUSAT TEKNOLOGI MAKLUMAT &amp;
                                                                KOMUNIKASI
                                                            </option>
                                                            <option value="K08">K08 - PEJABAT TIMBALAN NAIB CANSELOR
                                                                (AKADEMIK DAN ANTARABANGSA)
                                                            </option>
                                                            <option value="K09">K09 - PEJABAT TIMBALAN NAIB CANSELOR
                                                                (PENYELIDIKAN DAN INOVASI)
                                                            </option>
                                                            <option value="K10">K10 - SEKOLAH PENGAJIAN SISWAZAH
                                                            </option>
                                                            <option value="K11">K11 - SEKOLAH PENDIDIKAN PROFESIONAL
                                                                &amp; PENDIDIKAN BERTERUSAN
                                                            </option>
                                                            <option value="K13">K13 - PUSAT PENGURUSAN PENYELIDIKAN
                                                            </option>
                                                            <option value="K14">K14 - PUSAT INOVASI DAN KOMERSILISASI
                                                                (INNOVATION AND COMMERCIALISATION CENTER)
                                                            </option>
                                                            <option value="K15">K15 - OVERHEAD UNIVERSITI (UTM
                                                                INTERNATIONAL CAMPUS KUALA LUMPUR)
                                                            </option>
                                                            <option value="K17">K17 - JABATAN TIMBALAN NAIB CANSELOR
                                                                (PEMBANGUNAN)
                                                            </option>
                                                            <option value="K22">K22 - FAKULTI KEJURUTERAAN AWAM</option>
                                                            <option value="K23">K23 - FAKULTI KEJURUTERAAN ELEKTRIK
                                                            </option>
                                                            <option value="K24">K24 - FAKULTI KEJURUTERAAN MEKANIKAL
                                                            </option>
                                                            <option value="K25">K25 - FAKULTI KEJURUTERAAN KIMIA &amp;
                                                                KEJURUTERAAN SUMBER ASLI
                                                            </option>
                                                            <option value="K28">K28 - FAKULTI SAINS KOMPUTER &amp;
                                                                SISTEM MAKLUMAT
                                                            </option>
                                                            <option value="K32">K32 - KOLEJ SAINS &amp; TEKNOLOGI
                                                            </option>
                                                            <option value="K33">K33 - FAKULTI TAMADUN ISLAM</option>
                                                            <option value="K38">K38 - ADVANCED INFORMATICS SCHOOL
                                                            </option>
                                                            <option value="K39">K39 - UTM PERDANA SCHOOL</option>
                                                            <option value="K40">K40 - SEKOLAH RAZAK UTM DALAM
                                                                KEJURUTERAAN &amp; TEKNOLOGI TERMAJU
                                                            </option>
                                                            <option value="K41">K41 - AKADEMI BAHASA</option>
                                                            <option value="K43">K43 - MALAYSIA-JAPAN INTERNATIONAL
                                                                INSTITUTE OF TECHNOLOGY
                                                            </option>
                                                            <option value="K44">K44 - FAKULTI KEJURUTERAAN KIMIA
                                                            </option>
                                                            <option value="K50">K50 - PUSAT TANGGUNGJAWAB UMUM UTM
                                                                INTERNATIONAL CAMPUS KUALA LUMPUR
                                                            </option>
                                                            <option value="K53">K53 - FAKULTI SAINS SOSIAL &amp;
                                                                KEMANUSIAAN
                                                            </option>
                                                            <option value="K55">K55 - SEKOLAH PERNIAGAAN ANTARABANGSA
                                                                AZMAN HASHIM
                                                            </option>
                                                            <option value="K56">K56 - FAKULTI TEKNOLOGI &amp; INFORMATIK
                                                                RAZAK
                                                            </option>
                                                            <option value="K63">K63 - INTERNATIONAL BUSINESS SCHOOL
                                                            </option>
                                                            <option value="P01">P01 - PAGOH</option>
                                                            <option value="P09">P09 - CANSELORI</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <!--Mula : Status-->
                                                    <label class="col-lg-3 col-form-label">Status
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <select class="form-control " name="kemaskiniJenis5"
                                                                id="kemaskiniJenis5">
                                                            <option value="">Sila Pilih</option>
                                                            <option value="1">
                                                                Dihantar
                                                            </option>
                                                            <option value="2">
                                                                Disokong
                                                            </option>
                                                            <option value="2">
                                                                Diluluskan
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!--tamat : Status -->
                                                </div>

                                                <div class="form-group row">
                                                    <!--mula : No Rujukan -->
                                                    <label class="col-lg-3 col-form-label">No. Rujukan</label>
                                                    <div class="col-lg-5">
                                                        <input class="form-control" type="text" placeholder="NO RUJUKAN"
                                                               name="NO_RUJUKAN"
                                                               value=""/>
                                                    </div>
                                                    <!--tamat : No Rujukan -->
                                                </div>

                                            </div>
                                            <div class="col-xl-1">
                                            </div>
                                            <div class="card-toolbar" style="text-align: center">
                                                <button onclick="window.location = '{{ route('urusetia.pelanPenggantian.carianSokongan') }}'"
                                                        class="btn btn-primary font-weight-bold" data-toggle="tooltip"
                                                        title="Carian Calon">
                                                    <i class="fas fa-search-plus"></i>
                                                    Cari
                                                </button>
                                                <button onclick="window.location = '{{ url('/pelanPenggantian/carianSokongan')}}'"
                                                        class="btn btn-secondary font-weight-bold" data-toggle="tooltip"
                                                        title="Set Semula Carian Calon">
                                                    <i class="fas fa-redo fa-1x"></i>
                                                    Set Semula
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample4">
                        <div class="card">
                            <div class="card-header" id="headingTwo3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseTwo3">
                                    Senarai Calon
                                </div>
                            </div>

                            <div id="collapseTwo3" class="collapse show" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-12">
                                            <div class="my-5">
                                                <div class="mb-5">
                                                    <div class="row align-items-center">

                                                        <div class="col-md-9">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 my-2 my-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                                        <select class="form-control"
                                                                                id="kt_datatable_calonSokongan_search_status">
                                                                            <option value="">Semua</option>
                                                                            <option value="Dihantar">Dihantar</option>
                                                                            <option value="Disahkan">Disahkan</option>
                                                                            <option value="Diluluskan">Diluluskan
                                                                            </option>
                                                                            <option value="Ditolak">Ditolak</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 my-2 my-md-0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_calonSokongan">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #1">Bil</th>
                                                        <th title="Field #2">No Rujukan</th>
                                                        <th title="Field #3">No Pekerja</th>
                                                        <th title="Field #4">Nama</th>
                                                        <th title="Field #5">Kod Organisasi</th>
                                                        <th title="Field #6">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($edit)
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <a href='{{ route('urusetia.pelanPenggantian.calonInfo') }}'>PB/2013/N48/001</a>
                                                            </td>
                                                            <td>5432</td>
                                                            <td>HASMAH BINTI ALI</td>
                                                            <td>PB/J02/010101 - (NA48A - Timbalan Pendaftar Goverman)</td>
                                                            <td>Dihantar</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>PB/2013/N48/002</td>
                                                            <td>11087</td>
                                                            <td>NOOR SYUHADA BINTI AHMAD</td>
                                                            <td>PB/J02/010101 - (NA48A - Timbalan Pendaftar Goverman)</td>
                                                            <td>Dihantar</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>PB/2013/N48/002</td>
                                                            <td>10412</td>
                                                            <td>MOHD HAIRUL AZMI BIN ADNAN</td>
                                                            <td>PB/J02/010101 - (NA48A - Timbalan Pendaftar Goverman)</td>
                                                            <td>Disahkan</td>
                                                        </tr>
                                                    @else
                                                        </tr>
                                                    @endif
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tamat: Carian Pelan Penggantian-->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <script>
        $('input[type="checkbox"]').on('change', function () {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });
    </script>
    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_calonSokongan').KTDatatable({
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
                            field: 'No Rujukan',
                            width: 120,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'No Pekerja',
                            width: 50,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Nama',
                            textAlign: 'left',
                            autoHide: false,
                            sortable: false,
                            width: 200,
                        },
                        {
                            field: 'Kod Organisasi',
                            width: 150,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
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
                                    Disahkan: {
                                        'title': 'Disahkan',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    Diluluskan: {
                                        'title': 'Diluluskan',
                                        'class': 'w-100 label label-xl label-light-primary',
                                    },
                                    Ditolak: {
                                        'title': 'Ditolak',
                                        'class': 'w-100 label label-xl label-light-danger',
                                    },
                                    Tiada: {
                                        'title': 'Tiada',
                                        'class': '',
                                    },
                                };
                                return '<span class="label label-lg font-weight-bold label-inline ' +
                                    status[row.Status].class + '">' + status[row.Status].title +
                                    '</span>';
                            }
                        },
                    ],

                });

                $('#kt_datatable_calonSokongan_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_calonSokongan_search_status').selectpicker();
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