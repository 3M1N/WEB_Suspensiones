<?php
require("class.phpmailer.php");
require_once("recaptchalib.php");
require_once("cfg.php");
if (isset($_POST['enviar'])) {

  $resp = recaptcha_check_answer ($privada,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("El reCAPTCHA no fue introducido correctamente, vuelva a la p&aacute;gina anterior e intentelo de nuevo." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
	$mail = new PHPMailer();
	$varname = $_FILES['archivo']['name'];
    $vartemp = $_FILES['archivo']['tmp_name'];
	$mail->Host = "suspensiones.mx"; //configurar el host de correo

	if (!empty($varname) && !empty($vartemp)){
		if(move_uploaded_file($vartemp, "theme/siete/files/$varname")){
		        $mail->AddAttachment("theme/siete/files/$varname", $varname);//archivos adjuntos (lugar, nombre)
    	}
	}
	 
	$mail->From = $_POST['email'];//"remite@email.com"; email del remitente
	$mail->FromName = $_POST['name']; //"Nombre del Remitente";
	$mail->Subject = "Solicitud de empleo";//"Subject del correo";
	$mail->AddAddress("contacto@suspensiones.mx","Alejandro"); //correos destino
	//$mail->AddAddress("destino2@correo.com","Nombre 02"); //correos destino 2
	//$mail->AddCC("usuariocopia@correo.com"); //correo copia
	//$mail->AddBCC("usuariocopiaoculta@correo.com"); //correo copia oculta
	 
	$body  = "<em>Solicitud de empleo enviada desde www.suspensiones.mx por:</em> <br />
					<br />Nombre: ". utf8_decode($_POST['name'])."
					<br />Direcci&oacute;n de correo: ".utf8_decode($_POST['email'])."
					<br />Perfil: ".utf8_decode($_POST['asunto'])."
					<br />Archivo CV adjunto (si se ha enviado)
					<br /><br />Comentarios: ".utf8_decode($_POST['message']);//Cuerpo del mensaje
	$mail->Body = $body;
	$mail->AltBody = "no tiene informacion";//cuerpo alternativo
	
	//$mail->AddAttachment("files/demo.zip", "demo.zip");
	if($mail->Send()){
	unlink("theme/seis/files/$varname");
	echo '<h2 style=" font-size: 15px; font-style: italic; font-weight: normal;">Mensaje entregado.</h2>
                                        <p>Tu mensaje se ha enviado correctamente, gracias por ponerte en contacto, en breve recibir&aacute;s respuesta.</p>';
	}else{
		echo '<h2 style=" font-size: 15px; font-style: italic; font-weight: normal;">Mensaje sin entregar.</h2>
                                        <p>algo realmente malo ocurrio, y no se pudo entregar su mensaje.</p>';
	}
  }
	
}else{
?>
<form action="<? $_SERVER['PHP_SELF'] ?>" method="post" name="contactForm" enctype="multipart/form-data">
	<script>
		function VerifyEmail(form){
			email=form.email.value;
			if(email.indexOf('@',0)==-1 || email.indexOf(';',0)!=-1
			|| email.indexOf(' ',0)!=-1 || email.indexOf('/',0)!=-1
			|| email.indexOf(';',0)!=-1 || emial.indexOf('<',0)!=-1
			|| email.indexOf('>',0)!=-1 || email.indexOf('*',0)!=-1
			|| email.indexOf('|',0)!=-1 || email.indexOf('`',0)!=-1
			|| email.indexOf('&',0)!=-1 || email.indexOf('$',0)!=-1
			|| email.indexOf('!',0)!=-1 || email.indexOf('"',0)!=-1
			|| email.indexOf(':',0)!=-1) {
			alert("Dirección incorrecta");
		}
		function VerifyLength(form,minimo){
			text = form.name.value;
			if(text.length < minimo) {
			alert("La cadena de caracteres es menor de lo permitido.");
			}
		}
	</script>
	<div class="clear">
		<label for="-button">Nombre (Necesario):</label>
		<br/>
		<input name="name" id="name" class="" type="text" onChange="VerifyLength(this.form, 3)" />
	</div>
	<div class="clear"></div>
	<div class="">
		<br/>
		<label for="-button">Direcci&oacute;n de correo (Necesario):</label>
		<br/>
		<input name="email" id="email" class="" type="text" onChange="VerifyEmail(this.form)" />
	</div>
	<div class="clear"></div>
	<div class="">
		<br/>
		<label for="-button">Perfil:</label>
		<br/>
		<input name="asunto" id="asunto" class="" type="text">
	</div>
	<div class="">
		<br/>
		<label for="-button">Adjuntar CV:</label>
		<br/>
		<input name="archivo" id="archivo" class="" type="file" />
	</div>
	<div class="clear"></div>
	<div class="row field_textarea">
		<br/>
		<label for="-button">Comentarios:</label>
		<br/>
		<textarea id="message" name="message" class="textarea textarea_middle required" rows="10"></textarea>
	</div>
	<div class="clear"></div>
	<div style="padding: 10px 0px;">
		<label><a href="<?php get_site_url(); ?>index.php?id=aviso" target="_blank">Aviso de privacidad (por favor, haga clic y léa con atención)</a></label>
	</div>
	<div class="clear"></div>
	<div style="padding: 10px 0px;">
	<?php
          echo recaptcha_get_html($publica);
	?>
	</div>
	<div class="clear"></div>
	<div class="row">
		<input type="submit" value="Entregar mensaje" class="submit" name="enviar" />
	</div>
	<p>Se paciente y espera unos segundos mientras se carga tu archivo adjunto. Gracias.</p>
</form>
<?php }?>
