{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by : Siti Nurul Aqilah binti Ahmad -->

<!-- Mula: Maklumat Anak/Tanggungan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-users"></i>
                        Maklumat Anak / Tanggungan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input id="namaTanggungan" type="text" class="form-control"
                                value="MUHAMMAD ZULHILMI BIN JAILANI" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Umur<span class="text-danger">*</span></label>
                            <input id="umurTanggungan" type="text" class="form-control"
                                value="22 TAHUN" disabled="disabled"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Hubungan<span class="text-danger">*</span></label>
                            <select class="form-control" id="hubunganAnak" disabled="disabled">
                                <option>ANAK KANDUNG</option>
                                <option>ANAK ANGKAT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status Persekolahan<span class="text-danger">*</span></label>
                            <select class="form-control" id="statusSekolahTanggungan" disabled="disabled">
                                <option>YA</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Maklumat Anak/Tanggungan -->

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