<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: ViewUsers.php
    Description: Prints out all user_id in User.
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";
$mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

if($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}

$username = "SELECT user_id FROM Users";

echo "<table class='tftable' border='1'>";
echo"<tr><th colspan='1'><h3>Users</h3></th></tr>";

if($result = $mysqli->query($username))
{


  while($row = $result->fetch_assoc())
  {
    $temp = $row["user_id"];
    echo"<tr><td> $temp </td>";
    //printf($row["user_id"]);

  }
  $result->free();
}
echo"</table>";

echo('<table>');

    echo('</br>');
    echo('</br>');
      echo"<a href='index.html'>HOME</a>";
    echo('</br>');
    echo('</br>');

echo('</table>');


?>
