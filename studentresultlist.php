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

<form action="studentresultlist.php" method="POST">

    <div class="content">
        <h1>student list</h1>
        <table>
            <tr>
                <th>student id</th>
                <th>biology</th>
                <th>chemistry</th>
                <th>physics</th>
                <th>english</th>
                <th>maths</th>

            </tr>
            <tr>
                <?php
                        //$session=$_SESSION['login_user'];
                        
                        $sql="SELECT studid,biology , chemistry ,physics, english , maths FROM studentgrade";
                        $result=mysqli_query($conn , $sql);
                        if(!$result){
                            echo "not connected";
                        }
                        if (mysqli_num_rows($result)) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>"; echo $row["studid"]; echo "</td>";
                                    echo "<td>"; echo $row["biology"]; echo "</td>";
                                    echo "<td>"; echo $row["chemistry"]; echo "</td>";
                                    echo "<td>"; echo $row["physics"]; echo "</td>";
                                    echo "<td>"; echo $row["english"]; echo "</td>";
                                    echo "<td>"; echo $row["maths"]; echo "</td>";
                                    
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