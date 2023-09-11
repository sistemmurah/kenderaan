{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

@if($edit)
    <!-- route('wangBantJenzh.update', $pengguna->PENG_PK) -->
    <form action="{{ route('wangBantJenzh.update', 2 ) }}" method="post">
        @else
            <form action="{{ route('wangBantJenzh.store') }}" method="post">
            @endif
            {{ csrf_field() }}
        <!-- Maklumat Penerima -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                    Maklumat Penerima
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
        <div class="row form-group">
            <div class="col-lg-6">
                Nama
                <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
            </div>
            <div class="col-lg-6">
                No. Kad Pengenalan
                <input name="" type="text" id="" class="form-control rounded-corner" placeholder="" value="" />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-6">
                Hubungan
                <select class="form-control" id="kt_datatable_search_type">
                    <option value="">Sila Pilih</option>
                    <option value="1">Bapa</option>
                    <option value="2">Ibu</option>
                    <option value="3">Anak</option>
                </select>
            </div>
        </div>
    </div>
</div>
        <br>
        <!-- Surat Akuan Penerimaan -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                    Surat Akuan Penerimaan
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



            <div class="col-lg-12">
                <!--begin: Table -->
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                    <thead class="colored">
                    <tr>
                        <th width="5%" style="text-align:center;">Bil</th>
                        <th width="22%" >Nama Fail</th>
                        <th width="7%" style="text-align:center;">Tarikh Kemaskini</th>
                        <th width="15%" style="text-align:center;">Tindakan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="thcenter"> 1         </td>
                        <td >Surat Akuan Penerimaan.pdf</td>
                        <td class="thcenter">03/02/2018 </td>
                        <td style="text-align:center;">
                            <a onclick="" id="activityAdDetails_@item.WARAN_PK" data-id="" class="btn btn-outline-success btn-sm m-btn m-btn--icon m-btn--pill" title="Kemaskini"><i class="la flaticon-file-2"></i></a>
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
        <br>
        <div class="card card-custom" data-card="true" id="kt_card_1">
    <div class="card-body">
        <div class="col-lg-12 text-center">
            <input type="submit" value="Kemaskini" class="btn btn-primary font-weight-bold"/>
            <a href="{{ route('wangBantJenzh.senarai') }}"><input type="button" class="btn btn-danger font-weight-bold" value="Batal"></a>
        </div>
    </div>

</div>
    </form>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/wangBantJenzh/wangBantJenzh.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection