$(document).ready(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

});

$("body").on('click', '[href*="#"]', function(e) {
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top }, 1000);
    e.preventDefault();
});