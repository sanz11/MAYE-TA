<?php 
require_once('../modelo/Conectar.php');
require_once('../modelo/usuario.php');

@$oferta = new oferta();
@$usuario = new usuario();
@$email = addslashes($_POST['email']);
@$tipo = addslashes($_POST['tipo']);
@$id = addslashes($_POST['id']);
@$rubobs = addslashes($_POST['rubobs']);
@$rub = addslashes($_POST['rub']);
@$emailobs = addslashes($_POST['emailobs']);
@$idobs = addslashes($_POST['idobs']);
$asunto="SU OFERTA FUE ENVIADO EXITOSAMENTE";
$asunto2="SU OFERTA FUE OBSERVADA";
$cabeceras = 'From: postulacion@MayeOficios.com' . "\r\n" .
    'Reply-To: abelricrasanchez@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$contenido="su oferta de ". $rub. " fue publicado exitosamente en la plataforma de Mayeoficios";
$contenido2="su oferta de ". $rubobs." no se pudo publicar porque fue oservado al no cumplir los terminos y condiciones de Mayeoficios";

if(isset($_POST['publicar'])){
    $oferta->publicar($id);
    $usuario->msn($email);
    if (mail($email,$asunto,$contenido,$cabeceras)) {

		//Si el mensaje se envía muestra una confirmación
		$enviomsn="<script> alert('Bien!!, su mensaje se envio correctamente.');</script>";
	}else{
    $enviomsn="<script> alert('Lo sentimos, usted no a podido postular.');</script>";
}
}

if(isset($_POST['observar'])){
    $oferta->observar($idobs);
    $usuario->msn($emailobs);
     if (mail($emailobs,$asunto2,$contenido2,$cabeceras)) {

		//Si el mensaje se envía muestra una confirmación
		$enviomsn="<script> alert('Bien!!, su mensaje se envio correctamente.');</script>";
	}else{
    $enviomsn="<script> alert('Lo sentimos, usted no a podido postular.');</script>";
}
}
if($tipo==="superadmin"){
       header("location:../superadmin.php?pagina=ofertas.php");
    }else{
       header("location:../admin.php?pagina=ofertas.php");
    }
?>
