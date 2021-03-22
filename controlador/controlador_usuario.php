<?php

	require "../modelo/usuario.php";
	require "../modelo/metodos_usuario.php";

	$metodos = new Metodos_usuario();

	if (isset($_POST['guardar']))
	{
		$encriptacion = password_hash($_POST["contra"], PASSWORD_DEFAULT, array('cost'=>12));
		$usuario = new Usuario("", $_POST["nombre"], $_POST["apellido"], $_POST["usuario"], $encriptacion, $_POST["permisos"]);
		$metodos->agregar_usuario($usuario);
		header("Location:../vista/usuario.php?g=true");
	}
	else if (isset($_POST["roles"])) {

	}



	//$metodos->agregar_usuario($usuario);

	$datos_roles = $metodos->obtener_rol();
	$datos_usuario = $metodos->obtener_usuarios();

 ?>