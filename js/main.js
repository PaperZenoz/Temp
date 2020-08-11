if ($('.js-review-slick').length > 0) {
    $('.js-review-slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><img src="images/arrow.svg"></button>',
        nextArrow: '<button class="slick-next slick-arrow" aria-label="Previous" type="button"><img src="images/arrow.svg" style="transform: rotate(180deg)"></button>',
        responsive: [
            {
                breakpoint: 1052,
                settings: {
                    slidesToShow: 1,
                }
            }]
    });

}


$(function () {
    $(window).on("scroll", function () {
        var o = $(window).scrollTop() / ($(document).height() - $(window).height());
        $(".c-progressbar__progress").css({
            "width": (100 * o | 0) + "%"
        });
        if (o > 0.99) {
            $(".c-progressbar__progress").css({
                "width": "100%"
            });
        }


    })


});


$('.burger').on('click', function () {
    $('.burger span').toggleClass('active');
    if ($('.burger span').hasClass('active')) {
        $('.c-nav__list').addClass('active');
    } else {
        $('.c-nav__list').removeClass('active');
    }

})


$('.js-modalbtn-1').on('click', function () {
    $('.js-modalblock-1').toggleClass('active');
})


$('.js-modal-switcher').on('click', function () {
    $('.js-modal-content').fadeIn();
})

$('.c-modal__shadow').on('click', function () {
    $('.c-modal').fadeOut();
})


$('.c-modal__close').on('click', function () {
    $(this).parents('.c-modal').fadeOut();
})


$('.js-modal-demo-switcher').on('click' , function () {
    $('.c-modal').fadeOut();
    $('.js-modal-demo-content').fadeIn();
})






$('.js-input-control').on('focusout', function () {
    var inputLenght = ($(this).val().length)


    if (inputLenght === 0) {
        $(this).addClass('error')
        $(this).removeClass('succes')
    } else {
        $(this).removeClass('error')
        $(this).addClass('succes')
    }

})


$('.js-cbx').on('change', function () {
    if($(this).is(':checked')){
        $('.js-cbx--item-2').addClass('active')
        $('.js-cbx--item-1').removeClass('active')
    } else {
        $('.js-cbx--item-1').addClass('active')
        $('.js-cbx--item-2').removeClass('active')
    }
})