/* Accedidendo a elementos del dom (tabla y select) */
let tablaUsuario = document.getElementById('datos');
let selectRoles = document.getElementById('permisos');
let selectRolesModificar = document.getElementById('permisosM');
let buscador = document.getElementById('buscador');
let paginador = document.getElementById('paginar');
let formAgregar = document.getElementById('formularioAgregar');
let formModificar = document.getElementById('formularioModificar')
let btnCancelarActualizacion = document.getElementById('cancelarActualizacion');

// Cargando los datos de la base de datos a la tabla html
function llenarTabla(usuarios){
	tablaUsuario.innerHTML = "";
	for(let usuario of usuarios)
    {
        tablaUsuario.innerHTML +=
        `<tr>
            <td class='table__body--items'>${usuario.nombre}</td>
            <td class='table__body--items'>${usuario.apellido}</td>
            <td class='table__body--items'>${usuario.nombre_usuario}</td>
            <td class='table__body--items'>${usuario.nombre_rol}</td>
            <td class='table__body--items'><button class='btn-mod-user' onclick='mostrarFormActualizar(${JSON.stringify(usuario)})'>Actualizar</button>
           	<button class='btn-del-user'>Eliminar</button</td>
        </tr>`;
    }
}

// Escuchando el evento keyup(Al presionar una tecla)
buscador.addEventListener('keyup', () => {

	let datosBusqueda = new FormData();
	datosBusqueda.append("buscar", true);
	datosBusqueda.append("palabraClave", buscador.value);
	datosBusqueda.append("tabla", "usuario");

	fetch('../controlador/usuario_C.php', {
		method: 'POST',
		body: datosBusqueda
	})
	.then(datos => datos.json())
	.then(usuarios => {
		llenarTabla(usuarios);
	})
	.catch(error => console.log(error));
});


/* Funcion que hace una peticion al controloador (usuario_C.php),
 para traer los datos del usuario almacenados en la base de datos */
function cargarUsuarios(){
	//Enviando un parametro al controlador para que devuelva los datos de los usuarios
	let mensaje = new FormData();
    mensaje.append('mostrar','true');
    mensaje.append('desde', 0);
	mensaje.append('hasta', 10);

	fetch('../controlador/usuario_C.php', {
		method: "POST",
		body: mensaje
	})
	.then( datos => datos.json())
	.then( usuarios => {
		llenarTabla(usuarios);
	})
	.catch(error => console.log(error));
}

/* Funcion que hace una peticion al controloador (usuario_C.php),
 para traer los roles almacenados en la base de datos */
function cargarRoles(selectRoles, accion = null){
	//Enviando un parametro al controlador para que devuelva los roles(Permisos de usuario)
	let rol = new FormData();
    rol.append('mostrar_roles','true');

	fetch('../controlador/usuario_C.php', {
		method: "POST",
		body: rol
	})
	.then( datos => datos.json())
	.then( roles => {
		if (accion === "Modificar")
		{
			selectRoles.innerHTML = "";
			selectRoles.innerHTML = "<option>Seleccione una opcion</option>";
		}

		for(let rol of roles)
        {
        	// Cargando los roles al select de la vista usuario
            selectRoles.innerHTML +=
            `<option value="${rol.id_rol}">${rol.nombre_rol}</option>`;
        }
	})
	.catch(error => console.log(error));
}

/* funcion que obtiene el numero de paginas en base a el numero de registros divididos entre 10
(que son los 10 registros por pagina)*/
function obtenerPaginas(){

	let paginas = new FormData();
	paginas.append('paginar', true);

	fetch('../controlador/usuario_C.php', {
		method: 'POST',
		body: paginas
	})
	.then(numeroPaginas => numeroPaginas.json())
	.then(paginas => {
		let desde = 0;
		let hasta = 10;
		for (var k = 0; k < paginas[0].paginas; k++) {
			paginador.innerHTML += `<label href='#' onclick='cambiarPagina(${desde}, ${hasta})' class='pagination__items'>${k+1}</label>`;
			desde += 10;
		}
	})
	.catch(error => console.log("Error al paginar: " + error));
}

// funcion que obtiene los registros de la siguiente pagina es decir los siguientes 10 registros
function cambiarPagina(desde, hasta){

	let paginar = new FormData();
	paginar.append('mostrar', true);
	paginar.append('desde', desde);
	paginar.append('hasta', hasta);

	console.log(desde, hasta);
	fetch('../controlador/usuario_C.php', {
		method: 'POST',
		body: paginar
	})
	.then(nuevaPagina => nuevaPagina.json())
	.then(paginas => {
		llenarTabla(paginas);
	})
	.catch(error => console.log("Error al paginar: " + error));
}

// funcion que muestra el formulario para modificar los datos, que a su vez carga los registros de la base a las cajas de texto,
function mostrarFormActualizar(registroUsuario){
	window.scrollTo({
		behavior: "smooth",
		top: 0
	});

	formAgregar.classList.add("add-user__hidden");
	formModificar.classList.add("update-user__visible");

	document.getElementById("idUsuarioM").value = registroUsuario.id_usuario;
	document.getElementById("nombreM").value = registroUsuario.nombre;
	document.getElementById("apellidoM").value = registroUsuario.apellido;
	document.getElementById("usuarioM").value = registroUsuario.nombre_usuario;

	cargarRoles(selectRolesModificar, "Modificar");

}

/* funcion del boton cancelar del formulario de modificacion de registro,
que oculta el formulaio de modificacion y vuelve a mostrar el formulario de registro de usuarios*/
btnCancelarActualizacion.addEventListener('click', ()=>{
	formAgregar.classList.remove("add-user__hidden");
	formModificar.classList.remove("update-user__visible");
})

/* ----- Zona de llamada de funciones ----- */
cargarUsuarios();
cargarRoles(selectRoles);
obtenerPaginas();