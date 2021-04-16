<?php
	include("../controlador/rutas.php");
	$ruta = new ruta(__DIR__, "Gestion de usuario");
?>
<?php include "plantilla/header.php" ?>
<?php include "plantilla/nav.php" ?>
<?php include "plantilla/section.php" ?>

	<div class="user-container">

		<div class="add-user" id="formularioAgregar">
			<div class="add-user__header">
				<p class="add-user__title">Agregar usuario</p>
			</div>
			<div class="add-user__form">
				<form action="../controlador/usuario_C.php" method="post">
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

		<div class="update-user" id="formularioModificar">
			<div class="add-user__header" id="
				frmActualizar">
				<p class="add-user__title">Modificar usuario</p>
			</div>
			<div class="add-user__form">
				<form action="../controlador/usuario_C.php" method="post" >
					<div class="nombre">
						<label for="nombre" class="user__form--label">Nombre</label>
						<input type="text" name="nombre" id="nombreM" class="user__form--field">
					</div>
					<div class="apellido">
						<label for="apellido" class="user__form--label">Apellido</label>
						<input type="text" name="apellido" id="apellidoM" class="user__form--field">
					</div>
					<div class="usuario">
						<label for="usuario" class="user__form--label">Nombre de usuario</label>
						<input type="text" name="usuario" id="usuarioM" class="user__form--field">
					</div>
					<div class="contra">
						<label for="contra" class="user__form--label">Contraseña</label>
						<input type="password" name="contra" id="contraM" class="user__form--field">
					</div>
					<div class="permisos">
						<label for="permisos" class="user__form--label">Permisos</label>
						<select name="permisos" id="permisosM" class="user__form--field">
							<option value="null">Seleccione una opcion</option>
						</select>
					</div>

					<input type="submit" name="guardar" value="Modificar" class="btn-add-user">
					<button class="btn-add-user">Cancelar</button>
				</form>
			</div>
		</div>



		<div class="view-user">
			<div class="view-user__header">
				<p class="view-user__title">Listado de usuarios</p>
			</div>
			<div class="container-search">
				<input type="text" id="buscador" class="search" placeholder="Buscar">
				<label for="buscador"><i class="fas fa-search"></i></label>
			</div>
			<table class="table-user" border="1px">
				<thead class="table__head">
					<tr>
						<th class="table__head--title">Nombre</th>
						<th class="table__head--title">Apellido</th>
						<th class="table__head--title">Usuario</th>
						<th class="table__head--title">Permiso</th>
						<th class="table__head--title">Acciones</th>
					</tr>
				</thead>
				<tbody class="table__body" id="datos">
				</tbody>
			</table>
			<div class="pagination" id="paginar">
			</div>
		</div>

	</div>

<?php include "plantilla/footer.php" ?>

