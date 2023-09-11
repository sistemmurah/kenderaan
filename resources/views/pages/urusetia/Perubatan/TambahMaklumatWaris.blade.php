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

    <!--begin::Card Maklumat Waris-->


    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Waris</h3>
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
                        <div class="col-lg-4"><label><b>Nama Waris</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="Qayyum Ilham Binti Fairus" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-4"><label><b>No. Kad Pengenalan</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="20190310-03-5678" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Hubungan</b></label>
                                <input type="text" class="form-control rounded-corner" value="Anak" required="required" disabled="disabled" />
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
                            <label><b>Alamat</b></label>
                            <input type="text" class="form-control" value="Selangor" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>No. Telefon</b></label>
                            <input type="text" class="form-control" value="019-233499" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tarikh Kemaskini</b></label>
                            <input type="text" class="form-control" value="RM 01/01/2021" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->
        </div>

    </div>
    <!--end::Card Maklumat Waris-->
    <br />




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
