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
                            <label>Tarikh Iklan </label>
                            <select name="ctl00$MyContentPlaceHolder$ddlAgama" id="MyContentPlaceHolder_ddlAgama" class="form-control" required="required">
                                <option>Sila Pilih...</option>
                                <option>2019/2020 - 1</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Nama Jawatan </label>
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
                            <label>MyKad Pemohon </label>
                            <input type="text" class="form-control" placeholder="Sila masukkan mykad pemohon" id="kt_datepicker_1" />
                        </div>
                        <div class="col-lg-4">
                            <label>Nama Pemohon </label>
                            <input type="text" class="form-control" placeholder="Sila masukkan nama" id="kt_datepicker_1" />
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
                        <h3 class="card-label"><i class="fa fa-list text-dark"></i>&nbsp;&nbsp;Senarai Calon Yang Ditawarkan
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
                                <th>Bil					</th>
                                <th>Nama Pemohon		</th>
                                <th>Nama Jawatan		</th>
                                <th>Tarikh Ditawarkan	</th>
                                <th>Gaji Permulaan		</th>
                                <th>Surat Tawaran		</th>
                                <th>Emel				</th>
                                <th>Status				</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.	</td>
                                <td>MOHD FAUZI BIN ISMAIL	</td>
                                <td>PEGAWAI TEKNOLOGI MAKLUMAT (FA41)	</td>
                                <td>12/01/2020	</td>
                                <td>RM 2,300		</td>
                                <td class="text-center"><a href="" class="btn btn-primary">Jana</a></td>
                                <td class="text-center">
                                    <a onClick="popitup('{{ route('perlantikan.admin.emailSuratTawaran') }}')"><button id="MyContentPlaceHolder_Button1" class="btn btn-primary" type="submit" title="Emel"><i class="fa fa-envelope"></i></button></a>
                                </td>
                                <td>Surat Tawaran Selesai Disediakan</td>
                            </tr>
                            <tr>
                                <td>2.	</td>
                                <td>MOHD SAZLI BINTI RAHMAN	</td>
                                <td>PEN. PEGAWAI TEKNOLOGI MAKLUMAT (FA29)	</td>
                                <td>12/02/2020	</td>
                                <td>RM 1,800		</td>
                                <td class="text-center"><a href="" class="btn btn-primary">Jana</a></td>
                                <td class="text-center">
                                    <button onclick="__doPostBack('ctl00$MyContentPlaceHolder$Button1','')" id="MyContentPlaceHolder_Button1" class="btn btn-primary" type="submit" title="Emel"><i class="fa fa-envelope"></i></button>
                                </td>
                                <td>Surat Tawaran Selesai Disediakan</td>
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
    <script src="{{ asset('js/pages/Scripts/Lantikan/CalonLayakDitawarkan_table.js') }}"></script>
    <script src="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.js') }}"></script>
    <link href="{{ asset('js/pages/Scripts/Lantikan/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />    
    <script src="{{ asset('js/pages/Scripts/date-euro.js') }}"></script>
    <script type="text/javascript">
        function popitup(url) {
            newwindow=window.open(url,'name','height=660,width=1000');
            if (window.focus) {newwindow.focus()}
            return false;
        }
    </script>

@endsection