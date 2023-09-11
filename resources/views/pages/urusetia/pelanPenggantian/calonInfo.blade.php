{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">


    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--Mula: Calon Info Pelan Penggantian -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-info-circle"></i>
                            Maklumat Calon Kumpulan Bakat
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample3">
                        <div class="card">
                            <div class="card-header mb-2" id="headingOne3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
                                    Maklumat Asas
                                </div>
                            </div>
                            <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <div class="col-xl-12">
                                        <div class="d-flex justify-content-center mb-10">
                                            <div class="image-input image-input-outline" id="kt_image_4"
                                                 style="background-image: url({{ asset('media/users/blank.png') }})">
                                                <div class="image-input-wrapper" style=""></div>
                                                <div class="tambah_input" style="display:none;">
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                           data-action="change" data-toggle="tooltip" title=""
                                                           data-original-title="Tukar gambar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar"/>
                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                    </label>

                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                          data-action="cancel" data-toggle="tooltip"
                                                          title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-12">Nama</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="nama" placeholder="NAMA PENUH"
                                                   disabled="{{ $disabled }}"
                                                   value="HASMAH BINTI ALI"/>
                                        </div>
                                        <!--tamat : input text nama-->

                                        <!--mula : input text no pekerja-->
                                        <label class="col-md-2 col-sm-12">No. Pekerja</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="no_pekerja" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="5432">
                                        </div>
                                        <!--tamat : input text no pekerja-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text Jwtn-->
                                        <label class="col-md-2 col-sm-12">Jawatan Semasa</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="jawatan_semasa"
                                                   placeholder="Contoh: NA41A - PENOLONG PENDAFTAR"
                                                   disabled="{{ $disabled }}"
                                                   value="NA41A - PENOLONG PENDAFTAR">
                                        </div>
                                        <!--tamat : input text Jwtn-->

                                        <!--mula : input text kod_ptj-->
                                        <label class="col-md-2 col-sm-12">Kod PTJ</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="kod_ptj" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="J010200">
                                        </div>
                                        <!--tamat : input text kod_ptj-->

                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text KP-->
                                        <label class="col-md-2 col-sm-12">No.KP Baru/Passport</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="no_kp"
                                                   placeholder="Contoh: 840309115300" disabled="{{ $disabled }}"
                                                   value="840309115300">
                                        </div>
                                        <!--tamat : input text KP-->

                                        <!--mula : input text Umur-->
                                        <label class="col-md-2 col-sm-12">Umur</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="umur" placeholder=""
                                                   disabled="{{ $disabled }}"
                                                   value="29 Tahun 7 Bulan">
                                        </div>
                                        <!--tamat : input text Umur-->

                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text tatatertib-->
                                        <label class="col-md-2 col-sm-12">Tatatertib</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="checkbox-inline">
                                                <label class="checkbox checkbox-outline checkbox-primary">
                                                    <input type="checkbox" name="group1[]" id="checkbox">
                                                    <span></span>
                                                    Ya
                                                </label>
                                            </div>
                                        </div>
                                        <!--tamat : input text tatatertib-->

                                        <!--mula : input text perakaun sahsiah-->
                                        <label class="col-md-2 col-sm-12">Perakuan Sahsiah / Integriti</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="checkbox-inline">
                                                <label class="checkbox checkbox-outline checkbox-primary">
                                                    <input type="checkbox" name="group2[]" id="checkbox2">
                                                    <span></span>
                                                    Ya
                                                </label>
                                            </div>
                                        </div>
                                        <!--tamat : input text perakaun sahsiah--->

                                    </div>

                                    <div class="col-xl-1 mb-10">
                                    </div>

                                    <div class="card-toolbar" style="text-align: center">
                                        <button onclick="goBack()"
                                                class="btn btn-danger font-weight-bold" data-toggle="tooltip"
                                                title="Kembali ke Carian Calon">
                                            <i class="fas fa-arrow-left fa-1x"></i>
                                            Kembali
                                        </button>
                                        <button onclick="window.location = '{{ route('urusetia.pelanPenggantian.carian') }}'"
                                                class="btn btn-primary font-weight-bold" data-toggle="tooltip"
                                                title="Kemaskini Maklumat Calon">
                                            <i class="fas fa-edit"></i>
                                            Kemaskini
                                        </button>
                                        <button onclick="window.location = '{{ route('urusetia.pelanPenggantian.carian')}}'"
                                                class="btn btn-success font-weight-bold" data-toggle="tooltip"
                                                title="Hantar Maklumat Calon untuk Tindakan Perakuan">
                                            <i class="fas fa-paper-plane fa-1x"></i>
                                            Hantar
                                        </button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-list-alt"></i>
                            Maklumat Perincian Calon
                        </h3>
                    </div>
                </div>

                <div class="card-body">

                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample4">
                        <div class="card">
                            <div class="card-header mb-2" id="headingTwo3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseTwo3">
                                    Maklumat Perjawatan
                                </div>
                            </div>

                            <div id="collapseTwo3" class="collapse show" data-parent="#accordionExample4">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-12">Fakulti / Jabatan</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="fakulti"
                                                   placeholder="FAKULTI" disabled="{{ $disabled }}"
                                                   value="PENDAFTAR"/>
                                        </div>
                                        <!--tamat : input text fakulti-->

                                        <!--mula : input text kod ptj-->
                                        <label class="col-md-2 col-sm-12">Kod PTJ</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="KOD_PTJ"
                                                   placeholder="" disabled="{{ $disabled }}"
                                                   value="J010200">
                                        </div>
                                        <!--tamat : input text kod ptj-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text Trikh lantikan-->
                                        <label class="col-md-2 col-sm-12">Tarikh Lantikan Terkini</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="input-group date">
                                                <input class="form-control"
                                                       type="text"
                                                       value="07/06/2012"
                                                       name="TKH_LANTIKAN"
                                                       data-date-format="dd-mm-yyyy"
                                                       placeholder="TARIKH LANTIKAN"
                                                       disabled="{{ $disabled }}"/>
                                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tamat : input text Trikh lantikan--->

                                        <!--mula : input text tkh sah-->
                                        <label class="col-md-2 col-sm-12">Tarikh Sah Jawatan</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="input-group date">
                                                <input class="form-control"
                                                       type="text"
                                                       value="07/06/2012"
                                                       name="TKH_SAH"
                                                       data-date-format="dd-mm-yyyy"
                                                       placeholder="TARIKH SAH JAWATAN"
                                                       disabled="{{ $disabled }}"/>
                                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tamat : input text tkh sah-->

                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input TKH_MULA-->
                                        <label class="col-md-2 col-sm-12">Tarikh Mula Berkhidmat Di Agensi
                                            Kerajaan</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="input-group date">
                                                <input class="form-control"
                                                       type="text"
                                                       value="07/06/2010"
                                                       name="TKH_MULA"
                                                       data-date-format="dd-mm-yyyy"
                                                       placeholder="TARIKH MULA KHIDMAT"
                                                       disabled="{{ $disabled }}"/>
                                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tamat : input text TKH_MULA-->

                                        <!--mula : input text tkh masuk-->
                                        <label class="col-md-2 col-sm-12">Tarikh Masuk UTM</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="input-group date">
                                                <input class="form-control"
                                                       type="text"
                                                       value="07/06/2010"
                                                       name="TKH_MASUK"
                                                       data-date-format="dd-mm-yyyy"
                                                       placeholder="TARIKH MASUK UTM"
                                                       disabled="{{ $disabled }}"/>
                                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tamat : input text tkh masuk-->

                                    </div>

                                    <div class="form-group row">
                                        <!--mula : input text taraf jwtn-->
                                        <label class="col-md-2 col-sm-12">Taraf Jawatan </label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="TRF_JWTN"
                                                   placeholder="" disabled="{{ $disabled }}"
                                                   value="Tetap">
                                        </div>
                                        <!--tamat : input text taraf jwtn-->

                                        <!--mula : input text kump khidmat-->
                                        <label class="col-md-2 col-sm-12">Kumpulan Perkhidmatan</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="KUMP_KHIDMAT"
                                                   placeholder="" disabled="{{ $disabled }}"
                                                   value="N - Pentadbiran">
                                        </div>
                                        <!--tamat : input text kump khidmat--->

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-12">Umur Bersara</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="BERSARA"
                                                   placeholder="UMUR BERSARA" disabled="{{ $disabled }}"
                                                   value="60 Tahun"/>
                                        </div>
                                        <!--tamat : input text umur bersara-->

                                        <!--mula : input text tkh bersara-->
                                        <label class="col-md-2 col-sm-12">Tarikh Bersara</label>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="input-group date">
                                                <input class="form-control"
                                                       type="text"
                                                       value="09/03/2044"
                                                       name="TKH_BERSARA"
                                                       data-date-format="dd-mm-yyyy"
                                                       placeholder="TARIKH BERSARA" disabled="{{ $disabled }}"/>
                                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tamat : input text tkh bersara-->
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-12">Umur</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" class="form-control" name="UMUR"
                                                   placeholder="UMUR BERSARA" disabled="{{ $disabled }}"
                                                   value="44 Tahun 6 Bulan"/>
                                        </div>
                                        <!--tamat : input text umur-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample5">
                        <div class="card">
                            <div class="card-header mb-2" id="headingThree3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseThree3">
                                    Maklumat Sejarah Perkhidmatan
                                </div>
                            </div>

                            <div id="collapseThree3" class="collapse show" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="my-5">

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_sej_khidmat">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #0">Bil</th>
                                                        <th title="Field #1">Nama Jawatan</th>
                                                        <th title="Field #2">Majikan</th>
                                                        <th title="Field #3">Tarikh Lantikan</th>
                                                        <th title="Field #4">Tarikh Tamat</th>
                                                        <th title="Field #5">Taraf Pekerjaan</th>
                                                        <th title="Field #6">Tarikh Kemaskini</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>PEGAWAI EKSEKUTIF</td>
                                                        <td>PETRONAS DAGANGAN BERHAD</td>
                                                        <td>05/01/1998</td>
                                                        <td>30/06/1999</td>
                                                        <td>KONTRAK</td>
                                                        <td>19/12/2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>PENOLONG PENDAFTAR KANAN</td>
                                                        <td>FAKULTI PENDIDIKAN</td>
                                                        <td>10/01/2011</td>
                                                        <td>01/02/2012</td>
                                                        <td>TETAP</td>
                                                        <td>08/11/2012</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <!-- Tamat: Datatable-->


                                            </div>
                                            <div class="col-xl-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample6">
                        <div class="card">
                            <div class="card-header mb-2" id="headingFour3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseFour3">
                                    Maklumat Prestasi Staf
                                </div>
                            </div>

                            <div id="collapseFour3" class="collapse show" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3"></div>
                                        <div class="col-xl-6">
                                            <div class="my-5">

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_prestasi">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #1">LPPT 2010</th>
                                                        <th title="Field #2">LPPT 2011</th>
                                                        <th title="Field #3">LPPT 2012</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>88.44</td>
                                                        <td>89.96</td>
                                                        <td>90.0</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <!-- Tamat: Datatable-->


                                            </div>
                                        </div>
                                        <div class="col-xl-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample7">
                        <div class="card">
                            <div class="card-header mb-2" id="headingFive3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseFive3">
                                    Maklumat Pendidikan Tinggi
                                </div>
                            </div>

                            <div id="collapseFive3" class="collapse show" data-parent="#accordionExample7">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="my-5">

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_tahap">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #0">Bil</th>
                                                        <th title="Field #1">Institusi (Maktab / Kolej /
                                                            Universiti)
                                                        </th>
                                                        <th title="Field #2">Lain-lain Institusi</th>
                                                        <th title="Field #3">Tahun</th>
                                                        <th title="Field #4">Tahap</th>
                                                        <th title="Field #5">Pengkhususan</th>
                                                        <th title="Field #6">PNGK</th>
                                                        <th title="Field #7">Keputusan Gred</th>
                                                        <th title="Field #8">Major Pengkhususan</th>
                                                        <th title="Field #9">Minor Pengkhususan</th>
                                                        <th title="Field #10">Tarikh Kemaskini</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>UNIVERSITI TEKNOLOGI MALAYSIA</td>
                                                        <td></td>
                                                        <td>2005</td>
                                                        <td>DIPLOMA</td>
                                                        <td>SAINS</td>
                                                        <td>2.83</td>
                                                        <td></td>
                                                        <td>SAINS KOMPUTER</td>
                                                        <td>MULTIMEDIA</td>
                                                        <td>26/07/2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>UNIVERSITI TEKNOLOGI MALAYSIA</td>
                                                        <td></td>
                                                        <td>2008</td>
                                                        <td>SARJANA MUDA / BACHELOR</td>
                                                        <td>SAINS</td>
                                                        <td>3.72</td>
                                                        <td></td>
                                                        <td>SOFTWARE ENGINEERING</td>
                                                        <td>SAINS KOMPUTER</td>
                                                        <td>01/06/2011</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <!-- Tamat: Datatable-->


                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="d-flex p-2 mb-2 bg-secondary tajukBahagian2"><strong>Maklumat
                                                    Bidang Kepakaran</strong></div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="my-5">

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_bidang">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #0">Bil</th>
                                                        <th title="Field #1">Bidang Kepakaran</th>
                                                        <th title="Field #2">Kategori Kepakaran</th>
                                                        <th title="Field #3">Kumpulan Kepakaran</th>
                                                        <th title="Field #4">Level</th>
                                                        <th title="Field #5">Tarikh Kemaskini</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Other Landscape Design And Planning</td>
                                                        <td>Landscape Design And Planning</td>
                                                        <td>Applied Sciences And Technilogies</td>
                                                        <td>1 - SANGAT TINGGI</td>
                                                        <td>10/12/2012</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <!-- Tamat: Datatable-->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample8">
                        <div class="card">
                            <div class="card-header mb-2" id="headingSix3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseSix3">
                                    Maklumat Kumpulan Bakat Semasa
                                </div>
                            </div>

                            <div id="collapseSix3" class="collapse show" data-parent="#accordionExample8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-8">
                                            <div class="my-5">

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_bakat">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #0">Bil</th>
                                                        <th title="Field #1">Jawatan Strategik</th>
                                                        <th title="Field #2">No Rujukan</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>NA48A - TIMBALAN PENDAFTAR</td>
                                                        <td>PB/2013/NA48A/002</td>
                                                        <td>90.0</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <!-- Tamat: Datatable-->


                                            </div>
                                        </div>
                                        <div class="col-xl-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-solid accordion-toggle-plus mb-10" id="accordionExample9">
                        <div class="card">
                            <div class="card-header mb-2" id="headingSeven3">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseSeven3">
                                    Maklumat Sejarah Penggantian
                                </div>
                            </div>

                            <div id="collapseSeven3" class="collapse show" data-parent="#accordionExample9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-8">
                                            <div class="my-5">

                                                <!-- Mula: Datatable-->
                                                <table class="datatable datatable-head-custom table-hover table-light table-bordered"
                                                       id="kt_datatable_sej_ganti">
                                                    <thead style="background-color:#fcf4a3">
                                                    <tr>
                                                        <th title="Field #0">Bil</th>
                                                        <th title="Field #1">Jawatan Strategik</th>
                                                        <th title="Field #2">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>NA41A - PENOLONG PENDAFTAR</td>
                                                        <td>TIDAK_AKTIF</td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>NA44A - PENOLONG PENDAFTAR KANAN</td>
                                                        <td>AKTIF</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <!-- Tamat: Datatable-->


                                            </div>
                                        </div>
                                        <div class="col-xl-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fa fa-user"></i>
                            Sokongan Dekan / Pengarah / Ketua Skim
                        </h3>
                    </div>
                </div>

                <div class="card-body">


                    <div class="form-group row mb-10">
                        <label class="col-md-2 col-sm-12">No Pekerja</label>
                        <div class="col-md-2 col-sm-12">
                            <input type="text" class="form-control" name="NO_PEKERJA"
                                   placeholder=""
                                   value="3453">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <button onclick="window.location = ''"
                                    class="btn btn-info font-weight-bold" data-toggle="tooltip" data-placement="top"
                                    title="Dapatkan info staf">
                                <i class="fas fa-user fa-1x"></i>No Pekerja
                            </button>
                            <button onclick="window.location = ''"
                                    class="btn btn-success font-weight-bold" data-toggle="tooltip" data-placement="top"
                                    title="Setkan maklumat penyokong">
                                <i class="fas fa-paper-plane fa-1x"></i> Hantar
                            </button>
                        </div>
                    </div>

                    <!--tamat : input text No Pekerja-->


                    <div class="form-group row">

                        <!--mula : input text Nama Sokong-->
                        <label class="col-md-2 col-sm-12">Nama</label>
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control" name="NAMA"
                                   placeholder="" disabled="{{ $disabled }}"
                                   value="YAHAYA BIN HAMZAH">
                        </div>
                        <!--tamat : input text Nama Sokong-->

                        <!--mula : input text Kod PTJ-->
                        <label class="col-md-2 col-sm-12">Kod PTJ</label>
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control" name="KOD_PTJ"
                                   placeholder="" disabled="{{ $disabled }}"
                                   value="J02 - PENDAFTAR">
                        </div>
                        <!--tamat : input text Kod PTJ-->
                    </div>

                    <div class="form-group row">

                        <!--mula : input text Jawatan-->
                        <label class="col-md-2 col-sm-12">Jawatan</label>
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control" name="JAWATAN"
                                   placeholder="" disabled="{{ $disabled }}"
                                   value="TIMBALAN PENDAFTAR (NA54A)">
                        </div>
                        <!--tamat : input text Jawatan-->

                        <!--mula : input text Tarikh-->
                        <label class="col-md-2 col-sm-12">Tarikh</label>
                        <div class="col-md-4 col-sm-12">
                            <div class="input-group date">
                                <input class="form-control"
                                       type="text"
                                       value="11/09/2013"
                                       name="TKH_"
                                       data-date-format="dd-mm-yyyy"
                                       placeholder="TARIKH" disabled="{{ $disabled }}"/>
                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--tamat : input text Tarikh-->

                    </div>

                    <div class="form-group row">

                        <!--mula : input text Status-->
                        <label class="col-md-2 col-sm-12">Status</label>
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control" name="STATUS"
                                   placeholder="" disabled="{{ $disabled }}"
                                   value="">
                        </div>
                        <!--tamat : input text Status-->
                    </div>

                    <!--mula : Catatan -->
                    <div class="form-group row">
                        <label class="col-md-2 col-sm-12">Catatan</label>
                        <div class="col-md-10 col-sm-12">
                            <input class="form-control" type="text" placeholder="CATATAN TENTANG CALON PENYOKONG"
                                   name="CATATAN" value=""/>
                        </div>
                    </div>
                    <!--tamat : Catatan --->



                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Peraturan
                            Sahsiah/Integriti</label>
                        <div class="col-md-2 col-sm-2 col-form-label">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox" name="group2[]"/>
                                    <span></span>
                                    Ya
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox" name="group2[]"
                                           checked="checked"/>
                                    <span></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-1 mb-10">
                    </div>

                    <div class="card-toolbar" style="text-align: center">
                        <button onclick="window.location = ''"
                                class="btn btn-primary font-weight-bold" data-toggle="tooltip"
                                title="Dicadangkan Calon Penyokong">
                            <i class="fas fa-check fa-1x"></i>
                            DISYORKAN
                        </button>
                        <button onclick="window.location = ''"
                                class="btn btn-danger font-weight-bold" data-toggle="tooltip"
                                title="Tidak dicadangkn sebagai Calon Penyokong">
                            <i class="fas fa-times fa-1x"></i>
                            TIDAK DISYORKAN
                        </button>
                    </div>

                </div>
            </div>

            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fa fa-user"></i>
                            Perakuan Ahli Jawatankuasa
                        </h3>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-md-2 col-sm-12">No Surat Rujukan Kelulusan</label>
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control" name="NO_RUJUKAN"
                                   placeholder="NO RUJUKAN"
                                   value="">
                        </div>

                            <!--mula : input text Tarikh-->
                            <label class="col-md-2 col-sm-12">Tarikh Mesyuarat</label>
                            <div class="col-md-4 col-sm-12">
                                <div class="input-group date">
                                    <input class="form-control" id="tkh_mesyuarat"
                                           type="text"
                                           value=""
                                           name="TKH_MESYUARAT"
                                           data-date-format="dd-mm-yyyy"
                                           placeholder="TARIKH MESYUARAT"/>
                                    <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                    </div>
                                </div>
                            </div>
                            <!--tamat : input text Tarikh-->
                    </div>

                    <div class="form-group row">
                        <!--mula : input text Tarikh-->
                        <label class="col-md-2 col-sm-12">Tarikh</label>
                        <div class="col-md-4 col-sm-12">
                            <div class="input-group date">
                                <input class="form-control"
                                       type="text"
                                       value="11/09/2013"
                                       name="TKH_"
                                       data-date-format="dd-mm-yyyy"
                                       placeholder="TARIKH" disabled="{{ $disabled }}"/>
                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                 <i class="la la-calendar-check-o"></i>
                                                            </span>
                                </div>
                            </div>
                        </div>
                        <!--tamat : input text Tarikh-->

                        <!--mula : input text Status-->
                        <label class="col-md-2 col-sm-12">Status</label>
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control" name="STATUS"
                                   placeholder="" disabled="{{ $disabled }}"
                                   value="">
                        </div>
                        <!--tamat : input text Status-->
                    </div>

                    <!--mula : Catatan -->
                    <div class="form-group row">
                        <label class="col-md-2 col-sm-12">Catatan</label>
                        <div class="col-md-10 col-sm-12">
                            <input class="form-control" type="text" placeholder="CATATAN TENTANG CALON PENYOKONG"
                                   name="CATATAN" value=""/>
                        </div>
                    </div>
                    <!--tamat : Catatan --->


                    <div class="col-xl-1 mb-10">
                    </div>

                    <div class="card-toolbar" style="text-align: center">
                        <button onclick="window.location = ''"
                                class="btn btn-primary font-weight-bold" data-toggle="tooltip"
                                title="Lulus sebagai Calon Penyokong">
                            <i class="fas fa-check fa-1x"></i>
                            DILULUSKAN
                        </button>
                        <button onclick="window.location = ''"
                                class="btn btn-danger font-weight-bold" data-toggle="tooltip"
                                title="Tidak lulus sebagai Calon Penyokong">
                            <i class="fas fa-times fa-1x"></i>
                            TIDAK DILULUSKAN
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Tamat: Calon Info Pelan Penggantian -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <script>
        $('input[type="checkbox"]').on('change', function () {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });
    </script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        $("#tkh_mesyuarat").datepicker({
            orientation: "bottom left",
            todayHighlight: true,
            format: 'dd/mm/yyyy'
        }).datepicker("setDate", new Date());
        $('#tkh_mesyuarat').val('');
    </script>

    <!-- script datatable -->
    <script>
        var KTDatatableHtmlTableDemo = function () {
            var demo = function () {
                var datatable = $('#kt_datatable_sej_khidmat').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Nama Jawatan',
                            width: 200,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Majikan',
                            textAlign: 'left',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'Tarikh Lantikan',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Tamat',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Taraf Pekerjaan',
                            width: 70,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                });

                var datatable2 = $('#kt_datatable_prestasi').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: '',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'LPPT 2010',
                            width: 100,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'LPPT 2011',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 100,
                        },
                        {
                            field: 'LPPT 2012',
                            width: 100,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                });

                var datatable3 = $('#kt_datatable_tahap').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Institusi (Maktab / Kolej / Universiti)',
                            width: 150,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Lain-lain Institusi',
                            textAlign: 'center',
                            autoHide: true,
                            sortable: false,
                            width: 100,
                        },
                        {
                            field: 'Tahun',
                            width: 45,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tahap',
                            width: 70,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Pengkhususan',
                            width: 100,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'PNGK',
                            width: 40,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Keputusan Gred',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: true,
                        },
                        {
                            field: 'Major Pengkhususan',
                            width: 100,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Minor Pengkhususan',
                            width: 100,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: true,
                        },
                    ],

                });

                var datatable4 = $('#kt_datatable_bidang').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Bidang Kepakaran',
                            width: 150,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Kategori Kepakaran',
                            textAlign: 'left',
                            autoHide: false,
                            sortable: false,
                            width: 150,
                        },
                        {
                            field: 'Kumpulan Kepakaran',
                            width: 150,
                            textAlign: 'left',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Level',
                            width: 70,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'Tarikh Kemaskini',
                            width: 80,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                    ],

                });

                var datatable5 = $('#kt_datatable_bakat').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Jawatan Strategik',
                            width: 200,
                            textAlign: 'center',
                            sortable: false,
                            autoHide: false,
                        },
                        {
                            field: 'No Rujukan',
                            textAlign: 'center',
                            autoHide: false,
                            sortable: false,
                            width: 200,
                        },
                    ],

                });

                var datatable6 = $('#kt_datatable_sej_ganti').KTDatatable({
                    data: {
                        saveState: {
                            cookie: false
                        },
                    },

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],

                    layout: {
                        scroll: true,
                    },

                    info: false,
                    pagination: false,

                    columns: [{
                        field: 'Bil',
                        width: 20,
                        textAlign: 'center',
                        sortable: false,
                        autoHide: false,
                    },
                        {
                            field: 'Jawatan Strategik',
                            width: 250,
                            textAlign: 'left',
                            sortable: false,
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
                                var status = {
                                    AKTIF: {
                                        'title': 'AKTIF',
                                        'class': 'w-100 label label-xl label-light-success',
                                    },
                                    TIDAK_AKTIF: {
                                        'title': 'TIDAK AKTIF',
                                        'class': 'w-100 label label-xl label-light-danger',
                                    },
                                };
                                return '<span class="label label-lg font-weight-bold label-inline ' +
                                    status[row.Status].class + '">' + status[row.Status].title +
                                    '</span>';
                            }
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
            KTDatatableHtmlTableDemo.init();
        });
    </script>

@endsection