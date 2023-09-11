{{-- Mixed Widget 10 --}}

<div class="card card-custom bg-gray-100 {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 bg-danger py-0">
        <h3 class="card-title font-weight-bolder text-white">Profile Staf</h3>
        <div class="card-toolbar">

        </div>
    </div>
    {{-- Body --}}
    <div class="card-body p-0 position-relative overflow-hidden">
        {{-- Chart --}}
        <div class="card-rounded-bottom bg-danger" style="height: 150px"></div>

        {{-- Stats --}}
        <div class="card-spacer mt-n25">
            {{-- Row --}}
            <div class="row m-0">
                <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                    {{ Metronic::getSVG("media/svg/icons/Media/Equalizer.svg", "svg-icon-3x svg-icon-warning d-block my-2") }}
                    <a href="#" class="text-warning font-weight-bold font-size-h6">
                        Jumlah Kehadiran Kursus
                    </a>
                </div>
                <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                    {{ Metronic::getSVG("media/svg/icons/Communication/Clipboard-list.svg", "svg-icon-3x svg-icon-primary d-block my-2") }}
                    <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">
                        Baki Kursus Yang Perlu Dihadiri
                    </a>
                </div>
                <div class="row m-0">
                    <div class="col bg-light-warning px-10 py-8 rounded-xl mr-7 mb-7">
                        {{ Metronic::getSVG("media/svg/icons/Media/Equalizer.svg", "svg-icon-3x svg-icon-warning d-block my-2") }}
                        <a href="#" class="text-warning font-weight-bold font-size-h6">
                            Jumlah Mata CPD
                        </a>
                    </div>
                    <div class="col bg-light-primary px-10 py-8 rounded-xl mb-7">
                        {{ Metronic::getSVG("media/svg/icons/Communication/Clipboard-list.svg", "svg-icon-3x svg-icon-primary d-block my-2") }}
                        <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">
                            Jumlah Mata CIS
                        </a>
                    </div>
                </div>
            </div>
            {{-- Row --}}

        </div>
    </div>
</div>
