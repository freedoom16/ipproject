
<?php
    include('teacher.php');
    include('dbconn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<?php
//INSERT INTO `studentgrade`(`studid`, `biology`, `chemistry`, `physics`, `english`, `maths`) 
$complate="";
$fnerror=$lmerror=$boderror=$classerore=$addresserror=$passworderror=$studiderror="";
$fname="";
$lname="";
$address="";
$class="";
$bod="";
$password="";

// $studid=$_GET["studid"];
// $sql="SELECT studid,fname , lname ,password, address ,bod, class FROM student WHERE studid='$studid'";
// $result=mysqli_query($conn , $sql);
// if(mysqli_query($conn , $sql)){
//     echo "edit";
// }else{
//     echo "not edit";
// }

// if(!$result){   echo "not connected";
// }

// while($row = mysqli_fetch_assoc($result)){
//     $fname=$row["fname"];
//     $lname=$row["lname"];

// }

if($_SERVER['REQUEST_METHOD']=="POST"){
    $studid=$_POST['studid'];
    $bio=$_POST['biology'];
    $chem=$_POST['chemistry'];
    $phy=$_POST['physics'];
    $eng=$_POST['english'];
    $maths=$_POST['maths'];
   
    $link="INSERT INTO studentgrade (studid, biology, chemistry, physics, english, maths) values ('$studid','$bio','$chem','$phy','$eng','$maths')";
    if(mysqli_query($conn , $link)){
        $complate="successfully update student";
    }else{
        $complate="not update data";
    }
}

?>
<form action="addgrade.php" method="POST">
    <div class="content">
    <h1>student register form</h1>

    <label for="">student id </label><br>
    <input type="number" name="studid" ><br>
    <label id="error"> <?php echo $studiderror ?></label><br>

    <label for=""> biology</label><br>
    <input type="text" name="biology" value=""><br>
    <label id="error"> <?php echo $fnerror ?></label><br>

    <label for="">chemistry</label><br>
    <input type="text" name="chemistry" value="" ><br>
    <label id="error"> <?php echo $lmerror ?></label><br>

    <label for="">physics</label><br>
    <input type="text" name="physics" value=""><br>
    <label id="error"> <?php echo $passworderror ?></label><br>

    <label for="">english</label><br>
    <input type="text" name="english" value=""><br>
    <label id="error"> <?php echo $addresserror ?></label><br>

    <label for="">maths</label><br>
    <input type="text" name="maths" value=""><br>
    <label id="error"> <?php echo $boderror ?></label><br>

    <br><br><br>

    <label id="success"> <?php echo $complate ?></label><br>
    <input type="submit" value="add grade" name="add">
    </div>
<form>

<?php


?>




</body>
</html>