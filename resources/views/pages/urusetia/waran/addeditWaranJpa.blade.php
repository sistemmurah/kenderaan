{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">


    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--Mula: Tambah/Kemaskini Waran JPA -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="{{ $edit ? 'fas fa-edit' : 'fas fa-plus-circle'}} "></i>
                            {{ $edit ? 'Kemaskini' : 'Pendaftaran'}} Waran JPA
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus mb-2" id="accordionExample3">
                        <div class="card">
                            <div class="card-header mb-2" id="headingOne3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
                                    Carian Lokasi
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
                                                    <label class="col-lg-3 col-form-label">Program<span
                                                                class="text-danger">*</span></label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control " name="kemaskiniJenis1"
                                                                id="kemaskiniJenis1">
                                                            <option value="">Sila Pilih</option>
                                                            @if($edit)
                                                                <option value="1" selected>
                                                                    PENGURUSAN UNIVERSITI
                                                                </option>
                                                            @else
                                                                <option value="1">
                                                                    PENGURUSAN UNIVERSITI
                                                                </option>
                                                            @endif
                                                            <option value="2">
                                                                PENGURUSAN AKADEMIK
                                                            </option>
                                                            <option value="3">
                                                                PENGURUSAN HAL EHWAL PELAJAR
                                                            </option>
                                                            <option value="4">
                                                                PENGURUSAN PENYELIDIKAN DAN INOVASI
                                                            </option>
                                                            <option value="5">
                                                                PENGURUSAN PEMAJUAN (ADVANCEMENT)
                                                            </option>
                                                            <option value="6">
                                                                JABATAN PENDAFTAR
                                                            </option>
                                                            <option value="7">
                                                                JABATAN BENDAHARI
                                                            </option>
                                                            <option value="8">
                                                                JABATAN PERPUSTAKAAN UTM
                                                            </option>
                                                            <option value="9">
                                                                PENTADBIRAN UTM KUALA LUMPUR
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Jabatan<span
                                                                class="text-danger">*</span></label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control " name="kemaskiniJenis2"
                                                                id="kemaskiniJenis2">
                                                            <option value="">Sila Pilih</option>
                                                            @if($edit)
                                                            <option value="1" selected>
                                                                JABATAN CANSELERI
                                                            </option>
                                                                @else
                                                                <option value="1">
                                                                    JABATAN CANSELERI
                                                                </option>
                                                                @endif
                                                            <option value="2">
                                                                JABATAN TIMBALAN NAIB CANSELOR AKADEMIK DAN ANTARABANGSA
                                                            </option>
                                                            <option value="3">
                                                                JABATAN TIMBALAN NAIB CANSELOR (HAL EHWAL PELAJAR)
                                                            </option>
                                                            <option value="4">
                                                                JABATAN TIMBALAN NAIB CANSELOR (PENYELIDIKAN DAN
                                                                INOVASI)
                                                            </option>
                                                            <option value="5">
                                                                JABATAN TIMBALAN NAIB CANSELOR (PEMBANGUNAN)
                                                            </option>
                                                            <option value="6">
                                                                JABATAN PENDAFTAR
                                                            </option>
                                                            <option value="7">
                                                                JABATAN BENDAHARI
                                                            </option>
                                                            <option value="8">
                                                                JABATAN PERPUSTAKAAN UTM
                                                            </option>
                                                            <option value="9">
                                                                PENTADBIRAN UTM KUALA LUMPUR
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Unit</label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control " name="kemaskiniJenis3"
                                                                id="kemaskiniJenis3">
                                                            <option value="" selected>Sila Pilih</option>
                                                            <option value="1">
                                                                UNIT INTEGRITI UTM
                                                            </option>
                                                            <option value="2">
                                                                FAKULTI ALAM BINA
                                                            </option>
                                                            <option value="3">
                                                                FAKULTI KEJURUTERAAN AWAM
                                                            </option>
                                                            <option value="4">
                                                                FAKULTI KEJURUTERAAN MEKANIKAL
                                                            </option>
                                                            <option value="5">
                                                                FAKULTI KEJURUTERAAN ELEKTRIK
                                                            </option>
                                                            <option value="6">
                                                                FAKULTI KEJURUTERAAN KIMIA & KEJURUTERAAN SUMBER ASLI
                                                            </option>
                                                            <option value="7">
                                                                FAKULTI SAINS
                                                            </option>
                                                            <option value="8">
                                                                FAKULTI PENDIDIKAN
                                                            </option>
                                                            <option value="9">
                                                                FAKULTI GEOINFORMASI DAN HARTA TANAH
                                                            </option>
                                                            <option value="10">
                                                                FAKULTI KOMPUTERAN
                                                            </option>
                                                            <option value="11">
                                                                FAKULTI PENGURUSAN
                                                            </option>
                                                            <option value="12">
                                                                FAKULTI TAMADUN ISLAM
                                                            </option>
                                                            <option value="13">
                                                                FAKULTI BIOSAINS DAN BIOKEJURUTERAAN
                                                            </option>
                                                            <option value="14">
                                                                FAKULTI KEJURUTERAAN BIOPERUBATAN
                                                            </option>
                                                            <option value="15">
                                                                FAKULTI EKONOMI, PERNIAGAAN DAN KEUSAHAWANAN
                                                            </option>
                                                            <option value="16">
                                                                SEKOLAH RAZAK UTM DALAM KEJURUTERAAN DAN TEKNOLOGI
                                                                TERMAJU
                                                            </option>
                                                            <option value="17">
                                                                SEKOLAH UTM PERDANA
                                                            </option>
                                                            <option value="18">
                                                                INSTITUT TEKNOLOGI MALAYSIA-JEPUN
                                                            </option>
                                                            <option value="19">
                                                                INTERNATIONAL BUSINESS SCHOOL
                                                            </option>
                                                            <option value="20">
                                                                SEKOLAH INFORMATIK TERMAJU
                                                            </option>
                                                            <option value="21">
                                                                SEKOLAH INFORMATIK TERMAJU
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-1">
                                            </div>
                                            <div class="card-toolbar" style="text-align: center">
                                                <button onclick="window.location = '{{ route('urusetia.waran.addeditWaranJpa') }}'"
                                                        class="btn btn-primary font-weight-bold" data-toggle="tooltip"
                                                        title="Carian Jawatan">
                                                    <i class="fas fa-search-plus"></i>
                                                    Cari
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
                                    Maklumat Perjawatan
                                </div>
                            </div>

                            <div id="collapseTwo3" class="collapse show" data-parent="#accordionExample4">
                                <div class="card-body">

                                    <div class="card-toolbar" style="text-align: right">
                                        <!--begin::Dropdown-->
                                        <div class="dropdown dropdown-inline mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Export
                                            </button>
                                            <!--begin::Dropdown Menu-->
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                                            <span class="navi-text">Excel</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                            <!--end::Dropdown Menu-->
                                        </div>
                                        <button onclick="window.location = '{{ route('waran.create') }}'"
                                                class="btn btn-success font-weight-bold" data-toggle="tooltip"
                                                title="Tambah Maklumat Jawatan">
                                            <i class="fas fa-plus-circle"></i>
                                            Tambah
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-12">
                                            {{-- Group 1 --}}
                                            <div class="my-5">
                                                <div class="mb-5">
                                                    <div class="row align-items-center">

                                                        <div class="col-md-9">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 my-2 my-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                                        <select class="form-control"
                                                                                id="kt_datatable_jawatan_search_status">
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

                                                        <div class="col-md-3">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Cari"
                                                                       id="kt_datatable_jawatan_search_query"/>
                                                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_jawatan">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #1">Bil</th>
                                                        <th title="Field #2">Nama Jawatan</th>
                                                        <th title="Field #3">Gred Jawatan</th>
                                                        <th title="Field #4">Kod Skim Gaji</th>
                                                        <th title="Field #5">Kod Skim</th>
                                                        <th title="Field #6">Bil Jawatan</th>
                                                        <th title="Field #7">Tindakan</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($edit)
                                                        <tr>
                                                            <td>1</td>
                                                            <td>PEGAWAI TADBIR</td>
                                                            <td>N54</td>
                                                            <td>N54</td>
                                                            <td>3PN06</td>
                                                            <td>2</td>
                                                            <td class="text-right p-0">
                                                                <button onclick="window.location =''"
                                                                        type="button"
                                                                        class="btn btn-sm btn-icon btn-light-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip"
                                                                       data-placement="top" title="Tooltip">
                                                                    </i>
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light-danger"
                                                                        id="kt_sweetalert_demo_9">
                                                                    <i class="far fa-trash-alt" data-toggle="tooltip"
                                                                       data-placement="top" title="Tooltip"> </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>PEGAWAI PENERBITAN</td>
                                                            <td>N52</td>
                                                            <td>N52</td>
                                                            <td>3PN03</td>
                                                            <td>1</td>
                                                            <td class="text-right p-0">
                                                                <button onclick="window.location =''"
                                                                        type="button"
                                                                        class="btn btn-sm btn-icon btn-light-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip"
                                                                       data-placement="top" title="Tooltip">
                                                                    </i>
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light-danger"
                                                                        id="kt_sweetalert_demo_9">
                                                                    <i class="far fa-trash-alt" data-toggle="tooltip"
                                                                       data-placement="top" title="Tooltip"> </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Tiada Rekod</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
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
    <!--Tamat: Tambah/Kemaskini Waran JPA -->

    <!-- Mula: Butang Simpan/Kembali -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card ">
                <div class="card-body text-center">
                    <button type="submit"
                            class="btn btn-primary font-weight-bold"> {{ $edit ? 'Kemaskini' : 'Simpan' }}
                    </button>

                    <a href="" class="btn btn-danger font-weight-bold">Kembali</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Tamat: Butang Simpan/Kembali -->


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_jawatan').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

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
                            field: 'Nama Jawatan',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'Gred Jawatan',
                            width: 80,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Kod Skim Gaji',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Kod Skim',
                            width: 80,
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Bil Jawatan',
                            width: 70,
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tindakan',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 180,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_jawatan_search_query'),
                        key: 'generalSearch'
                    },

                });

                datatable.buttons().container()
                    .appendTo( $('.col-sm-6:eq(0)', datatable.table().container() ) );

                $('#kt_datatable_jawatan_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_jawatan_search_status').selectpicker();
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