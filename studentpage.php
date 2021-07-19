<?php
 include('dbconn.php');
    session_start();
    if(!isset($_SESSION['login_user'])){
        echo "session not set";
    }else{
      
    }
$studid=$_SESSION['login_user'];
  

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
  <a href="studentresult.php">result</a>
  </div>

  <form action="studentlist.php" method="POST">

    <div class="content">
        <h1>student list</h1>
        <table>
            <tr>
                <th>student id</th>
                <th>first name</th>
                <th>last name</th>
                <th>adress</th>
                <th>class</th>

            </tr>
            <tr>
                <?php
                        $sql="SELECT studid,fname , lname ,password, address , class FROM student  WHERE studid='$studid'";
                        $result=mysqli_query($conn , $sql);
                        if(!$result){
                            echo "not connected";
                        }
                        if (mysqli_num_rows($result)) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>"; echo $row["studid"]; echo "</td>";
                                    echo "<td>"; echo $row["fname"]; echo "</td>";
                                    echo "<td>"; echo $row["lname"]; echo "</td>";
                                    echo "<td>"; echo $row["address"]; echo "</td>";
                                    echo "<td>"; echo $row["class"]; echo "</td>";
                                echo "</tr>";
                            }
                          } else {
                            echo "0 results";
                          }  
                          
                ?>
            </tr>
        </table>
    </div>
    
</form>
<style>
  table,th,td{
    border: 2px solid rgb(122, 118, 118);
}
</style>
  </div>

   
</body>
</html>