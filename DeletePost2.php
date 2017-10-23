<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: DeletePost2.php
    Description: Prints out all content from Posts that were selected for deletion.
        Deletes selected posts from Posts database. Outputs appropriate error messages. 
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";
$mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

echo "<table class='tftable' border='1'>";
echo"<tr><th colspan='3' style='text-align:center'><h2>Deleted Posts</h2></th></tr>";

echo"<tr><th style='text-align:center'>Post ID</th><th style='text-align:center'>User</th><th style='text-align:center'>Post</th></tr>";


if(empty($_POST['deletePost']))
{
    echo"<tr><th colspan='3' style='text-align:center'>No Option Selected</th></tr>";
}
else
{
    foreach($_POST['deletePost'] as $selected)
    {
        $posts = "SELECT author_id, post_id FROM Posts WHERE content='$selected'";
        
        $result = $mysqli->query($posts);
        $row = $result->fetch_assoc();
        

        $sql = "DELETE FROM Posts WHERE content='$selected'";
        if ($mysqli->query($sql) === TRUE) 
        {
            echo"<tr><th style='text-align:center'>" . $row['post_id'] . "</th><th style='text-align:center'>" . $row['author_id'] . "</th><th>$selected</th></tr>";            
        } 
        else 
        {
            echo"<tr><th style='text-align:center'>" . $row['post_id'] . "<th colspan='2' style='text-align:center'> ERROR DELETING POST! </th></tr>";
            echo $mysqli->error;
        }        
    }
}
echo('</table>');

$mysqli->close();

echo('<table>');

    echo('</br>');
    echo('</br>');
      echo"<a href='index.html'>HOME</a>";
    echo('</br>');
    echo('</br>');

echo('</table>');

?>