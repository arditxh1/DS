$(document).ready(function(){
    $('#fileInputAPK').change(function(e){
        var fileName = e.target.files[0].name;
		var ext = fileName.substr(fileName.length - 4);
        if (ext != "Kodu") {
        	$("#warningP").text("Please input a kodu file.")
        	$('#myModal').modal();
        	$('#fileInputAPK').val("");
            $("#apkLabel").text("");
            $("#linkI").prop("required",true);
        }else{
        	$("#apkLabel").text(fileName);
            $("#linkI").removeAttr("required");
        }
    });
    $('#linkI').change(function(e){
        if ($('#linkI').val() != "") {
            $("#fileInputAPK").removeAttr("required");
        }else{
            $("#fileInputAPK").prop("required",true);
        }
    });
});
