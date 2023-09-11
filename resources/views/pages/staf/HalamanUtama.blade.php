{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}


        <div class="row">
        <div class="col-6 col-xxl-4">
            @include('pages.widgets._widget-10', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-6 col-xxl-4">
            @include('pages.widgets._widget-13', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-6 col-xxl-4 order-1 order-xxl-1">
            @include('pages.widgets._widget-11', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
            @include('pages.widgets._widget-12', ['class' => 'card-stretch gutter-b'])
        </div>

    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

@endsection
