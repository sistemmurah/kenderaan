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
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Bahagian B: Pengesahan Pemulangan Harta Benda / Hutang (Universiti)</h3>
                </div>

                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm text-dark"></i>
                    </a>
                </div>

            </div>
            <div class="card-body">

              
                
        <div class="col-lg-12">
            <div style="text-align: left;padding-top: 15px;">
                <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-user"></i>Status Tindakkan Sebelum Meninggalkan Perkhidmatan</h5>
            </div>
        </div>
        

            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697"width="5%";>1</td>
            <td style="background-color:#FAA697"width="75%";><b>Tempoh Notis</b><br/>Membayar sebulan gaji bagi perletakkan JAWATAN dengan notis 24jam</td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">ADA</option>
            <option value="Tatakelakuan">TIADA</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>

            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697"width="5%";>2</td>
            <td style="background-color:#FAA697"width="75%";><b>Gaji Terlebih Bayar</b><br/>Membayar semua gaji terlebih bayar/gantian cuti rehat yang terlebih ambil kerana meletak JAWATAN <br/>
                <label><b><p style="margin-left: 40px">JUMLAH (RM)</b></label>
                        <input type="text" value="" required="required" style="width: 50%"></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>3</td>
            <td style="background-color:#FAA697" width="75%";><b>Borang Cukai Pendapatan</b><br/>Mengisi dan menyerahkan borang cukai pendapatan CP21/CP22B Pin.1/2015 ke Lembaga Hasil Dalam Negeri (LHDN)</td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">ADA</option>
            <option value="Tatakelakuan">TIADA</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>

<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>4</td>
            <td style="background-color:#FAA697" width="75%";><b>Hutang atau denda perpustakaan</b><br/>Menjelaskan bayaran (hutang) atau memulangkan buku-buku kepada Perpustakaan UTM <br/><br/><p style="margin-left: 40px"><b>*Nota: Sila dapatkan pengesahan lanjut daripada Jabatan Perpustakaan</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">ADA</option>
            <option value="Tatakelakuan">TIADA</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
 <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697"width="5%";>5</td>
            <td style="background-color:#FAA697"width="75%";><b>Pinjaman Kenderaan / Kereta</b><br/>Menjelaskan baki pinjaman kenderaan dan komputer kepada jabatan bendahari <br/>
                <label><b><p style="margin-left: 40px">JUMLAH (RM)</b></label>
                        <input type="text" value="" required="required" style="width: 50%"></p><p style="margin-left: 40px"><b>*Nota: Sila dapatkan pengesahan lanjut daripada Jabatan Bendahari</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>

<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>6</td>
            <td style="background-color:#FAA697" width="75%";><b>Surat Penyelesaian Cukai</b><br/>Menyerahkan surat penyelesaian cukai daripada LHDN kepada pejabat bendahari<br/><br/><p style="margin-left: 40px"><b>*Nota: Sila dapatkan pengesahan lanjut daripada Jabatan Bendahari</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">ADA</option>
            <option value="Tatakelakuan">TIADA</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>7</td>
            <td style="background-color:#FAA697" width="75%";><b>Surcaj</b><br/>Menjelaskan apa-apa jumlah wang terhutang yang berbangkit daripada tindaka surcaj kepada pejabat bendahari dan menyemak penyelesaian kes surcaj dengan Pejabat Penasihat Undang-Undang<br/><br/><p style="margin-left: 40px"><b>*Nota: Sila dapatkan Sila dapatkan pengesahan lanjut daripada PPUU</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>8</td>
            <td style="background-color:#FAA697" width="75%";><b>Kad Matrik</b><br/>Memulangkan kad matrik staf / Menjelaskan denda kehilangan kad matrik staf kepada Bahagian Pengurusan Operasi (BPO), Jabatan Pendaftar, UTM JB/ Bahagian Pendaftar UTM KL<br/><br/><p style="margin-left: 40px"><b>*Tindakan ini perlu dilaksanakan bagi staf yang MELETAKKAN JAWATAN dan DITAMATKAN 
PERKHIDMATAN sahaja</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>9</td>
            <td style="background-color:#FAA697" width="75%";><b>Pengisytiharan Bahan Kimia</b><br/>Membuat pengisytiharan pengendalian bahan kimia dengan mengisi borang CMC/F/4 (Chemical Hand Over Form) dan mengembalikan kepada Pusat Pengurusan Makmal 
Universiti (PPMU) <br/><br/><p style="margin-left: 40px"><b>*Tindakan ini perlu dilaksanakan bagi staf yang MELETAKKAN JAWATAN dan DITAMATKAN 
PERKHIDMATAN sahaja</b></p><p style="margin-left: 40px"><b>NOTA:<br/>1. Tindakan ini hanya melibatkan STAF AKADEMIK sahaja.
<br/>2. Jika BERKAITAN, sila dapatkan Pengesahan lanjut daripada PPMU</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>10</td>
            <td style="background-color:#FAA697" width="75%";><b>Pengurusan Geran & Aset Penyelidikan</b><br/>Mengembalikan semua peralatan yang dimiliki oleh RMC termasuk Menjelaskan bayaran/ hutang/ memulangkan apa-apa resit/ deposit di bawah projek RMC dsb. Mengisi borang UTM/RMC/F/0176 & UTM/RMC/F/0177 dan mengembalikan semula ke Pusat Pengurusan Penyelidikan (RMC)<br/><br/><p style="margin-left: 40px"><b>NOTA:<br/>1. Tindakan ini hanya melibatkan STAF AKADEMIK sahaja. <br/>2. 2. Jika BERKAITAN, sila dapatkan Pengesahan lanjut Pegawai Kewangan Unit Akaun & Aset, RMC</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>11</td>
            <td style="background-color:#FAA697" width="75%";><b>Ikatan Perjanjian</b><br/>
                <p><label>Mempunyai ikatan perjanjian  : </label>
                <select class="form-control"required="required" style="width: 40%";>
                <option value="Sila Pilih..">Sila Pilih..</option>
                <option value="Tatakelakuan">TIADA</option>
                <option value="Tatakelakuan">CUTI BELAJAR</option>
                <option value="Tatakelakuan">CUTI SEBATIKAL</option>
                <option value="Tatakelakuan">LATIHAN IKHTISAS</option>
                <option value="Tatakelakuan">BIASISWA</option>
                </select></p><br/><label><b>Sekiranya Lain-lain sila nyatakan:</b></label><input type="text" class="form-control rounded-corner" value="" required="required" /><br/><label><b>Tajaan:</b></label><input type="text" class="form-control rounded-corner" value="" required="required" /><br/><br/>

                <p style="margin-left: 40px"><b> *Jika BERKAITAN, sila dapatkan Pengesahan lanjut :
<br/>Staf Akademik (UTMLead) atau staf PPP (Seksyen Pembangunan Bakat, BSM, Jabatan Pendaftar)</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>

<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>12</td>
            <td style="background-color:#FAA697" width="75%";><b>Kediaman Staf</b><br/>
                <p><label>Mengembalikan semula kunci kediaman staf kepada Unit Perumahan dan Kolej Kediaman : </label>
                <select class="form-control"required="required" style="width: 40%";>
                <option value="Sila Pilih..">Sila Pilih..</option>
                <option value="Tatakelakuan">UPKK UTM JB</option>
                <option value="Tatakelakuan">Jabatan Harta Bina UTM KL</option>
                </select></p><br/>
                <label>Tarikh: </label>
                                <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest" style="width: 50%";>
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Pilih Tarikh" data-target="#kt_datetimepicker_3" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div><br/><br/>

                <p style="margin-left: 40px"><b> *Jika BERKAITAN, sila dapatkan Pengesahan lanjut :
<br/>Staf Akademik (UTMLead) atau staf PPP (Seksyen Pembangunan Bakat, BSM, Jabatan Pendaftar)</b></p></td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
<br/>
<table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#FAF5B2">
            
                <tr>
                    <th>Bil</th>
                    <th>Tindakan</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
            <td style="background-color:#FAA697" width="5%";>13</td>
            <td style="background-color:#FAA697" width="75%";><b>Peralatan / Kunci Di Ptj</b><br/>
                <p><label>Mengembalikan semua alat-alat kepunyaan Pusat Tanggungjawab termasuk kunci bilik, kabinet dan lain-lain kepada PSM </label>
                
                <label>Tarikh: </label>
                                <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest" style="width: 50%";>
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Pilih Tarikh" data-target="#kt_datetimepicker_3" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div><br/><br/>

                </td>
            <td style="background-color:#FAA697"width="20%";><select name="ctl00$MyContentPlaceHolder$ddlkes"
            id="MyContentPlaceHolder_ddlKes" class="form-control"
            required="required">
            <option value="Sila Pilih..">Sila Pilih..</option>
            <option value="Tatakelakuan">BERKAITAN</option>
            <option value="Tatakelakuan">TIDAK BERKAITAN</option>
        </select></td>
            
        </tr>           
    </tbody>
</table>
</div>

</div>
<br/>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Akuan Staf
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                           <p><input type="checkbox" id="vehicle1" name="vehicle1" value="Saya dengan ini mengesahkan semua maklumat yang diberikan adalah benar dan telah mengambil Tinsemua dakan 
terhadap semua perkara yang diperlukan. Saya juga bersetuju membenarkan pihak Universiti mengambil 
tindakan pemotongan gaji/ membuat tuntutan terhadap sebarang hutang/denda atau lain-lain yang 
belum saya selesaikan." style="width: 30px";>
  <label for="vehicle1">Saya dengan ini mengesahkan semua maklumat yang diberikan adalah benar dan telah mengambil Tinsemua dakan 
terhadap semua perkara yang diperlukan. Saya juga bersetuju membenarkan pihak Universiti mengambil 
tindakan pemotongan gaji/ membuat tuntutan terhadap sebarang hutang/denda atau lain-lain yang 
belum saya selesaikan.</label></p><br>
                        </div>
                    </div>
                 
                </div>

              
           

            </div>
        </div>
    </div>
</div>
<!-- Tamat:  -->
<br\> 

<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Pegawai Psm PTJ Untuk Pengesahan
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                           <p><label>Nama Pegawai: </label>
                                <select class="form-control"required="required" style="width: 50%";>
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="WBB1">Nurul Haslinda</option>
                                <option value="WBB2">Mohd Najib Masroom</option>
                                </select></p><br>
                        </div>
                    </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                           <p><label>Jawatan: </label>
                                <input type="text" class="form-control" name="" value=""
                                required="required" style="width: 50%" /></p><br>
                        </div>
                    </div>
                 
                <div class="card-body text-center">
                    <button type="submit" name="action" value="save"
                    class="btn btn-primary font-weight-bold"> Simpan
                    </button>
                        <button onclick="window.location = '{{ route('urusetia.KehadiranPSM.kelulusanAlasanRekodBermasalahPSM') }}'"
                            class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"> Batal
                        </button>
                    </div>
                </div>

              
           

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pengesahan PSM PTJ -->
<br\> 



<!--begin::Card Maklumat Peribadi-->


<br />
<!--begin::Card rekod Perkhidmatan-->


</div>
<br/>
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