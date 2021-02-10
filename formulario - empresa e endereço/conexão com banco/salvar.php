<?php 

	include_once('conecta.php');

	$razao = $_POST['razao'];
	$cnpj = $_POST['cnpj'];
	$nome_contato = $_POST['nome_contato'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	$sql = "INSERT INTO dados SET razao = '$razao', cnpj = '$cnpj', nome_contato = '$nome_contato', email = '$email', telefone = 'telefone'";
	$sql = $pdo->query($sql);

	 header('Location: endereco.html');

} catch(PDOException $e) {
	header('Location: erro.html');
}

?>