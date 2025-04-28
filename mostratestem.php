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
<div id="fundo-externo">
	<div id="fundo">
		<img src="imgPv/providaUfpa.png" alt="Provida" />
	</div>
</div>
<div id="site">
<h1>TESTEMUNHOS</h1></a>
<h1><strong><a href="savinoPortugues.html" alt="Apresentação" style="text-decoration:none">“ o Reino de Deus è a coordenação de todas as forças positivas que existem no mundo a fim de que consigam transformar a vida numa nova e apreciável realidade sem dores, sem fome, sem guerras, sem doenças   <br>e   nenhum   outro   mal."</u>. <br>(Savino Mombelli)</a></strong></h1>
<div id="menu">
<a href="./savinoPortugues.html" style="text-decoration:none">Savino</a>
<a href="./impressos/historiaPadreSavino.pdf"target="_blank"style="text-decoration:none">Histórico</a>
<a href="./impressos.html" style="text-decoration:none">Reflexões</a>
<a href="./imagSv.html"style="text-decoration:none">Imagens</a>
<a href="./testemunhos.php"style="text-decoration:none">Testemunho</a><br><br>
</div>
<div>
<table id="tabela" border = '2'>

<tr>
  <th>id</th>
  <th>Nome</th>
  <th>Email</th>
  <th>Testemunho</th>
</tr>

<?php 
    include_once 'ControllerTestemunho.php';
    $controllerTestemunho = new ControllerTestemunho();
    $controllerTestemunho->showTestemunhos();
?>
</table>
</div>
</body>
</html>
