$("#addRev").click(function(){
	if (RevType == "app") {
		RevType == "projekete_app";
	}
	url = "php/OReview.php";
	rev = $("#starN").text();
	PrId = $("#idM").text();
	PrId = PrId[PrId.length -1];
	  $.post(url,
    {
		rev: rev, PrId: PrId, revOwnerId: revOwnerId, RevType:RevType
    },
    function(data,status){
    	console.log(data);
    });

	//location.reload();
});


