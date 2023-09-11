"use strict";

var KeluargaTambah = function () {
    var _dataTableInit = function () {
        var months = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var tkh_tutup_iklan = $('#TKH_TUTUP_IKLAN').val();
        var _text = tkh_tutup_iklan.split("/");
        var _day = _text[0];
        var _month = _text[1] * 1;
        var _year = _text[2];  


        // Set the date we're counting down to
        var countDownDate = new Date(months[_month]+" "+_day+", "+_year+" 10:05:00").getTime();

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

            // Display the result in the element with id="demo"
            //document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            //    + minutes + "m " + seconds + "s ";
            if (days < 10) { days = "0" + days;}
            document.getElementById("hari").innerHTML = days;

            if (hours < 10) { hours = "0" + hours; }
            document.getElementById("jam").innerHTML = hours;

            if (minutes < 10) { minutes = "0" + minutes; }
            document.getElementById("minit").innerHTML = minutes;

            if (seconds < 10) { seconds = "0" + seconds; }
            document.getElementById("saat").innerHTML = seconds;





            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("hari").innerHTML = "--";
                document.getElementById("jam").innerHTML = "--";
                document.getElementById("minit").innerHTML = "--";
                document.getElementById("saat").innerHTML = "--";
                swal.fire({
                    text: "Harap, tempoh permohonan telah tamat.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
                    }
                }).then(function () {
                    KTUtil.scrollTop();
                });

            }
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










