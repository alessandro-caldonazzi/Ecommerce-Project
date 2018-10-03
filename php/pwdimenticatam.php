<?php 

	
	$conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "test");
    if(isset($_POST['user'])){
       $user = $_POST['user'];
    
    }
    if(isset($_POST['email'])){
       $email = $_POST['email'];
    
    }

    $sql = "select * from users where username='" . $user . "' and email='" . $email . "' ";
         
         $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result)>0){
               echo "I nostri server stanno provando ad inviarti una email";
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

        
        $numero = rand(10,1000);
        $hash = md5(md5($numero));
        $query = "UPDATE users SET password='" . $hash . "' WHERE username='" . $user . "'";
        $result1 = mysqli_query($conn,$query);
        $mail->Subject = 'I suoi dati';
        $testo = 'La tua password momentanea è ' . $numero . '';
        $mail->Body = $testo;
        $mail->AltBody = 'Recupero credenziali.';
        if (!$mail->send())
            {
            echo 'Server non disponibili.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
               
               
            }
            else {

               echo "Username/email incorrette.";
            }


 ?>


