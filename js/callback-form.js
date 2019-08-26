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
	}else if(e.target.id == 'close-callback-form'){
		console.log($("#callback-name"));
		$.ajax({
			type: "POST",
			dataType: 'json',
			url:"../includes/send_contacts.php",
			data: {name: $("#callback-name"), number: $("#callback-number"), comment: $("#callback-comment")},
			success: function(data) {
				console.log(data);
				$(this).hide();
				$('#callbackForm')[0].reset();
			} 
		})
	}
});

