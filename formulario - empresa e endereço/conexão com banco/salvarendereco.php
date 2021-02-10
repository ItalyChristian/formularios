<?php 

	include_once('conecta.php');

	$cep = $_POST['cep'];
	$logradouro = $_POST['logradouro'];
	$bairro = $_POST['nome_contato'];
	$cidade = $_POST['email'];
	$estado = $_POST['telefone'];
	$complemento = $_POST['telefone'];
	$numero = $_POST['telefone'];
	$comentario = $_POST['telefone'];

	$sql = "INSERT INTO endereco SET cep = '$cep', logradouro = 'logradouro', bairro = '$bairro', cidade = '$cidade', estado = '$estado', complemento = '$complemento'. numero = '$numero', comentario = 'comentario'";
	$sql = $pdo->query($sql);

	 header('Location: endereco.html');

} catch(PDOException $e) {
	header('Location: erro.html');

?>