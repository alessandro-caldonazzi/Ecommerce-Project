<?php

$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "test");

if (isset($_POST['user']))
    {
    $user = $_POST['user'];
    }

if (isset($_POST['password']))
    {
    $passwd = $_POST['password'];
    }

if (isset($_POST['email']))
    {
    $email = $_POST['email'];
    }

if (isset($_POST['dom']))
    {
    $dom = $_POST['dom'];
    }

if (isset($_POST['risp']))
    {
    $risp = md5(md5($_POST['risp']));
    }


$sql = "select * from users where username='" . $user . "'";
$hash = md5(md5($passwd));
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
    {
    echo "Nome utente non disponibile prova a cambiarlo";
    }
  else
    {
    $query = "INSERT into `users` (username, email, password, dom, risp) VALUES ('$user','$email', '$hash', '$dom', '$risp')";
    $result1 = mysqli_query($conn, $query);
    if ($result1)
        {
        echo "<div class='form'><h3>Ti sei registrato correttamente.</h3><br/>Controlla la tua email per la verifica </div>";
        require '../phpmailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        

        $mail->isSMTP(); 
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'wda.shopping@gmail.com'; 
        $mail->Password = 'Qwerty0310'; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587;
        $mail->setFrom('info@wda.com', 'Wda Shopping');
        $mail->addAddress($email, $user); 

        

        $mail->Subject = 'Email Confirmation';
        $testo = 'localhost/login/php/verifica.php?verifica=' . $user . '&codice=' . $hash . '';
        $mail->Body = $testo;
        $mail->AltBody = 'Clicca questo link per verificare il tuo account';
        if (!$mail->send())
            {
            echo 'Server non disponibili.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        }
    }

?>
