$(function() {

    var video = $('#myvideo');

    var WindowWidth = $(window).width();

    if (WindowWidth < 480) {
        //It is a small screen
        video.append("<source src='img/mobilecroped.mp4' type='video/mp4'>");
    } else {
        //It is a big screen or desktop
        video.append("<source src='img/VideoLaptop.mp4' type='video/mp4'>");
    }

    $('.carousel-sliders').owlCarousel({
        loop: true,
        nav: true,
        navText: ["<img src='../img/left.png'>","<img src='../img/right.png'>"],
        items: 1
    });

    $('.glasses-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        navText: ["<img src='../img/left2.png'>","<img src='../img/right2.png'>"],
        items: 1
    });

    $('.cocoen').cocoen();

    var newDate = new Date();

    $('#datepicker1').html((newDate.getDate() - 3) + '.' + (newDate.getMonth() + 1) + '.' + newDate.getFullYear());
    $('#datepicker2').html(newDate.getDate() + '.' + (newDate.getMonth() + 1) + '.' + newDate.getFullYear());

    $("#order-but, #get-off, #call, #deliv").click(function() {
        $('html, body').animate({
            scrollTop: $("#glasses").offset().top
        }, 1000);
    });
    $("#info").click(function() {
        $('html, body').animate({
            scrollTop: $("#impression").offset().top
        }, 1000);
    });

});
