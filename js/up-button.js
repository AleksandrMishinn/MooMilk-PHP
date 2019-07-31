$(document).ready(function() {
    $("#button-up").hide();
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('#button-up').fadeIn();
            } else {
                $('#button-up').fadeOut();
            }
        });
        $('#button-up a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});