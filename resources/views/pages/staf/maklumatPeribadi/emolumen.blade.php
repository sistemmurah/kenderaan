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
                <h3 class="card-label"><i class="fas fa-money-check"></i>&nbsp;&nbsp;Maklumat Emolumen</h3>
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
            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Sistem Saraan</label>
                    <span style="color: red">*</span>
                    <input name="ctl00$MyContentPlaceHolder$txtSaraan" type="text" id="MyContentPlaceHolder_txtSaraan"
                           class="form-control rounded-corner" placeholder="Saraan" required="required"/>
                </div>
                <div class="col-lg-6">
                    <label>Pusat Kos</label>
                    <input name="ctl00$MyContentPlaceHolder$txtPusatKos" type="text"
                           id="MyContentPlaceHolder_txtPusatKos" class="form-control" placeholder="PusatKos"/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Bulan Pergerakan Gaji</label>
                    <input name="ctl00$MyContentPlaceHolder$TextBox31" type="text" id="MyContentPlaceHolder_TextBox31"
                           class="form-control" placeholder="Umur"/>
                </div>
                <div class="col-lg-6">
                    <label>Nama Bank</label>
                    <span style="color: red">*</span>
                    <select name="ctl00$MyContentPlaceHolder$ddlNamaBank" id="MyContentPlaceHolder_ddlNamaBank"
                            class="form-control">
                        <option value="Sila Pilih..">Sila Pilih..</option>
                        <option value="MAYBANK BERHAD">MAYBANK BERHAD</option>
                        <option value="CIMB">CIMB</option>

                    </select>
                </div>

            </div>

            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Cara Bayaran Gaji</label>
                    <span style="color: red">*</span>
                    <select name="ctl00$MyContentPlaceHolder$ddlCaraBayar" id="MyContentPlaceHolder_ddlCaraBayar"
                            class="form-control">
                        <option value="Sila Pilih..">Sila Pilih..</option>
                        <option value="Kredit ke bank">Kredit ke bank</option>
                        <option value="Lain-lain">Lain-lain</option>

                    </select>
                </div>
                <div class="col-lg-6">
                    <label>No. Akaun Bank</label>
                    <input name="ctl00$MyContentPlaceHolder$TextNoAkaun" type="text"
                           id="MyContentPlaceHolder_TextNoAkaun" class="form-control rounded-corner"
                           placeholder="NoAkaun"/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Jenis Bayaran</label>
                    <input name="ctl00$MyContentPlaceHolder$TxtJenisBayar" type="text"
                           id="MyContentPlaceHolder_TxtJenisBayar" class="form-control rounded-corner"
                           placeholder="Jenis Bayaran"/>
                </div>
                <div class="col-lg-6">
                    <label>SODO/VOT</label>
                    <input name="ctl00$MyContentPlaceHolder$TextSodo" type="text" id="MyContentPlaceHolder_TextSodo"
                           class="form-control rounded-corner" placeholder="Sodo"/>
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
                <h3 class="card-label"><i class="fas fa-wallet"></i>&nbsp;&nbsp;Skim Gaji Terakhir SSM 2012</h3>
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
            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Peringkat</label>
                    <input name="ctl00$MyContentPlaceHolder$txtPeringkat" type="text"
                           id="MyContentPlaceHolder_txtPeringkat" class="form-control rounded-corner"
                           placeholder="Peringkat"/>
                </div>
                <div class="col-lg-6">
                    <label>Gaji Pokok Dibayar (RM)</label>
                    <input name="ctl00$MyContentPlaceHolder$txtGajiPokok" type="text"
                           id="MyContentPlaceHolder_txtGajiPokok" class="form-control rounded-corner"
                           placeholder="GajiPokok"/>
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
                <h3 class="card-label"><i class="fas fa-wallet"></i>&nbsp;&nbsp;Skim Gaji Terakhir SSM 2011</h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = '{{ route('staf.selenggara.jadualGajiPentauliahan') }}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Ke Pautan Jadual Gaji">
                    <i class="fas fa-search-plus"></i>
                    Jadual Gaji
                </button>
            </div>
        </div>

        <div class="card-body">
            <!--begin: page content-->
            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Mata Gaji</label>
                    <input name="ctl00$MyContentPlaceHolder$TextMataGaji" type="text"
                           id="MyContentPlaceHolder_TextMataGaji" class="form-control rounded-corner"
                           placeholder="MataGaji"/>
                </div>
                <div class="col-lg-6">
                    <label>Gaji Pokok Dibayar (RM)</label>
                    <input name="ctl00$MyContentPlaceHolder$GajiPokokSMM" type="text"
                           id="MyContentPlaceHolder_GajiPokokSMM" class="form-control rounded-corner"
                           placeholder="GajiPokokSMM"/>
                </div>
            </div>
            <br/>
            <!-- Mula: Datatable-->
            <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                   id="kt_datatable_infoGaji">
                <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Kod Gaji</th>
                    <th title="Field #3">Keterangan</th>
                    <th title="Field #4">Jumlah (RM)</th>
                    <th title="Field #5">Tarikh Kemaskini</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>046</td>
                    <td>ELAUN KHIDMAT AWAM</td>
                    <td>0.00</td>
                    <td>25/06/2010</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>005</td>
                    <td>BANTUAN SARA HIDUP (COLA)</td>
                    <td>0.00</td>
                    <td>25/06/2010</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>048</td>
                    <td>IMBUHAN TETAP PERUMAHAN</td>
                    <td>0.00</td>
                    <td>25/06/2010</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>027</td>
                    <td>IMBUHAN TETAP KERAIAN</td>
                    <td>0.00</td>
                    <td>25/06/2010</td>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-house-user"></i>&nbsp;&nbsp;Persaraan</h3>
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
            <div class="row form-group">
                <div class="col-lg-6">
                    <label>No. KWSP</label>
                    <span style="color: red">*</span>
                    <input name="ctl00$MyContentPlaceHolder$Text" type="text" id="MyContentPlaceHolder_Text"
                           class="form-control rounded-corner" placeholder="Saraan" required="required"/>
                </div>
                <div class="col-lg-6">
                    <label>Tarikh PTB</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" placeholder="Sila masukkan tarikh" id="kt_datepicker_5"
                               value="28/12/2000"/>
                        <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="flaticon2-calendar-1"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Tarikh mula mencarum</label>
                    <div class="input-group date mb-0 ">
                        <input type="text" class="form-control" placeholder="Sila masukkan tarikh" id="kt_datepicker_5"
                               value="28/12/2000"/>
                        <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="flaticon2-calendar-1"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label>Umur Pilihan Pencen</label>
                    <span style="color: red">*</span>
                    <select name="ctl00$MyContentPlaceHolder$DropDownList2" id="MyContentPlaceHolder_DropDownList2"
                            class="form-control">
                        <option value="Sila Pilih..">Sila Pilih..</option>
                        <option value="56">56</option>
                        <option value="58">58</option>

                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Jenis KWSP</label>
                    <span style="color: red">*</span>
                    <select name="ctl00$MyContentPlaceHolder$DropDownList1" id="MyContentPlaceHolder_DropDownList1"
                            class="form-control">
                        <option value="Sila Pilih..">Sila Pilih..</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>

                </div>
                <div class="col-lg-6">
                    <label>No. Pencen</label>
                    <input name="ctl00$MyContentPlaceHolder$TextNoPencen" type="text"
                           id="MyContentPlaceHolder_TextNoPencen" class="form-control rounded-corner"
                           placeholder="NoPencen"/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Tarikh mula pencen</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" placeholder="Sila masukkan tarikh" id="kt_datepicker_5"
                               value="28/12/2000"/>
                        <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="flaticon2-calendar-1"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

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
                <h3 class="card-label"><i class="fas fa-poll"></i>&nbsp;&nbsp;LHDN</h3>
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
            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Kategori</label>
                    <input name="ctl00$MyContentPlaceHolder$TextKategori" type="text"
                           id="MyContentPlaceHolder_TextKategori" class="form-control rounded-corner"
                           placeholder="Kategori"/>
                </div>
                <div class="col-lg-6">
                    <label>No. Penyata Pendapatan</label>
                    <input name="ctl00$MyContentPlaceHolder$TextPenyataPendapatan" type="text"
                           id="MyContentPlaceHolder_TextPenyataPendapatan" class="form-control rounded-corner"
                           placeholder="Penyata"/>
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
                <h3 class="card-label"><i class="fas fa-universal-access"></i>&nbsp;&nbsp;PERKESO</h3>
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
            <div class="row form-group">
                <div class="col-lg-6">
                    <label>Kategori</label>
                    <input name="ctl00$MyContentPlaceHolder$TextKategori" type="text"
                           id="MyContentPlaceHolder_TextKategori" class="form-control rounded-corner"
                           placeholder="Kategori"/>
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <!-- Title : Maklumat Gaji n Garis Panjang-->
        <div class="card-body">
            <center>
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Simpan Semua Maklumat">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
            </center>
        </div>
    </div>
    <!--end::Card-->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_infoGaji').KTDatatable({
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
                            field: 'Kod Gaji',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 80,
                        },
                        {
                            field: 'Keterangan',
                            width: 200,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Jumlah (RM)',
                            width: 60,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
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

    {{--    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>--}}
    {{--    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>--}}
    {{--    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>--}}
@endsection