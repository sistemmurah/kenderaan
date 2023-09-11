{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--Mula: Daftar Menu -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-link"></i>
                            Daftar Menu
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <!-- ruang kosong ditepi kiri -->
                        <div class="col-lg-1">
                        </div>

                        <!-- Mula: Content Borang Daftar Menu -->
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Akses Kod<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" placeholder="Akses Kod" id="akseskod" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Akses Nama<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" placeholder="Akses Nama" id="aksesnama" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Akses Kod Induk<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" placeholder="Akses Kod Induk" id="akseskodinduk" />
                                </div>
                            </div>
                        </div>
                        <!-- Tamat: Content Borang Daftar Menu  -->

                        <!-- ruang kosong ditepi kanan -->
                        <div class="col-lg-1">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Tamat: Daftar Menu -->

    <!-- Mula: Butang Simpan/Kembali -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card ">
                <div class="card-body text-center">
                    <button onclick="window.location = '{{ route('menu.senaraiMenu') }}'"
                            class="btn btn-primary font-weight-bold"> Simpan
                    </button>
                    <button onclick="window.location = '{{ route('menu.senaraiMenu') }}'"
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