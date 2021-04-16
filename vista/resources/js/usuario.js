/* Accedidendo a elementos del dom (tabla y select) */
let tablaUsuario = document.getElementById('datos');
let selectRoles = document.getElementById('permisos');
let buscador = document.getElementById('buscador');
let paginador = document.getElementById('paginar');
let formAgregar = document.getElementById('formularioAgregar');
let formModificar = document.getElementById('formularioModificar')

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
            <td class='table__body--items'><button class='btn-mod-user' onclick='mostrarFormActualizar()'>Actualizar</button>
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
	mensaje.append('hasta', 8);

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
		let hasta = 5;
		for (var k = 0; k < paginas[0].paginas; k++) {
			paginador.innerHTML += `<label href='#' onclick='cambiarPagina(${desde}, ${hasta})' class='pagination__items'>${k+1}</label>`;
			desde += 5;
			hasta+=5;
		}
	})
	.catch(error => console.log("Error al paginar: " + error));
}

function cambiarPagina(desde, hasta){

	let paginar = new FormData();
	paginar.append('mostrar', true);
	paginar.append('desde', desde);
	paginar.append('hasta', hasta);

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

/* ----- Zona de llamada de funciones ----- */
cargarUsuarios();
cargarRoles();
obtenerPaginas();