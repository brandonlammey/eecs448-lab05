<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 30 September 2017
    File Name: customerBackEnd.php
    Description: Prints out a reciept for customer
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";

$username = $_POST["username"];
$password = $_POST["password"];

//total for each item
$q1 = $_POST["quantity1"];
$q1Total = $q1 * 250;

$q2 = $_POST["quantity2"];
$q2Total = $q2 * 500;

$q3 = $_POST["quantity3"];
$q3Total = $q3 * 10000;

//shipping
$shipping = $_POST["shipping"];
if($shipping == "7day")
{
  $shipping = "7 Day";
  $shipTotal = 0;
}
else if($shipping == "3day")
{
  $shipping = "3 Day";
  $shipTotal = 5;
}
else if($shipping == "overNight")
{
  $shipping = "Over Night";
  $shipTotal = 50;
}


$total = $q1Total + $q2Total + $q3Total + $shipTotal;


echo "<h3>Your Username: $username</h3>";
echo "<h3>Your Password: $password</h3>";

echo "<table class='tftable' border='1'>";

echo"<tr><th colspan='4'><h3>Reciept</h3></th></tr>";
echo"<tr><td> </td><td>Quantity</td><td>Cost Per Item</td><td>Total</td>";

echo"<tr><td>Black Panther Velvet Boots</td><td bgcolor='#5DB8B8'>$q1</td><td bgcolor='#5DB8B8'>$250</td><td bgcolor='#5DB8B8'>$$q1Total</td>";
echo"<tr><td>Murasaki Violet Silk Kimono</td><td bgcolor='#5DB8B8'>$q2</td><td bgcolor='#5DB8B8'>$500</td><td bgcolor='#5DB8B8'>$$q2Total</td>";
echo"<tr><td>Number 106: Giant Hand</td><td bgcolor='#5DB8B8'>$q3</td><td bgcolor='#5DB8B8'>$10000</td><td bgcolor='#5DB8B8'>$$q3Total</td>";

echo"<tr><td>Shipping</td><td colspan='2' bgcolor='#5DB8B8'>$shipping</td><td bgcolor='#5DB8B8'>$$shipTotal</td>";
echo"<tr><td colspan='3'>Total Cost</td><td>$$total</td>";

echo"</table>";

echo('<table>');

    echo('</br>');
    echo('</br>');
      echo"<a href='index.html'>HOME</a>";
    echo('</br>');
    echo('</br>');

echo('</table>');

?>







