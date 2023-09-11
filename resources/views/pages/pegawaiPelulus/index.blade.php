{{-- Extends layout --}}
@extends('layout.default')

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

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">				
				<div class="card-header container-fluid">
					<div class="row">
						<div class="col-md-10">
							<h4 style="margin: 0px;">@lang('booking.bookingSubTitle') Pegawai</h4>							
						</div>
						<div class="col-md-2 float-right">
							<div class="col-md-6 float-left"><a href="{{ route('testskrin.create') }}" class="btn btn-primary">Create</a>	</div>

							
							
												
						</div>
						{{-- <div class="col-md-1 float-right">
							<a href="{{ route('home') }}" class="btn btn-success">Home</a>					
						</div> --}}						
					</div>                    
				</div>

				<div class="card-body">
					 <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
						<thead class="thead-light">
							<tr>
								<th scope="col" >#</th>
								<th scope="col" >Vehicle</th>
								<th scope="col" >Driver</th>
								<th scope="col" >Staff</th>
								<th scope="col" >Date Usede</th>
								<th scope="col" >Time Used</th>
								<th scope="col" >Date Returned</th>
								<th scope="col" >Time Returned</th>
								<th scope="col" >Status</th>
								<th scope="col" >Action</th>								
							</tr>
						</thead>
						<tbody>			
							@foreach($booking as $index => $row)
							<tr>
								<td scope="row" style="width: 5%">{{ $index +1 }}</td>								
								<td></td>
								<td></td>
								<td></td>
								<td style="width: 10%">{{ $row->date_used }}</td>
								<td style="width: 10%">{{ $row->time_used }}</td>
								<td style="width: 10%">{{ $row->date_returned }}</td>
								<td style="width: 10%">{{ $row->time_returned }}</td>	
								<td style="width: 10%">{{ $row->status }}</td>											
								<td style="width: 15%"><a href="{{ route('testskrin.add-edit', $row->id) }}" class="btn btn-primary">Edit</a>
								<a href="{{ route('testskrin.delete', $row->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record ?')">Delete</a></td>
							</tr>                    
							@endforeach			
						</tbody>
					</table>
				</div>
			</div>
			{{ $booking->links('pagination::bootstrap-4') }}
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