$('document').ready(function(){
	var count = $("#TB tr").length;

	$("#place1").css( "font-weight", "bold" );
	$("#place2").css( "font-weight", "bold" );
	$("#place3").css( "font-weight", "bold" );

	$("#place1").css( "font-size", "22px" );
	$("#place2").css( "font-size", "22px" );
	$("#place3").css( "font-size", "22px" );

	$("#Tr1").children().css("color", "#e6c900");
	$("#Tr2").children().css("color", "#c0c0c0");
	$("#Tr3").children().css("color", "#cd7f32");

	$("#Tr1").children().css( "font-size", "18px" );
	$("#Tr2").children().css( "font-size", "18px" );
	$("#Tr3").children().css( "font-size", "18px" );

	sortTable(4);
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
