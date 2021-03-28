<?php

	require "../modelo/buscador_M.php";

	// Verficando que la peticion al controlador exista, y devolviendo los registros filtrados del modelo a la vista
	if (isset($_POST["buscar"])) {
		$buscador = new Buscador_M($_POST["palabraClave"], $_POST["tabla"]);
		echo json_encode($buscador->buscar());
	}

 ?>