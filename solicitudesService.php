<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
include_once 'database.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "valadezricardo159@gmail.com";
$mail->Password   = "Valadez123.";

$mail->IsHTML(true);
$mail->AddAddress("valadezricardo159@gmail.com", "Destinatario");
$mail->SetFrom("valadezricardo159@gmail.com", "Fester");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Cotizacion";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}

if(ISSET($_GET["a"])){
    if($_GET["a"]=="saveSolicitud"){
        // $con= new mysqli('localhost','root','1234','cotizadorweb')or die(mysqli_error($con));
        $nombre=$_POST["nombre"];
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        if(ISSET($_POST["ocupacion"])){
            $ocupacion=$_POST["ocupacion"];
        }
        else{
            $ocupacion="";
        }

        if(ISSET($_POST["estado"])){
            $estado=$_POST["estado"];
        }
        else{
            $estado="";
        }

        if(ISSET($_POST["estado"])){
            $cp=$_POST["cp"];
        }
        else{
            $cp="";
        }

        if(ISSET($_POST["nota"])){
            $nota=$_POST["nota"];
        }
        else{
            $nota="";
        }
       
        $tablaCotizacion="";
        if(ISSET($_POST["cotizacion"])){
            $cotizacion=$_POST["cotizacion"];
            $sistemas=json_decode($cotizacion);
            
            foreach($sistemas as $sistema){
                $tablaCotizacion= $tablaCotizacion.'<table class="table table-striped table-bordered"><tr>
                <th colspan="8">'.$sistema->nombre.'</th>
                </tr><tr><th>Producto</th><th>Rendimiento</th><th>Cubeta</th><th>Galón</th><th>Litro</th><th>Rollo</th><th>Saco</th><th>Comentario</th></tr>';
                $productos=$sistema->productos;
                foreach($productos as $p){
                    // echo ''.->descripcion;
                    $tablaCotizacion= $tablaCotizacion.'<tr><td>'.$p->descripcion.'</td><td>'.$p->rendimiento.'</td><td>'.$p->cubeta.'</td><td>'.$p->galon.'</td><td>'.$p->litro.'</td><td>'.$p->rollo.'</td><td>'.$p->saco.'</td><td>'.$p->coment.'</td></tr>';
                }
                
                $tablaCotizacion= $tablaCotizacion.'</table>';

            }
            // echo $tablaCotizacion;
        }   
        else{
            $cotizacion="";
        }

        // if($cotizacion==""){
        //     $cotizacion="{}";
        // }
               
       
        $infopersonal=$_POST["infopersonal"];
        $estatus="Pendiente";

        // var_dump(json_decode($cotizacion));

        $query="INSERT INTO solicitudes(nombre,telefono,email,ocupacion,estado,CP,InformacionPersonal,estatus,nota,cotizacion) VALUES('$nombre','$telefono','$email','$ocupacion','$estado','$cp',
                 '$infopersonal','$estatus','$nota','$cotizacion')";
        // echo 'cotizacion'.$cotizacion;
        echo $query;
        mysqli_query($con,$query) or die("query error".$query.mysqli_error($con));

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 2;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        // $mail->Username   = "divad9793@gmail.com";
        // $mail->Password   = "";
        $mail->Username   = $correo;
        $mail->Password   = $pass;

        $mail->IsHTML(true);
        $mail->AddAddress($email, $nombre);//correo y nombre del destinatario
        $mail->SetFrom( $correo, "Fester Cotizaciones");//correo y nombre del que envia
        // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
        // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
        $mail->Subject = "Cotizaciones";
        $content = $tablaCotizacion;

        $mail->MsgHTML($content); 
        if(!$mail->Send()) {
        echo "0";
        var_dump($mail);
        } else {
        echo "1";
        }

        // echo "1";
    }
}


?>