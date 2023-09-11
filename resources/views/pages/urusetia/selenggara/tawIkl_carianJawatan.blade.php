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
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Senarai Maklumat Tawaran
                            <span class="d-block text-muted pt-2 font-size-sm">Senarai Maklumat Jawatan Sedia Ada di UTM</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Export
                            </button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-text-o"></i>
                                            </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <!--<a href="@_path/Waran/TambahJawatan" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">-->
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>-->
                        <!--end::Svg Icon-->
                        <!--</span>Tambah Jawatan
                        </a>-->
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Sesi:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">Sila Pilih</option>
                                                <option value="2020/1">2020/1</option>
                                                <option value="2019/2">2019/2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Skim:</label>
                                            <select class="form-control" id="kt_datatable_search_type">
                                                <option value="">Sila pilih</option>
                                                <option value="B">B - Seni</option>
                                                <option value="C">C - Sains</option>
                                                <option value="D">D - Pendidikan</option>
                                                <option value="F">F - Teknologi</option>
                                                <option value="G">G - Perladangan</option>
                                                <option value="H">H - Kontraktor</option>
                                                <option value="J">J - Kejuruteraan</option>
                                                <option value="K">K - Keselamatan</option>
                                                <option value="N">N - Sumber Manusia</option>
                                                <option value="S">S - Sosial</option>
                                                <option value="U">U - Kesihatan</option>
                                                <option value="W">W - Kewangan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Cari</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th title="Field #">Bil</th>
                                <th title="Field #1">Sesi</th>
                                <th title="Field #2">Kod Jawatan</th>
                                <th title="Field #3">Nama Jawatan</th>
                                <th title="Field #4">Kampus</th>
                                <th title="Field #5">Kod PTJ</th>
                                <th title="Field #5">Taraf Jawatan</th>
                                <th title="Field #6">Status</th>
                                <th title="Field #10">Tindakan</th>
                            </tr>
                        </thead>
                        
                                <tr>
                                    <td>1</td>
                                    
                                    <td>2021/1</td>
                                    <td>BA41A</td>
                                    <td>PEREKA (BA41)</td>
                                    <td>JOHOR BAHRU</td>
                                    <td>J02</td>
                                    <td>TETAP</td>
                                    <td><span class="label font-weight-bold label-l label-inline  label-light-primary">DRAFT </span></td>
                                    <td>
                                        <a class="btn btn-sm btn-clean btn-icon flaticon-edit icon-md text-black-50" href="/v1/Waran/KelulusanJawatan/124/316" title="Kemaskini"> </a>
                                        <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_124" data-id="124~~316~~HAPUS" class="btn btn-sm btn-clean btn-icon flaticon2-rubbish-bin-delete-button icon-md text-black-50" title="Hapus"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    
                                    <td>2020/2</td>
                                    <td>WA44B</td>
                                    <td>JURUAUDIT (WA44)</td>
                                    <td>JOHOR BAHRU</td>
                                    <td>J03</td>
                                    <td>TETAP</td>
                                    <td><span class="label font-weight-bold label-l label-inline  label-light-primary">DRAFT </span></td>
                                    <td>
                                        <a class="btn btn-sm btn-clean btn-icon flaticon-edit icon-md text-black-50" href="/v1/Waran/KelulusanJawatan/51/315" title="Kemaskini"> </a>
                                        <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_51" data-id="51~~315~~HAPUS" class="btn btn-sm btn-clean btn-icon flaticon2-rubbish-bin-delete-button icon-md text-black-50" title="Hapus"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    
                                    <td>2020/2</td>
                                    <td>SA44A</td>
                                    <td>PUSTAKAWAN (SA44)</td>
                                    <td>JOHOR BAHRU</td>
                                    <td>J04</td>
                                    <td>TETAP</td>
                                    <td><span class="label font-weight-bold label-l label-light-success label-inline">AKTIF</span></td>
                                    <td>
                                        <a class="btn btn-sm btn-clean btn-icon flaticon-edit icon-md text-black-50" href="/v1/Waran/KelulusanJawatan/51/314" title="Kemaskini"> </a>
                                        <a onclick="fnCallModalItem(this);" id="IdBtnModalDelete_51" data-id="51~~314~~HAPUS" class="btn btn-sm btn-clean btn-icon flaticon2-rubbish-bin-delete-button icon-md text-black-50" title="Hapus"></a>
                                    </td>
                                </tr>
                         
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>

    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_kodItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-maroon-bold" id="IdAddModalKPLabel">Maklumat Jawatan <span id="IdPaparCode"></span></h5>
					<!--
                    @Html.HiddenFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).JAWATAN_PK, new { @id = "JAWATAN_PK" })
                    @Html.HiddenFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).PERINCIAN_PK, new { @id = "PERINCIAN_PK" })
                    @Html.HiddenFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).KODPROCESS, new { @id = "IdModalItemHiddenKodProcess" }) -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
							<!--
                                @Html.LabelFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).SESI, "Sesi", htmlAttributes: new { @class = "control-label" })
                                @Html.EditorFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).SESI, new { htmlAttributes = new { @class = "form-control", @id = "IdModalItemSesi", @disabled = true } }) -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
							<!--
                                @Html.LabelFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).Tahun, "Tahun", htmlAttributes: new { @class = "control-label" })
                                @Html.EditorFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).Tahun, new { htmlAttributes = new { @class = "form-control", @id = "IdModalItemTahun", @disabled = true } }) -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><!--
                                @Html.LabelFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).TARAF_JAWATAN_FK, "Taraf Jawatan", htmlAttributes: new { @class = "control-label" })
                                @Html.EditorFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).TARAF_JAWATAN_FK, new { htmlAttributes = new { @class = "form-control", @id = "IdModalItemTarafJwtn", @disabled = true } }) -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group"><!--
                                @Html.LabelFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).KOD_JAWATAN, "Kod Jawatan", htmlAttributes: new { @class = "control-label" })
                                @Html.EditorFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).KOD_JAWATAN, new { htmlAttributes = new { @class = "form-control", @id = "IdModalItemKodJwtn", @disabled = true } }) -->
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group"><!--
                                @Html.LabelFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).Nama_Jawatan, "Nama Jawatan", htmlAttributes: new { @class = "control-label" })
                                @Html.EditorFor(m => m.ElementAt<MvcHrPreServices.Models.CarianWaran>(0).Nama_Jawatan, new { htmlAttributes = new { @class = "form-control", @id = "IdModalItemNamaJwtn", @disabled = true } }) -->
                            </div>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="button" id="IdBtnItemSaveItemDelete" class="btn btn-outline-primary btn-sm m-btn m-btn--icon m-btn--pill">
                                <span>
                                    <i class="fa fa-save"></i>
                                    <span id="IdButangAction">Simpan Petugas</span>
                                </span>
                            </button>
                            <a href="@_path/Waran/CarianJawatan" class="btn btn-sm m-btn--pill btn-info" style="display:none;"><span id="IdBtnKodItemRefreshScreen">Back To List</span></a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm m-btn--pill btn-outline-warning" data-dismiss="modal"><span class="fa fa-door-closed"></span> Tutup</button>
                </div>
            </div>
        </div>
    </div>




@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Waran/CarianTarikh.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection