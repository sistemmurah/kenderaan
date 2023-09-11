{{-- Topbar --}}



<div class="topbar">
 



<div class="dropdown">
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-clean btn-dropdown btn-lg mr-1 btn-default" style="color:black">
        	<i class="fas fa-exchange-alt"></i>
            @if( isset( $_GET['role'] ) )
                {{ session('role_name') }}
			@elseif( session('role_id') )
				{{ session('role_name')}}
			@else
				Staf
            @endif
        </div>
    </div>

    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
		<ul class="navi navi-hover py-2">
			@if( isset( $_GET['role'] ) )
				@if(count(Auth::user()->perananPlural) > 1)
					
					@foreach(Auth::user()->perananPlural as $peranan)
						@if(session('role_id') != $peranan->peranan_pk)
							<li class="navi-item"><a class="navi-link" href="/staf?role={{$peranan->peranan_pk}}"><span class="navi-text">
							{{ $peranan->peranan_nama }} 
							</span></a></li>
						@endif
					@endforeach		
				@endif	
			@else
				@foreach(Auth::user()->perananPlural as $peranan)
								
					@if($peranan->peranan_pk != session('role_id') )
					<li class="navi-item"><a class="navi-link" href="/staf?role={{$peranan->peranan_pk}}"><span class="navi-text">
					{{ $peranan->peranan_nama }} 
					</span></a></li>
					@endif
				@endforeach				
			@endif
		</ul>
    </div>
</div>         

		 {{-- User --}}
    @if (config('layout.extras.user.display'))
        @if (config('layout.extras.user.layout') == 'offcanvas')
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <!-- <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span> -->
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->PENG_NAMA}}</span>
                    <span class="symbol symbol-35 symbol-light-success">
                        <!-- <span class="symbol-label font-size-h5 font-weight-bold">Z</span> -->
                        <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                        	<img class="h-100" src="{{asset('/media/users/blank.png')}}">
                        </div>
                    </span>
                </div>
            </div>
        @else
            <div class="dropdown">
                {{-- Toggle --}}
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Zul Hilmi</span>
                        <span class="symbol symbol-35 symbol-light-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">Z</span>
                        </span>
                    </div>
                </div>

                {{-- Dropdown --}}
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    @include('layout.partials.extras.dropdown._user')
                </div>
            </div>
        @endif
    @endif
</div>
