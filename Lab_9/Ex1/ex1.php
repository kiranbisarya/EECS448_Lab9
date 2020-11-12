<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<table>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		    $p = $col * $row;
		    echo "<td>$p</td> \n";
		}
	  	    echo "</tr>";
	}
	
echo "</table>";
?>