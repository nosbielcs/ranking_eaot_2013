<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen"/>
<title>EAOT 2013 - Resultados Parciais</title>
</head>
<body>
<h3>Resultados parciais - EAOT 2013</h3>
<form id="form1" name="form1" method="post" action="index.php">
  <p>
    <label>Escolha uma Especialidade
    <select name="especialidade" id="especialidade">
      <option value="TODOS">Todas as Especialidades</option>
      <option value="ANS">Análise de Sistemas</option>
      <option value="ASS">Serviço Social</option>
      <option value="ADM">Administracão</option>
      <option value="CCO">Ciencias Contabeis</option>
      <option value="ECO">Economia</option>
      <option value="EST">Estatística</option>
      <option value="JOR">Jornalismo</option>
      <option value="PSE">Psicologia Educacional</option>
      <option value="PSL">Psicologia Clinica</option>
      <option value="PSO">Psicologia Organizacional</option>
      <option value="REP">Relações Públicas</option>
      <option value="SJU">Serviços Jurídicos</option>
    </select>
    </label>
    <label>
    <input type="submit" name="ok" id="ok" value="Submit" />
    </label>
  </p>
</form>
<?php
//conecta ao banco
include "conexao.php";

//sentença sql
if (isset($_POST['especialidade'])==FALSE){
	$sql = "SELECT especialidade, nome, mediaParcial, localidade FROM dados ORDER BY especialidade";
}
elseif ($_POST['especialidade']=="TODOS"){
	$sql = "SELECT especialidade, nome, mediaParcial, localidade FROM dados ORDER BY especialidade";
}
else{
	$sql = "SELECT especialidade, nome, mediaParcial, localidade FROM dados WHERE especialidade ";
	$sql = $sql . "=";
	$especialidadeSelecionada = $_POST['especialidade'];
	$sql = $sql . "'$especialidadeSelecionada'";
	$sql = $sql . "ORDER BY mediaParcial desc";
}

//armazena o resultado e conta o total de registros
$result = mysql_query($sql, $conexao);
$totalRegistros = mysql_num_rows($result);
?>

<?php
//Exibe todas as especialidades
if ((isset($_POST['especialidade'])==FALSE) || ($_POST['especialidade']=="TODOS")){
	?>
    <table cellspacing="0">
    <thead>
      <tr bgcolor="#999999">
        <td>Especialidade</td>
        <td>Nome</td>
        <td>Média Parcial</td>
        <td>Localidade</td>
      </tr>
    </thead>
	<?php
        $linha=1;
        while ($reg = mysql_fetch_array($result)){
            $especialidade = $reg["especialidade"];
            $nome = $reg["nome"];
            $mediaParcial = $reg["mediaParcial"];
            $localidade = $reg["localidade"];
            //cria linhas cor sim | não diferentes para cada especialidade
            $colora="#ddd";
            $colorb="#ccc";
            switch($especialidade){
            case "ANS": 
                $colora="#ddd";
                $colorb="#ccc";
                break;	
            case "ASS": 
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "ADM": 
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "CCO": 
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "ECO": 
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "EST":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "JOR":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "PSE":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "PSL":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "PSO":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "REP":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            case "SJU":
                $colora="#ddd";
                $colorb="#ccc";
                break;
            }
    
            if ($linha % 2==0){
    			//tabela com os dados
                echo "<tr bgcolor='";
                echo "$colora";
                echo "'>";
                echo "<td>";
                echo $especialidade;
                echo "</td>";
                echo "<td>";
                echo $nome;
                echo "</td>";
                echo "<td>";
                echo round($mediaParcial,2);
                echo "</td>";
                echo "<td>";
                echo $localidade;
                echo "</td>";
                echo "</tr>";
                }
            else{
   				//tabela com os dados
                echo "<tr bgcolor='";
                echo "$colorb";
                echo "'>";
                echo "<td>";
                echo $especialidade;
                echo "</td>";
                echo "<td>";
                echo $nome;
                echo "</td>";
                echo "<td>";
                echo round($mediaParcial,2);
                echo "</td>";
                echo "<td>";
                echo $localidade;
                echo "</td>";
                echo "</tr>";
                }
        $linha += 1;
        }
    	//libera a conexão
        mysql_free_result($result);
        mysql_close($conexao);
//Fechamento quando exibe todos
}
//Exibe uma especilidade especifica
else{
?>
<table cellspacing="0">
  <thead>
    <tr bgcolor="#999999">
      <td>Especialidade</td>
      <td>Posição</td>
      <td>Nome</td>
      <td>Média Parcial</td>
      <td>Localidade</td>
    </tr>
  </thead>
	<?php
	$linha=1;
	$posicao=1;
	while ($reg = mysql_fetch_array($result)){
		$especialidade = $reg["especialidade"];
		$nome = $reg["nome"];
		$mediaParcial = $reg["mediaParcial"];
		$localidade = $reg["localidade"];
		//cria linhas cor sim | não

		if ($linha % 2==0){
			//tabela com os dados
			echo "<tr bgcolor='DDDDDD'>";
			echo "<td>";
			echo $especialidade;
			echo "</td>";
			echo "<td>";
			echo $posicao;
			echo "</td>";
			echo "<td>";
			echo $nome;
			echo "</td>";
			echo "<td>";
			echo round($mediaParcial,2);
			echo "</td>";
			echo "<td>";
			echo $localidade;
			echo "</td>";
			echo "</tr>";
		}
		else{
			//tabela com os dados
			echo "<tr bgcolor='#EEEEEE'>";
			echo "<td>";
			echo $especialidade;
			echo "</td>";
			echo "<td>";
			echo $posicao;
			echo "</td>";
			echo "<td>";
			echo $nome;
			echo "</td>";
			echo "<td>";
			echo round($mediaParcial,2);
			echo "</td>";
			echo "<td>";
			echo $localidade;
			echo "</td>";
			echo "</tr>";
			}
	$linha += 1;
	$posicao +=1;
	}
//libera a conexão
mysql_free_result($result);
mysql_close($conexao);
?>
<?php
}
?>
</table>
<p>
<?php
//exibe o tal de registros
echo "Total de candidatos: " . $totalRegistros;
?>
</p>
<p>Você ainda não colocou seus resultados? <a href="index1.php">Então clique aqui.</a></p>
<p>Está com algum problema para utilizar o sistema? <a href="http://www.cleibsonalmeida.blog.br/site/fale-comigo/">Clique aqui e fale comigo.</a></p>
<p> </p>
</body>
</html>
