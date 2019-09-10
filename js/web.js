$(document).ready(function(){
    $('#ZipFile').change(function(e){
        var fileName = e.target.files[0].name;
		var ext = fileName.substr(fileName.length - 3);
        if (ext != "zip") {
        	$("#warningP").text("Please input a zip file.")
        	$('#myModal').modal();
        	$('#fileInputAPK').val("");
        }else{
        	$("#apkLabel").text(fileName);
        }
    });
    $('#Screenshot').change(function(e){
        var fileName = e.target.files[0].name;
        var ext = fileName.substr(fileName.length - 3);
        if (ext != "png" && ext != "jpg") {
            $("#warningP").text("Please input a image file.")
            $('#myModal').modal();
            $('#fileInputAPK').val("");
        }else{
            $("#SCfile").text(fileName);
        }
    });
});
