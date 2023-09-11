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


    <!-- Mula: Pembiayaan Perubatan-->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Senarai Pembiayaan Perubatan
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
                    <td>Borang Perubatan</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                                <button onclick="window.location =''"
                                        type="button" class="btn btn-sm btn-icon btn-light-primary">
                                    <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                    </i>
                                </button>
                </tr>
                <tr>
                    <td></td>
                    <td>Borang Perubatan 1/09 ( Ubat / Alat / Perkhidmatan Perubatan / Rawatan )</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                <tr>
                    <td></td>
                    <td>Borang Perubatan 2/09 ( Rawatan Kecemasan di Hospital/ Klinik Swasta )</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                            <button onclick="window.location =''"
                                    type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                                </i>
                            </button>
                </tr>
                <tr>
                    <td></td>
                    <td>Borang Perubatan 3/09 ( Rawatan Luar Negeri )</td>
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
                    <td>Surat Pengesahan dan Perakuan Dari Pegawai/ Pakar Perubatan Kerajaan/ Salinan Surat Rujukan Hospital</td>
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
                    <td>Dokumen Kewangan : Sebut Harga / Resit Pembelian / Invois</td>
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
                    <td>Surat Permohonan Melalui PSM PTJ</td>
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
                    <td>Surat Permohonan Pesara; jika berkaitan</td>
                    <td class="text-right p-0">
                    <div style="text-align: center;">
                    <button onclick="window.location =''"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                        <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                        </i>
                    </button>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Salinan Kad Pengenalan</td>
                    <td class="text-right p-0">
                    <div style="text-align: center;">
                    <button onclick="window.location =''"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                        <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                        </i>
                    </button>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Salinan Kad Pesara; jika berkaitan</td>
                    <td class="text-right p-0">
                    <div style="text-align: center;">
                    <button onclick="window.location =''"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                        <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                        </i>
                    </button>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Alamat Pusat Dialisis; jika berkaitan</td>
                    <td class="text-right p-0">
                    <div style="text-align: center;">
                    <button onclick="window.location =''"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                        <img src="{{ asset('media/svg/icons/Files/Upload.svg') }}"height="25" ></img>
                        </i>
                    </button>
                </tr>
                 <tr>
                    <td>9</td>
                    <td>Ulasan Pegawai Perubatan Pusat Kesihatan Universiti</td>
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
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Pembiayaan Perubatan -->
    <!--begin::Pengesahan PSM PTJ-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Pengesahan PSM PTJ</h3>
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
                        <div class="col-lg-12"><label><b>Tarikh Terima</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="02/01/2021" required="required" disabled="disabled" />
                        </div>


                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Disemak Oleh</b></label>
                            <input type="text" class="form-control" value="ABU BAKAR BIN OMAR" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tarikh Semak</b></label>
                            <input type="text" class="form-control" value="2/02/2021" required="required" disabled="disabled" />
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
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Hantar</button>
                        <button class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali</button>
                    </div>
                </div>

            </div>

        </div>
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


