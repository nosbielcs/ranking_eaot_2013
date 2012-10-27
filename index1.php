<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen"/>
<title>EAOT 2013 - Resultado preliminar</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h3>Informe os dados abaixo e clique em |SUBMIT|</h3>
<p>Seja verdadeiro(a), não manipule as informações. Isso vai ajudar você e teus colegas!</p>
<p>Hoje, podemos ser concorrentes. Amanhã, poderemos ser colegas de trabalho. Pense nisso!</p>


<form id="form1" name="form1" method="post" action="index2.php">
  <p><span id="spryselect1">
    <label>Especialidade
    <select name="especialidade" id="especialidade">
      <option>Escolha uma opção</option>
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
  <span class="selectRequiredMsg">Por favor, selecione sua especialidade.</span></span></p>
  <p>Iniciais do seu nome 
    <span id="sprytextfield1">
    <label>
    <input name="nome" type="text" id="nome" maxlength="5" />
    </label>
    <span class="textfieldRequiredMsg">Por favor digite as iniciais do teu nome.</span><span class="textfieldMinCharsMsg">Digite pelo menos 2 caracteres.</span><span class="textfieldMaxCharsMsg">Digite no máximo 5 caracteres.</span></span> Ex: João Carlos da Silva = JCS</p>
  <p><span id="sprytextfield2">
  <label>Acertos na prova de português
  <input name="notaPortugues" type="text" id="notaPortugues" maxlength="2" />
  </label>
  <span class="textfieldRequiredMsg">Este campo é obrigatório.</span><span class="textfieldInvalidFormatMsg">Isto não é um número.</span><span class="textfieldMaxValueMsg">Digite um valor entre 0 e 30.</span><span class="textfieldMinCharsMsg">Digite um valor entre 0 e 30.</span><span class="textfieldMaxCharsMsg">Digite um valor entre 0 e 30.</span></span></p>
  <p><span id="sprytextfield3">
  <label>Acertos na prova específica
  <input name="notaEspecifica" type="text" id="notaEspecifica" maxlength="2" />
  </label>
  <span class="textfieldRequiredMsg">Este campo é obrigatório.</span><span class="textfieldInvalidFormatMsg">Isto não é um número.</span><span class="textfieldMinCharsMsg">Digite um valor entre 0 e 30.</span><span class="textfieldMaxCharsMsg">Digite um valor entre 0 e 30.</span><span class="textfieldMaxValueMsg">Digite um valor entre 0 e 30.</span></span></p>
  <p>
  <span id="spryselect2">
    <label>Local onde fez a prova    </label>
    <label>
    <select name="localidade" id="localidade">
      <option>Escolha um Local</option>
      <option value="PA">Belém</option>
      <option value="PE">Recife</option>
      <option value="BA">Salvador</option>
      <option value="CE">Fortaleza</option>
      <option value="RN">Natal</option>
      <option value="RJ">Rio de Janeiro</option>
      <option value="MG">Belo Horizonte</option>
      <option value="SP">São Paulo</option>
      <option value="MS">Campo Grande</option>
      <option value="RS">Porto Alegre</option>
      <option value="PR">Curitiba</option>
      <option value="SC">Florianópolis</option>
      <option value="DF">Brasilia</option>
      <option value="AM">Manaus</option>
        </select>
    </label>
    <span class="selectRequiredMsg">Escolha uma localidade.</span></span></p>
  <p>E-mail 
    <span id="sprytextfield5">
    <label>
    <input type="text" name="email" id="email" />
    </label>
    <span class="textfieldRequiredMsg">Este campo não deve estar vazio.</span><span class="textfieldInvalidFormatMsg">Informe teu e-mail.</span></span>  </p>
  <p>
    <label>
    <input type="submit" name="enviar" id="enviar" value="Submit" />
    </label>
  </p>
  <p>Os dados sobre tua especialidade serão enviados para o e-mail informado.</p>
</form>
<p><a href="index.php">Voltar para página de resultados parciais</a></p>
<p> </p>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:2, maxChars:5});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {minValue:0, maxValue:30, minChars:1, maxChars:2});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {minChars:1, maxChars:2, minValue:0, maxValue:30});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
//-->
</script>
</body>
</html>
