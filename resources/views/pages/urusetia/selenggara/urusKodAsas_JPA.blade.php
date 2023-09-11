{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline mr-5" style="padding-left:50px;">
                <!--begin::Page Title-->
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="@_path" class="text-muted"><i class="fa fa-lg fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <h5 class="text-dark font-weight-bold my-2 mr-5">Kod Skim JPA</h5>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center" style="padding-right: 0px;">
            <div style="width:150px;">
                <a href="#" class="btn btn-light-info font-weight-bolder btn-sm"><b><font color="black">Today : </font>@_showDate</b></a>
            </div>
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
<!--Senarai-->
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="card card-custom">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                    <div class="d-flex flex-column mr-5">
                        <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                            &nbsp;Senarai Kod Skim JPA
                        </a>
                    </div>
                </div>

                <p align="right">
                    <a onclick="fnCallModalItem(this);" id="IdBtnModalCreateNew" data-id="0~~SIMPAN" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit"></i> Tambah</a>
                </p>

                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="20%" style="text-align:center;">Kod Skim</th>
                            <th width="50%" style="text-align:center;">Deskripsi</th>
                            <th width="150" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody id="IdTableListMaklumatPermohonan_body">
                                <tr>
                                    <td style="text-align:center;">
                                        1
                                    </td>
                                    <td style="text-align:center;">
                                        1020
                                    </td>
                                    <td style="text-align:left;">
                                        BENDAHARI 
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_77" data-id="77~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="77~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        2
                                    </td>
                                    <td style="text-align:center;">
                                        1558
                                    </td>
                                    <td style="text-align:left;">
                                        KETUA PUSTAKAWAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_80" data-id="80~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="80~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        3
                                    </td>
                                    <td style="text-align:center;">
                                        3DB01
                                    </td>
                                    <td style="text-align:left;">
                                        PENERBIT RANCANGAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_22" data-id="22~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="22~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        4
                                    </td>
                                    <td style="text-align:center;">
                                        3DB02
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI KEBUDAYAAN 
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_6" data-id="6~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="6~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        5
                                    </td>
                                    <td style="text-align:center;">
                                        3DB03
                                    </td>
                                    <td style="text-align:left;">
                                        AHLI MUZIK
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_20" data-id="20~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="20~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        6
                                    </td>
                                    <td style="text-align:center;">
                                        3DB04
                                    </td>
                                    <td style="text-align:left;">
                                        PEREKA
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_8" data-id="8~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="8~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        7
                                    </td>
                                    <td style="text-align:center;">
                                        3DB06
                                    </td>
                                    <td style="text-align:left;">
                                        JURUFOTOGRAFI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_23" data-id="23~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="23~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        8
                                    </td>
                                    <td style="text-align:center;">
                                        3DD02
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI PEKHIDMATAN PENDIDIKAN SISWAZAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_43" data-id="43~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="43~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        9
                                    </td>
                                    <td style="text-align:center;">
                                        3DD03
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU PEGAWAI LATIHAN VOKASIONAL
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_35" data-id="35~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="35~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        10
                                    </td>
                                    <td style="text-align:center;">
                                        3DJ02
                                    </td>
                                    <td style="text-align:left;">
                                        PELUKIS PELAN (KEJURUTERAAN AWAM)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_19" data-id="19~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="19~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        11
                                    </td>
                                    <td style="text-align:center;">
                                        3DJ03
                                    </td>
                                    <td style="text-align:left;">
                                        PELUKIS PELAN (SENIBINA)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_69" data-id="69~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="69~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        12
                                    </td>
                                    <td style="text-align:center;">
                                        3DN02
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU KHAS
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_14" data-id="14~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="14~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        13
                                    </td>
                                    <td style="text-align:center;">
                                        3DU01
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI PERUBATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_50" data-id="50~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="50~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        14
                                    </td>
                                    <td style="text-align:center;">
                                        3DU02
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI KESIHATAN PERSEKITARAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_56" data-id="56~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="56~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        15
                                    </td>
                                    <td style="text-align:center;">
                                        3DU03
                                    </td>
                                    <td style="text-align:left;">
                                        JURU X-RAY
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_52" data-id="52~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="52~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        16
                                    </td>
                                    <td style="text-align:center;">
                                        3DU04
                                    </td>
                                    <td style="text-align:left;">
                                        JURURAWAT
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_51" data-id="51~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="51~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        17
                                    </td>
                                    <td style="text-align:center;">
                                        3LC07
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI SAINS
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_13" data-id="13~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="13~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        18
                                    </td>
                                    <td style="text-align:center;">
                                        3LC10
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU MAKMAL
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_36" data-id="36~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="36~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        19
                                    </td>
                                    <td style="text-align:center;">
                                        3LF02
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_18" data-id="18~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="18~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        20
                                    </td>
                                    <td style="text-align:center;">
                                        3LF03
                                    </td>
                                    <td style="text-align:left;">
                                        JURUTEKNIK KOMPUTER
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_34" data-id="34~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="34~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        21
                                    </td>
                                    <td style="text-align:center;">
                                        3LG15
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU TAMAN/LADANG
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_41" data-id="41~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="41~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        22
                                    </td>
                                    <td style="text-align:center;">
                                        3LG17
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI PERTANIAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_73" data-id="73~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="73~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        23
                                    </td>
                                    <td style="text-align:center;">
                                        3LH02
                                    </td>
                                    <td style="text-align:left;">
                                        PEMANDU KENDERAAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_30" data-id="30~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="30~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        24
                                    </td>
                                    <td style="text-align:center;">
                                        3LH03
                                    </td>
                                    <td style="text-align:left;">
                                        PEMANDU/ OPERATOR JENTERA PEMUNGGAH
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_60" data-id="60~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="60~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        25
                                    </td>
                                    <td style="text-align:center;">
                                        3LH04
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU AWAM
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_31" data-id="31~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="31~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        26
                                    </td>
                                    <td style="text-align:center;">
                                        3LH05
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU KEMAHIRAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_33" data-id="33~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="33~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        27
                                    </td>
                                    <td style="text-align:center;">
                                        3LJ02
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG JURUTERA
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_70" data-id="70~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="70~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        28
                                    </td>
                                    <td style="text-align:center;">
                                        3LJ05
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG JURUUKUR BAHAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_72" data-id="72~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="72~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        29
                                    </td>
                                    <td style="text-align:center;">
                                        3LJ06
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG ARKITEK LANSKAP
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_71" data-id="71~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="71~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        30
                                    </td>
                                    <td style="text-align:center;">
                                        3LJ10
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG JURUTERA
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_78" data-id="78~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="78~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        31
                                    </td>
                                    <td style="text-align:center;">
                                        3LJ18
                                    </td>
                                    <td style="text-align:left;">
                                        PENJAGA JENTERA ELEKTRIK
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_37" data-id="37~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="37~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        32
                                    </td>
                                    <td style="text-align:center;">
                                        3LK05
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI KESELAMATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_64" data-id="64~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="64~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        33
                                    </td>
                                    <td style="text-align:center;">
                                        3LK13
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU KESELAMATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_76" data-id="76~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="76~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        34
                                    </td>
                                    <td style="text-align:center;">
                                        3LK15
                                    </td>
                                    <td style="text-align:left;">
                                        PENGAWAL KESELAMATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_39" data-id="39~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="39~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        35
                                    </td>
                                    <td style="text-align:center;">
                                        3LN05
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI TADBIR
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_48" data-id="48~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="48~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        36
                                    </td>
                                    <td style="text-align:center;">
                                        3LN07
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI TADBIR
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_15" data-id="15~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="15~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        37
                                    </td>
                                    <td style="text-align:center;">
                                        3LN09
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI PENERBITAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_16" data-id="16~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="16~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        38
                                    </td>
                                    <td style="text-align:center;">
                                        3LN14
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU TADBIR (PERKERANIAN/OPERASI)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_24" data-id="24~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="24~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        39
                                    </td>
                                    <td style="text-align:center;">
                                        3LN17
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU PENERBITAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_25" data-id="25~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="25~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        40
                                    </td>
                                    <td style="text-align:center;">
                                        3LN36
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU OPERASI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_29" data-id="29~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="29~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        41
                                    </td>
                                    <td style="text-align:center;">
                                        3LQ01
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI PENYELIDIK
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_62" data-id="62~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="62~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        42
                                    </td>
                                    <td style="text-align:center;">
                                        3LR04
                                    </td>
                                    <td style="text-align:left;">
                                        PENJAGA JENTERA ELEKTRIK
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_74" data-id="74~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="74~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        43
                                    </td>
                                    <td style="text-align:center;">
                                        3LS01
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PUSTAKAWAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_81" data-id="81~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="81~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        44
                                    </td>
                                    <td style="text-align:center;">
                                        3LS05
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI BELIA DAN SUKAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_49" data-id="49~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="49~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        45
                                    </td>
                                    <td style="text-align:center;">
                                        3LS06
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG KURATOR
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_82" data-id="82~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="82~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        46
                                    </td>
                                    <td style="text-align:center;">
                                        3LS14
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU BELIA DAN SUKAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_27" data-id="27~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="27~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        47
                                    </td>
                                    <td style="text-align:center;">
                                        3LS19
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU PEMULIHARAAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_83" data-id="83~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="83~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        48
                                    </td>
                                    <td style="text-align:center;">
                                        3LS21
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU HAL EHWAL ISLAM
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_26" data-id="26~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="26~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        49
                                    </td>
                                    <td style="text-align:center;">
                                        3LS24
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU PUSTAKAWAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_65" data-id="65~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="65~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        50
                                    </td>
                                    <td style="text-align:center;">
                                        3LU01
                                    </td>
                                    <td style="text-align:left;">
                                        JURUPULIH PERUBATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_40" data-id="40~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="40~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        51
                                    </td>
                                    <td style="text-align:center;">
                                        3LU02
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG PEGAWAI FARMASI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_54" data-id="54~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="54~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        52
                                    </td>
                                    <td style="text-align:center;">
                                        3LU03
                                    </td>
                                    <td style="text-align:left;">
                                        JURUTEKNOLOGI MAKMAL PERUBATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_53" data-id="53~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="53~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        53
                                    </td>
                                    <td style="text-align:center;">
                                        3LU04
                                    </td>
                                    <td style="text-align:left;">
                                        JURUTEKNOLOGI PERGIGIAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_55" data-id="55~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="55~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        54
                                    </td>
                                    <td style="text-align:center;">
                                        3LU06
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU PEMBEDAHAN PERGIGIAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_58" data-id="58~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="58~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        55
                                    </td>
                                    <td style="text-align:center;">
                                        3LU09
                                    </td>
                                    <td style="text-align:left;">
                                        JURURAWAT MASYARAKAT
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_57" data-id="57~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="57~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        56
                                    </td>
                                    <td style="text-align:center;">
                                        3LU10
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU PERAWATAN KESIHATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_59" data-id="59~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="59~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        57
                                    </td>
                                    <td style="text-align:center;">
                                        3LW03
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG AKAUNTAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_21" data-id="21~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="21~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        58
                                    </td>
                                    <td style="text-align:center;">
                                        3LW04
                                    </td>
                                    <td style="text-align:left;">
                                        PENOLONG JURUAUDIT
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_17" data-id="17~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="17~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        59
                                    </td>
                                    <td style="text-align:center;">
                                        3LW07
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU AKAUNTAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_79" data-id="79~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="79~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        60
                                    </td>
                                    <td style="text-align:center;">
                                        3LW08
                                    </td>
                                    <td style="text-align:left;">
                                        PEMBANTU TADBIR (KEWANGAN)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_28" data-id="28~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="28~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        61
                                    </td>
                                    <td style="text-align:center;">
                                        3P201
                                    </td>
                                    <td style="text-align:left;">
                                        NAIB CANSELOR
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_1" data-id="1~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="1~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        62
                                    </td>
                                    <td style="text-align:center;">
                                        3PC08
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI SAINS
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_9" data-id="9~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="9~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        63
                                    </td>
                                    <td style="text-align:center;">
                                        3PD03
                                    </td>
                                    <td style="text-align:left;">
                                        PENSYARAH UNIVERSITI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_32" data-id="32~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="32~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        64
                                    </td>
                                    <td style="text-align:center;">
                                        3PD06
                                    </td>
                                    <td style="text-align:left;">
                                        GURU BAHASA
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_42" data-id="42~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="42~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        65
                                    </td>
                                    <td style="text-align:center;">
                                        3PF01
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI TEKNOLOGI MAKLUMAT
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_10" data-id="10~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="10~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        66
                                    </td>
                                    <td style="text-align:center;">
                                        3PJ01
                                    </td>
                                    <td style="text-align:left;">
                                        ARKITEK LANDSKAP
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_68" data-id="68~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="68~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        67
                                    </td>
                                    <td style="text-align:center;">
                                        3PJ02
                                    </td>
                                    <td style="text-align:left;">
                                        ARKITEK
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_67" data-id="67~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="67~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        68
                                    </td>
                                    <td style="text-align:center;">
                                        3PJ06
                                    </td>
                                    <td style="text-align:left;">
                                        JURUTERA
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_38" data-id="38~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="38~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        69
                                    </td>
                                    <td style="text-align:center;">
                                        3PJ08
                                    </td>
                                    <td style="text-align:left;">
                                        JURUUKUR BAHAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_66" data-id="66~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="66~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        70
                                    </td>
                                    <td style="text-align:center;">
                                        3PK04
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI KESELAMATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_75" data-id="75~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="75~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        71
                                    </td>
                                    <td style="text-align:center;">
                                        3PL02
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI UNDANG-UNDANG (L48/L52/L54)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_5" data-id="5~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="5~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        72
                                    </td>
                                    <td style="text-align:center;">
                                        3PN03
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI PENERBITAN (N44/N48)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_3" data-id="3~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="3~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        73
                                    </td>
                                    <td style="text-align:center;">
                                        3PN06
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI TADBIR(N54/N52/48)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_2" data-id="2~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="2~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        74
                                    </td>
                                    <td style="text-align:center;">
                                        3PQ02
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI PENYELIDIK
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_61" data-id="61~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="61~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        75
                                    </td>
                                    <td style="text-align:center;">
                                        3PS04
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI PSIKOLOGI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_11" data-id="11~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="11~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        76
                                    </td>
                                    <td style="text-align:center;">
                                        3PS06
                                    </td>
                                    <td style="text-align:left;">
                                        PUSTAKAWAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_63" data-id="63~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="63~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        77
                                    </td>
                                    <td style="text-align:center;">
                                        3PS08
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI BELIA DAN SUKAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_44" data-id="44~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="44~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        78
                                    </td>
                                    <td style="text-align:center;">
                                        3PS13
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI HAL EHWAL ISLAM (S44)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_7" data-id="7~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="7~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        79
                                    </td>
                                    <td style="text-align:center;">
                                        3PU04
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI FARMASI
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_47" data-id="47~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="47~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        80
                                    </td>
                                    <td style="text-align:center;">
                                        3PU05
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI PERGIGIAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_45" data-id="45~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="45~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        81
                                    </td>
                                    <td style="text-align:center;">
                                        3PU07
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI PERUBATAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_46" data-id="46~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="46~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        82
                                    </td>
                                    <td style="text-align:center;">
                                        3PW03
                                    </td>
                                    <td style="text-align:left;">
                                        JURUAUDIT (W52)
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_4" data-id="4~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="4~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        83
                                    </td>
                                    <td style="text-align:center;">
                                        3PW05
                                    </td>
                                    <td style="text-align:left;">
                                        PEGAWAI KEWANGAN
                                    </td>
                                    <td style="text-align:center;">
                                        <a onclick="fnCallModalItem(this);" id="activityAdDetails_12" data-id="12~~KEMASKINI" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i>Kemaskini</a>
                                        <button type="button" id="IdButangDelete" onclick="deleteKodSkimJpa(this)" data-id="12~~HAPUS" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i>Hapus</button>
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
    <script src="{{ asset('js/pages/Scripts/Waran/urusKodAsas_JPA.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection