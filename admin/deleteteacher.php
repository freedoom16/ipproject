<?php
include('../dbconn.php');
?>
<?php
$teachid=$_GET["teachid"];
$del="DELETE FROM `teacher` WHERE `teachid`='$teachid' ";
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
   window.location="teacherlist.php";
</script>