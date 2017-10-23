<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: CreateUser.php
    Description: Creates a user_id inside User.
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";
$username = $_POST["username"];
$query = "SELECT user_id FROM Users WHERE user_id = '$username'";
$add = "INSERT INTO Users (user_id) VALUES ('$username')";

//echo "<h3>Your Username: $username</h3>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

if($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}

if($username == NULL || $username == "")
{
	echo('</br>');
	echo "<h3>No username entered! No record created in database.</h3>";
}
else if($mysqli->query($query) === true)
{
	echo('</br>');
	printf("<h3>Username already exists! No record created in database.</h3>");
}
else
{
	if($mysqli->query($add) === true)
	{
		echo('</br>');
		printf("<h3>Record created in database!</h3>");
	}
	else
	{
		echo('</br>');
		printf("<h3>Error adding record!</h3>");
	}

}

echo('<table>');

    echo('</br>');
    echo('</br>');
		echo('</br>');
      echo"<a href='index.html'>HOME</a>";
    echo('</br>');
		echo('</br>');
    echo('</br>');

echo('</table>');


$mysqli->close();
?>
