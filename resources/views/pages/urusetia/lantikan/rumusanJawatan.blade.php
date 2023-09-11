{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<!--begin::Senarai-->
<div class="d-flex flex-column-fluid">
    <div class="container">
        <for class="card card-custom gutter-b example example-compact">
            <div class="card-body">
                <div class="row">
                    <div class="card" style="width: 100rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-list"></i>Rumusan Senarai Pendek Jawatan</h5>
                                <table class="table table-bordered table-hover" id="IdTableList">
                                    <thead style="background-color: antiquewhite">
                                        <tr>
                                            <th width="5%" style="text-align:center;">Bil</th>
                                            <th width="5%" style="text-align:center;">Kod Jawatan</th>
                                            <th width="15%" style="text-align:center;">Jawatan</th>
                                            <th width="10%" style="text-align:center;">Kampus</th>
                                            <th width="5%" style="text-align:center;">Taraf Jawatan</th>
                                            <th width="5%" style="text-align:center;">Jenis Iklan</th>
                                            <th width="5%" style="text-align:center;">Draf</th>
                                            <th width="5%" style="text-align:center;">Tidak Berjaya</th>
                                            <th width="5%" style="text-align:center;">Dihantar</th>
                                            <th width="5%" style="text-align:center;">Bayar</th>
                                            <th width="5%" style="text-align:center;">Shortlist HCM</th>
                                            <th width="5%" style="text-align:center;">Shortlist IPSB</th>
                                            <th width="5%" style="text-align:center;">Shortlist Fakulti</th>
                                            <th width="5%" style="text-align:center;">Bil. Temuduga</th>
                                            <th width="5%" style="text-align:center;">Jumlah Permohonan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="IdTableListMaklumatPermohonan_body">
                                        <tr>
                                            <td style="text-align:center;">
                                                1
                                            </td>
                                            <td style="text-align:center;">
                                                WA41D
                                            </td>
                                            <td>
                                                PEGAWAI KEWANGAN (WA41)
                                            </td>
                                            <td style="text-align:center;">
                                                JOHOR BAHRU
                                            </td>
                                            <td style="text-align:center;">
                                                TETAP
                                            </td>
                                            <td style="text-align:center;">
                                                TERBUKA
                                            </td>
                                            <td style="text-align:center;">
                                                446
                                            </td>
                                            <td style="text-align:center;">
                                                0
                                            </td>
                                            <td style="text-align:center;">
                                                25
                                            </td>
                                            <td style="text-align:center;">
                                                256
                                            </td>
                                            <td style="text-align:center;">
                                                0
                                            </td>
                                            <td style="text-align:center;">
                                                0
                                            </td>
                                            <td style="text-align:center;">
                                                0
                                            </td>
                                            <td style="text-align:center;">
                                                0
                                            </td>
                                            <td style="text-align:center;">
                                                731
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center;">
                                                2
                                            </td>
                                            <td style="text-align:center;">
                                                BA21D
                                            </td>
                                            <td>
                                                JURUFOROGRAFI (BA21)
                                            </td>
                                            <td style="text-align:center;">
                                                JOHOR BAHRU
                                            </td>
                                            <td style="text-align:center;">
                                                TETAP
                                            </td>
                                            <td style="text-align:center;">
                                                TERBUKA
                                            </td>
                                            <td style="text-align:center;">
                                                149
                                            </td>
                                            <td style="text-align:center;">
                                                0
                                            </td>
                                            <td style="text-align:center;">
                                                8
                                            </td>
                                            <td style="text-align:center;">
                                                30
                                            </td>
                                            <td style="text-align:center;">
                                                38
                                            </td>
                                            <td style="text-align:center;">
                                                38
                                            </td>
                                            <td style="text-align:center;">
                                                15
                                            </td>
                                            <td style="text-align:center;">
                                                15
                                            </td>
                                            <td style="text-align:center;">
                                                229
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr />
                                    </div>
                                </div>
                                <div align="right">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-5 col-sm-12">JUMLAN PERMOHONAN :</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <input type="text" class="form-control text-center" value="6246" placeholder="Jumlah" disabled="disabled" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>
<!--end::Senarai-->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Lantikan/RumusanJawatan.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection