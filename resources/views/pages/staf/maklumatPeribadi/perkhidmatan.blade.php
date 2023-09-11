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
                <h3 class="card-label"><i class="fas fa-building"></i> Maklumat Fakulti / Jabatan</h3>
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
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Fakulti/Jabatan</label>
                            <span style="color: red">*</span>
                            <select name="ctl00$MyContentPlaceHolder$ddlFakultiJabatan"
                                    id="MyContentPlaceHolder_ddlFakultiJabatan" class="form-control">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="FSSK">FAKULTI SAINS SOSIAL DAN KEMANUSIAAN</option>
                                <option value="FTIR">FAKULTI TEKNOLOGI & INFORMATIK RAZAK</option>
                                <option value="FS">FAKULTI SAINS</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Unit</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtUnit" type="text"
                                   id="MyContentPlaceHolder_txtUnit" class="form-control" placeholder="Unit"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Bahagian</label>
                            <input name="ctl00$MyContentPlaceHolder$txtBahagian" type="text"
                                   id="MyContentPlaceHolder_txtBahagian" class="form-control" placeholder="Bahagian"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Status Staf</label>
                            <input name="ctl00$MyContentPlaceHolder$txtStatusStaf" type="text"
                                   id="MyContentPlaceHolder_txtStatusStaf" class="form-control"
                                   placeholder="Status Staf"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Kod PTJ</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKodPTJ" type="text"
                                   id="MyContentPlaceHolder_txtKodPTJ" class="form-control" placeholder="Kod PTJ"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Taraf Jawatan</label>
                            <input name="ctl00$MyContentPlaceHolder$txtTarafJawatan" type="text"
                                   id="MyContentPlaceHolder_txtTarafJawatan" class="form-control"
                                   placeholder="Taraf Jawatan"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Kumpulan Perkhidmatan</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKumpulanPerkhidmatan" type="text"
                                   id="MyContentPlaceHolder_txtKumpulanPerkhidmatan" class="form-control"
                                   placeholder="Kumpulan Perkhidmatan"/>
                        </div>
                        <div class="col-lg-6">
                            <label>No Fail Peribadi</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNoFailPeribadi" type="text"
                                   id="MyContentPlaceHolder_txtNoFailPeribadi" class="form-control"
                                   placeholder="No Fail Peribadii"/>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-building"></i> Maklumat Pengesahan dalam Perkhidmatan
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

            <!--begin: page content-->
            <div>
                <div class="row">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Mula Tempoh Percubaan</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Mula Tempoh Perlanjutan (jika ada)</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Tamat Tempoh Percubaan</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Tamat Tempoh Perlanjutan</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Mula PTM</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Tamat PTM</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Tarikh Lulus Peperiksaan</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Tarikh Akhir Peperiksaan </label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="Sila Pilih"
                                       id="kt_datepicker_3"/>
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Kertas I</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKertasI" type="text"
                                   id="MyContentPlaceHolder_txtKertasI" class="form-control rounded-corner"
                                   placeholder="Kertas I"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Kertas III</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKertasIII" type="text"
                                   id="MyContentPlaceHolder_txtKertasIII" class="form-control rounded-corner"
                                   placeholder="Kertas III"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Kertas II</label>
                            <input name="ctl00$MyContentPlaceHolder$txtKertasII"
                                   type="text" id="MyContentPlaceHolder_txtKertasII"
                                   class="form-control rounded-corner"
                                   placeholder="Kertas II"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Syarat tambahan IELTS/TOEFL/MUET</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtSyarattambahan " type="text"
                                   id="MyContentPlaceHolder_txtSyarattambahan " class="form-control rounded-corner"
                                   placeholder="Syarat tambahan IELTS/TOEFL/MUET "/>

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Status Pengecualian</label>
                            <span style="color: red">*</span>
                            <input name="ctl00$MyContentPlaceHolder$txtStatusPengecualian" type="text"
                                   id="MyContentPlaceHolder_txtStatusPengecualian " class="form-control rounded-corner"
                                   placeholder="Status Pengecualian "/>

                        </div>
                    </div>
                </div>
            </div>
            <!--end: page content-->

        </div>
    </div>
    <!--end::Card-->
    <br/>

    <!-- Mula: Senarai Perubahan Perkhidmatan -->
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Senarai Perubahan Perkhidmatan
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
            <div class="mb-5">
                <div class="row align-items-center">

                    <div class="col-md-9">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_perubahanKhidmat_search_status">
                                        <option value="">Semua</option>
                                        <option value="Dihantar">Dihantar</option>
                                        <option value="Disahkan">Disahkan</option>
                                        <option value="Diluluskan">Diluluskan</option>
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
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="kt_datatable_perubahanKhidmat_search_query"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_perubahanKhidmat">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Tarikh Mula Kuatkuasa</th>
                    <th title="Field #3">Jawatan</th>
                    <th title="Field #4">Taraf Jawatan</th>
                    <th title="Field #5">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>25/06/2010</td>
                    <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                    <td>TETAP</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>25/12/2014</td>
                    <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                    <td>TETAP</td>
                    <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>08/11/2015</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                    <td>TETAP</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>08/12/2017</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                    <td>TETAP</td>
                    <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>08/02/2020</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                    <td>TETAP</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>08/02/2020</td>
                    <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                    <td>TETAP</td>
                    <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Perubahan Perkhidmatan -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_perubahanKhidmat').KTDatatable({
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
                            field: 'Tarikh Mula Kuatkuasa',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 80,
                        },
                        {
                            field: 'Jawatan',
                            width: 210,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Taraf Jawatan',
                            width: 60,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Keterangan',
                            width: 200,
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                    search: {
                        input: $('#kt_datatable_perubahanKhidmat_search_query'),
                        key: 'generalSearch'
                    },
                });

                $('#kt_datatable_perubahanKhidmat_search_status').on('change', function () {
                    // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                    // alert(regExSearch);
                    //alert($(this).val().toLowerCase());
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_perubahanKhidmat_search_status').selectpicker();
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


    {{-- vendors --}}
    {{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection