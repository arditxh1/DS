 $('.card-link' || 'tr').click(function(){
	var target = $(event.target);
	if (!target.is('button')) {
		console.log($(this));
		console.log(($(this).attr('id')));
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

$(function() {
	$('#togg').bootstrapToggle({
	  on: 'Cards',
	  off: 'Table'
	});
	$('#togg').change(function() {
		var temp = $(this).prop('checked');
	  if (temp == false) {
	  	$("#mainD").hide();
	  	$("#table").show();
	  }else{
	  	$("#table").hide();
	  	$("#mainD").show();
	  }
	})
})

$('#searchI').keypress(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		urlS = "dashboardAdmin.php?search=" + $("#searchI").val();
		window.location = urlS;
	}
});

 $('th').click(function(){
	  if ($(this).text().substr(-1) =="▼") {
	    var temp = $(this).text()
	    var string = temp.substring(0, temp.length - 1);
	    $(this).text(string + " ▲")
	  }else{
	    var temp = $(this).text()
	    var string = temp.substring(0, temp.length - 2);
	    console.log(string);
	    $(this).text(string + " ▼")
	  }
});