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


    <!-- Mula: Senarai Rawatan Klinik Bukan Panel -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Senarai Rawatan Klinik Bukan Panel
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = '{{route('staf.PerubatanKlinikPanel.TambahTuntutanRawatanKlinikBukanPanel')}}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Senarai Rawatan Klinik Bukan Panel">
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
                    <th><div style="text-align: center;">No. Rujukan</th>
                    <th><div style="text-align: center;">Jumlah Tuntutan (RM)</th>
                    <th><div style="text-align: center;">Tarikh Permohonan</th>
                    <th><div style="text-align: center;">Status</th>
                    <th><div style="text-align: center;">Klinik Bukan Panel/Hospital</th>
                    <th><div style="text-align: center;">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div style="text-align: center;">1</td>
                    <td><div style="text-align: center;">8800/001</td>
                    <td><div style="text-align: center;">200.00</td>
                    <td><div style="text-align: center;">5/09/2020</td>
                    <td><div style="text-align: center;">LULUS</td>
                    <td><div style="text-align: center;">KPJ Specialist Hospital</td>
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
                    <td><div style="text-align: center;">8800/062</td>
                    <td><div style="text-align: center;">500.00</td>
                    <td><div style="text-align: center;">5/12/2020</td>
                    <td><div style="text-align: center;">LULUS</td>
                    <td><div style="text-align: center;">KPJ Specialist Hospital</td>
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
                <tr>
                    <td><div style="text-align: center;">3</td>
                    <td><div style="text-align: center;">8800/107</td>
                    <td><div style="text-align: center;">300.00</td>
                    <td><div style="text-align: center;">5/1/2021</td>
                    <td><div style="text-align: center;">LULUS</td>
                    <td><div style="text-align: center;">KPJ Specialist Hospital</td>
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
    <!-- Tamat: Tuntutan Rawatan Klinik Bukan Panel -->


    </div>
    </div>


    </div>
    </div>


@endsection



{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection

