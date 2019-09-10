$(document).ready(function(){
    $('#fileInputAPK').change(function(e){
        var fileName = e.target.files[0].name;
		var ext = fileName.substr(fileName.length - 3);
        if (ext != "apk") {
        	$("#warningP").text("Please input a apk file.")
        	$('#myModal').modal();
        	$('#fileInputAPK').val("");
        }else{
        	$("#apkLabel").text(fileName);
        }
    });
    $('.imgInp').change(function(e){
        var fileName = e.target.files[0].name;
		var ext = fileName.substr(fileName.length - 3);
        if (ext != "png" && ext != "jpg") {
        	$("#warningP").text("Please input a image file.")
        	$('#myModal').modal();
        	$('#fileInputAPK').val("");
        }else{
        	$("#N" + $(this).attr("id")).text(fileName);
        }
    });
});
