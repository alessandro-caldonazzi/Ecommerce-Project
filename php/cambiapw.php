


<?php 
session_start();
 if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
         }
    
    $_POST['pass'];
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $hash = md5(md5($_POST['pass']));
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "test");
    $query = "UPDATE users SET password='" . $hash ."' WHERE username='" . $user . "'";
   
              
               echo "Password cambiata.";
               
               
            

 ?>