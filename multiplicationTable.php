<?php
/*
    Author: Brandon Lammey
    Date Last Updated: 30 September 2017
    File Name: multiplicationTable.php
    Description: Prints out a times table from 1-100
*/


echo"<link rel='stylesheet' type='text/css' href='myStyle.css' />";
echo "<table border=\"5\">";
	
	//multiply elements and print out each row
  for($i = 0; $i<=100; $i++)
  {
    //print each column
		echo('<tr>');
		for($j =0; $j<=100; $j++)
		{
			if($i==0 && $j==0)
			{
				echo('<td>'. ' '. '</td>');
			}
			else if($i==0)
			{
				echo('<td>'. $j. '</td>');
			}
			else if($j==0)
			{
				echo('<td>'. $i. '</td>');
			}
			else
			{
				echo('<td>'. $i*$j. '</td>');
			}

		}
    echo'</tr>';
    

  }
  echo('</table>');
  echo('<table>');
  
      echo('</br>');
      echo('</br>');
        echo"<a href='index.html'>HOME</a>";
      echo('</br>');
      echo('</br>');
  
     echo('</table>');
  
?>
