var modalMail = $('#modalMail');
var emailForm = $('#emailForm');

modalMail.submit( function(event) {
	event.preventDefault();
	var data = $('.modal input, .modal textarea').map(function(){
		return this.value;
	}).get().join();
	console.log(data);

		// Post the Data
	$.post( "mail.php", { data: data }, function( returned ) {
		$('#modalMail').fadeOut();
		$('.modal-body').append("<p class='text-center'>" + returned + "</p>");
	});
});

emailForm.submit( function(event) {
	event.preventDefault();
	var data = $('#emailForm input, #emailForm textarea').map(function(){
		return this.value;
	}).get().join();
	console.log(data);

		// Post the Data
	$.post( "mail.php", { data: data }, function( returned ) {
		$('#emailForm').fadeOut();
		console.log(returned);
		$('.well').append("<p class='text-center'>" + returned + "</p>");
		$('.well').delay('2000').fadeOut('1000');

	});
});