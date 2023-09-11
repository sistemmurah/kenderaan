{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<!--Senarai-->
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="card card-custom">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                    <div class="d-flex flex-column mr-5">
                        <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                            &nbsp;Senarai Skor Konstruk
                        </a>
                    </div>
                </div>

                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="15%" style="text-align:center;">Konstruk</th>
                            <th width="15%" style="text-align:center;">Tarikh Kuatkuasa</th>
                            <th width="15%" style="text-align:center;">Tarikh Tamat</th>
                            <th width="10%" style="text-align:center;">Skor Mula</th>
                            <th width="10%" style="text-align:center;">Skor Tamat</th>
                            <th width="15%" style="text-align:center;">Tahap</th>
                            <th width="150" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
<tbody id="IdTableListMaklumatPermohonan_body">
                                <tr>
                                    <td style="text-align:center;">
                                        1
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        48
                                    </td>
                                    <td style="text-align:center;">
                                        60
                                    </td>
                                    <td style="text-align:center;">
                                        TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_1" data-id="1~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        2
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        37
                                    </td>
                                    <td style="text-align:center;">
                                        47
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_2" data-id="2~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        3
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        25
                                    </td>
                                    <td style="text-align:center;">
                                        36
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_3" data-id="3~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        4
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        12
                                    </td>
                                    <td style="text-align:center;">
                                        24
                                    </td>
                                    <td style="text-align:center;">
                                        RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_4" data-id="4~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        5
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        44
                                    </td>
                                    <td style="text-align:center;">
                                        55
                                    </td>
                                    <td style="text-align:center;">
                                        TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_5" data-id="5~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        6
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        34
                                    </td>
                                    <td style="text-align:center;">
                                        43
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_6" data-id="6~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        7
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        23
                                    </td>
                                    <td style="text-align:center;">
                                        33
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_7" data-id="7~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        8
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        11
                                    </td>
                                    <td style="text-align:center;">
                                        22
                                    </td>
                                    <td style="text-align:center;">
                                        RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_8" data-id="8~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        9
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        36
                                    </td>
                                    <td style="text-align:center;">
                                        45
                                    </td>
                                    <td style="text-align:center;">
                                        TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_9" data-id="9~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        10
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        28
                                    </td>
                                    <td style="text-align:center;">
                                        35
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_10" data-id="10~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        11
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        19
                                    </td>
                                    <td style="text-align:center;">
                                        27
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_11" data-id="11~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        12
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        9
                                    </td>
                                    <td style="text-align:center;">
                                        18
                                    </td>
                                    <td style="text-align:center;">
                                        RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_12" data-id="12~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        13
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        36
                                    </td>
                                    <td style="text-align:center;">
                                        45
                                    </td>
                                    <td style="text-align:center;">
                                        TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_13" data-id="13~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        14
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        28
                                    </td>
                                    <td style="text-align:center;">
                                        35
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_14" data-id="14~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        15
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        19
                                    </td>
                                    <td style="text-align:center;">
                                        27
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_15" data-id="15~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        16
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        9
                                    </td>
                                    <td style="text-align:center;">
                                        18
                                    </td>
                                    <td style="text-align:center;">
                                        RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_16" data-id="16~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        17
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        40
                                    </td>
                                    <td style="text-align:center;">
                                        50
                                    </td>
                                    <td style="text-align:center;">
                                        TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_17" data-id="17~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        18
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        31
                                    </td>
                                    <td style="text-align:center;">
                                        39
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_18" data-id="18~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        19
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        21
                                    </td>
                                    <td style="text-align:center;">
                                        30
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_19" data-id="19~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        20
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        10
                                    </td>
                                    <td style="text-align:center;">
                                        20
                                    </td>
                                    <td style="text-align:center;">
                                        RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_20" data-id="20~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        21
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        40
                                    </td>
                                    <td style="text-align:center;">
                                        50
                                    </td>
                                    <td style="text-align:center;">
                                        TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_21" data-id="21~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        22
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        31
                                    </td>
                                    <td style="text-align:center;">
                                        39
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA TINGGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_22" data-id="22~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        23
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        21
                                    </td>
                                    <td style="text-align:center;">
                                        30
                                    </td>
                                    <td style="text-align:center;">
                                        SEDERHANA RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_23" data-id="23~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        24
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        10
                                    </td>
                                    <td style="text-align:center;">
                                        20
                                    </td>
                                    <td style="text-align:center;">
                                        RENDAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_24" data-id="24~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                    </tbody>
			  </table>
            </div>
        </div>
    </div>
</div>

<!--begin::Modal-->
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