<?php
    include('admin.php');
    include('../dbconn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add student</title>
    <link rel="stylesheet" href="../admin.css">
</head>
<body>
<?php

  $complate="";
  $studiderror=$teachiderror=$lnameerr=$passworderr=$boderr=$classerr=$addresserr="";
  
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $studid=$_POST['studid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $bod=$_POST['bod'];
    $address=$_POST['address'];
    $class=$_POST['class'];

  
      if (empty($_POST["studid"])) {
        $studiderror = "id is required";
      } 
    
      if (empty($_POST["fname"])) {
        $teachiderror = "fname is required";
      } 
      if (empty($_POST["lname"])) {
        $lnameerr = "lname is required";
      } 
    
      if (empty($_POST["bod"])) {
        $boderr = "bod is required";
      } 
      if (empty($_POST["address"])) {
        $addresserr = "address is required";
      } 
      if (empty($_POST["password"])) {
        $passworderr = "password is required";
      } 
    
      if (empty($_POST["class"])) {
        $classerr = "class is required";
      } 

    $sql="INSERT INTO student(studid,fname, lname,password, bod, address, class) VALUES ('$studid','$fname','$lname','$password','$bod','$address','$class')";
  
    if(mysqli_query($conn , $sql)){
      $complate="successfully add student";
    }else{
      $complate="not added succesfully";
    }
  }

?>
<style>
#error{
  color:red;
}
</style>

<form name="myform"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="content">
  <h1>student register form</h1>

  <label for="">student id </label><br>
  <input type="number" name="studid" ><br>
  <label id="error"> <?php echo $studiderror ?></label><br>

  <label for="">first name</label><br>
  <input type="text" name="fname" ><br>
  <label id="error"> <?php echo $teachiderror ?></label><br>

  <label for="">last name</label><br>
  <input type="text" name="lname"><br>
  <label id="error"> <?php echo $lnameerr ?></label><br>

  <label for="">password</label><br>
  <input type="text" name="password"><br>
  <label id="error"> <?php echo $passworderr ?></label><br>

  <label for="">berthdate</label><br>
  <input type="text" name="bod"><br>
  <label id="error"> <?php echo $boderr ?></label><br>

  <label for="">address</label><br>
  <input type="text" name="address"><br>
  <label id="error"> <?php echo $addresserr ?></label><br>

  <label for="">class</label><br>
  <input type="text" name="class"><br>
  <label id="error"> <?php echo $classerr ?></label><br>

  <input type="submit" value="add student ">
</div>
<form>

</body>
  

</html>