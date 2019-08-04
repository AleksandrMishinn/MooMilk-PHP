$('#btn-prod, #btn-prod-top').click(function() {
    $('#modal').fadeIn(300);
});

$(function() {
    $("#callback-number").mask("+7(999) 999-99-99");
});

$('#modal').on('click', function(e) {
    if (e.target.id == 'modal' || e.target.id == 'close-callback-form') {
        $(this).hide();
        $('#callbackForm')[0].reset();
    }
});