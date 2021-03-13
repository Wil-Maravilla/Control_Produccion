<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="vista/resources/css/all.min.css">
	<link rel="stylesheet" href="vista/resources/css/estilos.css">
	<link rel="stylesheet" href="vista/resources/css/template.css">
	<link rel="stylesheet" href="vista/resources/css/responsive_desing.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<title>Inicio</title>
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
            	<h2>Dashboard</h2>
            </div>
            <div class="header__options">
            	<a href="#" id="menu-sesion" class="header__options--icon"><i class="fas fa-address-card" aria-hidden="true"></i></a>
            	<div class="header__options--menu" id="sesion">
	            	<a href="#" class="close-sesion">Cerrar sesion</a>
           		</div>
            </div>

		</div>
	</header>


		<aside class="aside aside-tablet" id="menuContainer">
			<nav class="aside__content">
				<ul class="menu">
					<li class="menu__items--subtitle" id="menu__toggle1">Inicio</li>
					<ul class="menu__level" id="menu__level">
						<li class="menu__items"><a href="#" class="menu__items--links">Dashboard</a></li>
					</ul><hr>


					<li class="menu__items--subtitle" id="menu__toggle2">Cuentas</li>
					<ul class="menu__level" id="menu__level2">
						<li class="menu__items"><a href="#" class="menu__items--links">Usuarios</a></li>
					</ul><hr>

					<li class="menu__items--subtitle" id="menu__toggle3">Control de produccion</li>
					<ul class="menu__level" id="menu__level3">
						<li class="menu__items"><a href="#" class="menu__items--links">Pedidos</a></li>
						<li class="menu__items"><a href="#" class="menu__items--links">Inventario</a></li>
						<li class="menu__items"><a href="#" class="menu__items--links">Combinaciones</a></li>
					</ul><hr>

					<li class="menu__items--subtitle" id="menu__toggle4">Clientes</li>
					<ul class="menu__level" id="menu__level4">
						<li class="menu__items"><a href="#" class="menu__items--links">Clientes</a></li>
					</ul><hr>

					<li class="menu__items--subtitle" id="menu__toggle5">Abastecimiento</li>
					<ul class="menu__level" id="menu__level5">
						<li class="menu__items"><a href="#" class="menu__items--links">Solicitudes de materia prima</a></li>
						<li class="menu__items"><a href="#" class="menu__items--links">Proveedores</a></li>
					</ul><hr>

					<li class="menu__items--subtitle" id="menu__toggle6">Reportes</li>
					<ul class="menu__level" id="menu__level6">
						<li class="menu__items"><a href="#" class="menu__items--links">Pedidos</a></li>
						<li class="menu__items"><a href="#" class="menu__items--links">Inventario</a></li>
						<li class="menu__items"><a href="#" class="menu__items--links">Pedidos2</a></li>
						<li class="menu__items"><a href="#" class="menu__items--links">Inventario2</a></li>
					</ul><hr>

				</ul>
			</nav>
			<div class="footer">
				<p>Copyright - Wilfredo Carías</p>
			</div>
		</aside>

		<div class="main_container">
			<section class="container" id="sectionContainer">
				<h1>Bienvenido al sistema concentrado feliz</h1>
				<p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Debitis neque deserunt eaque ut, dicta adipisci commodi ad, nulla distinctio corrupti temporibus cumque alias nam, odit sequi voluptatibus amet molestiae velit.</span>
					<span>Quas qui maiores ipsa impedit, nesciunt at aut doloribus odio quis. Ex ullam at quidem, reiciendis, consequatur rem autem totam quod pariatur doloremque, nemo aspernatur officiis odit, magnam dolorem numquam.</span>
					<span>Doloremque inventore, id officiis sit veritatis, esse? Quasi praesentium, beatae exercitationem rerum voluptatum, ipsam dolorem pariatur fugiat! Soluta, laboriosam autem aperiam, veritatis illum fugiat. Rem molestias, mollitia atque eveniet vero.</span>

					<span>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Debitis neque deserunt eaque ut, dicta adipisci commodi ad, nulla distinctio corrupti temporibus cumque alias nam, odit sequi voluptatibus amet molestiae velit.</span>
					<span>Quas qui maiores ipsa impedit, nesciunt at aut doloribus odio quis. Ex ullam at quidem, reiciendis, consequatur rem autem totam quod pariatur doloremque, nemo aspernatur officiis odit, magnam dolorem numquam.</span>
					<span>Doloremque inventore, id officiis sit veritatis, esse? Quasi praesentium, beatae exercitationem rerum voluptatum, ipsam dolorem pariatur fugiat! Soluta, laboriosam autem aperiam, veritatis illum fugiat. Rem molestias, mollitia atque eveniet vero.</span>

				</p>

			</section>
		</div>

	<script src="vista/resources/js/all.min.js"></script>
	<script src="vista/resources/js/menu.js"></script>
</body>
</html>