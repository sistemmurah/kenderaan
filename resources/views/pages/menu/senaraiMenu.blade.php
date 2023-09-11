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
    <!-- Start Senarai Menu -->
    <div class="card card-custom gutter-b">

        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-list"></i>
                    Senarai Menu
                </h3>
            </div>
            <div class="card-toolbar">
                {{--{{ route('peranan.tambahPeranan') }}--}}
                <button onclick="window.location = '{{ route('menu.create') }}'"
                        class="btn btn-success font-weight-bold" data-toggle="tooltip" title="Tambah Menu">
                    <i class="fas fa-plus-circle"></i> Tambah
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="mb-0">
                <div class="row align-items-center">

                    <div class="col-md-9">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Cari"
                                   id="search_field_input" name="search" onchange="search_table()"/>
                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                        </div>
                    </div>

                </div>
            </div>

            <!--begin: Datatable-->
            <div class="form-group row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-hover table-checkable mt-10" id="table_id">
                        <thead class="colored">
                        <tr>
                            <th title="Field #1" style="text-align: center">#</th>
                            <th title="Field #2" colspan="4" style="width: 25%; text-align: center">Modul</th>
                            <th title="Field #3" style="text-align: center">Akses Kod Induk</th>
                            <th title="Field #4" style="text-align: center">Susun Skrin</th>
                            <th title="Field #5" style="text-align: center">Akses Kod</th>
                            <th title="Field #6" style="text-align: center">Tindakan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listAksesLv1 as $index => $row)
                            <tr>
                                <td style="width: 5%; text-align: center">{{ $index +1 }}</td>
                                <td colspan="4">{{ $row->akses_nama }}</td>
                                <td style="text-align: center">{{ $row->akses_pk }}</td>
                                <td style="text-align: center">{{ $row->susun }}</td>
                                <td style="text-align: center">{{ $row->akses_kod }}</td>
                                <td style="text-align:center;">
                                    {{--{{ $row->AKSES_PK }}--}}
                                    <table border="1" style="border:1px; width:100%; padding:0px;">
                                        <tr>
                                            <td style="border:none; padding:0px;">
                                                <a href="{{ route('menu.add-edit', $row->akses_pk) }}" ><button type="button" class="btn btn-outline-primary">
                                                        <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Kemaskini"></i></button></a></td>
                                            <td style="border:none;padding:0px;">
                                                <form id="frmDelete" action="{{ route('menu.active', $row->akses_pk) }}" method="POST">
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
                                                <form name="formHapus{{ $row->akses_pk }}" id="formHapus{{ $row->akses_pk }}" action="{{ route('menu.destroy', $row->akses_pk) }}" method="POST" onsubmit="return deleteItem({{ $row->akses_pk }})">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="btn btn-outline-warning" id="btn-danger">
                                                        <i class="fas fa-user-times" data-toggle="tooltip" data-placement="top" title="Hapus"> </i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            @foreach($listAkses->where('akses_kod_induk', $row->akses_pk) as $rows)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td colspan="3">{{ $rows->akses_nama }}</td>
                                    <td style="text-align: center">{{ $rows->akses_pk }}</td>
                                    <td style="text-align: center">{{ $rows->susun }}</td>
                                    <td style="text-align: center">{{ $rows->akses_kod }}</td>
                                    <td style="text-align:center;">
                                        {{--{{ $rows->AKSES_PK }}--}}
                                        <table border="1" style="border:1px; width:100%; padding:0px;">
                                            <tr>
                                                <td style="border:none; padding:0px;">
                                                    <a href="{{ route('menu.add-edit', $rows->akses_pk) }}" ><button type="button" class="btn btn-outline-primary">
                                                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Kemaskini"></i></button></a></td>
                                                <td style="border:none;padding:0px;">
                                                    <form id="frmDelete" action="{{ route('menu.active', $rows->akses_pk) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        @if($rows->aktif == 1)
                                                            <button type="submit" class="btn btn-outline-danger" id="kt_sweetalert_demo_9"><i class="fa flaticon2-delete"  data-toggle="tooltip" data-placement="top" title="Nyah Aktif"></i></button>
                                                        @else
                                                            <button type="submit" class="btn btn-outline-success" id="kt_sweetalert_demo_9"><i class="fa fa-check"  data-toggle="tooltip" data-placement="top" title="Aktif"></i></button>
                                                        @endif
                                                    </form>
                                                </td>
                                                <td style="border:none;padding:0px;">
                                                    <form name="formHapus{{ $rows->akses_pk }}" id="formHapus{{ $rows->akses_pk }}" action="{{ route('menu.destroy', $rows->akses_pk) }}" method="POST" onsubmit="return deleteItem({{ $rows->akses_pk }})">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button class="btn btn-outline-warning" id="btn-danger">
                                                            <i class="fas fa-user-times" data-toggle="tooltip" data-placement="top" title="Hapus"> </i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                @foreach($listAkses->where('akses_kod_induk', $rows->akses_pk) as $rows1)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2">{{ $rows1->akses_nama }}</td>
                                        <td style="text-align: center">{{ $rows1->akses_pk }}</td>
                                        <td style="text-align: center">{{ $rows1->susun }}</td>
                                        <td style="text-align: center">{{ $rows1->akses_kod }}</td>
                                        <td style="text-align:center;">
                                            <table border="1" style="border:1px; width:100%; padding:0px;">
                                                <tr>
                                                    <td style="border:none; padding:0px;">
                                                        <a href="{{ route('menu.add-edit', $rows1->akses_pk) }}" ><button type="button" class="btn btn-outline-primary">
                                                                <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Kemaskini"></i></button></a></td>
                                                    <td style="border:none;padding:0px;">
                                                        <form id="frmDelete" action="{{ route('menu.active', $rows1->akses_pk) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            @if($rows1->aktif == 1)
                                                                <button type="submit" class="btn btn-outline-danger" id="kt_sweetalert_demo_9"><i class="fa flaticon2-delete"  data-toggle="tooltip" data-placement="top" title="Nyah Aktif"></i></button>
                                                            @else
                                                                <button type="submit" class="btn btn-outline-success" id="kt_sweetalert_demo_9"><i class="fa fa-check"  data-toggle="tooltip" data-placement="top" title="Aktif"></i></button>
                                                            @endif
                                                        </form>
                                                    </td>
                                                    <td style="border:none;padding:0px;">
                                                        <form name="formHapus{{ $rows1->akses_pk }}" id="formHapus{{ $rows1->akses_pk }}" action="{{ route('menu.destroy', $rows1->akses_pk) }}" method="POST" onsubmit="return deleteItem({{ $rows1->akses_pk }})">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button class="btn btn-outline-warning" id="btn-danger">
                                                                <i class="fas fa-user-times" data-toggle="tooltip" data-placement="top" title="Hapus"> </i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    @foreach($listAkses->where('akses_kod_induk', $rows1->akses_pk) as $rows2)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $rows2->akses_nama }}</td>
                                            <td style="text-align: center">-</td>
                                            <td style="text-align: center">{{ $rows2->susun }}</td>
                                            <td style="text-align: center">{{ $rows2->akses_kod }}</td>
                                            <td style="text-align:center;">
                                                <table border="1" style="border:1px; width:100%; padding:0px;">
                                                    <tr>
                                                        <td style="border:none; padding:0px;">
                                                            <a href="{{ route('menu.add-edit', $rows2->akses_pk) }}" ><button type="button" class="btn btn-outline-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Kemaskini"></i></button></a></td>
                                                        <td style="border:none;padding:0px;">
                                                            <form id="frmDelete" action="{{ route('menu.active', $rows2->akses_pk) }}" method="POST">
                                                                @csrf
                                                                @method('PATCH')
                                                                @if($rows2->aktif == 1)
                                                                    <button type="submit" class="btn btn-outline-danger" id="kt_sweetalert_demo_9"><i class="fa flaticon2-delete"  data-toggle="tooltip" data-placement="top" title="Nyah Aktif"></i></button>
                                                                @else
                                                                    <button type="submit" class="btn btn-outline-success" id="kt_sweetalert_demo_9"><i class="fa fa-check"  data-toggle="tooltip" data-placement="top" title="Aktif"></i></button>
                                                                @endif
                                                            </form>
                                                        </td>
                                                        <td style="border:none;padding:0px;">
                                                            <form name="formHapus{{ $rows2->akses_pk }}" id="formHapus{{ $rows2->akses_pk }}" action="{{ route('menu.destroy', $rows2->akses_pk) }}" method="POST" onsubmit="return deleteItem({{ $rows2->akses_pk }})">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button class="btn btn-outline-warning" id="btn-danger">
                                                                    <i class="fas fa-user-times" data-toggle="tooltip" data-placement="top" title="Hapus"> </i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end: Datatable-->
        </div>
    </div>
    <!-- End Senarai Menu -->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

    <!-- script datatable -->
    <script>
        function search_table(){
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_field_input");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_id");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td") ;
                for(j=0 ; j<td.length ; j++)
                {
                    let tdata = td[j] ;
                    if (tdata) {
                        if (tdata.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break ;
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        }
    </script>
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
