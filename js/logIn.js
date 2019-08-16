if ($('#contentA').text() == "Wrong Username ! The username was not found in the server.") {
	$('#alert').addClass("alert-warning");
	$('#alert').removeClass("alert-danger");
}else{
	$('#alert').hide();
}