<?php
//dados de conex�o
$endereco="localhost";
$usuario="root";
$senha="";
$banco="eaot2013";
//conex�o
$conexao = mysql_connect("$endereco","$usuario","$senha");
$db = mysql_select_db("$banco",$conexao);
?>