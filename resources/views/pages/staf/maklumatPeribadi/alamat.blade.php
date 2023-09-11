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
                <h3 class="card-label"><i class="fas fa-building"></i> Alamat Pejabat</h3>
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
                    <!--begin: row kiri-->
                    <!--begin: row kiri sherry-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>No. Bilik</b></label>
                            <span style="color: red">*</span>
                            <input type="text" class="form-control mb-1" name="ALAMAT_P1"
                                   value="" required="required"
                                   placeholder="No. Bilik" disabled="disabled"/>
                            <input type="text" class="form-control mb-1" name="ALAMAT_P2"
                                   value="" required="required"
                                   placeholder="Alamat 2" disabled="disabled"/>
                            <input type="text" class="form-control" name="ALAMAT_P3"
                                   value="" required="required"
                                   placeholder="Alamat 3" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Poskod</b></label>
                            <span style="color: red">*</span>
                            <input type="text" TextBox ID="txtID" runat="server" class="form-control rounded-corner"
                                   name="POSKOD_P" value=""
                                   placeholder="Poskod" required="required" disabled="disabled"/>
                        </div>
                        <!--</form>-->
                        <!--end::Form-->
                    </div>
                    <!--end: row kiri-->
                    <!--begin: row kanan-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Bandar</b></label>
                            <span style="color: red">&#42;</span>
                            <input type="text" class="form-control" name="BANDAR_P"
                                   value="" required="required"
                                   placeholder="Bandar" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Negeri</b></label>
                            <span style="color: red">&#42;</span>
                            <input type="text" class="form-control mb-6" name="NEGERI_P"
                                   value="" required="required"
                                   placeholder="Negeri" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Nombor Sambungan</b></label>
                            <span style="color: red">&#42;</span>
                            <input type="text" class="form-control" name="TEL1_P"
                                   value="" required="required"
                                   placeholder="Nombor Sambungan" disabled="disabled"/>
                        </div>
                        <!--end: row kanan-->
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
                <h3 class="card-label"><i class="fas fa-home"></i> Alamat Tetap</h3>
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
                    <!--begin: row kiri-->
                    <!--begin: row kiri sherry-->
                    <div class="col-lg-6">
                        {{--<h5><u>Maklumat Peribadi</u></h5>--}}
                        {{--<p></p>--}}
                        <div class="form-group">
                            <label><b>Alamat</b></label>
                            <input type="text" class="form-control mb-1" name="ALAMAT1"
                                   value="" required="required"
                                   placeholder="Alamat" disabled="disabled"/>
                            <input type="text" class="form-control mb-1" name="ALAMAT2"
                                   value="" required="required"
                                   placeholder="Alamat 2" disabled="disabled"/>
                            <input type="text" class="form-control" name="ALAMAT3"
                                   value="" required="required"
                                   placeholder="Alamat 3" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Poskod</b></label>
                            <input type="number" TextBox ID="txtNoPekerja" runat="server" class="form-control"
                                   name="POSKOD" value="" required="required"
                                   placeholder="Poskod" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Negeri</b></label>
                            <input type="text" class="form-control" name="NEGERI"
                                   value="" required="required"
                                   placeholder="Negeri" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>No Tel Bimbit</b></label>
                            <input type="text" class="form-control" name="TEL1"
                                   value="" required="required"
                                   placeholder="No Tel Bimbit" disabled="disabled"/>
                        </div>
                        <!--</form>-->
                        <!--end::Form-->
                    </div>
                    <!--end: row kiri-->
                    <!--begin: row kanan-->
                    <div class="col-lg-6">
                        {{--<h5><u>Maklumat Perkhidmatan</u></h5>--}}
                        {{--<p></p>--}}

                        <div class="form-group">
                            <label><b>Bandar</b></label>
                            <input type="text" class="form-control mb-1" name="BANDAR"
                                   value="" required="required"
                                   placeholder="Bandar" disabled="disabled"/>
                            <input type="text" TextBox ID="txtID" runat="server"
                                   class="form-control rounded-corner mb-1"
                                   required="required" placeholder="Bandar 2" disabled="disabled"/>
                            <input type="text" class="form-control" style="visibility:hidden"/>
                        </div>
                        <div class="form-group">
                            <label><b>Daerah</b></label>
                            <input type="text" TextBox ID="txtID" runat="server" class="form-control rounded-corner"
                                   name="DAERAH" value="" required="required"
                                   placeholder="Daerah" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Negara</b></label>
                            <input type="text" class="form-control" name="NEGARA"
                                   value="" required="required"
                                   placeholder="Negara" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>No Tel Rumah</b></label>
                            <input type="text" class="form-control" name="TEL1_S"
                                   value="" required="required"
                                   placeholder="No Tel Rumah" disabled="disabled"/>
                        </div>

                        <!--end: row kanan-->
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
                <h3 class="card-label"><i class="fas fa-envelope-open"></i> Alamat Surat Menyurat</h3>
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
                    <!--begin: row kiri-->
                    <!--begin: row kiri sherry-->
                    <div class="col-lg-6">
                        {{--<h5><u>Maklumat Peribadi</u></h5>--}}
                        {{--<p></p>--}}
                        <div class="form-group">
                            <label><b>Alamat</b></label>
                            <input type="text" class="form-control mb-1" name="ALAMAT_S1"
                                   value="" required="required"
                                   placeholder="Alamat" disabled="disabled"/>
                            <input type="text" class="form-control mb-1" name="ALAMAT_S2"
                                   value="" required="required"
                                   placeholder="Alamat 2" disabled="disabled"/>
                            <input type="text" class="form-control" name="ALAMAT_S3"
                                   value="" required="required"
                                   placeholder="Alamat 3" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Poskod</b></label>
                            <input type="number" TextBox ID="txtNoPekerja" runat="server" class="form-control"
                                   name="POSKOD_S" value=""
                                   required="required" placeholder="Poskod" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Negeri</b></label>
                            <input type="text" class="form-control" name="NEGERI_S"
                                   value="" required="required" placeholder="Negeri"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>No Tel Bimbit</b></label>
                            <input type="text" class="form-control" name="TEL1"
                                   value="" required="required" placeholder="No Tel Bimbit"
                                   disabled="disabled"/>
                        </div>
                        <!--</form>-->
                        <!--end::Form-->
                    </div>
                    <!--end: row kiri-->
                    <!--begin: row kanan-->
                    <div class="col-lg-6">
                        {{--<h5><u>Maklumat Perkhidmatan</u></h5>--}}
                        {{--<p></p>--}}
                        <div class="form-group">
                            <label><b>Bandar</b></label>
                            <input type="text" TextBox ID="txtID" runat="server" class="form-control rounded-corner"
                                   name="BANDAR_S" value=""
                                   required="required" placeholder="Bandar" disabled="disabled"/>
                            <input type="text" class="form-control" style="visibility:hidden"/>
                        </div>
                        <div class="form-group">
                            <label><b>Negeri</b></label>
                            <input type="text" class="form-control" name="NEGERI_S"
                                   value="" required="required" placeholder="Negeri"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Negara</b></label>
                            <input type="text" class="form-control" name="NEGARA"
                                   value="" required="required" placeholder="Negara"
                                   disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>No Tel Rumah</b></label>
                            <input type="text" class="form-control" name="TEL1_S"
                                   value="" required="required" placeholder="No Tel Rumah"
                                   disabled="disabled"/>
                        </div>
                    </div>
                    <!--end: row kanan-->
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection