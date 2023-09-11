{{-- List Widget 1 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Status</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-8">
        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-lg svg-icon-primary") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Keputusan Peperiksaan Perkhidmatan Kertas I</a>
                <span class="text-muted">LULUS</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-0">
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Communication/Group-chat.svg", "svg-icon-lg svg-icon-success") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Keputusan Peperiksaan Perkhidmatan Kertas II</a>
                <span class="text-muted">LULUS</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-danger mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/General/Attachment2.svg", "svg-icon-lg svg-icon-danger") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Keputusan Peperiksaan Perkhidmatan Kertas III</a>
                <span class="text-muted">LULUS</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-2">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-info mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Communication/Shield-user.svg", "svg-icon-lg  svg-icon-info") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Keputusan Menghadiri Kursus Wajib</a>
                <span class="text-muted">DALAM PROSES</span>
            </div>
        </div>
    </div>
</div>
