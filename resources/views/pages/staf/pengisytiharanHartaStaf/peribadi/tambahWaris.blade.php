{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Maklumat Waris -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-users"></i>
                        Maklumat Waris
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input id="namaWaris" type="text" class="form-control" placeholder="Nama Waris" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Hubungan<span class="text-danger">*</span></label>
                            <select class="form-control" id="hubunganWaris">
                                <option>Sila Pilih</option>
                                <option>SUAMI</option>
                                <option>ISTERI</option>
                                <option>IBU</option>
                                <option>BAPA</option>
                                <option>ANAK</option>
                                <option>LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Telefon Bimbit<span class="text-danger">*</span></label>
                            <input id="noPhoneWaris" type="text" class="form-control"
                                placeholder="Nombor Telefon Bimbit" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Telefon Rumah</label>
                            <input id="noRumahWaris" type="text" class="form-control"
                                placeholder="Nombor Telefon Rumah" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input id="alamatPasangan1" type="text" class="form-control" placeholder="Alamat " />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatPasangan2" type="text" class="form-control" placeholder="Alamat " />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodPasangan" type="text" class="form-control" placeholder="Poskod" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarPasangan" type="text" class="form-control" placeholder="Bandar" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negeri<span class="text-danger">*</span></label>
                            <select class="form-control" id="negeriPasangan">
                                <option>Sila Pilih</option>
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
                            <select class="form-control" id="negaraSyarikat">
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
<!-- Tamat: Maklumat Waris -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.peribadi.senaraiPeribadi') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.peribadi.senaraiPeribadi') }}'"
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