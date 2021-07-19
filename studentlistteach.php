<?php
    include('teacher.php');
    include('dbconn.php');
    if(!isset($session)){
        echo "not set";
    }else{
        echo "set";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students info</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<form action="studentlistteach.php" method="POST">

    <div class="content">
        <h1>student list</h1>
        <table>
            <tr>
                <th>student id</th>
                <th>first name</th>
                <th>last name</th>
                <th>password</th>
                <th>adress</th>
                <th>class</th>

            </tr>
            <tr>
                <?php
                        //$session=$_SESSION['login_user'];

                        /*$sqlteach="SELECT  class FROM teacher";
                        $resultteach=mysqli_query($conn , $sqlteach);
                        if (mysqli_num_rows($resultteach)) {
                            // output data of each row
                            while($rowteach = mysqli_fetch_assoc($resultteach)) {
                               
                                   $class=$rowteach["studid"];
                        }
                    }*/
                        
                        $sql="SELECT studid,fname , lname ,password, address , class FROM student";
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
                                    echo "<td>"; echo $row["password"]; echo "</td>";
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
</body>
</html>