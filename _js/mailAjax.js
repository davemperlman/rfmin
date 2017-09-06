var modalMail = $('#modalMail');

modalMail.on('click', function() {
	var data = $('.modal input, .modal textarea').map(function(){
		return this.value;
	}).get().join();
	console.log(data);
		// Post the Data
	$.post( "mail.php", { data: data }, function( returned ) {
		alert(returned);
	})
});