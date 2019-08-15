var url = 'php/addAccount.php';

$('#register').click(function(){
	var username = $('#username').val();
    var email   = $('#email').val();
    var password = $('#password').val();
	   if(!username || !email || !password){
	     alert("fill all");
	   }else{
	    $.post( url, {username: username, email: email, password: password});
	    document.location.href = 'dashboard.php?user=' + username;
	  }
})
