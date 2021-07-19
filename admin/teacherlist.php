<?php
    include('admin.php');
    include('../dbconn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher list info</title>
    <link rel="stylesheet" href="../admin.css">
</head>
<body>

<form action="teacherlist.php" method="POST">

    <div class="content">
        <h1>teacher list</h1>
        <table>
            <tr>
                <th>teacher id</th>
                <th>first name</th>
                <th>last name</th>
                <th>password</th>
                <th>teaches course</th>
                <th>teaches class</th>
                <th>edit</th>
                <th>delete</th>
               
            </tr>
            <tr>
                <?php
                        $sql="SELECT teachid,fname, lname,password, teachcourse, teachclass FROM teacher";
                        $result=mysqli_query($conn , $sql);
                        if(!$result){
                            echo "not connected";
                        }
                        if (mysqli_num_rows($result)) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>"; echo $row["teachid"]; echo "</td>";
                                    echo "<td>"; echo $row["fname"]; echo "</td>";
                                    echo "<td>"; echo $row["lname"]; echo "</td>";
                                    echo "<td>"; echo $row["password"]; echo "</td>";
                                    echo "<td>"; echo $row["teachcourse"]; echo "</td>";
                                    echo "<td>"; echo $row["teachclass"]; echo "</td>";
                                    echo "<td>";?> <a href="editteacher.php?teachid=<?php echo $row["teachid"]; ?>"> edit</a><?php echo "</td>";
                                    echo "<td>"; ?> <a href="deleteteacher.php?teachid=<?php echo $row["teachid"]; ?>">delete</a> <?php echo "</td>";  
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