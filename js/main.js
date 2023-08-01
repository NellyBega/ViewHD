$(document).ready(function() {


    // call function
    if (answer){
        answer.hide();  // hidden result block
    }
    // upTimer();
});

$('.feedback-slider').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ["<img src='../img/left2.png'>","<img src='../img/right2.png'>"],
    items: 2,
    responsive:{
        0:{
            items:1
        },
        750:{
            items:2
        }
    }
});

