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


        <!-- Permohonan Penamatan Perkhidmatan -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Bahagian A: Butiran Pemohon</h3>
                </div>

                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm text-dark"></i>
                    </a>
                </div>

            </div>
            <div class="card-body">

               <div id="MyContentPlaceHolder_savebtn">
                <div class="col-lg-12 d-none">
                    <div style="text-align: right;padding-top: 15px;">
                        <button onclick="window.location = '{{ route('urusetia.PengiktirafanPSM.tambahPencalonanPSM') }}'" class="btn btn-sm btn-icon btn-light-primary"><i class="fa fa-save" data-toggle="tooltip" data-placement="top" title="Tooltip">
                        </i> Simpan
                    </button>
                    <button onclick="window.location = '{{ route('urusetia.PengiktirafanPSM.tambahPencalonanPSM') }}'" class="btn btn-sm btn-icon btn-light-primary"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                    </i> Kemaskini
                </button>
            </div>

        </div>
        <div class="col-lg-12">
            <div style="text-align: left;padding-top: 15px;">
                <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-user"></i>Permohonan Penamatan Perkhidmatan</h5>
            </div>
        </div>
        <hr class="dashed">
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <label>Jenis Penamatan : </label>
            <select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">Persaraan Wajib</option>
            <option value="Tatakelakuan">Persaraan Pilihan</option>
        </select>
    </div>  
    <div class="col-lg-6">
        <label>Status Kelayakkan : </label>
        <input type="text" class="form-control" name="Status Kelayakkan" value="Layak"required="required" placeholder="" style="background-color:#3ED60F; width: 30%;" />
        <input type="text" class="form-control" name="Status Kelayakkan" value="Tidak Layak"required="required" placeholder="" style="background-color:#FAA697; width: 30%;" />
    </div>  

    <div class="col-lg-6">
        <label>Tarikh Kuatkuasa Tamat : </label>
        <div class="input-group date">
            <input type="text" class="form-control" readonly value="Sila Pilih" id="kt_datepicker_1"/>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="la la-calendar"></i>
                </span>
            </div>                                
            <span id="MyContentPlaceHolder_RegularExpressionValidator2"
            style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
        </div> 
    </div> 



</div>
</div>

</div>
<br/>


<!-- upload Dokumen -->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Muat Naik Dokumen Sokongan</h3>
        </div>

        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm text-dark"></i>
            </a>
        </div>

    </div>
    <div class="card-body">

       <div id="MyContentPlaceHolder_savebtn">
        <div class="col-lg-12">
            <div style="text-align: right;padding-top: 15px;">
                <button onclick="window.location = '{{ route('urusetia.PengiktirafanPSM.tambahPencalonanPSM') }}'" class="btn btn-sm btn-icon btn-light-primary"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i> Tambah
            </button>
        </div>

    </div>

</div>

<div class="form-group row">
    <div class="col-lg-3">
    <input type="file" id="upload_doc" name="upload" multiple>
    </div>  
    <div class="col-lg-9">
    <label for="myfile"><i class="fa fa-upload">*format documen adalah pdf</i></label>
    </div>  

</div>

            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#fcf4a3">
                <tr>
                </tr>

                <tr>
                    <th>No.</th>
                    <th>Tarikh</th>
                    <th>Tajuk Dokumen</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-right p-0">
                <button onclick="window.location =''"
                type="button" class="btn btn-sm btn-icon btn-light-primary">
                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
            </button></td>
        </tr>           
    </tbody>
</table>
</div>

</div>
<br/>

<!--begin::Card Maklumat Peribadi-->


<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Maklumat Staf</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <br />
        <!--begin: page content-->
        <div>
            <div>
                <div class="form-group" style="column-span: page" >
                    <div style="text-align: center;">
                        <img src="{{ asset('media/users/default.jpg') }}"height="150" ></img>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--begin: row kiri-->
                <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Nama:</b></label>
                            <input type="text" class="form-control rounded-corner" value="AZIZAN BIN MOHAMMAD" required="required" disabled="disabled" />
                        </div>
                    <!-- <div class="col-lg-12"> -->
                        <div class="form-group">
                            <label><b>No.Pekerja:</b></label>
                            <input type="text" class="form-control rounded-corner" value="2387" required="required" disabled="disabled" />
                        </div>
                    <!-- </div> -->
                    <!-- <div class="col-lg-12"> -->
                        <div class="form-group">
                            <label><b>PTJ:</b></label>
                            <input type="text" class="form-control rounded-corner" value="Harta Bina" required="required" disabled="disabled" />
                        </div>
                    <!-- </div> -->
                    <div class="col-lg-12 d-none">
                        <div class="form-group">
                            <label><b>Alamat sekarang</b></label>
                            <textarea id="AlamatSekarang" name="alamat" rows="4" cols="50">
                                A33 Pangsapuri Ayu, Taman Teknologi Park, 43299 Ampang Selangor.
                            </textarea>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12"> -->
                        <div class="form-group">
                            <label><b>No. Telefon (R)</b></label>
                            <input type="text" class="form-control rounded-corner" value="017-7789334" required="required" disabled="disabled" />
                        </div>
                    <!-- </div> -->
                    <div class="col-lg-12 d-none">
                        <div class="form-group">
                            <label><b>Email:</b></label>
                            <input type="text" class="form-control rounded-corner" value="azla@utm.my" required="required" disabled="disabled" />
                        </div>
                    </div>
                </div>
                <!--begin: row tengah-->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label><b>Kad Pengenalan:</b></label>
                        <input type="text" class="form-control" value="65084544545" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Jawatan Gred:</b></label>
                        <input type="text" class="form-control" value="Penolog jurutera JA29A" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group d-none">
                        <label><b>Alamat Tetap Selepas Meninggalkan UTM</b></label>
                        <textarea id="AlamatSekarang" name="alamat" rows="4" cols="50">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Email:</b></label>
                        <input type="text" class="form-control rounded-corner" value="azla@utm.my" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>No. Telefon Bimbit</b></label>
                        <input type="text" class="form-control rounded-corner" value="017-7789334" required="required" disabled="disabled" />
                    </div>
                </div>
                <!--end: row tengah-->

            </div>
        </div>
        <!--end: page content-->
    </div>

</div>
<!--end::Card Maklumat Pewaris-->
<br>
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

<br />
<!--begin::Card rekod Perkhidmatan-->


<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Rekod Perkhidmatan</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <br />
        <!--begin: page content-->
        <div>
            <div>
                <div class="form-group" style="column-span: page" >
                </div>
            </div>
            <div class="row">
                <!--begin: row kiri-->
                <div class="col-lg-6">
                    <div class="col-lg-12"><label><b>No. Fail Peribadi:</b></label></div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control rounded-corner" value="6321" required="required" disabled="disabled" />
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>Tarikh Masuk UTM</b></label>
                            <input type="text" class="form-control rounded-corner" value="" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>Tarikh Lapur Diri</b></label>
                            <input type="text" class="form-control rounded-corner" value="" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>Opsyen Persaraan Wajib</b></label>
                            <input type="text" class="form-control rounded-corner" value="" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>Tarikh PTB</b></label>
                            <input type="text" class="form-control rounded-corner" value="" required="required" disabled="disabled" />
                        </div>
                    </div>

                </div>
                <!--begin: row tengah-->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label><b>Tarikh Mula Berkhidmat Di Agensi (Kerajaan Tetap)</b></label>
                        <input type="text" class="form-control" value="" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Tarikh Mula Berkhidmat Di UTM (Tetap)</b></label>
                        <input type="text" class="form-control" value="" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Tarikh Sah Jawatan</b></label>
                        <input type="text" class="form-control" value="" required="required" disabled="disabled" />
                        <div class="form-group">
                            <label><b>Tarikh Peperiksaan Wajib</b></label>
                            <input type="text" class="form-control" value="" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tarikh Lantikan Terkini</b></label>
                            <input type="text" class="form-control" value="10/01/2015" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row tengah-->

                </div>
            </div>
            <!--end: page content-->


        </div>

    </div>
    <!--end::Rekod Perkhidmatan-->
    <br/>


</div>
<br/>
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Status Permohonan</h3>
        </div>

        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm text-dark"></i>
            </a>
        </div>

    </div>
    <div class="card-body">


            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#fcf4a3">
                <tr>
                </tr>

                <tr>
                    <th>No.</th>
                    <th>Status</th>
                    <th>Tarikh Mula</th>
                    <th>Tarikh Akhir</th>
                    <th>Bil.Hari</th>
                    <th>Tempat</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
            <td>1</td>
            <td>Cuti Tanpa Gaji (CTG)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-left p-0">
                <button onclick="window.location =''"
                type="button" class="btn btn-sm btn-icon btn-light-primary">
                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
            </button></td>
        </tr>      
        <tr>
            <td>2</td>
            <td>Dipinjamkan Ke Luar UTM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-left p-0">
                <button onclick="window.location =''"
                type="button" class="btn btn-sm btn-icon btn-light-primary">
                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
            </button></td>
        </tr>      
         <tr>
            <td>3</td>
            <td>Cuti Belajar</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-left p-0">
                <button onclick="window.location =''"
                type="button" class="btn btn-sm btn-icon btn-light-primary">
                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
            </button></td>
        </tr>    
        <tr>
            <td>4</td>
            <td>Latihan Industri</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-left p-0">
                <button onclick="window.location =''"
                type="button" class="btn btn-sm btn-icon btn-light-primary">
                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                </i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
            </button></td>
        </tr>      
    </tbody>
</table>
</div>


</div>
<br/>
<!-- Mula: Butang Seterusnya/ Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('urusetia.PenamatanPerkhidmatan.PengesahanPemulanganHartaBenda') }}'"
                    class="btn btn-primary font-weight-bold"> Seterusnya
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Seterusnya/ Kembali -->
</div>
<br/>

@endsection

{{-- Scripts Section --}}
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
<link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection