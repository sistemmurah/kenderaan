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
                            &nbsp;Senarai Soalan
                        </a>
                    </div>
                </div>

<table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="13%" style="text-align:center;">Konstruk</th>
                            <th width="5%" style="text-align:center;">No. Soalan</th>
                            <th width="20%" style="text-align:center;">Soalan</th>
                            <th width="5%" style="text-align:center;">Status Aktif</th>
                            <th width="5%" style="text-align:center;">Kategori</th>
                            <th width="11%" style="text-align:center;">Tarikh Kuatkuasa</th>
                            <th width="11%" style="text-align:center;">Tarikh Tamat</th>
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
                                        1
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mempunyai hubungan yang baik dengan orang di sekeliling saya.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        2
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berpendapat bahawa seseorang yang melakukan kesilapan terhadap saya perlu meminta maaf daripada saya.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        3
                                    </td>
                                    <td style="text-align:left;">
                                        Saya pada kebiasaannya bersedia melakukan sesuatu tugas di luar waktu bekerja.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        4
                                    </td>
                                    <td style="text-align:left;">
                                        Saya seorang yang tidak berguna langsung setelah melakukan sesuatu kesilapan. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        5
                                    </td>
                                    <td style="text-align:left;">
                                        Saya cenderung untuk tidak menerima pendapat yang bertentangan dengan prinsip-prinsip kehidupan saya. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        6
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mempunyai kehidupan yang sentiasa cemerlang sepanjang masa. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        7
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa selesa apabila bersendirian.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        8
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa simpati terhadap orang lain yang berada dalam kesusahan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        9
                                    </td>
                                    <td style="text-align:left;">
                                        Saya lebih suka sekiranya orang lain perlu menyiapkan kerja saya yang belum selesai. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        10
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa amat kecewa sekiranya tidak memperoleh apa yang diingini. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        11
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa tidak seronok mendengar idea-idea baru yang bertentangan dengan pandangan saya.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        12
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah marah kepada sesiapa pun.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        13
                                    </td>
                                    <td style="text-align:left;">
                                        Saya melibatkan diri secara aktif apabila berbincang secara berkumpulan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        14
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mementingkan diri dalam melakukan sesuatu perkara. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        15
                                    </td>
                                    <td style="text-align:left;">
                                        Saya teliti dalam melakukan sesuatu kerja. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        16
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa amat kecewa apabila tidak mendapat pengiktirafan setelah berjaya melakukan sesuatu kerja.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        17
                                    </td>
                                    <td style="text-align:left;">
                                        Saya lebih cenderung berbincang tentang hal-hal berkaitan dengan isu-isu semasa.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        18
                                    </td>
                                    <td style="text-align:left;">
                                        Saya dapat menyelesaikan semua masalah yang dihadapi dalam kehidupan saya.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        19
                                    </td>
                                    <td style="text-align:left;">
                                        Saya lebih suka memulakan perbualan terlebih dahulu apabila berjumpa dengan orang yang baru dikenali.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        20
                                    </td>
                                    <td style="text-align:left;">
                                        Saya melayan setiap orang dengan baik walaupun mereka mempunyai banyak karenah.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        21
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berpendapat bahawa bekerja keras bagi mencapai sesuatu matlamat bukanlah sesuatu yang sukar. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        22
                                    </td>
                                    <td style="text-align:left;">
                                        Saya menganggap diri saya sebagai individu yang berguna sekalipun gagal dalam melaksanakan sesuatu kerja yang telah diberikan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        23
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak semestinya berfikir mengikut perspektif sendiri sahaja.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
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
                                        24
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berpendapat bahawa ganjaran tidak penting langsung dalam kehidupan saya. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_24" data-id="24~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        25
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        25
                                    </td>
                                    <td style="text-align:left;">
                                        Saya suka melaksanakan sesuatu kerja secara sendiri berbanding bekerjasama dengan orang lain.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_25" data-id="25~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        26
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        26
                                    </td>
                                    <td style="text-align:left;">
                                        Saya akan menziarahi rakan-rakan yang sakit.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_26" data-id="26~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        27
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        27
                                    </td>
                                    <td style="text-align:left;">
                                        Saya suka melaksanakan sesuatu perkara tanpa disuruh.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_27" data-id="27~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        28
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        28
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak mudah berasa tertekan walaupun dibebani tugas yang sukar.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_28" data-id="28~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        29
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        29
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa seronok memikirkan pelbagai jalan penyelesaian bagi sesuatu masalah.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_29" data-id="29~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        30
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        30
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah berasa sedih.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_30" data-id="30~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        31
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        31
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mudah bekerjasama apabila melakukan sesuatu kerja secara berkumpulan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_31" data-id="31~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        32
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        32
                                    </td>
                                    <td style="text-align:left;">
                                        Saya lebih mementingkan pencapaian matlamat dalam melakukan sesuatu perkara berbanding dengan keharmonian dalam perhubungan. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_32" data-id="32~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        33
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        33
                                    </td>
                                    <td style="text-align:left;">
                                        Saya akan cuba menyiapkan sesuatu kerja sehingga selesai walaupun kerja tersebut sukar dilaksanakan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_33" data-id="33~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        34
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        34
                                    </td>
                                    <td style="text-align:left;">
                                        Saya dapat mengawal perasaan ketika memarahi seseorang.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_34" data-id="34~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        35
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        35
                                    </td>
                                    <td style="text-align:left;">
                                        Saya cuba mengelak daripada menghadiri majlis yang berkaitan dengan ilmu.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_35" data-id="35~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        36
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        36
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah iri hati melihat kejayaan orang lain. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_36" data-id="36~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        37
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        37
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa tidak seronok apabila diminta terlebih dahulu memulakan sesuatu perbualan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_37" data-id="37~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        38
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        38
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berpendapat bahawa setiap orang perlu diberi peluang sekalipun melakukan sesuatu kesilapan besar.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_38" data-id="38~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        39
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        39
                                    </td>
                                    <td style="text-align:left;">
                                        Saya merancang sesuatu kerja sekalipun diberi masa yang suntuk.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_39" data-id="39~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        40
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        40
                                    </td>
                                    <td style="text-align:left;">
                                        Saya fikir diri saya sentiasa betul dalam apa jua keadaan sekalipun.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_40" data-id="40~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        41
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        41
                                    </td>
                                    <td style="text-align:left;">
                                        Saya dapat mengemukakan sesuatu idea yang lebih baik daripada orang lain.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_41" data-id="41~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        42
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        42
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah bercakap buruk tentang orang lain.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_42" data-id="42~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        43
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        43
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mudah bertegur sapa apabila berjumpa orang lain. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_43" data-id="43~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        44
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        44
                                    </td>
                                    <td style="text-align:left;">
                                        Saya benci kepada orang yang biadab terhadap saya.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_44" data-id="44~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        45
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        45
                                    </td>
                                    <td style="text-align:left;">
                                        Saya merancang dengan teliti apabila melakukan sesuatu kerja.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_45" data-id="45~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        46
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        46
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak cepat panik apabila melakukan sesuatu kerja.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_46" data-id="46~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        47
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        47
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak suka memikirkan sesuatu perkara yang bukan merupakan minat saya. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_47" data-id="47~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        48
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        48
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah berasa tertekan apabila mengalami sesuatu masalah.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_48" data-id="48~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        49
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        49
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mudah berasa malu apabila diminta memberikan sesuatu pendapat dalam kumpulan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_49" data-id="49~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        50
                                    </td>
                                    <td style="text-align:center;">
                                        KP - KEPRIHATINAN
                                    </td>
                                    <td style="text-align:center;">
                                        50
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mudah memaafkan kesalahan orang lain.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_50" data-id="50~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        51
                                    </td>
                                    <td style="text-align:center;">
                                        ES - EFISYEN
                                    </td>
                                    <td style="text-align:center;">
                                        51
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berasa terbeban sekiranya diberikan tugas yang berbeza dalam masa yang sama. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_51" data-id="51~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        52
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        52
                                    </td>
                                    <td style="text-align:left;">
                                        Saya menganggap kemarahan orang lain sebagai satu pengajaran kepada diri saya.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_52" data-id="52~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        53
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        53
                                    </td>
                                    <td style="text-align:left;">
                                        Saya suka meneroka sesuatu perkara yang baru.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_53" data-id="53~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        54
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        54
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah mengecilkan hati orang lain.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_54" data-id="54~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        55
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        55
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak wajar berdiam diri apabila berbincang dalam sesuatu kumpulan.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_55" data-id="55~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        56
                                    </td>
                                    <td style="text-align:center;">
                                        KE - KESTABILAN EMOSI
                                    </td>
                                    <td style="text-align:center;">
                                        56
                                    </td>
                                    <td style="text-align:left;">
                                        Saya cepat berasa tertekan apabila melihat orang lain lebih baik daripada saya dalam melakukan sesuatu perkara.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_56" data-id="56~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        57
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        57
                                    </td>
                                    <td style="text-align:left;">
                                        Saya berpendapat bahawa setiap pandangan orang lain wajar diberikan perhatian.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_57" data-id="57~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        58
                                    </td>
                                    <td style="text-align:center;">
                                        TK - TIDAK KONGRUEN
                                    </td>
                                    <td style="text-align:center;">
                                        58
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak pernah bercakap bohong dengan sesiapa. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_58" data-id="58~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        59
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        59
                                    </td>
                                    <td style="text-align:left;">
                                        Saya mempunyai ramai sahabat yang berbeza dari segi latar belakang dan agama. 
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        POSITIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_59" data-id="59~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        60
                                    </td>
                                    <td style="text-align:center;">
                                        WS - WAWASAN
                                    </td>
                                    <td style="text-align:center;">
                                        60
                                    </td>
                                    <td style="text-align:left;">
                                        Saya tidak gemar membaca bahan-bahan yang bersifat ilmiah.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_60" data-id="60~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        61
                                    </td>
                                    <td style="text-align:center;">
                                        JL - JALINAN
                                    </td>
                                    <td style="text-align:center;">
                                        61
                                    </td>
                                    <td style="text-align:left;">
                                        Saya lebih suka bersendirian berbanding bergaul dengan orang lain.
                                    </td>
                                    <td style="text-align:center;">
                                        Y
                                    </td>
                                    <td style="text-align:center;">
                                        NEGATIF
                                    </td>
                                    <td style="text-align:center;">
                                        01 Dec 2013
                                    </td>
                                    <td style="text-align:center;">
                                        31 Dec 9999
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_61" data-id="61~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
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
    <script src="{{ asset('js/pages/Scripts/Waran/urusIPSBSoalan.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection