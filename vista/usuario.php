<?php
	include("../controlador/rutas.php");
	$ruta = new ruta(__DIR__, "Gestion de usuario");
?>
<?php include "plantilla/header.php" ?>
<?php include "plantilla/nav.php" ?>
<?php include "plantilla/section.php" ?>

	<div class="user-container">

		<div class="add-user">
			<div class="add-user__header">
				<p class="add-user__title">Agregar usuario</p>
			</div>
			<div class="add-user__form">
				<form action="../controlador/controlador_usuario.php" method="post">
					<div class="nombre">
						<label for="nombre" class="user__form--label">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="user__form--field">
					</div>
					<div class="apellido">
						<label for="apellido" class="user__form--label">Apellido</label>
						<input type="text" name="apellido" id="apellido" class="user__form--field">
					</div>
					<div class="usuario">
						<label for="usuario" class="user__form--label">Nombre de usuario</label>
						<input type="text" name="usuario" id="usuario" class="user__form--field">
					</div>
					<div class="contra">
						<label for="contra" class="user__form--label">Contraseña</label>
						<input type="password" name="contra" id="contra" class="user__form--field">
					</div>
					<div class="permisos">
						<label for="permisos" class="user__form--label">Permisos</label>
						<select name="permisos" id="permisos" class="user__form--field">
							<option value="null">Seleccione una opcion</option>
						</select>
					</div>

					<input type="submit" name="guardar" value="Guardar" class="btn-add-user">
				</form>
			</div>
		</div>

		<div class="view-user">
			<div class="view-user__header">
				<p class="view-user__title">Listado de usuarios</p>
			</div>
			<table class="table-user" border="1px" id="tablaUsuarios">
				<thead class="table__head">
					<th class="table__head--title">Nombre</th>
					<th class="table__head--title">Apellido</th>
					<th class="table__head--title">Usuario</th>
					<th class="table__head--title">Permiso</th>
					<th class="table__head--title">Acciones</th>
				</thead>
				<tbody class="table__body">
				</tbody>
			</table>
		</div>

	</div>

<?php include "plantilla/footer.php" ?>

