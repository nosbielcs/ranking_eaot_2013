<?php
//dados de conexão
$endereco="localhost";
$usuario="root";
$senha="";
$banco="eaot2013";
//conexão
$conexao = mysql_connect("$endereco","$usuario","$senha");
$db = mysql_select_db("$banco",$conexao);
?>