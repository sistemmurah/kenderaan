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


    <!-- Mula: Senarai Tanggungan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Senarai Tanggungan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = ''"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Senarai Tanggungan">
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
                    <th><div style="text-align: center;">Nama Anak</th>
                    <th><div style="text-align: center;">No. Kad Pengenalan</th>
                    <th><div style="text-align: center;">Jantina</th>
                    <th><div style="text-align: center;">Tarikh Lahir</th>
                    <th><div style="text-align: center;">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div style="text-align: center;">1</td>
                    <td><div style="text-align: left;">SITI BINTI ABDULLAH</td>
                    <td><div style="text-align: center;">151223-01-4030</td>
                    <td><div style="text-align: center;">PEREMPUAN</td>
                    <td><div style="text-align: center;">23/12/2015</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location ='{{route('staf.PerubatanKlinikPanel.KemaskiniTanggungan')}}'"
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
                    <td><div style="text-align: left;">RUZILA ANA BINTI ABDULLAH</td>
                    <td><div style="text-align: center;">901201-05-4563</td>
                    <td><div style="text-align: center;">PEREMPUAN</td>
                    <td><div style="text-align: center;">1/12/1990</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location ='{{route('staf.PerubatanKlinikPanel.KemaskiniTanggungan')}}'"
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
                    <td><div style="text-align: left;">AHMAD KARIM BIN ABDULLAH</td>
                    <td><div style="text-align: center;">130505-04-4500</td>
                    <td><div style="text-align: center;">LELAKI</td>
                    <td><div style="text-align: center;">5/05/2013</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location ='{{route('staf.PerubatanKlinikPanel.KemaskiniTanggungan')}}'"
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
    <!-- Tamat: Senarai Tanggungan -->


        </div>
    </div>


        </div>
    </div>


@endsection



{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection
