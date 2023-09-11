{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Maklumat Pelaporan -->
<div class="card card-custom gutter-b card card-custom">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-id-card"></i>
                Maklumat Kes Tatatertib
            </h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
            data-toggle="tooltip" data-placement="top" title="Toggle Card">
            <i class="ki ki-arrow-down icon-nm"></i>
        </a>
    </div>
</div>

<div class="card-body">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Kes Tatatertib</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="Tatakelakuan" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tarikh Kejadian</label>
                <input id="noKP" type="tel" class="form-control" disabled="disabled"
                value="22/02/2020" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Jenis Pelanggaran Tatatertib</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="Tidak jujur/Tidak bertanggungjawab" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Pelanggaran Tatatertib</label>
                <input id="noKP" type="tel" class="form-control" disabled="disabled"
                value="1(h)/1(j)" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Catatan</label>
                <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                value="Si pelaku didapati bersalah dan positif kacak!" />
            </div>
        </div>
    </div>

</div>
</div>
<!-- Tamat: Maklumat Pelaporan -->

<!-- Mula: Butang Preview/Simpan/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('staf.tatatertib.Tatatertib') }}'"
                    class="btn btn-primary font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Mula: Butang Preview/Simpan/Batal -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection