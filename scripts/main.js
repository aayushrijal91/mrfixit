AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$('header').on('mouseenter', function () {
    $('header').addClass('active');
});

$('header').on('mouseleave', function () {
    $('header').removeClass('active');
});

$('.service-card').on('mouseover', function () {
    $(this).find('.description').slideDown(500);
});

$('.service-card').on('mouseleave', function () {
    $(this).find('.description').slideUp(500);
});

if ($(document).width() < 540) {
    setInterval(function () { $('header').addClass('active') }, 1000);
}

$(() => {

    $('#brands-slider').slick({
        slidesToShow: 7,
        arrows: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    autoplay: true,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                    autoplay: true,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 2,
                    autoplay: true,
                }
            }
        ]
    });

    $('#testimonial-slider').slick({
        slidesToShow: 1,
        arrows: true,
        slidesToScroll: 1,
        autoplay: true,
    })
})

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});