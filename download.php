<?php
// get user inputs from session or database
$complete_name = $_SESSION['complete_name'];
$email = $_SESSION['email'];
$birthdate = $_SESSION['birthdate'];
$score = $_SESSION['score'];
$answers = $_SESSION['answers'];

// create results string
$results = "Complete Name: $complete_name\n";
$results .= "Email: $email\n";
$results .= "Birthdate: $birthdate\n";
$results .= "Score: $score out of 10\n";
$results .= "Answers:\n";
foreach ($answers as $key => $value) {
  $results .= $key . " (" . ($value ? "correct" : "incorrect") . ")\n";
}

// save results to file
$file = fopen("results.txt", "w");
fwrite($file, $results);
fclose($file);

// download results file
header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="results.txt"');
readfile('results.txt');
?>


