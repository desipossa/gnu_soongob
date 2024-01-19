$(function () {
    $('.main_visual_slide').slick({
        arrows: false,
        dots: true,
        vertical: true,
    });


    $('.mopen').on('click', function () {
        $('.gnb').toggleClass('on')
    });


    $('.gnb').on('wheel', function (e) {
        if ($('.gnb').hasClass('on')) {
            e.preventDefault();
        }
    });

    $(window).on('resize', function () {
        $('.gnb').removeClass('on')
    })



});