/*Start - TECLADO - js/teclado.js*/
document.onkeydown = function(evt){
	evt = evt || window.event;
	let isEscape = false;
	let isEnter = false;
	if ("key" in evt){
		isEscape = (evt.key == "Escape" || evt.key == "Esc");
		isEnter = (evt.key == "Enter" || evt.key == "Return");
	}else{
		isEscape = (evt.keyCode == 27);
		isEnter = (evt.keyCode == 13);
	}
	if (isEscape) {/*SEMPRE QUE SE PRESSIONAR ESC FAZ O QUE ESTA ABAIXO*/
		console.log('ESC');
	}
	if (isEnter) {/*SEMPRE QUE SE PRESSIONAR ESC FAZ O QUE ESTA ABAIXO*/
		
		console.log('Enter');
		
	}
};
/*End - TECLADO - js/teclado.js*/