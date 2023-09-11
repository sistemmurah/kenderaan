{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--Mula: Tambah Jawatan JPA -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <i class="fas fa-plus-circle"></i>
                            Tambah Perjawatan JPA
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
                            <div id="bahagian1">
                                <div class="d-flex p-2 mb-5 bg-secondary tajukBahagianI"><strong>MAKLUMAT
                                        JAWATAN</strong></div>
                                <!--mula bahagian 1 : Info Ruang-->
                                <div class="my-5">
                                    <div class="form-group row">
                                        <!--mula : pilihan Nama Jawatan-->
                                        <label class="col-md-2 col-sm-12 col-form-label">Jawatan<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-md-10 col-sm-12">
                                            <select class="form-control" name="pilihJawatan" id="pilihJawatan">
                                                <option value="">Pilih Nama Jawatan</option>
                                                <option value="1">
                                                    PEGAWAI TADBIR
                                                </option>
                                            </select>
                                        </div>
                                        <!--tamat : pilihan Nama Jawatan-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : Gred Jawatan-->
                                        <label class="col-md-2 col-sm-12">Gred<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-md-10 col-sm-12">
                                            <!-- <input class="form-control" type="text" placeholder="40" /> -->
                                            <select class="form-control" name="pilihGred" id="pilihGred">
                                                <option value="">Pilih Gred Jawatan</option>
                                                <option value="1">
                                                    N54
                                                </option>
                                            </select>
                                        </div>
                                        <!--tamat : Gred Jawatan-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : Kod Skim Gaji-->
                                        <label class="col-md-2 col-sm-12">Kod Skim Gaji<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-md-10 col-sm-12">
                                            <!-- <input class="form-control" type="text" placeholder="40" /> -->
                                            <select class="form-control" name="pilihKodSkimGaji" id="pilihKodSkimGaji">
                                                <option value="">Pilih Kod Skim Gaji</option>
                                                <option value="1">
                                                    N54
                                                </option>
                                            </select>
                                        </div>
                                        <!--tamat : Kod Skim Gaji-->
                                    </div>

                                    <div class="form-group row">
                                        <!-- mula: Kod Skim -->
                                        <label class="col-md-2 col-sm-12">Kod Skim<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-md-10 col-sm-12">
                                            <select class="form-control" name="KOD_SKIM" id="kodSkim">
                                                <option value="">Pilih Kod Skim</option>
                                                <option value="1">
                                                    3PN06
                                                </option>
                                            </select>
                                        </div>
                                        <!-- tamat: Kod SKim -->
                                    </div>

                                    <div class="form-group row">
                                        <!-- mula: OD Kod -->
                                        <label class="col-md-2 col-sm-12">OD Kod<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-md-10 col-sm-12" style="text-align: left">
                                            <select class="form-control" name="OD_KOD" id="odKod">
                                                <option value="">Pilih OD Kod</option>
                                                <option value="1">
                                                    TBK1
                                                </option>
                                            </select>
                                        </div>
                                        <!-- tamat: OD Kod -->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : Jumlah Jawatan-->
                                        <label class="col-md-2 col-sm-12">Jumlah</label>
                                        <div class="col-md-4 col-sm-12">
                                            <!-- <input class="form-control" type="text" placeholder="40" /> -->
                                            <input class="form-control" type="text" placeholder="40"
                                                   name="JUMLAH JAWATAN"
                                                   value=""/>
                                        </div>
                                        <!--tamat : Jumlah Jawatan-->
                                    </div>

                                    <div class="form-group row">
                                        <!--mula : Butir-Butir Perubahan-->
                                        <label class="col-md-2 col-sm-12">Butir-Butir Perubahan</label>
                                        <div class="col-md-10 col-sm-12">
                                            <input class="form-control" type="text"
                                                   placeholder="BUTIRAN PERUBAHAN JAWATAN"
                                                   name="BUTIR_PERUBAHAN" value=""/>
                                        </div>
                                    </div>
                                    <!--tamat : Butir-Butir Perubahan-->

                                    <!--mula : Catatan Tambahan-->
                                    <div class="form-group row hide_input1">
                                        <label class="col-md-2 col-sm-12">Catatan</label>
                                        <div class="col-md-10 col-sm-12">
                                            <input class="form-control" type="text" placeholder="TAMBAHAN MAKLUMAT"
                                                   name="CATATAN" value=""/>
                                        </div>
                                    </div>
                                    <!--tamat : Catatan Tambahan--->

                                </div>
                                <!--tamat bahagian 1 : Info Ruang-->
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
    <!--Tamat: Tambah Jawatan JPA -->

    <!-- Mula: Butang Simpan/Kembali -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card ">
                <div class="card-body text-center">
                    <button type="submit" onclick="window.location = '{{ route('urusetia.waran.addeditWaranJpa') }}'"
                            class="btn btn-primary font-weight-bold"> Simpan
                    </button>

                    <a href="{{ route('urusetia.waran.addeditWaranJpa') }}" class="btn btn-danger font-weight-bold">Kembali</a>

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
