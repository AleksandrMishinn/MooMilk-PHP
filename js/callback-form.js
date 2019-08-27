$('#btn-prod, #btn-prod-top').click(function() {
    $('#modal').fadeIn(300);
});

$(function() {
	$('#callback-number').mask("+7(999) 999-99-99");
});

$('#modal').on('click', function(e) {
	if (e.target.id == 'modal') {
		console.log(1);
		$(this).hide();
		$('#callbackForm')[0].reset();
	}
})

$('#close-callback-form').on('click', function(e) {
	if (e.target.id == 'close-callback-form') {
		console.log(2);
		
	}
});
				// $(this).hide();
				// $('#callbackForm')[0].reset();} 
	

$.ajax({
			type: "GET",
			url:"send_contacts.php",
			data: 1,
			success: function(data) {
				console.log('kek');
			}
			})

console.log(3);