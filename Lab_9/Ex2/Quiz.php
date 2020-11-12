<?php
//access the global array called $_POST to get the values from the text fields
$count = 0;
$q1Answer = $_POST['capital'];
$q2Answer = $_POST['flower'];
$q3Answer = $_POST['city'];
$q4Answer = $_POST['abbrev'];
$q5Answer = $_POST['animal'];


if($q1Answer == "Topeka") {
    $count++;
}

if($q2Answer == "Sunflower") {
    $count++;
}

if($q3Answer == "Wichita") {
    $count++;
}

if($q4Answer == "KS") {
    $count++;
}

if($q5Answer == "Buffalo") {
    $count++;
}

echo "Question 1: What is the capital of Kansas?". "<br>";
echo "You answered: ". $q1Answer . "<br>";
echo "The correct answer is: Topeka" . "<br>";

echo "<br>";

echo "Question 2: What is the state flower of Kansas?". "<br>";
echo "You answered: ". $q2Answer . "<br>";
echo "The correct answer is: Sunflower" . "<br>";
echo "<br>";

echo "<br>";

echo "Question 3: What is biggest city in Kansas?". "<br>";
echo "You answered: ". $q3Answer . "<br>";
echo "The correct answer is: Wichita" . "<br>";
echo "<br>";

echo "<br>";

echo "Question 4: What is the state abbreviation of Kansas?". "<br>";
echo "You answered: ". $q4Answer . "<br>";
echo "The correct answer is: KS" . "<br>";
echo "<br>";
echo "Number Correct: " . $count . "<br>";

echo "<br>";

echo "Question 5: What is the state animal of Kansas?". "<br>";
echo "You answered: ". $q5Answer . "<br>";
echo "The correct answer is: Buffalo" . "<br>";
echo "<br>";

echo "Number Correct: " . $count . "<br>";
echo "Score: " . ($count/5)*100 . "%" . "<br>";

?>