<?php

function dd( $variavel ){

	$resultado_dd = gettype( $variavel );
	
	echo 'O resultado é um: '. $resultado_dd;
	
	if( $resultado_dd == 'object' ){
	
		echo'<pre>';
		
		var_dump( $variavel );

		echo'</pre>';

		die();
		
	}else{
		
		echo'<pre>';
		
		print_r( $variavel );
		
		echo'</pre>';
		
		die();
		
	}
	
}

function data( $data_recebida ){
	
	$data_pronta = DateTime::createFromFormat( 'Y-m-d', $data_recebida )->format('d/m/Y');
	
	return $data_pronta;
	
}

function data_tempo( $data_recebida ){
	
	$data_pronta = DateTime::createFromFormat( 'Y-m-d H:i:s', $data_recebida )->format('d/m/Y H:i:s');
	
	return $data_pronta;
	
}

function data_tempo_invertida( $data_recebida ){
	
	$data_pronta = DateTime::createFromFormat( 'd/m/Y H:i:s', $data_recebida )->format('Y-m-d H:i:s');
	
	return $data_pronta;
	
}

function data_invertida( $data_recebida ){
	
	$data_pronta = DateTime::createFromFormat('d/m/Y', $data_recebida)->format('Y-m-d');
	
	return $data_pronta;
	
}

function moeda( $valor_recebido ){
	
	$moeda_pronta = number_format( $valor_recebido,2,",","." );
	
	return $moeda_pronta;
	
}

function moeda_invertida( $valor_recebido ){
	
	$moeda_pronta = number_format( $valor_recebido,2,".","," );
	
	return $moeda_pronta;
	
}

function mascara( $mask, $str ){

    $str = str_replace(" ","",$str);

	for($i=0;$i<strlen($str);$i++){
		
		$mask[strpos($mask,"#")] = $str[$i];
		
	}

    return $mask;

}

function cnpj( $cnpj_recebido ){
	
	$cnpj_molde = '##.###.###/####-##';
	
	return mascara( $cnpj_molde, $cnpj_recebido );
	
}

function mes_ano( $data_recebida ){
	
	if( strlen( $data_recebida ) > 7 ){
		
		$mes_ano = date( 'm/Y', strtotime( $data_recebida ) );
		
	}else{
		
		$mes_ano = $data_recebida;
		
	}
	
	return $mes_ano;
	
}

?>