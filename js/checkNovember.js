var date = new Date();
var month = date.getMonth();

if(month == 10){
	$("#ncfInput").css("display","block");
}else{
	$("#ncfInput").remove();
}
