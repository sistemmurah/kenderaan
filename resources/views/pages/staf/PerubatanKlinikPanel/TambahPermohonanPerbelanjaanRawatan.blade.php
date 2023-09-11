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

    <!--begin::Card Maklumat Pegawai-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Pegawai</h3>
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
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-4"><label><b>Nama Pegawai/Pesara</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="9787" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Kad Pengenalan</b></label>
                                <input type="text" class="form-control rounded-corner" value="AZWIN OMAR" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Skim Perkhidmatan/Gred</b></label>
                                <input type="text" class="form-control rounded-corner" value="AZWIN OMAR" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <br/>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Pegawai di bawah SSB/SSM</b></label>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name=""  align="left" >
                                        <label><b>Ya</b></label>
                                    </label>
                                    <label>
                                        <input type="checkbox" name=""  align="right" >
                                        <label><b>Tidak</b></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <br />
    <!--start: Maklumat Pesakit-->

    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Pesakit</h3>
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
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-4"><label><b>Nama Pesakit</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="KLINIK BAHAGIA" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Kad Pengenalan/Sijil Kelahiran</b></label>
                                <input type="text" class="form-control rounded-corner" value="534534" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Hubungan Pesakit dengan Pegawai/Pesara</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Umur</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <br/>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Masih Bersekolah</b></label>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name=""  align="left" >
                                        <label><b>Ya</b></label>
                                    </label>
                                    <label>
                                        <input type="checkbox" name=""  align="right" >
                                        <label><b>Tidak</b></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Daif</b></label>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name=""  align="left" >
                                        <label><b>Ya</b></label>
                                    </label>
                                    <label>
                                        <input type="checkbox" name=""  align="right" >
                                        <label><b>Tidak</b></label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <p />
                        <div class="row">
                        </div>
                        <p />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>


    <!--begin::Rawatan dan Tuntutan Perbelanjaan-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Rawatan dan Tuntutan Perbelanjaan</h3>
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
                        <input type="text" class="form-control rounded-corner"  class="text-right" value="Rawatan Di Klinik/Hospital Kerajaan" required="required" disabled="disabled" />
                    </div>
                </div>
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label><b>Nama Klinik/Hospital</b></label>
                            <input type="text" class="form-control rounded-corner" value="KLINIK LEE" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Alamat Klinik/Hospital</b></label>
                                <input type="text" class="form-control rounded-corner" value="1029876" required="required" disabled="disabled" />
                                <input type="text" class="form-control rounded-corner" value="1029876" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Negeri</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tarikh Rawatan</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            </div>
                        </div>


                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b></b></label>
                        </div>
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label><b>Bandar</b></label>
                            <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                        </div>
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label><b>Poskod</b></label>
                            <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->

            <br />
            <!--begin: page content-->
            <div>
                <div class="form-group" style="column-span: page"  class="center"  >
                    <input type="text" class="form-control rounded-corner" value="Pembekal Kemudahan Perubatan" required="required" disabled="disabled" />
                </div>
                <div>
                    <div class="form-group" style="column-span: page" >
                    </div>
                </div>
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label><b>Nama Hospital/Agensi Swasta</b></label>
                            <input type="text" class="form-control rounded-corner" value="KLINIK LEE" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Alamat Klinik/Hospital</b></label>
                                <input type="text" class="form-control rounded-corner" value="1029876" required="required" disabled="disabled" />
                                <input type="text" class="form-control rounded-corner" value="1029876" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Negeri</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tarikh Kemudahan Perubatan Diperolehi</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            </div>
                        </div>


                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b></b></label>
                        </div>
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label><b>Bandar</b></label>
                            <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                        </div>
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label><b>Poskod</b></label>
                            <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>
    </div>
    <!--end::-->
    <br />

    <!-- Mula: Senarai Tuntutan Rawatan-->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Lampiran
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
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
                    <th>Senarai Ubat/Alat/Perkhidmatan Perubatan/Rawatan</th>
                    <th><div style="text-align: center;">No. Rujukan Dokumen Kewangan</th>
                    <th><div style="text-align: center;">Harga (RM)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Predisone Intensol</td>
                    <td>D3452345</td>
                    <td>70.00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" class="form-control rounded-corner" value="" required="required"  />
                    </td>
                    <td><input type="text" class="form-control rounded-corner" value="" required="required"  />
                    </td>
                    <td><input type="text" class="form-control rounded-corner" value="" required="required"  />
                    </td>

                </tr>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tamat: Senarai Tuntutan Rawatan -->
    <br />
    <!-- Mula: lampiran-->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Senarai Tuntutan Rawatan
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
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
                    <th>Nama Dokumen</th>
                    <th><div style="text-align: center;">Muat Naik Dokumen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Surat Pengesahan Pegawai/Pakar Perubatan</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Surat Pengesahan Kementerian Kesihatan Malaysia</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Surat Pengesahan Ketua Pengarah Kesihatan Malaysia</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Surat Pengesahan Institut/Pengajian Tinggi</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dokumen Kewangan</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tamat:lampiran -->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Perakuan</h3>
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

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="" value="" align="center" disabled="disabled">
                            </label>

                            <label><b>Saya mengaku bahawa maklumat yang diberikan seperti di atas adalah benar.</b></label>
                        </div>
                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>
    </div>
    <!--end::Pengesahan PSM PTJ-->
    <br />



    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="form-group row">
            </div>

            <div id="MyContentPlaceHolder_savebtn">
                <div class="col-lg-19">
                    <div style="text-align: center;">
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Hantar </button>
                        <a href="{{route('staf.PerubatanKlinikPanel.Perubatan109JPA')}}" class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali </a>



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

