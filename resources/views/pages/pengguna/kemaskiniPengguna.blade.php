{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--Mula: Kemaskini Pengguna -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Kemaskini Peranan Pengguna
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">

                    <!-- ruang kosong ditepi kiri -->
                    <div class="col-lg-1">
                    </div>

                    <!-- Mula: Content Borang Kemaskini Pengguna -->
                    <div class="col-lg-10">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">ID Pengguna</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="idpengguna" disabled="disabled"
                                    value="shidah" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nama<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="namapengguna" disabled="disabled"
                                    value="Siti Rashidah" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Emel</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" id="emelpengguna" disabled="disabled"
                                    value="srashidah@utm.my" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">No Telefon</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="tel" id="telpengguna" disabled="disabled"
                                    value="0197525150" />
                            </div>
                        </div>

                        <!-- Mula: Checkbox Peranan Pengguna -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Tahap Akses</label>
                            <div class="col-lg-9 col-form-label">
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" name="staf" />
                                        <span></span>
                                        Staf
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="urusetia" />
                                        <span></span>
                                        Urusetia
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="psm" />
                                        <span></span>
                                        PSM
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="kerani" />
                                        <span></span>
                                        Kerani
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="pegawai" />
                                        <span></span>
                                        Pegawai
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Tamat: Checkbox Peranan Pengguna -->

                    </div>
                    <!-- Tamat: Content Borang Kemaskini Pengguna -->

                    <!-- ruang kosong ditepi kanan -->
                    <div class="col-lg-1">
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Kemaskini Pengguna -->

<!-- Mula: Butang Kemaskini/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('pengguna.senaraiPengguna') }}'"
                    class="btn btn-primary font-weight-bold"> Kemaskini
                </button>
                <button onclick="window.location = '{{ route('pengguna.senaraiPengguna') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Kemaskini/Batal -->


@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection