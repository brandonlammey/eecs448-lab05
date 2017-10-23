<?php

/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: ViewUserPosts.php
    Description: Prints out all user_id from Users in a drop down menu
        Submit will call on ViewUserPosts2.php to print out all content from Posts for user_id = author_id
*/

echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";

        echo"<head> <title>User Posts</title> </head>";

            echo"<h1> View Posts </h1>";
            echo"<br/><br/>";

            $mysqli = new mysqli("mysql.eecs.ku.edu", "blammey", 'P@$$word123', "blammey");

            if ($mysqli->connect_errno)
            {
              printf("Connect failed: %s\n", $mysqli->connect_error);
              exit();
            }

            $username = "SELECT user_id FROM Users";
            echo "<form name='users' action='ViewUserPosts2.php' method='post'>";
            echo "Select User: <select type='text' name='username'><br/>";

            if ($result = $mysqli->query($username))
            {

              while($row = $result->fetch_assoc())
              {
                echo "<option value='" . $row['user_id'] . "'>" . $row["user_id"] . "</option>";
              }

            }
            $mysqli->close();
            echo"</select>";
            echo "</br>";
            echo "</br>";
            echo"<input type='submit'>";
            echo"<br/><br/>";
            echo('<table>');

                echo('</br>');
                echo('</br>');
                  echo"<a href='index.html'>HOME</a>";
                echo('</br>');
                echo('</br>');

            echo('</table>');

            echo"</form>";



    ?>
