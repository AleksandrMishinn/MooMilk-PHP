$('#btn-prod, #btn-prod-top').click(function() {
    $('#modal').fadeIn(300);
});

$(function() {
	$('#callback-number').mask("+7(999) 999-99-99");
});

$('#modal').on('click', function(e) {
	if (e.target.id == 'modal') {
		$(this).hide();
		$('#callbackForm')[0].reset();
	}
})

$('#modal').submit(function(){

var name = document.getElementById('callback-name').value;
var number = document.getElementById('callback-number').value;
var comment = document.getElementById('callback-comment').value;

	$.post(
        '../includes/send_contacts.php', 
         {name: name, number: number, comment: comment},         

        function(msg) { 
        	$('#modal').hide('slow');
        	$('#my_message').html(msg);
        }
        );

	return false;
});


