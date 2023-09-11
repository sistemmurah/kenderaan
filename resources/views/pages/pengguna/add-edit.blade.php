@extends('layout.default')

@section('content')
<div class="container">
    <?php $errorcap = ""; $start = 0; ?>
    @if(isset ($errors) && count($errors) > 0)
        @foreach($errors->all() as $error)
            <?php  $start++; $errorcap .= $start.". ".$error."<br>"; ?>
        @endforeach
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
					<form action="{{ route('pengguna.update', $pengguna->peng_pk) }}" method="post">

						@else
						<form action="{{ route('pengguna.store') }}" method="post">
							@endif 
							
							{{ csrf_field() }}
                <div class="row">

                    <!-- ruang kosong ditepi kiri -->
                    <div class="col-lg-1">
                    </div>

                    <!-- Mula: Content Borang Kemaskini Pengguna -->
                    <div class="col-lg-10">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">ID Pengguna</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="peng_id" id="peng_id" {{ $disabled }} autofocus
                                    value="{{ $edit ? $pengguna->peng_id : old('peng_id') }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nama<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="peng_nama" id="peng_nama" {{ $disabled }}
								value="{{ $edit ? $pengguna->peng_nama : old('peng_nama') }}" />
									
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Emel</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="peng_emel" id="peng_emel" {{ $disabled }}
                                    value="{{ $edit ? $pengguna->peng_emel : old('peng_emel') }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">No Telefon</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="tel" name="peng_no_tel" id="peng_no_tel" {{ $disabled }}
                                    value="{{ $edit ? $pengguna->peng_no_tel : old('peng_no_tel') }}" />
                            </div>
                        </div>

                        <!-- Mula: Checkbox Peranan Pengguna -->
						<?php $start = 0; ?>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Tahap Akses</label>
                            <div class="col-lg-9 col-form-label">
                                <div class="checkbox-list">
	                            @if ( $listperanan != null )
									
								@foreach($listperanan as $row)
                                    <?php $list[$start] = $row->pperanan_peranan_fk; $start+=1; ?>
    							@endforeach
							    @endif
							
							@foreach($tahapAks as $row)		
							<?php

							$restart = $start; $checked = ""; $disabled = "";
							$mula = 0;
							while ( $mula < $restart ){
								
								if ( $list[$mula] == $row->peranan_pk ){
									$checked = "checked ";		$disabled = "disabled=disabled";							
								}
								$mula += 1;
							}
							?>
								<label class="checkbox">
                                	<input type="checkbox" name="PPERANAN_PERANAN_FK[]" value="{{ $row->peranan_pk }}" <?php echo $checked; ?>/>
                                	<span></span>
									{{ $row->peranan_nama }}
                                </label>
							@endforeach
                                   
                                </div>
                            </div>
                        </div>
                        <!-- Tamat: Checkbox Peranan Pengguna -->

                    </div>
                    <!-- Tamat: Content Borang Kemaskini Pengguna -->

                    <!-- ruang kosong ditepi kanan -->
                    <div class="col-lg-1">
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
			<input type="submit" value="Simpan" class="btn btn-primary font-weight-bold"/>
                <a href="{{ route('pengguna.senaraiPengguna') }}"><input type="button" class="btn btn-danger font-weight-bold" value="Kembali"></a>
                
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Kemaskini/Batal -->
<input type="hidden" name="pperanan_peng_fk"  value="{{ $edit ? $pengguna->peng_pk : old('name') }}" />
</form>



@endsection

@section('scripts')
            @if(isset ($errors) && count($errors) > 0)
                <script>Swal.fire(
                        "Ralat Simpan!",
                        "Sila pastikan maklumat lengkap<br><?php echo $errorcap; ?> ",
                        "error"
                    );</script>
            @endif
            @if(session('berjayaSimpan'))
                <script>Swal.fire(
                        "Berjaya Simpan!",
                        "Rekod telah disimpan",
                        "success"
                    );</script>
@endif
@endsection
