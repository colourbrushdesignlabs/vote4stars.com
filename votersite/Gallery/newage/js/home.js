$(document).ready(function() {
    startTime();
    // header toggle
    $(".nav-toggle-icon").on(" click", function() {
        var hdrTop = $(".top-header").outerHeight();
        var hdrBtm = $(".header-bottom").outerHeight();
        var totalHeight = hdrTop + hdrBtm;
        console.log(totalHeight);
        $(this).toggleClass("close");
        $("nav#nav").toggleClass("open");
        if ($('nav#nav').hasClass('open')) {
            $('body').css('overflow', 'hidden');
            $('nav#nav').css("top", totalHeight);
        } else {
            $('body').css('overflow', 'auto');

        }
    });
    var $carousel = $('.carousel');

    $carousel
        .slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            nextArrow: '<i class="fa fa-chevron-right"></i>',
            prevArrow: '<i class="fa fa-chevron-left"></i>',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    
                }
            }, ]

        })
        .magnificPopup({
            type: 'image',
            delegate: 'a:not(.slick-cloned)',
            gallery: {
                enabled: true
            },
            callbacks: {
                open: function() {
                    var current = $carousel.slick('slickCurrentSlide');
                    $carousel.magnificPopup('goTo', current);
                },
                beforeClose: function() {
                    $carousel.slick('slickGoTo', parseInt(this.index));
                }
            }
        });
    //show more
    $('.moreless-button').click(function() {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "More to explore") {
            $(this).text("Less to explore")
        } else {
            $(this).text("More to explore")
        }
    });
    // form open
    $(".btn-submit").on("click", function() {
        $(".na-suggestion-box").addClass("active");
        $('body').css('overflow', 'hidden');
    });

    $(".close").on("click", function() {
        $(".na-suggestion-box").removeClass("active");
        $('body').css('overflow', 'auto');
    });

    //run time form validation
    checkNameEmpty("#icon");
    checkNameEmpty("#sector");
    checkNameEmpty("#opt");
    checkNameEmpty("#name");
    checkNameEmpty("#yourSector");
    checkValidEmail("#mail");
    $("#submitForm").click(function() {
        if ($("#icon").val() == '') {
            $("#icon").css('border', '1px solid red');
            return false;
        }
        if ($("#sector").val() == '') {
            $("#sector").css('border', '1px solid red');
            return false;
        }
        if ($("#opt").val() == '') {
            $("#opt").css('border', '1px solid red');
            return false;
        }
        if ($("#name").val() == '') {
            $("#name").css('border', '1px solid red');
            return false;
        }
        if ($("#yourSector").val() == '') {
            $("#yourSector").css('border', '1px solid red');
            return false;
        }

        if ($("#mail").val() == '') {
            $("#mail").css('border', '1px solid red');
            return false;
        }

        if ($("#mail").val() != '') {
            var email = $("#mail").val();
            if (!validateEmail(email)) {
                return false;
            }
        }


    });
});

function checkNameEmpty(inputID) {
    $(inputID).blur(function() {

        if ($(this).val() == '') {
            $(this).css('border', '1px solid red');

        } else {
            $(this).css('border', '1px solid green');

        }
    });
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function checkValidEmail(emailInputID) {
    $(emailInputID).blur(function() {
        var email = $(emailInputID).val();
        if (validateEmail(email)) {
            $(this).css('border', '1px solid green');

        } else {
            $(this).css('border', '1px solid red');
        }
    });


}



function makeTimer() {
    var endTime = new Date("15 April 2020 9:56:00 GMT+01:00");
    endTime = (Date.parse(endTime) / 1000);

    var now = new Date();
    now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

    if (hours < "10") { hours = "0" + hours; }
    if (minutes < "10") { minutes = "0" + minutes; }
    if (seconds < "10") { seconds = "0" + seconds; }

    $("#days").html(days + "<span>Days</span>");
    $("#hours").html(hours + "<span>Hours</span>");
    $("#minutes").html(minutes + "<span>Minutes</span>");
    $("#seconds").html(seconds + "<span>Seconds</span>");

}

setInterval(function() { makeTimer(); }, 1000);
// header scroll
$(window).scroll(function() {
    if ($(this).scrollTop() > 0) {
        $('.header-bottom').addClass("is-fixed");
    } else { $('.header-bottom').removeClass("is-fixed"); }
});


//clock

function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curMonth + " " + curDay + ", " + curYear + ", " + curWeekDay;
    document.getElementById("date").innerHTML = date;

    var time = setTimeout(function() { startTime() }, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}




//clock