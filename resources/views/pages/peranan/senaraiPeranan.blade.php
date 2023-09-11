{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<?php $active = array( "Tidak Aktif", "Aktif"); ?>
<!-- Start Senarai Peranan -->
<div class="card card-custom gutter-b">

    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <i class="fas fa-users"></i>
                Senarai Peranan
            </h3>
        </div>
        <div class="card-toolbar">
            <button onclick="window.location = '{{ route('peranan.create') }}'"
                class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Peranan">
                <i class="fas fa-plus-circle"></i> Tambah
            </button>
        </div>
    </div>

    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
        <thead class="colored">
                <tr>
                    <th title="Field #1">Bil</th>
                    <th title="Field #2">Peranan</th>
                    <th title="Field #3" class="thcenter">Jumlah Pengguna</th>
                    <th title="Field #4" class="thcenter">Status</th>
                    <th title="Field #5" class="thcenter">Tindakan</th>
                </tr>
            </thead>
            <tbody>

            @foreach($listperanan as $index => $row)

                <tr>
                    <td>{{ $index +1 }}</td>
                    <td>{{ $row->peranan_nama }}</td>
                    <td class="thcenter">{{count($row->penggunaPlural)}}</td>
                    <td class="thcenter"><?php echo $active[$row->aktif]; ?></td>

                    <td style="text-align:center;">

                        <table border="1" style="border:1px; width:100%; padding:0px;">
                            <tr>
                                <td style="border:none; padding:0px;">

                                    <a href="{{ route('peranan.add-edit', $row->peranan_pk ) }}" ><button type="button" class="btn btn-outline-primary">
                                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Kemaskini"></i></button></a>

                                </td>

                                <td style="border:none;padding:0px;">
                                    <form id="frmDelete" action="{{ route('peranan.active', $row->peranan_pk) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        @if($row->aktif == 1)
                                            <button type="submit" class="btn btn-outline-danger" id="kt_sweetalert_demo_9"><i class="fa flaticon2-delete"  data-toggle="tooltip" data-placement="top" title="Nyah Aktif"></i></button>
                                        @else
                                            <button type="submit" class="btn btn-outline-success" id="kt_sweetalert_demo_9"><i class="fa fa-check"  data-toggle="tooltip" data-placement="top" title="Aktif"></i></button>
                                        @endif
                                    </form>
                                </td>
                                <td style="border:none;padding:0px;">
                                    <form name="formHapus{{ $row->peranan_pk }}" id="formHapus{{ $row->peranan_pk }}" action="{{ route('peranan.destroy', $row->peranan_pk) }}" method="POST" onsubmit="return deleteItem({{ $row->notis_pk }})">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-outline-warning" id="btn-danger">
                                            <i class="fas fa-user-times" data-toggle="tooltip" data-placement="top" title="Hapus"> </i></button>
                                    </form>
                                </td>
                            </tr></table>
                        </td>
                </tr>

                @endforeach
               
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!-- End Senarai Peranan -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/SenaraiPerananTable.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
    @if(session('success'))
        <script>Swal.fire(
                "Hapus rekod!",
                "Rekod telah dihapuskan",
                "success"
            );</script>
    @endif
    @if(session('aktif'))
        <script>Swal.fire(
                "Aktif rekod!",
                "<?php echo session('aktif'); ?>",
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
@endsection