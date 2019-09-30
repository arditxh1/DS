$("#addRev").click(function(){
	if (RevType == "app_projekte") {
		RevType == "projekete_app";
	}
	url = "php/OReview.php";
	rev = $("#starN").text();
	PrId = $("#idM").text();
	PrId = PrId.replace("Id.", "");
	  $.post(url,
    {
		rev: rev, PrId: PrId, revOwnerId: revOwnerId, RevType:RevType
    },
    function(data,status){
    	console.log(data);
    });

	//location.reload();
});


