{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
    <div class="d-flex flex-column-fluid">
        <div class="container">

            <!-- Senarai Permohonan Baru -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Penerima Elaun Lembaga Pengarah Universiti</h3>
                    </div>

                    <div class="card-toolbar">
                        <button onclick="window.location = '{{ route('pengguna.create') }}'"
                            class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Penerima">
                            <i class="fas fa-plus-circle"></i> Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored">
                            <tr>
                                <th width="5%" style="text-align:center;">Bil</th>
                                <th width="10%" style="text-align:center;">Fakulti/Jabatan</th>
                                <th width="15%" style="text-align:center;">Nama</th>
                                <th width="10%" style="text-align:center;">No Kad Pengenalan</th>
                                <th width="10%" style="text-align:center;">Gred Jawatan</th>
                                <th width="10%" style="text-align:center;">Status</th>
                                <th width="10%" style="text-align:center;">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>FAB</td>
                                <td>WAN SAIFUL NIZAM BIN WAN MOHAMAD</td>
                                <td>880912018776</td>
                                <td>FA44</td>
                                <td>DILULUSKAN</td>
                                <td class="text-right p-0">
                                <button onclick="window.location ='{{ route('sysmelStaf.tambahSysmel') }}'"
                                type="button" class="btn btn-sm btn-icon btn-light-primary">
                                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                                <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                                 </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/Lantikan/elaunLPU_table.js') }}"></script>
    
@endsection