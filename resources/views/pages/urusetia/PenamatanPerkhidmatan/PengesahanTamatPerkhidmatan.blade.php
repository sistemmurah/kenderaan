{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha binti Wahi Anuar -->

<!--Mula: Pengakuan Pemohon-->

<div class="d-flex flex-column-fluid">
    <div class="container">
        <!-- Maklumat Permohonan -->
     
            <div class="card card-custom card-collapsed" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title" style="padding-top:10px;"> <i class="flaticon2-user"></i>&nbsp;&nbsp; Maklumat Permohonan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                  <div class="form-group row">
        <div class="col-lg-6">
            <label>Jenis Penamatan : </label>
            <input id="" type="text" class="form-control" disabled="disabled"value="Bersara Wajib" />
    </div>  
    <div class="col-lg-6">
        <label>Status Kelayakkan : </label>
        <input type="text" class="form-control" name="Status Kelayakkan" value="Layak"required="required" placeholder="" style="background-color:#3ED60F; width: 30%;" />
        <input type="text" class="form-control" name="Status Kelayakkan" value="Tidak Layak"required="required" placeholder="" style="background-color:#FAA697; width: 30%;" />
    </div>  

    <div class="col-lg-6">
        <label>Tarikh Kuatkuasa Tamat : </label>
        <div class="input-group date">
            <input type="text" class="form-control" value="4/2/2021" disabled="disabled"/>
                                            
            <span id="MyContentPlaceHolder_RegularExpressionValidator2"
            style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
        </div> 
    </div> 
                </div>
                </div>
            </div>
        
        <br>
        <!-- Maklumat Dokumen Sokongan -->
     
            <div class="card card-custom card-collapsed" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title" style="padding-top:10px;"> <i class="flaticon-file-2"></i>&nbsp;&nbsp; Dokumen Sokongan</h3>
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
                    <th>Tarikh</th>
                    <th>Tajuk Dokumen</th>
                 
                </tr>
            </thead>
            <tbody>
                <tr>
            <td></td>
            <td></td>
            <td></td>
           
        </tr>           
    </tbody>
</table>
                </div>
            </div>
        
        <br>
          <!-- Maklumat Permohon -->
     
            <div class="card card-custom card-collapsed" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title" style="padding-top:10px;"> <i class="flaticon2-user"></i> &nbsp;&nbsp;Maklumat Permohon</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
<div class="row">
                <!--begin: row kiri-->
                <div class="col-lg-6">
                    <div class="col-lg-4"><label><b>Nama</b></label></div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control rounded-corner" value="Shamir Bin Samad" required="required" disabled="disabled" />
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>No.Pekerja:</b></label>
                            <input type="text" class="form-control rounded-corner" value="6000" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>PTJ:</b></label>
                            <input type="text" class="form-control rounded-corner" value="Harta Bina" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>Alamat sekarang</b></label>
                            <textarea id="AlamatSekarang" name="alamat" rows="4" cols="50">A33 Pangsapuri Ayu, Taman Teknologi Park, 43299 Ampang Selangor.
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>No. Telefon (R)</b></label>
                            <input type="text" class="form-control rounded-corner" value="017-7789334" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><b>Email:</b></label>
                            <input type="text" class="form-control rounded-corner" value="Shamir@utm.my" required="required" disabled="disabled" />
                        </div>
                    </div>

                    <div class="row">

                    </div>
                    <p />
                    <div class="row">

                    </div>
                    <p />
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
                    <div class="form-group">
                        <label></label>
                    </div><br/><br/>
                    <div class="form-group">
                        <label><b>Alamat Tetap Selepas Meninggalkan UTM</b></label>
                        <textarea id="AlamatSekarang" name="alamat" rows="4" cols="50">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label><b>No. Telefon Bimbit</b></label>
                        <input type="text" class="form-control rounded-corner" value="017-7789334" required="required" disabled="disabled" />
                    </div>
                </div>
                <!--end: row tengah-->

            </div>
                </div>
            </div>
        
        <br>
 <!--  Rekod Perkhidmatan -->
     
            <div class="card card-custom card-collapsed" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title" style="padding-top:10px;"> <i class="flaticon2-user"></i>&nbsp;&nbsp;Rekod Perkhidmatan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
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
                </div>
            </div>
        
        <br>
<!--  Status Permohonan Terdahulu -->
     
            <div class="card card-custom card-collapsed" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title" style="padding-top:10px;"> <i class="flaticon2-hourglass-1"></i>&nbsp;&nbsp;Status Permohonan Terdahulu</h3>
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
           
        </tr>      
        <tr>
            <td>2</td>
            <td>Dipinjamkan Ke Luar UTM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>      
         <tr>
            <td>3</td>
            <td>Cuti Belajar</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>    
        <tr>
            <td>4</td>
            <td>Latihan Industri</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>      
    </tbody>
</table>
                </div>
            </div>
        
        <br>
    </div>
</div>

  <!-- card Pengesahan toggle stay-->
<div class="d-flex flex-column-fluid">
    <div class="container">
         <!-- card Pengesahan PSM Fakulti/Jabatan-->
     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fas fa-file-contract"></i>&nbsp;&nbsp;Pengesahan PSM Fakulti/Jabatan</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
             <!--Mula: Pengesahan PSM PTJ -->
       

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh</label>
                            <input id="namaPegawaiPSM" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPegawaiPSM" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI PSM" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pengesahan</label>
                            <input id="tarikhPengesahanPSM" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanPSM" disabled="disabled">
                                <option value="2">DIKLARIFIKASI</option>
                                <option value="3">TIDAK DIKLARIFIKASI</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanPSM">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2" disabled="disabled"
                                placeholder="Sila Nyatakan Sebab Tidak Diklarifikasi"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
    <br>
<!-- card Pengesahan Pengesahan Dekan/Pengarah-->
     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fas fa-file-contract"></i>&nbsp;&nbsp;Pengesahan Dekan/Pengarah</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                      

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disahkan Oleh</label>
                            <input id="namaPegawaiPSM" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanPegawaiPSM" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI PSM" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pengesahan</label>
                            <input id="tarikhPengesahanPSM" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanPSM" disabled="disabled">
                                <option value="2">DIKLARIFIKASI</option>
                                <option value="3">TIDAK DIKLARIFIKASI</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanPSM">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2" disabled="disabled"
                                placeholder="Sila Nyatakan Sebab Tidak Diklarifikasi"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br/>

<!-- card Perakuan Mesyuarat Jawatankuasa Tatatertib-->
     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fas fa-file-contract"></i>&nbsp;&nbsp;Perakuan Mesyuarat Jawatankuasa Tatatertib</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>
                </div>
                      

            <div class="card-body">
                 <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Diluluskan Oleh</label>
                            <input id="namaJawatanKuasa" type="text" class="form-control" disabled="disabled"
                                value="ABU BAKAR BIN ISMAIL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatanJawatanKuasa" type="text" class="form-control" disabled="disabled"
                                value="JAWATANKUASA TATATERTIB" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Mesyuarat</label>
                            <input id="tarikhMesyuaratJawatanKuasa" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kelulusan</label>
                            <input id="tarikhKelulusanJawatanKuasa" class="form-control" type="date" disabled="disabled"
                                value="2021-01-17" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status<span class="text-danger">*</span></label>
                            <select class="form-control" id="pengesahanJawatanKuasa" disabled="disabled">
                                <option value="2">LULUS</option>
                                <option value="3">TIDAK LULUS</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="catatanJawatanKuasa">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Catatan<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="2" disabled="disabled"
                                placeholder="Sila Nyatakan Sebab Tidak Lulus"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br/>
<!-- Mula: Butang Simpan/Hantar/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('urusetia.PenamatanPerkhidmatan.SenaraiPermohonanPenamatanPerkhidmatanPsm') }}'"
                    class="btn btn-outline-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('urusetia.PenamatanPerkhidmatan.SenaraiPermohonanPenamatanPerkhidmatanPsm') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button
                    onclick="window.location = '{{ route('urusetia.PenamatanPerkhidmatan.SenaraiPermohonanPenamatanPerkhidmatanPsm') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Hantar/Batal -->
<br/>
</div>
</div>
  




@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Function to show/hide section catatan PSM -->
<script>
    $('#catatanPSM').hide();

    $("#pengesahanPSM").change(function () {
        if ($(this).val() == 3) {
            $('#catatanPSM').show();
        } else {
            $('#catatanPSM').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Dekan -->
<script>
    $('#catatanDekan').hide();

    $("#pengesahanDekan").change(function () {
        if ($(this).val() == 3) {
            $('#catatanDekan').show();
        } else {
            $('#catatanDekan').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Urusetia -->
<script>
    $('#catatanUrusetia').hide();

    $("#pengesahanUrusetia").change(function () {
        if ($(this).val() == 1) {
            $('#catatanUrusetia').show();
        }
        else if ($(this).val() == 2) {
            $('#catatanUrusetia').hide();
        } else {
            $('#catatanUrusetia').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Pegawai Urusetia -->
<script>
    $('#catatanPegawaiUrusetia').hide();

    $("#pengesahanPegawaiUrusetia").change(function () {
        if ($(this).val() == 3) {
            $('#catatanPegawaiUrusetia').show();
        } else {
            $('#catatanPegawaiUrusetia').hide();
        }
    });
</script>

<!-- Function to show/hide section catatan Urusetia -->
<script>
    $('#catatanJawatanKuasa').hide();

    $("#pengesahanJawatanKuasa").change(function () {
        if ($(this).val() == 3) {
            $('#catatanJawatanKuasa').show();
        } else {
            $('#catatanJawatanKuasa').hide();
        }
    });
</script>

@endsection