$("#register").click(function(){
	if ($("#username").val() != "" && $("#email").val() != "" && $("#password").val() != "") {
		$.post("php/addAccount.php",{"username": $("#username").val(),"email": $("#email").val(),"password": $("#password").val(),"type": "user"},
		function(data,status){
			console.log(data)
			$("#username").val("");
			$("#email").val("");
			$("#password").val("");
			$("#alert").addClass("alert-"+status);
			$("#alert").text("The user was added " + status +".");
			$("#alert").fadeIn(500);
			setTimeout(hideAlert, 2000);
		})
	}
})

function hideAlert(){
	$("#alert").fadeOut(500);
	$("#alertA").fadeOut(500);
}


$("#userForm").submit(function(e) {
    e.preventDefault();
});

$("#registerA").click(function(){
	if ($("#usernameA").val() != "" && $("#emailA").val() != "" && $("#passwordA").val() != "") {
		$.post("php/addAccount.php",{"username": $("#usernameA").val(),"email": $("#emailA").val(),"password": $("#passwordA").val(), "type": "admin"},
		function(data,status){
			$("#usernameA").val("");
			$("#emailA").val("");
			$("#passwordA").val("");
			$("#alertA").addClass("alert-"+status);
			$("#alertA").text("The admin was added " + status +".");
			$("#alertA").fadeIn(500);
			setTimeout(hideAlert, 2000);
		})
	}
})

function hideAlert(){
	$("#alert").fadeOut(500);
}


$("#userFormA").submit(function(e) {
    e.preventDefault();
});