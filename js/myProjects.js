$(document).ready(function(){
	//$("#CardC").hide();
	for (var i = Object.keys(all_projects).length - 1; i >= 0; i--) {
		for (var x = Object.keys(all_projects[Object.keys(all_projects)[i]]).length - 1; x >= 0; x--) {
			var card = all_projects[Object.keys(all_projects)[i]][x];
			var str = Object.keys(all_projects)[i];
			var type = str.replace("_Obj", "");
			//Clone
			$("#CardC").clone(true).appendTo("#mainD").attr("id", type + "_" + x);

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

			$("#" + type + "_" + x).children().children(".card-link").attr("id", type + "_" + x + "A");

			//Icons
			$("#" + type + "_" + x).children().children(".icons").attr("src", "images/" + card['type'] + ".png");

		}
	}
})


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

$("a").on("click", function(){
	if ($(this).attr("class") == "card-link") {
		var str = $(this).attr("id");
		prId = str[str.length -2];
		str = str.substring(0, str.length - 3);
		type = str + "_Obj"
		var current_pr = all_projects[type][prId];

		show()

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

		//Equals the type of project with the modal
		cleanUp(current_pr);

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
