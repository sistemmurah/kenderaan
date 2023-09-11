{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--begin::Subheader-->
    @include('shared._breadcrumb')


    <!-- Mula: Senarai Permohonan Perbelanjaan Rawatan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Senarai Permohonan Perbelanjaan Rawatan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = '{{route('staf.PerubatanKlinikPanel.TambahPermohonanPerbelanjaanRawatan')}}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Senarai Permohonan Perbelanjaan Rawatan">
                    <i class="fas fa-plus-circle"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
                <thead style="background-color:#fcf4a3">
                <tr>
                </tr>

                <tr>
                    <th><div style="text-align: center;">Bil.</th>
                    <th><div style="text-align: center;">Nama Pesakit</th>
                    <th><div style="text-align: center;">No. Kad Pengenalan</th>
                    <th><div style="text-align: center;">Nama Klinik/Hospital</th>
                    <th><div style="text-align: center;">Jenis Rawatan</th>
                    <th><div style="text-align: center;">Jumlah Tuntutan (RM)</th>
                    <th><div style="text-align: center;">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div style="text-align: center;">1</td>
                    <td><div style="text-align: center;">Siti Aisyah Binti Hassan</td>
                    <td><div style="text-align: center;">811021-01-5678</td>
                    <td><div style="text-align: center;">KPJ Specialist Hospital</td>
                    <td><div style="text-align: center;">Pemeriksaan Kesihatan</td>
                    <td><div style="text-align: center;">57.00</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
                <tr>
                    <td><div style="text-align: center;">2</td>
                    <td><div style="text-align: center;">Aminah Binti Hassan</td>
                    <td><div style="text-align: center;">181021-01-5678</td>
                    <td><div style="text-align: center;">KPJ Specialist Hospital</td>
                    <td><div style="text-align: center;">Pemeriksaan Kesihatan</td>
                    <td><div style="text-align: center;">77.00</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location =''"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>

                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Senarai Permohonan Perbelanjaan Rawatan -->


    </div>
    </div>


    </div>
    </div>


@endsection



{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection


