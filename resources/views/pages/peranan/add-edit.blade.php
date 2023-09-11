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
				<form action="{{ route('peranan.update', $peranan->peranan_pk ) }}" method="post">
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




                <?php $start = 0; ?>
                @foreach($perananAkses as $row)	
                	<?php $list[$start] = $row->PAKSES_AKSES_FK; $start+=1; ?>
				@endforeach

                <div class="form-group row">
                    <div class="col-lg-12">
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable2">
                    <thead class="colored">
                        <tr>

                            <th title="Field #2" colspan="4">Program</th>
                            <th title="Field #3">Akses</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listAksesLv1 as $row)
                            <?php
                            $restart = $start; $checked = ""; $disabled = "";
                            $mula = 0;
                            while ( $mula < $restart ){
                                if ( $list[$mula] == $row->AKSES_PK ){
                                    $checked = "checked ";		$disabled = "disabled=disabled";
                                }
                                $mula += 1;
                            }
                            ?>
                            <tr>

                                <td></td><td colspan="3">{{ $row->AKSES_NAMA }}</td>
                                <td><label class="checkbox">
                                        <input type="checkbox" name="AKSES_NAMA[]" value="{{ $row->AKSES_PK }}" <?php echo $checked; ?>/>
                                        <span></span>

                                    </label></td>
                            </tr>

                            @foreach($listAkses as $index => $rows)
                                <?php
                                if ( strpos($rows->AKSES_KOD, $row->AKSES_KOD) !== false ){
                                    if ( $rows->AKSES_KOD != $row->AKSES_KOD ){
                                        if ( strpos($rows->AKSES_KOD, '_B') !== false ){ ?>
                                            <tr>

                            <td></td><td></td><td></td><td>Button{{ $rows->AKSES_NAMA }}</td>
                            <td><label class="checkbox">
                                <input type="checkbox" name="AKSES_NAMA[]" value="{{ $row->AKSES_PK }}" <?php echo $checked; ?>/>
                                <span></span>

                                </label></td>
                                </tr> <?php
                                        }
                                        else {
?>
                                            <tr>

                            <td></td><td></td><td colspan="2">Submenu {{ $rows->AKSES_NAMA }}</td>
                            <td><label class="checkbox">
                                <input type="checkbox" name="AKSES_NAMA[]" value="{{ $row->AKSES_PK }}" <?php echo $checked; ?>/>
                                <span></span>

                                </label></td>
                                </tr>
<?php
                                }
                                    }
                                }
                                ?>
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