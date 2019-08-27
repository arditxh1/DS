$(document).ready(function(){
    $('#fileInputAPK').change(function(e){
        var fileName = e.target.files[0].name;
		var ext = fileName.substr(fileName.length - 4);
        if (ext != "Kodu") {
        	$("#warningP").text("Please input a kodu file.")
        	$('#myModal').modal();
        	$('#fileInputAPK').val("");
        }else{
        	$("#apkLabel").text(fileName);
        }
    });
});
