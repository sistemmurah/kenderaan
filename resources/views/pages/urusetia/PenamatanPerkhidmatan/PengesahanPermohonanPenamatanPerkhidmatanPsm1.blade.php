{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha binti Wahi Anuar -->

<!--Mula: Pengakuan Pemohon-->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">
<div class="card card-custom card-collapsed" data-card="true" id="kt_card_4">
 <div class="card-header">
  <div class="card-title">
   <h3 class="card-label">Pengesahan Pemohonan Penamatan Perkhidmatan</h3>
  </div>
  <div class="card-toolbar">
   <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
   <i class="ki ki-arrow-down icon-nm"></i>
   </a>
   <a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload">
   <i class="ki ki-reload icon-nm"></i>
   </a>
   
  </div>
 </div>
 <div class="card-body">
    <div class="row">
                    <div class="col-lg-12">
            <div style="text-align: left;padding-top: 15px;">
                <h5 class="card-title" style="padding-top:10px;"><i class="flaticon2-user"></i> Maklumat Permohonan</h5>
            </div>
        </div>
        <hr class="dashed">
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <label>Jenis Penamatan : </label>
            <input id="" type="text" class="form-control" disabled="disabled"value="Bersara Wajib" />
    </div>  
    <div class="col-lg-6">
        <label>Status Kelayakkan : </label>
        <input type="text" class="form-control" name="Status Kelayakkan" value="Layak"required="required" placeholder="" style="background-color:#3ED60F; width: 30%;" />
        <input type="text" class="form-control" name="Status Kelayakkan" value="Tidak Layak"required="required" placeholder="" style="background-color:#FAA697; width: 30%;" />
    </div>  

    <div class="col-lg-6">
        <label>Tarikh Kuatkuasa Tamat : </label>
        <div class="input-group date">
            <input type="text" class="form-control" value="4/2/2021" disabled="disabled"/>
                                            
            <span id="MyContentPlaceHolder_RegularExpressionValidator2"
            style="color:Red;font-weight:bold;display:none;">Invalid date format (e.g. 05 Apr 1995)</span>
        </div> 
    </div> 
                </div>
 </div>
</div>
</div>
</div>
</div>

<script>
var card = new KTCard('kt_card_4');

// Toggle event handlers
card.on('beforeCollapse', function (card) {
 setTimeout(function () {
  toastr.info('Before collapse event fired!');
 }, 100);
});

card.on('afterCollapse', function (card) {
 setTimeout(function () {
  toastr.warning('Before collapse event fired!');
 }, 2000);
});

card.on('beforeExpand', function (card) {
 setTimeout(function () {
  toastr.info('Before expand event fired!');
 }, 100);
});

card.on('afterExpand', function (card) {
 setTimeout(function () {
  toastr.warning('After expand event fired!');
 }, 2000);
});

// Reload event handlers
card.on('reload', function (card) {
 toastr.info('Leload event fired!');

 KTApp.block(card.getSelf(), {
  overlayColor: '#ffffff',
  type: 'loader',
  state: 'primary',
  opacity: 0.3,
  size: 'lg'
 });

 // update the content here

 setTimeout(function () {
  KTApp.unblock(card.getSelf());
 }, 2000);
});
</script>