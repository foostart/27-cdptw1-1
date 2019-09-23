$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn(400);
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut(400);
                $(this).toggleClass('open');
            });
});
    