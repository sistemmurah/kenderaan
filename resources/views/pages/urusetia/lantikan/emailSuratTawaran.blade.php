{{-- Extends layout --}}
@extends('layout.default_blank')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    <div class="d-flex flex-column flex-root">
        <div class="container">
            <div class="card card-custom" data-card="true" id="kt_card_1">
            <div class="card-body">
                <div class="col-lg-12 text-center">
                    <h2>Hantar Email Surat Tawaran</h2><br>

                </div>

                <div class="form-group row">
                    <table class="table table-responsive" style="border: solid 1px silver; width: 100%;" align="center">
                        <tr>
                            <td width="15%"><label><b>MyKad</b></label></td>
                            <td>871019-23-5955</td>
                            <td width="1%">&nbsp;</td>
                            <td width="18%"><label><b>Nama</b></label></td>
                            <td width="35%"><span id="lblNamaCalon">ZUL HILMI BIN SULAIMAN</span></td>
                        </tr>
                        <tr>
                            <td width="15%"><label><b>No. Siri Jawatan</b></label></td>
                            <td>F29</td>
                            <td width="1%">&nbsp;</td>
                            <td width="18%"><label><b>Jawatan</b></label></td>
                            <td width="35%"><span id="lblNamaCalon">PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT</span></td>
                        </tr>
                        <tr>
                            <td width="15%"><label><b>To: E-mail Pemohon</b></label></td>
                            <td><input type="text" class="form-control" name="Jawatan" value=""
                                       required="required" placeholder=""/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="15%"><label><b>CC: PSM Fakulti</b></label></td>
                            <td><input type="text" class="form-control" name="Jawatan" value=""
                                       required="required" placeholder=""/></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="15%"><label><b>CC: Penyelia</b></label></td>
                            <td><textarea class="form-control"></textarea></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="15%"><label><b>Subjek</b></label></td>
                            <td colspan="4"><input type="text" class="form-control" name="Jawatan" value="[UTM-PERJAWATAN] Surat Tawaran dan Pengesahan Kehadiran"
                                                   required="required" placeholder=""/></td>

                        </tr>

                    </table>

                    <table class="table" style="background-color:#f7f7f7; border: solid 1px silver; width: 100%;" align="center ">
                        <tr>
                            <td align="center">Jika pemohon mempunyai 2 email, sila pilih satu email sahaja untuk hantar Surat Tawaran</td>
                        </tr>
                    </table>

                    <div class="col-lg-12 text-center">
                        <button onclick="papar()" class="btn btn-primary font-weight-bold">Lihat Contoh</button>
                        <input type="submit" value="Hantar" class="btn btn-primary font-weight-bold"/>
                        <a href="javascript: self.close ()"><button class="btn btn-primary font-weight-bold">Tutup</button></a>
                    </div>
                </div>


            </div>
            <div id="myDiv" style="display: none;">
                <table class="table table-responsive" style="border: solid 0px silver; width: 100%" align="center">
                    <tr>
                        <td>
                            <span id="lblIsiKandunganEmail">TAWARAN JAWATAN DI UNIVERSITI TEKNOLOGI MALAYSIA,<br/><br/>Dengan segala hormatnya saya merujuk kepada perkara di atas, dimaklumkan bahawa pihak Universiti Teknologi Malaysia melalui Mesyuarat Jawatankuasa Pemilih Bagi Kumpulan Pelaksana (Gred 1-38) Bil. 2/2019 pada 19 Februari 2019 telah bersetuju menawarkan kepada tuan/puan . Sekiranya tuan/puan bersetuju menerima tawaran dan syarat-syarat pelantikan, tuan/puan diminta untuk memenuhi borang-borang yang dilampirkan dan mengembalikannya semula semasa melapor diri.<br/><br/>1. <a href="{{ route('perlantikan.admin.senaraiSurat') }}">Surat Tawaran dan Syarat-syarat pelantikan perkhidmatan.</a><br/><br/>Sila klik link di bawah untuk jawab setuju terima. Jika sekiranya Universiti ini tidak menerima jawapan dari tuan/puan dalam tempoh empat belas (14) hari dari tarikh surat ini, maka tawaran ini dianggap terbatal dengan sendirinya.<br/><br/>1. <a href="{{ route('perlantikan.admin.kadJawapan') }}">Pengesahan setuju terima</a><br/>2. <a href=''>Surat Kelulusan Visa (VAL)</a><br/><br/>Gaji yang ditawarkan kepada tuan/puan adalah muktamad setelah melapor diri dan tertakluk kepada Akta Cukai Pendapatan 1967. Sebarang rayuan berkaitan penetapan gaji permulaan hendaklah dikemukakan sebelum melapor diri.<br/>1. <a href=''>Gaji dan imbuhan dibayar menggunakan peruntukan U.J020000.0100.00000 B11000</a><br/><br/>Sebarang pertanyaan berkaitan tawaran ini, mohon ajukan melalui emel kepada  _____ atau melalui telefon  _____.<br/><br/>Bagi pihak Universiti, tahniah diucapkan dan selamat maju jaya dari kami warga kampus.<br/><br/>Berkhidmat Untuk Negara.<br/><br/></span>
                        </td>
                    </tr>
                </table>
&nbsp;

            </div>
        </div>
        </div>
    </div>
    <br>


@endsection

{{-- Scripts Section --}}
@section('scripts')



    <script>
        function papar() {
            var x = document.getElementById("myDiv");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

@endsection