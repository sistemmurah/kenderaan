{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--begin::Card Profile Info-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">

            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Kod Pelaksanaan Kursus</h3>
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
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kod Kursus</b></label>
                                <input type="text" class="form-control rounded-corner" value="MTE 9753" required="required" disabled="disabled" />
                            </div>
                        </div>
                    </div>

                    <!--end: row Kiri-->
                    <!--begin: row kanan -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Kod Pelaksanaan Kursus</b></label>
                            <input type="text" class="form-control rounded-corner" value="MTE 9753" required="required" disabled="disabled" />
                        </div>

                    </div>
                    <!--end: row kanan sekali-->
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::-->
    <br />
    <!--begin::Maklumat Data Bank Kursus-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/Files/File-done.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Data Bank Kursus</h3>
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
                <div>
                    <div class="form-group" style="column-span: page" >
                    </div>
                </div>
                <div class="row">
                    <!--begin: row kiri-->
                    <div class="col-lg-6">
                        <div class="col-lg-4"><label><b>Penganjur</b></label></div>
                        <div class="col-lg-12">
                            <select class="form-control" id="Kursus">
                                <option>Sila Pilih</option>
                                <option>DALAM UTM</option>
                                <option>LUAR UTM - TIDAK BERBAYAR</option>
                                <option>LUAR UTM - BERBAYAR</option>
                            </select>                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Taraf Penganjur</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>UTM</option>
                                    <option>LAIN-LAIN</option>
                                </select>                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Fakulti/Jabatan</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>J01 JABATAN CANSELERI</option>
                                    <option>J02 JABATAN PENDAFTAR</option>
                                    <option>J03 JABATAN BENDAHARI</option>
                                    <option>J04 JABATAN PERPUSTAKAAN UTM</option>
                                    <option>J05 JABATAN HARTA BINA</option>
                                    <option>J06 JABATAN TIMBALAN NAIB CANSELOR (HAL EHWAL PELAJAR)</option>
                                    <option>J07 JABATAN PERKHIDMATAN DIGITAL</option>
                                    <option>J08 JABATAN TIMBALAN NAIB CANSELOR(AKADEMIK DAN ANTARABANGSA)</option>
                                    <option>J09 JABATAN TIMBALAN NAIB CANSELOR (PENYELIDIKAN DAN INOVASI)</option>
                                    <option>J10 SEKOLAH PENGAJIAN SISWAZAH</option>
                                    <option>J11 SEKOLAH PENDIDIKAN PROFESIONAL & PENDIDIKAN BERTERUSAN</option>
                                    <option>J12 PEJABAT PENERBIT</option>
                                    <option>J13 PUSAT PENGURUSAN PENYELIDIKAN</option>
                                    <option>J14 PUSAT INOVASI DAN PENGKOMERSILAN</option>
                                    <option>J15 OVERHEAD UNIVERSITI (UTM JB)</option>
                                    <option>J16 PUSAT KEPIMPINAN AKADEMIK UTM</option>
                                    <option>J17 JABATAN TIMBALAN NAIB CANSELOR (PEMBANGUNAN)</option>
                                    <option>J21 FAKULTI ALAM BINA</option>
                                    <option>J22 FAKULTI KEJURUTERAAN AWAM</option>
                                    <option>J23 FAKULTI KEJURUTERAAN ELEKTRIK</option>
                                    <option>J24 FAKULTI KEJURUTERAAN MEKANIKAL</option>
                                    <option>J25 FAKULTI KEJURUTERAAN KIMIA & KEJURUTERAAN SUMBER ASLI</option>
                                    <option>J26 FAKULTI SAINS</option>
                                    <option>J27 FAKULTI GEOINFORMASI DAN HARTA TANAH</option>
                                    <option>J28 FAKULTI KOMPUTERAN</option>
                                    <option>J29 FAKULTI PENGURUSAN</option>
                                    <option>J31 FAKULTI PENDIDIKAN</option>
                                    <option>J33 FAKULTI TAMADUN ISLAM</option>
                                    <option>J35 FAKULTI BIOSAINS & BIOKEJURUTERAAN</option>
                                    <option>J36 FAKULTI KEJURUTERAAN BIOPERUBATAN & SAINS KESIHATAN</option>
                                    <option>J38 SEKOLAH INFORMATIKS TERMAJU</option>
                                    <option>J39 UTM PERDANA SCHOOL</option>
                                    <option>J40 SEKOLAH RAZAK UTM DALAM KEJURUTERAAN DAN TEKNOLOGI TERMAJU</option>
                                    <option>J41 AKADEMI BAHASA</option>
                                    <option>J42 FAKULTI KEJURUTERAAN PETROLEUM DAN KEJURUTERAAN TENAGA DIPERBAHARUI</option>
                                    <option>J43 MALAYSIA-JAPAN INTERNATIONAL INSTITUTE OF TECHNOLOGY</option>
                                    <option>J44 FAKULTI KEJURUTERAAN KIMIA</option>
                                    <option>J45 FAKULTI BIOSAINS DAN KEJURUTERAAN PERUBATAN</option>
                                    <option>J46 FAKULTI KEJURUTERAAN KIMIA DAN KEJUEUTERAAN TENAGA</option>
                                    <option>J50 PUSAT TANGGUNGJAWAB UMUM UTM SKUDAI</option>
                                    <option>J51 FAKULTI KEJURUTERAAN</option>
                                    <option>J52 FAKULTI ALAM BINA & UKUR</option>
                                    <option>J53 FAKULTI SAINS SOSIAL DAN KEMANUSIAAN</option>
                                    <option>J54 FAKULTI SAINS</option>
                                    <option>J55 SEKOLAH PERNIAGAAN ANTARABANGSA AZMAN HASHIM</option>
                                    <option>K01 PEJABAT NAIB CANSELOR, UTMKL</option>
                                    <option>K02 JABATAN PENDAFTAR</option>
                                    <option>K03 JABATAN BENDAHARI</option>
                                    <option>K04 JABATAN PERPUSTAKAAN UTM</option>
                                    <option>K05 JABATAN HARTA BINA</option>
                                    <option>K06 JABATAN TIMBALAN NAIB CANSELOR (HAL EHWAL PELAJAR)</option>
                                    <option>K07 PEJABAT PERKHIDMATAN DIGITAL KL</option>
                                    <option>K08 JABATAN TIMBALAN NAIB CANSELOR (AKADEMIK DAN ANTARABANGSA)</option>
                                    <option>K09 JABATAN TIMBALAN NAIB CANSELOR (PENYELIDIKAN DAN INOVASI)</option>
                                    <option>K10 SEKOLAH PENGAJIAN SISWAZAH</option>
                                    <option>K11 SEKOLAH PENDIDIKAN PROFESIONAL & PENDIDIKAN BERTERUSAN</option>
                                    <option>K13 PUSAT PENGURUSAN PENYELIDIKAN</option>
                                    <option>K14 PUSAT INOVASI DAN PENGKOMERSILAN</option>
                                    <option>K15 OVERHEAD UNIVERSITI (UTM INTERNATIONAL CAMPUS KUALA LUMPUR)</option>
                                    <option>K17 JABATAN TIMBALAN NAIB CANSELOR (PEMBANGUNAN)</option>
                                    <option>K22 FAKULTI KEJURUTERAAN AWAM</option>
                                    <option>K23 FAKULTI KEJURUTERAAN ELEKTRIK</option>
                                    <option>K24 FAKULTI KEJURUTERAAN MEKANIKAL</option>
                                    <option>K25 FAKULTI KIMIA & KEJURUTERAAN SUMBER ASLI</option>
                                    <option>K28 FAKULTI KOMPUTERAN</option>
                                    <option>K32 KOLEJ SAINS DAN TEKNOLOGI</option>
                                    <option>K33 FAKULTI TAMADUN ISLAM</option>
                                    <option>K38 ADVANCED INFORMATIC SCHOOL</option>
                                    <option>K39 UTM PERDANA SCHOOL</option>
                                    <option>K40 SEKOLAH RAZAK UTM DALAM KEJURUTERAAN DAN TEKNOLOGI TERMAJU</option>
                                    <option>K41 AKADEMI BAHASA</option>
                                    <option>K43 MALAYSIA-JAPAN INTERNATIONAL INSTITUTE OF TECHNOLOGY</option>
                                    <option>K44 FAKULTI KEJURUTERAAN KIMIA</option>
                                    <option>K50 PUSAT TANGGUNGJAWAB UMUM UTM INTERNATIONAL CAMPUS KUALA LUMPUR</option>
                                    <option>K53 FAKULTI SAINS SOSIAL DAN KEMANUSIAAN</option>
                                    <option>K55 SEKOLAH PERNIAGAAN ANTARABANGSA AZMAN HASHIM</option>
                                    <option>K56 FAKULTI TEKNOLOGI & INFORMATIK RAZAK</option>
                                    <option>K63 SEKOLAH PERNIAGAAN ANTARABANGSA AZMAN HASHIM</option>
                                    <option>P09 PEJABAT TIMBALAN NAIB CANSELOR (PENYELIDIKAN DAN INOVASI)</option>
                                </select>                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Bahagian</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>PEJABAT PENTADBIRAN</option>
                                    <option>PENGURUSAN MAKMAL</option>
                                </select>                              </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Jenis Kalendar</b></label>
                                <select class="form-control" id="Kursus">
                                <option>Sila Pilih</option>
                                <option>KALENDAR LATIHAN</option>
                                <option>LAIN-LAIN (AD-HOC)</option>
                                   </select>    </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kategori Staf</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>AKADEMIK</option>
                                    <option>STAF PELAKSANA</option>
                                    <option>SEMUA</option>
                                </select>                              </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Tempoh Perkhidmatan</b></label>
                                <input type="text" class="form-control rounded-corner" value="5 Tahun Berkhidmat" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Jenis Kursus</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>KURSUS BAHASA</option>
                                    <option>KURSUS KEPIMPINAN</option>
                                    <option>KURSUS KESELAMATAN</option>
                                    <option>KURSUS KEWANGAN</option>
                                    <option>KURSUS KOMPETENSI TERAS</option>
                                    <option>KURSUS KUALITI</option>
                                    <option>KURSUS PEMBANGUNAN DIRI</option>
                                    <option>KURSUS PEMBANGUNAN PROFESIONAL</option>
                                    <option>KURSUS PENGAJARAN & PEMBELAJARAN (P&P)</option>
                                    <option>KURSUS PENGAJARAN MENGGUNAKAN TEKNOLOGI</option>
                                    <option>KURSUS PENGURUSAN</option>
                                    <option>KURSUS PENTADBIR AKADEMIK</option>
                                    <option>KURSUS PERHUBUNGAN AWAM</option>
                                    <option>KURSUS PERKHIDMATAN</option>
                                    <option>KURSUS TEKNOLOGI MAKLUMAT</option>
                                    <option>KURSUS UMUM</option>
                                    <option>KURSUS KURSUS/TAKLIMAT/BENGKEL/LATIHAN/SEMINAR KHAS</option>
                                    <option>LATIHAN KENDIRI</option>
                                    <option>PROSES PEMINDAHAN DATA LAMA (MIGRATION DATA)</option>
                                </select>                              </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Jenis Latihan</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>PERSIDANGAN</option>
                                    <option>LAWATAN KERJA</option>
                                    <option>MYLINE</option>
                                    <option>PEMBELAJARAN KENDIRI</option>
                                    <option>SESI PENGKAYAAN ILMU</option>
                                    <option>PERHIMPUNAN BULANAN UNIVERSITI</option>
                                    <option>PROGRAM GAYA HIDUP SIHAT</option>
                                    <option>PROGRAM MEMBUDAYAKAN AL-QURAN</option>
                                    <option>KURSUS JANGKA PANJANG</option>
                                    <option>KURSUS JANGKA PENDEK</option>
                                </select>                              </div>
                        </div>

                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Kos Anggaran (RM)</b></label>
                            <input type="text" class="form-control" value="ISLAM" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tahap Latihan</b></label>
                            <select class="form-control" id="Kursus">
                                <option>Sila Pilih</option>
                                <option>UMUM</option>
                                <option>WAJIB</option>
                                <option>OPSYENAL</option>
                            </select>                          </div>
                        <div class="form-group">
                            <label><b>Peringkat Latihan</b></label>
                            <select class="form-control" id="Kursus">
                                <option>Sila Pilih</option>
                                <option>1</option>
                            </select>                          </div>
                        <div class="form-group">
                            <label><b>Taraf Latihan</b></label>
                            <select class="form-control" id="Kursus">
                                <option>Sila Pilih</option>
                                <option>ANTARABANGSA</option>
                                <option>UNIVERSITI</option>
                                <option>KEBANGSAAN</option>
                                <option>LAIN-LAIN</option>
                            </select>                          </div>
                        <div class="form-group">
                            <label><b>Tahun Daftar</b></label>
                            <input type="text" class="form-control" value="2009" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tajuk Kursus</b></label>
                            <textarea id="w3review" name="w3review" rows="4" cols="65"></textarea>
                        </div>
                        <div class="form-group">
                            <label><b>Sinopsis Kursus</b></label>
                            <textarea id="w3review" name="w3review" rows="4" cols="65"></textarea>
                        </div>
                    </div>
                    <!--end: row tengah-->
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Maklumat Data Bank Kursus-->
    <br />
    <!--begin::Maklumat Pelaksanaan Kursus-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Maklumat Pelaksanaan Kursus</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <br />
            <div>
                <div>
                    <div class="form-group" style="column-span: page" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12"><label><b>Kos Keseluruhan Kursus (RM)</b></label></div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control rounded-corner" value="5,000" required="required" disabled="disabled" />
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Kos Kursus Untuk Seorang Peserta (RM)</b></label>
                                <input type="text" class="form-control rounded-corner" value="350.00" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Penilaian Kursus</b></label>
                                <select class="form-control" id="Kursus">
                                    <option>Sila Pilih</option>
                                    <option>ADA</option>
                                    <option>TIADA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Penganjur Kursus</b></label>
                                <input type="text" class="form-control rounded-corner" value="-" required="required" disabled="disabled" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><b>Bilangan Peserta</b></label>
                                <input type="text" class="form-control rounded-corner" value="60" required="required" disabled="disabled" />
                            </div>
                        </div>
                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Pengesah Sijil</b></label>
                            <input type="text" class="form-control" value="PN ARINA SAZALI" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Tahun Laksana</b></label>
                            <input type="text" class="form-control" value="2010" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Catatan</b></label>
                            <textarea id="w3review" name="w3review" rows="4" cols="65"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Maklumat Pelaksanaan Kursus-->
    <br />
    <!--begin::Status Pelaksanaan Kursus-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <div class="symbol symbol-40  mr-5">
                <span class="">
                    {{ Metronic::getSVG("media/svg/icons/General/Clipboard.svg", "svg-icon-lg") }}
                </span>
                </div>
                <h3 class="card-label">Status Pelaksanaan Kursus</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
            <thead style="background-color:#fcf4a3">
            <tr>
            </tr>
            <tr>
                <th>Nama SODO</th>
                <th style="text-align: center">Baki</th>
                <th style="text-align: center">Sila Pilih</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>B12000</td>
                <td style="text-align: center">15,000</td>
                <td style="text-align: center" class="thcenter">
                    <label>
                        <input type="checkbox" name="" value="" align="center">
                    </label>
                </td>

            </tr>
            </tr>
            <tr>
                <td>B24000</td>
                <td style="text-align: center">30,000</td>
                <td style="text-align: center" class="thcenter">
                    <label>
                        <input type="checkbox" name="" value="" align="center">
                    </label>
                </td>
            </tr>
            </tr>
            <tr>
                <td>B27000</td>
                <td style="text-align: center">23,000</td>
                <td style="text-align: center" class="thcenter">
                    <label>
                        <input type="checkbox" name="" value="" align="center">
                    </label>
                </td>
            </tr>
            </tr>
            </tbody>
        </table>
        <div class="card-body">
            <br />
            <div>
                <div>
                    <div class="form-group" style="column-span: page" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12"><label><b>Pengesah Pelaksanaan Kursus</b></label></div>
                        <select class="form-control" id="Kursus">
                            <option>Sila Pilih</option>
                            <option>UTM HCD JB</option>
                            <option>UTM IC PEJABAT PENDAFTAR</option>
                            <option>UTM UTMLEAD</option>
                        </select>
                    </div>
                    <!--begin: row tengah-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Staf Pengesah</b></label>
                            <select class="form-control" id="Kursus">
                                <option>Sila Pilih</option>
                                <option>10564 - AISAH BINTI SALLEH</option>
                                <option>10411 - AIZAT BIN JAMIL</option>
                                <option>10591 - AMIRUL ARIFF BIN ZAINAL</option>
                                <option>11616 - MOHAMED HAMZAH BIN ZAINAL ABIDIN</option>
                                <option>11981 - MUHAMAD TALHAH BIN BAHARA</option>
                                <option>14978 - NUR HUZAIFAH BINTI A SAMAD</option>
                            </select>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Status Pelaksanaan Kursus-->
    <br />
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="form-group row">
            </div>

            <div id="MyContentPlaceHolder_savebtn">
                <div class="col-lg-19">
                    <div style="text-align: center;">
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Simpan
                        </button>
                        <button class="btn btn-danger font-weight-bold" style="align-items: center"> Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection
