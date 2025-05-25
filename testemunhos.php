<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Savino</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="provida.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="provida.css">
</head>
<body>
	<?php
	    // Os testemunhos irão ser controlados por todos os métodos presentes na classe "ControllerTestemunhos"
		include_once "ControllerTestemunho.php";
		session_start(); // Uma sessão irá ser aberta. Essa sessão é necessária para não haver repetição de dados no banco ao clicar no F5.
		$testemunho = new ControllerTestemunho(); 
		$testemunho->registerTestemunho(); // O método registerTestemunho() irá fazer a lógica de registro dos testemunhos.
	?>
<div id="fundo-externo">
	<div id="fundo">
		<img src="imgPv/providaUfpa.png" alt="Provida" />
	</div>
</div>
<div id="site">
<h1>TESTEMUNHOS</h1>
<h1><strong><a href="testemunhos.php" alt="Apresentação" style="text-decoration:none">“ o Reino de Deus è a coordenação de todas as forças positivas que existem no mundo a fim de que consigam transformar a vida numa nova e apreciável realidade sem dores, sem fome, sem guerras, sem doenças   <br>e   nenhum   outro   mal.". <br>(Savino Mombelli)</a></strong></h1>
<div id="menu">
<a href="./savinoPortugues.html" style="text-decoration:none">Savino</a>
<a href="./impressos/historiaPadreSavino.pdf"target="_blank"style="text-decoration:none">Histórico</a>
<a href="./impressos.html" style="text-decoration:none">Reflexões</a>
<a href="./imagSv.html"style="text-decoration:none">Imagens</a><br><br>
</div>
<div>
	<form id = "formulario" action="testemunhos.php" method="post">        
            Nome: <input type="text" id="nome" name="nome" size="50" required/>
            <br>
            Email: <input type="text" id="email" name="email" size="50" required/>
            <br>
			Testemunho: <textarea id="testemunho" name="testemunho" rows="10" cols="100" required></textarea> <br/><br/>
            <input type="submit" value="Enviar" onclick="verificacao()"/> 
     </form> 
</div>
<BLOCKQUOTE>
		<p>
		<a href="./mostratestem.php" style="text-decoration:none"><h3>Veja os testemunhos registrados</h3></a><br><br>
		</p>
</BLOCKQUOTE>
</div>
	<script src="validacao.js"></script>
</body>
</html>