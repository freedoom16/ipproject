<?php
  include('../dbconn.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../admin.css">
</head>
<body>


<form action="admin.php" method="POST">
<div class="sidebar">
  <a class="active" href="../home.php">Home</a>
  <a href="addstudent.php">add student</a>
  <a href="addteacher.php">add teacher</a>
  <a href="studentlist.php">student list</a>
  <a href="teacherlist.php">teacher list</a>
  </div>
</form>


</body>
</html>
