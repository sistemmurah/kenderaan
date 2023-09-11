var PendaftaranWaran = function () {
    var _varInit = function () {

        var datatable = $('#IdHasil01CarianPengguna').KTDatatable({
            data: {
                saveState: { cookie: false },
                pageSize: 10,
                autoColumns: false,
            },
            responsive: true,
            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },
            columns: [
                {
                    field: 'NO',
                    target: 0,
                    width: 30,
                    textAlign: 'center',
                }, {
                    field: 'USERID',
                    target: 1,
                    width: 90,
                    textAlign: 'center',
                }, {
                    field: 'NAME',
                    target: 2,
                    width: 300,
                }, {
                    field: 'ICNO',
                    target: 3,
                    width: 100,
                }, {
                    field: 'EMAIL',
                    target: 4,
                }, {
                    field: 'TKH_LUPUT_KATALALUAN',
                    type: 'date',
                    format: 'YYYY-MM-DD',
                }, {
                    field: 'TKH_LUPUT_ID',
                    type: 'date',
                    format: 'YYYY-MM-DD',
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
            _varInit();
        }
    };
}();

jQuery(document).ready(function () {
    PendaftaranWaran.init();
});
