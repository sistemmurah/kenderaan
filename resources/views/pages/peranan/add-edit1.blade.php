@extends('layout.default')

@section('content')
    <div class="container">
    <?php $errorcap = ""; $start = 0; ?>
    @if(isset ($errors) && count($errors) > 0)
        @foreach($errors->all() as $error)		
            <?php  $start++; $errorcap .= $start . ". " . $error . "<br>"; ?>
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
                            <form action="{{ route('peranan.update', $peranan->peranan_pk ) }}" method="post">
                                @else
                                    <form action="{{ route('peranan.store') }}" method="post">
                                        @endif
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Peranan</label>
                                                <input class="form-control" type="text" id="idpengguna"
                                                       {{ $disabled }} name="peranan_nama"
                                                       value="{{ $edit ? $peranan->peranan_nama : old('name') }}"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <table class="table table-bordered table-hover table-checkable mt-10"
                                                       id="kt_datatable2">
                                                    <thead class="colored">
                                                    <tr>

                                                        <th title="Field #2" colspan="5">Modul</th>
                                                        <th title="Field #3">Akses</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($listAksesLv1 as $row)
                                                        <tr>
                                                            <td></td>
                                                            <td colspan="4">{{ $row->akses_nama }}</td>
                                                            <td><label class="checkbox">
                                                                    @if ( $perananAkses != null )
                                                                        <input type="checkbox" name="akses_nama[]"
                                                                               value="{{ $row->akses_pk }}" {{$perananAkses->where('pakses_akses_fk', $row->akses_pk)->first() ? 'checked' : ''}}/>
                                                                    @else
                                                                        <input type="checkbox" name="akses_nama[]"
                                                                               value="{{ $row->akses_pk }}"/>
                                                                    @endif
                                                                    <span></span>
                                                                </label></td>
                                                        </tr>

                                                        @foreach($listAkses->where('akses_kod_induk', $row->akses_pk ) as $rows)
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td colspan="3">{{ $rows->akses_nama }}</td>
                                                                <td><label class="checkbox">
                                                                        @if ( $perananAkses != null )
                                                                            <input type="checkbox" name="akses_nama[]"
                                                                                   value="{{ $rows->akses_pk }}" {{$perananAkses->where('pakses_akses_fk', $rows->akses_pk)->first() ? 'checked' : ''}} />
                                                                        @else
                                                                            <input type="checkbox" name="akses_nama[]"
                                                                                   value="{{ $rows->akses_pk }}"/>
                                                                        @endif
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                            </tr>

                                                            @foreach($listAkses->where('akses_kod_induk', $rows->akses_pk) as $rows1)
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td colspan="2">{{ $rows1->akses_nama }}</td>
                                                                    <td><label class="checkbox">
                                                                            @if ( $perananAkses != null )
                                                                                <input type="checkbox"
                                                                                       name="akses_nama[]"
                                                                                       value="{{ $rows1->akses_pk }}" {{$perananAkses->where('pakses_akses_fk', $rows1->akses_pk)->first() ? 'checked' : ''}} />
                                                                            @else
                                                                                <input type="checkbox"
                                                                                       name="akses_nama[]"
                                                                                       value="{{ $rows1->akses_pk }}"/>
                                                                            @endif
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>

                                                                @foreach($listAkses->where('akses_kod_induk', $rows1->akses_pk) as $rows2)
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>{{ $rows2->akses_nama }}</td>
                                                                        <td><label class="checkbox">
                                                                                @if ( $perananAkses != null )
                                                                                    <input type="checkbox"
                                                                                           name="akses_nama[]"
                                                                                           value="{{ $rows2->akses_pk }}" {{$perananAkses->where('pakses_akses_fk', $rows2->akses_pk)->first() ? 'checked' : ''}} />
                                                                                @else
                                                                                    <input type="checkbox"
                                                                                           name="akses_nama[]"
                                                                                           value="{{ $rows2->akses_pk }}"/>
                                                                                @endif
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
                        <input type="submit" value="Simpan" class="btn btn-primary font-weight-bold"/>
                        <a href="{{ route('peranan.senaraiPeranan') }}"><input type="button"
                                                                               class="btn btn-danger font-weight-bold"
                                                                               value="Kembali"></a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Tamat: Butang Kemaskini/Batal -->
        <input type="hidden" name="pakses_peranan_fk" value="{{ $edit ? $peranan->peranan_pk : old('name') }}"/>
        </form>

    </div>
        @endsection

        {{-- Scripts Section --}}
        @section('scripts')

            <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
            <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet"
                  type="text/css"/>

            <script src="{{ asset('js/pages/Scripts/Waran/senaraiPeranan.js') }}"></script>
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