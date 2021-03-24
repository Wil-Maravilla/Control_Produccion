<?php

	require "../modelo/usuario_M.php";
	require "../modelo/metodos_usuario.php";

	$metodos = new Metodos_usuario();

	if (isset($_POST['mostrar']))
	{
		$datos_usuario = $metodos->obtener_usuarios();
		echo json_encode($datos_usuario);
	}
	if (isset($_POST['mostrar_roles']))
	{
		$datos_roles = $metodos->obtener_rol();
		echo json_encode($datos_roles);
	}

	if (isset($_POST['guardar']))
	{
		$encriptacion = password_hash($_POST["contra"], PASSWORD_DEFAULT, array('cost'=>12));
		$usuario = new Usuario("", $_POST["nombre"], $_POST["apellido"], $_POST["usuario"], $encriptacion, $_POST["permisos"]);
		$metodos->agregar_usuario($usuario);
		header("Location:../vista/usuario.php?g=true");
	}
	else if (isset($_POST["roles"])) {

	}

 ?>