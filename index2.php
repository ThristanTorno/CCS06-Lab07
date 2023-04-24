<?php
session_start();
if(isset($_POST['register'])){
  $_SESSION['complete_name'] = $_POST['complete_name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['birthdate'] = $_POST['birthdate'];
  header('Location: quiz.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form method="POST">
    <label>Complete Name:</label><br>
    <input type="text" name="complete_name" required><br><br>
    <label>Email Address:</label><br>
    <input type="email" name="email" required><br><br>
    <label>Birthdate:</label><br>
    <input type="date" name="birthdate" required><br><br>
    <input type="submit" name="register" value="Register">
  </form>
</body>
</html>

