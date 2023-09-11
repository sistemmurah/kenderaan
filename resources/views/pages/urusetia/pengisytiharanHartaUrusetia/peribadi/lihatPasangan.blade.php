{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Maklumat Pasangan-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklumat Pasangan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input id="namaPasangan" type="text" class="form-control" value="JAILANI BIN ABDULLAH"
                                disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Kad Pengenalan<span class="text-danger">*</span></label>
                            <input id="noKPpasangan" type="text" class="form-control" value="690125015363"
                                disabled="disabled" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Umur<span class="text-danger">*</span></label>
                            <input id="umurPasangan" type="text" class="form-control" value="52 Tahun"
                                disabled="disabled" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Hubungan<span class="text-danger">*</span></label>
                            <select class="form-control" id="hubunganPasangan" disabled="disabled">
                                <option>SUAMI</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status Perkahwinan<span class="text-danger">*</span></label>
                            <select class="form-control" id="statusPerkahwinan" disabled="disabled">
                                <option>BERKAHWIN</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Pasangan -->

<!-- Mula: Maklumat Pekerjaan-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user-friends"></i>
                        Maklumat Pekerjaan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Syarikat<span class="text-danger">*</span></label>
                            <input id="namaSyarikat" type="text" class="form-control"
                                value="BERJAYA SDN.BHD." disabled="disabled"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan<span class="text-danger">*</span></label>
                            <input id="jawatanPasangan" type="text" class="form-control"
                                value="PENGURUS" disabled="disabled" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat Syarikat<span class="text-danger">*</span></label>
                            <input id="alamatSyarikat1" type="text" class="form-control"
                                value="NO.25 JALAN KEMBOJA" disabled="disabled"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatSyarikat2" type="text" class="form-control" value="" disabled="disabled"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodSyarikat" type="text" class="form-control" value="83100"  disabled="disabled"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarSyarikat" type="text" class="form-control" value="JOHOR BHARU" disabled="disabled" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negeri<span class="text-danger">*</span></label>
                            <select class="form-control" id="negeriSyarikat" disabled="disabled">
                                <option>JOHOR</option>
                                <option>KEDAH</option>
                                <option>KELANTAN</option>
                                <option>KUALA LUMPUR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                                <option>SELANGOR</option>
                                <option>TERENGGANU</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Negara<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="negaraSyarikat" disabled="disabled">
                                <option>MALAYSIA</option>
                                <option>SINGAPURA</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Pasangan -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaUrusetia.peribadi.maklumatPeribadi') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection