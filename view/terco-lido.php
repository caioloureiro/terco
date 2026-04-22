<!-- Start - view/terco-lido.php -->
<?php

$divino_jesus = "Divino Jesus, nós Vos oferecemos este terço que vamos rezar, meditando nos mistérios da nossa Redenção. Concedei-nos, por intercessão de Vossa Mãe Santíssima, a quem me dirijo, as virtudes que nos são necessárias para bem rezá-lo e a graça de ganharmos as indulgências anexas a esta  santa devoção.";
$sinal_da_cruz = "Em nome do Pai, do Filho e do Espírito Santo. Amém.";
$creio = "Creio em Deus Pai, todo-poderoso, criador do céu e da terra; e em Jesus Cristo, seu único Filho, nosso Senhor; que foi concebido pelo poder do Espírito Santo, nasceu da Virgem Maria, padeceu sob Pôncio Pilatos, foi crucificado, morto e sepultado; desceu à mansão dos mortos; ressuscitou ao terceiro dia; subiu aos céus, está sentado à direita de Deus Pai todo-poderoso, donde há de vir a julgar os vivos e os mortos. Creio no Espírito Santo; na santa Igreja católica; na comunhão dos santos; na remissão dos pecados; na ressurreição da carne; na vida eterna. Amém.";
$pai_nosso = "Pai Nosso, que estais no céu, santificado seja o vosso nome; venha a nós o vosso reino; seja feita a vossa vontade, assim na terra como no céu. O pão nosso de cada dia nos dai hoje; perdoai-nos as nossas ofensas, assim como nós perdoamos a quem nos tem ofendido; e não nos deixeis cair em tentação, mas livrai-nos do mal. Amém.";
$ave_maria = "Ave Maria, cheia de graça, o Senhor é convosco; bendita sois vós entre as mulheres e bendito é o fruto do vosso ventre, Jesus. Santa Maria, Mãe de Deus, rogai por nós, pecadores, agora e na hora de nossa morte. Amém.";
$gloria_ao_pai = "Glória ao Pai, ao Filho e ao Espírito Santo. Como era no princípio, agora e sempre. Amém.";
$o_meu_jesus = "Ó meu Jesus, perdoai-nos, livrai-nos do fogo do inferno, levai as almas todas para o céu e socorrei principalmente as que mais precisarem.";
$infinitas_gracas = "Infinitas graças vos damos, Soberana Rainha, pelos benefícios que recebemos de vossas mãos liberais. Dignai-vos, agora e para sempre, tomar-nos debaixo do vosso poderoso amparo. E, para mais vos obrigar, vos saudamos com uma Salve Rainha.";
$salve_rainha = "Salve Rainha, Mãe de Misericórdia, vida, doçura e esperança nossa, salve! A vós bradamos os degredados filhos de Eva. A vós suspiramos, gemendo e chorando neste vale de lágrimas. Eia, pois, advogada nossa, esses vossos olhos misericordiosos a nós volvei. E depois deste desterro, mostrai-nos Jesus, bendito fruto do vosso ventre. Ó clemente, ó piedosa, ó doce Virgem Maria!";

$misterios_gozosos = [
	"Anunciação do Anjo a Nossa Senhora",
	"Visitação de Nossa Senhora a Santa Isabel",
	"Nascimento de Jesus",
	"Apresentação de Jesus no Templo",
	"Perda e Encontro de Jesus no Templo"
];
$misterios_dolorosos = [
	"Agonia de Jesus no Horto das Oliveiras",
	"Flagelação de Jesus",
	"Coroação de espinhos de Jesus",
	"Carregamento da Cruz por Jesus",
	"Crucificação e Morte de Jesus"
];
$misterios_gloriosos = [
	"Ressurreição de Jesus",
	"Ascensão de Jesus aos Céus",
	"Vinda do Espírito Santo sobre os Apóstolos",
	"Assunção de Nossa Senhora aos Céus",
	"Coroação de Nossa Senhora como Rainha do Céu e da Terra"
];
$misterios_luminosos = [
	"Batismo de Jesus no Rio Jordão",
	"Auto-revelação de Jesus nas Bodas de Caná",
	"Anúncio do Reino de Deus e Convite à Conversão",
	"Transfiguração de Jesus no Monte Tabor",
	"Instituição da Eucaristia"
];

?>

<style>
	:root {
		--terco-bordo: #2d1a2e;
		--terco-cream: #f5f3e7;
		--terco-toolbar-bg: #1a1020;
		--terco-toolbar-inner: #231326;
		--terco-toolbar-border: #3a2340;
		--terco-toolbar-shadow: rgba(0, 0, 0, 0.1);
		--ibarra: "Ibarra Real Nova", serif;
		--segoe: "Segoe UI", sans-serif;
		--fontSizeTitulo: 3vw;
		--lineHeightTitulo: 2vw;
		--fontSizeTexto: 1.3vw;
		--lineHeightTexto: 2vw;
		--fontSizeBtn: 1.3vw;
		--lineHeightBtn: 2vw;

		/* Cores dos Mistérios */
		--gozosos-bg: #0a1f3b;
		--gozosos-inner: #1a3a5a;
		--gozosos-border: #2a5a8a;
		--luminosos-bg: #0f2b1a;
		--luminosos-inner: #1f4b2a;
		--luminosos-border: #2f6b3a;
		--dolorosos-bg: #3a0f1f;
		--dolorosos-inner: #5a1f3a;
		--dolorosos-border: #8a2f5a;
		--gloriosos-bg: #3a2810;
		--gloriosos-inner: #5a4420;
		--gloriosos-border: #8a6a30;
	}

	* {
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-webkit-touch-callout: auto;
		-webkit-user-select: auto;
		-khtml-user-select: auto;
		-moz-user-select: auto;
		-ms-user-select: auto;
		user-select: auto;
	}

	body {
		background-color: var(--terco-bordo);
		color: var(--terco-cream);
		font-family: var(--segoe);
		margin: 0;
		padding: 0;
	}

	h1 {
		font-family: var(--ibarra);
		font-size: var(--fontSizeTitulo);
		line-height: var(--lineHeightTitulo);
		margin: 0;
		text-align: center;
	}

	.titulo-pagina {
		margin-bottom: 2vw;
		border-bottom: 2px solid var(--terco-toolbar-border);
		padding-bottom: 1vw;
	}

	main {
		width: 90vw;
		max-width: 80vw;
		margin: 4vw auto;
		background-color: var(--preto_lente03);
		border-radius: 1vw;
		padding: 3vw;
		box-sizing: border-box;
		display: block;
	}

	p {
		font-size: var(--fontSizeTexto);
		line-height: var(--lineHeightTexto);
		margin-bottom: 2vw;
		color: var(--terco-cream);
	}

	.btn {
		background-color: var(--terco-cream);
		color: black;
		font-size: var(--fontSizeBtn);
		line-height: var(--lineHeightBtn);
		padding: 1vw 3vw;
		border: none;
		border-radius: 0.5vw;
		cursor: pointer;
		text-decoration: none;
		transition: background 0.2s;
		margin-right: 1vw;
		margin-bottom: 1vw;
		display: inline-block;
		width: auto;
		height: auto;
	}

	.btn:hover {
		background-color: white;
		color: var(--terco-bordo);
	}

	.btn:active {
		background-color: #e0dcc7;
	}

	.selecionar_texto {
		background-color: var(--terco-toolbar-bg);
		border: 1px solid var(--terco-toolbar-border);
		border-radius: 0.8vw;
		padding: 2vw;
		margin-top: 2vw;
		box-shadow: 0 0.26vw 1vw 0 var(--terco-toolbar-shadow);
	}

	.misterio {
		animation: fadeIn 0.3s ease-in;
	}

	.barra-de-ferramentas {
		background: var(--preto_lente03);
		border-radius: 0.8vw;
		padding: 1.5vw 2vw;
		display: flex;
		align-items: center;
		gap: 1vw;
		margin: 2vw 0 0 0;
		box-shadow: 0 0.26vw 1vw 0 var(--terco-toolbar-shadow);
		flex-wrap: wrap;
	}

	.barra-de-ferramentas label {
		color: var(--terco-cream);
		font-size: 1.3vw;
		margin-right: 0.7vw;
	}

	.barra-de-ferramentas select {
		background: var(--preto_lente03);
		color: var(--terco-cream);
		border: 0.13vw solid var(--terco-toolbar-border);
		border-radius: 0.5vw;
		padding: 0.7vw 1.5vw;
		font-size: 1.3vw;
		flex: 1;
		min-width: 200px;
	}

	.barra-de-ferramentas .btn {
		background-color: var(--terco-cream);
		color: black;
		padding: 0.7vw 2vw;
		margin: 0;
	}

	@keyframes fadeIn {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}

	/* Cores dos mistérios */
	body.corpo-gozosos {
		background-color: var(--gozosos-bg);
		transition: background-color 0.3s ease;
	}

	body.corpo-gozosos .selecionar_texto {
		background-color: var(--gozosos-inner);
		border-color: var(--gozosos-border);
	}

	body.corpo-luminosos {
		background-color: var(--luminosos-bg);
		transition: background-color 0.3s ease;
	}

	body.corpo-luminosos .selecionar_texto {
		background-color: var(--luminosos-inner);
		border-color: var(--luminosos-border);
	}

	body.corpo-dolorosos {
		background-color: var(--dolorosos-bg);
		transition: background-color 0.3s ease;
	}

	body.corpo-dolorosos .selecionar_texto {
		background-color: var(--dolorosos-inner);
		border-color: var(--dolorosos-border);
	}

	body.corpo-gloriosos {
		background-color: var(--gloriosos-bg);
		transition: background-color 0.3s ease;
	}

	body.corpo-gloriosos .selecionar_texto {
		background-color: var(--gloriosos-inner);
		border-color: var(--gloriosos-border);
	}

	@media only screen and (max-width:1024px) and (orientation: portrait) {
		:root {
			--fontSizeTitulo: 15vw;
			--lineHeightTitulo: 20vw;
			--fontSizeTexto: 4vw;
			--lineHeightTexto: 6vw;
			--fontSizeBtn: 4vw;
			--lineHeightBtn: 6vw;
		}

		main {
			width: 95vw;
			max-width: 100vw;
			margin: 2vw auto;
			padding: 2vw;
		}

		.btn {
			padding: 2vw 4vw;
			margin-right: 1vw;
			margin-bottom: 1vw;
		}

		.selecionar_texto {
			padding: 3vw;
			margin-top: 3vw;
		}

		.barra-de-ferramentas {
			padding: 2vw;
			margin-top: 2vw;
			flex-direction: column;
		}

		.barra-de-ferramentas label {
			font-size: 3vw;
		}

		.barra-de-ferramentas select {
			font-size: 3vw;
			padding: 2vw;
		}

		.barra-de-ferramentas .btn {
			padding: 2vw 4vw;
			font-size: 3vw;
		}
	}
</style>

<h1 class="titulo-pagina">Terço Lido</h1>
<p>
	<button class="btn" onclick="window.location.href = './';">Voltar</button>
	<button class="btn" onclick="selecionarTexto()">Selecionar Texto</button>
</p>

<p>
	<button class="btn" onclick="selecionarMisterio('gozosos')">Mistérios Gozosos</button>
	<button class="btn" onclick="selecionarMisterio('dolorosos')">Mistérios Dolorosos</button>
	<button class="btn" onclick="selecionarMisterio('gloriosos')">Mistérios Gloriosos</button>
	<button class="btn" onclick="selecionarMisterio('luminosos')">Mistérios Luminosos</button>
</p>

<div id="gozosos" class="selecionar_texto misterio" style="display: block;">

	<p><?= $sinal_da_cruz ?></p>

	<p><?= $divino_jesus ?></p>

	<p>Momento das intenções do Santo Terço.</p>

	<p><?= $creio ?></p>

	<p><?= $pai_nosso ?></p>

	<p>O anjo do Senhor anunciou a Maria. E ela concebeu do Espírito Santo.</p>
	<p><?= $ave_maria ?></p>
	<p>"Eis aqui a serva do Senhor. Faça-se em mim segundo a vossa palavra."</p>
	<p><?= $ave_maria ?></p>
	<p>"E o Verbo se fez carne e habitou entre nós."</p>
	<p><?= $ave_maria ?></p>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Primeiro Mistério contemplamos <?= $misterios_gozosos[0] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Segundo Mistério contemplamos <?= $misterios_gozosos[1] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Terceiro Mistério contemplamos <?= $misterios_gozosos[2] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quarto Mistério contemplamos <?= $misterios_gozosos[3] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quinto Mistério contemplamos <?= $misterios_gozosos[4] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p><?= $infinitas_gracas ?></p>
	<p><?= $salve_rainha ?></p>

</div>

<div id="dolorosos" class="selecionar_texto misterio" style="display: none;">

	<p><?= $sinal_da_cruz ?></p>

	<p><?= $divino_jesus ?></p>

	<p>Momento das intenções do Santo Terço.</p>

	<p><?= $creio ?></p>

	<p><?= $pai_nosso ?></p>

	<p>O anjo do Senhor anunciou a Maria. E ela concebeu do Espírito Santo.</p>
	<p><?= $ave_maria ?></p>
	<p>"Eis aqui a serva do Senhor. Faça-se em mim segundo a vossa palavra."</p>
	<p><?= $ave_maria ?></p>
	<p>"E o Verbo se fez carne e habitou entre nós."</p>
	<p><?= $ave_maria ?></p>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Primeiro Mistério contemplamos <?= $misterios_dolorosos[0] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Segundo Mistério contemplamos <?= $misterios_dolorosos[1] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Terceiro Mistério contemplamos <?= $misterios_dolorosos[2] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quarto Mistério contemplamos <?= $misterios_dolorosos[3] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quinto Mistério contemplamos <?= $misterios_dolorosos[4] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p><?= $infinitas_gracas ?></p>
	<p><?= $salve_rainha ?></p>

</div>

<div id="gloriosos" class="selecionar_texto misterio" style="display: none;">

	<p><?= $sinal_da_cruz ?></p>

	<p><?= $divino_jesus ?></p>

	<p>Momento das intenções do Santo Terço.</p>

	<p><?= $creio ?></p>

	<p><?= $pai_nosso ?></p>

	<p>O anjo do Senhor anunciou a Maria. E ela concebeu do Espírito Santo.</p>
	<p><?= $ave_maria ?></p>
	<p>"Eis aqui a serva do Senhor. Faça-se em mim segundo a vossa palavra."</p>
	<p><?= $ave_maria ?></p>
	<p>"E o Verbo se fez carne e habitou entre nós."</p>
	<p><?= $ave_maria ?></p>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Primeiro Mistério contemplamos <?= $misterios_gloriosos[0] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Segundo Mistério contemplamos <?= $misterios_gloriosos[1] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Terceiro Mistério contemplamos <?= $misterios_gloriosos[2] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quarto Mistério contemplamos <?= $misterios_gloriosos[3] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quinto Mistério contemplamos <?= $misterios_gloriosos[4] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p><?= $infinitas_gracas ?></p>
	<p><?= $salve_rainha ?></p>

</div>

<div id="luminosos" class="selecionar_texto misterio" style="display: none;">

	<p><?= $sinal_da_cruz ?></p>

	<p><?= $divino_jesus ?></p>

	<p>Momento das intenções do Santo Terço.</p>

	<p><?= $creio ?></p>

	<p><?= $pai_nosso ?></p>

	<p>O anjo do Senhor anunciou a Maria. E ela concebeu do Espírito Santo.</p>
	<p><?= $ave_maria ?></p>
	<p>"Eis aqui a serva do Senhor. Faça-se em mim segundo a vossa palavra."</p>
	<p><?= $ave_maria ?></p>
	<p>"E o Verbo se fez carne e habitou entre nós."</p>
	<p><?= $ave_maria ?></p>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Primeiro Mistério contemplamos <?= $misterios_luminosos[0] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Segundo Mistério contemplamos <?= $misterios_luminosos[1] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Terceiro Mistério contemplamos <?= $misterios_luminosos[2] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quarto Mistério contemplamos <?= $misterios_luminosos[3] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p>Quinto Mistério contemplamos <?= $misterios_luminosos[4] ?></p>
	<p><?= $pai_nosso ?></p>
	<?php
	for ($i = 0; $i < 10; $i++) {
		echo "<p>" . $ave_maria . "</p>";
	}
	?>
	<p><?= $gloria_ao_pai ?></p>
	<p><?= $o_meu_jesus ?></p>

	<p><?= $infinitas_gracas ?></p>
	<p><?= $salve_rainha ?></p>

</div>

<div class="barra-de-ferramentas">
	<label for="voiceSelect">Voz:</label>
	<select id="voiceSelect"></select>
	<button id="btnEscutar" type="button" class="btn">Escutar</button>
</div>

<script>
	function selecionarTexto() {
		const elemento = document.querySelector('.misterio[style*="display: block"]');
		if (elemento) {
			const range = document.createRange();
			range.selectNodeContents(elemento);
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(range);
		}
	}

	function selecionarMisterio(misterio) {
		// Esconder todos os mistérios
		document.querySelectorAll('.misterio').forEach(el => {
			el.style.display = 'none';
		});

		// Remover todas as classes de cor do corpo
		document.body.classList.remove('corpo-gozosos', 'corpo-dolorosos', 'corpo-gloriosos', 'corpo-luminosos');

		// Mostrar o mistério selecionado e aplicar cor
		const elemento = document.getElementById(misterio);
		if (elemento) {
			elemento.style.display = 'block';
			document.body.classList.add('corpo-' + misterio);
		}
	}

	// Inicializar com a cor do primeiro mistério (Gozosos)
	document.addEventListener('DOMContentLoaded', function() {
		document.body.classList.add('corpo-gozosos');

		const voiceSelect = document.getElementById("voiceSelect");
		const btnEscutar = document.getElementById("btnEscutar");

		// Popular seletor de vozes
		function popularVozes() {
			const synth = window.speechSynthesis;
			const voices = synth.getVoices();
			voiceSelect.innerHTML = "";
			voices.forEach((voice, i) => {
				const option = document.createElement("option");
				option.value = i;
				option.textContent = `${voice.name} (${voice.lang})${voice.default ? " [padrão]" : ""}`;
				voiceSelect.appendChild(option);
			});
		}

		if ("speechSynthesis" in window) {
			popularVozes();
			window.speechSynthesis.onvoiceschanged = popularVozes;
		}

		if (btnEscutar) {
			btnEscutar.addEventListener("click", function() {
				const synth = window.speechSynthesis;
				const voices = synth.getVoices();
				const selected = voiceSelect.value;
				const misterioAtivo = document.querySelector('.misterio[style*="display: block"]');
				const texto = misterioAtivo.innerText;

				if (texto.trim() !== "") {
					const utter = new SpeechSynthesisUtterance(texto);
					if (voices[selected]) utter.voice = voices[selected];
					synth.cancel();
					synth.speak(utter);
				}
			});
		}
	});

	window.addEventListener('resize', function() {
		// Atualizar vozes ao redimensionar se necessário
		const voiceSelect = document.getElementById("voiceSelect");
		if (voiceSelect && voiceSelect.children.length === 0) {
			const synth = window.speechSynthesis;
			const voices = synth.getVoices();
			voices.forEach((voice, i) => {
				const option = document.createElement("option");
				option.value = i;
				option.textContent = `${voice.name} (${voice.lang})${voice.default ? " [padrão]" : ""}`;
				voiceSelect.appendChild(option);
			});
		}
	});
</script>
<!-- End - view/terco-lido.php -->