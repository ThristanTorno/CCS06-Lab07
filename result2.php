<?php
session_start();

if (!isset($_SESSION['complete_name']) || !isset($_SESSION['email']) || !isset($_SESSION['birthdate']) || !isset($_SESSION['answers'])) {
    header('Location: index.php');
    exit();
}

$questions = array(
    array(
        'question' => 'What is the capital of France?',
        'answer' => 'Paris'
    ),
    array(
        'question' => 'What is the largest country in the world by land area?',
        'answer' => 'Russia'
    ),
  array(
        'question' => 'What is the capital of Japan?',
        'answer' => 'Tokyo'
  array(
        'question' => 'What is the capital of the Philippines?',
        'answer' => 'Manila'
  array(
        'question' => 'What is the capital of Korea?',
        'answer' => 'Seoul'
  array(
        'question' => 'What is the capital of China?',
        'answer' => 'Beijing'
  array(
        'question' => 'What is the capital of Spain?',
        'answer' => 'Madrid'
  array(
        'question' => 'What is the capital of Indonesia?',
        'answer' => 'Jakarta'
  array(
        'question' => 'What is the capital of Singapore?',
        'answer' => 'Singapore'
  array(
        'question' => 'What is the capital of Thailand?',
        'answer' => 'Bangkok'









    // add more questions here
);

$num_questions = count($questions);
$answers = $_SESSION['answers'];
$score = 0


