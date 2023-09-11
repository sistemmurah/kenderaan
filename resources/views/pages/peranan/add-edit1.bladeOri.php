@extends('layout.default')

@section('content')
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

	

<!--Mula: Kemaskini Pengguna -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-user"></i>
                        Kemaskini Peranan Pengguna
                    </h3>
                </div>
            </div>

            <div class="card-body">
			@if($edit)
				<form action="{{ route('peranan.update', $peranan->PERANAN_PK) }}" method="post">
			@else
				<form action="{{ route('peranan.store') }}" method="post">
			@endif 
			{{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-lg-6">
                    <label>Peranan</label>
                    <input class="form-control" type="text" id="idpengguna" disabled="disabled"
                                    value="{{ $edit ? $peranan->PERANAN_NAMA : old('name') }}" />
                    </div>             
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable2">
                    <thead class="colored">
                        <tr>

                            <th title="Field #2" colspan="5">Modul</th>
                            <th title="Field #3">Akses</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listAksesLv1 as $row)
                            <tr>
                                <td></td><td colspan="4">{{ $row->AKSES_NAMA }}</td>
                                <td><label class="checkbox">
                                        <input type="checkbox" name="AKSES_NAMA[]" value="{{ $row->AKSES_PK }}" {{$perananAkses->where('PAKSES_AKSES_FK', $row->AKSES_PK)->first() ? 'checked' : ''}}/>
                                        <span></span>
                                    </label></td>
                            </tr>

                            @foreach($listAkses->where('AKSES_KOD_INDUK', $row->AKSES_PK) as $rows)
                            <tr>
                                <td></td><td></td><td colspan="3">{{ $rows->AKSES_NAMA }}</td>
                                <td><label class="checkbox">
                                    <input type="checkbox" name="AKSES_NAMA[]" value="{{ $rows->AKSES_PK }}" {{$perananAkses->where('PAKSES_AKSES_FK', $rows->AKSES_PK)->first() ? 'checked' : ''}} />
                                    <span></span>
                                    </label>
                                </td>
                            </tr>

                                @foreach($listAkses->where('AKSES_KOD_INDUK', $rows->AKSES_PK) as $rows1)
                                <tr>
                                    <td></td><td></td><td></td><td colspan="2">{{ $rows1->AKSES_NAMA }}</td>
                                    <td><label class="checkbox">
                                        <input type="checkbox" name="AKSES_NAMA[]" value="{{ $rows1->AKSES_PK }}" {{$perananAkses->where('PAKSES_AKSES_FK', $rows1->AKSES_PK)->first() ? 'checked' : ''}} />
                                        <span></span>
                                        </label>
                                    </td>
                                </tr>

                                    @foreach($listAkses->where('AKSES_KOD_INDUK', $rows1->AKSES_PK) as $rows2)
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td>{{ $rows2->AKSES_NAMA }}</td>
                                        <td><label class="checkbox">
                                            <input type="checkbox" name="AKSES_NAMA[]" value="{{ $rows2->AKSES_PK }}" {{$perananAkses->where('PAKSES_AKSES_FK', $rows2->AKSES_PK)->first() ? 'checked' : ''}} />
                                            <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Kemaskini Pengguna -->

<!-- Mula: Butang Kemaskini/Batal -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
			<input type="submit" value="Kemaskini" class="btn btn-primary font-weight-bold"/> 
                <a href="{{ route('peranan.senaraiPeranan') }}"><input type="button" class="btn btn-danger font-weight-bold" value="Kembali"></a>
                
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Kemaskini/Batal -->
<input type="hidden" name="PAKSES_PERANAN_FK"  value="{{ $edit ? $peranan->PERANAN_PK : old('name') }}" />
</form>



	@endsection

    {{-- Scripts Section --}}
    @section('scripts')

<script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
<link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<script src="{{ asset('js/pages/Scripts/Waran/senaraiPeranan.js') }}"></script>

@endsection