{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <!-- Semak Permohonan Baru -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Semak Permohonan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Nama : </label>
                            <input name="ctl00$MyContentPlaceHolder$Nama" type="text" id="MyContentPlaceHolder_Nama" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label>Nombor Kad Pengenalan: </label>
                            <input name="ctl00$MyContentPlaceHolder$NoKP" type="text" id="MyContentPlaceHolder_NoKP" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Cari Berdasarkan :</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlCari" id="MyContentPlaceHolder_ddlCari" class="form-control">
                                <option value="">Sila Pilih ..</option>
                                <option value="Tarikh Iklan">Tarikh Iklan</option>
                                <option value="Nama Jawatan">Nama Jawatan</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Status :</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlStatus" id="MyContentPlaceHolder_ddlStatus" class="form-control">
                                <option value="">Sila Pilih ..</option>
                                <option value="not">Not Successful</option>
                                <option value="draft">Draft</option>
                                <option value="submitted">Submitted</option>
                                <option value="accepted">Accepted</option>
                                <option value="rejected">Rejected</option>
                                <option value="fail">Payment Fail</option>
                                <option value="interview">Interview</option>
                                <option value="reserved">Reserved</option>
                                <option value="process">In Process</option>
                                <option value="pay">Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Tarikh Iklan </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlIklan" id="MyContentPlaceHolder_ddlIklan" class="form-control">
                                <option value="">Sila Pilih ..</option>
                                <option value="">2019/2020 - 1</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Tarikh Tutup Iklan : </label>
                            <input name="ctl00$MyContentPlaceHolder$trkTutupIklan" type="text" id="MyContentPlaceHolder_trkTutupIklan" class="form-control" disabled="disabled" />
                        </div>
                        <div class="col-lg-4">
                            <label>Tarikh Tutup Proses : </label>
                            <input name="ctl00$MyContentPlaceHolder$trkTutupProses" type="text" id="MyContentPlaceHolder_trkTutupProses" class="form-control" disabled="disabled" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8">
                            <label>Nama Jawatan : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlAgent" id="MyContentPlaceHolder_ddlAgent" class="form-control">
                                <option value="">Sila Pilih ..</option>
                                <option value="">FA41A - PEGAWAI TEKNOLOGI MAKLUMAT (FA41)</option>
                                <option value="">FA41B - PEGAWAI TEKNOLOGI MAKLUMAT, GRED 41/44</option>
                                <option value="">FA44A - PEGAWAI TEKNOLOGI MAKLUMAT KANAN</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Kategori IPSB : </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlAgent" id="MyContentPlaceHolder_ddlAgent" class="form-control">
                                <option value="">Sila Pilih ..</option>
                                <option value="">KONSTRUK</option>
                                <option value="">SKOR KONSTRUK</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                        </div>
                    </div>
                    <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: center;">

                                <a id="MyContentPlaceHolder_btnSearch" class="btn btn-primary" href="javascript:__doPostBack(&#39;ctl00$MyContentPlaceHolder$btnSearch&#39;,&#39;&#39;)"><i class="fa fa-search"></i> Cari</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Senarai Permohonan Baru -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Permohonan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="IdTableList">
                        <thead class="colored">
                            <tr>
                                <th width="5%" style="text-align:center;">Bil</th>
                                <th width="20%" style="text-align:center;">Nama Jawatan</th>
                                <th width="10%" style="text-align:center;">Kampus</th>
                                <th width="10%" style="text-align:center;">Taraf Jawatan</th>
                                <th width="10%" style="text-align:center;">Jenis Iklan</th>
                                <th width="10%" style="text-align:center;">Status</th>
                                <th width="10%" style="text-align:center;">IPSB</th>
                                <th width="10%" style="text-align:center;">Bilangan Temuduga</th>
                                <th width="10%" style="text-align:center;">Jumlah Permohonan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

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