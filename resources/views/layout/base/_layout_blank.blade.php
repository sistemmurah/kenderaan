@if(config('layout.self.layout') == 'blank')
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
@else
    @include('layout.base._content_blank')
    @include('layout.base._footer')
@endif

