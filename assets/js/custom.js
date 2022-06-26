/******************Scroll Animation JS********************/
AOS.init({
    duration: 1200,
    once: true
});

/****************** Loader JS ********************/
$(window).on ('load', function (){
    // Site Preloader
    $('#site-preloader').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});
});

/****************** Scroll To Top JS ********************/
$(window).on( 'scroll', function(){
    if ($(window).scrollTop() > 600) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});

$(document.body).on('click', '.scrollToTop', function() {
    $('html, body').animate({
        scrollTop: 0
    }, 800);
    return false;
});

/****************** Navbar Fixed Header When Scroll JS ********************/
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});

/****************** Super Investors Slider JS ********************/
$('#super-investors-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});


let percentShow = document.querySelectorAll('.percentshow');
let getPercentShow = Array.from(percentShow);

let percent = document.querySelectorAll('.countbar');
let getPercent = Array.from(percent);

getPercentShow.map((viewPercen) => {
    let startCount = 0;
    let progressPercentCount = () => {
        startCount ++;
        viewPercen.innerHTML = `${startCount}%`;
        if(startCount == viewPercen.dataset.percentnumber){
            clearInterval(percentStop);
        }
    }
    let percentStop = setInterval(() => {
        progressPercentCount();
    },20)
})

getPercent.map((viewline) => {
    console.log(viewline.dataset.percentbarline)
    let countStart = 0;
    let progressbar = () => {
        countStart ++;
        viewline.style.width = `${countStart}%`;
        if(countStart == viewline.dataset.percentbarline) {
            clearInterval(viewlineStop);
        }
    }
    let viewlineStop = setInterval(() => {
        progressbar();
    },20)
})
