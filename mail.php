<?php
 ip = $_SERVER['REMOTE_ADDR'];
 $captcha = $_POST['g-recaptcha-response'];
 $secretkey = "6LerdSQfAAAAADJ1FbWZ0TjJVAUlsjWSXJwL5FhP"; 
 $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
 $atributos = json_decode($respuesta, TRUE);

if(!empty($_POST['Nombre']) && !empty($_POST['NombreEmpresa']) && !empty($_POST['Correo']) && !empty($_POST['Telefono']) && $atributos['success'] ){
    $cabeceras = 'From: bpaniagua@quanto.mx' . "\r\n" .
        'Reply-To: bpaniagua@quanto.mx' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $message = "Nombre de la empresa: {$_POST['NombreEmpresa']}\r\nNombre del contacto: {$_POST['Nombre']}\r\nCorreo electronico: {$_POST['Correo']}\r\nTelefono: {$_POST['Telefono']}\r\nMensaje: {$_POST['Mensaje']}";
    $send = mail("bpaniagua@quanto.mx","Solicitud de Demo",$message,$cabeceras);
    if ( !session_id() ) {
        session_start();
    }
    $_SESSION['message'] = "¡Tu mensaje ha sido enviado satisfactoriamente!";
    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "\solicituddemoempresa.txt","a+");
    fwrite($file, "Nombre de la empresa: {$_POST['NombreEmpresa']}\t\tNombre del contacto: {$_POST['Nombre']}\t\tCorreo electronico: {$_POST['Correo']}\t\tTelefono: {$_POST['Telefono']}\t\tMensaje: {$_POST['Mensaje']}\r\n");
    fclose($file);
    header('Location: /contacto.php',TRUE,303);
}else{
    if(!$atributos['success']) {
        $_SESSION['message'] = 'verificar captcha'; 
    }
    header('Location: /contacto.php',TRUE,303);

}