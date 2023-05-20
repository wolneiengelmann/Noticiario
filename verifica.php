<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$titulo 		 = $_POST['titulo'];
$corpo 			 = $_POST['corpo'];
$autor  	 	 = $_POST['autor'];
$src  	 	     = $_POST['src'];
$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($titulo)) {
	echo "Digite um título.<br>";
	$erro = 1;
}

//Verifica se o campo cidade está em branco
if (empty($corpo)) {
	echo "Digite a notícia!.<br>";
	$erro = 1;
}

if (empty($src)) {
	echo "Digite o link de uma imagem<br>";
	$erro = 1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.inc';
}

 ?>
</body>
</html>