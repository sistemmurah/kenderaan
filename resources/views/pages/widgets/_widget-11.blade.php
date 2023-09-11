{{-- List Widget 3 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0">
        <h3 class="card-title font-weight-bolder text-dark">Pengumuman</h3>

    </div>

    {{-- Body --}}
    <div class="card-body pt-2">
        @if ( isset ( $pengumuman ) && count($pengumuman) > 0 )
            @foreach($pengumuman as $index => $row)
                <div class="d-flex align-items-center mb-10">
                {{-- Symbol --}}
                <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    <img src="{{ asset('media/svg/icons/General/Lock.svg') }}" class="h-75 align-self-end"/>
                </span>
                </div>

                {{-- Text --}}
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">{{ $row->notis_tajuk }}</a>
                    <span class="text-muted">{{ $row->notis_deskripsi }}</span>
                </div>

                {{-- Dropdown --}}
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Read More" data-placement="left">                    
					<button type="button" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="modal" data-target="#myModalHorizontal<?php echo $index+1; ?>" >
						<i class="ki ki-bold-more-hor" ></i>
					</button>

                </div>
            </div>
                
            @endforeach
        @endif



    </div>
</div>

<!-- Modal -->

@if ( isset ( $pengumuman ) && count($pengumuman) > 0 )
            @foreach($pengumuman as $index => $row)

<div class="modal fade" id="myModalHorizontal<?php echo $index+1; ?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
		    <div>
				<b>{{ $row->notis_tajuk }}</b>
            </div>
            			<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>            <!-- Modal Body -->
        <div class="modal-body">
                <div class="header-btn">
                    <div id="div-physical">
                        <label>                           
							{{ $row->notis_deskripsi }}
                        </label>
                    </div>
        </div>
    </div>

	</div>
</div>
</div>

            @endforeach
        @endif



