{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <!--end::Subheader-->

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="fas fa-car"></i> Permohonan Baru (Kenderaan)</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
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
                    <!--begin: row kiri sherry-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Keterangan</b></label>
                            <input type="email" class="form-control" placeholder="Saya ingin membuat pinjaman" required="required" />
                        </div>
                        <div class="form-group">
                            <label><b>Peminjam</b></label>
                            <input type="email" class="form-control" value="Wajimin Bin Sugiran" required="required" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label><b>Jenis Pinjaman</b></label>
                            <select class="form-control" id="exampleSelect1">
                                <option>Sila Pilih</option>
                                <option>Kereta Baru</option>
                                <option>Kereta Terpakai</option>
                                <option>Motosikal</option>
                                <option>Basikal</option>
                            </select>
                        </div>

                        <!--</form>-->
                        <!--end::Form-->
                    </div>
                    <!--end: row kiri-->
                    <!--begin: row kanan-->
                    <div class="col-lg-6">
                        {{-- <h5><u>Maklumat Perkhidmatan</u></h5>--}}
                        {{-- <p></p>--}}
                        <div class="form-group">
                            <label><b>Tempoh (Bulan)</b></label>
                            <select class="form-control" id="exampleSelect1">
                                <option>Sila Pilih</option>
                                <option>12</option>
                                <option>24</option>
                                <option>36</option>
                                <option>48</option>
                                <option>60</option>
                                <option>72</option>
                                <option>84</option>
                                <option>96</option>
                                <option>108</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Harga Jualan</b></label>
                            <input type="text" class="form-control" placeholder="RM0.00" required="required" />
                        </div>
                        <div class="form-group">
                            <label><b>Jumlah Pinjaman</b></label>
                            <input type="text" class="form-control" placeholder="RM0.00" required="required" />
                        </div>
                    </div>
                    <!--end: row kanan-->
                </div>
            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br />
    <!-- Mula: Butang Hantar/Batal -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b card ">
                <div class="card-body text-center">
                    {{--{{ route('sysmelStaf.senaraiSysmel') }}--}}
                    <button onclick="window.location = '{{ route('staf.maklumatPeribadi.pinjaman') }}'"
                            class="btn btn-outline-primary font-weight-bold"> Simpan
                    </button>
                    <button onclick="window.location = '{{ route('staf.maklumatPeribadi.pinjaman') }}'"
                            class="btn btn-primary font-weight-bold"> Hantar
                    </button>
                    <button onclick="window.location = '{{ route('staf.maklumatPeribadi.pinjaman') }}'"
                            class="btn btn-danger font-weight-bold"> Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tamat: Butang Hantar/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->

    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection