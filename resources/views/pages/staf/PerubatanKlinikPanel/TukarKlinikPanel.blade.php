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

                        <div class="row">

                        </div>
                        <p />
                        <div class="row">

                        </div>
                        <p />
                    </div>


                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <br />
    <!--start: Maklumat Klinik Panel Yang Dibatalkan-->

    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Klinik Panel Yang Dibatalkan</h3>
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
                        <div class="col-lg-4"><label><b>Nama Klinik</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="KLINIK BAHAGIA" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kod Klinik</b></label>
                                <input type="text" class="form-control rounded-corner" value="534534" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Cawangan</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
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


    <!--begin::Maklumat Klinik Panel Baru-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Klinik Panel Baru</h3>
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
                        <div class="col-lg-12"><label><b>Nama Klinik</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="KLINIK LEE" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kod Klinik</b></label>
                                <input type="text" class="form-control rounded-corner" value="1029876" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Cawangan</b></label>
                                <input type="text" class="form-control rounded-corner" value="KULAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Sebab Pertukaran</b></label>
                                <textarea id="w3review" name="w3review" rows="4"  cols="140"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="" value="" align="center" disabled="disabled">
                                </label>

                                <label><b>Saya mengaku bahawa maklumat yang diberikan seperti di atas adalah benar.</b></label>
                            </div>
                        </div>


                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>
    </div>
    <!--end::Maklumat Klinik Panel Yang Dibatalkan-->
    <br />
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
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Hantar </button>
                        <a href="{{route('staf.PerubatanKlinikPanel.PertukaranKlinikPanel')}}" class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali </a>



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

