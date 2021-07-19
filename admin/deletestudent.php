<?php
include('../dbconn.php');
?>
<?php
$studid=$_GET["studid"];
$del="DELETE FROM `student` WHERE `studid`='$studid' ";
if(!$conn){
    echo "failed to connect";
}

if(mysqli_query($conn , $del)){
    
}
else{
    echo("not connected");
}

?>
<script>
   window.location="studentlist.php";
</script>