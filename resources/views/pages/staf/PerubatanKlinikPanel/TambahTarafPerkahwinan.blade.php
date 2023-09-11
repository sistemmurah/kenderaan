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

    <br />
    <!--start: Maklumat Staf-->

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
                            <input type="text" class="form-control rounded-corner" value="13456" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Nama Staf</b></label>
                                <input type="text" class="form-control rounded-corner" value="ALIA MAISARAH ALI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Taraf Perkahwinan</b></label>
                                <select class="form-control" id="" >
                                    <option>BERKAHWIN</option>
                                    <option>BERCERAI</option>
                                    <option>MENINGGAL DUNIA</option>
                                    <option>RUJUK</option>
                                </select>
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
    <!--Mula Maklumat Pasangan-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Pasangan</h3>
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
                        <div class="col-lg-4"><label><b>Nama Pasangan</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="AZIZAN BIN MOHAMMAD" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tarikh Lahir</b></label>
                                <input type="text" class="form-control rounded-corner" value="13/09/1977" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Agama</b></label>
                                <input type="text" class="form-control rounded-corner" value="ISLAM" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Warganegara</b></label>
                                <input type="text" class="form-control rounded-corner" value="MALAYSIA" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kecacatan</b></label>
                                <input type="text" class="form-control rounded-corner" value="TIADA" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
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
                            <label><b>No. Kad Pengenalan</b></label>
                            <input type="text" class="form-control" value="ISLAM" required="770455660987" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Warna Kad Pengenalan</b></label>
                            <input type="text" class="form-control" value="BIRU" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Kaum</b></label>
                            <input type="text" class="form-control" value="MELAYU" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>No. Sijil Kerakyatan (Jika Ada)</b></label>
                            <input type="text" class="form-control" value="-" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                        </div>
                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <!--end::Card Maklumat Pasangan-->
    <br />


    <!--Mula Maklumat Majikan Pasangan-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Majikan Pasangan</h3>
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
                        <div class="col-lg-4"><label><b>Status Majikan</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="SWASTA" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tarikh Mula Berkhidmat</b></label>
                                <input type="text" class="form-control rounded-corner" value="1/01/2001" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Alamat Majikan</b></label>
                                <input type="text" class="form-control rounded-corner" value="NO 45, LOT 34, JALAN CEMPAKA" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Bandar</b></label>
                                <input type="text" class="form-control rounded-corner" value="SENAI" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>No. Telefon</b></label>
                                <input type="text" class="form-control rounded-corner" value="017-7789334" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
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
                            <label><b>Pekerjaan</b></label>
                            <input type="text" class="form-control" value="PENGURUS" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Nama Majikan</b></label>
                            <input type="text" class="form-control" value="ALEX SDN BHD" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Negeri</b></label>
                            <input type="text" class="form-control" value="JOHOR" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Poskod</b></label>
                            <input type="text" class="form-control" value="86400" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>No. Cukai Pendapatan Pasangan</b></label>
                            <input type="text" class="form-control" value="SDF65656" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                        </div>
                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <!--end::Card Maklumat Majikan Pasangan-->
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
                        <a href="{{route('staf.PerubatanKlinikPanel.TarafPerkahwinan')}}" class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali</a>


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

