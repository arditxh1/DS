$('document').ready(function(){

  sortTable(4);
	var count = $("#TB tr").length;
  $("#username1").css("opacity",0);
  $("#username2").css("opacity",0);
  $("#username3").css("opacity",0);

  function firstPlace() {
      $("td:nth-child(2)").eq(0).first().addClass("animated rotateInDownLeft showO");
  }
  
  function secondPlace() {
      $("td:nth-child(2)").eq(1).first().addClass("animated rotateInDownLeft showO");
  }

  function thirdPlace() {
      $("td:nth-child(2)").eq(2).addClass("animated rotateInDownLeft showO");
  }

  var rowCount = $('#leaderboardT tr').length;
    for (var i = rowCount - 1; i >= 0; i--) {
      $("td:nth-child(1)").eq(i).text(i+1);
    }

  function showAll(){
    for (var i = rowCount - 1; i >= 0; i--) {
      if (i >= 3) {
        $("#username" + i).addClass("animated fadeIn")
      }
    }
  }

  setTimeout(function() { firstPlace(); }, 200);
  setTimeout(function() { secondPlace(); }, 800);
  setTimeout(function() { thirdPlace(); }, 1400);
  setTimeout(function() { showAll(); }, 2000);

	$("td:nth-child(1)").eq(0).css( "font-weight", "bold" );
	$("td:nth-child(1)").eq(1).css( "font-weight", "bold" );
	$("td:nth-child(1)").eq(2).css( "font-weight", "bold" );

	$("tr").eq(1).children().css("color", "#e6c900");
	$("tr").eq(2).children().css("color", "#c0c0c0");
	$("tr").eq(3).children().css("color", "#cd7f32");

	$("tr").eq(1).children().css( "font-size", "19px" );
	$("tr").eq(2).children().css( "font-size", "18px" );
	$("tr").eq(3).children().css( "font-size", "18px" );

  $("td:nth-child(1)").eq(0).css( "font-size", "22px" );
  $("td:nth-child(1)").eq(1).css( "font-size", "21px" );
  $("td:nth-child(1)").eq(2).css( "font-size", "20px" );

});

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("leaderboardT");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "desc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
