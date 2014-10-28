function send_contact_form() {
	var contact_form_contents = {
		name : $(':text[name="name"]').val(),
		email : $(':text[name="email"]').val(),
		subject : $(':text[name="subject"]').val(),
		message : $('textarea[name="message"]').val()
	};


	$.ajax({
		type: 'POST',
		url: './sendemail.php',
		cache: false,
		data: contact_form_contents,
		success: function(html) {
		},
		error: function() { }
	});
}
