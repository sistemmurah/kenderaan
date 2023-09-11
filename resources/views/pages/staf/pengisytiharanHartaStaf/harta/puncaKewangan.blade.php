{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha Binti Wahi Anuar, Nurul Fadhilah Binti Mirzeman -->

<!--Mula: Punca-punca Kewangan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom" id="maklumatKenderaan">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-coins"></i>
                        Punca-punca Kewangan Bagi Memiliki Harta
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Kategori Punca<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="kategoriPunca">
                                <option value="1">Sila Pilih</option>
                                <option value="2">CUKAI PENDAPATAN</option>
                                <option value="3">PINJAMAN KENDERAAN</option>
                                <option value="4">PINJAMAN KOPERASI</option>
                                <option value="5">PINJAMAN PENGAJIAN</option>
                                <option value="6">PINJAMAN PERIBADI</option>
                                <option value="7">PINJAMAN PERUMAHAN</option>
                                <option value="8">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="lainPunca">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Punca Kewangan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Maklumat Punca Kewangan<span class="text-danger">*</span></label>
                            <input id="maklumatPuncaKewangan" type="text" class="form-control"
                                placeholder="Maklumat Punca Kewangan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Status Pembayaran<span class="text-danger">*</span></label>
                            <select class="form-control" id="statusPembayaran">
                                <option value="1">Sila Pilih</option>
                                <option value="2">BELUM SELESAI DIBAYAR</option>
                                <option value="3">DIBAYAR MELALUI POTONGAN GAJI</option>
                                <option value="4">TELAH SELESAI DIBAYAR</option>
                                <option value="5">DIBAYAR OLEH ORANG LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="bayaranOleh">
                        <div class="form-group">
                            <label>Sila Nyatakan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Bayaran Oleh" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tamat: Punca-punca Kewangan -->

<!-- Mula: Butang Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.harta.tambahHarta') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button
                    onclick="window.location = '{{ route('pengisytiharanHartaStaf.harta.tambahHarta') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- script hide & show lain-lain section -->
<script>
    $('#lainPunca').hide();
    $('#bayaranOleh').hide();

    $('#kategoriPunca').change(function () {
        if ($(this).val() == 8) {
            $('#lainPunca').show();
        } else {
            $('#lainPunca').hide();
        }
    });

    $('#statusPembayaran').change(function () {
        if ($(this).val() == 5) {
            $('#bayaranOleh').show();
        } else {
            $('#bayaranOleh').hide();
        }
    });
</script>

@endsection