<?php
    include('admin.php');
    include('../dbconn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="../admin.css">
</head>
<body>

<?php
$complate="";
$fnerror=$lmerror=$boderror=$classerore=$addresserror=$passworderror=$studiderror="";
$fname="";
$lname="";
$address="";
$class="";
$bod="";
$password="";

$studid=$_GET["studid"];
$sql="SELECT studid,fname , lname ,password, address ,bod, class FROM student WHERE studid='$studid'";
$result=mysqli_query($conn , $sql);
if(mysqli_query($conn , $sql)){
    echo "edit";
}else{
    echo "not edit";
}

if(!$result){   echo "not connected";
}

while($row = mysqli_fetch_assoc($result)){
    $fname=$row["fname"];
    $lname=$row["lname"];
    $password=$row["password"];
    $address=$row["address"];
    $bod=$row["bod"];
    $class=$row["class"];
}


?>
<form action="editstudent.php" method="POST">
    <div class="content">
    <h1>student register form</h1>

    <label for="">student id </label><br>
    <input type="text" name="studid" value="<?php echo $studid ?>"><br>
    <label id="error"> <?php echo $studiderror ?></label><br>

    <label for="">first name</label><br>
    <input type="text" name="fname" value="<?php echo $fname ?>"><br>
    <label id="error"> <?php echo $fnerror ?></label><br>

    <label for="">last name</label><br>
    <input type="text" name="lname" value="<?php echo $lname ?>" ><br>
    <label id="error"> <?php echo $lmerror ?></label><br>

    <label for="">password</label><br>
    <input type="text" name="password" value="<?php echo $password ?>"><br>
    <label id="error"> <?php echo $passworderror ?></label><br>

    <label for="">address</label><br>
    <input type="text" name="address" value="<?php echo $address ?>"><br>
    <label id="error"> <?php echo $addresserror ?></label><br>

    <label for="">bod</label><br>
    <input type="text" name="bod" value="<?php echo $bod ?>"><br>
    <label id="error"> <?php echo $boderror ?></label><br>

    <label for="">class</label><br>
    <input type="text" name="class" value="<?php echo $class ?>">
    <label id="error"> <?php echo $classerore ?></label><br><br><br>

    <label id="success"> <?php echo $complate ?></label><br>
    <input type="submit" value="UPDATE" name="update">
    </div>
<form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $studid=$_POST['studid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $bod=$_POST['bod'];
    $class=$_POST['class'];
    $link="UPDATE student SET fname='$fname', lname='$lname',password='$password',address='$address', bod='$bod' , class ='$class' WHERE studid='$studid' ";
    if(mysqli_query($conn , $link)){
        $complate="successfully update student";
        header("location: studentlist.php");  
    }else{
        $complate="not update data";
    }
}

?>




</body>
</html>