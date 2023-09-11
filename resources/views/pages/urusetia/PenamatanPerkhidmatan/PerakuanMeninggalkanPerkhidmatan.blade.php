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


        <!-- Permohonan Penamatan Perkhidmatan -->
        <div class="card card-custom" data-card="true" id="kt_card_1">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Bahagian C : Perakuan Meninggalkan Perkhidmatan</h3>
                </div>

                <div class="card-toolbar">
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                        <i class="ki ki-arrow-down icon-nm text-dark"></i>
                    </a>
                </div>

            </div>
                <div class="card-body">
                    <div class="col-lg-12">
            <div style="text-align: center;padding-top: 15px;">
                <h5 class="card-title" style="padding-top:10px;">PERAKUAN APABILA MENINGGALKAN PERKHIDMATAN KERAJAAN<br/>(AKTA RAHSIA RASMI 1972)</h5>
            </div>
        </div>

                    <div class="form-group row">
                    <div class="col-lg-12" style="text-align: center;padding-top: 15px;">
                            <label>                       Adalah saya dengan ini mengaku bahawa perhatian saya telah ditarik kepada peruntukan-peruntukan 
Akta Rahsia Rasmi, 1972 dan bahawa saya faham dengan sepenuhnya akan segala yang dimaksudkan dalam Akta itu. 
Khususnya saya faham bahawa  menyampaikan perkara rasmi kepada mana-mana orang yang tidak dibenarkan adalah 
menjadi suatu kesalahan di bawah Seksyen 8 Akta, yang boleh dihukum penjara tidak lebih daripada tujuh tahun atau 
denda tidak lebih daripada sepuluh ribu ringgit atau penjara dan denda itu kedua-duanya.


                      <br/><br/>Saya faham bahawa segala maklumat rasmi yang salah perolehi dalam perkhidmatan mana-mana 
Kerajaan dalam Malaysia, adalah milik Kerajaan dan tidak akan dibocorkan, disiarkan atau disampaikan, sama ada 
secara lisan atau dengan bertulis, kepada sesiapa jua dalam apa-apa bentuk, kecualai pada masa menjalankan 
kewajipan-kewajipan rasmi saya, sama ada dalam masa atau selepas perkhidmatan saya dengan Seri Paduka Baginda 
Yang Di-Pertuan Agong atau dengan mana-mana Kerajaan dalam Malaysia dengan tidak terlebih dahulu mendapat 
kebenaran bertulis Ketua Setiausaha Negara, Jabatan Perdana Menteri. Saya berjanji dan mengaku akan 
menandatangani suatu akuan selanjutnya bagi maksud ini apabila meninggalkan Perkhidmatan Kerajaan.          </label>
                              
                        </div>  
                        </div>   
                        <br/>
                        <br/>
    <div class="form-group row">
                            <div class="col-lg-6">
                                 <div class="form-group row">
    <label  class="col-4 col-form-label">Tandatangan :</label>
    <div class="col-8">
     <input class="form-control" type="text" value="" id="example-text-input"/>
    </div>
   </div>
                            </div>  
                            <div class="col-lg-6">
                           <div class="form-group row">
    <label  class="col-4 col-form-label">Disaksikan oleh,</label><br/>
    <div class="col-8">
     
    </div>
   </div>
                            </div>                                              
                        </div>
<div class="form-group row">
                            <div class="col-lg-6">
                                 <div class="form-group row">
    <label  class="col-4 col-form-label">Nama :</label>
    <div class="col-8">
     <input class="form-control" type="text" value="AIDIL SUFRI BIN SULAIMAN" id="example-text-input"/>
    </div>
   </div>
                            </div>  
                            <div class="col-lg-6">
                           <div class="form-group row">
    <label  class="col-4 col-form-label">Tandatangan :</label><br/>
    <div class="col-8">
     <input class="form-control" type="text" value="" id="example-text-input"/>
    </div>
   </div>
                            </div>                                              
                        </div>
                       <div class="form-group row">
                            <div class="col-lg-6">
                                 <div class="form-group row">
    <label  class="col-4 col-form-label">No.Kad Pengenalan  :</label>
    <div class="col-8">
     <input class="form-control" type="text" value="" id="example-text-input"/>
    </div>
   </div>
                            </div>  
                            <div class="col-lg-6">
                           <div class="form-group row">
    <label  class="col-4 col-form-label">Nama Saksi:</label><br/>
    <div class="col-8">
     <input class="form-control" type="text" value="" id="example-text-input"/>
    </div>
   </div>
                            </div>                                              
                        </div>  
                               <div class="form-group row">
                            <div class="col-lg-6">
                                 <div class="form-group row">
    <label  class="col-4 col-form-label">Jawatan  :</label>
    <div class="col-8">
     <input class="form-control" type="text" value="" id="example-text-input"/>
    </div>
   </div>
                            </div>  
                            <div class="col-lg-6"></div>                                          
                            </div> 
                              <div class="form-group row">
                            <div class="col-lg-6">
                                 <div class="form-group row">
    <label  class="col-4 col-form-label">PTJ  :</label>
    <div class="col-8">
     <input class="form-control" type="text" value="" id="example-text-input"/>
    </div>
   </div>
                            </div>  
                            <div class="col-lg-6"></div>                                          
                            </div>

                            <button onclick="window.print()" class="btn font-weight-bold btn-primary mr-2"><i class="fa fa-print"> Cetak </i></button>                    
                </div>
            </div>        
        <br/>
        <!-- end perakuan-->     

   
    </div>
    </div>
</div>
</div>
       


@endsection

{{-- Scripts Section --}}
@section('scripts')

<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('js/pages/Scripts/Lantikan/SemakPermohonanBaru.js') }}"></script>
	<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

 <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
@endsection