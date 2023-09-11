{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha Binti Wahi Anuar, Nurul Fadhilah Binti Mirzeman -->

<!-- Mula: Kategori Harta -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Kategori Harta<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="kategoriHarta">
                                <option value="1">Sila Pilih</option>
                                <option value="2">Kenderaan</option>
                                <option value="3">Aset</option>
                                <option value="4">Syarikat</option>
                                <option value="5">Saham</option>
                                <option value="6">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tamat: Kategori Harta -->

<!--Mula: Maklumat Kenderaan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" id="maklumatKenderaan">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Maklumat Kenderaan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Jenis Harta<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="jenisHartaKenderaan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">BAS</option>
                                <option value="3">KERETA</option>
                                <option value="4">LORI</option>
                                <option value="5">MOTOSIKAL</option>
                                <option value="6">VAN</option>
                                <option value="7">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainJenisKenderaan">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Jenis Kenderaan" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pemilikan Harta<span class="text-danger">*</span></label>
                            <select class="form-control" id="jenisPemilikanKenderaan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">ANAK</option>
                                <option value="3">BAPA</option>
                                <option value="4">DIRI SENDIRI</option>
                                <option value="5">IBU</option>
                                <option value="6">ISTERI</option>
                                <option value="7">SUAMI</option>
                                <option value="8">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainPemilikanKenderaan">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Pemilik Kenderaan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pemilikan<span class="text-danger">*</span></label>
                            <input id="tarikhMilikKenderaan" type="date" class="form-control" value="11/2/2020" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Cara dan Dari Siapa Harta Diperoleh<span class="text-danger">*</span></label>
                            <select class="form-control" id="caraDiperolehKenderaan">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DIBELI</option>
                                <option value="3">DIHADIAHKAN</option>
                                <option value="4">DIPUSAKAI</option>
                                <option value="5">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainCaraPerolehKenderaan">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Cara Peroleh Kenderaan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nilai Perolehan Harta<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="nilaiHartaKenderaan" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pendaftaran<span class="text-danger">*</span></label>
                            <input id="noPendaftaranKenderaan" type="text" class="form-control"
                                placeholder="UTM 8888" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Model<span class="text-danger">*</span></label>
                            <input id="modelKenderaan" type="text" class="form-control" placeholder="CIVIC" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Syarikat Pengeluar<span class="text-danger">*</span></label>
                            <input id="syarikatKenderaan" type="text" class="form-control" placeholder="HONDA" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input id="alamatKenderaan" type="text" class="form-control"
                                placeholder="NO. 5, JALAN TERATAI" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatKenderaan1" type="text" class="form-control"
                                placeholder="KAMPUNG TASIK PERMAISURI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodKenderaan" type="text" class="form-control" placeholder="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarKenderaan" type="text" class="form-control" placeholder="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negeri<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negeriKenderaan">
                                <option>Sila Pilih</option>
                                <option>JOHOR</option>
                                <option>KUALA LUMPUR</option>
                                <option>SELANGOR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>KEDAH</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>KELANTAN</option>
                                <option>TERENGGANU</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negara<span class="text-danger">*</span></label>
                            <select class="form-control" id="negaraKenderaan">
                                <option>Sila Pilih</option>
                                <option>MALAYSIA</option>
                                <option>INDONESIA</option>
                                <option>SINGAPURA</option>
                                <option>BRUNEI</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Kenderaan -->

<!--Mula: Maklumat Aset -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" id="maklumatAset">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Maklumat Aset
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Jenis Harta<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="jenisHartaAset">
                                <option value="1">Sila Pilih</option>
                                <option value="2">HOTEL</option>
                                <option value="3">KEDAI</option>
                                <option value="4">RESORT</option>
                                <option value="5">RUMAH</option>
                                <option value="6">TANAH</option>
                                <option value="7">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainJenisAset">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Jenis Harta" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pemilikan Harta<span class="text-danger">*</span></label>
                            <select class="form-control" id="jenisPemilikanAset">
                                <option value="1">Sila Pilih</option>
                                <option value="2">ANAK</option>
                                <option value="3">BAPA</option>
                                <option value="4">DIRI SENDIRI</option>
                                <option value="5">IBU</option>
                                <option value="6">ISTERI</option>
                                <option value="7">SUAMI</option>
                                <option value="8">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainPemilikanAset">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Pemilik Aset" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pemilikan<span class="text-danger">*</span></label>
                            <input id="tarikhMilikAset" type="date" class="form-control" value="11/2/2020" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Cara dan Dari Siapa Harta Diperoleh<span class="text-danger">*</span></label>
                            <select class="form-control" id="caraDiperolehAset">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DIBELI</option>
                                <option value="3">DIHADIAHKAN</option>
                                <option value="4">DIPUSAKAI</option>
                                <option value="5">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6" id="lainCaraPerolehAset">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Cara Peroleh Aset" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nilai Perolehan Harta<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="nilaiHartaAset" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.PTD/No.Lot<span class="text-danger">*</span></label>
                            <input id="noPendaftaranAset" type="text" class="form-control"
                                placeholder="No.PTD/No.Lot" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Keluasan Aset<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" />
                                <div class="input-group-append">
                                    <div class="form-group">
                                        <select class="form-control" id="caraDiperolehAset">
                                            <option>Sila Pilih</option>
                                            <option>BATU PERSEGI</option>
                                            <option>BIDANG</option>
                                            <option>EKAR</option>
                                            <option>ELA</option>
                                            <option>ELA PERSEGI</option>
                                            <option>KAKI</option>
                                            <option>KAKI PERSEGI</option>
                                            <option>LOT</option>
                                            <option>METER</option>
                                            <option>METER PERSEGI</option>
                                            <option>KAKI</option>
                                            <option>RANTAI</option>
                                            <option>RANTAI PERSEGI</option>
                                            <option>RELUNG</option>
                                            <option>RELUNG PERSEGI</option>
                                            <option>ROD</option>
                                            <option>LAIN-LAIN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input id="alamatAset" type="text" class="form-control"
                                placeholder="NO. 5, JALAN TERATAI" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatAset1" type="text" class="form-control"
                                placeholder="KAMPUNG TASIK PERMAISURI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodAset" type="text" class="form-control" placeholder="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarAset" type="text" class="form-control" placeholder="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negeri<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negeriAset">
                                <option>Sila Pilih</option>
                                <option>JOHOR</option>
                                <option>KUALA LUMPUR</option>
                                <option>SELANGOR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>KEDAH</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>KELANTAN</option>
                                <option>TERENGGANU</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negara<span class="text-danger">*</span></label>
                            <select class="form-control" id="negaraAset">
                                <option>Sila Pilih</option>
                                <option>MALAYSIA</option>
                                <option>INDONESIA</option>
                                <option>SINGAPURA</option>
                                <option>BRUNEI</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Aset -->

<!--Mula: Maklumat Syarikat -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" id="maklumatSyarikat">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Maklumat Syarikat
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Jenis Syarikat<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="jenisSyarikat">
                                <option>Sila Pilih</option>
                                <option>PESENDIRIAN</option>
                                <option>BERSAMA</option>
                                <option>KOOPERASI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Pendaftaran Syarikat<span class="text-danger">*</span></label>
                            <input id="pendaftaranSyarikat" type="text" class="form-control"
                                placeholder="No. Pendaftaran" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Syarikat<span class="text-danger">*</span></label>
                            <input id="namaSyarikat" type="text" class="form-control" placeholder="BERJAYA SDN.BHD." />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pulangan Perniagaan Tahunan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="pulanganSyarikat" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Modal Dibenarkan<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="modalSyarikat" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Modal Berbayar (Paid-up Capital)<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="modalBerbayarSyarikat" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input id="alamatSyarikat" type="text" class="form-control"
                                placeholder="NO. 5, JALAN TERATAI" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatSyarikat1" type="text" class="form-control"
                                placeholder="KAMPUNG TASIK PERMAISURI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodSyarikat" type="text" class="form-control" placeholder="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarSyarikat" type="text" class="form-control" placeholder="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negeri<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negeriSyarikat">
                                <option>Sila Pilih</option>
                                <option>JOHOR</option>
                                <option>KUALA LUMPUR</option>
                                <option>SELANGOR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>KEDAH</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>KELANTAN</option>
                                <option>TERENGGANU</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negara<span class="text-danger">*</span></label>
                            <select class="form-control" id="negaraSyarikat">
                                <option>Sila Pilih</option>
                                <option>MALAYSIA</option>
                                <option>INDONESIA</option>
                                <option>SINGAPURA</option>
                                <option>BRUNEI</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Syarikat -->

<!--Mula: Maklumat Saham -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" id="maklumatSaham">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Maklumat Saham
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Syarikat<span class="text-danger">*</span></label>
                            <input id="syarikatSaham" class="form-control" type="text" placeholder="Nama Syarikat" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label>Jumlah Unit<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" id="jumlahUnitSaham" class="form-control" placeholder="0" />
                                <div class="input-group-append"><span class="input-group-text">Unit</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Modal Berbayar (Paid-up Capital)<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="modalBerbayarSaham" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nilai Saham<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="nilaiSaham" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Saham -->

<!--Mula: Lain-lain -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" id="lain-lain">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Lain-lain
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Nama Harta<span class="text-danger">*</span>
                            </label>
                            <input id="namaHartaLain" type="text" class="form-control" placeholder="Nama Harta" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pemilikan Harta<span class="text-danger">*</span></label>
                            <select class="form-control" id="jenisPemilikanHartaLain">
                                <option value="1">Sila Pilih</option>
                                <option value="2">ANAK</option>
                                <option value="3">BAPA</option>
                                <option value="4">DIRI SENDIRI</option>
                                <option value="5">IBU</option>
                                <option value="6">ISTERI</option>
                                <option value="7">SUAMI</option>
                                <option value="8">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainPemilikanHartaLain">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Pemilik Harta" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Pemilikan<span class="text-danger">*</span></label>
                            <input id="tarikhMilikHartaLain" type="date" class="form-control" value="11/2/2020" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Cara dan Dari Siapa Harta Diperoleh<span class="text-danger">*</span></label>
                            <select class="form-control" id="caraDiperolehHartaLain">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DIBELI</option>
                                <option value="3">DIHADIAHKAN</option>
                                <option value="4">DIPUSAKAI</option>
                                <option value="5">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6" id="lainCaraPerolehHartaLain">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Cara Peroleh Harta" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nilai Perolehan Harta<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">RM</span></div>
                                <input id="nilaiHartaLain" type="text" class="form-control" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Maklumat Lain-lain<span class="text-danger">*</span></label>
                            <textarea rows=3 id="maklumatLain" type="text" class="form-control" value=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input id="alamatHartaLain" type="text" class="form-control"
                                placeholder="NO. 5, JALAN TERATAI" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatHartaLain1" type="text" class="form-control"
                                placeholder="KAMPUNG TASIK PERMAISURI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodHartaLain" type="text" class="form-control" placeholder="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarHartaLain" type="text" class="form-control" placeholder="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negeri<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negeriHartaLain">
                                <option>Sila Pilih</option>
                                <option>JOHOR</option>
                                <option>KUALA LUMPUR</option>
                                <option>SELANGOR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>KEDAH</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>KELANTAN</option>
                                <option>TERENGGANU</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negara<span class="text-danger">*</span></label>
                            <select class="form-control" id="negaraHartaLain">
                                <option>Sila Pilih</option>
                                <option>MALAYSIA</option>
                                <option>INDONESIA</option>
                                <option>SINGAPURA</option>
                                <option>BRUNEI</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Tamat: Lain-lain -->

<!-- Start punca Kewangan-->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-coins"></i>
                Punca-punca Kewangan Bagi Memiliki Harta
            </h3>
        </div>
        <div class="card-toolbar">
            <button
                onclick="window.location = '{{ route('pengisytiharanHartaStaf.harta.puncaKewangan') }}'"
                class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Punca Kewangan">
                <i class="fas fa-plus-circle"></i> Tambah
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="mb-5">
            <div class="row align-items-center">

                <div class="col-md-9">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                <select class="form-control" id="kt_datatable_kewangan_search_status">
                                    <option value="">Semua</option>
                                    <option value="Disimpan">Disimpan</option>
                                    <option value="Dihantar">Dihantar</option>
                                    <option value="Diluluskan">Diluluskan</option>
                                    <option value="Dikembalikan">Dikembalikan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Cari"
                            id="kt_datatable_kewangan_search_query" />
                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!--begin: Datatable-->
        <table class="datatable datatable-head-custom table-hover table-light table-bordered"
            id="kt_datatable_kewangan">
            <thead style="background-color:#fcf4a3">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Kategori Punca</th>
                    <th title="Field #3">Maklumat Punca Kewangan</th>
                    <th title="Field #4">Status Pembayaran</th>
                    <th title="Field #5">Status</th>
                    <th title="Field #6">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PINJAMAN KENDERAAN</td>
                    <td>Pinjaman Dari Bank</td>
                    <td>DIBAYAR MELALUI POTONGAN GAJI</td>
                    <td>Disimpan</td>
                    <td class="text-right p-0">
                        <button
                            onclick="window.location ='{{ route('pengisytiharanHartaStaf.harta.puncaKewangan') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!-- End Punca Kewangan -->

<!-- Start Lampiran-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Lampiran
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <!--begin: Datatable-->
                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                    id="kt_datatable_lampiran">
                    <thead style="background-color:#fcf4a3">
                        <tr>
                            <th title="Field #1">Bil</th>
                            <th title="Field #2">Nama Fail </th>
                            <th title="Field #3">Fail</th>
                            <th title="Field #4">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pinjaman Kenderaan</td>
                            <td>PinjamanKenderaan.pdf</td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-light-primary" id="lihatLampiran">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="hapusLampiran">
                                    <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip"> </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-primary" id="uploadFile">
                                    <i class="fas fa-upload" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-right p-0">
                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                    id="tambahLampiran">
                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
</div>
<!-- End Lampiran -->

<!-- Mula: Butang Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.harta.senaraiHarta') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.harta.senaraiHarta') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Function for datatable kewangan -->
<script>
    var KTDatatableHtmlTableDemo1 = function () {
        var demo1 = function () {
            var datatable1 = $('#kt_datatable_kewangan').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },
                columns: [{
                        field: 'Bil',
                        sortable: false,
                        textAlign: 'center',
                        width: 20,
                        autoHide: false,
                    },
                    {
                        field: 'Kategori Punca',
                        width: 170,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Maklumat Punca Kewangan',
                        width: 170,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status Pembayaran',
                        width: 130,
                        sortable: true,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Status',
                        title: 'Status',
                        width: 100,
                        sortable: true,
                        autoHide: false,
                        textAlign: 'center',
                        template: function (row) {
                            var state = {
                                Disimpan: {
                                    'title': 'Disimpan',
                                    'class': 'w-100 label label-xl label-light-info',
                                },
                                Dihantar: {
                                    'title': 'Dihantar',
                                    'class': 'w-100 label label-xl label-light-success',
                                },
                                Diluluskan: {
                                    'title': 'Diluluskan',
                                    'class': 'w-100 label label-xl label-light-primary',
                                },
                                Dikembalikan: {
                                    'title': 'Dikembalikan',
                                    'class': 'w-100 label label-xl label-light-danger',
                                },
                            };
                            return '<span class="label label-lg font-weight-bold label-inline ' +
                                state[row.Status].class + '">' + state[row.Status]
                                .title +
                                '</span>';
                        }
                    },
                    {
                        field: 'Tindakan',
                        sortable: false,
                        textAlign: 'center',
                        autoHide: false,
                    },

                ],

                search: {
                    input: $('#kt_datatable_kewangan_search_query'),
                    key: 'generalSearch'
                },
            });

            $('#kt_datatable_kewangan_search_status').on('change', function () {
                // regExSearch = '^\\s' + $(this).val().toLowerCase() +'\\s*$';
                // alert(regExSearch);
                //alert($(this).val().toLowerCase());
                datatable1.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_kewangan_search_status').selectpicker();
        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                demo1();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo1.init();
    });
</script>

<!-- Function for datatable lampiran -->
<script>
    var KTDatatableHtmlTableDemo2 = function () {
        var demo = function () {
            var datatable = $('#kt_datatable_lampiran').KTDatatable({
                data: {
                    saveStatus: {
                        cookie: false
                    },
                },

                columns: [{
                        field: 'Bil',
                        textAlign: 'center',
                        width: 50,
                        autoHide: false,
                    },
                    {
                        field: 'Nama Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Fail',
                        width: 250,
                        textAlign: 'center',
                        autoHide: false,
                    },
                    {
                        field: 'Tindakan',
                        textAlign: 'center',
                        autoHide: false,
                    },
                ],

            });

        };

        return {
            // Public functions
            init: function () {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function () {
        KTDatatableHtmlTableDemo2.init();
    });
</script>

<!-- Function to show/hide all section -->
<script>
    $('#maklumatKenderaan').hide();
    $('#maklumatAset').hide();
    $('#maklumatSyarikat').hide();
    $('#maklumatSaham').hide();
    $('#lain-lain').hide();

    $("#kategoriHarta").change(function () {
        if ($(this).val() == 1) {
            $('#maklumatKenderaan').hide();
            $('#maklumatAset').hide();
            $('#maklumatSyarikat').hide();
            $('#maklumatSaham').hide();
            $('#lain-lain').hide();
        } else if ($(this).val() == 2) {
            $('#maklumatKenderaan').show();
            $('#maklumatAset').hide();
            $('#maklumatSyarikat').hide();
            $('#maklumatSaham').hide();
            $('#lain-lain').hide();
        } else if ($(this).val() == 3) {
            $('#maklumatKenderaan').hide();
            $('#maklumatAset').show();
            $('#maklumatSyarikat').hide();
            $('#maklumatSaham').hide();
            $('#lain-lain').hide();
        } else if ($(this).val() == 4) {
            $('#maklumatKenderaan').hide();
            $('#maklumatAset').hide();
            $('#maklumatSyarikat').show();
            $('#maklumatSaham').hide();
            $('#lain-lain').hide();
        } else if ($(this).val() == 5) {
            $('#maklumatKenderaan').hide();
            $('#maklumatAset').hide();
            $('#maklumatSyarikat').hide();
            $('#maklumatSaham').show();
            $('#lain-lain').hide();
        } else if ($(this).val() == 6) {
            $('#maklumatKenderaan').hide();
            $('#maklumatAset').hide();
            $('#maklumatSyarikat').hide();
            $('#maklumatSaham').hide();
            $('#lain-lain').show();
        }
    });
</script>

<!-- Function to show/hide form  Kenderaan section -->
<script>
    $('#lainJenisKenderaan').hide();
    $('#lainPemilikanKenderaan').hide();
    $('#lainCaraPerolehKenderaan').hide();

    $('#jenisHartaKenderaan').change(function () {
        if ($(this).val() == 7) {
            $('#lainJenisKenderaan').show();
        } else {
            $('#lainJenisKenderaan').hide();
        }
    });

    $('#jenisPemilikanKenderaan').change(function () {
        if ($(this).val() == 8) {
            $('#lainPemilikanKenderaan').show();
        } else {
            $('#lainPemilikanKenderaan').hide();
        }
    });

    $('#caraDiperolehKenderaan').change(function () {
        if ($(this).val() == 5) {
            $('#lainCaraPerolehKenderaan').show();
        } else {
            $('#lainCaraPerolehKenderaan').hide();
        }
    });
</script>

<!-- Function to show/hide form  Aset section -->
<script>
    $('#lainJenisAset').hide();
    $('#lainPemilikanAset').hide();
    $('#lainCaraPerolehAset').hide();

    $('#jenisHartaAset').change(function () {
        if ($(this).val() == 7) {
            $('#lainJenisAset').show();
        } else {
            $('#lainJenisAset').hide();
        }
    });

    $('#jenisPemilikanAset').change(function () {
        if ($(this).val() == 8) {
            $('#lainPemilikanAset').show();
        } else {
            $('#lainPemilikanAset').hide();
        }
    });

    $('#caraDiperolehAset').change(function () {
        if ($(this).val() == 5) {
            $('#lainCaraPerolehAset').show();
        } else {
            $('#lainCaraPerolehAset').hide();
        }
    });
</script>

<!-- Function to show/hide form  Lain section -->
<script>
    $('#lainPemilikanHartaLain').hide();
    $('#lainCaraPerolehHartaLain').hide();

    $('#jenisPemilikanHartaLain').change(function () {
        if ($(this).val() == 8) {
            $('#lainPemilikanHartaLain').show();
        } else {
            $('#lainPemilikanHartaLain').hide();
        }
    });

    $('#caraDiperolehHartaLain').change(function () {
        if ($(this).val() == 5) {
            $('#lainCaraPerolehHartaLain').show();
        } else {
            $('#lainCaraPerolehHartaLain').hide();
        }
    });
</script>
@endsection