{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <input type="hidden" id="IdPathServer" value="@_path" xmlns="http://www.w3.org/1999/html">

    <!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!--begin::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="flaticon2-list-3"></i> Maklumat Permohonan</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--begin: page content-->
            <div>
                <div class="row">
                    <!--mula: row kiri-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Nama Staf</b></label>
                            <input type="text" class="form-control mb-1" name=""
                                   value="" required="required"
                                   placeholder="KHAIRUL ANUAR BIN ABDUL RAHMAN" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Fakulti/Jabatan</b></label>
                            <input type="text" TextBox ID="txtID" runat="server" class="form-control rounded-corner"
                                   name="" value=""
                                   placeholder="FAKULTI KEJURUTERAAN/JABATAN ICT" required="required" disabled="disabled"/>
                        </div>

                    </div>
                    <!--tamat: row kiri-->
                    <!--mula: row kanan-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>No. Pekerja</b></label>
                            <input type="text" class="form-control" name=""
                                   value="" required="required"
                                   placeholder="17000" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>No. Kad Pengenalan</b></label>
                            <input type="text" class="form-control mb-6" name=""
                                   value="" required="required"
                                   placeholder="910110-01-2345" disabled="disabled"/>
                        </div>

                        <!--tamat: row kanan-->
                    </div>
                </div>


            </div>
            <!--end: page content-->
        </div>
    </div>
    <!--end::Card-->
    <br/>
    <!--mula::Card-->
    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label"><i class="flaticon-folder"></i> Maklumat Perkhidmatan</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                   data-toggle="tooltip" data-placement="top" title="Toggle Card">
                    <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>

        <div class="card-body">

            <!--mula: page content-->
            <div>
                <div class="row">
                    <!--mula: row kiri-->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><b>Jawatan</b></label>
                            <input type="text" class="form-control mb-1" name="ALAMAT1"
                                   value="" required="required"
                                   placeholder="PENOLONG JURUTERA (JA29)" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Taraf Jawatn</b></label>
                            <input type="text" class="form-control mb-1" name="ALAMAT1"
                                   value="" required="required"
                                   placeholder="Tetap" disabled="disabled"/>
                        </div>
                    </div>
                    <!--tamat: row kiri-->
                    <!--mula: row kanan-->
                    <div class="col-lg-6">


                        <div class="form-group">
                            <label><b>Tarikh Lantikan Jawatan Terkini</b></label>
                            <input type="text" class="form-control mb-1" name=""
                                   value="" required="required"
                                   placeholder="10/11/2019" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label><b>Tarikh Sah Jawatan</b></label>
                            <input type="text" class="form-control mb-1" name=""
                                   value="" required="required"
                                   placeholder="-" disabled="disabled"/>
                        </div>

                        <!--tamat: row kanan-->
                    </div>
                </div>
            </div>
            <!--end: page content-->

        </div>

    </div>
    <!--end::Card-->
    <br/>
    <!-- Mula: Maklumat Peperiksaan -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="flaticon-list-3"></i>
                    Maklumat Peperiksaan
                </h3>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5">
                <div class="row align-items-center">

                </div>
            </div>

            <!-- Mula: Datatable-->
            <table class="table table-bordered table-hover table-light table-bordered" id="kt_datatable">
                <thead style="background-color:#fcf4a3">
                <tr>
                </tr>
                <tr>
                    <th>Bil.</th>
                    <th>Nama Peperiksaan</th>
                    <th style="text-align: center">Kod Peperiksaan</th>
                    <th style="text-align: center">Tarikh Peperiksaan</th>
                    <th style="text-align: center">Lokasi</th>
                    <th style="text-align: center">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="text-align: center">1</td>
                    <td>KERTAS 1 (Pengurusan Universiti & Perlembangan Universiti) </td>
                    <td style="text-align: center">01</td>
                    <td style="text-align: center">12/05/2021</td>
                    <td style="text-align: center">DSI</td>
                    <td style="text-align: center">Setuju</td>

                </tr>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td>KERTAS 2 (Syarat Perkhidmatan)</td>
                    <td style="text-align: center">01</td>
                    <td style="text-align: center">13/05/2021</td>
                    <td style="text-align: center">DSI</td>
                    <td style="text-align: center">Setuju</td>
                </tr>
                </tr>
                <tr>
                    <td style="text-align: center">3</td>
                    <td>KERTAS 3 (Peraturan Kewangan)</td>
                    <td style="text-align: center">01</td>
                    <td style="text-align: center">14/05/2021</td>
                    <td style="text-align: center">DSI</td>
                    <td style="text-align: center">Setuju</td>
                </tr>
                </tr>
                </tbody>
            </table>
            <!-- Tamat: Datatable-->
        </div>
    </div>
    <!-- Tamat: Maklumat Peperiksaan -->



    </br>

    <div class="card card-custom" data-card="true" id="kt_card_1">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="form-group row">
            </div>

            <div id="MyContentPlaceHolder_savebtn">
                <div class="col-lg-19">
                    <div style="text-align: center;">
                        <button class="btn btn-primary font-weight-bold" style="align-items: center"> Cetak
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection