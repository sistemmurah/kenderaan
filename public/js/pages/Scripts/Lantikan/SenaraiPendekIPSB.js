"use strict";
var SenaraiPendekIPSB = function () {
    var _dataTableInit = function () {
        var t;

        $("#IdTableList").DataTable({
            responsive: !0,
            //dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            //buttons: ["print", "excelHtml5", "pdfHtml5"],
            buttons: [],
            pageLength: 10,
            "searching": false,
            "paging": false,
            "info": false
            //"ordering": false,
        }),

            $("#export_print").on("click", function (e) { e.preventDefault(), t.button(0).trigger() }),
            $("#export_excel").on("click", function (e) { e.preventDefault(), t.button(2).trigger() }),
            $("#export_pdf").on("click", function (e) { e.preventDefault(), t.button(4).trigger() })
    }

    return {
        // public functions
        init: function () {
            _dataTableInit();
        }
    };
}();

jQuery(document).ready(function () {
    SenaraiPendekIPSB.init();
});