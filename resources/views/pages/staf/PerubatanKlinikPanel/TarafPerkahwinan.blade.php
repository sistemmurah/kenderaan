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


    <!-- Mula: Taraf Perkahwinan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Taraf Perkahwinan
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.location = '{{route('staf.PerubatanKlinikPanel.TambahTarafPerkahwinan')}}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip"
                        title="Taraf Perkahwinan">
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
                    <th><div style="text-align: center;">Nama Pasangan</th>
                    <th><div style="text-align: center;">No. Kad Pengenalan</th>
                    <th><div style="text-align: center;">Status</th>
                    <th><div style="text-align: center;">Perkerjaan</th>
                    <th><div style="text-align: center;">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div style="text-align: center;">1</td>
                    <td><div style="text-align: center;">Faridah Binti Hassan</td>
                    <td><div style="text-align: center;">861021-01-5678</td>
                    <td><div style="text-align: center;">BERKAHWIN</td>
                    <td><div style="text-align: center;">GURU</td>
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
    <!-- Tamat: Taraf Perkahwinan -->


    </div>
    </div>


    </div>
    </div>


@endsection



{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection


