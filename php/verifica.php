<?php 
    $_GET['verifica'];
    $_GET['codice'];
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "test");
    $sql = "select * from users where username='" . $_GET['verifica'] . "' and password='" . $_GET['codice'] . "'";
    $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result)>0){
               echo "accettato correttamente";
               
               
               
            }
            else {

               echo "rifiutato";
            }
        $query = "UPDATE users SET verifica='si' WHERE username='" . $_GET['verifica'] . "'";
        $result1 = mysqli_query($conn,$query);
        if($result1){
            echo "verrai renderizzato tra pochi secondi...";
            sleep(1);
            $_SESSION['login'] = "si";
               header("location: dashboard.php");
        }

 ?>