<?php
 $content=\file_get_contents('data/contact.yaml');
 $data=yaml_parse($content);
    echo "<main>";
        echo"<div>";
        echo '<h1>'.$data['rubrique'].'</h1>';
            echo'<form action="index.php#contact" method="post">';
                echo'<p>'.$data['nom'].'</p>';
                echo'<input class="champ2" type="text" name="nom" placeholder="Entrez votre nom de famille">';
                echo'<p>'.$data['mail'].'</p>';
                echo '<input class="champ2" type="email" name="mail" placeholder="Entrez l\'email ">';
                echo '<p>'.$data['obj'].'</p>';
                echo'<input class="champ2" type="text" name="objet" placeholder="Entrez l\'objet ">';
                echo'<p>'.$data['contenu'].'</p>';
                echo'<textarea rows="8" cols="81" name="form" placeholder="Entrez le contenu de votre mail"></textarea>';
                echo'<br>';
                echo'<div class="g-recaptcha" data-sitekey="6LenWKwdAAAAAAZFEoLaoqeLz64slg_XgrxUrG5h"></div>';
                echo'<input class="champ" type="submit" value="Envoyez">';
            echo'</form>';
        echo'</div>';
    echo"</main>";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset ($_POST['g-recaptcha-response']) && ! empty ($_POST ['g-recaptcha-response'])) {
    $secret = '6LenWKwdAAAAAKvfKK4TYu6I2qgYOvQNnxFpu7Zl'; 
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']); 
    $responseData = json_decode ($verifyResponse); 
    if ($responseData-> success) {} 

    if( !empty($_POST)){

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';


        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'skorix.prive@gmail.com';             // SMTP username
            $mail->Password = 'm4th1s$14';                           // SMTP password
            $mail->SMTPSecure = 's';                            // Enable SSL encryption, TLS also accepted with port 465
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($_POST['mail']);          //This is the email your form sends From
            $mail->addAddress('skorix.prive@gmail.com'); // Add a recipient address
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST['objet'];
            $mail->Body    = $_POST['form']."<br>"." mail de l'exp??diteur : ".$_POST['mail'];
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<div><h2>Votre message ?? bien ??tait envoy??</h2></div>';
        } catch (Exception $e) {
            echo 'Votre message ?? pas pu ??tre envoy??.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
?>