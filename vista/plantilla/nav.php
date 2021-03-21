	<aside class="aside aside-tablet" id="menuContainer">
			<nav class="aside__content">
				<ul class="menu">
					<li class="menu__items--subtitle" id="menu__toggle1">Inicio</li>
					<ul class="menu__level" id="menu__level">
						<li class="menu__items"><a href="<?php echo $ruta->get_ruta_inicio(); ?>" class="menu__items--links">Dashboard</a></li>
					</ul><hr>


					<li class="menu__items--subtitle" id="menu__toggle2">Cuentas</li>
					<ul class="menu__level" id="menu__level2">
						<li class="menu__items"><a href="<?php echo $ruta->get_ruta_navegacion() . 'usuario.php'; ?>" class="menu__items--links">Usuarios</a></li>
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