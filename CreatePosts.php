<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: CreatePost.php
    Description: Creates content inside Posts only when author_id = user_id inside Users.
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";
$username = $_POST["username"];
$text = $_POST["textEntry"];

$query = "SELECT user_id FROM Users";
$add = "INSERT INTO Posts (content, author_id) VALUES ('$text', '$username')";
$checker = false;



$mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

	if($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

$result = $mysqli->query($query);


//check for appropriate input since Foreign key not working

	if($username == NULL || $username == "")
	{
		echo('</br>');
		echo ("<h3>No username entered! No record created in database.</h3>");
	}
	else if($text == NULL || $text == "")
	{
		echo('</br>');
	  echo ("<h3>No text entered! No record created in database.</h3>");
	}
	else if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			if($row["user_id"] == $username)
			{
				$checker = true;
			}
		}

		if($checker == true)
		{
			if($mysqli->query($add) === true)
			{
				echo('</br>');
				echo("<h3>Record created in database!</h3>");
			}
			else
			{
				echo('</br>');
				echo("<h3>Error adding record.</h3>");
			}
		}
		else
		{
			echo('</br>');
			echo("<h3>Username does not exist! No record created in database.</h3>");
		}
	}
	else
	{
		echo('</br>');
		echo("<h3>Username does not exist! No record created in database.</h3>");
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




//echo "<h3>Your Username: $username</h3>";
//echo "<h4>Your Message: $text</h4>";
$mysqli->close();
?>
