<?php
/*
    Author: Brandon Lammey
    Date Last Updated: 23 October 2017
    File Name: quiz.php
    Description: Prints out quiz results by comparing user input to correct option.
*/

//correct solutions
$q1 = $_POST["q1"];
$a1 = "b) The Rack";

$q2 = $_POST["q2"];
$a2 = "a) A Judas Chair";

$q3 = $_POST["q3"];
$a3 = "c) A Metal Bull";

$q4 = $_POST["q4"];
$a4 = "d) The Scavenger's Daughter";

$q5 = $_POST["q5"];
$a5 = "d) The Breaking Wheel";

//Score variables
$score = 0;
$total = 5;
$percentage = 0;

//Output solutions and calculate score
echo "<h3>Question 1: A person having their limbs stretched by ropes, under the control of a torturer who adjusted the tension by means of a crank, was known as what?</h3>";
echo "Your Answer: $q1<br>";
echo "Correct Answer: $a1<br>";
if($q1 == $a1)
{
  $score += 1;
  echo "CORRECT";
}
else
{
 echo "INCORRECT";
}

echo "<h3>Question 2: A wooden pyramid which the victim was forced to sit upon was called what?</h3>";
echo "Your Answer: $q2<br>";
echo "Correct Answer: $a2<br>";
if($q2 == $a2)
{
  $score += 1;
  echo "CORRECT";
}
else
{
 echo "INCORRECT";
}

echo "<h3>Question 3: What was the Brazen Bull?</h3>";
echo "Your Answer: $q3<br>";
echo "Correct Answer: $a3<br>";
if($q3 == $a3)
{
  $score += 1;
  echo "CORRECT";
}
else
{
 echo "INCORRECT";
}

echo "<h3>Question 4: A device which was the opposite of the infamous Rack, this implement compressed the body.</h3>";
echo "Your Answer: $q4<br>";
echo "Correct Answer: $a4<br>";
if($q4 == $a4)
{
  $score += 1;
  echo "CORRECT";
}
else
{
 echo "INCORRECT";
}

echo "<h3>Question 5: This instrument involved taking a victim's arms and legs and shattering them by weaving them through it.</h3>";
echo "Your Answer: $q5<br>";
echo "Correct Answer: $a5<br>";
if($q5 == $a5)
{
  $score += 1;
  echo "CORRECT";
}
else
{
 echo "INCORRECT";
}

//Output Score
$percentage = ($score/$total)*100;
echo "<h2> You got $score out of $total correct</h2>";
echo "<h2>Your Score: $percentage%</h2>";

echo("<a href='index.html'>HOME</a>");
?>
