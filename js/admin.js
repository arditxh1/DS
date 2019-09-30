var count = 0;	
var found = 0;
var project_types = ["","","","","","",""]
$(document).ready(function(){
	for (var i = Object.keys(all_projects).length - 1; i >= 0; i--) {
		for (var x = Object.keys(all_projects[Object.keys(all_projects)[i]]).length - 1; x >= 0; x--) {
			count++;
			var card = all_projects[Object.keys(all_projects)[i]][x];
			var str = Object.keys(all_projects)[i];
			var type = str.replace("_Obj", "");
			//Clone
			$("#CardC").clone(true).appendTo("#mainD").attr("id", type + "_" + x).addClass("Card" + count )

			//Cover
			if (card["type"] == "code") {
				$("#" + type + "_" + x).children(".imgC").attr("src","images/codeCover.png");
			}else if (card["type"] == "scratch") {
				$("#" + type + "_" + x).children(".imgC").attr("src","images/scratch_cover.png");
			}else if (card["type"] == "kodu") {
				$("#" + type + "_" + x).children(".imgC").attr("src","images/koduC.jpeg");
			}else{
				$("#" + type + "_" + x).children(".imgC").attr("src", card["SCR"]);
			}

			//Title
			$("#" + type + "_" + x).children().children(".card-title").text(card["name"]);

			//Description
			if (card["full"] != null) {
				$("#" + type + "_" + x).children().children(".card-text").text(card["full"]);
			}else{
				$("#" + type + "_" + x).children().children(".card-text").text(card["short"]);
			}

			//MadeBy
			$("#" + type + "_" + x).children().children(".ownerPR").text("Made by: " + card["username"]);

			//View More
			$("#" + type + "_" + x).children().children(".card-link").attr("id", type + "_" + x + "A");

			//Card pending
			if (card["approved"] == 0) {
				$("#" + type + "_" + x).addClass("PendingCard");
				$("#" + type + "_" + x).children().children(".ownerPR").html($("#" + type + "_" + x).children().children(".ownerPR").text() + "<br>" +"Status: "+ "<b>" +"pending."+"</b>");
			}else if (card["approved"] == 2) { 
				$("#" + type + "_" + x).addClass("PendingCard");
				$("#" + type + "_" + x).children().children(".ownerPR").html($("#" + type + "_" + x).children().children(".ownerPR").text() + "<br>" + "<b>" + "Status:" + "<span class='dec'>" + " declined." + "<p>" + "<span>");
			}

			current_badge = $("#" + type + "_" + x).children(".badgesCon");

			//Badges
			if (card["badges"].includes("design")) {
				current_badge.children("#designB").css({"opacity": "0", "display": "block"});
				current_badge.children("#designB").addClass("animated zoomInDown").css("opacity", "1");
			}
			
			if(card["badges"].includes("idea")){
				current_badge.children("#ideaB").css({"opacity": "0", "display": "block"});
				current_badge.children("#ideaB").addClass("animated zoomInDown").css("opacity", "1");
			}

			if(card["badges"].includes("code")){
				current_badge.children("#codeB").css({"opacity": "0", "display": "block"});
				current_badge.children("#codeB").addClass("animated zoomInDown").css("opacity", "1");
			}

			//Icons
			$("#" + type + "_" + x).children().children(".icons").attr("src", "images/" + card['type'] + ".png");
		}
	}

/*	$( ".imgC" ).on("load",function() {
		var cHeight = $(this).height();
		$(this).parent().children(".badgesCon").css("top", cHeight - 24 + "px");
	});*/

  $("#searchI").on("keyup", function() {
  	var found = 0;
    var value = $(this).val().toLowerCase();
    $("#NF").remove();
    $("#mainD .card-title").filter(function() {
      $(this).parent().parent().toggle($(this).text().toLowerCase().indexOf(value) > -1);
      if (!($(this).text().toLowerCase().indexOf(value) > -1)) {
      	found++;
      	  if (found == 12 && $("#NF").text() == "") {
	      	$("<h2 id='NF'>Project not found.</h2>").appendTo("#mainD")
	      }
      }
    });
  });
});


$(".FilterB").click(function(){
	if ($(this).attr("id") == "codeF") {
		filter("images/code.png")
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "scratchF") {
		filter("images/scratch.png")
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "koduF") {
		filter("images/kodu.png");
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "stencylF") {
		filter("images/stencyl.png");
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "appF") {
		filter("images/app.png");
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "webF") {
		filter("images/web.png");
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "wordF") {
		filter("images/app.png");
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	}
	else if ($(this).attr("id") == "allF") {
		$(".FilterB").removeClass("active");
		$(this).addClass("active");
	for (var i = count; i >= 1; i--) {
		$(".Card" + i).show();
		}
	}
});

function filter(type){
	for (var i = count; i >= 1; i--) {
		$(".Card" + i).show();
	}
	for (var i = count; i >= 1; i--) {
	    if ($(".Card" + i).find(".icons").attr("src") != type) {
	    	$(".Card" + i).hide();
	    }
	}
}

function show(){
	$("#fullDesc").show();
	$("#longM").show();
	$("#iconM").show();
	$("#scrM").show();
	$("#cdM").show();
	$("#apkM").show();
	$("br").show();
	$("#linkF").show();
	$("#LinkT").show();
	$("#linkM").show();
	$("#fileM").show();
}
var curentPrRev;
var typeCo;
var test;
var latestRev;
$("a").on("click", function(){
	if ($(this).attr("class") == "card-link") {
		//Get <a> id
		var str = $(this).attr("id");

		//Get project id
		prId = str[str.length -2];

		//Get project type
		str = str.substring(0, str.length - 3);

		//Get pr type for review
		RevType = str + "_projekte";

		//Change name to nest in object
		type = str + "_Obj"

		//Get current project
		var current_pr = all_projects[type][prId];

		//Get project id from object
		var idOfPrR = current_pr["id"];

		curentPrRev = current_pr;

		//Get project owner for review
		revOwnerId = current_pr["user_id"];

		//Get comments for post
		$.post("php/getComments.php",
		  {
		    idOfPr: idOfPrR,
		  },
		  function(data){
		  	comments = JSON.parse(data);
		  	resetComments();
		  	//Create comments
			createComments();
		  });

		//Reset
		show()

		//Get card
		lastCardP = $(this).attr("id").slice(0,-1);

		//Save id for reivew
		dbId = current_pr["id"];

		//Save id for reivew
		dbType = current_pr["type"];

		//Name
		$("#nameM").text(current_pr["name"]);

		//Username
		$("#usernameM").text(current_pr["username"]);

		//Short description
		$("#shortM").text(current_pr["short"]);


		//Full description
		$("#longM").text(current_pr["full"]);

		//Id
		$("#idM").text("Id. " + current_pr["id"]);

		//Link
		$("#linkM").text(current_pr["link"]);

		//Link url
		$("#linkF").attr("href",current_pr["link"]);

		//Icon
		$("#iconMS").attr("src",current_pr["Icon"]);

		//Screenshot preview
		$("#srcMS").attr("src",current_pr["SCR"]);

		//Cover preview
		$("#cdMS").attr("src",current_pr["CD"]);

		//Icon preview
		$("#iconM").attr("href",current_pr["Icon"]);

		//Screenshot url
		$("#scrM").attr("href",current_pr["SCR"]);

		//Cover url
		$("#cdM").attr("href",current_pr["CD"]);

		//Apk url
		$("#apkM").attr("href",current_pr["APK"]);

		//Apk url
		$("#fileM").attr("href", current_pr["file"]);

		//Reciver Id
		receiver_id = current_pr["user_id"];

		//Set text reivew
		if (current_pr["review"] == 11) {
			$("#starN").text("Not reviewed")
		}else{
			$("#starN").text(current_pr["review"]);		

			//Set stars design
			$("#rating" + (current_pr["review"])).attr("checked","checked");
		}

		//Save latest rev to remove checked
		latestRev = current_pr["review"];

		//Equals the type of project with the modal
		cleanUp(current_pr);

		//Save type of project to push comments
		$typeCo = current_pr["type"];

		//Show badges
		if (current_pr["badges"].includes("design")) {
			$("#designBM").show();
		}
		if (current_pr["badges"].includes("code")) {
			$("#codeBM").show();
		}
		if (current_pr["badges"].includes("idea")){
			$("#ideaBM").show();
		}

		//Show modal
		$("#myModal").modal();
	}

});

function cleanUp(project){
	if (project["type"] == "code" || project["type"] == "scratch") {
		$("#fullDesc").hide();
		$("#longM").hide();
		$("#iconM").hide();
		$("#scrM").hide();
		$("#cdM").hide();
		$("#apkM").hide();
		$("#fileM").hide();
	}else if (project["type"] == "kodu") {
		$("#fullDesc").hide();
		$("#longM").hide();
		$("#iconM").hide();
		$("#scrM").hide();
		$("#cdM").hide();
		$("#apkM").hide();
		$("br").hide();
	}else if (project["type"] == "stencyl"){
		$("#fullDesc").hide();
		$("#longM").hide();
		$("#iconM").hide();
		$("#cdM").hide();
		$("#apkM").hide();
		$("#linkF").hide();
		$("#LinkT").hide();
		$("#linkM").hide();
		$("#br1").hide();
	}else if (project["type"] == "app") {
		$("#fileM").hide();
		$("#linkF").hide();
		$("#LinkT").hide();
		$("#linkM").hide();
	}else{
		$("br").hide();
		$("#iconM").hide();
		$("#scrM").hide();
		$("#cdM").hide();
		$("#apkM").hide();
	}
}

var lastCommentL;

function createComments(){
	numC = 0;
	lastCommentL = Object.keys(comments).length;
	for (var i = Object.keys(comments).length - 1; i >= 0; i--) {
		numC++;
		$("#clone-comment").clone(true).appendTo("#modalLeft").attr("id","comment" + numC);
		$("#comment" + numC).addClass("commentR");
        $("#comment" + numC).find(".messageS").text(comments[i]["Mesage"]);
        $("#comment" + numC).find(".username").text(comments[i]["username"]);
        $("#comment" + numC).find(".time").text(comments[i]["time"]);
	}
}

function resetComments(){
	$(".commentR").remove();
}

