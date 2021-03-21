<?php

	require "../modelo/usuario.php";
	require "../modelo/metodos_usuario.php";

	$encriptacion = password_hash($_POST[""], PASSWORD_DEFAULT, array('cost'=>12));
	$usuario = new Usuario(0, $_POST[""], $encriptacion, $_POST[""]);

	$metodos = new Metodos_usuario();
	$metodos->agregar_usuario($usuario);



 ?>