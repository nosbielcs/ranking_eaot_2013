<?php
include "conexao.php";
//recebendo os dados do formulário
$especialidade = $_POST['especialidade'];
$nomeInicial = $_POST['nome'];
$nome = strtoupper($nomeInicial);
$notaPortugues = $_POST['notaPortugues'];
$notaEspecifica = $_POST['notaEspecifica'];
$localidade = $_POST['localidade'];
$email = $_POST['email'];
$mediaParcial = (((2*$notaEspecifica/30)+$notaPortugues/30)/3)*100;

//verifica se as variáveis estão vazias (pode ser usado a ISSET também)
if ($especialidade==NULL || $nomeInicial==NULL || $notaPortugues==NULL || $notaEspecifica==NULL || $localidade==NULL || $email==NULL){
	//redirecionando para uma página de mensagem de erro
	header("location: index4.php");
}
else{
	//inserção dos dados no banco
	$sql = "INSERT INTO dados ";
	$sql = $sql . "(especialidade, ";
	$sql = $sql . "nome, ";
	$sql = $sql . "notaPortugues, ";
	$sql = $sql . "notaEspecifica, ";
	$sql = $sql . "localidade, ";
	$sql = $sql . "email, ";
	$sql = $sql . "mediaParcial) ";
	//passagem dos valores
	$sql = $sql . "VALUES('$especialidade', ";
	$sql = $sql . "'$nome', ";
	$sql = $sql . "'$notaPortugues', ";
	$sql = $sql . "'$notaEspecifica', ";
	$sql = $sql . "'$localidade', ";
	$sql = $sql . "'$email', ";
	$sql = $sql . "'$mediaParcial') ";
	//fechando a conexão
	mysql_query($sql, $conexao);
	mysql_close($conexao);
	//redirecionando para uma página de mensagem de sucesso
	header("location: index3.php");
}
?>