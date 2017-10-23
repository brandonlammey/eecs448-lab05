<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: ViewUserPosts2.php
    Description: Prints out all content from Posts from a selected author_id.
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";
$mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$user = $_POST["username"];

$posts = "SELECT post_id, content FROM Posts WHERE author_id='$user'";

echo "<table class='tftable' border='1'>";
echo"<tr><th colspan='1'><h3> User: $user </h3></th></tr>";

if ($result = $mysqli->query($posts))
{

  if($row = $result->fetch_assoc())
  {
    echo "<tr><td>".$row['content']."</td>";
    while ($row = $result->fetch_assoc())
    {
      echo "<tr><td>".$row['content']."</td>";
      //printf ($row["content"]);
    }
  }
  else
  {
    echo "<tr><td> User has no posts. </td>";
  }

   $result->free();
   
}

echo"</table>";
$mysqli->close();

echo('<table>');

    echo('</br>');
    echo('</br>');
      echo"<a href='index.html'>HOME</a>";
    echo('</br>');
    echo('</br>');

echo('</table>');

?>
