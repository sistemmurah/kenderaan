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

    <!--begin::Card Maklumat Staf-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Staf</h3>
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
                        <div class="col-lg-4"><label><b>Nombor Pekerja</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="9787" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Nama Staf</b></label>
                                <input type="text" class="form-control rounded-corner" value="AZWIN OMAR" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Umur</b></label>
                                <input type="text" class="form-control rounded-corner" value="35 TAHUN" required="required" disabled="disabled" />
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
                            <label><b>Tarikh Lahir</b></label>
                            <input type="text" class="form-control" value="ISLAM" required="24/10/1983" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Nama Pasangan</b></label>
                            <input type="text" class="form-control" value="AMIRUL HUSSIN" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>No. Kad Pengenalan Pasangan</b></label>
                            <input type="text" class="form-control" value="7900654000" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>

    <br />



    <!--begin::Maklumat Anak-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Anak</h3>
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
                        <div class="col-lg-12"><label><b>No. Surat Beranak</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="J934832748" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Kad Pengenalan</b></label>
                                <input type="text" class="form-control rounded-corner" value="100923029876" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Nama</b></label>
                                <input type="text" class="form-control rounded-corner" value="AHMAD SHAMIM AMIRUL" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tarikh Lahir</b></label>
                                <input type="text" class="form-control rounded-corner" value="23/09/2010" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kecacatan</b></label>
                                <input type="text" class="form-control rounded-corner" value="TIADA" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Pertalian</b></label>
                                <input type="text" class="form-control rounded-corner" value="ANAK KANDUNG" required="required" disabled="disabled" />
                            </div>
                        </div>

                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Jantina</b></label>
                            <input type="text" class="form-control" value="LELAKI" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Warna Kad Pengenalan</b></label>
                            <input type="text" class="form-control" value="BIRU" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Negeri Lahir</b></label>
                            <input type="text" class="form-control" value="JOHOR" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Kedudukan Anak</b></label>
                            <input type="text" class="form-control" value="1" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Taraf Perkahwinan</b></label>
                            <input type="text" class="form-control" value="BUJANG" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>
    </div>
    <!--end::Maklumat Anak-->
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
                        <a href="{{route('staf.PerubatanKlinikPanel.TambahanTanggungan')}}" class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali </a>



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

