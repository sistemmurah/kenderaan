{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--begin::Card Profile Info-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">

            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Search.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Carian Staf</h3>
            </div>
            <div class="card-toolbar">
                <a href="" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">

                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <!--begin: page content-->
            <div>
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label><b>Carian</b></label>
                            <select class="form-control" id="CarianPesara">
                                <option>Sila Pilih</option>
                                <option>No. Kad Pengenalan</option>
                                <option>Nama</option>
                            </select>
                        </div>
                    </div>
                    <!--end: row Kiri-->
                    <!--begin: row kanan -->
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label><b>Nama/No. Kad Pengenalan</b></label>
                            <input type="text" class="form-control" value="" required="required"  />
                        </div>
                        <!-- Mula: Butang Carian/Keluar-->

                            <div class="col-lg-12">
                                    <div class="">
                                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Carian
                                        </button>
                                        <button class="btn btn-danger font-weight-bold" style="align-items: center"> Keluar
                                        </button>

                                    </div>
                            </div>

                        <!-- Mula: Butang Carian/Keluar -->


                    </div>
                    <!--end: row kanan sekali-->
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card Profile Info-->
    <br />

    <!--begin::Card Maklumat Peribadi-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Peribadi</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <br />
            <!--begin: page content-->
            <div>
                <div>
                    <div class="form-group" style="column-span: page" >
                        <div style="text-align: center;">
                        <img src="{{ asset('media/users/default.jpg') }}"height="150" ></img>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-4"><label><b>Nama Pegawai</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="AZIZAN BIN MOHAMMAD" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Staf</b></label>
                                <input type="text" class="form-control rounded-corner" value="2387" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tarikh Lahir</b></label>
                                <input type="text" class="form-control rounded-corner" value="05/01/1956" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Gaji Pokok</b></label>
                                <input type="text" class="form-control rounded-corner" value="RM 7686.00" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Telefon</b></label>
                                <input type="text" class="form-control rounded-corner" value="017-7789334" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Kad Pengenalan</b></label>
                                <input type="text" class="form-control rounded-corner" value="561010-02-5573" required="required" disabled="disabled" />
                            </div>
                        </div>

                        <div class="row">

                        </div>
                        <p />
                        <div class="row">

                        </div>
                        <p />
                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Agama</b></label>
                            <input type="text" class="form-control" value="ISLAM" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tempat Lahir</b></label>
                            <input type="text" class="form-control" value="SABAK BERNAM" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>No. Akaun Bank</b></label>
                            <input type="text" class="form-control" value="7900654000" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Nama Bank</b></label>
                            <input type="text" class="form-control" value="CIMB" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>CARA BAYARAN</b></label>
                            <select class="form-control" id="" disabled="disabled">
                                <option>Tunai</option>
                                <option>Atas Talian</option>
                            </select>
                        </div>
                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <!--end::Card Maklumat Pewaris-->
    <br />

    <!-- Mula: Maklumat Pewaris -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Maklumat Pewaris
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Maklumat Pewaris">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
                <thead style="background-color:#fcf4a3">
                <tr>
                </tr>

                <tr>
                    <th>Bil.</th>
                    <th>Nama Waris</th>
                    <th>No. Kad Pengenalan</th>
                    <th>Hubungan</th>
                    <th>Alamat</th>
                    <th>No. Telefon </th>
                    <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>SITI BINTI ABDULLAH</td>
                    <td>861223-01-4030</td>
                    <td>ISTERI</td>
                    <td>215,JALAN CEMPAKA, BANDAR BARU BANGI, 43100 SELANGOR</td>
                    <td>015-6467 357</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                <tr>
                    <td>2</td>
                    <td>RUZILA ANA BINTI MOHD</td>
                    <td>561201-05-4563</td>
                    <td>IBU</td>
                    <td>NO 23, KAMPUNG SEMBERUNG, BATU PAHAT 87000 JOHOR</td>
                    <td>016-9987653</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                </tr>
                <tr>
                    <td>3</td>
                    <td>AHMAD KARIM BIN YUSOF</td>
                    <td>131201-04-4500</td>
                    <td>ANAK</td>
                    <td>NO 45, JALAN PERTANIAN 5, TAMAN UNIVERSITI SKUDAI 81300 JOHOR</td>
                    <td>016-9980000</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Maklumat Pewaris -->

    <!--begin::Card Kenyataan Perkhidmatan-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Kenyataan Perkhidmatan</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <br />
            <!--begin: page content-->
            <div>
                <div>
                    <div class="form-group" style="column-span: page" >
                    </div>
                </div>
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-12"><label><b>Tarikh Mula Berkhidmat</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="02/01/1983" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>PTJ Terakhir</b></label>
                                <input type="text" class="form-control rounded-corner" value="K07 PENGURUSAN MAKMAL UNIVERSITI" required="required" disabled="disabled" />
                            </div>
                        </div>

                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Tempoh Perkhidmatan</b></label>
                            <input type="text" class="form-control" value="32 TAHUN" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tarikh Wajib Bersara</b></label>
                            <input type="text" class="form-control" value="10/01/2015" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>
    </div>
    <!--end::Kenyataan Perkhidmatan-->
    <br />

    <!-- Mula: Maklumat Kesihatan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-heart-rate-monitor"></i>
                    Maklumat Kesihatan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Maklumat Kesihatan">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
                <thead style="background-color:#fcf4a3">
                <tr>
                </tr>
                <tr>
                    <th>Bil.</th>
                    <th>Tarikh</th>
                    <th>Jenis Permohonan</th>
                    <th>Butiran</th>
                    <th>Pengesahan Universiti / Pegawai Yang Berkuasa</th>
                    <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>05/11/2018</td>
                    <td>IJN</td>
                    <td>PEMBUAT PEMBEDAHAN</td>
                    <td>TIMBALAN PENDAFTAR BPO</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                </tr>
                <tr>
                    <td>2</td>
                    <td>19/01/2017</td>
                    <td>DIALISIS</td>
                    <td>BULANAN</td>
                    <td>TIMBALAN PENDAFTAR BPO</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                </tr>
                <tr>
                    <td>3</td>
                    <td>15/10/2016</td>
                    <td>RAWATAN</td>
                    <td>TEMUJANJI SUSULAN</td>
                    <td>TIMBALAN PENDAFTAR BPO</td>
                    <td class="text-right p-0">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Maklumat Kesihatan -->

    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="form-group row">
            </div>

            <div id="MyContentPlaceHolder_savebtn">
                <div class="col-lg-19">
                    <div style="text-align: center;">
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Cetak


                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection



{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection
