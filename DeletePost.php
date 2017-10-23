<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: DeletePost.php
    Description: Prints out all posts inside Posts with selection boxes.
        Submit will call on another DeletePost2.php to delete selected posts
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";

echo"<head> <title>Delete Posts</title> </head>";

/*
<html>
<body>

<form action="/action_page.php" method="get">
  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
  <input type="checkbox" name="vehicle" value="Car" checked> I have a car<br>
  <input type="submit" value="Delete">
</form>

</body>
</html>
*/

echo"<h1> Delete Posts </h1>";
echo"<br/><br/>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$posts = "SELECT author_id, content FROM Posts";

//echo "Select User: <select type='text' name='username'><br/>";

echo "<form name='users' action='DeletePost2.php' method='post'>";

echo "<table class='tftable' border='1'>";
//echo"<tr><th colspan='3'><h3> Posts </h3></th></tr>";
echo"<tr><th style='text-align:center'>Delete</th><th style='text-align:center'>User</th><th style='text-align:center'>Post</th></tr>";
if ($result = $mysqli->query($posts))
{

  while($row = $result->fetch_assoc())
  {
    echo"<tr><td><input type='checkbox' name='deletePost[]' value='" . $row['content'] . "'> </td> <td style='text-align:center'>" . $row["author_id"] . "</td> <td style='text-align:left'>". $row["content"] . "</td>"; 
    //echo "<option value='" . $row['user_id'] . "'>" . $row["user_id"] . "</option>";
    //echo "<option value='" . $row['user_id'] . "'>" . $row["user_id"] . "</option>";
  }
  echo "</tr>";
}
echo('</table>');

echo('<table>');
echo "</br></br>";
echo "<input type='submit'>";
echo "</br></br>";
echo('</table>');

echo "</form>";
$mysqli->close();

echo('<table>');

    echo('</br>');
    echo('</br>');
      echo"<a href='index.html'>HOME</a>";
    echo('</br>');
    echo('</br>');

echo('</table>');


?>