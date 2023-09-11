var Index = function () {

    // Mixed widgets
    var _initMixedWidget1 = function () {
        var element = document.getElementById("kt_mixed_widget_monthly_chart");
        var height = parseInt(KTUtil.css(element, 'height'));

        if (!element) {
            return;
        }

        var strokeColor = '#D13647';

        var options = {
            series: [{
                name: 'Jumlah Waran',
                data: [10, 45, 32, 70, 40, 40, 40, 40, 60, 90, 40, 20]
            }],
            chart: {
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: strokeColor,
                    opacity: 0.5
                }
            },
            plotOptions: {},
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 0
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [strokeColor]
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    style: {
                        colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                        fontSize: '12px',
                        fontFamily: KTApp.getSettings()['font-family']
                    }
                },
                crosshairs: {
                    show: false,
                    position: 'front',
                    stroke: {
                        color: KTApp.getSettings()['colors']['gray']['gray-300'],
                        width: 1,
                        dashArray: 3
                    }
                }
            },
            yaxis: {
                min: 0,
                max: 80,
                labels: {
                    show: false,
                    style: {
                        colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                        fontSize: '12px',
                        fontFamily: KTApp.getSettings()['font-family']
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    fontFamily: KTApp.getSettings()['font-family']
                },
                y: {
                    formatter: function (val) {
                        return val + " waran"
                    }
                },
                marker: {
                    show: false
                }
            },
            colors: ['transparent'],
            markers: {
                colors: [KTApp.getSettings()['colors']['theme']['light']['danger']],
                strokeColor: [strokeColor],
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    }

    var _varInit = function () {

        var kt_datatable_1 = $('#kt_datatable_1').KTDatatable({
            data: {
                saveState: { cookie: false },
                pageSize: 10,
                autoColumns: false,
            },
            responsive: false,
            search: {
                input: $('#kt_datatable_1_search_query'),
                key: 'generalSearch'
            },
            columns: [
                {
                    field: 'BIL',
                    target: 0,
                    width: 30,
                    textAlign: 'center',
                }, {
                    field: 'NOKP',
                    target: 1,
                    width: 90,
                    textAlign: 'center',
                }, {
                    field: 'NOSTAF',
                    target: 2,
                    width: 300,
                }, {
                    field: 'NAMA',
                    target: 3,
                    width: 100,
                }, {
                    field: 'FAKULTI',
                    target: 4,
                }, {
                    field: 'TKH_MULA',
                    target: 5,
                    type: 'date',
                    format: 'DD-MM-YYYY',
                }, {
                    field: 'TKH_TAMAT',
                    target: 6,
                    type: 'date',
                    format: 'DD-MM-YYYY',
                }, {
                    field: 'TKH_LULUS',
                    target: 7,
                    type: 'date',
                    format: 'DD-MM-YYYY',
                }, {
                    field: 'ACTIONS',
                    target: 8,
                    autoHide: false,
                },
            ]
        });

        var kt_datatable_2 = $('#kt_datatable_2').KTDatatable({
            data: {
                saveState: { cookie: false },
                pageSize: 10,
                autoColumns: false,
            },
            responsive: true,
            search: {
                input: $('#kt_datatable_2_search_query'),
                key: 'generalSearch'
            },
            columns: [
                {
                    field: 'BIL',
                    target: 0,
                    width: 30,
                    textAlign: 'center',
                }, {
                    field: 'NOKP',
                    target: 1,
                    width: 90,
                    textAlign: 'center',
                }, {
                    field: 'NOSTAF',
                    target: 2,
                    width: 300,
                }, {
                    field: 'NAMA',
                    target: 3,
                    width: 100,
                }, {
                    field: 'FAKULTI',
                    target: 4,
                }, {
                    field: 'TKH_MULA',
                    type: 'date',
                    format: 'DD-MM-YYYY',
                }, {
                    field: 'TKH_TAMAT',
                    type: 'date',
                    format: 'DD-MM-YYYY',
                }, {
                    field: 'TKH_LULUS',
                    type: 'date',
                    format: 'DD-MM-YYYY',
                },
            ]
        });

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-full-width",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        $("#IdVisitorTimeVisit").timepicker({ minuteStep: 1, showSeconds: !1, showMeridian: !1, snapToStep: !0 });

        $('#IdOptionKeluar').click(function (e) {
            $('#IdBtnExit').click();
        });

    }
    return {
        init: function () {
            _initMixedWidget1();
            _varInit();
        }
    };
}();

jQuery(document).ready(function () {
    Index.init();
});
