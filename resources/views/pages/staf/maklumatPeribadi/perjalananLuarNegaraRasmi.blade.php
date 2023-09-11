{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!--Mula: Maklumat Permohonan -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Permohonan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="mr-3 mb-0 d-none d-md-block">Jenis Permohonan</label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">BORANG A - URUSAN RASMI</option>
                                    <option value="">SILA PILIH</option>
                                    <option value="">BORANG C - PERSENDIRIAN</option>
                                </select>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tamat: Maklumat Permohonan -->

<!--Mula: Maklumat Pemohon-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Pemohon
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input id="namaPengirim" type="text" class="form-control" disabled="disabled"
                                value="AMINAH BINTI ABDULLAH" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Pekerja</label>
                            <input id="no.pekerja" type="tel" class="form-control" disabled="disabled"
                                value="7332" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Warganegara</label>
                            <input id="warganegara" type="text" class="form-control" disabled="disabled"
                                value="MYS - MALAYSIA" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Kad Pengenalan</label>
                            <input id="no.telPengirim" type="tel" class="form-control" disabled="disabled"
                                value="750626-01-5442" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan</label>
                            <input id="jawatan" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT (FA41)" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti</label>
                            <input id="no.telPengirim" type="tel" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email Rasmi</label>
                            <input id="emailRasmi" type="text" class="form-control" disabled="disabled"
                                value="aminah@utm.my" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Telefon Pejabat</label>
                            <input id="no.telPejabat" type="tel" class="form-control" disabled="disabled"
                                value="075533067" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Pemohon -->

<!--Mula: Maklumat Waris-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Waris
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="MOHD HAFIZ BIN YAHYA" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Kad Pengenalan<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="700230-01-5321" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Hubungan<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="SUAMI" id="example-text-input"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="NO 25, JALAN BUNGA KEMBOJA, TAMAN KEMBOJA" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="53100" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="JOHOR BAHRU" id="example-text-input"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>Negeri<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="JOHOR" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Telefon Rumah<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="" id="example-text-input"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Telefon Bimbit<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="0175643454" id="example-text-input"/>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Waris -->

<!--Mula: Maklumat Perjalanan-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-plane"></i>
                        Maklumat Perjalanan
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No. Rujukan</label>
                            <input id="namaPengirim" type="text" class="form-control" disabled="disabled"
                                value="J2021C00701" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Permohonan</label>
						   
							<input class="form-control" type="date" value="2020-01-02" id="example-date-input"/>
						    
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Jenis Lawatan<span class="text-danger">*</span></label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">SILA PILIH</option>
                                    <option value="">SEMINAR</option>
                                    <option value="">PERSIDANGAN</option>
                                    <option value="">LATIHAN</option>
                                    <option value="">BENGKEL</option>
                                    <option value="">MESYUARAT</option>
                                    <option value="">LAWATAN RASMI</option>
                                    <option value="">MOU/MOA/JARINGAN</option>
                                </select>
                        </div>
                    </div>
                 
                    <div class="col-lg-6">
                        <div class="form-group">
                                <label>Negara<span class="text-danger">*</span></label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">PAKISTAN</option>
                                    <option value="">SAUDI ARABIA</option>
                                    <option value="">CHINA</option>
                                    
                                </select>
                                
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label>Tempat Lawatan<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="" id="example-text-input"/>
                        </div>
                    </div>
                 
                    
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Tarikh Mula<span class="text-danger">*</span></label>
						    
							<input class="form-control" type="date" value="2020-01-02" id="example-date-input"/>
						    
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Tarikh Tamat<span class="text-danger">*</span></label>
						    
							<input class="form-control" type="date" value="2020-01-02" id="example-date-input"/>
						    
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Bilangan Hari<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="" id="example-text-input"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Perbelanjaan Oleh<span class="text-danger">*</span></label>
                                <select class="form-control" id="kt_datatable_maca_search_status">
                                    <option value="">GERAN PENYELIDIKAN RMC</option>
                                    <option value="">UTM</option>
                                    <option value="">SENDIRI</option>
                                    
                                </select>
                        </div>
                    </div>
                </div>
            

                 
            </div>


        </div>
    </div>
</div>
<!--Tamat: Maklumat Perjalanan -->

<br/>

<!--Mula: Butang seterusnya-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            

            <div class="card-body">
                <div class="row">
                <div class="card-body text-center">
                
                <button onclick="window.location = '{{ route('staf.maklumatPeribadi.maklumatProgramRasmi') }}'"
                    class="btn btn-primary font-weight-bold"> Seterusnya
                </button>
               
            </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Butang seterusnya -->

@endsection

{{-- Scripts Section --}}
@section('scripts')

	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/eBoarding/eBoardingTable.js') }}"></script>
    
@endsection