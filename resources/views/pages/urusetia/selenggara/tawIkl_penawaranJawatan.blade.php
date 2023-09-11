{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

    <!--Carian-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom gutter-b example example-compact">
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title flaticon2-search-1">&nbsp;&nbsp;Carian</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Fakulti <span style="color:Red;">*</span></label>
                                        <select class="form-control">
                                            <option value="">SEMUA</option>
                                            <option value="">J21 - FAKULTI ALAM BINA</option>
                                            <option value="">J26 - FAKULTI SAINS</option>
                                            <option value="">J07 - JABATAN PERKHIDMATAN DIGITAL</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Sesi <span style="color:Red;">*</span></label>
                                        <select class="form-control">
                                            <option value="">SEMUA</option>
                                            <option value="">2020/1</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Kod Jawatan <span style="color:Red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Sila masukkan kod jawatan" />
                                       
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="reset" class="btn btn-primary mr-2">Cari</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Senarai-->

    <div class="container">
        <div class="card card-custom gutter-b example example-compact">
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title flaticon2-list-1">&nbsp;&nbsp;Senarai Penawaran Jawatan</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <div style="text-align: right">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table id="datamain" style="vertical-align: top; width: 100%" class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                            <td width="50%">
                                                                <table id="datatable" style="vertical-align: top; width: 100%" class="table table-striped table-bordered table-hover display">
                                                                    <thead>
                                                                        <tr>
                                                                            <td colspan="5">Pilih jawatan yang ingin ditawarkan</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Bil.</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Fakulti</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Kod Jawatan</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Nama Jawatan</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="MyContentPlaceHolder_myDataPemohon">
                                                                        <tr>
                                                                            <td>1.</td>
                                                                            <td>FAB</td>
                                                                            <td>JA29E</td>
                                                                            <td>PENOLONG PEGAWAI SENIBINA</td>
                                                                            <td><a href="#" class="fa fa-arrow-right" onclick="window.open('" + url + "', '_crsPageProsesPenawaran', 'location=yes,height=340,width=520,scrollbars=yes,status=yes');"></a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="50%">
                                                                <table id="datatableII" style="vertical-align: top; width: 100%" class="table table-striped table-bordered table-hover display">
                                                                    <thead>
                                                                        <tr>
                                                                            <td colspan="5">Senarai jawatan yang telah ditawarkan</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px"></th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Bil.</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Fakulti</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Kod Jawatan</th>
                                                                            <th class="text-center" style="vertical-align: top; height: 20px">Nama Jawatan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="MyContentPlaceHolder_myDataSalin">
                                                                        <tr>
                                                                            <td><a href="#" class="fa fa-arrow-left" onclick="window.open('" + url + "', '_crsPageProsesPenawaran', 'location=yes,height=340,width=520,scrollbars=yes,status=yes');"></a></td>
                                                                            <td>1.</td>
                                                                            <td>FS</td>
                                                                            <td>CA29</td>
                                                                            <td>PENOLONG PEGAWAI SAINS</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="text-align: right">
                                                                Salin rekod penawaran sesi <b>
                                                                    <span id="MyContentPlaceHolder_lblCurrentSesisem">2020/1</span>
                                                                </b> ke sesi
                                                                <input name="ctl00$MyContentPlaceHolder$txtSalinSesisem" type="text" value="2020/2" id="MyContentPlaceHolder_txtSalinSesisem" />&nbsp;
                                                                <input type="submit" name="ctl00$MyContentPlaceHolder$btnSalinSemSesi" value="Ya" id="MyContentPlaceHolder_btnSalinSemSesi" class="btn btn-primary btn-sm" style="width: 15%" /><br />
                                                                <span id="MyContentPlaceHolder_lblMsg"></span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection