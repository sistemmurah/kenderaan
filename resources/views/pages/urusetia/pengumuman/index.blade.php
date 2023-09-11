{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--begin: Senarai-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                        Senarai Pengumuman
                    </a>
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
                <div class="col-lg-12" style="text-align:right;">
                    <button onclick="window.location = '{{ route('urusetia.pengumuman.create') }}'"
                            class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Pengumuman">
                        <i class="fas fa-plus-circle"></i> Tambah
                    </button>
                    <br><br>
                </div>
                <div class="col-lg-12">
                    <!--begin: Table -->
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored">
                        <tr>
                            <th style="text-align:center;">No.</th>
                            <th style="text-align:center;">PTJ</th>
                            <th style="text-align:center;">Tarikh Mohon</th>
                            <th>Tajuk Notis</th>
                            <th>Deskripsi Notis</th>
                            <th style="text-align:center;">Tarikh Mula</th>
                            <th style="text-align:center;">Tarikh Tamat</th>
                            <th style="text-align:center;">Tindakan</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($listPengumuman as $index => $row)
                            <tr>
                                <td>{{ $index +1 }}</td>
                                <td>{{ $row->notis_fak_fk }}</td>
                                <td>{{ date('d M Y', strtotime($row->notis_tkh_mohon))  }}</td>
                                <td>{{ $row->notis_tajuk }}</td>
                                <td>{{ $row->notis_deskripsi }}</td>
                                <td>{{ date('d M Y', strtotime($row->notis_tkh_mula))  }}</td>
                                <td>{{ date('d M Y', strtotime($row->notis_tkh_tamat))  }}</td>
                                <td style="text-align:center;">
                                    <table border="1" style="border:1px; width:100%; padding:0px;">
                                        <tr>
                                            <td style="border:none; padding:0px;">
                                                <a href="{{ route('urusetia.pengumuman.add-edit', $row->notis_pk) }}">
                                                    <button type="button" class="btn btn-outline-primary">
                                                        <i class="far fa-edit" data-toggle="tooltip"
                                                           data-placement="top" title="Kemaskini"></i></button>
                                                </a></td>
                                            <td style="border:none;padding:0px;">
                                                <form id="frmDelete"
                                                      action="{{ route('urusetia.pengumuman.active', $row->notis_pk) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    @if($row->aktif == 1)
                                                        <button type="submit" class="btn btn-outline-danger"
                                                                id="kt_sweetalert_demo_9"><i class="fa flaticon2-delete"
                                                                                             data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             title="Nyah Aktif"></i>
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-outline-success"
                                                                id="kt_sweetalert_demo_9"><i class="fa fa-check"
                                                                                             data-toggle="tooltip"
                                                                                             data-placement="top"
                                                                                             title="Aktif"></i>
                                                        </button>
                                                    @endif
                                                </form>
                                            </td>
                                            <td style="border:none;padding:0px;">
                                                <form name="formHapus{{ $row->notis_pk }}" id="formHapus{{ $row->notis_pk }}"
                                                      action="{{ route('urusetia.pengumuman.destroy', $row->notis_pk) }}"
                                                      method="POST" onsubmit="return deleteItem({{ $row->notis_pk }})">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="btn btn-outline-warning" id="btn-danger">
                                                        <i class="fas fa-user-times" data-toggle="tooltip"
                                                           data-placement="top"
                                                           title="Hapus"  > </i></button>


                                                </form>
                                            </td>
                                        </tr>
                                    </table>
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
    <script src="{{ asset('js/pages/Scripts/pengumuman.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
    @if(session('success'))
        <script>Swal.fire(
                "Berjaya Padam!",
                "Rekod telah dipadam",
                "success"
            );</script>
    @endif
    <script>
        function deleteItem(id) {
        var status = false;
            Swal.fire({
                title: "Rekod Padam?",
                text: "Anda Pasti",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "Tidak",
                confirmButtonText: "Ya, saya pasti!"
            }).then(function (result) {
                if (result.value) {
                    document.getElementById("formHapus"+id).submit();
                    status = true;
                }
            });
        return status;
        }

    </script>
    @if(session('aktif'))
        <script>Swal.fire(
                "Aktif rekod!",
                "<?php echo session('aktif'); ?>",
                "success"
            );</script>
    @endif

@endsection