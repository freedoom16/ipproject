<?php
    session_start();
    if(!isset($_SESSION['login_user'])){
        echo "session not set";
    }else{
      
    }
    $session=$_SESSION['login_user'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teachere </title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<form action="teacher.php" method="POST">
<div class="sidebar">
  <a class="active" href="home.php">home</a>
  <a href="studentlistteach.php">student list</a>
  <a href="addstudentresult.php">add student result</a>
  <a href="studentresultlist.php">students result</a>

  </div>
</form>
</body>
</html>