$('document').ready(function(){
	var count = $("#TB tr").length;

	$("#Tr1").attr("style","background-color: #e6c900");
	$("#Tr2").attr("style","background-color: #c0c0c0");
	$("#Tr3").attr("style","background-color: #cd7f32");

	$("#Tr1").children().css( "color", "white" );
	$("#Tr2").children().css( "color", "white" );
	$("#Tr3").children().css( "color", "white" );

	$("#place1").css( "font-weight", "bold" );
	$("#place2").css( "font-weight", "bold" );
	$("#place3").css( "font-weight", "bold" );

	$("#place1").css( "font-size", "22px" );
	$("#place2").css( "font-size", "22px" );
	$("#place3").css( "font-size", "22px" );

	$("#Tr1").children().css( "font-size", "18px" );
	$("#Tr2").children().css( "font-size", "18px" );
	$("#Tr3").children().css( "font-size", "18px" );
});

