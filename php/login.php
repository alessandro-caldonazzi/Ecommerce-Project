<?php 
session_start();
	$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect("localhost", "root", "");
         mysqli_select_db($conn, "test");
         if(isset($_POST['user'])){
            $user = $_POST['user'];
         }
        if(isset($_POST['pass'])){
            $passwd = $_POST['pass'];
            $hash = md5(md5($passwd));
         }
         
         
         $sql = "select * from users where username='" . $user . "' and password='" . $hash . "' and verifica='" . 'si' . "'";
         
         $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result)>0){
               echo "accettato";
               $_SESSION['login'] = "si";
               $_SESSION['user'] = $user;
               header("location: dashboard.php");
               
               
            }
            else {

               echo "Username o password errate, o account non verificato";
            }
   
 ?>