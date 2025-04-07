<?php

function btn( $texto, $classe, $id, $tipo, $parametro ){
	
	return '<button class="'.$classe.'" type="'.$tipo.'" id="'.$id.'" '.$parametro.' >'.$texto.'</button>';
	
}

function btn_vermelho( $texto ){
	
	return btn(
		$texto,
		'',
		'',
		'',
		'style="background-color:red"'
	);
	
}

?>