{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')

<!-- Prepared by: Nurul Natasha Binti Wahi Anuar -->

<!--Mula: Maklumat Penerima -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card card-custom">

            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="fas fa-mail-bulk"></i>
                        Maklumat Penerima
                    </h3>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Jenis Penghantaran<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="jenisPenghantaran">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DISPATCH</option>
                                <option value="3">FRANKIN (SETEM)</option>
                                <option value="4">POS BERDAFTAR</option>
                                <option value="5">POS BERDAFTAR + KAD AR</option>
                                <option value="6">POS LAJU</option>
                                <option value="7">POS ANTARABANGSA</option>
                                <option value="8">KURIER ANTARABANGSA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="jenisPosLaju">
                        <div class="form-group">
                            <label>
                                Jenis Pos Laju<span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="pilihanPosLaju">
                                <option value="1">Sila Pilih</option>
                                <option value="2">DALAM NEGARA</option>
                                <option value="3">LUAR NEGARA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id=carianNoPekerja>
                    <div class="form-group">
                            <label>No. Pekerja</label>
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Cari" />
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="search"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="penerimaLain">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input id="namaPenerima" type="text" class="form-control"
                                placeholder="ROSNAH BINTI AHMAD" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Telefon<span class="text-danger">*</span></label>
                            <input id="no.telPenerima" type="tel" class="form-control" placeholder="0173455544" />
                        </div>
                    </div>
                </div>

                <div class="row" id="penerimaDispatch">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input id="namaPenerima" type="text" class="form-control" disabled="disabled"
                                value="ROSNAH BINTI AHMAD" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Telefon<span class="text-danger">*</span></label>
                            <input id="no.telPenerima" type="tel" class="form-control" disabled="disabled"
                                value="0173455544" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>No.Pekerja<span class="text-danger">*</span></label>
                            <input id="no.pekerjaPenerima" type="number" class="form-control" disabled="disabled"
                                value="7334" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kod PTJ<span class="text-danger">*</span></label>
                            <input id="kodPTJPenerima" type="number" class="form-control" disabled="disabled"
                                value="Kod PTJ" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Jawatan<span class="text-danger">*</span></label>
                            <input id="jawatanPenerima" type="text" class="form-control" disabled="disabled"
                                value="PEGAWAI TEKNOLOGI MAKLUMAT (FA41)" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fakulti/Jabatan<span class="text-danger">*</span></label>
                            <input id="jabatanPemohon" type="text" class="form-control" disabled="disabled"
                                value="JABATAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bahagian<span class="text-danger">*</span></label>
                            <input id="bahagianPemohon" type="text" class="form-control" disabled="disabled"
                                value="BAHAGIAN PERKHIDMATAN DIGITAL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kampus<span class="text-danger">*</span></label>
                            <input id="kampusPenerima" type="text" class="form-control" disabled="disabled"
                                value="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input id="alamatPenerima1" type="text" class="form-control"
                                placeholder="NO.24 JALAN KEMBOJA" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input id="alamatPenerima2" type="text" class="form-control"
                                placeholder="KAMPUNG TASIK PERMAISURI" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Poskod<span class="text-danger">*</span></label>
                            <input id="poskodPenerima" type="text" class="form-control" placeholder="81310" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bandar<span class="text-danger">*</span></label>
                            <input id="bandarPenerima" type="text" class="form-control" placeholder="JOHOR BAHRU" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6" id="negeridalamPenerima">
                        <div class="form-group">
                            <label>
                                Negeri<span class="text-danger">*</span>
                            </label>
                            <select class="form-control">
                                <option>Sila Pilih</option>
                                <option>JOHOR</option>
                                <option>KUALA LUMPUR</option>
                                <option>SELANGOR</option>
                                <option>MELAKA</option>
                                <option>NEGERI SEMBILAN</option>
                                <option>PAHANG</option>
                                <option>PERAK</option>
                                <option>KEDAH</option>
                                <option>PERLIS</option>
                                <option>PULAU PINANG</option>
                                <option>KELANTAN</option>
                                <option>TERENGGANU</option>
                                <option>SABAH</option>
                                <option>SARAWAK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="negeriLuarPenerima">
                        <div class="form-group">
                            <label>Negeri<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Negeri" />
                        </div>
                    </div>
                    <div class="col-lg-6" id="negaradalamPenerima">
                        <div class="form-group">
                            <label>
                                Negara<span class="text-danger">*</span>
                            </label>
                            <select class="form-control">
                                <option>MALAYSIA</option>
                                <option>SINGAPURA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="negaraluarPenerima">
                        <div class="form-group">
                            <label>
                                Negara<span class="text-danger">*</span>
                            </label>
                            <select class="form-control">
                                <option>Sila Pilih</option>
                                <option>SINGAPURA</option>
                                <option>INDONESIA</option>
                                <option>AUSTRALIA</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Tamat: Maklumat Penerima -->

<!-- Mula: Butang Simpan/Kembali -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b card ">
            <div class="card-body text-center">
                <button onclick="window.location = '{{ route('sysmelStaf.tambahSysmel') }}'"
                    class="btn btn-primary font-weight-bold"> Simpan
                </button>
                <button onclick="window.location = '{{ route('sysmelStaf.tambahSysmel') }}'"
                    class="btn btn-danger font-weight-bold"> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Tamat: Butang Simpan/Kembali -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page)-->

<!-- Function to show/hide jenis penghantaran -->
<script>
    $('#jenisPosLaju').hide();
    $('#carianNoPekerja').hide();
    $('#penerimaDispatch').hide();
    $('#negeriLuarPenerima').hide();
    $('#negaraluarPenerima').hide();

    $("#jenisPenghantaran").change(function () {
        if ($(this).val() == 2) {
            $('#carianNoPekerja').show();
            $('#penerimaDispatch').show();
            $('#penerimaLain').hide();
            $('#negeridalamPenerima').show();
            $('#negaradalamPenerima').show();
        } else if ($(this).val() == 6) {
            $('#jenisPosLaju').show();
            $('#negeridalamPenerima').show();
            $('#negaradalamPenerima').show();
        } else if ($(this).val() == 7) {
            $('#negeridalamPenerima').hide();
            $('#negaradalamPenerima').hide();
            $('#negeriLuarPenerima').show();
            $('#negaraluarPenerima').show();
        } else if ($(this).val() == 8) {
            $('#negeridalamPenerima').hide();
            $('#negaradalamPenerima').hide();
            $('#negeriLuarPenerima').show();
            $('#negaraluarPenerima').show();
        } else {
            $('#jenisPosLaju').hide();
            $('#carianNoPekerja').hide();
            $('#penerimaLain').show();
            $('#penerimaDispatch').hide();
            $('#negeridalamPenerima').show();
            $('#negaradalamPenerima').show();
            $('#negeriLuarPenerima').hide();
            $('#negaraluarPenerima').hide();
        }
    });

    $("#pilihanPosLaju").change(function () {
        if ($(this).val() == 2) {
            $('#negeridalamPenerima').show();
            $('#negaradalamPenerima').show();
            $('#negeriLuarPenerima').hide();
            $('#negaraluarPenerima').hide();
        } else if ($(this).val() == 3) {
            $('#negeridalamPenerima').hide();
            $('#negaradalamPenerima').hide();
            $('#negeriLuarPenerima').show();
            $('#negaraluarPenerima').show();
        } else {
            $('#negeridalamPenerima').show();
            $('#negaradalamPenerima').show();
            $('#negeriLuarPenerima').hide();
            $('#negaraluarPenerima').hide();
        }
    });
</script>

@endsection