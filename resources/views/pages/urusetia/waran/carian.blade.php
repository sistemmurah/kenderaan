{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    @if(Session::get('success',false))
        <div class="alert alert-success alert-notification">
            <i class="fa fa-check"></i>
            {{ Session::get('success') }}
        </div>
    @endif

    <!--begin: Senarai Waran-->
    <div class="card card-custom gutter-b" >
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                        Senarai Waran
                    </a>
                </h3>
            </div>

            <div class="card-toolbar">
                {{--{{ route('peranan.tambahPeranan') }}--}}
                <button onclick="window.location = '{{ route('urusetia.waran.addeditWaran') }}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Menu">
                    <i class="fas fa-plus-circle"></i> Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-lg-12">
                    <!--begin: Table -->
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored">
                        <tr>
                            <th width="5%" style="text-align:center;">Bil</th>
                            <th width="22%" style="text-align:center;">Kod Waran</th>
                            <th width="7%" style="text-align:center;">Skim JPA</th>
                            <th width="15%" style="text-align:center;">Skim</th>
                            <th width="7%" style="text-align:center;">Singkatan Jawatan</th>
                            <th width="8%" style="text-align:center;">Gred Jawatan</th>
                            <th width="8%" style="text-align:center;">OD Kod</th>
                            <th width="7%" style="text-align:center;">Tahun</th>
                            <th width="150" style="text-align:center;">Tindakan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listWaran as $index => $row)
                            <tr>
                                <td style="text-align:center;">
                                    {{ $index +1 }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->kod_waran }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->kod_skimjpa()->first()->kod_skim }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->kod_klasifikasi()->first()->deskripsi }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->sgktn_jwtn }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->gred_jwtn }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->smu_parameter()->first()->nama_parameter }}
                                </td>
                                <td style="text-align:center;">
                                    {{ $row->tahun}}
                                </td>
                                <td style="text-align:center;">
                                    <a href="{{ route('urusetia.waran.addeditWaran') }}">
                                        <button type="button" class="btn btn-sm btn-icon btn-light-primary">
                                            <i class="far fa-edit" data-toggle="tooltip"
                                               data-placement="top"
                                               title="Kemaskini">
                                            </i>
                                        </button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-icon btn-light-danger">
                                            <i class="fas fa-trash-alt" data-toggle="tooltip"
                                               data-placement="top"
                                               title="Hapus">
                                            </i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--end: Table -->
                </div>
            </div>
        </div>

    </div>


@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <script src="{{ asset('js/pages/Scripts/Waran/Waran.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Waran/OnChange.js') }}"></script>
@endsection