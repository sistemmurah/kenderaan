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


    <!-- Mula: Pertukaran Klinik Panel -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon2-group"></i>
                    Pertukaran Klinik Panel
                </h3>
            </div>
            <div class="card-toolbar">

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
                    <th><div style="text-align: center;">Nama Klinik</th>
                    <th><div style="text-align: center;">Kod Klinik</th>
                    <th><div style="text-align: center;">Cawangan</th>
                    <th><div style="text-align: center;">Tarikh Mula</th>
                    <th><div style="text-align: center;">Tarikh Tamat</th>
                    <th><div style="text-align: center;">Tarikh Lulus</th>
                    <th><div style="text-align: center;">Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div style="text-align: center;">1</td>
                    <td><div style="text-align: center;">KLINIK PENAWAR</td>
                    <td><div style="text-align: center;">151223/003</td>
                    <td><div style="text-align: center;">JOHOR BAHRU</td>
                    <td><div style="text-align: center;">23/12/2015</td>
                    <td><div style="text-align: center;">20/12/2020</td>
                    <td><div style="text-align: center;">13/12/2015</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location ='{{route('staf.PerubatanKlinikPanel.TukarKlinikPanel')}}'"
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
                    <td><div style="text-align: center;">KLINIK KELUARGA</td>
                    <td><div style="text-align: center;">901201/100</td>
                    <td><div style="text-align: center;">SKUDAI</td>
                    <td><div style="text-align: center;">1/12/2010</td>
                    <td><div style="text-align: center;">12/12/2020</td>
                    <td><div style="text-align: center;">13/11/2009</td>
                    <td class="text-right p-0">
                        <div style="text-align: center;">
                        <button onclick="window.location ='{{route('staf.PerubatanKlinikPanel.TukarKlinikPanel')}}'"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                </tr>
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

