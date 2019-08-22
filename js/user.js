
$('#TB').click(function(){
	var target = $(event.target);
	console.log(target);
	if (!target.is('button')) {
		$("#RatingStars").show();
		editId = parseInt($(target).attr('id').substr(-1));
		console.log($(target).attr('id').substr(-1));
		$('#exampleModal').modal();
		$('#emriAM').text($("#Emri" + editId).text());
		$('#emriDM').text($("#username" + editId).text());
		$('#sdM').text($("#Short" + editId).text());
		$('#ldM').text($("#Full" + editId).text());
		$("#exampleModalLabel").text("Project of " + $("#username" + editId).text());
		$("#starN").text($("#Rev" + editId).text());
		$('#idM').text($("#Id" + editId).text());
		dbId = $("#Id" + editId).text();
		$("#rating" + $("#Rev" + editId).text()).attr("checked","");
		lastUser = $("#emriDM").text();
		lastId = $("#idM").text();
		ownerId = $("#user_id" + editId).text();
	}	
});

$("#closeM").click(function(){
	$("#rating" + $("#Rev" + editId).text()).removeAttr("checked");
});

$('#exampleModal').on('hidden.bs.modal', function (e) {
	$("#rating" + $("#Rev" + editId).text()).removeAttr("checked");
});

$("#addRev").click(function(){
	url = "php/OReview.php";
	id = dbId;
	  $.post(url,
    {
		rev: rev, id: id, lastUser: lastUser, lastId: lastId, ownerId: ownerId
    },
    function(data,status){
    });

	location.reload();
});


