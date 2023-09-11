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
                    <i class="flaticon2-search"></i>Carian Senarai Pendek oleh HCM
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">

                <div class="card-body">
                    <div class="row">
                        <div class="card" style="width: 100rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">

                                    <!--begin::Maklumat Iklan-->
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-user"></i>Maklumat Iklan</h5>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-5 col-sm-12">Tarikh Iklan :</label>
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control text-center" value="14 Sept 2020" placeholder="Select date" disabled="disabled" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-5 col-sm-12">Tarikh Tutup Iklan :</label>
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control text-center" value="28 Sept 2020" placeholder="Select date" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-4 col-sm-12">Nama Jawatan :</label>
                                                <div class="col-lg-8 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" value="PENGAWAL KESELAMATAN (KP11)" placeholder="Select date" disabled="disabled" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-4 col-sm-12">Tarikh Tutup Proses :</label>
                                                <div class="col-lg-3 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control text-center" value="28 Sept 2020" placeholder="Select date" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--end::Maklumat Iklan-->
                                <!--begin::Kategori Pemohon-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-user"></i>Kategori Pemohon</h5>
                                    <div class="form-group row">
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <select class="form-control">
                                                <option value="">Sila Pilih</option>
                                                <option value="Staf">STAF</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <!--end::Kategori Pemohon-->
                                <!--begin::Markah Merit-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-analytics"></i>Markah Merit</h5>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-5 col-sm-12">Sela Markah :</label>
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <input type="number" class="form-control" value="" min="0" placeholder="Markah" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="padding-top:10px;">
                                            Hingga
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <div class="col-lg-7 col-md-9 col-sm-12">
                                                    <input type="number" class="form-control" value="" min="0" placeholder="Markah" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--end::Markah Merit-->
                                <!--begin::Pendidikan Tinggi-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-open-text-book"></i>Pendidikan Tinggi</h5>
                                    <table class="table table-bordered table-hover" id="IdTableList">
                                        <thead style="background-color: antiquewhite;">
                                            <tr>
                                                <th>Bil</th>
                                                <th width="11%" style="text-align:center;">Gabungan</th>
                                                <th width="13%" style="text-align:center;">Peringkat</th>
                                                <th width="12%" style="text-align:center;">Pengkhususan</th>
                                                <th width="11%" style="text-align:center;">Bidang</th>
                                                <th width="11%" style="text-align:center;">Keputusan</th>
                                                <th width="11%" style="text-align:center;">Tugasan</th>
                                                <th width="11%" style="text-align:center;">Lain-Lain</th>
                                                <th class="thcenter">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                        <td>1</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td nowrap="nowrap" class="thcenter">
                            <a onclick="fnCallModalItem(this);" id="activityAdDetails_" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                            <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_" data-id="" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                        </td>
                    </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="" placeholder="Sila isi" />
                                                </td>
                                                <td class="thcenter">
                                                    <button type="button" id="btnSubmit" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                                                        <span>
                                                            <i class="fa fa-save"></i><span id="IdButangAction">Tambah</span>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </li>
                                <!--end::Pendidikan Tinggi-->
                                <!--begin::Pendidikan Sekolah-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-open-text-book"></i>Pendidikan Sekolah</h5>
                                    <table class="table table-bordered table-hover" id="IdTableList2">
                                        <thead style="background-color: antiquewhite;">
                                            <tr>
                                                <th>Bil</th>
                                                <th width="15%" style="text-align:center;">Gabungan</th>
                                                <th width="15%" style="text-align:center;">Tahap</th>
                                                <th width="40%" style="text-align:center;">Subjek</th>
                                                <th width="10%" style="text-align:center;">Gred</th>
                                                <th class="thcenter">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                        <td>1</td>
                        <td class="thcenter">P1</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td>Demo</td>
                        <td nowrap="nowrap" class="thcenter">
                            <a onclick="fnCallModalItem(this);" id="activityAdDetails_" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                            <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_" data-id="" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                        </td>
                    </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                        <option value="">DAN</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                        <option value="SPM">SPM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option value="">Sila Pilih</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="checkbox" onclick="fnCallModalItem(this);" />Tanda
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="thcenter">
                                                    <button type="button" id="btnSubmit" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                                                        <span>
                                                            <i class="fa fa-save"></i><span id="IdButangAction">Tambah</span>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </li>
                                <!--end::Pendidikan Sekolah-->
                                <!--begin::Kemahiran-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-box"></i>Kemahiran</h5>
                                    <table class="table table-bordered table-hover" id="IdTableList3">
                                        <thead style="background-color: antiquewhite;">
                                            <tr>
                                                <th>Bil</th>
                                                <th width="80%" style="text-align:center;">Nama Kemahiran</th>
                                                <th class="thcenter">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                        <td>1</td>
                        <td class="thcenter">P1</td>
                        <td nowrap="nowrap" class="thcenter">
                            <a onclick="fnCallModalItem(this);" id="activityAdDetails_" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                            <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_" data-id="" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                        </td>
                    </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="text" class="form-control" value="" placeholder="Sila masukkan Nama Kemahiran" />
                                                </td>
                                                <td class="thcenter">
                                                    <button type="button" id="btnSubmit" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                                                        <span>
                                                            <i class="fa fa-save"></i><span id="IdButangAction">Tambah</span>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </li>
                                <!--end::Kemahiran

    <!--begin::Pengalaman Kerja-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-box"></i>Pengalaman Kerja</h5>
                                    <table class="table table-bordered table-hover" id="IdTableList4">
                                        <thead style="background-color: antiquewhite;">
                                            <tr>
                                                <th>Bil</th>
                                                <th width="80%" style="text-align:center;">Nama Jawatan</th>
                                                <th class="thcenter">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                        <td>1</td>
                        <td class="thcenter">P1</td>
                        <td nowrap="nowrap" class="thcenter">
                            <a onclick="fnCallModalItem(this);" id="activityAdDetails_" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                            <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_" data-id="" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                        </td>
                    </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="text" class="form-control" value="" placeholder="Sila masukkan Nama Jawatan" />
                                                </td>
                                                <td class="thcenter">
                                                    <button type="button" id="btnSubmit" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                                                        <span>
                                                            <i class="fa fa-save"></i><span id="IdButangAction">Tambah</span>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <table class="table table-bordered table-hover" id="IdTableList5">
                                        <thead style="background-color: antiquewhite;">
                                            <tr>
                                                <th>Bil</th>
                                                <th width="80%" style="text-align:center;">Tahun Pengalaman Bekerja</th>
                                                <th class="thcenter">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                        <td>1</td>
                        <td class="thcenter">P1</td>
                        <td nowrap="nowrap" class="thcenter">
                            <a onclick="fnCallModalItem(this);" id="activityAdDetails_" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit" title="Kemaskini"></i></a>
                            <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_" data-id="" class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></a>
                        </td>
                    </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td style="text-align:right;">
                                                    Jumlah Tahun Pengalaman
                                                </td>
                                                <td class="thcenter">
                                                    >= <input type="text" class="form-control" value="" placeholder="Tahun" />
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <hr />
                                        </div>
                                    </div>

                                    <!--begin::Search button-->
                                    <div align="center">
                                        <div class="col-lg-2">
                                            <div style="text-align: center;">
                                                <button type="button" id="IdButangSearch" class="btn btn-primary" style="width:100%;"><span class="fa fa-search fa-sm"></span> Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Search button-->

                                </li>
                                <!--end::Pengalaman Kerja-->

                                <!--begin::Senarai Nama Pemohon-->
                                <li class="list-group-item">
                                    <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-list"></i>Senarai Nama Pemohon</h5>
                                    <table class="table table-bordered table-hover" id="IdTableList6">
                                        <thead style="background-color: antiquewhite">
                                            <tr>
                                                <th width="5%" style="text-align:center;">Bil</th>
                                                <th width="5%" style="text-align:center;"><label class="checkbox">
                                                        <input type="checkbox" name="select-all"  id="select-all" />Tanda
                                                        <span></span>
                                                    </label></th>
                                                <th width="5%" style="text-align:center;">Shortlist HCM</th>
                                                <th width="5%" style="text-align:center;">Shortlist IPSB</th>
                                                <th width="5%" style="text-align:center;">Status IPSB</th>
                                                <th width="5%" style="text-align:center;">Shortlist Fakulti</th>
                                                <th width="8%" style="text-align:center;">No.KP</th>
                                                <th width="5%" style="text-align:center;">No.Staf</th>
                                                <th width="15%" style="text-align:center;">Nama Pemohon</th>
                                                <th width="5%" style="text-align:center;">Markah SKT</th>
                                                <th width="5%" style="text-align:center;">Markah Merit</th>
                                                <th width="5%" style="text-align:center;">Pengalaman Bekerja</th>
                                                <th width="8%" style="text-align:center;">Jawatan Lain Dipohon</th>
                                                <th width="5%" style="text-align:center;">Maklumat Calon</th>
                                                <th width="5%" style="text-align:center;">Status Pemohon</th>
                                                <th width="15%" style="text-align:center;">IPSB Result</th>
                                            </tr>
                                        </thead>
                                        <tbody id="IdTableListMaklumatPermohonan_body">
                                            <tr>
                                                <td style="text-align:center;">
                                                    1
                                                </td>
                                                <td style="text-align:center;">
                                                    <label class="checkbox" style="padding-bottom:13px;">
                                                        <input type="checkbox" name="checkbox-1" id="checkbox-1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td style="text-align:center;">
                                                    Y
                                                </td>
                                                <td style="text-align:center;">
                                                    Y
                                                </td>
                                                <td style="text-align:center;">
                                                    Y
                                                </td>
                                                <td style="text-align:center;">
                                                    N
                                                </td>
                                                <td style="text-align:center;">
                                                    870216235853
                                                </td>
                                                <td style="text-align:center;">
                                                </td>
                                                <td style="text-align:center;">
                                                    NOR AIMIE ADZWAN BIN MOHD ALI
                                                </td>
                                                <td style="text-align:center;">
                                                    TIADA
                                                </td>
                                                <td style="text-align:center;">
                                                    0.00
                                                </td>
                                                <td style="text-align:center;">
                                                    7
                                                </td>
                                                <td style="text-align:center;">
                                                </td>
                                                <td style="text-align:center;">
                                                </td>
                                                <td style="text-align:center;">
                                                    IN PROCESS
                                                </td>
                                                <td style="text-align:center;">
                                                    SANGAT LAYAK KE PERINGKAT SARINGAN
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center;">
                                                   1
                                                </td>
                                                <td style="text-align:center;">
                                                    <label class="checkbox" style="padding-bottom:13px;">
                                                        <input type="checkbox" name="checkbox-2" id="checkbox-2" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td style="text-align:center;">
                                                    N
                                                </td>
                                                <td style="text-align:center;">
                                                    N
                                                </td>
                                                <td style="text-align:center;">
                                                    Y
                                                </td>
                                                <td style="text-align:center;">
                                                    N
                                                </td>
                                                <td style="text-align:center;">
                                                    860228235843
                                                </td>
                                                <td style="text-align:center;">
                                                </td>
                                                <td style="text-align:center;">
                                                    MOHD ERDY BIN SARNI
                                                </td>
                                                <td style="text-align:center;">
                                                    TIADA
                                                </td>
                                                <td style="text-align:center;">
                                                    0.00
                                                </td>
                                                <td style="text-align:center;">
                                                    11
                                                </td>
                                                <td style="text-align:center;">
                                                    UA11C
                                                </td>
                                                <td style="text-align:center;">
                                                </td>
                                                <td style="text-align:center;">
                                                    PAY
                                                </td>
                                                <td style="text-align:center;">
                                                    LAYAK KE PERINGKAT SARINGAN
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <!--end::Senarai Nama Pemohon-->

                            </ul>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
    </div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="m_modal_kodItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-maroon-bold" id="IdAddModalKPLabel">Maklumat Gred <span id="IdPaparCode"></span></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-12 col-form-label">GRED UNTUK DIKATEGORIKAN: </label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" /> A1
                                        <span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" /> A2
                                        <span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox"> 1
                                        <span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox"> 1A
                                        <span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox"> 2
                                        <span></span>
                                    </label>
                                    <label class="checkbox checkbox-disabled">
                                        <input type="checkbox" disabled> 2A
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-sm-12">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="button" id="IdBtnModalItemSaveKodItem" data-dismiss="alert" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                            <span>
                                <i class="fa fa-save"></i>
                                <span id="IdButangAction">Tambah Gred</span>
                            </span>
                        </button>
                        <a href="@_path/PreServices/SenaraiPendek" class="btn btn-sm m-btn--pill btn-info" style="display:none;"><span id="IdBtnKodItemRefreshScreen">Back To List</span></a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-sm m-btn--pill btn-outline-warning" data-dismiss="modal"><span class="fa fa-door-closed"></span> Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Lantikan/SenaraiPendek.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />   
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection