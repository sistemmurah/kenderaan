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
        <div class="card card-custom">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                    <div class="d-flex flex-column mr-5">
                        <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                            &nbsp;Senarai Konstruk
                        </a>
                    </div>
                </div>
<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="13%" style="text-align:center;">Kod Konstruk</th>
                            <th width="25%" style="text-align:center;">Nama Konstruk</th>
                            <th width="10%" style="text-align:center;">Susunan</th>
                            <th width="16%" style="text-align:center;">Tarikh Kuatkuasa</th>
                            <th width="16%" style="text-align:center;">Tarikh Tamat</th>
                            <th width="150" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">
                                <tr>
                                    <td style="text-align:center;">
                                        1
                                    </td>
                                    <td style="text-align:center;">
                                        JL
                                    </td>
                                    <td style="text-align:center;">
                                        JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        A
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_1" data-id="1~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit" title="Kemaskini"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        2
                                    </td>
                                    <td style="text-align:center;">
                                        WS
                                    </td>
                                    <td style="text-align:center;">
                                        WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        B
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_2" data-id="2~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit" title="Kemaskini"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        3
                                    </td>
                                    <td style="text-align:center;">
                                        KP
                                    </td>
                                    <td style="text-align:center;">
                                        KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        C
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_3" data-id="3~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit" title="Kemaskini"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        4
                                    </td>
                                    <td style="text-align:center;">
                                        ES
                                    </td>
                                    <td style="text-align:center;">
                                        EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        D
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_4" data-id="4~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit" title="Kemaskini"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        5
                                    </td>
                                    <td style="text-align:center;">
                                        KE
                                    </td>
                                    <td style="text-align:center;">
                                        KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        E
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_5" data-id="5~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit" title="Kemaskini"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        6
                                    </td>
                                    <td style="text-align:center;">
                                        TK
                                    </td>
                                    <td style="text-align:center;">
                                        TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        F
                                    </td>
                                    <td style="text-align:center;">
                                        01 Mar 2014
                                    </td>
                                    <td style="text-align:center;">
                                        01 May 2022
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_6" data-id="6~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit" title="Kemaskini"></i>Kemaskini</a>
                                    </td>
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
    <script src="{{ asset('js/pages/Scripts/Waran/urusIPSBKonstruk.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection