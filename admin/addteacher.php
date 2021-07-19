<?php
    include('admin.php');
    include('../dbconn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add teacher</title>
    <link rel="stylesheet" href="../admin.css">
</head>
<body>
<?php

$complate="";
$fnerror=$lmerror=$boderror=$classerore=$adresserror= $teachiderror =$passworderror =$teachcourseerror=$teachclasserror="";

if($_SERVER['REQUEST_METHOD']=="POST"){
  $teachid=$_POST['teachid'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $password=$_POST['password'];
  $teachcourse=$_POST['teachcourse'];
  $teachclass=$_POST['teachclass'];


  $sql="INSERT INTO teacher(teachid,fname, lname,password, teachcourse, teachclass) VALUES ('$teachid','$fname','$lname','$password','$teachcourse','$teachclass')";
  if(mysqli_query($conn , $sql)){
    $complate="successfully add teacher";
  }else{
    $complate="not successfully add teacher";
  }
}

?>

<form action="addteacher.php" method="POST">
<div class="content">
<h1>teacher register form</h1>
<label for="">teacher id</label><br>
<input type="number" name="teachid" ><br>
<label id="error"> <?php echo $teachiderror ?></label><br>

<label for="">first name</label><br>
<input type="text" name="fname" ><br>
<label id="error"> <?php echo $fnerror ?></label><br>

<label for="">last name</label><br>
<input type="text" name="lname"><br>
<label id="error"> <?php echo $lmerror ?></label><br>

<label for="">password</label><br>
<input type="text" name="password"><br>
<label id="error"> <?php echo $passworderror ?></label><br>

<label for="">teachs course</label><br>
<input type="text" name="teachcourse"><br>
<label id="error"> <?php echo $teachcourseerror ?></label><br>

<label for="">teachs class</label><br>
<input type="text" name="teachclass"><br>
<label id="error"> <?php echo $teachclasserror ?></label><br>
<br><br><br>

<label id="success"> <?php echo $complate ?></label><br>
<input type="submit" value="add teacher ">

</div>
<form>
</body>
</html>