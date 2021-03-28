/* Accedidendo a elementos del dom (tabla y select) */
let tablaUsuario = document.getElementById('datos');
let selectRoles = document.getElementById('permisos');
let buscador = document.getElementById('buscador');

// Escuchando el evento keyup(Al presionar una tecla)
buscador.addEventListener('keyup', () => {

	let datosBusqueda = new FormData();
	datosBusqueda.append("buscar", true);
	datosBusqueda.append("palabraClave", buscador.value);
	datosBusqueda.append("tabla", "usuario");

	fetch('../controlador/buscador_C.php', {
		method: 'POST',
		body: datosBusqueda
	})
	.then(datos => datos.json())
	.then(usuarios => {

		tablaUsuario.innerHTML = "";
		for(let usuario of usuarios)
        {
        	// Cargando los datos filtrados a la tabla de la vista usuario
            tablaUsuario.innerHTML +=
            `<tr>
                <td class='table__body--items'>${usuario.nombre}</td>
                <td class='table__body--items'>${usuario.apellido}</td>
                <td class='table__body--items'>${usuario.nombre_usuario}</td>
                <td class='table__body--items'>${usuario.nombre_rol}</td>
                <td class='table__body--items'><button class='btn-mod-user'>Actualizar</button>
                	<button class='btn-del-user'>Eliminar</button</td>
            </tr>`
        }
	})
	.catch(error => console.log(error));
});


/* Funcion que hace una peticion al controloador (usuario_C.php),
 para traer los datos del usuario almacenados en la base de datos */
function cargarUsuarios(){
	//Enviando un parametro al controlador para que devuelva los datos de los usuarios
	let mensaje = new FormData();
    mensaje.append('mostrar','true');

	fetch('../controlador/usuario_C.php', {
		method: "POST",
		body: mensaje
	})
	.then( datos => datos.json())
	.then( usuarios => {
		for(let usuario of usuarios)
        {
        	// Cargando los datos a la tabla de la vista
            tablaUsuario.innerHTML +=
            `<tr>
                <td class='table__body--items'>${usuario.nombre}</td>
                <td class='table__body--items'>${usuario.apellido}</td>
                <td class='table__body--items'>${usuario.nombre_usuario}</td>
                <td class='table__body--items'>${usuario.nombre_rol}</td>
                <td class='table__body--items'><button class='btn-mod-user'>Actualizar</button>
                	<button class='btn-del-user'>Eliminar</button</td>
            </tr>`
        }
	})
	.catch(error => console.log(error));
}

/* Funcion que hace una peticion al controloador (usuario_C.php),
 para traer los roles almacenados en la base de datos */
function cargarRoles(){
	//Enviando un parametro al controlador para que devuelva los roles(Permisos de usuario)
	let rol = new FormData();
    rol.append('mostrar_roles','true');

	fetch('../controlador/usuario_C.php', {
		method: "POST",
		body: rol
	})
	.then( datos => datos.json())
	.then( roles => {
		for(let rol of roles)
        {
        	// Cargando los roles al select de la vista usuario
            selectRoles.innerHTML +=
            `<option id="" value="${rol.id_rol}">${rol.nombre_rol}</option>`
        }
	})
	.catch(error => console.log(error));
}

/* ----- Zona de llamada de funciones ----- */
cargarUsuarios();
cargarRoles();