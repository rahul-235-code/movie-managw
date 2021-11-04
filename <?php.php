<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>




<?php
     $server="127.0.0.1";
     $username = "rahuls";
     $password = "12345678";

     $conn = mysqli_connect($server, $username, $password);

     if(!$conn){
     	die("connection to this database has failed due to " . mysqli_connect_error());
     }
     echo "Success connecting to the db";

     $ = $_POST[email_id];
     $course_link = $_POST[course_link];

 ?>