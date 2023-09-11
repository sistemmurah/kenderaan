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
        <for class="card card-custom gutter-b example example-compact">
            <div class="card-header" style="background-color:antiquewhite;">
                <div class="card-title">
                    <i class="flaticon2-user"></i>Senarai Pendek IPSB oleh HCM
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">

                <div class="card-body">
                    <div class="row">
                        <div class="card" style="width: 100rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-search"></i>Carian IPSB</h5>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group row">
                                                <label class="col-form-label text-left col-lg-5 col-sm-12">Carian Berdasarkan :</label>
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                        <option value="">TARIKH IKLAN</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-5 col-sm-12">Tarikh Iklan :</label>
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                        <option value="">05 July 2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-5 col-sm-12">Tarikh Tutup Iklan :</label>
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control text-center" value="19 July 2020" placeholder="Select date" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-4 col-sm-12">&nbsp;</label>
                                                <div class="col-lg-8 col-md-9 col-sm-12">
                                                    &nbsp;
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-4 col-sm-12">Tarikh Tutup Proses :</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control text-center" value="19 July 2020" placeholder="Select date" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <hr />
                                        </div>
                                    </div>
                                    <div align="center">
                                        <div class="col-lg-2">
                                            <div style="text-align: center;">
                                                <button type="button" id="IdButangSearch" class="btn btn-primary" style="width:100%;"><span class="fa fa-search fa-sm"></span> Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-list"></i>Senarai Pendek IPSB</h5>
                                    <table class="table table-bordered table-hover" id="IdTableList">
                                        <thead style="background-color: antiquewhite">
                                            <tr>
                                                <th width="5%" style="text-align:center;">Bil</th>
                                                <th width="8%" style="text-align:center;">Kod Jawatan</th>
                                                <th width="25%" style="text-align:center;">Jawatan</th>
                                                <th width="12%" style="text-align:center;">Kampus</th>
                                                <th width="10%" style="text-align:center;">Taraf Jawatan</th>
                                                <th width="10%" style="text-align:center;">Jenis Iklan</th>
                                                <th width="10%" style="text-align:center;">Shortlist HCM</th>
                                                <th width="10" style="text-align:center;">Shortlist IPSB</th>
                                                <th width="10" style="text-align:center;">Shortlist Fakulti</th>
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
                                                    0
                                                </td>
                                                <td style="text-align:center;">
                                                    0
                                                </td>
                                                <td style="text-align:center;">
                                                    0
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center;">
                                                    2
                                                </td>
                                                <td style="text-align:center;">
                                                    UA11C
                                                </td>
                                                <td>
                                                    PEMBANTU PERAWATAN KESIHATAN GRED (U11)
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
                                                    17
                                                </td>
                                                <td style="text-align:center;">
                                                    17
                                                </td>
                                                <td style="text-align:center;">
                                                    10
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Lantikan/SenaraiPendekIPSB.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection