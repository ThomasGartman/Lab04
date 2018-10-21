<?php
$numberCorrect = 0;
echo "Question 1: What class is this exercise for?<br>";
echo "You Answered: " . $_POST['q1'] . "<br>";
echo "Correct Answer: EECS 448<br><br>";
if($_POST['q1'] == "EECS 448")
{
  $numberCorrect += 1;
}
echo "Question 2: What does EECS recommend as the maximum number of working and academic hours (including out of class work)?<br>";
echo "You Answered: " . $_POST['q2'] . "<br>";
echo "Correct Answer: 60<br><br>";
if($_POST['q2'] == "60")
{
  $numberCorrect += 1;
}
echo "Question 3: How many classes are required to pass EECS 101?<br>";
echo "You Answered: " . $_POST['q3'] . "<br>";
echo "Correct Answer: 11<br><br>";
if($_POST['q3'] == "11")
{
  $numberCorrect += 1;
}
echo "Question 4: What is the math prereq for EECS 210?<br>";
echo "You Answered: " . $_POST['q4'] . "<br>";
echo "Correct Answer: MATH 126/146<br><br>";
if($_POST['q4'] == "MATH 126/146")
{
  $numberCorrect += 1;
}
echo "Question 5: What is the physics prereq for EECS 210?<br>";
echo "You Answered: " . $_POST['q5'] . "<br>";
echo "Correct Answer: None<br><br>";
if($_POST['q5'] == "None")
{
  $numberCorrect += 1;
}
echo "Total Correct: " . $numberCorrect;
?>
