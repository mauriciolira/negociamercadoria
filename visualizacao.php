<?php
	include'conexao.php';
	
	$resul_mercadoria = "SELECT * FROM mercadoria";
	$resultado_mercadoria = mysql_query($resul_mercadoria, $conexao);
?>
<html>
<head>
    	<meta charset="utf-8">
<style type="text/css">
body {
	background-image: url(bg.jpg);
	font-size: 24px;
	color: #0F2EE9;
}
</style>
</head>
        <body>
      		<table border="1">
            <tr>
            	<td nowrap="nowrap"  bgcolor="#F5F3F3" style="color: #F50909">Codigo da mercadoria</td>
            	<td bgcolor="#F5F3F3" style="color: #F50909">Tipo</td>
                <td bgcolor="#F5F3F3" style="color: #F50909">Nome</td>
                <td bgcolor="#F5F3F3" style="color: #F50909">Quantidade</td>
                <td bgcolor="#F5F3F3" style="color: #F50909">Preco</td>
                <td nowrap="nowrap" bgcolor="#F5F3F3" style="color: #F50909">Tipo do negócio</td>
                </tr>
                <?php 
					while($dado = mysql_fetch_array($resultado_mercadoria)){
						?>
                <tr>
					<td bgcolor="#F5F3F3" style="color: #F50909"><div align="center"><?php echo $dado ["cod_merc"];?> </div></td>
					<td bgcolor="#F5F3F3" style="color: #F50909"><?php echo $dado ["tipo"];?> </td>
					<td bgcolor="#F5F3F3" style="color: #F50909"><?php echo $dado ["nome"];?> </td>
					<td bgcolor="#F5F3F3" style="color: #F50909"><?php echo $dado ["quantidade"];?> </td>
					<td bgcolor="#F5F3F3" style="color: #F50909"><?php echo $dado ["preco"];?> </td>
					<td bgcolor="#F5F3F3" style="color: #F50909"><div align="center"><?php echo $dado ["tipo_do_negocio"];?> </td>
                  </tr>
				<div align="justify">
				  <?php } ?>
				  <?php
					echo  "Tipo do negocio<br>
					1= Compra<br>
					2= Vende<br>";
					?>
			  </div>
			</table><br><br>
            	<a href="http://localhost/appweb/cadastromercadoria.php" target="_blank" style="color: #E9EF0B">CLIQUE AQUI PARA CONTINUAR</a> 
            </form>
        </body>
</html>
        