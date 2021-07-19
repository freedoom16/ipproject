<?php
    include('../dbconn.php');

    $link="UPDATE student SET fname='j', lname='p',password='k',address='k', bod='7' , class ='n' WHERE studid='222' ";
    if(mysqli_query($conn , $link)){
        header("location: studentlist.php");  
    }else{
    }


?>
