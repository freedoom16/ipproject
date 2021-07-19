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

$teachid=$_GET["teachid"];
$sql="SELECT teachid,fname , lname ,password, teachcourse ,teachclass FROM teacher WHERE teachid='$teachid'";
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
    $teachcourse=$row["teachcourse"];
    $teachclass=$row["teachclass"];
}


?>
<form action="editteacher.php" method="POST">
    <div class="content">
    <h1>teacher register form</h1>

    <label for="">teacher id </label><br>
    <input type="text" name="teachid" value="<?php echo $teachid ?>"><br>
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

    <label for="">teach course</label><br>
    <input type="text" name="teachcourse" value="<?php echo $teachcourse ?>"><br>
    <label id="error"> <?php echo $addresserror ?></label><br>

    <label for="">teach class</label><br>
    <input type="text" name="teachclass" value="<?php echo $teachclass ?>"><br>
    <label id="error"> <?php echo $boderror ?></label><br>

    <label id="success"> <?php echo $complate ?></label><br>
    <input type="submit" value="UPDATE" name="update">
    </div>
<form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $teachid=$_POST['teachid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $teachcourse=$_POST["teachcourse"];
    $teachclass=$_POST["teachclass"];
    $link="UPDATE teacher SET fname='$fname', lname='$lname',password='$password',teachcourse='$teachcourse', teachclass='$teachclass'  WHERE teachid='$teachid' ";
    if(mysqli_query($conn , $link)){
        $complate="successfully update student";
        header("location: teacherlist.php");  
    }else{
        $complate="not update data";
    }
}

?>




</body>
</html>