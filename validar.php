<?php

  $usuario_correcto = "rikardomendez77@gmail.com";
  $palabra_secreta_correcta = "12345";
  /* Recibiendo user y pass  */
	$user = $_POST['correo'];
  $pass = $_POST['pass'];

echo "$user";
echo "$pass";

  if ($user === $usuario_correcto && $pass === $palabra_secreta_correcta) {
      /*Si los datos recibidos son correctos se redirecciona al inicio del administrador */
      header('LOCATION:index.php');

    }else{
      header('LOCATION:error.php');

    }
?>
