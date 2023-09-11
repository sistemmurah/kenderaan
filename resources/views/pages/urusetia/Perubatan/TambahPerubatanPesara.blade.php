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

    <br />

    <!--begin::Card Maklumat Perubatan Pesara-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Kesihatan</h3>
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
                        <div class="col-lg-4"><label><b>Tarikh Rawatan</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="10/12/2019" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Penyakit Kronik</b></label>
                                <select class="form-control" id="" >
                                    <option>Dialisis</option>
                                    <option>Jantung</option>
                                    <option>Buah Pinggang</option>
                                    <option>Kanser</option>
                                    <option>Darah Tinggi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Butiran</b></label>
                                <input type="text" class="form-control rounded-corner" value="Pembedahan" required="required" disabled="disabled" />
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
                            <label><b>Hospital yang buat rawatan</b></label>
                            <input type="text" class="form-control" value="Hospital HSA" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Kos perbelanjaan</b></label>
                            <input type="text" class="form-control" value="RM 1400" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Lampiran</b></label>
                            <div class="col-lg-8">
                                <div class="dropzone-panel mb-lg-6 mb-6">
                                    <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Muat Naik</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <!--end::Card Maklumat Perubatan Pesara-->
    <br />



    <!--begin::Card Pengesahan Pegawai-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Pengesahan Pegawai</h3>
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
                        <div class="col-lg-12"><label><b>Kelulusan Pegawai</b></label></div>
                        <div class="col-lg-12">
                            <select class="form-control" id="" >
                                <option>Lulus</option>
                                <option>Tidak Lulus</option>
                            </select>                        </div>

                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Nama Pegawai</b></label>
                            <input type="text" class="form-control" value=" JOHARI BIN ARIS" required="required" disabled="disabled" />
                        </div>


                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>
    </div>
    <!--end::Butang Simpan/Keluar-->
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
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Simpan </button>
                        <button class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali </button>

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
