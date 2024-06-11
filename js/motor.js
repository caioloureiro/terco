/*Start - js/motor.js */
let total_itens = 62;
let contador = 0;
let string = '';

if( contador == 0 ){
	document.querySelector('.escurecer').classList.add('on');
	document.querySelector('.escolha').classList.add('on');
	console.log('contador: '+ contador);
}

/*Start - Mistérios Gozosos*/
document.querySelector(".gozosos").addEventListener("click", function() {
	
	document.querySelector('.creio').classList.add('on');
	document.querySelector('.escolha').classList.remove('on');
	string = 'gozosos';
	contador = 1;
	console.log('mistérios: '+ string);
	console.log('contador: '+ contador);
	
});
document.querySelector(".primeiro-misterio-gozoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.primeiro-misterio-gozoso').classList.remove('on');
	document.querySelector('.item7').classList.add('ativo');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando primeiro mistério.');
	contador = 8;
	
});
document.querySelector(".segundo-misterio-gozoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.segundo-misterio-gozoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando segundo mistério.');
	contador++;
	
});
document.querySelector(".terceiro-misterio-gozoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.terceiro-misterio-gozoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando terceiro mistério.');
	contador++;
	
});
document.querySelector(".quarto-misterio-gozoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quarto-misterio-gozoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quarto mistério.');
	contador++;
	
});
document.querySelector(".quinto-misterio-gozoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quinto-misterio-gozoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quinto mistério.');
	contador++;
	
});
/*End - Mistérios Gozosos*/

/*Start - Mistérios Luminosos*/
document.querySelector(".luminosos").addEventListener("click", function() {
	
	document.querySelector('.creio').classList.add('on');
	document.querySelector('.escolha').classList.remove('on');
	string = 'luminosos';
	contador = 1;
	console.log('mistérios: '+ string);
	console.log('contador: '+ contador);
	
});
document.querySelector(".primeiro-misterio-luminoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.primeiro-misterio-luminoso').classList.remove('on');
	document.querySelector('.item7').classList.add('ativo');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando primeiro mistério.');
	contador = 8;
	
});
document.querySelector(".segundo-misterio-luminoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.segundo-misterio-luminoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando segundo mistério.');
	contador++;
	
});
document.querySelector(".terceiro-misterio-luminoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.terceiro-misterio-luminoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando terceiro mistério.');
	contador++;
	
});
document.querySelector(".quarto-misterio-luminoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quarto-misterio-luminoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quarto mistério.');
	contador++;
	
});
document.querySelector(".quinto-misterio-luminoso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quinto-misterio-luminoso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quinto mistério.');
	contador++;
	
});
/*End - Mistérios Luminosos*/

/*Start - Mistérios Dolorosos*/
document.querySelector(".dolorosos").addEventListener("click", function() {
	
	document.querySelector('.creio').classList.add('on');
	document.querySelector('.escolha').classList.remove('on');
	string = 'dolorosos';
	contador = 1;
	console.log('mistérios: '+ string);
	console.log('contador: '+ contador);
	
});
document.querySelector(".primeiro-misterio-doloroso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.primeiro-misterio-doloroso').classList.remove('on');
	document.querySelector('.item7').classList.add('ativo');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando primeiro mistério.');
	contador = 8;
	
});
document.querySelector(".segundo-misterio-doloroso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.segundo-misterio-doloroso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando segundo mistério.');
	contador++;
	
});
document.querySelector(".terceiro-misterio-doloroso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.terceiro-misterio-doloroso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando terceiro mistério.');
	contador++;
	
});
document.querySelector(".quarto-misterio-doloroso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quarto-misterio-doloroso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quarto mistério.');
	contador++;
	
});
document.querySelector(".quinto-misterio-doloroso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quinto-misterio-doloroso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quinto mistério.');
	contador++;
	
});
/*End - Mistérios Dolorosos*/

/*Start - Mistérios Gloriosos*/
document.querySelector(".gloriosos").addEventListener("click", function() {
	
	document.querySelector('.creio').classList.add('on');
	document.querySelector('.escolha').classList.remove('on');
	string = 'gloriosos';
	contador = 1;
	console.log('mistérios: '+ string);
	console.log('contador: '+ contador);
	
});
document.querySelector(".primeiro-misterio-glorioso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.primeiro-misterio-glorioso').classList.remove('on');
	document.querySelector('.item7').classList.add('ativo');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando primeiro mistério.');
	contador = 8;
	
});
document.querySelector(".segundo-misterio-glorioso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.segundo-misterio-glorioso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando segundo mistério.');
	contador++;
	
});
document.querySelector(".terceiro-misterio-glorioso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.terceiro-misterio-glorioso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando terceiro mistério.');
	contador++;
	
});
document.querySelector(".quarto-misterio-glorioso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quarto-misterio-glorioso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quarto mistério.');
	contador++;
	
});
document.querySelector(".quinto-misterio-glorioso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.quinto-misterio-glorioso').classList.remove('on');
	document.querySelector('.item'+ contador +'').classList.add('ativo');
	console.log('Iniciando quinto mistério.');
	contador++;
	
});
/*End - Mistérios Gloriosos*/

/*Start - Glória*/
document.querySelector(".gloria .btn").addEventListener("click", function() {
	
	document.querySelector('.gloria').classList.remove('on');
	
});
/*End - Glória*/

/*Start - Intenções*/
document.querySelector(".intencoes .btn").addEventListener("click", function() {
	
	document.querySelector('.intencoes').classList.remove('on');
	
});
/*End - Intenções*/

/*Start - Creio*/
document.querySelector(".creio .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.creio').classList.remove('on');
	document.querySelector('.item1').classList.add('ativo');
	contador = 2;
	
});
/*End - Creio*/

/*Start - Pai Nosso*/
document.querySelector(".tela-pai-nosso .btn").addEventListener("click", function() {
	
	document.querySelector('.escurecer').classList.remove('on');
	document.querySelector('.tela-pai-nosso').classList.remove('on');
	
});
/*End - Pai Nosso*/

/*Start - PRINCIPAL*/
document.querySelector(".trigger").addEventListener("click", function() {
	
	if(contador < total_itens){
		
		if( contador <= 60 ){ document.querySelector('.item'+ contador +'').classList.add('ativo'); }
		
		if( contador == 5){
			document.querySelector('.escurecer').classList.add('on');
			document.querySelector('.gloria').classList.add('on');
			document.querySelector('.intencoes').classList.add('on');
			if( string == "gozosos"){document.querySelector('.primeiro-misterio-gozoso').classList.add('on');}
			if( string == "luminosos"){document.querySelector('.primeiro-misterio-luminoso').classList.add('on');}
			if( string == "dolorosos"){document.querySelector('.primeiro-misterio-doloroso').classList.add('on');}
			if( string == "gloriosos"){document.querySelector('.primeiro-misterio-glorioso').classList.add('on');}
			document.querySelector('.tela-pai-nosso').classList.add('on');
		}
		if( contador == 17){
			document.querySelector('.escurecer').classList.add('on');
			document.querySelector('.gloria').classList.add('on');
			if( string == "gozosos"){document.querySelector('.segundo-misterio-gozoso').classList.add('on');}
			if( string == "luminosos"){document.querySelector('.segundo-misterio-luminoso').classList.add('on');}
			if( string == "dolorosos"){document.querySelector('.segundo-misterio-doloroso').classList.add('on');}
			if( string == "gloriosos"){document.querySelector('.segundo-misterio-glorioso').classList.add('on');}
			document.querySelector('.tela-pai-nosso').classList.add('on');
		}
		if( contador == 28){
			document.querySelector('.escurecer').classList.add('on');
			document.querySelector('.gloria').classList.add('on');
			if( string == "gozosos"){document.querySelector('.terceiro-misterio-gozoso').classList.add('on');}
			if( string == "luminosos"){document.querySelector('.terceiro-misterio-luminoso').classList.add('on');}
			if( string == "dolorosos"){document.querySelector('.terceiro-misterio-doloroso').classList.add('on');}
			if( string == "gloriosos"){document.querySelector('.terceiro-misterio-glorioso').classList.add('on');}
			document.querySelector('.tela-pai-nosso').classList.add('on');
		}
		if( contador == 39){
			document.querySelector('.escurecer').classList.add('on');
			document.querySelector('.gloria').classList.add('on');
			if( string == "gozosos"){document.querySelector('.quarto-misterio-gozoso').classList.add('on');}
			if( string == "luminosos"){document.querySelector('.quarto-misterio-luminoso').classList.add('on');}
			if( string == "dolorosos"){document.querySelector('.quarto-misterio-doloroso').classList.add('on');}
			if( string == "gloriosos"){document.querySelector('.quarto-misterio-glorioso').classList.add('on');}
			document.querySelector('.tela-pai-nosso').classList.add('on');
		}
		if( contador == 50){
			document.querySelector('.escurecer').classList.add('on');
			document.querySelector('.gloria').classList.add('on');
			if( string == "gozosos"){document.querySelector('.quinto-misterio-gozoso').classList.add('on');}
			if( string == "luminosos"){document.querySelector('.quinto-misterio-luminoso').classList.add('on');}
			if( string == "dolorosos"){document.querySelector('.quinto-misterio-doloroso').classList.add('on');}
			if( string == "gloriosos"){document.querySelector('.quinto-misterio-glorioso').classList.add('on');}
			document.querySelector('.tela-pai-nosso').classList.add('on');
		}
		if( contador == 61){
			document.querySelector('.escurecer').classList.add('on');
			document.querySelector('.gloria').classList.add('on');
			document.querySelector('.agradecimento').classList.add('on');
			document.querySelector('.salve-rainha').classList.add('on');
		}
		
		console.log('contador: '+ contador );
		//console.log('total_itens: '+ total_itens);
		contador++;
	
	}

});
/*End - PRINCIPAL*/

/*Start - Reiniciar*/
document.querySelector(".zerar").addEventListener("click", function() {
	
	console.log('resetar contador: '+ contador);

	for(let zerar = 0; zerar <= 60; zerar++){
		
		if( contador <= 60 ){ 
			document.querySelector('.item'+ zerar +'').classList.remove('ativo'); 
		}
		
	}
	document.querySelector('.escurecer').classList.add('on');
	document.querySelector('.escolha').classList.add('on');
	contador = 0;
	
	console.log('REINICIADO - contador: '+ contador);
	
});
/*End - Reiniciar*/

/*Start - Agradecimento*/
document.querySelector(".agradecimento .btn").addEventListener("click", function() {
	
	document.querySelector('.agradecimento').classList.remove('on');
	
});
/*End - Agradecimento*/

/*Start - Salve Rainha*/
document.querySelector(".salve-rainha .btn").addEventListener("click", function() {
	
	document.querySelector('.salve-rainha').classList.remove('on');
	
	console.log('contador: '+ contador);

	for(let terminar = 0; terminar < total_itens; terminar++){
		
		if( terminar <= 60 ){ document.querySelector('.item'+ terminar +'').classList.remove('ativo'); }

	}
	document.querySelector('.escurecer').classList.add('on');
	document.querySelector('.escolha').classList.add('on');
	
	contador = 0;
	
	console.log('Terço dos mistérios '+ string +' finalizado.');
	
});
/*End - Salve Rainha*/

/*End - js/motor.js */