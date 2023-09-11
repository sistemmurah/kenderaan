{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--begin::Subheader-->
    @include('shared._breadcrumb')

    <!-- Mula: Maklumat Takwim -->
    <div class="card card-custom">

        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Takwim Peperiksaan Perkhidmatan
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
                </a>
            </div>
        </div>  

        <div class="card-body">
            <div id="kt_calendar"></div>
            <div style='clear:both'></div>
        </div>
    </div>
    <!-- Tamat: Maklumat Takwim -->
<br>
    <!-- Mula: Maklumat Peperiksaan -->
    <div class="card card-custom gutter-b card card-custom">

        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    <i class="fas fa-id-card"></i>
                    Maklumat Peperiksaan
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"
                data-toggle="tooltip" data-placement="top" title="Toggle Card">
                <i class="ki ki-arrow-down icon-nm"></i>
            </a>
        </div>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Tahun / Sesi</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="2021 / 1" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Kod Peperiksaan</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="01 - Peperiksaan Perkhidmatan Kumpulan Pengurusan dan Profesional, Kumpulan Pelaksana dan yang setaraf dengan Gred 29 hingga 41" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Kod Kertas</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="Kertas 1 - Pengurusan Universiti & Perlembagaan Malaysia" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Tarikh Permohonan</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="02/03/2021 - 02/04/2021" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Masa</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="09:00 Pagi - 11:00 Pagi" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Kapasiti</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="15 Orang Sahaja" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Lokasi Peperiksaan</label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-group">
                    <input id="namaPemohon" type="text" class="form-control" disabled="disabled"
                    value="Dewan Kuliah N24, UTM Johor Bahru" />
                </div>
            </div>
        </div>

    </div>

    <!-- Tamat: Maklumat Peperiksaan -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<script>
    var KTCalendarListView = function() {
        return {
            //main function to initiate the module
            init: function() {
                var todayDate = moment().startOf('day');
                var YM = todayDate.format('YYYY-MM');
                var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                var TODAY = todayDate.format('YYYY-MM-DD');
                var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                var calendarEl = document.getElementById('kt_calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],

                    isRTL: KTUtil.isRTL(),
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,listYear'
                    },

                    height: 800,
                    contentHeight: 750,
                    aspectRatio: 3, // see: https://fullcalendar.io/docs/aspectRatio

                    views: {
                        dayGridMonth: {
                            buttonText: 'Bulan'
                        },
                        timeGridWeek: {
                            buttonText: 'Minggu'
                        },
                        timeGridDay: {
                            buttonText: 'Hari'
                        },
                        listDay: {
                            buttonText: 'Senarai'
                        },
                        listWeek: {
                            buttonText: 'Senarai'
                        },
                        listYear: {
                            buttonText: 'Senarai'
                        }
                    },

                    defaultView: 'dayGridMonth',
                    defaultDate: TODAY,

                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    navLinks: true,
                    events: [
                        //looping foreach dalam ni. refer nota takwim
                        
                        {
                            title: 'All Day Event',
                            start: YM + '-01',
                            description: 'Toto lorem ipsum dolor sit incid idunt ut',
                            className: "fc-event-danger fc-event-solid-warning"
                        },
                        {
                            title: 'Reporting',
                            start: YM + '-14T13:30:00',
                            description: 'Lorem ipsum dolor incid idunt ut labore',
                            end: YM + '-14',
                            className: "fc-event-success"
                        },
                        {
                            title: 'Company Trip',
                            start: YM + '-02',
                            description: 'Lorem ipsum dolor sit tempor incid',
                            end: YM + '-03',
                            className: "fc-event-primary"
                        },
                        {
                            title: 'ICT Expo 2017 - Product Release',
                            start: YM + '-03',
                            description: 'Lorem ipsum dolor sit tempor inci',
                            end: YM + '-05',
                            className: "fc-event-light fc-event-solid-primary"
                        },
                        {
                            title: 'Dinner',
                            start: YM + '-12',
                            description: 'Lorem ipsum dolor sit amet, conse ctetur',
                            end: YM + '-10'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: YM + '-09T16:00:00',
                            description: 'Lorem ipsum dolor sit ncididunt ut labore',
                            className: "fc-event-danger"
                        },
                        {
                            id: 1000,
                            title: 'Repeating Event',
                            description: 'Lorem ipsum dolor sit amet, labore',
                            start: YM + '-16T16:00:00'
                        },
                        {
                            title: 'Conference',
                            start: YESTERDAY,
                            end: TOMORROW,
                            description: 'Lorem ipsum dolor eius mod tempor labore',
                            className: "fc-event-primary"
                        },
                        {
                            title: 'Meeting',
                            start: TODAY + 'T10:30:00',
                            end: TODAY + 'T12:30:00',
                            description: 'Lorem ipsum dolor eiu idunt ut labore'
                        },
                        {
                            title: 'Lunch',
                            start: TODAY + 'T12:00:00',
                            className: "fc-event-info",
                            description: 'Lorem ipsum dolor sit amet, ut labore'
                        },
                        {
                            title: 'Meeting',
                            start: TODAY + 'T14:30:00',
                            className: "fc-event-warning",
                            description: 'Lorem ipsum conse ctetur adipi scing'
                        },
                        {
                            title: 'Happy Hour',
                            start: TODAY + 'T17:30:00',
                            className: "fc-event-info",
                            description: 'Lorem ipsum dolor sit amet, conse ctetur'
                        },
                        {
                            title: 'Dinner',
                            start: TOMORROW + 'T05:00:00',
                            className: "fc-event-solid-danger fc-event-light",
                            description: 'Lorem ipsum dolor sit ctetur adipi scing'
                        },
                        {
                            title: 'Birthday Party',
                            start: TOMORROW + 'T07:00:00',
                            className: "fc-event-primary",
                            description: 'Lorem ipsum dolor sit amet, scing'
                        },
                        {
                            title: 'Click for Google',
                            url: 'http://google.com/',
                            start: YM + '-28',
                            className: "fc-event-solid-info fc-event-light",
                            description: 'Lorem ipsum dolor sit amet, labore'
                        }
                    ],

                    eventRender: function(info) {
                        var element = $(info.el);

                        if (info.event.extendedProps && info.event.extendedProps.description) {
                            if (element.hasClass('fc-day-grid-event')) {
                                element.data('content', info.event.extendedProps.description);
                                element.data('placement', 'top');
                                KTApp.initPopover(element);
                            } else if (element.hasClass('fc-time-grid-event')) {
                                element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                            } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                            }
                        }
                    }
                });

                calendar.render();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTCalendarListView.init();
    });
</script>

@endsection