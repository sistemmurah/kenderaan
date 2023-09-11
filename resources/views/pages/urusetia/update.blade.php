{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<div class="container">
	@if(isset ($errors) && count($errors) > 0)
	<div class="alert alert-danger alert-notification">
		<ul class="list-unstyled mb-0">
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>   
			@endforeach
		</ul>
	</div>
	@endif

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">				
				<div class="card-header container-fluid">
					<div class="row">
						<div class="col-md-10">								
							<h4 style="margin: 0px;">{{ $edit ? 'Edit' : 'Create'}}  @lang('booking.bookingTitle')</h4>							
						</div>
						<div class="col-md-2 float-right">							
							<div class="col-md-6 float-left"><a href="{{ route('testskrin.index') }}" class="btn btn-primary">&nbsp;Back&nbsp;</a></div>
							<div class="col-md-6 float-right"><a href="{{ route('home') }}" class="btn btn-success">Home</a></div>	
						</div>
					</div>                    
				</div>

				<div class="card-body">
					@if($edit)
					<form action="{{ route('testskrin.update', $booking->id) }}" method="post">
						@else
							
						<form action="{{ route('testskrin.store') }}" method="post">
							@endif 
							
							{{ csrf_field() }}
							



							
							
							
							<div class="form-group">
								<label >Date Useds</label>																	
								<input type="text" class="form-control" name="date_used" value="{{ $edit ? $booking->date_used : old('date_used') }}" placeholder="yyyy-mm-dd">
							</div>	
							<div class="form-group">
								<label >Time Used</label>																	
								<input type="text" class="form-control" name="time_used" value="{{ $edit ? $booking->time_used : old('time_used') }}">
							</div>	

							<div class="form-group">
								<label >Date Returned</label>																
								<input type="text" class="form-control" name="date_returned" value="{{ $edit ? $booking->date_returned : old('date_returned') }}" placeholder="yyyy-mm-dd">
							</div>	
							<div class="form-group">
								<label >Time Returned</label>																	
								<input type="text" class="form-control" name="time_returned" value="{{ $edit ? $booking->time_returned : old('time_returned') }}">
							</div>	
							<div class="form-group">
								<label >Status</label>		
								<input type="text" class="form-control" name="status" value="{{ $edit ? $booking->status : old('status') }}">
							</div>	



							
								{{-- <div class="form-group">
									<label >Vehicle</label>									
									<input type="text" class="form-control" name="model" value="{{ $edit ? $booking->model : old('model') }}">
								</div>	
								<div class="form-group">
									<label >Maker</label>									
									<input type="text" class="form-control" name="maker" value="{{ $edit ? $booking->maker : old('maker') }}">
								</div>
								<div class="form-group">
									<label >Type</label>
									<select name="type_id" class="form-control">
										@foreach($type as $row)
										@if($edit)
										<option value="{{ $row->id }}" {{ $row->id == $booking->type_id ? 'selected' : '' }}>{{ $row->name }}</option>
										@else
										<option value="{{ $row->id }}">{{ $row->name }}</option>
										@endif
										@endforeach
									</select>									
								</div>	  --}}				
								<div class="form-group">
									<input type="submit" value="Save" class="btn btn-primary"/> 
									<a href="{{ route('testskrin.index') }}" class="btn btn-default">Cancel</a>                     
								</div>
							</form>
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