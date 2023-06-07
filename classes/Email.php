<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $nombre;
    public $email;
    public $token;

    public function __construct($nombre, $email, $token){

        
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;

    }

    public function enviarConfirmacion(){   

        //Crear Objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP(); //Protocolo de envio de emails
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '0222425dc80104';
        $mail->Password = 'c99fc20adf6975';

        $mail->setFrom('cuentas@appgym.com');
        $mail->addAddress('cuentas@appgym.com', 'AppGym.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " .$this->nombre. "</strong> Has creado tu cuenta en App
        gym, debes confirmar presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=".$this->token."'>Confirmar cuenta</a> </p>";
        $contenido .="<p>Si no solicitaste este cuenta, ignora este mensaje</p>";
        $contenido .="</html>";
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();

    }

    public function enviarInstrucciones(){
        //Crear Objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP(); //Protocolo de envio de emails
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '0222425dc80104';
        $mail->Password = 'c99fc20adf6975';

        $mail->setFrom('cuentas@appgym.com');
        $mail->addAddress('cuentas@appgym.com', 'AppGym.com');
        $mail->Subject = 'Reestablece tu password';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " .$this->nombre. "</strong> Has solicitado reestablecer tu password,
        sigue el siguiente enlace para completar el tramite </p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/recuperar?token=".$this->token."'>Reestablecer password</a> </p>";
        $contenido .="<p>Si no solicitaste algun cambio, ignora este mensaje</p>";
        $contenido .="</html>";
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();

    }

}

