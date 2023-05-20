<?php 

include 'conecta_mysql.inc';

$nome 			 = $_POST['titulo'];
$corpo 			 = $_POST['corpo'];
$autor  	 	 = $_POST['autor'];
$src  	 	     = $_POST['src'];


$sql = "INSERT INTO `noticias` ( `titulo`, `corpo`, `autor`, `src`) VALUES ('$nome','$corpo','$autor', '$src')";

if ($conexao->query($sql) === TRUE) {
	echo  "noticia incluída com sucesso!";
	header("location: ..\Noticiario\cards\index.php");
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

