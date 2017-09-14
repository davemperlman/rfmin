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
		alert(returned);
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
		alert(returned);
	});
});