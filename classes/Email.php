<?php
namespace Classes;

use AddressInfo;
use PHPMailer\PHPMailer\PHPMailer;

    
class Email{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email,$nombre,$token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        // Crear un Objetp de Email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'cccc8df11a2a3d';
        $mail->Password = '32f0ab0503fe74';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com','appsalon.com.mx');
        $mail->Subject = 'Confirmar su Cuenta';
        $contenido = "<HTML>";
        $contenido .= "<p> <strong>Hola " . $this->nombre . " </strong> Has creado tu cuenta en AppSalon, 
        solo debes confirmarla presionando en el siguiente enlace</p>";
        $contenido .= "<p> Presiona aqui : <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste éste cambio o ésta cuenta, ignora éste correo.... </p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar E-mail
        $mail->send();
    }
    public function enviarInstrucciones(){
        // Crear un Objetp de Email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'cccc8df11a2a3d';
        $mail->Password = '32f0ab0503fe74';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com','appsalon.com.mx');
        $mail->Subject = 'Reestablece tu password';
        $contenido = "<HTML>";
        $contenido .= "<p> <strong>Hola " . $this->nombre . " </strong> Has solicitado reestablecer tu password en AppSalon, 
        sigue el siguiente enlace</p>";
        $contenido .= "<p> Presiona aqui : <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestableblecer Password</a> </p>";
        $contenido .= "<p>Si tu no solicitaste éste cambio o ésta cuenta, ignora éste correo.... </p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar E-mail
        $mail->send();
    }
}
?>