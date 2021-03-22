<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $ruta->get_ruta_src() . 'css/all.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo $ruta->get_ruta_src() . 'css/estilos.css'; ?>">
	<link rel="stylesheet" href="<?php echo $ruta->get_ruta_src() . 'css/template.css'; ?>">
	<link rel="stylesheet" href="<?php echo $ruta->get_ruta_src() . 'css/responsive_desing.css'; ?>">
	<link rel="stylesheet" href="resources/css/usuario.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<title><?php echo $ruta->get_titulo(); ?></title>
</head>
<body>

	<header class="header">
		<div class="header__content">
			<div class="header__logo">
				<h1 class="header__title">Concentrados El Gordito</h1>
				<div class="header__toggle">
					<a href="#" id="toggle__menu" class="header__toggle--icon"><i class="fa fa-bars " aria-hidden="true"></i></a>
				</div>
			</div>
            <div class="header__page">
            	<h2><?php echo $ruta->get_titulo(); ?></h2>
            </div>
            <div class="header__options">
            	<a href="#" id="menu-sesion" class="header__options--icon"><i class="fas fa-address-card" aria-hidden="true"></i></a>
            	<div class="header__options--menu" id="sesion">
	            	<a href="#" class="close-sesion">Cerrar sesion</a>
           		</div>
            </div>

		</div>
	</header>
