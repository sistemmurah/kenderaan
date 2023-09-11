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
                    <img src="{{ asset('media/logos/LOGO-UTM.png') }}" class="max-h-75px" alt="" /><br><br>
                    <h2>Surat Tawaran untuk perlantikan staf di Universiti Teknologi Malaysia</h2><br>

                </div>

                <div class="form-group row">
                    <table class="table table-striped" style="border: solid 1px silver; width: 100%" align="center">
                        <tbody>
                        <tr>
                            <td width="20%">    <b>Nama</b> </td>
                            <td style="width: 15px"> <b>:</b>
                            </td>
                            <td width="80%">ZUL HILMI
                                <span id="lblFullName"></span>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <b>MyKad / Passport</b>
                        </td>
                        <td style="width: 15px">
                            <b>:</b>
                        </td>
                        <td>ZUL HILMI
                            <span id="lblFullName"></span>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <b>No. Siri Jawatan</b>
                            </td>
                            <td style="width: 15px">
                                <b>:</b>
                            </td>
                            <td width="100%">F29
                                <span id="lblFullName"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Jawatan</b>
                            </td>
                            <td style="width: 15px">
                                <b>:</b>
                            </td>
                            <td width="100%">PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT
                                <span id="lblFullName"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Sesi</b>
                            </td>
                            <td style="width: 15px">
                                <b>:</b>
                            </td>
                            <td width="100%">2021/01
                                <span id="lblFullName"></span>
                            </td>
                        </tr>
                    </table>



                    <table class="table table-striped" style="border: solid 1px silver; width: 100%" align="center">
                        <tbody>
                        <tr>
                            <td>
                                Senarai Semak Dokumen Melapor Diri Staf Baharu (Tetap)
                            </td>
                            <td>View / Download
                            </td>
                        </tr>
                        <tr>
                            <td width="80%">
                                Surat Penerimaan Jawatan
                            </td>
                            <td width="20%">View / Download
                            </td>
                        </tr>
                        <tr>
                            <td width="80%">
                                Surat Akta Rahsia Rasmi 1972
                            </td>
                            <td width="20%">View / Download
                            </td>
                        </tr>
                        <tr>
                            <td width="80%">
                                Akuan Sumpah
                            </td>

                            <td width="20%">View / Download
                            </td>
                        </tr>
                        <tr>
                            <td width="80%">
                                Borang Permohonan Pemeriksaan Perubatan
                            </td>

                            <td width="20%">View / Download
                            </td>
                        </tr>
                        <tr>
                            <td width="80%">
                                Borang Mengkreditkan Gaji Bulanan
                            </td>

                            <td width="20%">View / Download
                            </td>
                        </tr>
                        </tbody>
                    </table>

<br>
                    <br>
                    <div class="col-lg-12 text-center">
                        <hr>
                            <td align="center"><span style="color:red">Penting! Sila muatnaik dan isi semua borang di atas sebelum datang untuk melapor diri.</span></td>
                    </div>
                    <div class="col-lg-12 text-right">
<br>
                        <a href="{{ route('perlantikan.admin.emailSuratTawaran') }}"><button class="btn btn-primary font-weight-bold">Kembali</button></a>
                    </div>
                </div>


            </div>

        </div>
        </div>
    </div>
    <br>


@endsection

{{-- Scripts Section --}}
@section('scripts')




@endsection