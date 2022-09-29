// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$('header').on('mouseenter', function() {
    $('header').addClass('active');
});

$('header').on('mouseleave', function() {
    $('header').removeClass('active');
});

$('.service-card').on('mouseover', function() {
    $(this).find('.description').slideDown(500);
});

$('.service-card').on('mouseleave', function() {
    $(this).find('.description').slideUp(500);
});

$(() => {
    $('#brands-slider').slick({
        slidesToShow: 7,
        arrows: false,
    });

    $('#testimonial-slider').slick({
        slidesToShow: 1,
        arrows: false,
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