<!DOCTYPE html>

<html lang="pt-br">

	<head>
	
		<?php
			require "routes/main.php";
			require "routes/model.php";
		?>

		<title><?php echo $head_title ?></title>

		<?php require "view/head.php" ?>
		
		<link rel="stylesheet" href="css/fontes.css" />
		<link rel="stylesheet" href="css/paleta.css" />
		<link rel="stylesheet" href="css/dinamico.css" />
		<link rel="stylesheet" href="css/estilo.css" />
		<link rel="stylesheet" href="css/tablet.css" />
		<link rel="stylesheet" href="css/smartphone.css" />
		
	</head>

	<body>

		<?php require "view/scripts-top.php" ?>

		<main class="container" itemscope>
			
			<?php
				
				if( !isset( $_GET['pagina'] ) ){
					
					//echo'<script> alert("home"); </script>';
					require 'routes/home.php';
					
				}else{
					
					$pagina_existe = 'nao';
					
					/* Start - PAGINAS FIXAS*/
					if( $_GET['pagina'] == 'obrigado' ){
						$titulo_da_pagina = 'Obrigado';
						require 'routes/obrigado.php';
						$pagina_existe = 'sim';
					}
					/*End - PAGINAS FIXAS*/
					
					foreach( $paginas as $pagina ){
						
						//echo'<script> alert("'.$_GET['pagina'].'"); </script>';
						
						/* Start - PAGINAS DINÂMICAS - DENTRO DO BANCO OU ARRAY */
						if( $_GET['pagina'] == $pagina['pagina'] ){
							$titulo_da_pagina = $pagina['titulo'];
							require 'routes/conteudo.php';
							$pagina_existe = 'sim';
						}
						/* End - PAGINAS DINÂMICAS - DENTRO DO BANCO OU ARRAY */
						
					}
					
					if( $pagina_existe == 'nao' ){ require 'routes/404.php'; } //PÁGINA NÃO EXISTE
					
				}
				
			?>
			
		</main>
		
		<?php require "view/scripts-bottom.php" ?>
		
	</body>

</html>