{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    @if(isset ($errors) && count($errors) > 0)
        <div class="alert alert-danger alert-notification">
            <ul class="list-unstyled mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!--Mula: Kemaskini Menu -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="{{ $edit ? 'fas fa-edit' : 'fas fa-plus-circle'}} "></i>
                            {{ $edit ? 'Kemaskini' : 'Tambah'}} Menu
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    @if($edit)
                        <form action="{{ route('menu.update', $akses->akses_pk) }}" method="post">
                            @else
                                <form action="{{ route('menu.store') }}" method="post">
                                    @endif

                                    {{ csrf_field() }}

                                    <div class="row">

                                        <!-- ruang kosong ditepi kiri -->
                                        <div class="col-lg-1">
                                        </div>

                                        <!-- Mula: Content Borang Daftar Menu -->
                                        <div class="col-lg-10">

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Akses Nama<span
                                                            class="text-danger">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" name="akses_nama"
                                                           placeholder="Sila masukkan nama menu yang baru"
                                                           id="aksesnama"
                                                           value="{{ $edit ? $akses->akses_nama : old('aksesnama') }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Akses Kod<span
                                                            class="text-danger">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" name="akses_kod"
                                                           placeholder="Akses Kod. Contoh: SLG09S063"
                                                           id="akseskod"
                                                           value="{{ $edit ? $akses->akses_kod : old('akseskod') }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Akses Kod Induk
                                                    <i class="fas fa-info-circle" style="color:blue" data-toggle="tooltip" data-placement="top" title="Sila Rujuk Akses Kod Induk di Senarai Menu"></i></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" name="akses_kod_induk"
                                                           placeholder="Akses Kod Induk"
                                                           id="akseskodinduk"
                                                           value="{{ $edit ? $akses->akses_kod_induk : old('akseskodinduk') }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Susun<span
                                                            class="text-danger">*</span></label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" name="susun"
                                                           placeholder="Susun"
                                                           id="susun"
                                                           value="{{ $edit ? $akses->susun : old('susun') }}"/>
                                                </div>
                                            </div>

                                            <input type="hidden" name="pencipta_fk" id="pencipta_fk" value="1"/>

                                            <input type="hidden" name="aktif" id="aktif" value="1"/>
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
    <!-- Tamat: Kemaskini Menu -->

    <!-- Mula: Butang Simpan/Kembali -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card ">
                <div class="card-body text-center">
                    <button type="submit"
                            class="btn btn-primary font-weight-bold"> {{ $edit ? 'Kemaskini' : 'Simpan' }}
                    </button>

                    <a href="{{ route('menu.senaraiMenu') }}" class="btn btn-danger font-weight-bold">Kembali</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Tamat: Butang Simpan/Kembali -->

    </form>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection