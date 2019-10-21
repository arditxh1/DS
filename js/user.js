$("#addRev").click(function(){
	if (RevType == "app_projekte") {
		RevType == "projekete_app";
	}
	url = "php/OReview.php";
	rev = $("#starN").text();
	PrId = $("#idM").text();
	PrId = PrId.replace("Id.", "");
	const d = new Date();
    dateN = monthNames[d.getMonth()] + " " + d.getDate() + " at " + d.getHours() + ":" + d.getMinutes();
	  $.post(url,
    {
		rev: rev, PrId: PrId, revOwnerId: revOwnerId, RevType:RevType, dateN: dateN
    },
    function(data,status){
    	//console.log(data);
    });

	//location.reload();
});


