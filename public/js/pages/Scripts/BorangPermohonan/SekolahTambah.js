"use strict";

window.onload = function () {
    $('#PMRTable').css({ 'display': 'none' });
    $('#SPMTable').css({ 'display': 'none' });

    var _kat_kelas = $('#IdModalItemTahap').val();
    if (_kat_kelas == "79") {
        $('#PMRTable').css({ 'display': 'block' });
    }
    if (_kat_kelas == "78") {
        $('#SPMTable').css({ 'display': 'block' });
    }

}

$(document).ready(function () {
    $('#IdModalItemTahap').change(function () {
        if ($(this).val() == "79") {
            $('#79').css({ 'display': 'block' });
        } else {
            $('#79').css({ 'display': 'none' });
        }
        if ($(this).val() == "78") {
            $('#78').css({ 'display': 'block' });
        } else {
            $('#78').css({ 'display': 'none' });
        }
    });
});

$(document).ready(function () {

    $("#IdModalItemSubjekSPMBM").change(function (event) {
        alert("You have Selected  :: " + $(this).val());
    });
});