<?php 

include 'conexao.php';

$sql = mysql_query("INSERT INTO mercadoria (tipo, nome, quantidade, preco, tipo_do_negocio) 

values 

('".$_POST['tipo']."', '".$_POST['nome']."', '".$_POST['quantidade']."', '".$_POST['preco']."', '".$_POST['tipo_do_negocio']."')");
		
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0, URL=http://179.228.49.69:888/appweb/visualizacao.php'>
			<script type = \"text/javascript\">
				alert(\"Mercadoria confirmada!\");
			</script>";
	
	?>
