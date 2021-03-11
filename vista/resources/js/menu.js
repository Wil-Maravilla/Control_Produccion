/* Desplegando el aside con un click en el icono de hamburguesa */
document.getElementById('toggle__menu').addEventListener('click', function(){
	let contenedorMenu = document.getElementById('contenedorMenu');
	let objMenu = window.getComputedStyle(contenedorMenu);
	let valorWidth = objMenu.getPropertyValue("width");

	if (valorWidth=="280px")
	{
		contenedorMenu.style.width = "0px";
	}
	else{
		contenedorMenu.style.width = "280px";
	}
});

/* Desplegando el primer submenu de inicio*/
document.querySelector('#menu__toggle1').addEventListener('click', function(){
	let submenu = document.querySelector('.menu__level');
	let objSubmenu = window.getComputedStyle(submenu);
	//Obteniendo el valor de display del submenu seleccionado arriba
	let valorDisplay = objSubmenu.getPropertyValue('display');

	/* invocando la funcion sliderMenu que verifica el estado del submenu,
	   desplagado o no desplegado (display: none; display:block) */
	sliderMenu(valorDisplay, submenu);
});

document.querySelector('#menu__toggle2').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level2');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderMenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle3').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level3');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderMenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle4').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level4');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderMenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle5').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level5');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderMenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle6').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level6');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderMenu(valorDisplay, submenu);

});

function sliderMenu(propiedad, submenu){

	if (propiedad=="none")
	{
		submenu.style.display = "block";
	}
	else{
		submenu.style.display = "none";
	}
}