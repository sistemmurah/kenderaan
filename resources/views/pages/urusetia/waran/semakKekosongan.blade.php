{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Start : Carian -->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-search-1">
                Carian
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
 
 <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>No Pekerja <span style="color:Red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Sila masukkan nama jawatan" />
                                    </div>
                                    <div class="col-lg-4">
                                        <label>MyID <span style="color:Red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Sila masukkan jawatan JPA" />
                                        <!--<span class="form-text text-muted">Please enter your contact number</span>-->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Nama <span style="color:Red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Sila masukkan gred jawatan JPA" />
                                        <!--<span class="form-text text-muted">Please enter your contact number</span>-->
                                    </div>
                                </div>
  <div class="row">
  <div class="col-lg-12 text-center">
                                    <button type="reset" class="btn btn-primary mr-2">Cari</button>
                                </div>
 
 </div>
 
 
 
 </div>
 </div>
<!-- End : Carian -->

<br>

<!-- Start : Senarai Carian Staf -->
<div class="card card-custom" data-card="true" id="kt_card_1">
 <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                <a href="#" class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                Senarai Carian Staf
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
                                                    <label class="mr-3 mb-0 d-none d-md-block">Fakulti/Jabatan:</label>
                                                    <select class="form-control" id="kt_datatable_search_status">
                                                        <option value="">Semua</option>
                                                        <option value="1">Pending</option>
                                                        <option value="2">Delivered</option>
                                                        <option value="3">Canceled</option>
                                                        <option value="4">Success</option>
                                                        <option value="5">Info</option>
                                                        <option value="6">Danger</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Tahun:</label>
                                                    <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">Semua</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Cari</a>
                                    </div>
                                    <!-- s -->
                                </div>
<br>
                                <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                <thead class="colored">
                <tr>
                                        <th title="Field #1">Bil</th>
                                        <th title="Field #2">Nama Pemohon</th>
                                        <th title="Field #3">Nama Jawatan</th>
                                        <th title="Field #4">Tarikh Ditawarkan</th>
                                        <th title="Field #5">Gaji Permulaan</th>
                                        <th title="Field #6">Status Staf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="../Waran/InfoGaji">DINIHA BINTI MISKAM</a></td>
                                        <td>PEGAWAI TEKNOLOGI MAKLUMAT, GRED F41/F44</td>
                                        <td>12/01/2020</td>
                                        <td>RM 5,300</td>
                                        <td>Sedia Lapor Diri</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="../Waran/MaklumatGaji">MOHD SAZLI BINTI RAHMAN</a></td>
                                        <td>PEN. PEGAWAI TEKNOLOGI MAKLUMAT KANAN (FA38)</td>
                                        <td>12/02/2020</td>
                                        <td>RM 3,800</td>
                                        <td>Sedia Lapor Diri</td>
                                </tbody>
                            </table>




























 </div>
 </div>
<!-- End : Senarai Carian Staf -->



 


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Waran/TableGaji.js') }}"></script>
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection