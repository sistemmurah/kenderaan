{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<!--begin::Card Profile Info-->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">

        <div class="card-title">
            <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Folder.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Buku Rekod Perkhidmatan (BRP) Staf</h3>
        </div>
        <div class="card-toolbar">
            <a href="" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
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
                <div class="col-lg-4">
                    <div class="form-group" style="column-span:all">
                        <img src="{{ asset('media/users/default.jpg') }}"height="196"></img>
                    </div>
                </div>
                <!--begin: row tengah-->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label><b>No. Pekerja</b></label>
                        <input type="text" class="form-control" value="10000" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Nama</b></label>
                        <input type="text" class="form-control" value="Anis bt Atan" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Jawatan</b></label>
                        <input type="text" class="form-control" value="Pegawai Sukan" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Gred</b></label>
                        <input type="text" class="form-control" value="S41" required="required" disabled="disabled" />
                    </div>
                </div>
                <!--end: row tengah-->
                <!--begin: row kanan sekali-->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label><b>Tarikh Lantikan Tetap</b></label>
                        <input type="text" class="form-control" value="20.10.1998" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Tarikh PTB</b></label>
                        <input type="text" class="form-control" value="20.10.1998" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>No. Tel</b></label>
                        <input type="text" class="form-control" value="017-833 2233" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Emel</b></label>
                        <input type="text" class="form-control" value="anisatan@utm.my" required="required" disabled="disabled" />
                    </div>
                </div>
                <!--end: row kanan sekali-->
            </div>
        </div>
        <!--end: page content-->
    </div>
</div>
<!--end::Card Profile Info-->
<br />

<!--begin::Card Maklumat Peribadi-->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/User.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Maklumat Peribadi</h3>
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
            <div class="row">
                <!--begin: row kiri-->
                <div class="col-lg-6">
                    <div class="col-lg-4"><label><b>Nama Pegawai</b></label></div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control rounded-corner" value="10000" required="required" disabled="disabled" />
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                       <label><b>Nombor Jabatan</b></label>
                            <input type="text" class="form-control rounded-corner" value="K07" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label><b>Tarikh Lahir</b></label>
                            <input type="text" class="form-control rounded-corner" value="05 May 2020" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label><b>Tempat Dilahirkan</b></label>
                            <input type="text" class="form-control rounded-corner" value="Perak" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label><b>Agama</b></label>
                            <input type="text" class="form-control rounded-corner" value="Islam" required="required" disabled="disabled" />
                        </div>
                    </div>
                    <p />
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
                        <label><b>No. Kad Pengenalan</b></label>
                        <input type="text" class="form-control" value="Anis bt Atan" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>No. KWSP</b></label>
                        <input type="text" class="form-control" value="Pegawai Sukan" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Kelayakan Pelajaran</b></label>
                        <input type="text" class="form-control" value="Ijazah Sarjana Muda" required="required" disabled="disabled" />
                    </div>
                    <div class="form-group">
                        <label><b>Ijazah, Diploma dan Kelayakan Profesional</b></label>
                        <input type="text" class="form-control" value="maklumat berkaitan" required="required" disabled="disabled" />
                    </div>
                </div>
                <!--end: row tengah-->

            </div>
        </div>
        <!--end: page content-->
    </div>

</div>
<!--end::Card Maklumat Peribadi-->
<br />

<!--begin::Card Maklumat Waris-->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-45  mr-10">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/Files/Selected-file.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Maklumat Waris</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <!--begin: page content-->
        <div>
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Card-->
                    <!--begin: page content-->
                    <!--begin: Datatable-->

                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored" style="text-align:center">
                        <tr>
                        </tr>
                        <tr>
                            <th>Bil.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Hubungan</th>
                            <th>No. Telefon Rumah</th>
                            <th>No. Telefon Bimbit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Aminudin b. Ramli</td>
                            <td>Lot 518, KDSK,73800 Seri Manjung, Perak</td>
                            <td>Suami</td>
                            <td>05-6467 357</td>
                            <td>013-232 7989</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Asiah Binti Hassan</td>
                            <td>No 65, Jalan Serindik, Pahang</td>
                            <td>Ibu</td>
                            <td>06-9987653</td>
                            <td>011-38765678</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ahmad Bin Karim</td>
                            <td>No 65, Jalan Serindik, Pahang</td>
                            <td>Bapa</td>
                            <td>06-9987653</td>
                            <td>013-87590863</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <!--end: page content-->
                    <!--end::Card-->
                    <br>
                </div>
            </div>
        </div>
        <!--end: page content-->
    </div>
</div>
<!--end::Card Maklumat Waris-->
<br />

<!--begin::Card Kenyataan Perkhidmatan-->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-45  mr-10">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/Text/Bullet-list.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Kenyataan Perkhidmatan</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <!--begin: page content-->
        <div>
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Card-->
                    <!--begin: page content-->
                    <!--begin: Datatable-->

                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored" style="text-align:center">
                        <tr>
                            <th colspan="8" style="background-color:lightgray"><u>BUTIR-BUTIR PERUBAHAN</u></th>

                        </tr>
                        <tr>
                            <th>Bil</th>
                            <th>Kebenaran</th>
                            <th>Butir-butir perubahan atau lain-lain hal mengenai pegawai</th>
                            <th>Nama jawatan, peringkat dan/atau kelas</th>
                            <th>Tarikh Mulai Daripada</th>
                            <th>Berpencen, Tak Berpencen, Peruntukan Terbuka</th>
                            <th>Gaji Sebulan</th>
                            <th>Pengesahan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>25/06/2010</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                            <td>25/06/2010</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                            <td>Berpencen, Tak Berpencen, Peruntukan Terbuka</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>25/12/2014</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                            <td>TETAP</td>
                            <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                            <td>25/12/2014</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                            <td>TETAP</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>08/11/2015</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                            <td>08/11/2015</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                            <td>TETAP</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>08/12/2017</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                            <td>TETAP</td>
                            <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                            <td>08/12/2017</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                            <td>Berpencen, Tak Berpencen, Peruntukan Terbuka</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>08/02/2020</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                            <td>08/02/2020</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                            <td>Berpencen, Tak Berpencen, Peruntukan Terbuka</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>08/02/2020</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                            <td>08/02/2020</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F48</td>
                            <td>TETAP</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <!--end: page content-->
                    <!--end::Card-->
                    <br>
                </div>
            </div>
        </div>
        <!--end: page content-->
    </div>
</div>
<!--end::Card Kenyataan Perkhidmatan-->
<br />

<!--begin::Card Kenyataan Cuti-->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-45  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/Files/file.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Kenyataan Cuti</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <!--begin: page content-->
        <div>
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Card-->
                    <!--begin: page content-->
                    <!--begin: Datatable-->

                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored" style="text-align:center">
                        <tr>
                            <th colspan="4"></th>

                            <th colspan="2" style="background-color:lightgray"><u>TEMPOH</u></th>
                            <th colspan="3" style="background-color:lightgray"><u>BERAPA HARI</u></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Bil</th>
                            <th>Kebenaran</th>
                            <th>Jenis Cuti</th>
                            <th>Tahun</th>
                            <th>Daripada</th>
                            <th>Hingga</th>
                            <th>Gaji Penuh</th>
                            <th>Separuh Gaji</th>
                            <th>Tiada Bergaji</th>
                            <th>Hal-hal Lain</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>25/06/2010</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                            <td>25/06/2010</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                            <td>TETAP</td>
                            <td>TETAP</td>
                            <td>Berpencen, Tak Berpencen, Peruntukan Terbuka</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>25/12/2014</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                            <td>TETAP</td>
                            <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                            <td>25/12/2014</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                            <td>TETAP</td>
                            <td>TETAP</td>
                            <td>TETAP</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>08/11/2015</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                            <td>08/11/2015</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                            <td>TETAP</td>
                            <td>TETAP</td>
                            <td>Berpencen, Tak Berpencen, Peruntukan Terbuka</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>08/12/2017</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                            <td>TETAP</td>
                            <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                            <td>08/12/2017</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                            <td>TETAP</td>
                            <td>TETAP</td>
                            <td>Berpencen, Tak Berpencen, Peruntukan Terbuka</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <!--end: page content-->
                    <!--end::Card-->
                    <br>
                </div>
            </div>
        </div>
        <!--end: page content-->
    </div>
</div>
<!--end::Card Kenyataan Cuti-->
<br />
<!--begin::Card Lembaran Kelakuan-->
<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <div class="symbol symbol-45  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/Files/User-folder.svg", "svg-icon-lg") }}
                </span>
            </div>
            <h3 class="card-label">Lembaran Kelakuan</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <!--begin: page content-->
        <div>
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Card-->
                    <!--begin: page content-->
                    <!--begin: Datatable-->

                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored" style="text-align:center">

                        <tr>
                            <th>Bil</th>
                            <th>Tarikh</th>
                            <th>Kebenaran</th>
                            <th>Butir-butir Pujian, Teguran atau Tindakan Tatatertib</th>
                            <th>Pengesahan Pegawai Yang Berkuasa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>25/06/2010</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA29</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>25/12/2014</td>
                            <td>PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT, GRED FA32</td>
                            <td>TETAP</td>
                            <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>08/11/2015</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41</td>
                            <td>TETAP</td>
                            <td>030108 - NAIK PANGKAT SECARA TEMUDUGA</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>08/12/2017</td>
                            <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                            <td>TETAP</td>
                            <td>030106 - NAIK PANGKAT SECARA FLEKSI</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <!--end: page content-->
                    <!--end::Card-->
                    <br>
                </div>
            </div>
        </div>
        <!--end: page content-->
    </div>
</div>
<!--end::Card Lembaran Kelakuan-->
@endsection

<!--begin::Card Profile Info-->


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