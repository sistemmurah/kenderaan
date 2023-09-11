{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                    Senarai Penerima
                </a>
            </h3>
        </div>

        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>

    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12" style="text-align:right;">
                <a href="{{ route('wangBantJenzh.create') }}" onclick="" id="IdBtnModalCreateNew" data-id="0~~SIMPAN" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill"><i class="la la-edit"></i> Tambah</a>
            </div>
            <br><br>

            <div class="col-lg-12">
                <!--begin: Table -->
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                    <thead class="colored">
                    <tr>
                        <th width="5%" style="text-align:center;">Bil</th>
                        <th width="22%" >Nama</th>
                        <th width="7%" style="text-align:center;">Tarikh Kemaskini</th>
                        <th width="15%" style="text-align:center;">Tindakan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="thcenter"> 1         </td>
                        <td >ABDUL WAHAB BIN JEMAIN     </td>
                        <td class="thcenter">03/02/2018 </td>
                        <td style="text-align:center;">
                            <!-- route('wangBantJenzh.destroy', $row->PERANAN_PK ) -->
                            <form id="frmDelete" action="{{ route('wangBantJenzh.destroy', 2 ) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <!-- route('wangBantJenzh.add-edit', $row->PERANAN_PK) -->
                                <a href="{{ route('wangBantJenzh.add-edit', 2 ) }}" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                                    <button type="submit" id="IdButangDelete" onclick="" data-id="" class="btn btn-outline-danger btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td class="thcenter"> 2         </td>
                        <td >HAMDAN BIN ISA     </td>
                        <td class="thcenter">15/12/2015 </td>
                        <td style="text-align:center;">
                            <a onclick="" id="activityAdDetails_@item.WARAN_PK" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                            <button type="button" id="IdButangDelete" onclick="" data-id="" class="btn btn-outline-danger btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="thcenter"> 3         </td>
                        <td >JUMAAT BIN ISMAIL     </td>
                        <td class="thcenter">25/09/2014 </td>
                        <td style="text-align:center;">
                            <a onclick="" id="activityAdDetails_@item.WARAN_PK" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la la-edit"></i></a>
                            <button type="button" id="IdButangDelete" onclick="" data-id="" class="btn btn-outline-danger btn-sm m-btn m-btn--icon m-btn--pill"><i class="flaticon-delete" title="Hapus"></i></button>
                        </td>
                    </tr>
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
    <script src="{{ asset('js/pages/Scripts/wangBantJenzh/wangBantJenzh.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection