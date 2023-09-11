{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')
    <?php $errorcap = ""; $start = 0; ?>
    @if(isset ($errors) && count($errors) > 0)
        @foreach($errors->all() as $error)
            <?php  $start++; $errorcap .= $start . ". " . $error . "<br>"; ?>
        @endforeach
    @endif


    <!--begin: Senarai-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <a href="{{ route('urusetia.pengumuman.create') }}"
                       class="h4 text-dark text-hover-primary mb-5 flaticon2-list-1">
                        Tambah Pengumuman
                    </a>
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            @if($edit)
                <form action="{{ route('urusetia.pengumuman.update', $detNotis->notis_pk) }}" method="post">

                    @else
                        <form action="{{ route('urusetia.pengumuman.store') }}" method="post">
                            @endif

                            {{ csrf_field() }}

                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label>Tajuk</label>
                                    <span style="color: red">* tidak melebihi 100 patah perkataan</span>
                                    <textarea type="text" class="form-control rounded-corner" name="notis_tajuk"
                                              placeholder="Sila masukkan tajuk pengumuman"/>{{ $edit ? $detNotis->notis_tajuk : old('notis_tajuk') }}</textarea>
                                    <br>
                                    <label>Deskripsi</label>
                                    <span style="color: red">* tidak melebihi 4000 patah perkataan</span>
                                    <textarea type="text" class="form-control rounded-corner" name="notis_deskripsi"
                                              placeholder="Sila masukkan deskripsi pengumuman"/>{{ $edit ? $detNotis->notis_deskripsi : old('notis_deskripsi') }}</textarea>
                                    <br>
                                    <label>Kategori</label>
                                    <select class="form-control rounded-corner" name="notis_kat">
                                        @if(!$edit)
                                            <option value="">Sila Pilih</option> @endif
                                        @foreach($kategori as $listkat)
                                            @if($edit)
                                                <option value="{{ $listkat->peranan_pk }}" {{ $listkat->peranan_pk == $detNotis->notis_kat ? 'selected' : '' }}>{{ $listkat->peranan_nama }}</option>
                                            @else
                                                <option value="{{ $listkat->peranan_pk }}">{{ $listkat->peranan_nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <br>
                                    <label>Kampus</label>@if($edit){{ $detNotis->kampus }}@endif
                                    <select class="form-control rounded-corner" name="kampus" id="kategori"
                                            onchange="filterKampus()">
                                        @if(!$edit)
                                            <option value="">Sila Pilih</option> @endif
                                        @foreach($listKampus as $kampus)
                                            @if($edit)
                                                <option value="{{ $kampus->kod }}" {{ $kampus->kod == $detNotis->kampus ? 'selected' : '' }}>{{ $kampus->nama_parameter }}</option>
                                            @else
                                                <option value="{{ $kampus->kod }}">{{ $kampus->nama_parameter }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <br>
                                    <label>Fakulti / PTJ</label>
                                    <select class="form-control rounded-corner" name="notis_fak_fk" id="organisasi">
                                        @if($edit)
                                            <option selected>{{ $detNotis->notis_fak_fk  }}</option>
                                        @endif
                                        @if(!$edit)
                                            <option value="">Sila Pilih</option> @endif
                                        @foreach($listFak as $fakulti)
                                            @if($edit)
                                                <option value="{{ $fakulti->kod_fakulti }}" {{ $fakulti->kod_fakulti == $detNotis->notis_fak_fk ? 'selected' : '' }}>{{ $fakulti->deskripsi }}</option>
                                            @else
                                                <option value="{{ $fakulti->kod_fakulti }}">{{ $fakulti->kod_fakulti."-".$fakulti->deskripsi }}
                                                    e
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-lg-6">
                                    <label>Tarikh Mohon</label>
                                    <span style="color: red">*</span>
                                    <div class="input-group date mb-2">
                                        <input type="text" class="form-control" placeholder="DD MM YYYY"
                                               id="kt_datepicker_1" name="notis_tkh_mohon"
                                               value="{{ $edit ? date('d/m/Y', strtotime($detNotis->notis_tkh_mohon)) : old('NOTIS_TKH_MOHON') }}"/>
                                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="flaticon2-calendar-1"></i>
                            </span>
                                        </div>
                                    </div>
                                    <br>
                                    <label>Tarikh Mula</label>
                                    <span style="color: red">*</span>
                                    <div class="input-group date mb-2">
                                        <input type="text" class="form-control" placeholder="DD MM YYYY"
                                               id="kt_datepicker_2" name="notis_tkh_mula"
                                               value="{{ $edit ? date('d/m/Y', strtotime($detNotis->notis_tkh_mula)) : old('NOTIS_TKH_MULA') }}"/>
                                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="flaticon2-calendar-1"></i>
                            </span>
                                        </div>
                                    </div>
                                    <br>
                                    <label>Tarikh Tamat</label>
                                    <span style="color: red">*</span>
                                    <div class="input-group date mb-2">
                                        <input type="text" class="form-control" placeholder="DD MM YYYY"
                                               id="kt_datepicker_3" name="notis_tkh_tamat"
                                               value="{{ $edit ? date('d/m/Y', strtotime($detNotis->notis_tkh_tamat)) : old('NOTIS_TKH_TAMAT') }}"/>
                                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="flaticon2-calendar-1"></i>
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div style="text-align:center;">
                                    <hr/>
                                    <a id="MyContentPlaceHolder_btnBack" class="btn btn-danger"
                                       href="{{ route('urusetia.pengumuman') }}"><i
                                                class="fa fa-chevron-left">&nbsp;</i>Kembali</a>
                                    <input type="submit" value="Simpan" class="btn btn-primary font-weight-bold"/>
                                </div>
                            </div>
        </div>
    </div>

    <input type="hidden" name="notis_pk" value="{{ $edit ? $detNotis->notis_pk : old('notis_pk') }}"/>
    </form>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/pages/Scripts/pengumuman.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/calendar.js') }}"></script>


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
    <script>
        function filterKampus() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'get',
                url: '/dropdown/' + $('#kategori').val(),
                success: function (val) {
                    var content_dropdown = '<option value="">Sila Pilih</option>';
                    for (let x = 0; x < val.length; x++) {
                        content_dropdown += '<option value="' + val[x].kod_fakulti + '">' + val[x].kod_fakulti + ' ' + val[x].deskripsi + '</option>';
                    }
                    $('#organisasi option').remove();
                    $('#organisasi').append(content_dropdown);
                }
            });
        }
    </script>
@endsection