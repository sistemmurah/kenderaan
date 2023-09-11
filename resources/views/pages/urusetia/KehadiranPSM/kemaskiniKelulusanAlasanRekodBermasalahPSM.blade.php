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
                <!-- Maklumat Rekod-->     
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Maklumat Rekod</h3>
                        </div>

                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                                <i class="ki ki-arrow-down icon-nm text-dark"></i>
                            </a>
                        </div>
                </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>No Pekerja : </label>
                                <input type="text" class="form-control" name="noPekerja" value=""
                                required="required" placeholder="7932"/>
                            </div>  
                            <div class="col-lg-6">
                                <label>Nama : </label>
                                <input type="text" class="form-control" name="Nama" value=""
                                required="required" placeholder="Aminah binti Abdullah"/>
                            </div>                                              
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Jawatan : </label>
                                <input type="text" class="form-control" name="Jawatan" value=""
                                required="required" placeholder="Pegawai Teknologi Maklumat (FA41)"/>
                            </div>  
                            <div class="col-lg-6">
                                <label>Fakulti/Jabatan : </label>
                                <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="JP">Jabatan Pendaftar</option>
                                <option value="JPD">Jabatan Perkhidmatan Digital</option>
                            </select>
                        </div> 
                        </div>                                          
                   
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Tarikh: </label>
                                <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Pilih Tarikh" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                            </div>  
                            <div class="col-lg-6">
                                <label>WBB/Syif: </label>
                                <select name="ctl00$MyContentPlaceHolder$ddlFakJab"
                                id="MyContentPlaceHolder_ddlFakJab" class="form-control"
                                required="required">
                                <option value="Sila Pilih..">Sila Pilih..</option>
                                <option value="WBB1">WBB1</option>
                                <option value="WBB2">WBB2</option>
                                </select>
                            </div> 
                        </div>
                                                                              

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Isu</label>
                                    <select name="ctl00$MyContentPlaceHolder$ddlIsu"
                                    id="MyContentPlaceHolder_ddlIsu" class="form-control"required="required">
                                        <option value="Sila Pilih..">Sila Pilih..</option>
                                        <option value="TL">TL : Tidak Lengkap</option>
                                        <option value="TH">TH : Tidak Hadir</option>
                                        <option value="ML">ML : Masuk Lewat</option>
                                        <option value="FX">FX : Tiada Ganti Fleksi</option>
                                        <option value="KA">KA : Keluar Awal</option>
                                        <option value="KM">KM : Keluar Masuk</option>
                                    </select>                                
                            </div>    
                            <div class="col-lg-6">
                                <label>Alasan: </label>
                                <input type="text" class="form-control" name="Alasan" value=""
                                required="required" placeholder="Cuti Rehat"/>
                            </div>                                                                  
                        </div>
                        
                </div>
            </div>
       

        
        <br/>
        <!-- card button simpan & kembali-->    
        <!-- Mula: Pengesahan PSM PTJ -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-id-card"></i>
                        Kelulusan PSM PTJ
                    </h3>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Terima</label>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Pilih Tarikh" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tarikh Kemaskini</label>
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                            <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Pilih Tarikh" data-target="#kt_datetimepicker_3"/>
                                <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Disemak Oleh<span class="text-danger">*</span></label>
                            <input id="namaPegawaiPSM" type="text" class="form-control" 
                            placeholder="Nama Pegawai PSM" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Status<span class="text-danger">*</span></b></label>
                            <select class="form-control" id="pengesahanPSM">
                                <option>Sila Pilih</option>
                                <option>LULUS</option>
                                <option>TIDAK LULUS</option>
                            </select>
                        </div>
                    </div>
                </div>

           

            </div>
        </div>
    </div>
</div>
<!-- Tamat: Pengesahan PSM PTJ -->
<br\> 

    <div class="card card-custom" data-card="true" id="kt_card_1">

         <div class="card-body">                   

            <div class="row">
               <div class="col-lg-12">
                <div class="card card-custom gutter-b card ">
                  <div class="card-body text-center">
                    <button type="submit" name="action" value="save"
                    class="btn btn-primary font-weight-bold"> Simpan
                    </button>
                        <button onclick="window.location = '{{ route('urusetia.KehadiranPSM.kelulusanAlasanRekodBermasalahPSM') }}'"
                            class="btn btn-outline-warning btn-sm m-btn m-btn--icon m-btn--pill"> Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
    <br/>

  







    @endsection

    {{-- Scripts Section --}}
    @section('scripts')

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
    @endsection