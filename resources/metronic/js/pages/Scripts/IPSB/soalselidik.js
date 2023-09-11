"use strict";

var KeluargaTambah = function () {
    var _dataTableInit = function () {
        // Set the date we're counting down to
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        var date = new Date();
        var s = date.getSeconds() + 2; // asal + 1
        var m = date.getMinutes() + 30;    // + 30
        var h = date.getHours();
        if (m > 60) { m = m - 60; h = h + 1; }

        var y = date.getUTCFullYear() + 1;
        var d = date.getDate();


        var countDownDate = new Date(months[date.getMonth()] + " " + d + ", " + y + " " + h + ":" + m + ":" + s).getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);


            if (minutes < 10) {
                document.getElementById("minit").innerHTML = " 0" + minutes;
            }
            else {
                document.getElementById("minit").innerHTML = minutes;
            }
            if (seconds < 10) {
                document.getElementById("saat").innerHTML = " 0" + seconds;
            }
            else { document.getElementById("saat").innerHTML = seconds; }




            if (minutes == 0 && seconds == 0) {
                document.getElementById("minit").innerHTML = "--";
                document.getElementById("saat").innerHTML = "--";

                swal.fire({
                    text: "Harap, Maaf masa menjawab telah tamat. Sekiranya anda belum selesai anda diminta untuk mengulanginya.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                }).then(function () {
                    KTUtil.scrollTop();
                });

               
               





                setTimeout(function () {

                    document.getElementById("myID").submit();

                }, 4000);

            }


            // If the count down is over, write some text 

        }, 1000);

    }

    return {
        // public functions
        init: function () {
            _dataTableInit();
        }
    };

}();

jQuery(document).ready(function () {
    KeluargaTambah.init();
});

function verify() {

    var start = 0;
    var verify = true;
    while (start < 61) {
        const rbs = document.querySelectorAll('input[name="ListSoalan['+start+'].SKALA_JAWAPAN"]');
        let _adakontrak;
        for (const rb of rbs) {
            if (rb.checked ) {
                _adakontrak = rb.value;               
                document.getElementById("ListSoalan[" + start + "].SKALA_JAWAPAN").style.color = "black";
                break;
            }            
        }
        if (_adakontrak == null) {
            document.getElementById("ListSoalan[" + start + "].SKALA_JAWAPAN").style.color = "red";
            document.getElementById('ListSoalan[' + start + '].SKALA_JAWAPAN_A').style.color = "red";
            verify = false;
        }       
        start = start + 1;
    }

    
    if (verify == false) {
        swal.fire({
            title: "Perhatian!",
            text: "Sila semak sebelum menghantar"
        });       
        return false;
    }







}













