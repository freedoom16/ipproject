<?php
   include("dbconn.php");
   session_start();
   
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
  
    $id = $_POST['id'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $id = stripcslashes($id);  
        $password = stripcslashes($password);  
        $id = mysqli_real_escape_string($conn, $id);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from teacher where teachid = '$id' and password = '$password'";  
        $resultteacher = mysqli_query($conn, $sql);  
        $rowteacher = mysqli_fetch_array($resultteacher, MYSQLI_ASSOC);  
        $countteacher = mysqli_num_rows($resultteacher);  
          
		$sql = "select *from teacher where teachid = '$id' and password = '$password'";  
        $resultstudent = mysqli_query($conn, $sql);  
        $rowtstudent = mysqli_fetch_array($resultstudent, MYSQLI_ASSOC);  
        $countstudent = mysqli_num_rows($resultstudent);  

         if($id=='admin' && $password=='123'){
            $_SESSION['login_user'] = $id;
			    header("location: admin/admin.php");  
         }

        if($countteacher == 1){  
			$_SESSION['login_user'] = $id;
			header("location: studentpage.php");  
        }  
       
		if($countstudent == 1){  
			$_SESSION['login_user'] = $id;
			header("location: teacher.php"); 
        } 

   }
   
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="admin.css">
  
   </head>
   
   <body background-color = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>