// Variable bandera para verificar el estado de fondo del menu en dispositivos tablet o movil
var screenBackground = 0;


/* Desplegando el contenedor del menu, al hacer click en el icono de hamburguesa */
document.getElementById('toggle__menu').addEventListener('click', function(){

	// Capturando el tamaño de pantalla del navegador
	let screenSize =  document.body.offsetWidth;
	sliderMenu(screenSize);
});

/* Desplegando el primer submenu de inicio*/
document.querySelector('#menu__toggle1').addEventListener('click', function(){
	let submenu = document.querySelector('.menu__level');
	let objSubmenu = window.getComputedStyle(submenu);

	//Obteniendo el valor de display del submenu seleccionado arriba (#menu__toggle1)
	let valorDisplay = objSubmenu.getPropertyValue('display');

	/* invocando la funcion sliderMenu que verifica el estado del submenu,
	   desplagado o no desplegado (display: none; display:block) */
	sliderSubmenu(valorDisplay, submenu);
});

document.querySelector('#menu__toggle2').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level2');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderSubmenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle3').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level3');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderSubmenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle4').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level4');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderSubmenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle5').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level5');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderSubmenu(valorDisplay, submenu);

});

document.querySelector('#menu__toggle6').addEventListener('click', function(){
	let submenu = document.querySelector('#menu__level6');
	let objSubmenu = window.getComputedStyle(submenu);
	let valorDisplay = objSubmenu.getPropertyValue('display');

	sliderSubmenu(valorDisplay, submenu);

});

/* Funcion que establece el valor display: block; para desplegar un submenu en caso este oculto.
En caso contrario oculta submenu */
function sliderSubmenu(propiedad, submenu)
{

	if (propiedad=="none")
	{
		submenu.style.display = "block";
	}
	else{
		submenu.style.display = "none";
	}
}

/* Funcion que despliega el contenedor del menu.
	Para ello primero evalua el tamaño de la pantalla del navegador */
function sliderMenu(screenSize){

  let menuContainer = document.getElementById('menuContainer');
  let sectionContainer = document.getElementById('sectionContainer');

  if (screenSize>=990)
  {
    menuContainer.classList.toggle('nav-toggled');
    sectionContainer.classList.toggle('contenedor-toggled');
  }
  else if (screenSize<990)
  {
    if (screenBackground==0)
    {
      menuContainer.style.setProperty('--ancho','100%');
      screenBackground = 1;
    }
    else if (screenBackground==1)
    {
      menuContainer.style.setProperty('--ancho','0%');
      screenBackground = 0;
    }
    menuContainer.classList.toggle('nav-toggled-tablet');

  }
}