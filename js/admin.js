$('tr').click(function(){
	var target = $(event.target);
	if (!target.is('button')) {
		console.log(target.nodeName);
		editId = parseInt($(this).attr('id').substr(-1));
		$('#exampleModal').modal();
		$('#emriAM').text($("#Emri" + editId).text());
		$('#emriDM').text($("#username" + editId).text());
		$('#sdM').text($("#Short" + editId).text());
		$('#ldM').text($("#Full" + editId).text());
		$("#exampleModalLabel").text("Project of " + $("#username" + editId).text());
		$("#starN").text($("#Rev" + editId).text());
		dbId = $("#Id" + editId).text();
		$("#rating" + $("#Rev" + editId).text()).attr("checked","");
		lastUser = $("#emriDM").text();
	}	
});

$("#closeM").click(function(){
	$("#rating" + $("#Rev" + editId).text()).removeAttr("checked");
});

$('#exampleModal').on('hidden.bs.modal', function (e) {
	$("#rating" + $("#Rev" + editId).text()).removeAttr("checked");
});

$("#addRev").click(function(){
	url = "php/review.php";
	id = dbId;
	  $.post(url,
    {
		rev: rev, id: id, lastUser: lastUser
    },
    function(data,status){
    });

	//location.reload();
});


