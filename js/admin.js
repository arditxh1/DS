var count = 0;
var currentCharColors = ["#00B2C0","#FBA51E","#22AB9C","#E54D26","#A4CE48","#9D2B20"]
var found = 0;
var project_types = ["","","","","","",""];
var yearlyData = {};
var maxYChar = 0;
var ParsedResult;
var categoryVal = {Code: 0, Scratch: 0, Kodu: 0, Web:0, App: 0, Stencyl:0};
var codeLineChart = {
              label: 'Code',
              backgroundColor: 'transparent',
              borderColor: currentCharColors[0],
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: []
            };

var ScratchLineChart = {
              label: 'Scratch',
              backgroundColor: 'transparent',
              borderColor: currentCharColors[1],
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: []
            };

var KoduLineChart = {
              label: 'Kodu',
              backgroundColor: 'transparent',
              borderColor: currentCharColors[2],
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: []
            };

var StencylLineChart = {
              label: 'Stencyl',
              backgroundColor: 'transparent',
              borderColor: currentCharColors[5],
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: []
            }

var AppLineChart = {
              label: 'App',
              backgroundColor: 'transparent',
              borderColor: currentCharColors[4],
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: []
            }

var WebLineChart = {
              label: 'Web',
              backgroundColor: 'transparent',
              borderColor: currentCharColors[3],
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: []
            };
var lineChartProjects = [codeLineChart, ScratchLineChart, KoduLineChart, StencylLineChart, AppLineChart, WebLineChart];
$(document).ready(function(){
	for (var i = Object.keys(all_projects).length - 1; i >= 0; i--) {
		for (var x = Object.keys(all_projects[Object.keys(all_projects)[i]]).length - 1; x >= 0; x--) {
			count++;
			var card = all_projects[Object.keys(all_projects)[i]][x];
			var str = Object.keys(all_projects)[i];
			var type = str.replace("_Obj", "");

			var pushChartPieType = card["type"].charAt(0);
			categoryVal[pushChartPieType.toUpperCase() + card["type"].slice(1)] += 1;
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
			$("#" + type + "_" + x).children().children(".card-text").text(card["short"]);
			
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

			//NCF
			if (card["ncf"] == 1) {
				console.log(1);
				$("#" + type + "_" + x).children().children(".icons").clone(true).insertAfter($("#" + type + "_" + x).children().children(".card-link")).attr("id", "ncf" + x);
				$("#ncf" + x).attr("src", "images/ncff.png");
				$("#ncf" + x).css("margin-left", "60px");
			}
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
  $.post("php/getYearlyData.php", function(result){
    if ($.trim(result)) {
    	ParsedResult = JSON.parse(result);
    	console.log(ParsedResult);
    	for (var i = ParsedResult.length - 1; i >= 0; i--) {
    		for (var x = 0; x <= 11; x++) {
    			if (maxYChar < parseInt(ParsedResult[i][x])) {
    				maxYChar = parseInt(ParsedResult[i][x]);
    			}
    			if (i == 0) {
					AppLineChart.data.push(parseInt(ParsedResult[i][x]));
    			} else if (i == 1){
    				codeLineChart.data.push(parseInt(ParsedResult[i][x]));
    			} else if (i == 2){
    				KoduLineChart.data.push(parseInt(ParsedResult[i][x]));
    			} else if (i == 3){
    				ScratchLineChart.data.push(parseInt(ParsedResult[i][x]));
    			} else if (i == 4){
    				StencylLineChart.data.push(parseInt(ParsedResult[i][x]));
    			} else if (i == 5){
    				WebLineChart.data.push(parseInt(ParsedResult[i][x]));
    			}
    		}
    	}
    	lineChart();
    }
});
  loadCharts();
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
var $typeCo;
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

		//Set title of modal
		$("#exampleModalLabel").text("Project of " + current_pr["username"]);

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

		if (current_pr["link"] != "") {
			//Link
			$("#linkM").text(current_pr["link"]);

			//Link url
			$("#linkF").attr("href",current_pr["link"]);
		}
			else
		{
			$("#linkF").hide();
			
			$("#linkM").hide();
		}

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

		//Check if the proejct is reviewed
		if (current_pr["review"] == 11) {
			admReview = "Not reviewed";
		}else{
			admReview = current_pr["review"];
		}
		//Admin review
		$("#admRevP").text(admReview+"/10");
		var APR;

		//Get average public review
		$.post("php/APR.php",
		  {
		    idOfPr: current_pr["id"], typeOfPr: current_pr["type"], user_id: current_pr["user_id"]
		  },
		  function(data){
		  	console.log(data);
		  	//Public review
		  	$("#pubRevP").text(data +"/10");
		  });

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
	loadChart();
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
	}else if (project["type"] == "stencyl"){
		$("#fullDesc").hide();
		$("#longM").hide();
		$("#iconM").hide();
		$("#cdM").hide();
		$("#apkM").hide();
		$("#linkF").hide();
		$("#LinkT").hide();
		$("#linkM").hide();
	}else if (project["type"] == "app") {
		$("#fileM").hide();
		$("#linkF").hide();
		$("#LinkT").hide();
		$("#linkM").hide();
	}else{
		$("#iconM").hide();
		//$("#scrM").hide();
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

/*$(document).on("click", ".chart-note", function(){
	if($(this).css("text-decoration").includes("line-through")){
		$(this).css("text-decoration", "none");
		if ($(this).find("#chartTextLine").text() == "Code") {
			lineChartProjects.splice(1, 1);
		}
	}else{
		$(this).css("text-decoration", "line-through");
		if ($(this).find("#chartTextLine").text() == "Code") {
			lineChartProjects.push(codeLineChart);
		}
	}
		lineChart();
})
*/
function loadCharts(){
	var ctx = document.getElementById("percent-chart");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: Object.values(categoryVal),
              backgroundColor: currentCharColors,
              hoverBackgroundColor: [
              ],
              borderWidth: [
                0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: Object.keys(categoryVal)
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false
          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16
          }
        }
      });
    }


}

function lineChart(){
    var elements = 12;

    var ctx = document.getElementById("recent-rep-chart");
    if (ctx) {
      ctx.height = 250;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November','December'],
          datasets: lineChartProjects
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
              },
              ticks: {
                fontFamily: "Poppins",
                fontSize: 12
              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 5,
                stepSize: maxYChar/5,
                max: maxYChar+(maxYChar/5),
                fontFamily: "Poppins",
                fontSize: 12
              },
              gridLines: {
                display: true,
                color: '#f2f2f2'

              }
            }]
          },
          elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
            }
          }
        }
      });
    }
}