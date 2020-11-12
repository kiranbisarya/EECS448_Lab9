<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//access the global array called $_POST to get the values from the text fields

$password = $_POST['password'];
$shipping = $_POST['shipping'];
$apple = $_POST['apple'];
$orange = $_POST['orange'];
$grapes = $_POST['grapes'];

$appleCost = $apple;
$orangeCost = $orange * 2;
$grapesCost = $grapes * 3;

$shippingCost = 0;


if($shipping == "7day") 
{
	$shippingCost = 0;
}
else if($shipping == "overnight") 
{
	$shippingCost = 50;
}
else if($shipping == "threeday") 
{
	$shippingCost = 5;
}

$totalCost = $appleCost + $orangeCost + $grapesCost + $shippingCost;

echo "<p style='color: #3366ff'>Welcome to the Web Store!</p>";
echo "<br>";
echo "<p style='color: #3366ff'>The password you entered is: $password </p>";
echo "<br>";
echo "<br>";

echo "
	<table border ='1'>
            
        <tr>
        	<th style='background-color:#99b3ff'> </th>
			<th style='background-color:#99b3ff'>Quantity</th>
			<th style='background-color:#99b3ff'>Cost per Item</th>
			<th style='background-color:#99b3ff'>Subtotal</th>

    	</tr>";
		
		echo "<tr>";
        	echo "<th style='background-color:#99b3ff'>Apples</th>";
			echo "<td style='background-color:#cceeff'>".$apple."</td>";
			echo "<td style='background-color:#cceeff'>$1.00</td>";
			echo "<td style='background-color:#cceeff'>$".$appleCost.".00</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<th style='background-color:#99b3ff'>Oranges</th>";
			echo "<td style='background-color:#cceeff'>".$orange."</td>";
			echo "<td style='background-color:#cceeff'>$2.00</td>";
			echo "<td style='background-color:#cceeff'>$".$orangeCost.".00</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<th style='background-color:#99b3ff'>Grapes</th>";
			echo "<td style='background-color:#cceeff'>".$grapes."</td>";
			echo "<td style='background-color:#cceeff'>$3.00</td>";
			echo "<td style='background-color:#cceeff'>$".$grapesCost.".00</td>";
		echo "</tr>";
		
		echo "<tr>";
        	echo "<th style='background-color:#99b3ff'>Shipping</th>";
			echo "<td style='background-color:#cceeff' colspan='2'>".$shipping."</th>";
			echo "<td style='background-color:#cceeff'>$".$shippingCost.".00</th>";
		echo "</tr>";
		
		echo "<tr>";
        	echo "<th style='background-color:#99b3ff' colspan='3'>Total Cost</th>";
			echo "<td style='background-color:#cceeff'>$".$totalCost.".00</td>";
        echo "</tr>";
    echo "</table>";


    




?>