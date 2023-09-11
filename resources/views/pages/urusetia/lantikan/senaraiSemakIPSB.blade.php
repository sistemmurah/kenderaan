{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<input type="hidden" id="IdPathServer" value="@_path">

<!--begin::Subheader-->
@include('shared._breadcrumb')
<div class="d-flex flex-column-fluid">
        <div class="container">
            <!-- Semak Permohonan Baru -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-search text-dark"></i>&nbsp;&nbsp;Carian</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Tarikh Iklan</label>
                            <select name="ctl00$MyContentPlaceHolder$ddlAgama" id="MyContentPlaceHolder_ddlAgama" class="form-control" required="required">
                                <option>Sila Pilih...</option>
                                <option>2019/2020 - 1</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label><b>Nama Jawatan</b></label>
                            <select name="ctl00$MyContentPlaceHolder$ddlAgama" id="MyContentPlaceHolder_ddlAgama" class="form-control" required="required">
                                <option value="" selected="selected">Sila Pilih</option>
                                <option value="">FA41A - PEGAWAI TEKNOLOGI MAKLUMAT (FA41)</option>
                                <option value="">FA41B - PEGAWAI TEKNOLOGI MAKLUMAT, GRED 41/44</option>
                                <option value="">FA44A - PEGAWAI TEKNOLOGI MAKLUMAT KANAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>MyKad Pemohon</label>
                            <input type="text" class="form-control" placeholder="Sila masukkan mykad pemohon" id="kt_datepicker_1" />
                        </div>
                        <div class="col-lg-4">
                            <label>Nama Pemohon</label>
                            <input type="text" class="form-control" placeholder="Sila masukkan nama" id="kt_datepicker_1"  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr />
                        </div>
                    </div>
                    <div id="MyContentPlaceHolder_savebtn">
                        <div class="col-lg-12">
                            <div style="text-align: center;">
                                
                                <a id="MyContentPlaceHolder_btnSearch" class="btn btn-primary" href="javascript:__doPostBack(&#39;ctl00$MyContentPlaceHolder$btnSearch&#39;,&#39;&#39;)"><i class="fa fa-search"></i> Cari</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Senarai Permohonan Baru -->
            <div class="card card-custom" data-card="true" id="kt_card_1">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Semak IPSB
</h3>
                    </div>

                    <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
                            <i class="ki ki-arrow-down icon-nm text-dark"></i>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
                        <thead class="colored">
                            <tr>
                                <th>Bil</th>
                                <th>MyKad</th>
                                <th>Nama Pemohon</th>
                                <th>Tarikh Menjawab</th>
                                <th>Bil Jawab</th>
                                <th>Jalinan</th>
                                <th>Wawasan</th>
                                <th>Keperihatinan</th>
                                <th>Efisyen</th>
                                <th>Kestabilan Emosi</th>
                                <th>Tidak Kongruen</th>
                                <th>Keputusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="MaklumatIpsbPemohon.aspx?id=1">910110150102</a></td>
                                <td>BUNGA</td>
                                <td>05/03/2020</td>
                                <td>61</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA RENDAH</td>
                                <td>SEDERHANA RENDAH</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>LAYAK KE PERINGKAT SARINGAN</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="MaklumatIpsbPemohon.aspx?id=2">910520016368</a></td>
                                <td>SITI UMAIRAH BINTI MOHD TAHIR</td>
                                <td>04/03/2020</td>
                                <td>61</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>LAYAK KE PERINGKAT SARINGAN</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="MaklumatIpsbPemohon.aspx?id=3">960202145549</a></td>
                                <td>MUHAMMAD IKMAL IMAN BIN MOHD ROSLAN</td>
                                <td>04/03/2020</td>
                                <td>61</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>LAYAK KE PERINGKAT SARINGAN</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="MaklumatIpsbPemohon.aspx?id=1">910110150102</a></td>
                                <td>BUNGA</td>
                                <td>05/03/2020</td>
                                <td>61</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA RENDAH</td>
                                <td>SEDERHANA RENDAH</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>LAYAK KE PERINGKAT SARINGAN</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td><a href="MaklumatIpsbPemohon.aspx?id=2">910520016368</a></td>
                                <td>SITI UMAIRAH BINTI MOHD TAHIR</td>
                                <td>04/03/2020</td>
                                <td>61</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>LAYAK KE PERINGKAT SARINGAN</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td><a href="MaklumatIpsbPemohon.aspx?id=3">960202145549</a></td>
                                <td>MUHAMMAD IKMAL IMAN BIN MOHD ROSLAN</td>
                                <td>04/03/2020</td>
                                <td>61</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>TINGGI</td>
                                <td>SEDERHANA TINGGI</td>
                                <td>LAYAK KE PERINGKAT SARINGAN</td>
                            </tr>
                        </tbody>
                    </table>




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