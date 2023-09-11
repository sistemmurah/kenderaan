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
            <div class="card card-custom gutter-b example example-compact">
                <!--begin::Form-->
                <form class="form">
                    <div class="card-header">
                        <h3 class="card-title">Maklumat Peribadi</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Fakulti/Jabatan <span style="color:Red;">*</span></label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="">Sila Pilih</option>
                                    <option value="">Fakulti Kejuruteraan</option>
                                    <option value="">Fakulti Sains</option>
                                    <option value="">Fakulti Alam Bina</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Unit <span style="color:Red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Sila masukkan unit" />
                                
                            </div>
                            <div class="col-lg-4">
                                <label>Bahagian <span style="color:Red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Sila masukkan bahagian" />
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Status Staf<span style="color:Red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Sila masukkan status staf" />
                            </div>
                            <div class="col-lg-4">
                                <label>Kod PTJ <span style="color:Red;">*</span></label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="">Sila Pilih</option>
                                    <option value="">J51</option>
                                    <option value="">J54</option>
                                    <option value="">J10</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Taraf Jawatan <span style="color:Red;">*</span></label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="">Sila Pilih</option>
                                    <option value="">Tetap</option>
                                    <option value="">Kontrak</option>
                                    <option value="">Sambilan</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Kumpulan Perkhidmatan <span style="color:Red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Sila masukkan kumpulan perkhidmatan" />
                                
                            </div>
                            <div class="col-lg-8">
                                <label>No Fail Peribadi <span style="color:Red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Sila masukkan no fail peribadi" />
                                
                            </div>
                        </div>
                        <!-- begin: Datatable -->
                        <div class="card-header">
                            <h3 class="card-title">Sejarah Perkhidmatan</h3>
                        </div>

                        <!-- begin: Datatable : Paparan Perkhidmatan -->
                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample5">
                            <div class="card">
                                <div class="card-header" id="headingOne5">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne5" style="background-color:antiquewhite;">
                                        <i class="icon-2x text-dark-50 flaticon2-soft-icons"></i>SENARAI PERKHIDMATAN
                                    </div>
                                </div>


                                <div id="collapseOne5" class="collapse" data-parent="#accordionExample5">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">

                                            <table class="datatable datatable-bordered datatable-head-custom" id="senaraiperkhidmatan">
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Bil</th>
                                                        <th title="Field #2">Tarikh Mula</th>
                                                        <th title="Field #3">Tarikh Tamat</th>
                                                        <th title="Field #4">Jawatan</th>
                                                        <th title="Field #5">Taraf Jawatan</th>
                                                        <th title="Field #6">Tempoh</th>
                                                        <th title="Field #7">Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1  </td>
                                                        <td>25/06/2010</td>
                                                        <td>25/06/2020</td>
                                                        <td> </td>
                                                        <td>Tetap</td>
                                                        <td>10</td>
                                                        <td>030106 Naik Pangkat Secara Fleksi</td>

                                                    </tr>

                                                    <tr>
                                                        <td>1  </td>
                                                        <td>25/06/2010</td>
                                                        <td>25/06/2020</td>
                                                        <td> </td>
                                                        <td>Tetap</td>
                                                        <td>10</td>
                                                        <td>030106 Naik Pangkat Secara Fleksi</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end: Datatable -->
                                </div>


                            </div>
                        </div>
                        <!-- end: Datatable : Paparan Perkhidmatan -->
                        <!-- begin: Datatable : Paparan ROC-->
                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                            <div class="card">
                                <div class="card-header" id="headingOne6">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" style="background-color:antiquewhite;">
                                        <i class="flaticon2-search"></i>SENARAI ROC
                                    </div>
                                </div>
                                <div id="collapseOne6" class="collapse" data-parent="#accordionExample6">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable2">
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Bil</th>
                                                        <th title="Field #2">Tarikh Mula Kuatkuasa</th>
                                                        <th title="Field #3">Jawatan</th>
                                                        <th title="Field #4">PTJ</th>
                                                        <th title="Field #5">Gaji <br>RM</th>
                                                        <th title="Field #6">Bulan Pergerakan Gaji BPG</th>
                                                        <th title="Field #7">Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>25/06/2010</td>
                                                        <td>Pegawai Teknologi Maklumat Gred F41/F44</td>
                                                        <td>UTM Digital</td>
                                                        <td>5000</td>
                                                        <td>Julai</td>
                                                        <td>030107 Kenaikan Gaji Tahunan KGT</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>








                            </div>
                        </div>
                        <!-- end: Datatable : Paparan ROC -->

                        <div class="row">
                            <div class="col-lg-12 text-center">

                                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable2">
                                    <thead>
                                        <tr>
                                            <th title="Field #1">Bil</th>
                                            <th title="Field #2">Tarikh Mula Kuatkuasa</th>
                                            <th title="Field #3">Jawatan</th>
                                            <th title="Field #4">PTJ</th>
                                            <th title="Field #5">Gaji (RM)</th>
                                            <th title="Field #6">Bulan Pergerakan Gaji BPG</th>
                                            <th title="Field #7">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>25/06/2010</td>
                                            <td>Pegawai Teknologi Maklumat Gred F41/F44</td>
                                            <td>UTM Digital</td>
                                            <td>5000</td>
                                            <td>Julai</td>
                                            <td>030107 Kenaikan Gaji Tahunan KGT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">

                        <!--end: Datatable -->
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <button type="reset" class="btn btn-primary mr-2">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                            
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

    <script src="{{ asset('js/pages/Scripts/Lantikan/keluarga_header.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/pages/Scripts/BorangPermohonan/Keluarga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection