<?php
// Sessão
session_start();
// Conexão
require_once 'banco.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobre']);
    $celular = clear($_POST['celular']);
	$email = clear($_POST['email']);
	$dataAni = clear($_POST['dataAni']);

$sql = "INSERT INTO agenda (nome, sobre,celular, email, dataAni) VALUES ('$nome', '$sobre', $celular, 
    '$email', '$dataAni')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../lista.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../lista.php');
	endif;
endif;