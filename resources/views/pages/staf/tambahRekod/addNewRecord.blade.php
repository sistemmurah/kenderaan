{{-- Extends layout --}}
@extends('layout.urusetia')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<div class="container">
	@if(Session::get('success',false))
	<div class="alert alert-success alert-notification">
		<i class="fa fa-check"></i>
		{{ Session::get('success') }}
	</div>
	@endif

    <div class="card-header">
            <div class="card-title">
                <h4 class="card-label"><i class="fa fa-plane text-dark"></i>&nbsp;&nbsp;Maklumat Permohonan</h4>
            </div>
    </div>

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">				
				
				<div class="card-body">

                    <div class="form-group">
						<label for="exampleSelect1">Jenis Permohonan</label>
						<select class="form-control" id="exampleSelect1">
							<option>Sila Pilih</option>
							<option>BORANG A - URUSAN RASMI</option>
							<option>BORANG C - PERSENDIRIAN</option>

						</select>
					</div>
					 
				</div>
			</div>
			
		</div>
	</div>
<br/>

<div class="card-header">
            <div class="card-title">
                <h4 class="card-label"><i class="fa fa-plane text-dark"></i>&nbsp;&nbsp;Maklumat Pemohon</h4>
            </div>
    </div>
    <div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">				
				<div class="card-body">
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Nama</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNama" type="text" id="IdModalItemNama" class="form-control rounded-corner" placeholder="Nama" />
                        </div>
                        <div class="col-6">
                            <label>No.Pekerja</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNoKadPengenalan" type="text" id="IdModalItemLevelNoKpBaru" class="form-control rounded-corner" placeholder="No.Pekerja" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label>Warganegara</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNama" type="text" id="IdModalItemNama" class="form-control rounded-corner" placeholder="Warganegara" />
                        </div>
                        <div class="col-6">
                            <label>No.Kad Pengenalan</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNoKadPengenalan" type="text" id="IdModalItemLevelNoKpBaru" class="form-control rounded-corner" placeholder="No.Kad Pengenalan" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label>Jawatan</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNama" type="text" id="IdModalItemNama" class="form-control rounded-corner" placeholder="Jawatan" />
                        </div>
                        <div class="col-6">
                            <label>Fakulti</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNoKadPengenalan" type="text" id="IdModalItemLevelNoKpBaru" class="form-control rounded-corner" placeholder="Fakulti" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label>Email Rasmi</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNama" type="text" id="IdModalItemNama" class="form-control rounded-corner" placeholder="Nama" />
                        </div>
                        <div class="col-6">
                            <label>No. Tel Pejabat</label>
                            <input name="ctl00$MyContentPlaceHolder$txtNoKadPengenalan" type="text" id="IdModalItemLevelNoKpBaru" class="form-control rounded-corner" placeholder="No.Kad Pengenalan" />
                        </div>
                    </div>
                    
                </div>
            </div>
            
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