let vtnMenu = document.getElementById('btnmenu----');
let menuU = document.getElementById('menu-----');
vtnMenu.addEventListener('click', function(){
   'use strict';
    menuU.classList.toggle('mostrar---');
});





	// Mostramos y ocultamos submenus
	$('.sub__menu__').click(function(){
		$(this).children('.Children--').slideToggle();
	});
}


