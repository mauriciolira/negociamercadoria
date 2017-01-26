<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mercadoria</title> 
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-image: url(background%20image.jpg);
}
</style>
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/berkshire-swash:n4:default.js" type="text/javascript"></script>

<script type="text/javascript">
function validacao() {
	if(document.form1.tipo.value == "") {
		alert("Por favor, indique tipo da mercadoria.");
		document.form1.tipo.focus();
		return false;
		}
	if(document.form1.nome.value == ""){
		alert("Por favor, insira o nome da mercadoria.");
		document.form1.nome.focus();
		return false;
		}
	if(document.form1.quantidade.value == "") {
		alert("Por favor, indique a quantidade da mercadoria.");
		document.form1.quantidade.focus();
	return false;
		}
	if(document.form1.preco.value == ""){
	alert("Por favor, insira o preço da mercadoria.");
		document.form1.preco.focus();
		return false;
		}

}
</script>
</head>
<body>
<a href="http://negociamercadoria.hopto.org:888/appweb/cadastromercadoria.php" target="_blank" style="color: #E9EF0B">CLIQUE AQUI PARA VISUALIZAR A LISTA DE OPERAÇÕES</a> 	
<form name="form1" method="post" action="obtemcadastro.php" onsubmit="return validacao();">
<div align="center">
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2" align="center" valign="middle" bgcolor="#F40C0C"><h1>
        <span style="color: #FCFCFC; font-size: x-large;">Plataforma de Negociação de Mercadorias</span></td>
      </tr>
    <tr>
      <td width= "200" bgcolor="#F5A8AA"><h2><strong>TIPO</strong></h2></td>
      <td width= "200"><input name="tipo" type= "text" size= "50" /> </td>
      </tr>
    <tr>
      <td width= "184" bgcolor="#F5A8AA"><h2>NOME</h2></td>
      <td><input name="nome" type= "text" size= "50"/> </td>
      </tr>
    <tr>
      <td bgcolor="#F5A8AA"><h2>QUANTIDADE</h2></td>
      <td><input name="quantidade" type= "text" size= "10"/> </td>
      </tr>
    <tr>
      <td width= "100" bgcolor="#F5A8AA"><h2>PREÇO</h2></td>
      <td><input name="preco" type= "text" size= "10"/> </td>
      </tr>
    <tr>
      <td bgcolor="#F5A8AA"><h2>TIPO DO NEGOCIO</h2></td>
      <td>
      <?php
		include "conexao.php";
		
	?>
      <select name="tipo_do_negocio">
      <?php
        	$resul_tipo_do_negocio = "select * from tipo_negocio";
			$resultado_tipo_do_negocio = mysql_query($resul_tipo_do_negocio, $conexao);
			while($dados = mysql_fetch_array($resultado_tipo_do_negocio)){
			$id = $dados['id'];
			$valor = $dados['valor'];
			echo "<option value = '$id'>$valor</option>";	
			}
		?>
      </td>  <tr>
      <td>
    </table>
</div>
<div align="center">
  <span style="font-size: xx-large; color: #FFFFFF;">
  <button id="Button1" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size: large; font-weight: bolder; font-style: inherit; text-align: center;">Confirmar Registro</button>
  </span></div>
</form>
<div align="center"> </div>
<div align="center"><span style="font-size: x-large"></span>  

</div>
<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});

<input 
</body>
</html>
$(function() {
	$( "#Button2" ).button(); 
});
  
