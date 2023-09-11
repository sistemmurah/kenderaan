{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Mula: Tuntutan Bayaran Elaun Ahli Lembaga- -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="fa flaticon-users text-dark"></i>
                        Tuntutan Bayaran Elaun Ahli Lembaga

                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama :<span class="text-danger">*</span></label>
                            <input id="noRujukan" type="text" class="form-control" placeholder="Nama" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan:<span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-live-search="true">
                            <option>Sila Pilih</option>
                                <option>Pejabat Pendaftar</option>
                                <option>Fakulti Kejuruteraan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No Pekerja :<span class="text-danger">*</span></label>
                            <input id="noRujukan" type="text" class="form-control" placeholder="No Pekerja" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No Kad Pengenalan :<span class="text-danger">*</span></label>
                            <input id="noRujukan" type="text" class="form-control" placeholder="No Kad Pengenalan" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gred Jawatan<span class="text-danger">*</span></label>
                            <input id="noRujukan" type="text" class="form-control" placeholder="Gred Jawatan" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No Siri Bayaran Elaun<span class="text-danger">*</span></label>
                            <input id="noRujukan" type="text" class="form-control" placeholder="No Siri Bayaran Elaun" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Permohonan Tuntutan -->
    
<!-- Mula: Senarai Maklumat Tuntutan -->
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
            <i class="fa flaticon-users text-dark"></i>
                Maklumat Tuntutan
            </h3>
        </div>
        
    </div>

    <div class="card-body">
        <div class="mb-5">
            <div class="row align-items-center">

                <div class="col-md-9">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                           
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <!-- Mula: Datatable-->
        <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored">
            <tr>
                    <th title="Field #1" style="text-align:center;">Bil</th>
                    <th title="Field #2" style="text-align:center;">Tarikh</th>
                    <th title="Field #3" style="text-align:center;">Tarikh Mula</th>
                    <th title="Field #4" style="text-align:center;">Tarikh Tamat</th>
                    <th title="Field #5" style="text-align:center;">Jumlah Jam</th>
                    <th title="Field #6" style="text-align:center;">Keterangan Tugas</th>
                    
                    <th title="Field #8" style="text-align:center;">Tindakan</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td>1</td>
                    <td>1/2/2021</td>
                    <td>20/01/2021</td>
                    <td>21/01/2021</td>
                    <td>5 Jam</td>
                    <td>Mengajar</td>
                    
                    <td class="text-center p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianStaf.tambahPergigian') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1/2/2021</td>
                    <td>2/02/2021</td>
                    <td>2/02/2021</td>
                    <td>3 Jam</td>
                    <td>Mengajar</td>
                    
                    <td class="text-center p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianStaf.tambahPergigian') }}'"
                            type="button" class="btn btn-sm btn-icon btn-light-primary">
                            <i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Tooltip">
                            </i>
                        </button>
                        <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="kt_sweetalert_demo_9">
                            <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Tooltip"> </i>
                        </button>
                    </td>
                </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                        </td>
                        <td>
                            <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                        </td>
                        <td>
                            <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                        </td>
                        <td>
                            <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                        </td>
                        <td>
                            <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                        </td>
                        <td class="text-center p-0">
                        <button
                            onclick="window.location ='{{ route('pergigianStaf.tambahPergigian') }}'"
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
        <!-- Tamat: Datatable-->
    </div>
</div>
<!-- Tamat: Senarai Maklumat Tuntutan -->

<!-- Start Lampiran-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="fa flaticon-users text-dark"></i>
                        Lampiran
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable1">
                        <thead class="colored">
                        <tr>
                            <th title="Field #1" style="text-align:center;">Bil</th>
                            <th title="Field #2" style="text-align:center;">Nama Fail </th>
                            <th title="Field #3" style="text-align:center;">Fail</th>
                            <th title="Field #4" style="text-align:center;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tuntutan</td>
                            <td>Tuntutan.pdf</td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-light-primary" id="lihatLampiran">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="hapusLampiran">
                                    <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip"> </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minit Mesyuarat</td>
                            <td>Minit Mesyuarat.pdf</td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-sm btn-icon btn-light-primary" id="lihatLampiran">
                                    <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-light-danger" id="hapusLampiran">
                                    <i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip"> </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="form-group">
                                    <input id="namaFailLampiran" type="text" class="form-control" />
                                </div>
                            </td>
                            <td class="text-center p-0"><br>
                                <button type="button" class="btn btn-sm btn-icon btn-primary" id="uploadFile">
                                    <i class="fas fa-upload" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                            <td class="text-center p-0"><br>
                                <button type="button" class="btn btn-sm btn-circle btn-icon btn-success"
                                    id="tambahLampiran">
                                    <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Tooltip">
                                    </i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
</div>
<!-- End Lampiran -->


<!-- Mula: Pengesahan- -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                    <i class="fa flaticon-users text-dark"></i>
                        Pengesahan Dekan

                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pengesahan:<span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-live-search="true">
                            <option>Sila Pilih</option>
                                <option>Prof. Dr Zaidatun Tasir</option>
                                <option>Dato' Prof. Dr. Rafie</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pengesahan- -->


<!-- Mula: Butang Simpan/Hantar/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('urusetia.LantikanLPU.tambahPenerimaElaunLPU') }}'"
                    class="btn btn-outline-primary"> Simpan
                </button>
                <button onclick="window.location = '{{ route('urusetia.LantikanLPU.tambahPenerimaElaunLPU') }}'"
                    class="btn btn-primary font-weight-bold"> Hantar
                </button>
                <button onclick="window.location = '{{ route('urusetia.LantikanLPU.senaraiTuntutanElaunLPU') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Hantar/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
	
	
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/Lantikan/maktuntutanLPU_table.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/lampiranLPU_table.js') }}"></script>
    
    
@endsection